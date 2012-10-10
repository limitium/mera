<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ConsumptionResource
 */
class ConsumptionResource
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
     * @var float $physical_quantity
     */
    private $physical_quantity;

    /**
     * @var float $financial_quantity
     */
    private $financial_quantity;

    /**
     * @var Mera\AuditBundle\Entity\ResourceType
     */
    private $ResourceType;

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
     * @return ConsumptionResource
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
     * Set physical_quantity
     *
     * @param float $physicalQuantity
     * @return ConsumptionResource
     */
    public function setPhysicalQuantity($physicalQuantity)
    {
        $this->physical_quantity = $physicalQuantity;
    
        return $this;
    }

    /**
     * Get physical_quantity
     *
     * @return float 
     */
    public function getPhysicalQuantity()
    {
        return $this->physical_quantity;
    }

    /**
     * Set financial_quantity
     *
     * @param float $financialQuantity
     * @return ConsumptionResource
     */
    public function setFinancialQuantity($financialQuantity)
    {
        $this->financial_quantity = $financialQuantity;
    
        return $this;
    }

    /**
     * Get financial_quantity
     *
     * @return float 
     */
    public function getFinancialQuantity()
    {
        return $this->financial_quantity;
    }

    /**
     * Set ResourceType
     *
     * @param Mera\AuditBundle\Entity\ResourceType $resourceType
     * @return ConsumptionResource
     */
    public function setResourceType(\Mera\AuditBundle\Entity\ResourceType $resourceType)
    {
        $this->ResourceType = $resourceType;
    
        return $this;
    }

    /**
     * Get ResourceType
     *
     * @return Mera\AuditBundle\Entity\ResourceType 
     */
    public function getResourceType()
    {
        return $this->ResourceType;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return ConsumptionResource
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
