<?php
namespace Mera\AuditBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Mera\AuditBundle\Entity\Common;

class CommonUpdateEvent extends Event
{
    protected $common;
    protected $action;
    protected $actionData;

    public function __construct(Common $common, $action, $actionData)
    {
        $this->common = $common;
        $this->action = $action;
        $this->actionData = $actionData;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getActionData()
    {
        return $this->actionData;
    }

    public function getCommon()
    {
        return $this->common;
    }
}
