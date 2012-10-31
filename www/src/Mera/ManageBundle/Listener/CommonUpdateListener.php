<?php
namespace Mera\ManageBundle\Listener;

use Mera\ManageBundle\Entity\ChangeLog;
use Mera\AuditBundle\Event\CommonUpdateEvent;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContextInterface;

class CommonUpdateListener
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;
    private $securityContext;

    public function __construct(EntityManager $em, SecurityContextInterface $context)
    {
        $this->securityContext = $context;
        $this->em = $em;
    }

    public function onCommonUpdate(CommonUpdateEvent $event)
    {
        $facility = $event->getCommon()->getFacility();
        $updateTime = new \DateTime();

        $curUser = $this->securityContext->getToken()->getUser();
        $facilityUser = $facility->getUser();

        $change = new ChangeLog();
        $change->setAction($event->getAction());
        $change->setActionData($event->getActionData());
        $change->setFacility($facility);
        $change->setUsername($curUser->getUsername());
        $change->setFirstName($curUser->getFirstName());
        $change->setLastName($curUser->getLastName());
        $change->setRole($curUser->hasRole("admin") ? "admin" : "");
        $change->setCreated($updateTime);

        $facility->setUpdated($updateTime);

        $this->em->persist($facility);
        $this->em->persist($change);

        $this->em->flush();
    }
}
