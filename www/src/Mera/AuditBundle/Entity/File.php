<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\File
 */
class File
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return File
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
     * @return File
     */
    public function setCommon(\Mera\AuditBundle\Entity\Common $common)
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
     * @var string $hash_name
     */
    private $hash_name;


    /**
     * Set hash_name
     *
     * @param string $hashName
     * @return File
     */
    public function setHashName($hashName)
    {
        $this->hash_name = $hashName;
    
        return $this;
    }

    /**
     * Get hash_name
     *
     * @return string 
     */
    public function getHashName()
    {
        return $this->hash_name;
    }
    /**
     * @var string $image_type
     */
    private $image_type;

    /**
     * @var integer $size
     */
    private $size;


    /**
     * Set image_type
     *
     * @param string $imageType
     * @return File
     */
    public function setImageType($imageType)
    {
        $this->image_type = $imageType;
    
        return $this;
    }

    /**
     * Get image_type
     *
     * @return string 
     */
    public function getImageType()
    {
        return $this->image_type;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return File
     */
    public function setSize($size)
    {
        $this->size = $size;
    
        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }
}