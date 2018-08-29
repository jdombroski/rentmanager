<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * Contact base class.
 */
class Contact extends BaseModel
{

    protected static $types = [
                "ContactID" => "integer",
                "FirstName" => "string",
                "LastName" => "string",
                "IsPrimary" => "bool",
                "Email" => "string",
                "ParentID" => "integer",
                "ContactTypeID" => "integer",
                "Tenant" => "\RentManager\Models\Tenant",
                "PhoneNumbers" => "\RentManager\PhoneNumber[]",
                "UserDefinedValues" => "\RentManager\Models\UserDefinedValue[]",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['ContactID']) ? $this->container['ContactID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [ContactID] field.
	 * @return integer
	 */
	public function getContactID() {
		return isset($this->container['ContactID']) ? $this->container['ContactID'] : null;
	}

	/**
	 * Set the [ContactID] field.
	 * @param integer $ContactID
	 */
	public function setContactID($ContactID) {
		$this->container['ContactID'] = $ContactID;
	}

    
    /**
	 * Get the [FirstName] field.
	 * @return string
	 */
	public function getFirstName() {
		return isset($this->container['FirstName']) ? $this->container['FirstName'] : null;
	}

	/**
	 * Set the [FirstName] field.
	 * @param string $FirstName
	 */
	public function setFirstName($FirstName) {
		$this->container['FirstName'] = $FirstName;
	}

    
    /**
	 * Get the [LastName] field.
	 * @return string
	 */
	public function getLastName() {
		return isset($this->container['LastName']) ? $this->container['LastName'] : null;
	}

	/**
	 * Set the [LastName] field.
	 * @param string $LastName
	 */
	public function setLastName($LastName) {
		$this->container['LastName'] = $LastName;
	}

    
    /**
	 * Get the [IsPrimary] field.
	 * @return bool
	 */
	public function getIsPrimary() {
		return isset($this->container['IsPrimary']) ? $this->container['IsPrimary'] : null;
	}

	/**
	 * Set the [IsPrimary] field.
	 * @param bool $IsPrimary
	 */
	public function setIsPrimary($IsPrimary) {
		$this->container['IsPrimary'] = $IsPrimary;
	}

    
    /**
	 * Get the [Email] field.
	 * @return string
	 */
	public function getEmail() {
		return isset($this->container['Email']) ? $this->container['Email'] : null;
	}

	/**
	 * Set the [Email] field.
	 * @param string $Email
	 */
	public function setEmail($Email) {
		$this->container['Email'] = $Email;
	}

    
    /**
	 * Get the [ParentID] field.
	 * @return integer
	 */
	public function getParentID() {
		return isset($this->container['ParentID']) ? $this->container['ParentID'] : null;
	}

	/**
	 * Set the [ParentID] field.
	 * @param integer $ParentID
	 */
	public function setParentID($ParentID) {
		$this->container['ParentID'] = $ParentID;
	}

    
    /**
	 * Get the [ContactTypeID] field.
	 * @return integer
	 */
	public function getContactTypeID() {
		return isset($this->container['ContactTypeID']) ? $this->container['ContactTypeID'] : null;
	}

	/**
	 * Set the [ContactTypeID] field.
	 * @param integer $ContactTypeID
	 */
	public function setContactTypeID($ContactTypeID) {
		$this->container['ContactTypeID'] = $ContactTypeID;
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
	 * Get the [PhoneNumbers] field.
	 * @return \RentManager\PhoneNumber[]
	 */
	public function getPhoneNumbers() {
		return isset($this->container['PhoneNumbers']) ? $this->container['PhoneNumbers'] : null;
	}

	/**
	 * Set the [PhoneNumbers] field.
	 * @param \RentManager\PhoneNumber[] $PhoneNumbers
	 */
	public function setPhoneNumbers($PhoneNumbers) {
		$this->container['PhoneNumbers'] = $PhoneNumbers;
	}

    
    /**
	 * Get the [UserDefinedValues] field.
	 * @return \RentManager\Models\UserDefinedValue[]
	 */
	public function getUserDefinedValues() {
		return isset($this->container['UserDefinedValues']) ? $this->container['UserDefinedValues'] : null;
	}

	/**
	 * Set the [UserDefinedValues] field.
	 * @param \RentManager\Models\UserDefinedValue[] $UserDefinedValues
	 */
	public function setUserDefinedValues($UserDefinedValues) {
		$this->container['UserDefinedValues'] = $UserDefinedValues;
	}

    
    #endregion
}