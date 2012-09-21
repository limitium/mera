<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\LightsSystem
 */
class LightsSystem
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $tungsten_quantity
     */
    private $tungsten_quantity;

    /**
     * @var float $tungsten_power
     */
    private $tungsten_power;

    /**
     * @var integer $fluorescent_quantity
     */
    private $fluorescent_quantity;

    /**
     * @var float $fluorescent_power
     */
    private $fluorescent_power;

    /**
     * @var integer $energy_save_quantity
     */
    private $energy_save_quantity;

    /**
     * @var float $energy_save_power
     */
    private $energy_save_power;

    /**
     * @var float $work_duration
     */
    private $work_duration;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;

    /**
     * @var Mera\AuditBundle\Entity\LightsSystemPlace
     */
    private $LightsSystemPlace;


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
     * Set tungsten_quantity
     *
     * @param integer $tungstenQuantity
     * @return LightsSystem
     */
    public function setTungstenQuantity($tungstenQuantity)
    {
        $this->tungsten_quantity = $tungstenQuantity;
    
        return $this;
    }

    /**
     * Get tungsten_quantity
     *
     * @return integer 
     */
    public function getTungstenQuantity()
    {
        return $this->tungsten_quantity;
    }

    /**
     * Set tungsten_power
     *
     * @param float $tungstenPower
     * @return LightsSystem
     */
    public function setTungstenPower($tungstenPower)
    {
        $this->tungsten_power = $tungstenPower;
    
        return $this;
    }

    /**
     * Get tungsten_power
     *
     * @return float 
     */
    public function getTungstenPower()
    {
        return $this->tungsten_power;
    }

    /**
     * Set fluorescent_quantity
     *
     * @param integer $fluorescentQuantity
     * @return LightsSystem
     */
    public function setFluorescentQuantity($fluorescentQuantity)
    {
        $this->fluorescent_quantity = $fluorescentQuantity;
    
        return $this;
    }

    /**
     * Get fluorescent_quantity
     *
     * @return integer 
     */
    public function getFluorescentQuantity()
    {
        return $this->fluorescent_quantity;
    }

    /**
     * Set fluorescent_power
     *
     * @param float $fluorescentPower
     * @return LightsSystem
     */
    public function setFluorescentPower($fluorescentPower)
    {
        $this->fluorescent_power = $fluorescentPower;
    
        return $this;
    }

    /**
     * Get fluorescent_power
     *
     * @return float 
     */
    public function getFluorescentPower()
    {
        return $this->fluorescent_power;
    }

    /**
     * Set energy_save_quantity
     *
     * @param integer $energySaveQuantity
     * @return LightsSystem
     */
    public function setEnergySaveQuantity($energySaveQuantity)
    {
        $this->energy_save_quantity = $energySaveQuantity;
    
        return $this;
    }

    /**
     * Get energy_save_quantity
     *
     * @return integer 
     */
    public function getEnergySaveQuantity()
    {
        return $this->energy_save_quantity;
    }

    /**
     * Set energy_save_power
     *
     * @param float $energySavePower
     * @return LightsSystem
     */
    public function setEnergySavePower($energySavePower)
    {
        $this->energy_save_power = $energySavePower;
    
        return $this;
    }

    /**
     * Get energy_save_power
     *
     * @return float 
     */
    public function getEnergySavePower()
    {
        return $this->energy_save_power;
    }

    /**
     * Set work_duration
     *
     * @param float $workDuration
     * @return LightsSystem
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
     * @return LightsSystem
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
     * Set LightsSystemPlace
     *
     * @param Mera\AuditBundle\Entity\LightsSystemPlace $lightsSystemPlace
     * @return LightsSystem
     */
    public function setLightsSystemPlace(\Mera\AuditBundle\Entity\LightsSystemPlace $lightsSystemPlace = null)
    {
        $this->LightsSystemPlace = $lightsSystemPlace;
    
        return $this;
    }

    /**
     * Get LightsSystemPlace
     *
     * @return Mera\AuditBundle\Entity\LightsSystemPlace 
     */
    public function getLightsSystemPlace()
    {
        return $this->LightsSystemPlace;
    }
}