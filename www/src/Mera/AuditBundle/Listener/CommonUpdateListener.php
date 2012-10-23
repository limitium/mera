<?php
namespace Mera\AuditBundle\Listener;

use Mera\AuditBundle\Entity\ChangeLog;
use Mera\AuditBundle\Event\CommonUpdateEvent;
use Doctrine\ORM\EntityManager;

class CommonUpdateListener
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function onCommonUpdate(CommonUpdateEvent $event)
    {
        $common = $event->getCommon();
        $updateTime = new \DateTime();

        $change = new ChangeLog();
        $change->setAction($event->getAction());
        $change->setActionData($event->getActionData());
        $change->setCommon($common);
        $change->setFirstName($common->getFacility()->getUser()->getFirstName());
        $change->setLastName($common->getFacility()->getUser()->getLastName());
        $change->setCreated($updateTime);

        $common->setUpdated($updateTime);

        $this->em->persist($common);
        $this->em->persist($change);
        $this->em->flush();
    }
}
