<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * UserDefinedField model.
 */
class UserDefinedField extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "UserDefinedFieldID" => "integer",
        "SortOrder" => "integer",
        "Name" => "string",
        "IsRequired" => "boolean",
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
     * @return  UserDefinedField
	 */
	public function setUserDefinedFieldID($userDefinedFieldID) {
        $this->container['UserDefinedFieldID'] = $userDefinedFieldID;
        return $this;
	}

    
    /**
	 * Get the [SortOrder] field.
	 * @return  integer
	 */
	public function getSortOrder() {
        return isset($this->container['SortOrder']) ? $this->container['SortOrder'] : null;
	}

	/**
	 * Set the [SortOrder] field.
     * @param    integer $sortOrder
     * @return  UserDefinedField
	 */
	public function setSortOrder($sortOrder) {
        $this->container['SortOrder'] = $sortOrder;
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
     * @return  UserDefinedField
	 */
	public function setName($name) {
        $this->container['Name'] = $name;
        return $this;
	}

    
    /**
	 * Get the [IsRequired] field.
	 * @return  boolean
	 */
	public function getIsRequired() {
        return isset($this->container['IsRequired']) ? $this->container['IsRequired'] : null;
	}

	/**
	 * Set the [IsRequired] field.
     * @param    boolean $isRequired
     * @return  UserDefinedField
	 */
	public function setIsRequired($isRequired) {
        $this->container['IsRequired'] = $isRequired;
        return $this;
	}

    
    #endregion
}