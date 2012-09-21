<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\ExecutivePerson
 */
class ExecutivePerson
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
     * @var string $position
     */
    private $position;

    /**
     * @var string $contact
     */
    private $contact;

    /**
     * @var string $responsibilities
     */
    private $responsibilities;

    /**
     * @var string $document
     */
    private $document;

    /**
     * @var \DateTime $date
     */
    private $date;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;


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
     * @return ExecutivePerson
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
     * Set position
     *
     * @param string $position
     * @return ExecutivePerson
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return ExecutivePerson
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set responsibilities
     *
     * @param string $responsibilities
     * @return ExecutivePerson
     */
    public function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
    
        return $this;
    }

    /**
     * Get responsibilities
     *
     * @return string 
     */
    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    /**
     * Set document
     *
     * @param string $document
     * @return ExecutivePerson
     */
    public function setDocument($document)
    {
        $this->document = $document;
    
        return $this;
    }

    /**
     * Get document
     *
     * @return string 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ExecutivePerson
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return ExecutivePerson
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
}