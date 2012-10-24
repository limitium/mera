<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\BuildingType
 */
class BuildingType
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
     * @return BuildingType
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
     * Add Buildings
     *
     * @param Mera\AuditBundle\Entity\Building $buildings
     * @return BuildingType
     */
    public function addBuilding(\Mera\AuditBundle\Entity\Building $buildings)
    {
        $this->Buildings[] = $buildings;
    
        return $this;
    }

    /**
     * Remove Buildings
     *
     * @param Mera\AuditBundle\Entity\Building $buildings
     */
    public function removeBuilding(\Mera\AuditBundle\Entity\Building $buildings)
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
}