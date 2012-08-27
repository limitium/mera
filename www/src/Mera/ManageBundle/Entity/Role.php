<?php

namespace Mera\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\ManageBundle\Entity\Role
 */
class Role
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
     * @return Role
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
     * Set User
     *
     * @param Mera\ManageBundle\Entity\User $user
     * @return Role
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