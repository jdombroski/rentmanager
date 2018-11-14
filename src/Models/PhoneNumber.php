<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * PhoneNumber model.
 */
class PhoneNumber extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "PhoneNumberID" => "integer",
        "PhoneNumberTypeID" => "integer",
        "PhoneNumber" => "string",
        "Extension" => "string",
        "StrippedPhoneNumber" => "string",
        "IsPrimary" => "bool",
        "IsTextReady" => "bool",
        "ParentID" => "integer",
        "ParentType" => "integer",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['PhoneNumberID']) ? $this->container['PhoneNumberID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [PhoneNumberID] field.
	 * @return  integer
	 */
	public function getPhoneNumberID() {
        return isset($this->container['PhoneNumberID']) ? $this->container['PhoneNumberID'] : null;
	}

	/**
	 * Set the [PhoneNumberID] field.
     * @param    integer $phoneNumberID
     * @return  PhoneNumber
	 */
	public function setPhoneNumberID($phoneNumberID) {
        $this->container['PhoneNumberID'] = $phoneNumberID;
        return $this;
	}

    
    /**
	 * Get the [PhoneNumberTypeID] field.
	 * @return  integer
	 */
	public function getPhoneNumberTypeID() {
        return isset($this->container['PhoneNumberTypeID']) ? $this->container['PhoneNumberTypeID'] : null;
	}

	/**
	 * Set the [PhoneNumberTypeID] field.
     * @param    integer $phoneNumberTypeID
     * @return  PhoneNumber
	 */
	public function setPhoneNumberTypeID($phoneNumberTypeID) {
        $this->container['PhoneNumberTypeID'] = $phoneNumberTypeID;
        return $this;
	}

    
    /**
	 * Get the [PhoneNumber] field.
	 * @return  string
	 */
	public function getPhoneNumber() {
        return isset($this->container['PhoneNumber']) ? $this->container['PhoneNumber'] : null;
	}

	/**
	 * Set the [PhoneNumber] field.
     * @param    string $phoneNumber
     * @return  PhoneNumber
	 */
	public function setPhoneNumber($phoneNumber) {
        $this->container['PhoneNumber'] = $phoneNumber;
        return $this;
	}

    
    /**
	 * Get the [Extension] field.
	 * @return  string
	 */
	public function getExtension() {
        return isset($this->container['Extension']) ? $this->container['Extension'] : null;
	}

	/**
	 * Set the [Extension] field.
     * @param    string $extension
     * @return  PhoneNumber
	 */
	public function setExtension($extension) {
        $this->container['Extension'] = $extension;
        return $this;
	}

    
    /**
	 * Get the [StrippedPhoneNumber] field.
	 * @return  string
	 */
	public function getStrippedPhoneNumber() {
        return isset($this->container['StrippedPhoneNumber']) ? $this->container['StrippedPhoneNumber'] : null;
	}

	/**
	 * Set the [StrippedPhoneNumber] field.
     * @param    string $strippedPhoneNumber
     * @return  PhoneNumber
	 */
	public function setStrippedPhoneNumber($strippedPhoneNumber) {
        $this->container['StrippedPhoneNumber'] = $strippedPhoneNumber;
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
     * @return  PhoneNumber
	 */
	public function setIsPrimary($isPrimary) {
        $this->container['IsPrimary'] = $isPrimary;
        return $this;
	}

    
    /**
	 * Get the [IsTextReady] field.
	 * @return  bool
	 */
	public function getIsTextReady() {
        return isset($this->container['IsTextReady']) ? $this->container['IsTextReady'] : null;
	}

	/**
	 * Set the [IsTextReady] field.
     * @param    bool $isTextReady
     * @return  PhoneNumber
	 */
	public function setIsTextReady($isTextReady) {
        $this->container['IsTextReady'] = $isTextReady;
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
     * @return  PhoneNumber
	 */
	public function setParentID($parentID) {
        $this->container['ParentID'] = $parentID;
        return $this;
	}

    
    /**
	 * Get the [ParentType] field.
	 * @return  integer
	 */
	public function getParentType() {
        return isset($this->container['ParentType']) ? $this->container['ParentType'] : null;
	}

	/**
	 * Set the [ParentType] field.
     * @param    integer $parentType
     * @return  PhoneNumber
	 */
	public function setParentType($parentType) {
        $this->container['ParentType'] = $parentType;
        return $this;
	}

    
    #endregion
}