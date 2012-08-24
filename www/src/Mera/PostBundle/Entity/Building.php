<?php

namespace Mera\PostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\PostBundle\Entity\Building
 */
class Building
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
     * @var integer $year
     */
    private $year;

    /**
     * @var integer $floors
     */
    private $floors;

    /**
     * @var integer $height_ceilings
     */
    private $height_ceilings;

    /**
     * @var integer $height_building
     */
    private $height_building;

    /**
     * @var integer $volume_building
     */
    private $volume_building;

    /**
     * @var integer $volume_heated
     */
    private $volume_heated;

    /**
     * @var integer $area_total
     */
    private $area_total;

    /**
     * @var integer $area_glazing
     */
    private $area_glazing;

    /**
     * @var integer $perimeter_building
     */
    private $perimeter_building;

    /**
     * @var integer $depreciation_actual
     */
    private $depreciation_actual;

    /**
     * @var integer $depreciation_physical
     */
    private $depreciation_physical;

    /**
     * @var Mera\PostBundle\Entity\PostOffice
     */
    private $PostOffice;


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
     * @return Building
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
     * Set year
     *
     * @param integer $year
     * @return Building
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
     * Set floors
     *
     * @param integer $floors
     * @return Building
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;
    
        return $this;
    }

    /**
     * Get floors
     *
     * @return integer 
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * Set height_ceilings
     *
     * @param integer $heightCeilings
     * @return Building
     */
    public function setHeightCeilings($heightCeilings)
    {
        $this->height_ceilings = $heightCeilings;
    
        return $this;
    }

    /**
     * Get height_ceilings
     *
     * @return integer 
     */
    public function getHeightCeilings()
    {
        return $this->height_ceilings;
    }

    /**
     * Set height_building
     *
     * @param integer $heightBuilding
     * @return Building
     */
    public function setHeightBuilding($heightBuilding)
    {
        $this->height_building = $heightBuilding;
    
        return $this;
    }

    /**
     * Get height_building
     *
     * @return integer 
     */
    public function getHeightBuilding()
    {
        return $this->height_building;
    }

    /**
     * Set volume_building
     *
     * @param integer $volumeBuilding
     * @return Building
     */
    public function setVolumeBuilding($volumeBuilding)
    {
        $this->volume_building = $volumeBuilding;
    
        return $this;
    }

    /**
     * Get volume_building
     *
     * @return integer 
     */
    public function getVolumeBuilding()
    {
        return $this->volume_building;
    }

    /**
     * Set volume_heated
     *
     * @param integer $volumeHeated
     * @return Building
     */
    public function setVolumeHeated($volumeHeated)
    {
        $this->volume_heated = $volumeHeated;
    
        return $this;
    }

    /**
     * Get volume_heated
     *
     * @return integer 
     */
    public function getVolumeHeated()
    {
        return $this->volume_heated;
    }

    /**
     * Set area_total
     *
     * @param integer $areaTotal
     * @return Building
     */
    public function setAreaTotal($areaTotal)
    {
        $this->area_total = $areaTotal;
    
        return $this;
    }

    /**
     * Get area_total
     *
     * @return integer 
     */
    public function getAreaTotal()
    {
        return $this->area_total;
    }

    /**
     * Set area_glazing
     *
     * @param integer $areaGlazing
     * @return Building
     */
    public function setAreaGlazing($areaGlazing)
    {
        $this->area_glazing = $areaGlazing;
    
        return $this;
    }

    /**
     * Get area_glazing
     *
     * @return integer 
     */
    public function getAreaGlazing()
    {
        return $this->area_glazing;
    }

    /**
     * Set perimeter_building
     *
     * @param integer $perimeterBuilding
     * @return Building
     */
    public function setPerimeterBuilding($perimeterBuilding)
    {
        $this->perimeter_building = $perimeterBuilding;
    
        return $this;
    }

    /**
     * Get perimeter_building
     *
     * @return integer 
     */
    public function getPerimeterBuilding()
    {
        return $this->perimeter_building;
    }

    /**
     * Set depreciation_actual
     *
     * @param integer $depreciationActual
     * @return Building
     */
    public function setDepreciationActual($depreciationActual)
    {
        $this->depreciation_actual = $depreciationActual;
    
        return $this;
    }

    /**
     * Get depreciation_actual
     *
     * @return integer 
     */
    public function getDepreciationActual()
    {
        return $this->depreciation_actual;
    }

    /**
     * Set depreciation_physical
     *
     * @param integer $depreciationPhysical
     * @return Building
     */
    public function setDepreciationPhysical($depreciationPhysical)
    {
        $this->depreciation_physical = $depreciationPhysical;
    
        return $this;
    }

    /**
     * Get depreciation_physical
     *
     * @return integer 
     */
    public function getDepreciationPhysical()
    {
        return $this->depreciation_physical;
    }

    /**
     * Set PostOffice
     *
     * @param Mera\PostBundle\Entity\PostOffice $postOffice
     * @return Building
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
