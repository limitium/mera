<?php

namespace Mera\AuditBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mera\AuditBundle\Entity\Building;
use Mera\AuditBundle\Classes\UploadHandler;
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

        $collections = array("Buildings", "ConstructElements", "ConsumptionMeters", "ElectroEquipments", "FuelConsumptions", "LightsSystems", "Personals", "Pipelines");

        $originalCollections = array();
        foreach ($collections as $collection) {
            $getter = "get" . $collection;
            $originalCollections[$collection] = array();
            foreach ($common->$getter() as $relatedObject) {
                $originalCollections[$collection][] = $relatedObject;
            }
        }

        $form->bind($request);

        foreach ($collections as $collection) {
            $getter = "get" . $collection;
            foreach ($common->$getter() as $relatedObject) {

                $relatedObject->setCommon($common);

                foreach ($originalCollections[$collection] as $key => $oldRelatedObject) {
                    if ($oldRelatedObject->getId() == $relatedObject->getId()) {
                        unset($originalCollections[$collection][$key]);
                    }
                }
            }
        }

        foreach ($originalCollections as $collection => $relatedObjects) {
            foreach ($relatedObjects as $toDelete) {
                $remove = "remove" . substr($collection, 0, -1);
                $common->$remove($toDelete);
                $em->remove($toDelete);
            }
        }

        $em->persist($common);
        $em->flush();

        return $this->redirect($this->generateUrl('audit'));
    }

    /**
     * Save a Audit audit.
     *
     * @Route("/file", name="audit_file")
     * @Method("POST")
     */
    public function fileAction(Request $request)
    {
//        $em = $this->getDoctrine()->getEntityManager();
//
//        if(!$projet = $em->getRepository('BoldPrezBundle:Projet')->find($id)) {
//            throw $this->createNotFoundException('Le projet[id='.$id.'] n\'existe pas.');
//        }
//        $client = $projet->getClient();
//
        $request = $this->get('request');

        $options = array(
            'upload_dir' => dirname($_SERVER['SCRIPT_FILENAME']) . '/img/scans/',
            'image_versions' => array(
                'thumbnail' => array(
                    'upload_dir' => dirname($_SERVER['SCRIPT_FILENAME']) . '/img/thumbnails/',
                    'max_width' => 80,
                    'max_height' => 80
                )
            )
        );
        $upload_handler = new UploadHandler($options, "");


        switch ($request->getMethod()) {
            case 'OPTIONS':
                break;
            case 'HEAD':
            case 'GET':
                $upload_handler->get();
                break;
            case 'POST':
                if ($request->get('_method') === 'DELETE') {
                    $upload_handler->delete();
                } else {
                    $upload_handler->post();
                }
                break;
            case 'DELETE':
                $upload_handler->delete();
                break;
            default:
                header('HTTP/1.1 405 Method Not Allowed');
        }

        $response = new Response();
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate');
        $response->headers->set('Content-Disposition', 'inline; filename="files.json"');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'OPTIONS, HEAD, GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'X-File-Name, X-File-Type, X-File-Size');
        return $response;
    }

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
