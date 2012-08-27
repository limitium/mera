<?php

namespace Mera\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Mera\ManageBundle\Entity\User
 */
class User extends BaseUser
{
    /**
     * @var Mera\ManageBundle\Entity\Role
     */
    private $Role;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $Facility;
    /**
     * @var integer $id
     */
    protected $id;


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
     * Constructor
     */
    public function __construct()
    {
        $this->Facility = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set Role
     *
     * @param Mera\ManageBundle\Entity\Role $role
     * @return User
     */
    public function setRole(\Mera\ManageBundle\Entity\Role $role = null)
    {
        $this->Role = $role;

        return $this;
    }

    /**
     * Get Role
     *
     * @return Mera\ManageBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Add Facility
     *
     * @param Mera\ManageBundle\Entity\Facility $facility
     * @return User
     */
    public function addFacility(\Mera\ManageBundle\Entity\Facility $facility)
    {
        $this->Facility[] = $facility;

        return $this;
    }

    /**
     * Remove Facility
     *
     * @param Mera\ManageBundle\Entity\Facility $facility
     */
    public function removeFacility(\Mera\ManageBundle\Entity\Facility $facility)
    {
        $this->Facility->removeElement($facility);
    }

    /**
     * Get Facility
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getFacility()
    {
        return $this->Facility;
    }

}