<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\Pipeline
 */
class Pipeline
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
     * @var float $length
     */
    private $length;

    /**
     * @var float $diameter
     */
    private $diameter;

    /**
     * @var string $insulation
     */
    private $insulation;

    /**
     * @var float $operation_period
     */
    private $operation_period;

    /**
     * @var Mera\AuditBundle\Entity\PipelineInstallationType
     */
    private $PipelineInstallationType;

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
     * @return Pipeline
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
     * Set length
     *
     * @param float $length
     * @return Pipeline
     */
    public function setLength($length)
    {
        $this->length = $length;
    
        return $this;
    }

    /**
     * Get length
     *
     * @return float 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set diameter
     *
     * @param float $diameter
     * @return Pipeline
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
    
        return $this;
    }

    /**
     * Get diameter
     *
     * @return float 
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * Set insulation
     *
     * @param string $insulation
     * @return Pipeline
     */
    public function setInsulation($insulation)
    {
        $this->insulation = $insulation;
    
        return $this;
    }

    /**
     * Get insulation
     *
     * @return string 
     */
    public function getInsulation()
    {
        return $this->insulation;
    }

    /**
     * Set operation_period
     *
     * @param float $operationPeriod
     * @return Pipeline
     */
    public function setOperationPeriod($operationPeriod)
    {
        $this->operation_period = $operationPeriod;
    
        return $this;
    }

    /**
     * Get operation_period
     *
     * @return float 
     */
    public function getOperationPeriod()
    {
        return $this->operation_period;
    }

    /**
     * Set PipelineInstallationType
     *
     * @param Mera\AuditBundle\Entity\PipelineInstallationType $pipelineInstallationType
     * @return Pipeline
     */
    public function setPipelineInstallationType(\Mera\AuditBundle\Entity\PipelineInstallationType $pipelineInstallationType = null)
    {
        $this->PipelineInstallationType = $pipelineInstallationType;
    
        return $this;
    }

    /**
     * Get PipelineInstallationType
     *
     * @return Mera\AuditBundle\Entity\PipelineInstallationType 
     */
    public function getPipelineInstallationType()
    {
        return $this->PipelineInstallationType;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return Pipeline
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
