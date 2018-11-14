<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * UserDefinedValue model.
 */
class UserDefinedValue extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "UserDefinedFieldID" => "integer",
        "ParentID" => "integer",
        "Name" => "string",
        "Value" => "string",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['UserDefinedFieldID']) ? $this->container['UserDefinedFieldID'] : null; 
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [UserDefinedFieldID] field.
	 * @return  integer
	 */
	public function getUserDefinedFieldID() {
        return isset($this->container['UserDefinedFieldID']) ? $this->container['UserDefinedFieldID'] : null;
	}

	/**
	 * Set the [UserDefinedFieldID] field.
     * @param    integer $userDefinedFieldID
     * @return  UserDefinedValue
	 */
	public function setUserDefinedFieldID($userDefinedFieldID) {
        $this->container['UserDefinedFieldID'] = $userDefinedFieldID;
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
     * @return  UserDefinedValue
	 */
	public function setParentID($parentID) {
        $this->container['ParentID'] = $parentID;
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
     * @return  UserDefinedValue
	 */
	public function setName($name) {
        $this->container['Name'] = $name;
        return $this;
	}

    
    /**
	 * Get the [Value] field.
	 * @return  string
	 */
	public function getValue() {
        return isset($this->container['Value']) ? $this->container['Value'] : null;
	}

	/**
	 * Set the [Value] field.
     * @param    string $value
     * @return  UserDefinedValue
	 */
	public function setValue($value) {
        $this->container['Value'] = $value;
        return $this;
	}

    
    #endregion
}