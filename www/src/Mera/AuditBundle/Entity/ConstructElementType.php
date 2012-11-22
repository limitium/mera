<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ConstructElementType
 */
class ConstructElementType
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
    private $ConstructElements;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ConstructElements = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ConstructElementType
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
     * Add ConstructElements
     *
     * @param Mera\AuditBundle\Entity\ConstructElement $constructElements
     * @return ConstructElementType
     */
    public function addConstructElement(\Mera\AuditBundle\Entity\ConstructElement $constructElements)
    {
        $this->ConstructElements[] = $constructElements;
    
        return $this;
    }

    /**
     * Remove ConstructElements
     *
     * @param Mera\AuditBundle\Entity\ConstructElement $constructElements
     */
    public function removeConstructElement(\Mera\AuditBundle\Entity\ConstructElement $constructElements)
    {
        $this->ConstructElements->removeElement($constructElements);
    }

    /**
     * Get ConstructElements
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getConstructElements()
    {
        return $this->ConstructElements;
    }

    public function __toString()
    {
        return $this->name;
    }
}