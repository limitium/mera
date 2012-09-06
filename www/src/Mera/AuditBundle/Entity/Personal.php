<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\Personal
 */
class Personal
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
     * @var string $school_name
     */
    private $school_name;

    /**
     * @var string $shcool_address
     */
    private $shcool_address;

    /**
     * @var string $school_license
     */
    private $school_license;

    /**
     * @var \DateTime $date_start
     */
    private $date_start;

    /**
     * @var \DateTime $date_end
     */
    private $date_end;

    /**
     * @var string $certification
     */
    private $certification;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;

    /**
     * @var Mera\AuditBundle\Entity\CourseType
     */
    private $CourseType;


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
     * @return Personal
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
     * @return Personal
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
     * Set school_name
     *
     * @param string $schoolName
     * @return Personal
     */
    public function setSchoolName($schoolName)
    {
        $this->school_name = $schoolName;
    
        return $this;
    }

    /**
     * Get school_name
     *
     * @return string 
     */
    public function getSchoolName()
    {
        return $this->school_name;
    }

    /**
     * Set shcool_address
     *
     * @param string $shcoolAddress
     * @return Personal
     */
    public function setShcoolAddress($shcoolAddress)
    {
        $this->shcool_address = $shcoolAddress;
    
        return $this;
    }

    /**
     * Get shcool_address
     *
     * @return string 
     */
    public function getShcoolAddress()
    {
        return $this->shcool_address;
    }

    /**
     * Set school_license
     *
     * @param string $schoolLicense
     * @return Personal
     */
    public function setSchoolLicense($schoolLicense)
    {
        $this->school_license = $schoolLicense;
    
        return $this;
    }

    /**
     * Get school_license
     *
     * @return string 
     */
    public function getSchoolLicense()
    {
        return $this->school_license;
    }

    /**
     * Set date_start
     *
     * @param \DateTime $dateStart
     * @return Personal
     */
    public function setDateStart($dateStart)
    {
        $this->date_start = $dateStart;
    
        return $this;
    }

    /**
     * Get date_start
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * Set date_end
     *
     * @param \DateTime $dateEnd
     * @return Personal
     */
    public function setDateEnd($dateEnd)
    {
        $this->date_end = $dateEnd;
    
        return $this;
    }

    /**
     * Get date_end
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * Set certification
     *
     * @param string $certification
     * @return Personal
     */
    public function setCertification($certification)
    {
        $this->certification = $certification;
    
        return $this;
    }

    /**
     * Get certification
     *
     * @return string 
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return Personal
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
     * Set CourseType
     *
     * @param Mera\AuditBundle\Entity\CourseType $courseType
     * @return Personal
     */
    public function setCourseType(\Mera\AuditBundle\Entity\CourseType $courseType = null)
    {
        $this->CourseType = $courseType;
    
        return $this;
    }

    /**
     * Get CourseType
     *
     * @return Mera\AuditBundle\Entity\CourseType 
     */
    public function getCourseType()
    {
        return $this->CourseType;
    }
}
