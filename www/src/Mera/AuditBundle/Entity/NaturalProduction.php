<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\NaturalProduction
 */
class NaturalProduction
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
     * @var float $quantity
     */
    private $quantity;

    /**
     * @var Mera\AuditBundle\Entity\DimentionType
     */
    private $DimentionType;

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
     * @return NaturalProduction
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
     * @param float $quantity
     * @return NaturalProduction
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set DimentionType
     *
     * @param Mera\AuditBundle\Entity\DimentionType $dimentionType
     * @return NaturalProduction
     */
    public function setDimentionType(\Mera\AuditBundle\Entity\DimentionType $dimentionType)
    {
        $this->DimentionType = $dimentionType;
    
        return $this;
    }

    /**
     * Get DimentionType
     *
     * @return Mera\AuditBundle\Entity\DimentionType 
     */
    public function getDimentionType()
    {
        return $this->DimentionType;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return NaturalProduction
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