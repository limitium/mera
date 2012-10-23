<?php
namespace Mera\ManageBundle\Listener;

use Mera\ManageBundle\Entity\ChangeLog;
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
        $facility = $event->getCommon()->getFacility();
        $updateTime = new \DateTime();

        $change = new ChangeLog();
        $change->setAction($event->getAction());
        $change->setActionData($event->getActionData());
        $change->setFacility($facility);
        $change->setFirstName($facility->getUser()->getFirstName());
        $change->setLastName($facility->getUser()->getLastName());
        $change->setCreated($updateTime);

        $facility->setUpdated($updateTime);

        $this->em->persist($facility);
        $this->em->persist($change);

        $this->em->flush();
    }
}
