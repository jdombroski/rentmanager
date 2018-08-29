<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * WebUserAccount base class.
 */
class WebUserAccount extends BaseModel
{

    protected static $types = [
                "WebUserAccountID" => "integer",
                "WebUserID" => "integer",
                "AccountID" => "integer",
                "Nickname" => "string",
                "IsDefault" => "bool",
                "IsEnabled" => "bool",
                "Property" => "Property",
                "Unit" => "Unit",
                "Tenant" => "Tenant",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['WebUserAccountID']) ? $this->container['WebUserAccountID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [WebUserAccountID] field.
	 * @return integer
	 */
	public function getWebUserAccountID() {
		return isset($this->container['WebUserAccountID']) ? $this->container['WebUserAccountID'] : null;
	}

	/**
	 * Set the [WebUserAccountID] field.
	 * @param integer $WebUserAccountID
	 */
	public function setWebUserAccountID($WebUserAccountID) {
		$this->container['WebUserAccountID'] = $WebUserAccountID;
	}

    
    /**
	 * Get the [WebUserID] field.
	 * @return integer
	 */
	public function getWebUserID() {
		return isset($this->container['WebUserID']) ? $this->container['WebUserID'] : null;
	}

	/**
	 * Set the [WebUserID] field.
	 * @param integer $WebUserID
	 */
	public function setWebUserID($WebUserID) {
		$this->container['WebUserID'] = $WebUserID;
	}

    
    /**
	 * Get the [AccountID] field.
	 * @return integer
	 */
	public function getAccountID() {
		return isset($this->container['AccountID']) ? $this->container['AccountID'] : null;
	}

	/**
	 * Set the [AccountID] field.
	 * @param integer $AccountID
	 */
	public function setAccountID($AccountID) {
		$this->container['AccountID'] = $AccountID;
	}

    
    /**
	 * Get the [Nickname] field.
	 * @return string
	 */
	public function getNickname() {
		return isset($this->container['Nickname']) ? $this->container['Nickname'] : null;
	}

	/**
	 * Set the [Nickname] field.
	 * @param string $Nickname
	 */
	public function setNickname($Nickname) {
		$this->container['Nickname'] = $Nickname;
	}

    
    /**
	 * Get the [IsDefault] field.
	 * @return bool
	 */
	public function getIsDefault() {
		return isset($this->container['IsDefault']) ? $this->container['IsDefault'] : null;
	}

	/**
	 * Set the [IsDefault] field.
	 * @param bool $IsDefault
	 */
	public function setIsDefault($IsDefault) {
		$this->container['IsDefault'] = $IsDefault;
	}

    
    /**
	 * Get the [IsEnabled] field.
	 * @return bool
	 */
	public function getIsEnabled() {
		return isset($this->container['IsEnabled']) ? $this->container['IsEnabled'] : null;
	}

	/**
	 * Set the [IsEnabled] field.
	 * @param bool $IsEnabled
	 */
	public function setIsEnabled($IsEnabled) {
		$this->container['IsEnabled'] = $IsEnabled;
	}

    
    /**
	 * Get the [Property] field.
	 * @return Property
	 */
	public function getProperty() {
		return isset($this->container['Property']) ? $this->container['Property'] : null;
	}

	/**
	 * Set the [Property] field.
	 * @param Property $Property
	 */
	public function setProperty($Property) {
		$this->container['Property'] = $Property;
	}

    
    /**
	 * Get the [Unit] field.
	 * @return Unit
	 */
	public function getUnit() {
		return isset($this->container['Unit']) ? $this->container['Unit'] : null;
	}

	/**
	 * Set the [Unit] field.
	 * @param Unit $Unit
	 */
	public function setUnit($Unit) {
		$this->container['Unit'] = $Unit;
	}

    
    /**
	 * Get the [Tenant] field.
	 * @return Tenant
	 */
	public function getTenant() {
		return isset($this->container['Tenant']) ? $this->container['Tenant'] : null;
	}

	/**
	 * Set the [Tenant] field.
	 * @param Tenant $Tenant
	 */
	public function setTenant($Tenant) {
		$this->container['Tenant'] = $Tenant;
	}

    
    #endregion
}