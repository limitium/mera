<?php

namespace Mera\AuditBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mera\AuditBundle\Entity\Building;
use Mera\AuditBundle\Entity\Common;
use Mera\AuditBundle\Classes\Uploader;
use Mera\AuditBundle\Form\CommonType;
use Mera\AuditBundle\Event\CommonUpdateEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Audit controller.
 *
 * @Route("/audit")
 */
class AuditController extends Controller
{


    /**
     * Finds and displays a Audit audit.
     *
     * @Route("/", name="main")
     */
    public function mainAction()
    {
        if ($this->getUser()->hasRole("admin")) {
            return $this->redirect($this->generateUrl("facility"));
        }
        $common = $this->getUser()->getFacility()->getCommon();
        return $this->forward("MeraAuditBundle:Audit:audit", array("id" => $common->getId()));
    }

    /**
     * Finds and displays a Audit audit.
     *
     * @Route("/{id}", name="audit")
     * @Template()
     */

    public function auditAction($id)
    {
        $common = $this->getCommon($id);

        $form = $this->createForm(new CommonType(), $common);

        $this->container->get("event_dispatcher")->dispatch("audit.common_update", new CommonUpdateEvent($common, "open"));
        return array(
            'common' => $common,
            'form' => $form->createView(),
        );
    }


    /**
     * Save a Audit audit.
     *
     * @Route("/{id}/save", name="audit_save")
     * @Method("POST")
     * @Template("MeraAuditBundle:Audit:audit.html.twig")
     */
    public function saveAction(Request $request, $id)
    {
        $common = $this->getCommon($id);

        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new CommonType(), $common);

        $collections = array(
            "Buildings",
            "ConstructElements",
            "ConsumptionMeters",
            "ElectroEquipments",
            "LightsSystems",
            "Pipelines",
            "FuelConsumptions",
            "ExecutivePersons",
            "Personals",
            "ConsumptionResources",

            "Transformators",
            "FundsVolumes",
            "PersonalQuantitys",
            "ConsumedTariffs",
            "NaturalProductions",
        );

        $originalCollections = array();
        foreach ($collections as $collection) {
            $getter = "get" . $collection;
            $originalCollections[$collection] = array();
            foreach ($common->$getter() as $relatedObject) {
                $originalCollections[$collection][$relatedObject->getId()] = $relatedObject;
            }
        }

        $form->bind($request);

        foreach ($collections as $collection) {
            $getter = "get" . $collection;
            foreach ($common->$getter() as $relatedObject) {

                $relatedObject->setCommon($common);

                if (isset($originalCollections[$collection][$relatedObject->getId()])) {
                    unset($originalCollections[$collection][$relatedObject->getId()]);
                }
            }
        }

        foreach ($originalCollections as $collection => $relatedObjects) {
            foreach ($relatedObjects as $toDelete) {
                $remove = "remove" . substr($collection, 0, -1);
                $common->$remove($toDelete);
            }
        }

        $em->persist($common);
        $em->flush();

        $this->container->get("event_dispatcher")->dispatch("audit.common_update", new CommonUpdateEvent($common, "update"));

        $this->get('session')->getFlashBag()->add('notice', 'Изменения сохранены.');

        return $this->redirect($this->generateUrl('audit', array('id' => $common->getId())));
    }

    /**
     * Upload image
     * @Route("/{id}/file", name="audit_file_upload")
     * @Method("POST")
     */
    public function uploadAction($id)
    {
        $common = $this->getCommon($id);

        $fileType = $this->getRequest()->get("file_type");
        $fileClass = "Mera\\AuditBundle\\Entity\\" . $fileType;

        $upload_handler = $this->getHandler($common, $fileType);
        $upl = $upload_handler->post();
        $uplResp = $upl[0];


        $file = new $fileClass();
        $file->setCommon($common);
        $file->setName($uplResp->name);
        $file->setHashName($uplResp->hash);
        $file->setSize($uplResp->size);
        $file->setImageType($uplResp->type);

        $em = $this->getDoctrine()->getManager();
        $em->persist($file);
        $em->flush();

        $this->container->get("event_dispatcher")->dispatch("audit.common_update", new CommonUpdateEvent($common, "add file", $uplResp->name));

        return $this->getUploadResponse($upl);
    }

    /**
     * Detele image
     * @Route("/{id}/file/{fileType}/{fileName}", name="audit_file_delete")
     * @Method("DELETE")
     */
    public function deleteUploadAction($id, $fileType, $fileName)
    {
        $common = $this->getCommon($id);

        $em = $this->getDoctrine()->getManager();
        $file = $em->getRepository('MeraAuditBundle:' . $fileType)->findOneBy(array('hash_name' => $fileName));
        if (!$file) {
            throw $this->createNotFoundException('Unable to find File entity.');
        }

        $upload_handler = $this->getHandler($common, $fileType);
        $upl = $upload_handler->deleteFile($fileName);

        if ($upl == "true") {
            $em->remove($file);
            $em->flush();

            $this->container->get("event_dispatcher")->dispatch("audit.common_update", new CommonUpdateEvent($common, "delete file", $file->getName()));
        }

        return $this->getUploadResponse($upl);
    }


    private function getUploadResponse($upl)
    {
        $response = new Response(json_encode($upl));
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate');
        $response->headers->set('Content-Disposition', 'inline; filename="files.json"');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'OPTIONS, HEAD, GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'X-File-Name, X-File-Type, X-File-Size');
        return $response;
    }

    private function getHandler(Common $common, $fileType)
    {
        $userId = $common->getFacility()->getUser()->getId();
        $options = array(
            'file_type' => $fileType,
            'upload_dir' => dirname($_SERVER['SCRIPT_FILENAME']) . "/img/scans/$userId/$fileType/",
            'upload_url' => $this->getRequest()->getBasePath() . "/img/scans/$userId/$fileType/",
            'image_versions' => array(
                'thumbnail' => array(
                    'upload_url' => $this->getRequest()->getBasePath() . "/img/thumbnails/$userId/$fileType/",
                    'upload_dir' => dirname($_SERVER['SCRIPT_FILENAME']) . "/img/thumbnails/$userId/$fileType/",
                    'max_width' => 80,
                    'max_height' => 80
                )
            ),
            'router' => $this->get('router'),
            'common' => $common
        );
        $upload_handler = new Uploader($options);
        return $upload_handler;
    }

    /**
     * @return \Mera\AuditBundle\Entity\Common
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    private function getCommon($id)
    {
        $em = $this->getDoctrine()->getManager();
        $common = $em->getRepository('MeraAuditBundle:Common')->find($id);
        if (!$common) {
            throw $this->createNotFoundException('Unable to find Quiz for audit.');
        }

        $user = $this->getUser();
        if ($common->getFacility()->getUser() != $user && !$user->hasRole("admin")) {
            throw new AccessDeniedHttpException("Access denied.");
        }
        return $common;
    }
}
