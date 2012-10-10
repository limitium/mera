<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ResourceType
 */
class ResourceType
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
     * @return ResourceType
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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $小onsumptionResources;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->小onsumptionResources = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add 小onsumptionResources
     *
     * @param Mera\AuditBundle\Entity\ConsumptionResource $稹onsumptionResources
     * @return ResourceType
     */
    public function add小onsumptionResource(\Mera\AuditBundle\Entity\ConsumptionResource $稹onsumptionResources)
    {
        $this->小onsumptionResources[] = $稹onsumptionResources;
    
        return $this;
    }

    /**
     * Remove 小onsumptionResources
     *
     * @param Mera\AuditBundle\Entity\ConsumptionResource $稹onsumptionResources
     */
    public function remove小onsumptionResource(\Mera\AuditBundle\Entity\ConsumptionResource $稹onsumptionResources)
    {
        $this->小onsumptionResources->removeElement($稹onsumptionResources);
    }

    /**
     * Get 小onsumptionResources
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function get小onsumptionResources()
    {
        return $this->小onsumptionResources;
    }
}