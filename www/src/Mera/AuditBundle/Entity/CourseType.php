<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\CourseType
 */
class CourseType
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
    private $Personals;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Personals = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return CourseType
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
     * Add Personals
     *
     * @param Mera\AuditBundle\Entity\Personal $personals
     * @return CourseType
     */
    public function addPersonal(\Mera\AuditBundle\Entity\Personal $personals)
    {
        $this->Personals[] = $personals;
    
        return $this;
    }

    /**
     * Remove Personals
     *
     * @param Mera\AuditBundle\Entity\Personal $personals
     */
    public function removePersonal(\Mera\AuditBundle\Entity\Personal $personals)
    {
        $this->Personals->removeElement($personals);
    }

    /**
     * Get Personals
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPersonals()
    {
        return $this->Personals;
    }
    public function __toString()
    {
        return $this->getName();
    }
}