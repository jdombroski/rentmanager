<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * Prospect base class.
 */
class Prospect extends BaseModel
{

    protected static $types = [
                "ProspectID" => "integer",
                "ProspectDisplayID" => "integer",
                "PropertyID" => "integer",
                "Name" => "string",
                "FirstName" => "string",
                "LastName" => "string",
                "MoveInDate" => "DateTime",
                "MoveOutDate" => "DateTime",
                "Property" => "\RentManager\Models\Property",
                "PrimaryContact" => "\RentManager\Models\Contact",
                "UserDefinedValues" => "\RentManager\Models\UserDefinedValue[]",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['ProspectID']) ? $this->container['ProspectID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [ProspectID] field.
	 * @return integer
	 */
	public function getProspectID() {
		return isset($this->container['ProspectID']) ? $this->container['ProspectID'] : null;
	}

	/**
	 * Set the [ProspectID] field.
	 * @param integer $ProspectID
	 */
	public function setProspectID($ProspectID) {
		$this->container['ProspectID'] = $ProspectID;
	}

    
    /**
	 * Get the [ProspectDisplayID] field.
	 * @return integer
	 */
	public function getProspectDisplayID() {
		return isset($this->container['ProspectDisplayID']) ? $this->container['ProspectDisplayID'] : null;
	}

	/**
	 * Set the [ProspectDisplayID] field.
	 * @param integer $ProspectDisplayID
	 */
	public function setProspectDisplayID($ProspectDisplayID) {
		$this->container['ProspectDisplayID'] = $ProspectDisplayID;
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
	 * Get the [Name] field.
	 * @return string
	 */
	public function getName() {
		return isset($this->container['Name']) ? $this->container['Name'] : null;
	}

	/**
	 * Set the [Name] field.
	 * @param string $Name
	 */
	public function setName($Name) {
		$this->container['Name'] = $Name;
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
	 * Get the [PrimaryContact] field.
	 * @return \RentManager\Models\Contact
	 */
	public function getPrimaryContact() {
		return isset($this->container['PrimaryContact']) ? $this->container['PrimaryContact'] : null;
	}

	/**
	 * Set the [PrimaryContact] field.
	 * @param \RentManager\Models\Contact $PrimaryContact
	 */
	public function setPrimaryContact($PrimaryContact) {
		$this->container['PrimaryContact'] = $PrimaryContact;
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