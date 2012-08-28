<?php

namespace Mera\AuditBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mera\ManageBundle\Entity\Facility;
use Mera\AuditBundle\Entity\Building;
use Mera\ManageBundle\Form\FacilityType;

/**
 * Facility controller.
 *
 * @Route("/facility")
 */
class FacilityController extends Controller
{
    /**
     * Lists all Facility entities.
     *
     * @Route("/", name="facility")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MeraAuditBundle:Facility')->findAll();

        return array(
            'entities' => $entities,
        );
    }


    /**
     * Finds and displays a Facility facility.
     *
     * @Route("/{id}/audit", name="facility_audit")
     * @Template()
     */
    public function auditAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $facility = $em->getRepository('MeraAuditBundle:Facility')->find($id);

        if (!$facility) {
            throw $this->createNotFoundException('Unable to find Facility facility.');
        }
        $facility->addBuilding(new Building());

        $form = $this->createForm(new FacilityType(), $facility);

        return array(
            'facility' => $facility,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Facility facility.
     *
     * @Route("/{id}/show", name="facility_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $facility = $em->getRepository('MeraAuditBundle:Facility')->find($id);

        if (!$facility) {
            throw $this->createNotFoundException('Unable to find Facility facility.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'facility' => $facility,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Facility facility.
     *
     * @Route("/new", name="facility_new")
     * @Template()
     */
    public function newAction()
    {
        $facility = new Facility();
        $form = $this->createForm(new FacilityType(), $facility);

        return array(
            'facility' => $facility,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a new Facility facility.
     *
     * @Route("/create", name="facility_create")
     * @Method("POST")
     * @Template("MeraAuditBundle:Facility:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $facility = new Facility();
        $form = $this->createForm(new FacilityType(), $facility);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facility);
            $em->flush();

            return $this->redirect($this->generateUrl('facility_show', array('id' => $facility->getId())));
        }

        return array(
            'facility' => $facility,
            'form' => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Facility facility.
     *
     * @Route("/{id}/edit", name="facility_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $facility = $em->getRepository('MeraAuditBundle:Facility')->find($id);

        if (!$facility) {
            throw $this->createNotFoundException('Unable to find Facility facility.');
        }

        $editForm = $this->createForm(new FacilityType(), $facility);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'facility' => $facility,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Facility facility.
     *
     * @Route("/{id}/update", name="facility_update")
     * @Method("POST")
     * @Template("MeraAuditBundle:Facility:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $facility = $em->getRepository('MeraAuditBundle:Facility')->find($id);

        if (!$facility) {
            throw $this->createNotFoundException('Unable to find Facility facility.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FacilityType(), $facility);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($facility);
            $em->flush();

            return $this->redirect($this->generateUrl('facility_edit', array('id' => $id)));
        }

        return array(
            'facility' => $facility,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Facility facility.
     *
     * @Route("/{id}/delete", name="facility_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $facility = $em->getRepository('MeraAuditBundle:Facility')->find($id);

            if (!$facility) {
                throw $this->createNotFoundException('Unable to find Facility facility.');
            }

            $em->remove($facility);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('facility'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm();
    }
}
