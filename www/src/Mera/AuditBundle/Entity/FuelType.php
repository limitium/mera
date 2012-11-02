<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\FuelType
 */
class FuelType
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
    private $FuelConsumptions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->FuelConsumptions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return FuelType
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
     * Add FuelConsumptions
     *
     * @param Mera\AuditBundle\Entity\FuelConsumption $fuelConsumptions
     * @return FuelType
     */
    public function addFuelConsumption(\Mera\AuditBundle\Entity\FuelConsumption $fuelConsumptions)
    {
        $this->FuelConsumptions[] = $fuelConsumptions;
    
        return $this;
    }

    /**
     * Remove FuelConsumptions
     *
     * @param Mera\AuditBundle\Entity\FuelConsumption $fuelConsumptions
     */
    public function removeFuelConsumption(\Mera\AuditBundle\Entity\FuelConsumption $fuelConsumptions)
    {
        $this->FuelConsumptions->removeElement($fuelConsumptions);
    }

    /**
     * Get FuelConsumptions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFuelConsumptions()
    {
        return $this->FuelConsumptions;
    }
    public function __toString()
    {
        return $this->getName();
    }
}