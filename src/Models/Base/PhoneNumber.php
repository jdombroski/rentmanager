<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * PhoneNumber base class.
 */
class PhoneNumber extends BaseModel
{

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
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['PhoneNumberID']) ? $this->container['PhoneNumberID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [PhoneNumberID] field.
	 * @return integer
	 */
	public function getPhoneNumberID() {
		return isset($this->container['PhoneNumberID']) ? $this->container['PhoneNumberID'] : null;
	}

	/**
	 * Set the [PhoneNumberID] field.
	 * @param integer $PhoneNumberID
	 */
	public function setPhoneNumberID($PhoneNumberID) {
		$this->container['PhoneNumberID'] = $PhoneNumberID;
	}

    
    /**
	 * Get the [PhoneNumberTypeID] field.
	 * @return integer
	 */
	public function getPhoneNumberTypeID() {
		return isset($this->container['PhoneNumberTypeID']) ? $this->container['PhoneNumberTypeID'] : null;
	}

	/**
	 * Set the [PhoneNumberTypeID] field.
	 * @param integer $PhoneNumberTypeID
	 */
	public function setPhoneNumberTypeID($PhoneNumberTypeID) {
		$this->container['PhoneNumberTypeID'] = $PhoneNumberTypeID;
	}

    
    /**
	 * Get the [PhoneNumber] field.
	 * @return string
	 */
	public function getPhoneNumber() {
		return isset($this->container['PhoneNumber']) ? $this->container['PhoneNumber'] : null;
	}

	/**
	 * Set the [PhoneNumber] field.
	 * @param string $PhoneNumber
	 */
	public function setPhoneNumber($PhoneNumber) {
		$this->container['PhoneNumber'] = $PhoneNumber;
	}

    
    /**
	 * Get the [Extension] field.
	 * @return string
	 */
	public function getExtension() {
		return isset($this->container['Extension']) ? $this->container['Extension'] : null;
	}

	/**
	 * Set the [Extension] field.
	 * @param string $Extension
	 */
	public function setExtension($Extension) {
		$this->container['Extension'] = $Extension;
	}

    
    /**
	 * Get the [StrippedPhoneNumber] field.
	 * @return string
	 */
	public function getStrippedPhoneNumber() {
		return isset($this->container['StrippedPhoneNumber']) ? $this->container['StrippedPhoneNumber'] : null;
	}

	/**
	 * Set the [StrippedPhoneNumber] field.
	 * @param string $StrippedPhoneNumber
	 */
	public function setStrippedPhoneNumber($StrippedPhoneNumber) {
		$this->container['StrippedPhoneNumber'] = $StrippedPhoneNumber;
	}

    
    /**
	 * Get the [IsPrimary] field.
	 * @return bool
	 */
	public function getIsPrimary() {
		return isset($this->container['IsPrimary']) ? $this->container['IsPrimary'] : null;
	}

	/**
	 * Set the [IsPrimary] field.
	 * @param bool $IsPrimary
	 */
	public function setIsPrimary($IsPrimary) {
		$this->container['IsPrimary'] = $IsPrimary;
	}

    
    /**
	 * Get the [IsTextReady] field.
	 * @return bool
	 */
	public function getIsTextReady() {
		return isset($this->container['IsTextReady']) ? $this->container['IsTextReady'] : null;
	}

	/**
	 * Set the [IsTextReady] field.
	 * @param bool $IsTextReady
	 */
	public function setIsTextReady($IsTextReady) {
		$this->container['IsTextReady'] = $IsTextReady;
	}

    
    /**
	 * Get the [ParentID] field.
	 * @return integer
	 */
	public function getParentID() {
		return isset($this->container['ParentID']) ? $this->container['ParentID'] : null;
	}

	/**
	 * Set the [ParentID] field.
	 * @param integer $ParentID
	 */
	public function setParentID($ParentID) {
		$this->container['ParentID'] = $ParentID;
	}

    
    /**
	 * Get the [ParentType] field.
	 * @return integer
	 */
	public function getParentType() {
		return isset($this->container['ParentType']) ? $this->container['ParentType'] : null;
	}

	/**
	 * Set the [ParentType] field.
	 * @param integer $ParentType
	 */
	public function setParentType($ParentType) {
		$this->container['ParentType'] = $ParentType;
	}

    
    #endregion
}