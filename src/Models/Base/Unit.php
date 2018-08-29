<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * Unit base class.
 */
class Unit extends BaseModel
{

    protected static $types = [
                "UnitID" => "integer",
                "PropertyID" => "integer",
                "Name" => "string",
                "Comment" => "string",
                "Property" => "\RentManager\Models\Property",
                "UserDefinedValues" => "\RentManager\Models\UserDefinedValue[]",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['UnitID']) ? $this->container['UnitID'] : null;
        
    }


    #region Getters/Setters

    
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
	 * Get the [Comment] field.
	 * @return string
	 */
	public function getComment() {
		return isset($this->container['Comment']) ? $this->container['Comment'] : null;
	}

	/**
	 * Set the [Comment] field.
	 * @param string $Comment
	 */
	public function setComment($Comment) {
		$this->container['Comment'] = $Comment;
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