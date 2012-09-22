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

        $form->bind($request);

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
