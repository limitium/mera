<?php

namespace Mera\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\ManageBundle\Entity\ChangeLog
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
     * @var string $action
     */
    private $action;

    /**
     * @var string $action_data
     */
    private $action_data;

    /**
     * @var \DateTime $created
     */
    private $created;

    /**
     * @var Mera\ManageBundle\Entity\Facility
     */
    private $Facility;


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
     * Set action
     *
     * @param string $action
     * @return ChangeLog
     */
    public function setAction($action)
    {
        $this->action = $action;
    
        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set action_data
     *
     * @param string $actionData
     * @return ChangeLog
     */
    public function setActionData($actionData)
    {
        $this->action_data = $actionData;
    
        return $this;
    }

    /**
     * Get action_data
     *
     * @return string 
     */
    public function getActionData()
    {
        return $this->action_data;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return ChangeLog
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set Facility
     *
     * @param Mera\ManageBundle\Entity\Facility $facility
     * @return ChangeLog
     */
    public function setFacility(\Mera\ManageBundle\Entity\Facility $facility)
    {
        $this->Facility = $facility;
    
        return $this;
    }

    /**
     * Get Facility
     *
     * @return Mera\ManageBundle\Entity\Facility 
     */
    public function getFacility()
    {
        return $this->Facility;
    }
}
