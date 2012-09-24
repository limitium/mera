<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ConsumedTariff
 */
class ConsumedTariff
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
     * @var string $tariff
     */
    private $tariff;

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
     * @return ConsumedTariff
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
     * Set tariff
     *
     * @param string $tariff
     * @return ConsumedTariff
     */
    public function setTariff($tariff)
    {
        $this->tariff = $tariff;
    
        return $this;
    }

    /**
     * Get tariff
     *
     * @return string 
     */
    public function getTariff()
    {
        return $this->tariff;
    }

    /**
     * Set ResourceType
     *
     * @param Mera\AuditBundle\Entity\ResourceType $resourceType
     * @return ConsumedTariff
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
     * @return ConsumedTariff
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