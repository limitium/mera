<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ElectroEquipment
 */
class ElectroEquipment
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $quantity
     */
    private $quantity;

    /**
     * @var float $power
     */
    private $power;

    /**
     * @var float $work_duration
     */
    private $work_duration;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;

    /**
     * @var Mera\AuditBundle\Entity\ElectroEquipmentType
     */
    private $ElectroEquipmentType;


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
     * Set quantity
     *
     * @param integer $quantity
     * @return ElectroEquipment
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
     * Set power
     *
     * @param float $power
     * @return ElectroEquipment
     */
    public function setPower($power)
    {
        $this->power = $power;
    
        return $this;
    }

    /**
     * Get power
     *
     * @return float 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set work_duration
     *
     * @param float $workDuration
     * @return ElectroEquipment
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
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return ElectroEquipment
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
     * Set ElectroEquipmentType
     *
     * @param Mera\AuditBundle\Entity\ElectroEquipmentType $electroEquipmentType
     * @return ElectroEquipment
     */
    public function setElectroEquipmentType(\Mera\AuditBundle\Entity\ElectroEquipmentType $electroEquipmentType = null)
    {
        $this->ElectroEquipmentType = $electroEquipmentType;
    
        return $this;
    }

    /**
     * Get ElectroEquipmentType
     *
     * @return Mera\AuditBundle\Entity\ElectroEquipmentType 
     */
    public function getElectroEquipmentType()
    {
        return $this->ElectroEquipmentType;
    }
}