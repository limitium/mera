<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\FuelConsumption
 */
class FuelConsumption
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var integer $quantity
     */
    private $quantity;

    /**
     * @var float $load_capacity
     */
    private $load_capacity;

    /**
     * @var integer $passengers
     */
    private $passengers;

    /**
     * @var float $consumption
     */
    private $consumption;

    /**
     * @var float $work_duration
     */
    private $work_duration;

    /**
     * @var float $total_consumed
     */
    private $total_consumed;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;

    /**
     * @var Mera\AuditBundle\Entity\FuelType
     */
    private $FuelType;


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
     * Set type
     *
     * @param string $type
     * @return FuelConsumption
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return FuelConsumption
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set load_capacity
     *
     * @param float $loadCapacity
     * @return FuelConsumption
     */
    public function setLoadCapacity($loadCapacity)
    {
        $this->load_capacity = $loadCapacity;
    
        return $this;
    }

    /**
     * Get load_capacity
     *
     * @return float 
     */
    public function getLoadCapacity()
    {
        return $this->load_capacity;
    }

    /**
     * Set passengers
     *
     * @param integer $passengers
     * @return FuelConsumption
     */
    public function setPassengers($passengers)
    {
        $this->passengers = $passengers;
    
        return $this;
    }

    /**
     * Get passengers
     *
     * @return integer 
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * Set consumption
     *
     * @param float $consumption
     * @return FuelConsumption
     */
    public function setConsumption($consumption)
    {
        $this->consumption = $consumption;
    
        return $this;
    }

    /**
     * Get consumption
     *
     * @return float 
     */
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * Set work_duration
     *
     * @param float $workDuration
     * @return FuelConsumption
     */
    public function setWorkDuration($workDuration)
    {
        $this->work_duration = $workDuration;
    
        return $this;
    }

    /**
     * Get work_duration
     *
     * @return float 
     */
    public function getWorkDuration()
    {
        return $this->work_duration;
    }

    /**
     * Set total_consumed
     *
     * @param float $totalConsumed
     * @return FuelConsumption
     */
    public function setTotalConsumed($totalConsumed)
    {
        $this->total_consumed = $totalConsumed;
    
        return $this;
    }

    /**
     * Get total_consumed
     *
     * @return float 
     */
    public function getTotalConsumed()
    {
        return $this->total_consumed;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return FuelConsumption
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
     * Set FuelType
     *
     * @param Mera\AuditBundle\Entity\FuelType $fuelType
     * @return FuelConsumption
     */
    public function setFuelType(\Mera\AuditBundle\Entity\FuelType $fuelType = null)
    {
        $this->FuelType = $fuelType;
    
        return $this;
    }

    /**
     * Get FuelType
     *
     * @return Mera\AuditBundle\Entity\FuelType 
     */
    public function getFuelType()
    {
        return $this->FuelType;
    }
}