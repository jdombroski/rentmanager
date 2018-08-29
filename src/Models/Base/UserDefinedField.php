<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * UserDefinedField base class.
 */
class UserDefinedField extends BaseModel
{

    protected static $types = [
                "UserDefinedFieldID" => "integer",
                "SortOrder" => "integer",
                "Name" => "string",
                "IsRequired" => "boolean",
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
	 * Get the [SortOrder] field.
	 * @return integer
	 */
	public function getSortOrder() {
		return isset($this->container['SortOrder']) ? $this->container['SortOrder'] : null;
	}

	/**
	 * Set the [SortOrder] field.
	 * @param integer $SortOrder
	 */
	public function setSortOrder($SortOrder) {
		$this->container['SortOrder'] = $SortOrder;
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
	 * Get the [IsRequired] field.
	 * @return boolean
	 */
	public function getIsRequired() {
		return isset($this->container['IsRequired']) ? $this->container['IsRequired'] : null;
	}

	/**
	 * Set the [IsRequired] field.
	 * @param boolean $IsRequired
	 */
	public function setIsRequired($IsRequired) {
		$this->container['IsRequired'] = $IsRequired;
	}

    
    #endregion
}