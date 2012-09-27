<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\Transformator
 */
class Transformator
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $year
     */
    private $year;

    /**
     * @var integer $quantity
     */
    private $quantity;

    /**
     * @var float $individual_capacity
     */
    private $individual_capacity;

    /**
     * @var float $higher_voltage
     */
    private $higher_voltage;

    /**
     * @var float $installed_power
     */
    private $installed_power;

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
     * Set year
     *
     * @param integer $year
     * @return Transformator
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Transformator
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
     * Set individual_capacity
     *
     * @param float $individualCapacity
     * @return Transformator
     */
    public function setIndividualCapacity($individualCapacity)
    {
        $this->individual_capacity = $individualCapacity;
    
        return $this;
    }

    /**
     * Get individual_capacity
     *
     * @return float 
     */
    public function getIndividualCapacity()
    {
        return $this->individual_capacity;
    }

    /**
     * Set higher_voltage
     *
     * @param float $higherVoltage
     * @return Transformator
     */
    public function setHigherVoltage($higherVoltage)
    {
        $this->higher_voltage = $higherVoltage;
    
        return $this;
    }

    /**
     * Get higher_voltage
     *
     * @return float 
     */
    public function getHigherVoltage()
    {
        return $this->higher_voltage;
    }

    /**
     * Set installed_power
     *
     * @param float $installedPower
     * @return Transformator
     */
    public function setInstalledPower($installedPower)
    {
        $this->installed_power = $installedPower;
    
        return $this;
    }

    /**
     * Get installed_power
     *
     * @return float 
     */
    public function getInstalledPower()
    {
        return $this->installed_power;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return Transformator
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