<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\LightsPlaceType
 */
class LightsPlaceType
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
    private $LightsSystems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->LightsSystems = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return LightsPlaceType
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
     * Add LightsSystems
     *
     * @param Mera\AuditBundle\Entity\LightsSystem $lightsSystems
     * @return LightsPlaceType
     */
    public function addLightsSystem(\Mera\AuditBundle\Entity\LightsSystem $lightsSystems)
    {
        $this->LightsSystems[] = $lightsSystems;
    
        return $this;
    }

    /**
     * Remove LightsSystems
     *
     * @param Mera\AuditBundle\Entity\LightsSystem $lightsSystems
     */
    public function removeLightsSystem(\Mera\AuditBundle\Entity\LightsSystem $lightsSystems)
    {
        $this->LightsSystems->removeElement($lightsSystems);
    }

    /**
     * Get LightsSystems
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLightsSystems()
    {
        return $this->LightsSystems;
    }
}
