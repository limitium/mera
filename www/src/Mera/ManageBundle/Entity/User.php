<?php

namespace Mera\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Mera\ManageBundle\Entity\User
 */
class User extends BaseUser
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $Facility;
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @Assert\NotBlank()
     * @Assert\MinLength(limit=8)
     */
    protected $password;

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

    /**
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }
}