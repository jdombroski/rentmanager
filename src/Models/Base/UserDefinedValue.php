<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * UserDefinedValue base class.
 */
class UserDefinedValue extends BaseModel
{

    protected static $types = [
                "UserDefinedFieldID" => "integer",
                "ParentID" => "integer",
                "Name" => "string",
                "Value" => "string",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['UserDefinedFieldID']) ? $this->container['UserDefinedFieldID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [UserDefinedFieldID] field.
	 * @return integer
	 */
	public function getUserDefinedFieldID() {
		return isset($this->container['UserDefinedFieldID']) ? $this->container['UserDefinedFieldID'] : null;
	}

	/**
	 * Set the [UserDefinedFieldID] field.
	 * @param integer $UserDefinedFieldID
	 */
	public function setUserDefinedFieldID($UserDefinedFieldID) {
		$this->container['UserDefinedFieldID'] = $UserDefinedFieldID;
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
	 * Get the [Value] field.
	 * @return string
	 */
	public function getValue() {
		return isset($this->container['Value']) ? $this->container['Value'] : null;
	}

	/**
	 * Set the [Value] field.
	 * @param string $Value
	 */
	public function setValue($Value) {
		$this->container['Value'] = $Value;
	}

    
    #endregion
}