<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Address model.
 */
class Address extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "AddressID" => "integer",
        "AddressTypeID" => "integer",
        "Address" => "string",
        "Street" => "string",
        "City" => "string",
        "State" => "string",
        "PostalCode" => "string",
        "IsPrimary" => "bool",
        "IsBilling" => "bool",
        "ParentID" => "integer",
        "MetaTag" => "string",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['AddressID']) ? $this->container['AddressID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [AddressID] field.
	 * @return  integer
	 */
	public function getAddressID() {
        return isset($this->container['AddressID']) ? $this->container['AddressID'] : null;
	}

	/**
	 * Set the [AddressID] field.
     * @param    integer $addressID
     * @return  Address
	 */
	public function setAddressID($addressID) {
        $this->container['AddressID'] = $addressID;
        return $this;
	}

    
    /**
	 * Get the [AddressTypeID] field.
	 * @return  integer
	 */
	public function getAddressTypeID() {
        return isset($this->container['AddressTypeID']) ? $this->container['AddressTypeID'] : null;
	}

	/**
	 * Set the [AddressTypeID] field.
     * @param    integer $addressTypeID
     * @return  Address
	 */
	public function setAddressTypeID($addressTypeID) {
        $this->container['AddressTypeID'] = $addressTypeID;
        return $this;
	}

    
    /**
	 * Get the [Address] field.
	 * @return  string
	 */
	public function getAddress() {
        return isset($this->container['Address']) ? $this->container['Address'] : null;
	}

	/**
	 * Set the [Address] field.
     * @param    string $address
     * @return  Address
	 */
	public function setAddress($address) {
        $this->container['Address'] = $address;
        return $this;
	}

    
    /**
	 * Get the [Street] field.
	 * @return  string
	 */
	public function getStreet() {
        return isset($this->container['Street']) ? $this->container['Street'] : null;
	}

	/**
	 * Set the [Street] field.
     * @param    string $street
     * @return  Address
	 */
	public function setStreet($street) {
        $this->container['Street'] = $street;
        return $this;
	}

    
    /**
	 * Get the [City] field.
	 * @return  string
	 */
	public function getCity() {
        return isset($this->container['City']) ? $this->container['City'] : null;
	}

	/**
	 * Set the [City] field.
     * @param    string $city
     * @return  Address
	 */
	public function setCity($city) {
        $this->container['City'] = $city;
        return $this;
	}

    
    /**
	 * Get the [State] field.
	 * @return  string
	 */
	public function getState() {
        return isset($this->container['State']) ? $this->container['State'] : null;
	}

	/**
	 * Set the [State] field.
     * @param    string $state
     * @return  Address
	 */
	public function setState($state) {
        $this->container['State'] = $state;
        return $this;
	}

    
    /**
	 * Get the [PostalCode] field.
	 * @return  string
	 */
	public function getPostalCode() {
        return isset($this->container['PostalCode']) ? $this->container['PostalCode'] : null;
	}

	/**
	 * Set the [PostalCode] field.
     * @param    string $postalCode
     * @return  Address
	 */
	public function setPostalCode($postalCode) {
        $this->container['PostalCode'] = $postalCode;
        return $this;
	}

    
    /**
	 * Get the [IsPrimary] field.
	 * @return  bool
	 */
	public function getIsPrimary() {
        return isset($this->container['IsPrimary']) ? $this->container['IsPrimary'] : null;
	}

	/**
	 * Set the [IsPrimary] field.
     * @param    bool $isPrimary
     * @return  Address
	 */
	public function setIsPrimary($isPrimary) {
        $this->container['IsPrimary'] = $isPrimary;
        return $this;
	}

    
    /**
	 * Get the [IsBilling] field.
	 * @return  bool
	 */
	public function getIsBilling() {
        return isset($this->container['IsBilling']) ? $this->container['IsBilling'] : null;
	}

	/**
	 * Set the [IsBilling] field.
     * @param    bool $isBilling
     * @return  Address
	 */
	public function setIsBilling($isBilling) {
        $this->container['IsBilling'] = $isBilling;
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
     * @return  Address
	 */
	public function setParentID($parentID) {
        $this->container['ParentID'] = $parentID;
        return $this;
	}

    
    /**
	 * Get the [MetaTag] field.
	 * @return  string
	 */
	public function getMetaTag() {
        return isset($this->container['MetaTag']) ? $this->container['MetaTag'] : null;
	}

	/**
	 * Set the [MetaTag] field.
     * @param    string $metaTag
     * @return  Address
	 */
	public function setMetaTag($metaTag) {
        $this->container['MetaTag'] = $metaTag;
        return $this;
	}

    
    #endregion
}