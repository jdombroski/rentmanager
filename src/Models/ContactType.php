<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * ContactType model.
 */
class ContactType extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "ContactTypeID" => "integer",
        "Name" => "string",
        "Description" => "string",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['ContactTypeID']) ? $this->container['ContactTypeID'] : null; 
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [ContactTypeID] field.
	 * @return  integer
	 */
	public function getContactTypeID() {
        return isset($this->container['ContactTypeID']) ? $this->container['ContactTypeID'] : null;
	}

	/**
	 * Set the [ContactTypeID] field.
     * @param    integer $contactTypeID
     * @return  ContactType
	 */
	public function setContactTypeID($contactTypeID) {
        $this->container['ContactTypeID'] = $contactTypeID;
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
     * @return  ContactType
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
     * @return  ContactType
	 */
	public function setDescription($description) {
        $this->container['Description'] = $description;
        return $this;
	}

    
    #endregion
}