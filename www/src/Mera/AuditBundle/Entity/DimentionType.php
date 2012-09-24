<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\DimentionType
 */
class DimentionType
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
    private $NaturalProductions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->NaturalProductions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set id
     *
     * @param integer $id
     * @return DimentionType
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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
     * @return DimentionType
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
     * Add NaturalProductions
     *
     * @param Mera\AuditBundle\Entity\NaturalProduction $naturalProductions
     * @return DimentionType
     */
    public function addNaturalProduction(\Mera\AuditBundle\Entity\NaturalProduction $naturalProductions)
    {
        $this->NaturalProductions[] = $naturalProductions;
    
        return $this;
    }

    /**
     * Remove NaturalProductions
     *
     * @param Mera\AuditBundle\Entity\NaturalProduction $naturalProductions
     */
    public function removeNaturalProduction(\Mera\AuditBundle\Entity\NaturalProduction $naturalProductions)
    {
        $this->NaturalProductions->removeElement($naturalProductions);
    }

    /**
     * Get NaturalProductions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getNaturalProductions()
    {
        return $this->NaturalProductions;
    }
}