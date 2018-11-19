<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * Payment model.
 */
class Payment extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "ID" => "integer",
        "AccountID" => "integer",
        "TransactionType" => "string",
        "AmountAllocated" => "double",
        "IsFullyAllocated" => "bool",
        "IsSecurityDepositPriorToGLStartDate" => "bool",
        "ReceiptID" => "integer",
        "ReversalDate" => "DateTime",
        "Amount" => "double",
        "Comment" => "string",
        "TransactionDate" => "DateTime",
        "CreateDate" => "DateTime",
        "UpdateDate" => "DateTime",
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
     * @return  Payment
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
     * @return  Payment
	 */
	public function setAccountID($accountID) {
        $this->container['AccountID'] = $accountID;
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
     * @return  Payment
	 */
	public function setTransactionType($transactionType) {
        $this->container['TransactionType'] = $transactionType;
        return $this;
	}

    
    /**
	 * Get the [AmountAllocated] field.
	 * @return  double
	 */
	public function getAmountAllocated() {
        return isset($this->container['AmountAllocated']) ? $this->container['AmountAllocated'] : null;
	}

	/**
	 * Set the [AmountAllocated] field.
     * @param    double $amountAllocated
     * @return  Payment
	 */
	public function setAmountAllocated($amountAllocated) {
        $this->container['AmountAllocated'] = $amountAllocated;
        return $this;
	}

    
    /**
	 * Get the [IsFullyAllocated] field.
	 * @return  bool
	 */
	public function getIsFullyAllocated() {
        return isset($this->container['IsFullyAllocated']) ? $this->container['IsFullyAllocated'] : null;
	}

	/**
	 * Set the [IsFullyAllocated] field.
     * @param    bool $isFullyAllocated
     * @return  Payment
	 */
	public function setIsFullyAllocated($isFullyAllocated) {
        $this->container['IsFullyAllocated'] = $isFullyAllocated;
        return $this;
	}

    
    /**
	 * Get the [IsSecurityDepositPriorToGLStartDate] field.
	 * @return  bool
	 */
	public function getIsSecurityDepositPriorToGLStartDate() {
        return isset($this->container['IsSecurityDepositPriorToGLStartDate']) ? $this->container['IsSecurityDepositPriorToGLStartDate'] : null;
	}

	/**
	 * Set the [IsSecurityDepositPriorToGLStartDate] field.
     * @param    bool $isSecurityDepositPriorToGLStartDate
     * @return  Payment
	 */
	public function setIsSecurityDepositPriorToGLStartDate($isSecurityDepositPriorToGLStartDate) {
        $this->container['IsSecurityDepositPriorToGLStartDate'] = $isSecurityDepositPriorToGLStartDate;
        return $this;
	}

    
    /**
	 * Get the [ReceiptID] field.
	 * @return  integer
	 */
	public function getReceiptID() {
        return isset($this->container['ReceiptID']) ? $this->container['ReceiptID'] : null;
	}

	/**
	 * Set the [ReceiptID] field.
     * @param    integer $receiptID
     * @return  Payment
	 */
	public function setReceiptID($receiptID) {
        $this->container['ReceiptID'] = $receiptID;
        return $this;
	}

    
    /**
	 * Get the [ReversalDate] field.
	 * @return  DateTime
	 */
	public function getReversalDate() {
        return isset($this->container['ReversalDate']) ? $this->container['ReversalDate'] : null;
	}

	/**
	 * Set the [ReversalDate] field.
     * @param    DateTime $reversalDate
     * @return  Payment
	 */
	public function setReversalDate($reversalDate) {
        $this->container['ReversalDate'] = $reversalDate;
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
     * @return  Payment
	 */
	public function setAmount($amount) {
        $this->container['Amount'] = $amount;
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
     * @return  Payment
	 */
	public function setComment($comment) {
        $this->container['Comment'] = $comment;
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
     * @return  Payment
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
     * @return  Payment
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
     * @return  Payment
	 */
	public function setUpdateDate($updateDate) {
        $this->container['UpdateDate'] = $updateDate;
        return $this;
	}

    
    #endregion
}