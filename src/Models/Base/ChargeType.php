<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * ChargeType base class.
 */
class ChargeType extends BaseModel
{

    protected static $types = [
                "ChargeTypeID" => "integer",
                "Name" => "string",
                "Description" => "string",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['ChargeTypeID']) ? $this->container['ChargeTypeID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [ChargeTypeID] field.
	 * @return integer
	 */
	public function getChargeTypeID() {
		return isset($this->container['ChargeTypeID']) ? $this->container['ChargeTypeID'] : null;
	}

	/**
	 * Set the [ChargeTypeID] field.
	 * @param integer $ChargeTypeID
	 */
	public function setChargeTypeID($ChargeTypeID) {
		$this->container['ChargeTypeID'] = $ChargeTypeID;
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
	 * Get the [Description] field.
	 * @return string
	 */
	public function getDescription() {
		return isset($this->container['Description']) ? $this->container['Description'] : null;
	}

	/**
	 * Set the [Description] field.
	 * @param string $Description
	 */
	public function setDescription($Description) {
		$this->container['Description'] = $Description;
	}

    
    #endregion
}