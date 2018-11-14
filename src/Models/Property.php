<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Property model.
 */
class Property extends BaseModel
{

    protected $container = [];

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
        "Units" => "Property[]",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['PropertyID']) ? $this->container['PropertyID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [PropertyID] field.
	 * @return  integer
	 */
	public function getPropertyID() {
        return isset($this->container['PropertyID']) ? $this->container['PropertyID'] : null;
	}

	/**
	 * Set the [PropertyID] field.
     * @param    integer $propertyID
     * @return  Property
	 */
	public function setPropertyID($propertyID) {
        $this->container['PropertyID'] = $propertyID;
        return $this;
	}

    
    /**
	 * Get the [Name] field.
	 * @return  string
	 */
	public function getName() {
        return isset($this->container['Name']) ? $this->container['Name'] : null;
	}

	/**
	 * Set the [Name] field.
     * @param    string $name
     * @return  Property
	 */
	public function setName($name) {
        $this->container['Name'] = $name;
        return $this;
	}

    
    /**
	 * Get the [ShortName] field.
	 * @return  string
	 */
	public function getShortName() {
        return isset($this->container['ShortName']) ? $this->container['ShortName'] : null;
	}

	/**
	 * Set the [ShortName] field.
     * @param    string $shortName
     * @return  Property
	 */
	public function setShortName($shortName) {
        $this->container['ShortName'] = $shortName;
        return $this;
	}

    
    /**
	 * Get the [BillingName1] field.
	 * @return  string
	 */
	public function getBillingName1() {
        return isset($this->container['BillingName1']) ? $this->container['BillingName1'] : null;
	}

	/**
	 * Set the [BillingName1] field.
     * @param    string $billingName1
     * @return  Property
	 */
	public function setBillingName1($billingName1) {
        $this->container['BillingName1'] = $billingName1;
        return $this;
	}

    
    /**
	 * Get the [BillingName2] field.
	 * @return  string
	 */
	public function getBillingName2() {
        return isset($this->container['BillingName2']) ? $this->container['BillingName2'] : null;
	}

	/**
	 * Set the [BillingName2] field.
     * @param    string $billingName2
     * @return  Property
	 */
	public function setBillingName2($billingName2) {
        $this->container['BillingName2'] = $billingName2;
        return $this;
	}

    
    /**
	 * Get the [ManagerName] field.
	 * @return  string
	 */
	public function getManagerName() {
        return isset($this->container['ManagerName']) ? $this->container['ManagerName'] : null;
	}

	/**
	 * Set the [ManagerName] field.
     * @param    string $managerName
     * @return  Property
	 */
	public function setManagerName($managerName) {
        $this->container['ManagerName'] = $managerName;
        return $this;
	}

    
    /**
	 * Get the [IsActive] field.
	 * @return  bool
	 */
	public function getIsActive() {
        return isset($this->container['IsActive']) ? $this->container['IsActive'] : null;
	}

	/**
	 * Set the [IsActive] field.
     * @param    bool $isActive
     * @return  Property
	 */
	public function setIsActive($isActive) {
        $this->container['IsActive'] = $isActive;
        return $this;
	}

    
    /**
	 * Get the [IsCommercial] field.
	 * @return  bool
	 */
	public function getIsCommercial() {
        return isset($this->container['IsCommercial']) ? $this->container['IsCommercial'] : null;
	}

	/**
	 * Set the [IsCommercial] field.
     * @param    bool $isCommercial
     * @return  Property
	 */
	public function setIsCommercial($isCommercial) {
        $this->container['IsCommercial'] = $isCommercial;
        return $this;
	}

    
    /**
	 * Get the [PropertyType] field.
	 * @return  string
	 */
	public function getPropertyType() {
        return isset($this->container['PropertyType']) ? $this->container['PropertyType'] : null;
	}

	/**
	 * Set the [PropertyType] field.
     * @param    string $propertyType
     * @return  Property
	 */
	public function setPropertyType($propertyType) {
        $this->container['PropertyType'] = $propertyType;
        return $this;
	}

    
    /**
	 * Get the [Units] field.
	 * @return  Property[]
	 */
	public function getUnits() {
        return isset($this->container['Units']) ? $this->container['Units'] : null;
	}

	/**
	 * Set the [Units] field.
     * @param    Property[] $units
     * @return  Property
	 */
	public function setUnits($units) {
        $this->container['Units'] = $units;
        return $this;
	}

    
    #endregion
}