<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * LeaseRenewal model.
 */
class LeaseRenewal extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "LeaseRenewalID" => "integer",
        "ParentLeaseID" => "integer",
        "UnitID" => "integer",
        "LeaseLength" => "integer",
        "SignDate" => "DateTime",
        "StartDate" => "DateTime",
        "EndDate" => "DateTime",
        "Property" => "Property",
        "Unit" => "Unit",
        "Tenant" => "Tenant",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['LeaseRenewalID']) ? $this->container['LeaseRenewalID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [LeaseRenewalID] field.
	 * @return  integer
	 */
	public function getLeaseRenewalID() {
        return isset($this->container['LeaseRenewalID']) ? $this->container['LeaseRenewalID'] : null;
	}

	/**
	 * Set the [LeaseRenewalID] field.
     * @param    integer $leaseRenewalID
     * @return  LeaseRenewal
	 */
	public function setLeaseRenewalID($leaseRenewalID) {
        $this->container['LeaseRenewalID'] = $leaseRenewalID;
        return $this;
	}

    
    /**
	 * Get the [ParentLeaseID] field.
	 * @return  integer
	 */
	public function getParentLeaseID() {
        return isset($this->container['ParentLeaseID']) ? $this->container['ParentLeaseID'] : null;
	}

	/**
	 * Set the [ParentLeaseID] field.
     * @param    integer $parentLeaseID
     * @return  LeaseRenewal
	 */
	public function setParentLeaseID($parentLeaseID) {
        $this->container['ParentLeaseID'] = $parentLeaseID;
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
     * @return  LeaseRenewal
	 */
	public function setUnitID($unitID) {
        $this->container['UnitID'] = $unitID;
        return $this;
	}

    
    /**
	 * Get the [LeaseLength] field.
	 * @return  integer
	 */
	public function getLeaseLength() {
        return isset($this->container['LeaseLength']) ? $this->container['LeaseLength'] : null;
	}

	/**
	 * Set the [LeaseLength] field.
     * @param    integer $leaseLength
     * @return  LeaseRenewal
	 */
	public function setLeaseLength($leaseLength) {
        $this->container['LeaseLength'] = $leaseLength;
        return $this;
	}

    
    /**
	 * Get the [SignDate] field.
	 * @return  DateTime
	 */
	public function getSignDate() {
        return isset($this->container['SignDate']) ? $this->container['SignDate'] : null;
	}

	/**
	 * Set the [SignDate] field.
     * @param    DateTime $signDate
     * @return  LeaseRenewal
	 */
	public function setSignDate($signDate) {
        $this->container['SignDate'] = $signDate;
        return $this;
	}

    
    /**
	 * Get the [StartDate] field.
	 * @return  DateTime
	 */
	public function getStartDate() {
        return isset($this->container['StartDate']) ? $this->container['StartDate'] : null;
	}

	/**
	 * Set the [StartDate] field.
     * @param    DateTime $startDate
     * @return  LeaseRenewal
	 */
	public function setStartDate($startDate) {
        $this->container['StartDate'] = $startDate;
        return $this;
	}

    
    /**
	 * Get the [EndDate] field.
	 * @return  DateTime
	 */
	public function getEndDate() {
        return isset($this->container['EndDate']) ? $this->container['EndDate'] : null;
	}

	/**
	 * Set the [EndDate] field.
     * @param    DateTime $endDate
     * @return  LeaseRenewal
	 */
	public function setEndDate($endDate) {
        $this->container['EndDate'] = $endDate;
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
     * @return  LeaseRenewal
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
     * @return  LeaseRenewal
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
     * @return  LeaseRenewal
	 */
	public function setTenant($tenant) {
        $this->container['Tenant'] = $tenant;
        return $this;
	}

    
    #endregion
}