<?php

namespace Mera\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Mera\ManageBundle\Entity\Facility
 */
class Facility
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     * @Assert\NotBlank()
     * @Assert\MinLength(limit=6)
     */
    private $name;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;

    /**
     * @var Mera\ManageBundle\Entity\User
     */
    private $User;


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
     * @return Facility
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
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return Facility
     */
    public function setCommon(\Mera\AuditBundle\Entity\Common $common = null)
    {
        $this->Common = $common;

        return $this;
    }

    /**
     * Get Common
     *
     * @return Mera\AuditBundle\Entity\Common
     */
    public function getCommon()
    {
        return $this->Common;
    }

    /**
     * Set User
     *
     * @param Mera\ManageBundle\Entity\User $user
     * @return Facility
     */
    public function setUser(\Mera\ManageBundle\Entity\User $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return Mera\ManageBundle\Entity\User
     */
    public function getUser()
    {
        return $this->User;
    }
}