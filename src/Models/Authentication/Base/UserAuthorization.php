<?php 

namespace RentManager\Models\Authentication\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * UserAuthorization base class.
 */
class UserAuthorization extends BaseModel
{

    protected static $types = [
                "Username" => "string",
                "Password" => "string",
                "LocationID" => "integer",
            ];

    /**
	 * Get the model instance id.
	 * @return int
	 */
    public function getInstanceId() {
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [Username] field.
	 * @return string
	 */
	public function getUsername() {
		return isset($this->container['Username']) ? $this->container['Username'] : null;
	}

	/**
	 * Set the [Username] field.
	 * @param string $Username
	 */
	public function setUsername($Username) {
		$this->container['Username'] = $Username;
	}

    
    /**
	 * Get the [Password] field.
	 * @return string
	 */
	public function getPassword() {
		return isset($this->container['Password']) ? $this->container['Password'] : null;
	}

	/**
	 * Set the [Password] field.
	 * @param string $Password
	 */
	public function setPassword($Password) {
		$this->container['Password'] = $Password;
	}

    
    /**
	 * Get the [LocationID] field.
	 * @return integer
	 */
	public function getLocationID() {
		return isset($this->container['LocationID']) ? $this->container['LocationID'] : null;
	}

	/**
	 * Set the [LocationID] field.
	 * @param integer $LocationID
	 */
	public function setLocationID($LocationID) {
		$this->container['LocationID'] = $LocationID;
	}

    
    #endregion
}