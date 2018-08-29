<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * Property base class.
 */
class Property extends BaseModel
{

    protected static $types = [
                "PropertyID" => "integer",
                "Name" => "string",
                "ShortName" => "string",
                "BillingName1" => "string",
                "BillingName2" => "string",
                "ManagerName" => "string",
                "IsActive" => "bool",
                "IsCommercial" => "bool",
                "PropertyType" => "string",
                "Units" => "\RentManager\Models\Unit[]",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['PropertyID']) ? $this->container['PropertyID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [PropertyID] field.
	 * @return integer
	 */
	public function getPropertyID() {
		return isset($this->container['PropertyID']) ? $this->container['PropertyID'] : null;
	}

	/**
	 * Set the [PropertyID] field.
	 * @param integer $PropertyID
	 */
	public function setPropertyID($PropertyID) {
		$this->container['PropertyID'] = $PropertyID;
	}

    
    /**
	 * Get the [Name] field.
	 * @return string
	 */
	public function getName() {
		return isset($this->container['Name']) ? $this->container['Name'] : null;
	}

	/**
	 * Set the [Name] field.
	 * @param string $Name
	 */
	public function setName($Name) {
		$this->container['Name'] = $Name;
	}

    
    /**
	 * Get the [ShortName] field.
	 * @return string
	 */
	public function getShortName() {
		return isset($this->container['ShortName']) ? $this->container['ShortName'] : null;
	}

	/**
	 * Set the [ShortName] field.
	 * @param string $ShortName
	 */
	public function setShortName($ShortName) {
		$this->container['ShortName'] = $ShortName;
	}

    
    /**
	 * Get the [BillingName1] field.
	 * @return string
	 */
	public function getBillingName1() {
		return isset($this->container['BillingName1']) ? $this->container['BillingName1'] : null;
	}

	/**
	 * Set the [BillingName1] field.
	 * @param string $BillingName1
	 */
	public function setBillingName1($BillingName1) {
		$this->container['BillingName1'] = $BillingName1;
	}

    
    /**
	 * Get the [BillingName2] field.
	 * @return string
	 */
	public function getBillingName2() {
		return isset($this->container['BillingName2']) ? $this->container['BillingName2'] : null;
	}

	/**
	 * Set the [BillingName2] field.
	 * @param string $BillingName2
	 */
	public function setBillingName2($BillingName2) {
		$this->container['BillingName2'] = $BillingName2;
	}

    
    /**
	 * Get the [ManagerName] field.
	 * @return string
	 */
	public function getManagerName() {
		return isset($this->container['ManagerName']) ? $this->container['ManagerName'] : null;
	}

	/**
	 * Set the [ManagerName] field.
	 * @param string $ManagerName
	 */
	public function setManagerName($ManagerName) {
		$this->container['ManagerName'] = $ManagerName;
	}

    
    /**
	 * Get the [IsActive] field.
	 * @return bool
	 */
	public function getIsActive() {
		return isset($this->container['IsActive']) ? $this->container['IsActive'] : null;
	}

	/**
	 * Set the [IsActive] field.
	 * @param bool $IsActive
	 */
	public function setIsActive($IsActive) {
		$this->container['IsActive'] = $IsActive;
	}

    
    /**
	 * Get the [IsCommercial] field.
	 * @return bool
	 */
	public function getIsCommercial() {
		return isset($this->container['IsCommercial']) ? $this->container['IsCommercial'] : null;
	}

	/**
	 * Set the [IsCommercial] field.
	 * @param bool $IsCommercial
	 */
	public function setIsCommercial($IsCommercial) {
		$this->container['IsCommercial'] = $IsCommercial;
	}

    
    /**
	 * Get the [PropertyType] field.
	 * @return string
	 */
	public function getPropertyType() {
		return isset($this->container['PropertyType']) ? $this->container['PropertyType'] : null;
	}

	/**
	 * Set the [PropertyType] field.
	 * @param string $PropertyType
	 */
	public function setPropertyType($PropertyType) {
		$this->container['PropertyType'] = $PropertyType;
	}

    
    /**
	 * Get the [Units] field.
	 * @return \RentManager\Models\Unit[]
	 */
	public function getUnits() {
		return isset($this->container['Units']) ? $this->container['Units'] : null;
	}

	/**
	 * Set the [Units] field.
	 * @param \RentManager\Models\Unit[] $Units
	 */
	public function setUnits($Units) {
		$this->container['Units'] = $Units;
	}

    
    #endregion
}