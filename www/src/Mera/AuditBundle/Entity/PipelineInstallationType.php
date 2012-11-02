<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\PipelineInstallationType
 */
class PipelineInstallationType
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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $Pipelines;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Pipelines = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return PipelineInstallationType
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
     * Add Pipelines
     *
     * @param Mera\AuditBundle\Entity\Pipeline $pipelines
     * @return PipelineInstallationType
     */
    public function addPipeline(\Mera\AuditBundle\Entity\Pipeline $pipelines)
    {
        $this->Pipelines[] = $pipelines;
    
        return $this;
    }

    /**
     * Remove Pipelines
     *
     * @param Mera\AuditBundle\Entity\Pipeline $pipelines
     */
    public function removePipeline(\Mera\AuditBundle\Entity\Pipeline $pipelines)
    {
        $this->Pipelines->removeElement($pipelines);
    }

    /**
     * Get Pipelines
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPipelines()
    {
        return $this->Pipelines;

    }
    public function __toString()
    {
        return $this->getName();
    }
}