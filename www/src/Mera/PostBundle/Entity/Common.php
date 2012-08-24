<?php

namespace Mera\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\PostBundle\Entity\Common
 */
class Common
{
    /**
     * @var integer $post_office_id
     */
    private $post_office_id;

    /**
     * @var string $address_legal
     */
    private $address_legal;

    /**
     * @var string $adress_actual
     */
    private $adress_actual;

    /**
     * @var string $tin
     */
    private $tin;

    /**
     * @var string $cat
     */
    private $cat;

    /**
     * @var string $settlement_account
     */
    private $settlement_account;

    /**
     * @var string $bic
     */
    private $bic;

    /**
     * @var string $bank_name
     */
    private $bank_name;

    /**
     * @var string $agrn
     */
    private $agrn;

    /**
     * @var string $okved
     */
    private $okved;

    /**
     * @var string $okp
     */
    private $okp;

    /**
     * @var Mera\PostBundle\Entity\PostOffice
     */
    private $PostOffice;


    /**
     * Set post_office_id
     *
     * @param integer $postOfficeId
     * @return Common
     */
    public function setPostOfficeId($postOfficeId)
    {
        $this->post_office_id = $postOfficeId;
    
        return $this;
    }

    /**
     * Get post_office_id
     *
     * @return integer 
     */
    public function getPostOfficeId()
    {
        return $this->post_office_id;
    }

    /**
     * Set address_legal
     *
     * @param string $addressLegal
     * @return Common
     */
    public function setAddressLegal($addressLegal)
    {
        $this->address_legal = $addressLegal;
    
        return $this;
    }

    /**
     * Get address_legal
     *
     * @return string 
     */
    public function getAddressLegal()
    {
        return $this->address_legal;
    }

    /**
     * Set adress_actual
     *
     * @param string $adressActual
     * @return Common
     */
    public function setAdressActual($adressActual)
    {
        $this->adress_actual = $adressActual;
    
        return $this;
    }

    /**
     * Get adress_actual
     *
     * @return string 
     */
    public function getAdressActual()
    {
        return $this->adress_actual;
    }

    /**
     * Set tin
     *
     * @param string $tin
     * @return Common
     */
    public function setTin($tin)
    {
        $this->tin = $tin;
    
        return $this;
    }

    /**
     * Get tin
     *
     * @return string 
     */
    public function getTin()
    {
        return $this->tin;
    }

    /**
     * Set cat
     *
     * @param string $cat
     * @return Common
     */
    public function setCat($cat)
    {
        $this->cat = $cat;
    
        return $this;
    }

    /**
     * Get cat
     *
     * @return string 
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set settlement_account
     *
     * @param string $settlementAccount
     * @return Common
     */
    public function setSettlementAccount($settlementAccount)
    {
        $this->settlement_account = $settlementAccount;
    
        return $this;
    }

    /**
     * Get settlement_account
     *
     * @return string 
     */
    public function getSettlementAccount()
    {
        return $this->settlement_account;
    }

    /**
     * Set bic
     *
     * @param string $bic
     * @return Common
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    
        return $this;
    }

    /**
     * Get bic
     *
     * @return string 
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Set bank_name
     *
     * @param string $bankName
     * @return Common
     */
    public function setBankName($bankName)
    {
        $this->bank_name = $bankName;
    
        return $this;
    }

    /**
     * Get bank_name
     *
     * @return string 
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * Set agrn
     *
     * @param string $agrn
     * @return Common
     */
    public function setAgrn($agrn)
    {
        $this->agrn = $agrn;
    
        return $this;
    }

    /**
     * Get agrn
     *
     * @return string 
     */
    public function getAgrn()
    {
        return $this->agrn;
    }

    /**
     * Set okved
     *
     * @param string $okved
     * @return Common
     */
    public function setOkved($okved)
    {
        $this->okved = $okved;
    
        return $this;
    }

    /**
     * Get okved
     *
     * @return string 
     */
    public function getOkved()
    {
        return $this->okved;
    }

    /**
     * Set okp
     *
     * @param string $okp
     * @return Common
     */
    public function setOkp($okp)
    {
        $this->okp = $okp;
    
        return $this;
    }

    /**
     * Get okp
     *
     * @return string 
     */
    public function getOkp()
    {
        return $this->okp;
    }

    /**
     * Set PostOffice
     *
     * @param Mera\PostBundle\Entity\PostOffice $postOffice
     * @return Common
     */
    public function setPostOffice(\Mera\PostBundle\Entity\PostOffice $postOffice = null)
    {
        $this->PostOffice = $postOffice;
    
        return $this;
    }

    /**
     * Get PostOffice
     *
     * @return Mera\PostBundle\Entity\PostOffice 
     */
    public function getPostOffice()
    {
        return $this->PostOffice;
    }
}
