<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * ContactType base class.
 */
class ContactType extends BaseModel
{

    protected static $types = [
                "ContactTypeID" => "integer",
                "Name" => "string",
                "Description" => "string",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['ContactTypeID']) ? $this->container['ContactTypeID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [ContactTypeID] field.
	 * @return integer
	 */
	public function getContactTypeID() {
		return isset($this->container['ContactTypeID']) ? $this->container['ContactTypeID'] : null;
	}

	/**
	 * Set the [ContactTypeID] field.
	 * @param integer $ContactTypeID
	 */
	public function setContactTypeID($ContactTypeID) {
		$this->container['ContactTypeID'] = $ContactTypeID;
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