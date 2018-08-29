<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * LeaseRenewal base class.
 */
class LeaseRenewal extends BaseModel
{

    protected static $types = [
                "LeaseRenewalID" => "integer",
                "ParentLeaseID" => "integer",
                "UnitID" => "integer",
                "LeaseLength" => "integer",
                "SignDate" => "DateTime",
                "StartDate" => "DateTime",
                "EndDate" => "DateTime",
                "Property" => "\RentManager\Models\Property",
                "Unit" => "\RentManager\Models\Unit",
                "Tenant" => "\RentManager\Models\Tenant",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['LeaseRenewalID']) ? $this->container['LeaseRenewalID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [LeaseRenewalID] field.
	 * @return integer
	 */
	public function getLeaseRenewalID() {
		return isset($this->container['LeaseRenewalID']) ? $this->container['LeaseRenewalID'] : null;
	}

	/**
	 * Set the [LeaseRenewalID] field.
	 * @param integer $LeaseRenewalID
	 */
	public function setLeaseRenewalID($LeaseRenewalID) {
		$this->container['LeaseRenewalID'] = $LeaseRenewalID;
	}

    
    /**
	 * Get the [ParentLeaseID] field.
	 * @return integer
	 */
	public function getParentLeaseID() {
		return isset($this->container['ParentLeaseID']) ? $this->container['ParentLeaseID'] : null;
	}

	/**
	 * Set the [ParentLeaseID] field.
	 * @param integer $ParentLeaseID
	 */
	public function setParentLeaseID($ParentLeaseID) {
		$this->container['ParentLeaseID'] = $ParentLeaseID;
	}

    
    /**
	 * Get the [UnitID] field.
	 * @return integer
	 */
	public function getUnitID() {
		return isset($this->container['UnitID']) ? $this->container['UnitID'] : null;
	}

	/**
	 * Set the [UnitID] field.
	 * @param integer $UnitID
	 */
	public function setUnitID($UnitID) {
		$this->container['UnitID'] = $UnitID;
	}

    
    /**
	 * Get the [LeaseLength] field.
	 * @return integer
	 */
	public function getLeaseLength() {
		return isset($this->container['LeaseLength']) ? $this->container['LeaseLength'] : null;
	}

	/**
	 * Set the [LeaseLength] field.
	 * @param integer $LeaseLength
	 */
	public function setLeaseLength($LeaseLength) {
		$this->container['LeaseLength'] = $LeaseLength;
	}

    
    /**
	 * Get the [SignDate] field.
	 * @return DateTime
	 */
	public function getSignDate() {
		return isset($this->container['SignDate']) ? $this->container['SignDate'] : null;
	}

	/**
	 * Set the [SignDate] field.
	 * @param DateTime $SignDate
	 */
	public function setSignDate($SignDate) {
		$this->container['SignDate'] = $SignDate;
	}

    
    /**
	 * Get the [StartDate] field.
	 * @return DateTime
	 */
	public function getStartDate() {
		return isset($this->container['StartDate']) ? $this->container['StartDate'] : null;
	}

	/**
	 * Set the [StartDate] field.
	 * @param DateTime $StartDate
	 */
	public function setStartDate($StartDate) {
		$this->container['StartDate'] = $StartDate;
	}

    
    /**
	 * Get the [EndDate] field.
	 * @return DateTime
	 */
	public function getEndDate() {
		return isset($this->container['EndDate']) ? $this->container['EndDate'] : null;
	}

	/**
	 * Set the [EndDate] field.
	 * @param DateTime $EndDate
	 */
	public function setEndDate($EndDate) {
		$this->container['EndDate'] = $EndDate;
	}

    
    /**
	 * Get the [Property] field.
	 * @return \RentManager\Models\Property
	 */
	public function getProperty() {
		return isset($this->container['Property']) ? $this->container['Property'] : null;
	}

	/**
	 * Set the [Property] field.
	 * @param \RentManager\Models\Property $Property
	 */
	public function setProperty($Property) {
		$this->container['Property'] = $Property;
	}

    
    /**
	 * Get the [Unit] field.
	 * @return \RentManager\Models\Unit
	 */
	public function getUnit() {
		return isset($this->container['Unit']) ? $this->container['Unit'] : null;
	}

	/**
	 * Set the [Unit] field.
	 * @param \RentManager\Models\Unit $Unit
	 */
	public function setUnit($Unit) {
		$this->container['Unit'] = $Unit;
	}

    
    /**
	 * Get the [Tenant] field.
	 * @return \RentManager\Models\Tenant
	 */
	public function getTenant() {
		return isset($this->container['Tenant']) ? $this->container['Tenant'] : null;
	}

	/**
	 * Set the [Tenant] field.
	 * @param \RentManager\Models\Tenant $Tenant
	 */
	public function setTenant($Tenant) {
		$this->container['Tenant'] = $Tenant;
	}

    
    #endregion
}