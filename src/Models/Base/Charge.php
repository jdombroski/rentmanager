<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * Charge base class.
 */
class Charge extends BaseModel
{

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
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['ChargeID']) ? $this->container['ChargeID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [ChargeID] field.
	 * @return integer
	 */
	public function getChargeID() {
		return isset($this->container['ChargeID']) ? $this->container['ChargeID'] : null;
	}

	/**
	 * Set the [ChargeID] field.
	 * @param integer $ChargeID
	 */
	public function setChargeID($ChargeID) {
		$this->container['ChargeID'] = $ChargeID;
	}

    
    /**
	 * Get the [ID] field.
	 * @return integer
	 */
	public function getID() {
		return isset($this->container['ID']) ? $this->container['ID'] : null;
	}

	/**
	 * Set the [ID] field.
	 * @param integer $ID
	 */
	public function setID($ID) {
		$this->container['ID'] = $ID;
	}

    
    /**
	 * Get the [ChargeTypeID] field.
	 * @return integer
	 */
	public function getChargeTypeID() {
		return isset($this->container['ChargeTypeID']) ? $this->container['ChargeTypeID'] : null;
	}

	/**
	 * Set the [ChargeTypeID] field.
	 * @param integer $ChargeTypeID
	 */
	public function setChargeTypeID($ChargeTypeID) {
		$this->container['ChargeTypeID'] = $ChargeTypeID;
	}

    
    /**
	 * Get the [AccountID] field.
	 * @return integer
	 */
	public function getAccountID() {
		return isset($this->container['AccountID']) ? $this->container['AccountID'] : null;
	}

	/**
	 * Set the [AccountID] field.
	 * @param integer $AccountID
	 */
	public function setAccountID($AccountID) {
		$this->container['AccountID'] = $AccountID;
	}

    
    /**
	 * Get the [PropertyID] field.
	 * @return integer
	 */
	public function getPropertyID() {
		return isset($this->container['PropertyID']) ? $this->container['PropertyID'] : null;
	}

	/**
	 * Set the [PropertyID] field.
	 * @param integer $PropertyID
	 */
	public function setPropertyID($PropertyID) {
		$this->container['PropertyID'] = $PropertyID;
	}

    
    /**
	 * Get the [Reference] field.
	 * @return string
	 */
	public function getReference() {
		return isset($this->container['Reference']) ? $this->container['Reference'] : null;
	}

	/**
	 * Set the [Reference] field.
	 * @param string $Reference
	 */
	public function setReference($Reference) {
		$this->container['Reference'] = $Reference;
	}

    
    /**
	 * Get the [Comment] field.
	 * @return string
	 */
	public function getComment() {
		return isset($this->container['Comment']) ? $this->container['Comment'] : null;
	}

	/**
	 * Set the [Comment] field.
	 * @param string $Comment
	 */
	public function setComment($Comment) {
		$this->container['Comment'] = $Comment;
	}

    
    /**
	 * Get the [Amount] field.
	 * @return double
	 */
	public function getAmount() {
		return isset($this->container['Amount']) ? $this->container['Amount'] : null;
	}

	/**
	 * Set the [Amount] field.
	 * @param double $Amount
	 */
	public function setAmount($Amount) {
		$this->container['Amount'] = $Amount;
	}

    
    /**
	 * Get the [TransactionDate] field.
	 * @return DateTime
	 */
	public function getTransactionDate() {
		return isset($this->container['TransactionDate']) ? $this->container['TransactionDate'] : null;
	}

	/**
	 * Set the [TransactionDate] field.
	 * @param DateTime $TransactionDate
	 */
	public function setTransactionDate($TransactionDate) {
		$this->container['TransactionDate'] = $TransactionDate;
	}

    
    /**
	 * Get the [CreateDate] field.
	 * @return DateTime
	 */
	public function getCreateDate() {
		return isset($this->container['CreateDate']) ? $this->container['CreateDate'] : null;
	}

	/**
	 * Set the [CreateDate] field.
	 * @param DateTime $CreateDate
	 */
	public function setCreateDate($CreateDate) {
		$this->container['CreateDate'] = $CreateDate;
	}

    
    #endregion
}