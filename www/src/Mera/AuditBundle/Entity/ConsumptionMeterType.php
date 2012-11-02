<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ConsumptionMeterType
 */
class ConsumptionMeterType
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
    private $ConsumptionMeters;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ConsumptionMeters = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ConsumptionMeterType
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
     * Add ConsumptionMeters
     *
     * @param Mera\AuditBundle\Entity\ConsumptionMeter $consumptionMeters
     * @return ConsumptionMeterType
     */
    public function addConsumptionMeter(\Mera\AuditBundle\Entity\ConsumptionMeter $consumptionMeters)
    {
        $this->ConsumptionMeters[] = $consumptionMeters;
    
        return $this;
    }

    /**
     * Remove ConsumptionMeters
     *
     * @param Mera\AuditBundle\Entity\ConsumptionMeter $consumptionMeters
     */
    public function removeConsumptionMeter(\Mera\AuditBundle\Entity\ConsumptionMeter $consumptionMeters)
    {
        $this->ConsumptionMeters->removeElement($consumptionMeters);
    }

    /**
     * Get ConsumptionMeters
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getConsumptionMeters()
    {
        return $this->ConsumptionMeters;
    }
    public function __toString()
    {
        return $this->getName();
    }
}