<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ElectroEquipmentType
 */
class ElectroEquipmentType
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
    private $ElectroEquipments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ElectroEquipments = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return ElectroEquipmentType
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
     * Add ElectroEquipments
     *
     * @param Mera\AuditBundle\Entity\ElectroEquipment $electroEquipments
     * @return ElectroEquipmentType
     */
    public function addElectroEquipment(\Mera\AuditBundle\Entity\ElectroEquipment $electroEquipments)
    {
        $this->ElectroEquipments[] = $electroEquipments;
    
        return $this;
    }

    /**
     * Remove ElectroEquipments
     *
     * @param Mera\AuditBundle\Entity\ElectroEquipment $electroEquipments
     */
    public function removeElectroEquipment(\Mera\AuditBundle\Entity\ElectroEquipment $electroEquipments)
    {
        $this->ElectroEquipments->removeElement($electroEquipments);
    }

    /**
     * Get ElectroEquipments
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getElectroEquipments()
    {
        return $this->ElectroEquipments;
    }
}
