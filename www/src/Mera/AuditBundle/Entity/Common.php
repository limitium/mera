<?php

namespace Mera\AuditBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mera\AuditBundle\Entity\Common
 */
class Common
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $address_legal
     */
    private $address_legal;


    /**
     * @var string $address_actual
     */
    private $address_actual;

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
     * @var \Mera\ManageBundle\Entity\Facility
     */
    private $Facility;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $Buildings;
    /**
     * @var datetime $created
     */
    private $created;

    /**
     * @var datetime $updated
     */
    private $updated;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Buildings = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set address_actual
     *
     * @param string $addressActual
     * @return Common
     */
    public function setAddressActual($addressActual)
    {
        $this->address_actual = $addressActual;

        return $this;
    }

    /**
     * Get address_actual
     *
     * @return string
     */
    public function getAddressActual()
    {
        return $this->address_actual;
    }

    /**
     * Set tin
     *
     * @param string $tin
     * @return Common
     */
    public
    function setTin($tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * Get tin
     *
     * @return string
     */
    public
    function getTin()
    {
        return $this->tin;
    }

    /**
     * Set cat
     *
     * @param string $cat
     * @return Common
     */
    public
    function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return string
     */
    public
    function getCat()
    {
        return $this->cat;
    }

    /**
     * Set settlement_account
     *
     * @param string $settlementAccount
     * @return Common
     */
    public
    function setSettlementAccount($settlementAccount)
    {
        $this->settlement_account = $settlementAccount;

        return $this;
    }

    /**
     * Get settlement_account
     *
     * @return string
     */
    public
    function getSettlementAccount()
    {
        return $this->settlement_account;
    }

    /**
     * Set bic
     *
     * @param string $bic
     * @return Common
     */
    public
    function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Get bic
     *
     * @return string
     */
    public
    function getBic()
    {
        return $this->bic;
    }

    /**
     * Set bank_name
     *
     * @param string $bankName
     * @return Common
     */
    public
    function setBankName($bankName)
    {
        $this->bank_name = $bankName;

        return $this;
    }

    /**
     * Get bank_name
     *
     * @return string
     */
    public
    function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * Set agrn
     *
     * @param string $agrn
     * @return Common
     */
    public
    function setAgrn($agrn)
    {
        $this->agrn = $agrn;

        return $this;
    }

    /**
     * Get agrn
     *
     * @return string
     */
    public
    function getAgrn()
    {
        return $this->agrn;
    }

    /**
     * Set okved
     *
     * @param string $okved
     * @return Common
     */
    public
    function setOkved($okved)
    {
        $this->okved = $okved;

        return $this;
    }

    /**
     * Get okved
     *
     * @return string
     */
    public
    function getOkved()
    {
        return $this->okved;
    }

    /**
     * Set okp
     *
     * @param string $okp
     * @return Common
     */
    public
    function setOkp($okp)
    {
        $this->okp = $okp;

        return $this;
    }

    /**
     * Get okp
     *
     * @return string
     */
    public
    function getOkp()
    {
        return $this->okp;
    }

    /**
     * Set Facility
     *
     * @param \Mera\ManageBundle\Entity\Facility $facility
     * @return Common
     */
    public
    function setFacility(\Mera\ManageBundle\Entity\Facility $facility = null)
    {
        $this->Facility = $facility;

        return $this;
    }

    /**
     * Get Facility
     *
     * @return \Mera\ManageBundle\Entity\Facility
     */
    public
    function getFacility()
    {
        return $this->Facility;
    }

    /**
     * Add Buildings
     *
     * @param \Mera\AuditBundle\Entity\Building $buildings
     * @return Common
     */
    public
    function addBuilding(\Mera\AuditBundle\Entity\Building $buildings)
    {
        $this->Buildings[] = $buildings;

        return $this;
    }

    /**
     * Remove Buildings
     *
     * @param \Mera\AuditBundle\Entity\Building $buildings
     */
    public
    function removeBuilding(\Mera\AuditBundle\Entity\Building $buildings)
    {
        $this->Buildings->removeElement($buildings);
    }

    /**
     * Get Buildings
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBuildings()
    {
        return $this->Buildings;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Common
     */
    public
    function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public
    function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Common
     */
    public
    function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public
    function getUpdated()
    {
        return $this->updated;
    }

    function __toString()
    {
        return $this->getFacility()->getName();
    }

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $ConstructElements;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $ConsumptionMeters;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $ElectroEquipments;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $LightsSystems;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $Pipelines;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $FuelConsumptions;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $ExecutivePersons;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $Personals;


    /**
     * Add ConstructElements
     *
     * @param \Mera\AuditBundle\Entity\ConstructElement $constructElements
     * @return Common
     */
    public function addConstructElement(\Mera\AuditBundle\Entity\ConstructElement $constructElements)
    {
        $this->ConstructElements[] = $constructElements;

        return $this;
    }

    /**
     * Remove ConstructElements
     *
     * @param \Mera\AuditBundle\Entity\ConstructElement $constructElements
     */
    public function removeConstructElement(\Mera\AuditBundle\Entity\ConstructElement $constructElements)
    {
        $this->ConstructElements->removeElement($constructElements);
    }

    /**
     * Get ConstructElements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConstructElements()
    {
        return $this->ConstructElements;
    }

    /**
     * Add ConsumptionMeters
     *
     * @param \Mera\AuditBundle\Entity\ConsumptionMeter $consumptionMeters
     * @return Common
     */
    public function addConsumptionMeter(\Mera\AuditBundle\Entity\ConsumptionMeter $consumptionMeters)
    {
        $this->ConsumptionMeters[] = $consumptionMeters;

        return $this;
    }

    /**
     * Remove ConsumptionMeters
     *
     * @param \Mera\AuditBundle\Entity\ConsumptionMeter $consumptionMeters
     */
    public function removeConsumptionMeter(\Mera\AuditBundle\Entity\ConsumptionMeter $consumptionMeters)
    {
        $this->ConsumptionMeters->removeElement($consumptionMeters);
    }

    /**
     * Get ConsumptionMeters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConsumptionMeters()
    {
        return $this->ConsumptionMeters;
    }

    /**
     * Add ElectroEquipments
     *
     * @param \Mera\AuditBundle\Entity\ElectroEquipment $electroEquipments
     * @return Common
     */
    public function addElectroEquipment(\Mera\AuditBundle\Entity\ElectroEquipment $electroEquipments)
    {
        $this->ElectroEquipments[] = $electroEquipments;

        return $this;
    }

    /**
     * Remove ElectroEquipments
     *
     * @param \Mera\AuditBundle\Entity\ElectroEquipment $electroEquipments
     */
    public function removeElectroEquipment(\Mera\AuditBundle\Entity\ElectroEquipment $electroEquipments)
    {
        $this->ElectroEquipments->removeElement($electroEquipments);
    }

    /**
     * Get ElectroEquipments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElectroEquipments()
    {
        return $this->ElectroEquipments;
    }

    /**
     * Add LightsSystems
     *
     * @param \Mera\AuditBundle\Entity\LightsSystem $lightsSystems
     * @return Common
     */
    public function addLightsSystem(\Mera\AuditBundle\Entity\LightsSystem $lightsSystems)
    {
        $this->LightsSystems[] = $lightsSystems;

        return $this;
    }

    /**
     * Remove LightsSystems
     *
     * @param \Mera\AuditBundle\Entity\LightsSystem $lightsSystems
     */
    public function removeLightsSystem(\Mera\AuditBundle\Entity\LightsSystem $lightsSystems)
    {
        $this->LightsSystems->removeElement($lightsSystems);
    }

    /**
     * Get LightsSystems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLightsSystems()
    {
        return $this->LightsSystems;
    }

    /**
     * Add Pipelines
     *
     * @param \Mera\AuditBundle\Entity\Pipeline $pipelines
     * @return Common
     */
    public function addPipeline(\Mera\AuditBundle\Entity\Pipeline $pipelines)
    {
        $this->Pipelines[] = $pipelines;

        return $this;
    }

    /**
     * Remove Pipelines
     *
     * @param \Mera\AuditBundle\Entity\Pipeline $pipelines
     */
    public function removePipeline(\Mera\AuditBundle\Entity\Pipeline $pipelines)
    {
        $this->Pipelines->removeElement($pipelines);
    }

    /**
     * Get Pipelines
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPipelines()
    {
        return $this->Pipelines;
    }

    /**
     * Add FuelConsumptions
     *
     * @param \Mera\AuditBundle\Entity\FuelConsumption $fuelConsumptions
     * @return Common
     */
    public function addFuelConsumption(\Mera\AuditBundle\Entity\FuelConsumption $fuelConsumptions)
    {
        $this->FuelConsumptions[] = $fuelConsumptions;

        return $this;
    }

    /**
     * Remove FuelConsumptions
     *
     * @param \Mera\AuditBundle\Entity\FuelConsumption $fuelConsumptions
     */
    public function removeFuelConsumption(\Mera\AuditBundle\Entity\FuelConsumption $fuelConsumptions)
    {
        $this->FuelConsumptions->removeElement($fuelConsumptions);
    }

    /**
     * Get FuelConsumptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFuelConsumptions()
    {
        return $this->FuelConsumptions;
    }

    /**
     * Add ExecutivePersons
     *
     * @param \Mera\AuditBundle\Entity\ExecutivePerson $executivePersons
     * @return Common
     */
    public function addExecutivePerson(\Mera\AuditBundle\Entity\ExecutivePerson $executivePersons)
    {
        $this->ExecutivePersons[] = $executivePersons;

        return $this;
    }

    /**
     * Remove ExecutivePersons
     *
     * @param \Mera\AuditBundle\Entity\ExecutivePerson $executivePersons
     */
    public function removeExecutivePerson(\Mera\AuditBundle\Entity\ExecutivePerson $executivePersons)
    {
        $this->ExecutivePersons->removeElement($executivePersons);
    }

    /**
     * Get ExecutivePersons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExecutivePersons()
    {
        return $this->ExecutivePersons;
    }

    /**
     * Add Personals
     *
     * @param \Mera\AuditBundle\Entity\Personal $personals
     * @return Common
     */
    public function addPersonal(\Mera\AuditBundle\Entity\Personal $personals)
    {
        $this->Personals[] = $personals;

        return $this;
    }

    /**
     * Remove Personals
     *
     * @param \Mera\AuditBundle\Entity\Personal $personals
     */
    public function removePersonal(\Mera\AuditBundle\Entity\Personal $personals)
    {
        $this->Personals->removeElement($personals);
    }

    /**
     * Get Personals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonals()
    {
        return $this->Personals;
    }
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $Files;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $Transformators;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $FundsVolumes;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $PersonalQuantitys;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $ConsumedTariffs;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $NaturalProductions;


    /**
     * Add Files
     *
     * @param \Mera\AuditBundle\Entity\File $files
     * @return Common
     */
    public function addFile(\Mera\AuditBundle\Entity\File $files)
    {
        $this->Files[] = $files;
    
        return $this;
    }

    /**
     * Remove Files
     *
     * @param \Mera\AuditBundle\Entity\File $files
     */
    public function removeFile(\Mera\AuditBundle\Entity\File $files)
    {
        $this->Files->removeElement($files);
    }

    /**
     * Get Files
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFiles()
    {
        return $this->Files;
    }

    /**
     * Add Transformators
     *
     * @param \Mera\AuditBundle\Entity\Transformator $transformators
     * @return Common
     */
    public function addTransofrmator(\Mera\AuditBundle\Entity\Transformator $transformators)
    {
        $this->Transformators[] = $transformators;
    
        return $this;
    }

    /**
     * Remove Transformators
     *
     * @param \Mera\AuditBundle\Entity\Transformator $transformators
     */
    public function removeTransofrmator(\Mera\AuditBundle\Entity\Transformator $transformators)
    {
        $this->Transformators->removeElement($transformators);
    }

    /**
     * Get Transformators
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTransformators()
    {
        return $this->Transformators;
    }

    /**
     * Add FundsVolumes
     *
     * @param \Mera\AuditBundle\Entity\FundsVolume $fundsVolumes
     * @return Common
     */
    public function addFundsVolume(\Mera\AuditBundle\Entity\FundsVolume $fundsVolumes)
    {
        $this->FundsVolumes[] = $fundsVolumes;
    
        return $this;
    }

    /**
     * Remove FundsVolumes
     *
     * @param \Mera\AuditBundle\Entity\FundsVolume $fundsVolumes
     */
    public function removeFundsVolume(\Mera\AuditBundle\Entity\FundsVolume $fundsVolumes)
    {
        $this->FundsVolumes->removeElement($fundsVolumes);
    }

    /**
     * Get FundsVolumes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFundsVolumes()
    {
        return $this->FundsVolumes;
    }

    /**
     * Add PersonalQuantitys
     *
     * @param \Mera\AuditBundle\Entity\PersonalQuantity $personalQuantitys
     * @return Common
     */
    public function addPersonalQuantity(\Mera\AuditBundle\Entity\PersonalQuantity $personalQuantitys)
    {
        $this->PersonalQuantitys[] = $personalQuantitys;
    
        return $this;
    }

    /**
     * Remove PersonalQuantitys
     *
     * @param \Mera\AuditBundle\Entity\PersonalQuantity $personalQuantitys
     */
    public function removePersonalQuantity(\Mera\AuditBundle\Entity\PersonalQuantity $personalQuantitys)
    {
        $this->PersonalQuantitys->removeElement($personalQuantitys);
    }

    /**
     * Get PersonalQuantitys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonalQuantitys()
    {
        return $this->PersonalQuantitys;
    }

    /**
     * Add ConsumedTariffs
     *
     * @param \Mera\AuditBundle\Entity\ConsumedTariff $consumedTariffs
     * @return Common
     */
    public function addConsumedTariff(\Mera\AuditBundle\Entity\ConsumedTariff $consumedTariffs)
    {
        $this->ConsumedTariffs[] = $consumedTariffs;
    
        return $this;
    }

    /**
     * Remove ConsumedTariffs
     *
     * @param \Mera\AuditBundle\Entity\ConsumedTariff $consumedTariffs
     */
    public function removeConsumedTariff(\Mera\AuditBundle\Entity\ConsumedTariff $consumedTariffs)
    {
        $this->ConsumedTariffs->removeElement($consumedTariffs);
    }

    /**
     * Get ConsumedTariffs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConsumedTariffs()
    {
        return $this->ConsumedTariffs;
    }

    /**
     * Add NaturalProductions
     *
     * @param \Mera\AuditBundle\Entity\NaturalProduction $naturalProductions
     * @return Common
     */
    public function addNaturalProduction(\Mera\AuditBundle\Entity\NaturalProduction $naturalProductions)
    {
        $this->NaturalProductions[] = $naturalProductions;
    
        return $this;
    }

    /**
     * Remove NaturalProductions
     *
     * @param \Mera\AuditBundle\Entity\NaturalProduction $naturalProductions
     */
    public function removeNaturalProduction(\Mera\AuditBundle\Entity\NaturalProduction $naturalProductions)
    {
        $this->NaturalProductions->removeElement($naturalProductions);
    }

    /**
     * Get NaturalProductions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNaturalProductions()
    {
        return $this->NaturalProductions;
    }
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $ConsumptionResources;


    /**
     * Add Transformators
     *
     * @param \Mera\AuditBundle\Entity\Transformator $transformators
     * @return Common
     */
    public function addTransformator(\Mera\AuditBundle\Entity\Transformator $transformators)
    {
        $this->Transformators[] = $transformators;
    
        return $this;
    }

    /**
     * Remove Transformators
     *
     * @param \Mera\AuditBundle\Entity\Transformator $transformators
     */
    public function removeTransformator(\Mera\AuditBundle\Entity\Transformator $transformators)
    {
        $this->Transformators->removeElement($transformators);
    }

    /**
     * Add ConsumptionResources
     *
     * @param \Mera\AuditBundle\Entity\ConsumptionResource $consumptionResources
     * @return Common
     */
    public function addConsumptionResource(\Mera\AuditBundle\Entity\ConsumptionResource $consumptionResources)
    {
        $this->ConsumptionResources[] = $consumptionResources;
    
        return $this;
    }

    /**
     * Remove ConsumptionResources
     *
     * @param \Mera\AuditBundle\Entity\ConsumptionResource $consumptionResources
     */
    public function removeConsumptionResource(\Mera\AuditBundle\Entity\ConsumptionResource $consumptionResources)
    {
        $this->ConsumptionResources->removeElement($consumptionResources);
    }

    /**
     * Get ConsumptionResources
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConsumptionResources()
    {
        return $this->ConsumptionResources;
    }
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $FloorPlans;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $HeatingSystems;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $VentilationSystems;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $EnergySavingPrograms;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $EnergySavingMeasures;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $PowerCircuits;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $SupplyContracts;


    /**
     * Add FloorPlans
     *
     * @param Mera\AuditBundle\Entity\FloorPlan $floorPlans
     * @return Common
     */
    public function addFloorPlan(\Mera\AuditBundle\Entity\FloorPlan $floorPlans)
    {
        $this->FloorPlans[] = $floorPlans;
    
        return $this;
    }

    /**
     * Remove FloorPlans
     *
     * @param Mera\AuditBundle\Entity\FloorPlan $floorPlans
     */
    public function removeFloorPlan(\Mera\AuditBundle\Entity\FloorPlan $floorPlans)
    {
        $this->FloorPlans->removeElement($floorPlans);
    }

    /**
     * Get FloorPlans
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFloorPlans()
    {
        return $this->FloorPlans;
    }

    /**
     * Add HeatingSystems
     *
     * @param Mera\AuditBundle\Entity\HeatingSystem $heatingSystems
     * @return Common
     */
    public function addHeatingSystem(\Mera\AuditBundle\Entity\HeatingSystem $heatingSystems)
    {
        $this->HeatingSystems[] = $heatingSystems;
    
        return $this;
    }

    /**
     * Remove HeatingSystems
     *
     * @param Mera\AuditBundle\Entity\HeatingSystem $heatingSystems
     */
    public function removeHeatingSystem(\Mera\AuditBundle\Entity\HeatingSystem $heatingSystems)
    {
        $this->HeatingSystems->removeElement($heatingSystems);
    }

    /**
     * Get HeatingSystems
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getHeatingSystems()
    {
        return $this->HeatingSystems;
    }

    /**
     * Add VentilationSystems
     *
     * @param Mera\AuditBundle\Entity\VentilationSystem $ventilationSystems
     * @return Common
     */
    public function addVentilationSystem(\Mera\AuditBundle\Entity\VentilationSystem $ventilationSystems)
    {
        $this->VentilationSystems[] = $ventilationSystems;
    
        return $this;
    }

    /**
     * Remove VentilationSystems
     *
     * @param Mera\AuditBundle\Entity\VentilationSystem $ventilationSystems
     */
    public function removeVentilationSystem(\Mera\AuditBundle\Entity\VentilationSystem $ventilationSystems)
    {
        $this->VentilationSystems->removeElement($ventilationSystems);
    }

    /**
     * Get VentilationSystems
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getVentilationSystems()
    {
        return $this->VentilationSystems;
    }

    /**
     * Add EnergySavingPrograms
     *
     * @param Mera\AuditBundle\Entity\EnergySavingProgram $energySavingPrograms
     * @return Common
     */
    public function addEnergySavingProgram(\Mera\AuditBundle\Entity\EnergySavingProgram $energySavingPrograms)
    {
        $this->EnergySavingPrograms[] = $energySavingPrograms;
    
        return $this;
    }

    /**
     * Remove EnergySavingPrograms
     *
     * @param Mera\AuditBundle\Entity\EnergySavingProgram $energySavingPrograms
     */
    public function removeEnergySavingProgram(\Mera\AuditBundle\Entity\EnergySavingProgram $energySavingPrograms)
    {
        $this->EnergySavingPrograms->removeElement($energySavingPrograms);
    }

    /**
     * Get EnergySavingPrograms
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEnergySavingPrograms()
    {
        return $this->EnergySavingPrograms;
    }

    /**
     * Add EnergySavingMeasures
     *
     * @param Mera\AuditBundle\Entity\EnergySavingMeasure $energySavingMeasures
     * @return Common
     */
    public function addEnergySavingMeasure(\Mera\AuditBundle\Entity\EnergySavingMeasure $energySavingMeasures)
    {
        $this->EnergySavingMeasures[] = $energySavingMeasures;
    
        return $this;
    }

    /**
     * Remove EnergySavingMeasures
     *
     * @param Mera\AuditBundle\Entity\EnergySavingMeasure $energySavingMeasures
     */
    public function removeEnergySavingMeasure(\Mera\AuditBundle\Entity\EnergySavingMeasure $energySavingMeasures)
    {
        $this->EnergySavingMeasures->removeElement($energySavingMeasures);
    }

    /**
     * Get EnergySavingMeasures
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEnergySavingMeasures()
    {
        return $this->EnergySavingMeasures;
    }

    /**
     * Add PowerCircuits
     *
     * @param Mera\AuditBundle\Entity\PowerCircuit $powerCircuits
     * @return Common
     */
    public function addPowerCircuit(\Mera\AuditBundle\Entity\PowerCircuit $powerCircuits)
    {
        $this->PowerCircuits[] = $powerCircuits;
    
        return $this;
    }

    /**
     * Remove PowerCircuits
     *
     * @param Mera\AuditBundle\Entity\PowerCircuit $powerCircuits
     */
    public function removePowerCircuit(\Mera\AuditBundle\Entity\PowerCircuit $powerCircuits)
    {
        $this->PowerCircuits->removeElement($powerCircuits);
    }

    /**
     * Get PowerCircuits
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPowerCircuits()
    {
        return $this->PowerCircuits;
    }

    /**
     * Add SupplyContracts
     *
     * @param Mera\AuditBundle\Entity\SupplyContract $supplyContracts
     * @return Common
     */
    public function addSupplyContract(\Mera\AuditBundle\Entity\SupplyContract $supplyContracts)
    {
        $this->SupplyContracts[] = $supplyContracts;
    
        return $this;
    }

    /**
     * Remove SupplyContracts
     *
     * @param Mera\AuditBundle\Entity\SupplyContract $supplyContracts
     */
    public function removeSupplyContract(\Mera\AuditBundle\Entity\SupplyContract $supplyContracts)
    {
        $this->SupplyContracts->removeElement($supplyContracts);
    }

    /**
     * Get SupplyContracts
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSupplyContracts()
    {
        return $this->SupplyContracts;
    }
}