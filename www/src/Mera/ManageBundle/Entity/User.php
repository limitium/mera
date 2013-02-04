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
     * @var integer $id
     */
    protected $id;

    /**
     * @Assert\Blank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @Assert\Blank()
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
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @var string $first_name
     */
    private $first_name;

    /**
     * @var string $last_name
     */
    private $last_name;


    /**
     * Set first_name
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @var Mera\ManageBundle\Entity\Facility
     */
    private $Facility;


    /**
     * Set Facility
     *
     * @param Mera\ManageBundle\Entity\Facility $facility
     * @return User
     */
    public function setFacility(\Mera\ManageBundle\Entity\Facility $facility = null)
    {
        $this->Facility = $facility;

        return $this;
    }

    /**
     * Get Facility
     *
     * @return Mera\ManageBundle\Entity\Facility
     */
    public function getFacility()
    {
        return $this->Facility;
    }
}