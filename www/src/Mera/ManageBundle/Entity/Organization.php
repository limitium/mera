<?php

namespace Mera\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organization
 */
class Organization
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $lead_name;

    /**
     * @var string
     */
    private $lead_position;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Facilitys;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Facilitys = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Organization
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
     * Set address
     *
     * @param string $address
     * @return Organization
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set lead_name
     *
     * @param string $leadName
     * @return Organization
     */
    public function setLeadName($leadName)
    {
        $this->lead_name = $leadName;

        return $this;
    }

    /**
     * Get lead_name
     *
     * @return string
     */
    public function getLeadName()
    {
        return $this->lead_name;

    }

    /**
     * Set lead_position
     *
     * @param string $leadPosition
     * @return Organization
     */
    public function setLeadPosition($leadPosition)
    {
        $this->lead_position = $leadPosition;

        return $this;
    }

    /**
     * Get lead_position
     *
     * @return string
     */
    public function getLeadPosition()
    {
        return $this->lead_position;
    }

    /**
     * Add Facilitys
     *
     * @param \Mera\ManageBundle\Entity\Facility $facilitys
     * @return Organization
     */
    public function addFacility(\Mera\ManageBundle\Entity\Facility $facilitys)
    {
        $this->Facilitys[] = $facilitys;

        return $this;
    }

    /**
     * Remove Facilitys
     *
     * @param \Mera\ManageBundle\Entity\Facility $facilitys
     */
    public function removeFacility(\Mera\ManageBundle\Entity\Facility $facilitys)
    {
        $this->Facilitys->removeElement($facilitys);
    }

    /**
     * Get Facilitys
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFacilitys()
    {
        return $this->Facilitys;
    }

    function __toString()
    {
        return $this->name;
    }

}
