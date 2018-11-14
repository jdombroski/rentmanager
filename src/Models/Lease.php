<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Lease model.
 */
class Lease extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "LeaseID" => "integer",
        "TenantID" => "integer",
        "UnitID" => "integer",
        "PropertyID" => "integer",
        "MoveInDate" => "DateTime",
        "MoveOutDate" => "DateTime",
        "Property" => "Property",
        "Unit" => "Unit",
        "Tenant" => "Tenant",
        "ActiveLeaseRenewal" => "LeaseRenewal",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['LeaseID']) ? $this->container['LeaseID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [LeaseID] field.
	 * @return  integer
	 */
	public function getLeaseID() {
        return isset($this->container['LeaseID']) ? $this->container['LeaseID'] : null;
	}

	/**
	 * Set the [LeaseID] field.
     * @param    integer $leaseID
     * @return  Lease
	 */
	public function setLeaseID($leaseID) {
        $this->container['LeaseID'] = $leaseID;
        return $this;
	}

    
    /**
	 * Get the [TenantID] field.
	 * @return  integer
	 */
	public function getTenantID() {
        return isset($this->container['TenantID']) ? $this->container['TenantID'] : null;
	}

	/**
	 * Set the [TenantID] field.
     * @param    integer $tenantID
     * @return  Lease
	 */
	public function setTenantID($tenantID) {
        $this->container['TenantID'] = $tenantID;
        return $this;
	}

    
    /**
	 * Get the [UnitID] field.
	 * @return  integer
	 */
	public function getUnitID() {
        return isset($this->container['UnitID']) ? $this->container['UnitID'] : null;
	}

	/**
	 * Set the [UnitID] field.
     * @param    integer $unitID
     * @return  Lease
	 */
	public function setUnitID($unitID) {
        $this->container['UnitID'] = $unitID;
        return $this;
	}

    
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
     * @return  Lease
	 */
	public function setPropertyID($propertyID) {
        $this->container['PropertyID'] = $propertyID;
        return $this;
	}

    
    /**
	 * Get the [MoveInDate] field.
	 * @return  DateTime
	 */
	public function getMoveInDate() {
        return isset($this->container['MoveInDate']) ? $this->container['MoveInDate'] : null;
	}

	/**
	 * Set the [MoveInDate] field.
     * @param    DateTime $moveInDate
     * @return  Lease
	 */
	public function setMoveInDate($moveInDate) {
        $this->container['MoveInDate'] = $moveInDate;
        return $this;
	}

    
    /**
	 * Get the [MoveOutDate] field.
	 * @return  DateTime
	 */
	public function getMoveOutDate() {
        return isset($this->container['MoveOutDate']) ? $this->container['MoveOutDate'] : null;
	}

	/**
	 * Set the [MoveOutDate] field.
     * @param    DateTime $moveOutDate
     * @return  Lease
	 */
	public function setMoveOutDate($moveOutDate) {
        $this->container['MoveOutDate'] = $moveOutDate;
        return $this;
	}

    
    /**
	 * Get the [Property] field.
	 * @return  Property
	 */
	public function getProperty() {
        return isset($this->container['Property']) ? $this->container['Property'] : null;
	}

	/**
	 * Set the [Property] field.
     * @param    Property $property
     * @return  Lease
	 */
	public function setProperty($property) {
        $this->container['Property'] = $property;
        return $this;
	}

    
    /**
	 * Get the [Unit] field.
	 * @return  Unit
	 */
	public function getUnit() {
        return isset($this->container['Unit']) ? $this->container['Unit'] : null;
	}

	/**
	 * Set the [Unit] field.
     * @param    Unit $unit
     * @return  Lease
	 */
	public function setUnit($unit) {
        $this->container['Unit'] = $unit;
        return $this;
	}

    
    /**
	 * Get the [Tenant] field.
	 * @return  Tenant
	 */
	public function getTenant() {
        return isset($this->container['Tenant']) ? $this->container['Tenant'] : null;
	}

	/**
	 * Set the [Tenant] field.
     * @param    Tenant $tenant
     * @return  Lease
	 */
	public function setTenant($tenant) {
        $this->container['Tenant'] = $tenant;
        return $this;
	}

    
    /**
	 * Get the [ActiveLeaseRenewal] field.
	 * @return  LeaseRenewal
	 */
	public function getActiveLeaseRenewal() {
        return isset($this->container['ActiveLeaseRenewal']) ? $this->container['ActiveLeaseRenewal'] : null;
	}

	/**
	 * Set the [ActiveLeaseRenewal] field.
     * @param    LeaseRenewal $activeLeaseRenewal
     * @return  Lease
	 */
	public function setActiveLeaseRenewal($activeLeaseRenewal) {
        $this->container['ActiveLeaseRenewal'] = $activeLeaseRenewal;
        return $this;
	}

    
    #endregion
}