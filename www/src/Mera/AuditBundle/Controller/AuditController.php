<?php

namespace Mera\AuditBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mera\AuditBundle\Entity\Building;
use Mera\AuditBundle\Entity\FloorPlan;
use Mera\AuditBundle\Classes\Uploader;
use Mera\AuditBundle\Form\CommonType;
use Symfony\Component\HttpFoundation\Response;

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
     * @Route("/", name="audit")
     * @Template()
     */
    public function auditAction()
    {

        $common = $this->getCommon();

        $form = $this->createForm(new CommonType(), $common);

        return array(
            'common' => $common,
            'form' => $form->createView(),
        );
    }


    /**
     * Save a Audit audit.
     *
     * @Route("/save", name="audit_save")
     * @Method("POST")
     * @Template("MeraAuditBundle:Audit:audit.html.twig")
     */
    public function saveAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $common = $this->getCommon();
        $form = $this->createForm(new CommonType(), $common);

        $collections = array(
            "Buildings",
            "ConstructElements",
            "ConsumptionMeters",
            "ElectroEquipments",
            "FuelConsumptions",
            "LightsSystems",
            "Pipelines",
            "FuelConsumptions",
            "ExecutivePersons",
            "Personals",

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
                $toDelete->setCommon(null);
            }
        }

        $em->persist($common);
        $em->flush();


        return $this->redirect($this->generateUrl('audit'));
    }

    /**
     * Upload image
     * @Route("/file", name="audit_file_upload")
     * @Method("POST")
     */
    public function uploadAction()
    {
        $upload_handler = $this->getHandler();
        $upl = $upload_handler->post();

//        $file = new FloorPlan();
//        $file->setCommon($this->getCommon());
//        $file->setName($upl[0]->hash);
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($file);
//        $em->flush();

        return $this->getUploadResponse($upl);
    }

    /**
     * Detele image
     * @Route("/file/{fileName}", name="audit_file_delete")
     * @Method("DELETE")
     */
    public function deleteUploadAction($fileName)
    {
        $upload_handler = $this->getHandler();
        $upl = $upload_handler->deleteFile($fileName);
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

    private function getHandler()
    {
        $userId = $this->getCommon()->getFacility()->getUser()->getId();
        $options = array(
            'upload_dir' => $this->getUploadDir(),
            'upload_url' => $this->getRequest()->getBasePath() . "/img/scans/$userId/",
            'image_versions' => array(
                'thumbnail' => array(
                    'upload_url' => $this->getRequest()->getBasePath() . "/img/thumbnails/$userId/",
                    'upload_dir' => $this->getThumbDir(),
                    'max_width' => 80,
                    'max_height' => 80
                )
            ),
            'router' => $this->get('router')
        );
        $upload_handler = new Uploader($options);
        return $upload_handler;
    }

    private function getThumbDir()
    {
        $userId = $this->getCommon()->getFacility()->getUser()->getId();
        return dirname($_SERVER['SCRIPT_FILENAME']) . "/img/thumbnails/$userId/";
    }

    private function getUploadDir()
    {
        $userId = $this->getCommon()->getFacility()->getUser()->getId();
        return dirname($_SERVER['SCRIPT_FILENAME']) . "/img/scans/$userId/";
    }

    /**
     * @return \Mera\AuditBundle\Entity\Common
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    private function getCommon()
    {
        $user = $this->getUser();

        //check role

        $common = $user->getFacility()->getCommon();

        if (!$common) {
            throw $this->createNotFoundException('Unable to find Audit audit.');
        }
        return $common;
    }
}
