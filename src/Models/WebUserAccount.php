<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * WebUserAccount model.
 */
class WebUserAccount extends BaseModel
{

    protected $container = [];

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
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['WebUserAccountID']) ? $this->container['WebUserAccountID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [WebUserAccountID] field.
	 * @return  integer
	 */
	public function getWebUserAccountID() {
        return isset($this->container['WebUserAccountID']) ? $this->container['WebUserAccountID'] : null;
	}

	/**
	 * Set the [WebUserAccountID] field.
     * @param    integer $webUserAccountID
     * @return  WebUserAccount
	 */
	public function setWebUserAccountID($webUserAccountID) {
        $this->container['WebUserAccountID'] = $webUserAccountID;
        return $this;
	}

    
    /**
	 * Get the [WebUserID] field.
	 * @return  integer
	 */
	public function getWebUserID() {
        return isset($this->container['WebUserID']) ? $this->container['WebUserID'] : null;
	}

	/**
	 * Set the [WebUserID] field.
     * @param    integer $webUserID
     * @return  WebUserAccount
	 */
	public function setWebUserID($webUserID) {
        $this->container['WebUserID'] = $webUserID;
        return $this;
	}

    
    /**
	 * Get the [AccountID] field.
	 * @return  integer
	 */
	public function getAccountID() {
        return isset($this->container['AccountID']) ? $this->container['AccountID'] : null;
	}

	/**
	 * Set the [AccountID] field.
     * @param    integer $accountID
     * @return  WebUserAccount
	 */
	public function setAccountID($accountID) {
        $this->container['AccountID'] = $accountID;
        return $this;
	}

    
    /**
	 * Get the [Nickname] field.
	 * @return  string
	 */
	public function getNickname() {
        return isset($this->container['Nickname']) ? $this->container['Nickname'] : null;
	}

	/**
	 * Set the [Nickname] field.
     * @param    string $nickname
     * @return  WebUserAccount
	 */
	public function setNickname($nickname) {
        $this->container['Nickname'] = $nickname;
        return $this;
	}

    
    /**
	 * Get the [IsDefault] field.
	 * @return  bool
	 */
	public function getIsDefault() {
        return isset($this->container['IsDefault']) ? $this->container['IsDefault'] : null;
	}

	/**
	 * Set the [IsDefault] field.
     * @param    bool $isDefault
     * @return  WebUserAccount
	 */
	public function setIsDefault($isDefault) {
        $this->container['IsDefault'] = $isDefault;
        return $this;
	}

    
    /**
	 * Get the [IsEnabled] field.
	 * @return  bool
	 */
	public function getIsEnabled() {
        return isset($this->container['IsEnabled']) ? $this->container['IsEnabled'] : null;
	}

	/**
	 * Set the [IsEnabled] field.
     * @param    bool $isEnabled
     * @return  WebUserAccount
	 */
	public function setIsEnabled($isEnabled) {
        $this->container['IsEnabled'] = $isEnabled;
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
     * @return  WebUserAccount
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
     * @return  WebUserAccount
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
     * @return  WebUserAccount
	 */
	public function setTenant($tenant) {
        $this->container['Tenant'] = $tenant;
        return $this;
	}

    
    #endregion
}