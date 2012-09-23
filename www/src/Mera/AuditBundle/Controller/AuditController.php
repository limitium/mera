<?php

namespace Mera\AuditBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mera\AuditBundle\Entity\Building;
use Mera\AuditBundle\Entity\ConstructElement;
use Mera\AuditBundle\Form\CommonType;

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
