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
    private $ConsumptionResources;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ConsumptionResources = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ConsumptionResources
     *
     * @param Mera\AuditBundle\Entity\ConsumptionResource $consumptionResources
     * @return ResourceType
     */
    public function addConsumptionResource(\Mera\AuditBundle\Entity\ConsumptionResource $consumptionResources)
    {
        $this->ConsumptionResources[] = $consumptionResources;

        return $this;
    }

    /**
     * Remove ConsumptionResources
     *
     * @param Mera\AuditBundle\Entity\ConsumptionResource $consumptionResources
     */
    public function removeConsumptionResource(\Mera\AuditBundle\Entity\ConsumptionResource $consumptionResources)
    {
        $this->ConsumptionResources->removeElement($consumptionResources);
    }

    /**
     * Get ConsumptionResources
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getConsumptionResources()
    {
        return $this->ConsumptionResources;
    }

    public function __toString()
    {
        return $this->getName();
    }
}