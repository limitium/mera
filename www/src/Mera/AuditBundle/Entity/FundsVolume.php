<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\FundsVolume
 */
class FundsVolume
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $year
     */
    private $year;

    /**
     * @var integer $budget
     */
    private $budget;

    /**
     * @var integer $non_budget
     */
    private $non_budget;

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;


    /**
     * Set id
     *
     * @param integer $id
     * @return FundsVolume
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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
     * Set year
     *
     * @param integer $year
     * @return FundsVolume
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set budget
     *
     * @param integer $budget
     * @return FundsVolume
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    
        return $this;
    }

    /**
     * Get budget
     *
     * @return integer 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set non_budget
     *
     * @param integer $nonBudget
     * @return FundsVolume
     */
    public function setNonBudget($nonBudget)
    {
        $this->non_budget = $nonBudget;
    
        return $this;
    }

    /**
     * Get non_budget
     *
     * @return integer 
     */
    public function getNonBudget()
    {
        return $this->non_budget;
    }

    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return FundsVolume
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
}