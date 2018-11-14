<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Charge model.
 */
class Charge extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "ChargeID" => "integer",
        "ID" => "integer",
        "ChargeTypeID" => "integer",
        "AccountID" => "integer",
        "PropertyID" => "integer",
        "Reference" => "string",
        "Comment" => "string",
        "Amount" => "double",
        "TransactionDate" => "DateTime",
        "CreateDate" => "DateTime",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['ChargeID']) ? $this->container['ChargeID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [ChargeID] field.
	 * @return  integer
	 */
	public function getChargeID() {
        return isset($this->container['ChargeID']) ? $this->container['ChargeID'] : null;
	}

	/**
	 * Set the [ChargeID] field.
     * @param    integer $chargeID
     * @return  Charge
	 */
	public function setChargeID($chargeID) {
        $this->container['ChargeID'] = $chargeID;
        return $this;
	}

    
    /**
	 * Get the [ID] field.
	 * @return  integer
	 */
	public function getID() {
        return isset($this->container['ID']) ? $this->container['ID'] : null;
	}

	/**
	 * Set the [ID] field.
     * @param    integer $iD
     * @return  Charge
	 */
	public function setID($iD) {
        $this->container['ID'] = $iD;
        return $this;
	}

    
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
     * @return  Charge
	 */
	public function setChargeTypeID($chargeTypeID) {
        $this->container['ChargeTypeID'] = $chargeTypeID;
        return $this;
	}

    
    /**
	 * Get the [AccountID] field.
	 * @return  integer
	 */
	public function getAccountID() {
        return isset($this->container['AccountID']) ? $this->container['AccountID'] : null;
	}

	/**
	 * Set the [AccountID] field.
     * @param    integer $accountID
     * @return  Charge
	 */
	public function setAccountID($accountID) {
        $this->container['AccountID'] = $accountID;
        return $this;
	}

    
    /**
	 * Get the [PropertyID] field.
	 * @return  integer
	 */
	public function getPropertyID() {
        return isset($this->container['PropertyID']) ? $this->container['PropertyID'] : null;
	}

	/**
	 * Set the [PropertyID] field.
     * @param    integer $propertyID
     * @return  Charge
	 */
	public function setPropertyID($propertyID) {
        $this->container['PropertyID'] = $propertyID;
        return $this;
	}

    
    /**
	 * Get the [Reference] field.
	 * @return  string
	 */
	public function getReference() {
        return isset($this->container['Reference']) ? $this->container['Reference'] : null;
	}

	/**
	 * Set the [Reference] field.
     * @param    string $reference
     * @return  Charge
	 */
	public function setReference($reference) {
        $this->container['Reference'] = $reference;
        return $this;
	}

    
    /**
	 * Get the [Comment] field.
	 * @return  string
	 */
	public function getComment() {
        return isset($this->container['Comment']) ? $this->container['Comment'] : null;
	}

	/**
	 * Set the [Comment] field.
     * @param    string $comment
     * @return  Charge
	 */
	public function setComment($comment) {
        $this->container['Comment'] = $comment;
        return $this;
	}

    
    /**
	 * Get the [Amount] field.
	 * @return  double
	 */
	public function getAmount() {
        return isset($this->container['Amount']) ? $this->container['Amount'] : null;
	}

	/**
	 * Set the [Amount] field.
     * @param    double $amount
     * @return  Charge
	 */
	public function setAmount($amount) {
        $this->container['Amount'] = $amount;
        return $this;
	}

    
    /**
	 * Get the [TransactionDate] field.
	 * @return  DateTime
	 */
	public function getTransactionDate() {
        return isset($this->container['TransactionDate']) ? $this->container['TransactionDate'] : null;
	}

	/**
	 * Set the [TransactionDate] field.
     * @param    DateTime $transactionDate
     * @return  Charge
	 */
	public function setTransactionDate($transactionDate) {
        $this->container['TransactionDate'] = $transactionDate;
        return $this;
	}

    
    /**
	 * Get the [CreateDate] field.
	 * @return  DateTime
	 */
	public function getCreateDate() {
        return isset($this->container['CreateDate']) ? $this->container['CreateDate'] : null;
	}

	/**
	 * Set the [CreateDate] field.
     * @param    DateTime $createDate
     * @return  Charge
	 */
	public function setCreateDate($createDate) {
        $this->container['CreateDate'] = $createDate;
        return $this;
	}

    
    #endregion
}