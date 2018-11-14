<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Contact model.
 */
class Contact extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "ContactID" => "integer",
        "FirstName" => "string",
        "LastName" => "string",
        "IsPrimary" => "bool",
        "Email" => "string",
        "ParentID" => "integer",
        "ContactTypeID" => "integer",
        "Tenant" => "Tenant",
        "PhoneNumbers" => "\RentManager\PhoneNumber[]",
        "UserDefinedValues" => "UserDefinedValue[]",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['ContactID']) ? $this->container['ContactID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [ContactID] field.
	 * @return  integer
	 */
	public function getContactID() {
        return isset($this->container['ContactID']) ? $this->container['ContactID'] : null;
	}

	/**
	 * Set the [ContactID] field.
     * @param    integer $contactID
     * @return  Contact
	 */
	public function setContactID($contactID) {
        $this->container['ContactID'] = $contactID;
        return $this;
	}

    
    /**
	 * Get the [FirstName] field.
	 * @return  string
	 */
	public function getFirstName() {
        return isset($this->container['FirstName']) ? $this->container['FirstName'] : null;
	}

	/**
	 * Set the [FirstName] field.
     * @param    string $firstName
     * @return  Contact
	 */
	public function setFirstName($firstName) {
        $this->container['FirstName'] = $firstName;
        return $this;
	}

    
    /**
	 * Get the [LastName] field.
	 * @return  string
	 */
	public function getLastName() {
        return isset($this->container['LastName']) ? $this->container['LastName'] : null;
	}

	/**
	 * Set the [LastName] field.
     * @param    string $lastName
     * @return  Contact
	 */
	public function setLastName($lastName) {
        $this->container['LastName'] = $lastName;
        return $this;
	}

    
    /**
	 * Get the [IsPrimary] field.
	 * @return  bool
	 */
	public function getIsPrimary() {
        return isset($this->container['IsPrimary']) ? $this->container['IsPrimary'] : null;
	}

	/**
	 * Set the [IsPrimary] field.
     * @param    bool $isPrimary
     * @return  Contact
	 */
	public function setIsPrimary($isPrimary) {
        $this->container['IsPrimary'] = $isPrimary;
        return $this;
	}

    
    /**
	 * Get the [Email] field.
	 * @return  string
	 */
	public function getEmail() {
        return isset($this->container['Email']) ? $this->container['Email'] : null;
	}

	/**
	 * Set the [Email] field.
     * @param    string $email
     * @return  Contact
	 */
	public function setEmail($email) {
        $this->container['Email'] = $email;
        return $this;
	}

    
    /**
	 * Get the [ParentID] field.
	 * @return  integer
	 */
	public function getParentID() {
        return isset($this->container['ParentID']) ? $this->container['ParentID'] : null;
	}

	/**
	 * Set the [ParentID] field.
     * @param    integer $parentID
     * @return  Contact
	 */
	public function setParentID($parentID) {
        $this->container['ParentID'] = $parentID;
        return $this;
	}

    
    /**
	 * Get the [ContactTypeID] field.
	 * @return  integer
	 */
	public function getContactTypeID() {
        return isset($this->container['ContactTypeID']) ? $this->container['ContactTypeID'] : null;
	}

	/**
	 * Set the [ContactTypeID] field.
     * @param    integer $contactTypeID
     * @return  Contact
	 */
	public function setContactTypeID($contactTypeID) {
        $this->container['ContactTypeID'] = $contactTypeID;
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
     * @return  Contact
	 */
	public function setTenant($tenant) {
        $this->container['Tenant'] = $tenant;
        return $this;
	}

    
    /**
	 * Get the [PhoneNumbers] field.
	 * @return  \RentManager\PhoneNumber[]
	 */
	public function getPhoneNumbers() {
        return isset($this->container['PhoneNumbers']) ? $this->container['PhoneNumbers'] : null;
	}

	/**
	 * Set the [PhoneNumbers] field.
     * @param    \RentManager\PhoneNumber[] $phoneNumbers
     * @return  Contact
	 */
	public function setPhoneNumbers($phoneNumbers) {
        $this->container['PhoneNumbers'] = $phoneNumbers;
        return $this;
	}

    
    /**
	 * Get the [UserDefinedValues] field.
	 * @return  UserDefinedValue[]
	 */
	public function getUserDefinedValues() {
        return isset($this->container['UserDefinedValues']) ? $this->container['UserDefinedValues'] : null;
	}

	/**
	 * Set the [UserDefinedValues] field.
     * @param    UserDefinedValue[] $userDefinedValues
     * @return  Contact
	 */
	public function setUserDefinedValues($userDefinedValues) {
        $this->container['UserDefinedValues'] = $userDefinedValues;
        return $this;
	}

    
    #endregion
}