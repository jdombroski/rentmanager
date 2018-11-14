<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * ChargeType model.
 */
class ChargeType extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "ChargeTypeID" => "integer",
        "Name" => "string",
        "Description" => "string",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['ChargeTypeID']) ? $this->container['ChargeTypeID'] : null; 
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [ChargeTypeID] field.
	 * @return  integer
	 */
	public function getChargeTypeID() {
        return isset($this->container['ChargeTypeID']) ? $this->container['ChargeTypeID'] : null;
	}

	/**
	 * Set the [ChargeTypeID] field.
     * @param    integer $chargeTypeID
     * @return  ChargeType
	 */
	public function setChargeTypeID($chargeTypeID) {
        $this->container['ChargeTypeID'] = $chargeTypeID;
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
     * @return  ChargeType
	 */
	public function setName($name) {
        $this->container['Name'] = $name;
        return $this;
	}

    
    /**
	 * Get the [Description] field.
	 * @return  string
	 */
	public function getDescription() {
        return isset($this->container['Description']) ? $this->container['Description'] : null;
	}

	/**
	 * Set the [Description] field.
     * @param    string $description
     * @return  ChargeType
	 */
	public function setDescription($description) {
        $this->container['Description'] = $description;
        return $this;
	}

    
    #endregion
}