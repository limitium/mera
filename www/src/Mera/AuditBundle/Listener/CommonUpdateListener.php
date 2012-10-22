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
        $change = new ChangeLog();
        $change->setEvent($event->getAction());
        $change->setEventData($event->getActionData());
        $change->setCommon($event->getCommon());
        $change->setFirstName($event->getCommon()->getFacility()->getUser()->getFirstName());
        $change->setLastName($event->getCommon()->getFacility()->getUser()->getLastName());

        $this->em->persist($change);
        $this->em->flush();
    }
}
