<?php

namespace Mera\PostBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mera\PostBundle\Entity\PostOffice;
use Mera\PostBundle\Form\PostOfficeType;

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
     * Finds and displays a PostOffice entity.
     *
     * @Route("/{id}/show", name="postoffice_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeraPostBundle:PostOffice')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PostOffice entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new PostOffice entity.
     *
     * @Route("/new", name="postoffice_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new PostOffice();
        $form   = $this->createForm(new PostOfficeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new PostOffice entity.
     *
     * @Route("/create", name="postoffice_create")
     * @Method("POST")
     * @Template("MeraPostBundle:PostOffice:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new PostOffice();
        $form = $this->createForm(new PostOfficeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('postoffice_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing PostOffice entity.
     *
     * @Route("/{id}/edit", name="postoffice_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeraPostBundle:PostOffice')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PostOffice entity.');
        }

        $editForm = $this->createForm(new PostOfficeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing PostOffice entity.
     *
     * @Route("/{id}/update", name="postoffice_update")
     * @Method("POST")
     * @Template("MeraPostBundle:PostOffice:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeraPostBundle:PostOffice')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PostOffice entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PostOfficeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('postoffice_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a PostOffice entity.
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
            $entity = $em->getRepository('MeraPostBundle:PostOffice')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PostOffice entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('postoffice'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
