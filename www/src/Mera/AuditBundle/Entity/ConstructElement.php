<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ConstructElement
 */
class ConstructElement
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var float $area
     */
    private $area;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var float $width
     */
    private $width;

    /**
     * @var Mera\AuditBundle\Entity\ConstructElementType
     */
    private $ConstructElementType;

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
     * Set area
     *
     * @param float $area
     * @return ConstructElement
     */
    public function setArea($area)
    {
        $this->area = $area;
    
        return $this;
    }

    /**
     * Get area
     *
     * @return float 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ConstructElement
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set width
     *
     * @param float $width
     * @return ConstructElement
     */
    public function setWidth($width)
    {
        $this->width = $width;
    
        return $this;
    }

    /**
     * Get width
     *
     * @return float 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set ConstructElementType
     *
     * @param Mera\AuditBundle\Entity\ConstructElementType $constructElementType
     * @return ConstructElement
     */
    public function setConstructElementType(\Mera\AuditBundle\Entity\ConstructElementType $constructElementType = null)
    {
        $this->ConstructElementType = $constructElementType;
    
        return $this;
    }

    /**
     * Get ConstructElementType
     *
     * @return Mera\AuditBundle\Entity\ConstructElementType 
     */
    public function getConstructElementType()
    {
        return $this->ConstructElementType;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return ConstructElement
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
