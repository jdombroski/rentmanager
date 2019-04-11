<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Credit model.
 */
class Credit extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "ID" => "integer",
        "AccountID" => "integer",
        "ChargeTypeID" => "integer",
        "TransactionType" => "string",
        "CreateDate" => "DateTime",
        "UpdateDate" => "DateTime",
        "TransactionDate" => "DateTime",
        "Reference" => "string",
        "Comment" => "string",
        "Amount" => "double",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['ID']) ? $this->container['ID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
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
     * @return  Credit
	 */
	public function setID($iD) {
        $this->container['ID'] = $iD;
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
     * @return  Credit
	 */
	public function setAccountID($accountID) {
        $this->container['AccountID'] = $accountID;
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
     * @return  Credit
	 */
	public function setChargeTypeID($chargeTypeID) {
        $this->container['ChargeTypeID'] = $chargeTypeID;
        return $this;
	}

    
    /**
	 * Get the [TransactionType] field.
	 * @return  string
	 */
	public function getTransactionType() {
        return isset($this->container['TransactionType']) ? $this->container['TransactionType'] : null;
	}

	/**
	 * Set the [TransactionType] field.
     * @param    string $transactionType
     * @return  Credit
	 */
	public function setTransactionType($transactionType) {
        $this->container['TransactionType'] = $transactionType;
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
     * @return  Credit
	 */
	public function setCreateDate($createDate) {
        $this->container['CreateDate'] = $createDate;
        return $this;
	}

    
    /**
	 * Get the [UpdateDate] field.
	 * @return  DateTime
	 */
	public function getUpdateDate() {
        return isset($this->container['UpdateDate']) ? $this->container['UpdateDate'] : null;
	}

	/**
	 * Set the [UpdateDate] field.
     * @param    DateTime $updateDate
     * @return  Credit
	 */
	public function setUpdateDate($updateDate) {
        $this->container['UpdateDate'] = $updateDate;
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
     * @return  Credit
	 */
	public function setTransactionDate($transactionDate) {
        $this->container['TransactionDate'] = $transactionDate;
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
     * @return  Credit
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
     * @return  Credit
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
     * @return  Credit
	 */
	public function setAmount($amount) {
        $this->container['Amount'] = $amount;
        return $this;
	}

    
    #endregion
}