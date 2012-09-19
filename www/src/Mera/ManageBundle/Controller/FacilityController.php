<?php

namespace Mera\ManageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Mera\AuditBundle\Entity\Building;
use Mera\AuditBundle\Entity\Common;
use Mera\ManageBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mera\ManageBundle\Entity\Facility;
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

        $entities = $em->getRepository('MeraManageBundle:Facility')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Facility entity.
     *
     * @Route("/{id}/show", name="facility_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeraManageBundle:Facility')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Facility entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Facility entity.
     *
     * @Route("/new", name="facility_new")
     * @Template()
     */
    public function newAction()
    {
        $facility = new Facility();
        $user = new User();
        $user->setPassword(substr(sha1(mt_rand() . time()), mt_rand(0, 35 - 9), 8));
        $facility->setUser($user);

        $form = $this->createForm(new FacilityType(), $facility);
        return array(
            'entity' => $facility,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a new Facility entity.
     *
     * @Route("/create", name="facility_create")
     * @Method("POST")
     * @Template("MeraManageBundle:Facility:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $facility = new Facility();
        $form = $this->createForm(new FacilityType(), $facility);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $this->generateObjects($facility);

            $em->persist($facility);
            $em->flush();

            return $this->redirect($this->generateUrl('facility_show', array('id' => $facility->getId())));
        }

        return array(
            'entity' => $facility,
            'form' => $form->createView(),
        );
    }

    private function generateObjects($facility)
    {
        $user = $facility->getUser();
        $user->setUsername($user->getEmail());
        $user->setEnabled(true);
        $user->setLocked(false);
        $user->setExpired(false);
        $user->setCredentialsExpired(false);
        $user->setSalt("");

        $common = new Common();
        $common->setFacility($facility);
        $common->setCreated(new \DateTime('now'));
        $common->setUpdated(new \DateTime('now'));
        $facility->setCommon($common);
    }

    /**
     * Displays a form to edit an existing Facility entity.
     *
     * @Route("/{id}/edit", name="facility_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeraManageBundle:Facility')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Facility entity.');
        }

        $editForm = $this->createForm(new FacilityType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Facility entity.
     *
     * @Route("/{id}/update", name="facility_update")
     * @Method("POST")
     * @Template("MeraManageBundle:Facility:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeraManageBundle:Facility')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Facility entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FacilityType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('facility_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Facility entity.
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
            $entity = $em->getRepository('MeraManageBundle:Facility')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Facility entity.');
            }

            $em->remove($entity);
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
