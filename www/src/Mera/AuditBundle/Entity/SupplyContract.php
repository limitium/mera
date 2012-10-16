<?php

namespace Mera\AuditBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\SupplyContract
 */
class SupplyContract  extends File
{

    /**
     * @var Mera\AuditBundle\Entity\Common
     */
    private $Common;


    /**
     * Set Common
     *
     * @param Mera\AuditBundle\Entity\Common $common
     * @return SupplyContract
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