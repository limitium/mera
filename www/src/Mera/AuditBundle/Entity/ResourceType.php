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
    private $СonsumptionResources;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->СonsumptionResources = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add СonsumptionResources
     *
     * @param Mera\AuditBundle\Entity\ConsumptionResource $�onsumptionResources
     * @return ResourceType
     */
    public function addСonsumptionResource(\Mera\AuditBundle\Entity\ConsumptionResource $�onsumptionResources)
    {
        $this->СonsumptionResources[] = $�onsumptionResources;
    
        return $this;
    }

    /**
     * Remove СonsumptionResources
     *
     * @param Mera\AuditBundle\Entity\ConsumptionResource $�onsumptionResources
     */
    public function removeСonsumptionResource(\Mera\AuditBundle\Entity\ConsumptionResource $�onsumptionResources)
    {
        $this->СonsumptionResources->removeElement($�onsumptionResources);
    }

    /**
     * Get СonsumptionResources
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getСonsumptionResources()
    {
        return $this->СonsumptionResources;
    }
}