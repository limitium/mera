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
        $em = $this->getDoctrine()->getManager();

        $common = $em->getRepository('MeraAuditBundle:Common')->findAll();
        $common = array_pop($common);

        if (!$common) {
            throw $this->createNotFoundException('Unable to find Audit audit.');
        }
        $common->addBuilding(new Building());
        $common->addConstructElement(new ConstructElement());

        $form = $this->createForm(new CommonType(), $common);

        return array(
            'common' => $common,
            'form' => $form->createView(),
        );
    }

}
