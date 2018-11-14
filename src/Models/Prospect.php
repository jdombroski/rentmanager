<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Prospect model.
 */
class Prospect extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "ProspectID" => "integer",
        "ProspectDisplayID" => "integer",
        "PropertyID" => "integer",
        "Name" => "string",
        "FirstName" => "string",
        "LastName" => "string",
        "MoveInDate" => "DateTime",
        "MoveOutDate" => "DateTime",
        "Property" => "Property",
        "PrimaryContact" => "Contact",
        "UserDefinedValues" => "UserDefinedValue[]",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['ProspectID']) ? $this->container['ProspectID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [ProspectID] field.
	 * @return  integer
	 */
	public function getProspectID() {
        return isset($this->container['ProspectID']) ? $this->container['ProspectID'] : null;
	}

	/**
	 * Set the [ProspectID] field.
     * @param    integer $prospectID
     * @return  Prospect
	 */
	public function setProspectID($prospectID) {
        $this->container['ProspectID'] = $prospectID;
        return $this;
	}

    
    /**
	 * Get the [ProspectDisplayID] field.
	 * @return  integer
	 */
	public function getProspectDisplayID() {
        return isset($this->container['ProspectDisplayID']) ? $this->container['ProspectDisplayID'] : null;
	}

	/**
	 * Set the [ProspectDisplayID] field.
     * @param    integer $prospectDisplayID
     * @return  Prospect
	 */
	public function setProspectDisplayID($prospectDisplayID) {
        $this->container['ProspectDisplayID'] = $prospectDisplayID;
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
     * @return  Prospect
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
     * @return  Prospect
	 */
	public function setName($name) {
        $this->container['Name'] = $name;
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
     * @return  Prospect
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
     * @return  Prospect
	 */
	public function setLastName($lastName) {
        $this->container['LastName'] = $lastName;
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
     * @return  Prospect
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
     * @return  Prospect
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
     * @return  Prospect
	 */
	public function setProperty($property) {
        $this->container['Property'] = $property;
        return $this;
	}

    
    /**
	 * Get the [PrimaryContact] field.
	 * @return  Contact
	 */
	public function getPrimaryContact() {
        return isset($this->container['PrimaryContact']) ? $this->container['PrimaryContact'] : null;
	}

	/**
	 * Set the [PrimaryContact] field.
     * @param    Contact $primaryContact
     * @return  Prospect
	 */
	public function setPrimaryContact($primaryContact) {
        $this->container['PrimaryContact'] = $primaryContact;
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
     * @return  Prospect
	 */
	public function setUserDefinedValues($userDefinedValues) {
        $this->container['UserDefinedValues'] = $userDefinedValues;
        return $this;
	}

    
    #endregion
}