<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ConsumptionMeter
 */
class ConsumptionMeter
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
     * @var string $precision_class
     */
    private $precision_class;

    /**
     * @var \DateTime $verification_date
     */
    private $verification_date;

    /**
     * @var Mera\AuditBundle\Entity\ConsumptionMeterType
     */
    private $ConsumptionMeterType;

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
     * Set name
     *
     * @param string $name
     * @return ConsumptionMeter
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
     * Set precision_class
     *
     * @param string $precisionClass
     * @return ConsumptionMeter
     */
    public function setPrecisionClass($precisionClass)
    {
        $this->precision_class = $precisionClass;
    
        return $this;
    }

    /**
     * Get precision_class
     *
     * @return string 
     */
    public function getPrecisionClass()
    {
        return $this->precision_class;
    }

    /**
     * Set verification_date
     *
     * @param \DateTime $verificationDate
     * @return ConsumptionMeter
     */
    public function setVerificationDate($verificationDate)
    {
        $this->verification_date = $verificationDate;
    
        return $this;
    }

    /**
     * Get verification_date
     *
     * @return \DateTime 
     */
    public function getVerificationDate()
    {
        return $this->verification_date;
    }

    /**
     * Set ConsumptionMeterType
     *
     * @param Mera\AuditBundle\Entity\ConsumptionMeterType $consumptionMeterType
     * @return ConsumptionMeter
     */
    public function setConsumptionMeterType(\Mera\AuditBundle\Entity\ConsumptionMeterType $consumptionMeterType = null)
    {
        $this->ConsumptionMeterType = $consumptionMeterType;
    
        return $this;
    }

    /**
     * Get ConsumptionMeterType
     *
     * @return Mera\AuditBundle\Entity\ConsumptionMeterType 
     */
    public function getConsumptionMeterType()
    {
        return $this->ConsumptionMeterType;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return ConsumptionMeter
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
}