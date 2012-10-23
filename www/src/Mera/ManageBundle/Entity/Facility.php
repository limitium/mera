<?php

namespace Mera\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Mera\ManageBundle\Entity\Facility
 */
class Facility
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     * @Assert\NotBlank()
     * @Assert\MinLength(limit=6)
     */
    private $name;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;

    /**
     * @var Mera\ManageBundle\Entity\User
     */
    private $User;


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
     * Set name
     *
     * @param string $name
     * @return Facility
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return Facility
     */
    public function setCommon(\Mera\AuditBundle\Entity\Common $common = null)
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

    /**
     * Set User
     *
     * @param Mera\ManageBundle\Entity\User $user
     * @return Facility
     */
    public function setUser(\Mera\ManageBundle\Entity\User $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return Mera\ManageBundle\Entity\User
     */
    public function getUser()
    {
        return $this->User;
    }

    function __toString()
    {
        return $this->getName();
    }

    /**
     * @var \DateTime $created
     */
    private $created;

    /**
     * @var \DateTime $updated
     */
    private $updated;

    /**
     * @var \DateTime $done
     */
    private $done;

    /**
     * @var \DateTime $closed
     */
    private $closed;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $ChangeLogs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ChangeLogs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Facility
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
     * Set updated
     *
     * @param \DateTime $updated
     * @return Facility
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set done
     *
     * @param \DateTime $done
     * @return Facility
     */
    public function setDone($done)
    {
        $this->done = $done;
    
        return $this;
    }

    /**
     * Get done
     *
     * @return \DateTime 
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set closed
     *
     * @param \DateTime $closed
     * @return Facility
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;
    
        return $this;
    }

    /**
     * Get closed
     *
     * @return \DateTime 
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Add ChangeLogs
     *
     * @param Mera\ManageBundle\Entity\ChangeLog $changeLogs
     * @return Facility
     */
    public function addChangeLog(\Mera\ManageBundle\Entity\ChangeLog $changeLogs)
    {
        $this->ChangeLogs[] = $changeLogs;
    
        return $this;
    }

    /**
     * Remove ChangeLogs
     *
     * @param Mera\ManageBundle\Entity\ChangeLog $changeLogs
     */
    public function removeChangeLog(\Mera\ManageBundle\Entity\ChangeLog $changeLogs)
    {
        $this->ChangeLogs->removeElement($changeLogs);
    }

    /**
     * Get ChangeLogs
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getChangeLogs()
    {
        return $this->ChangeLogs;
    }
}