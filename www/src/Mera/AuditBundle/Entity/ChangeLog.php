<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ChangeLog
 */
class ChangeLog
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $first_name
     */
    private $first_name;

    /**
     * @var string $last_name
     */
    private $last_name;

    /**
     * @var string $event
     */
    private $event;

    /**
     * @var string $event_data
     */
    private $event_data;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return ChangeLog
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    
        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return ChangeLog
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    
        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set event
     *
     * @param string $event
     * @return ChangeLog
     */
    public function setEvent($event)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return string 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set event_data
     *
     * @param string $eventData
     * @return ChangeLog
     */
    public function setEventData($eventData)
    {
        $this->event_data = $eventData;
    
        return $this;
    }

    /**
     * Get event_data
     *
     * @return string 
     */
    public function getEventData()
    {
        return $this->event_data;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return ChangeLog
     */
    public function setCommon(\Mera\AuditBundle\Entity\Common $common)
    {
        $this->Common = $common;
    
        return $this;
    }

    /**
     * Get Common
     *
     * @return Mera\AuditBundle\Entity\Common 
     */
    public function getCommon()
    {
        return $this->Common;
    }
}
