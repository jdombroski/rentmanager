<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Unit model.
 */
class Unit extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "UnitID" => "integer",
        "PropertyID" => "integer",
        "Name" => "string",
        "Comment" => "string",
        "Property" => "Property",
        "UserDefinedValues" => "UserDefinedValue[]",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['UnitID']) ? $this->container['UnitID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
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
     * @return  Unit
	 */
	public function setUnitID($unitID) {
        $this->container['UnitID'] = $unitID;
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
     * @return  Unit
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
     * @return  Unit
	 */
	public function setName($name) {
        $this->container['Name'] = $name;
        return $this;
	}

    
    /**
	 * Get the [Comment] field.
	 * @return  string
	 */
	public function getComment() {
        return isset($this->container['Comment']) ? $this->container['Comment'] : null;
	}

	/**
	 * Set the [Comment] field.
     * @param    string $comment
     * @return  Unit
	 */
	public function setComment($comment) {
        $this->container['Comment'] = $comment;
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
     * @return  Unit
	 */
	public function setProperty($property) {
        $this->container['Property'] = $property;
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
     * @return  Unit
	 */
	public function setUserDefinedValues($userDefinedValues) {
        $this->container['UserDefinedValues'] = $userDefinedValues;
        return $this;
	}

    
    #endregion
}