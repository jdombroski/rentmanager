<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * Lease base class.
 */
class Lease extends BaseModel
{

    protected static $types = [
                "LeaseID" => "integer",
                "TenantID" => "integer",
                "UnitID" => "integer",
                "PropertyID" => "integer",
                "MoveInDate" => "DateTime",
                "MoveOutDate" => "DateTime",
                "Property" => "\RentManager\Models\Property",
                "Unit" => "\RentManager\Models\Unit",
                "Tenant" => "\RentManager\Models\Tenant",
                "ActiveLeaseRenewal" => "\RentManager\Models\LeaseRenewal",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['LeaseID']) ? $this->container['LeaseID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [LeaseID] field.
	 * @return integer
	 */
	public function getLeaseID() {
		return isset($this->container['LeaseID']) ? $this->container['LeaseID'] : null;
	}

	/**
	 * Set the [LeaseID] field.
	 * @param integer $LeaseID
	 */
	public function setLeaseID($LeaseID) {
		$this->container['LeaseID'] = $LeaseID;
	}

    
    /**
	 * Get the [TenantID] field.
	 * @return integer
	 */
	public function getTenantID() {
		return isset($this->container['TenantID']) ? $this->container['TenantID'] : null;
	}

	/**
	 * Set the [TenantID] field.
	 * @param integer $TenantID
	 */
	public function setTenantID($TenantID) {
		$this->container['TenantID'] = $TenantID;
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
	 * Get the [MoveInDate] field.
	 * @return DateTime
	 */
	public function getMoveInDate() {
		return isset($this->container['MoveInDate']) ? $this->container['MoveInDate'] : null;
	}

	/**
	 * Set the [MoveInDate] field.
	 * @param DateTime $MoveInDate
	 */
	public function setMoveInDate($MoveInDate) {
		$this->container['MoveInDate'] = $MoveInDate;
	}

    
    /**
	 * Get the [MoveOutDate] field.
	 * @return DateTime
	 */
	public function getMoveOutDate() {
		return isset($this->container['MoveOutDate']) ? $this->container['MoveOutDate'] : null;
	}

	/**
	 * Set the [MoveOutDate] field.
	 * @param DateTime $MoveOutDate
	 */
	public function setMoveOutDate($MoveOutDate) {
		$this->container['MoveOutDate'] = $MoveOutDate;
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

    
    /**
	 * Get the [ActiveLeaseRenewal] field.
	 * @return \RentManager\Models\LeaseRenewal
	 */
	public function getActiveLeaseRenewal() {
		return isset($this->container['ActiveLeaseRenewal']) ? $this->container['ActiveLeaseRenewal'] : null;
	}

	/**
	 * Set the [ActiveLeaseRenewal] field.
	 * @param \RentManager\Models\LeaseRenewal $ActiveLeaseRenewal
	 */
	public function setActiveLeaseRenewal($ActiveLeaseRenewal) {
		$this->container['ActiveLeaseRenewal'] = $ActiveLeaseRenewal;
	}

    
    #endregion
}