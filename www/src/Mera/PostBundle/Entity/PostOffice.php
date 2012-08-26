<?php

namespace Mera\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\PostBundle\Entity\PostOffice
 */
class PostOffice
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $email
     */
    private $email;


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
     * @return PostOffice
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
     * Set email
     *
     * @param string $email
     * @return PostOffice
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @var Mera\PostBundle\Entity\Common
     */
    private $Common;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $Buildings;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Buildings = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set Common
     *
     * @param Mera\PostBundle\Entity\Common $common
     * @return PostOffice
     */
    public function setCommon(\Mera\PostBundle\Entity\Common $common = null)
    {
        $this->Common = $common;
    
        return $this;
    }

    /**
     * Get Common
     *
     * @return Mera\PostBundle\Entity\Common 
     */
    public function getCommon()
    {
        return $this->Common;
    }

    /**
     * Add Buildings
     *
     * @param Mera\PostBundle\Entity\Building $buildings
     * @return PostOffice
     */
    public function addBuilding(\Mera\PostBundle\Entity\Building $buildings)
    {
        $this->Buildings[] = $buildings;
    
        return $this;
    }

    /**
     * Remove Buildings
     *
     * @param Mera\PostBundle\Entity\Building $buildings
     */
    public function removeBuilding(\Mera\PostBundle\Entity\Building $buildings)
    {
        $this->Buildings->removeElement($buildings);
    }

    /**
     * Get Buildings
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getBuildings()
    {
        return $this->Buildings;
    }

    public function __toString(){
        return $this->getName();
    }
}