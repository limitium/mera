<?php

namespace Mera\PostBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mera\PostBundle\Entity\PostOffice;
use Mera\PostBundle\Entity\Building;
use Mera\PostBundle\Form\PostOfficeType;
use Mera\PostBundle\Form\CommonType;

/**
 * PostOffice controller.
 *
 * @Route("/postoffice")
 */
class PostOfficeController extends Controller
{
    /**
     * Lists all PostOffice entities.
     *
     * @Route("/", name="postoffice")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MeraPostBundle:PostOffice')->findAll();

        return array(
            'entities' => $entities,
        );
    }


    /**
     * Finds and displays a PostOffice facility.
     *
     * @Route("/{id}/audit", name="postoffice_audit")
     * @Template()
     */
    public function auditAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $facility = $em->getRepository('MeraPostBundle:PostOffice')->find($id);

        if (!$facility) {
            throw $this->createNotFoundException('Unable to find PostOffice facility.');
        }
        $facility->addBuilding(new Building());

        $form = $this->createForm(new PostOfficeType(), $facility);

        return array(
            'facility' => $facility,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a PostOffice facility.
     *
     * @Route("/{id}/show", name="postoffice_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $facility = $em->getRepository('MeraPostBundle:PostOffice')->find($id);

        if (!$facility) {
            throw $this->createNotFoundException('Unable to find PostOffice facility.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'facility' => $facility,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new PostOffice facility.
     *
     * @Route("/new", name="postoffice_new")
     * @Template()
     */
    public function newAction()
    {
        $facility = new PostOffice();
        $form = $this->createForm(new PostOfficeType(), $facility);

        return array(
            'facility' => $facility,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a new PostOffice facility.
     *
     * @Route("/create", name="postoffice_create")
     * @Method("POST")
     * @Template("MeraPostBundle:PostOffice:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $facility = new PostOffice();
        $form = $this->createForm(new PostOfficeType(), $facility);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facility);
            $em->flush();

            return $this->redirect($this->generateUrl('postoffice_show', array('id' => $facility->getId())));
        }

        return array(
            'facility' => $facility,
            'form' => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing PostOffice facility.
     *
     * @Route("/{id}/edit", name="postoffice_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $facility = $em->getRepository('MeraPostBundle:PostOffice')->find($id);

        if (!$facility) {
            throw $this->createNotFoundException('Unable to find PostOffice facility.');
        }

        $editForm = $this->createForm(new PostOfficeType(), $facility);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'facility' => $facility,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing PostOffice facility.
     *
     * @Route("/{id}/update", name="postoffice_update")
     * @Method("POST")
     * @Template("MeraPostBundle:PostOffice:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $facility = $em->getRepository('MeraPostBundle:PostOffice')->find($id);

        if (!$facility) {
            throw $this->createNotFoundException('Unable to find PostOffice facility.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PostOfficeType(), $facility);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($facility);
            $em->flush();

            return $this->redirect($this->generateUrl('postoffice_edit', array('id' => $id)));
        }

        return array(
            'facility' => $facility,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a PostOffice facility.
     *
     * @Route("/{id}/delete", name="postoffice_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $facility = $em->getRepository('MeraPostBundle:PostOffice')->find($id);

            if (!$facility) {
                throw $this->createNotFoundException('Unable to find PostOffice facility.');
            }

            $em->remove($facility);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('postoffice'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm();
    }
}
