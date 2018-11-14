<?php 

namespace RentManager\Models;

use RentManager\Runtime\BaseModel;
use DateTime;

/**
 * RecurringCharge model.
 */
class RecurringCharge extends BaseModel
{

    protected $container = [];

    protected static $types = [
        "RecurringChargeID" => "integer",
        "UnitID" => "integer",
        "Frequency" => "integer",
        "ChargeTypeID" => "integer",
        "Amount" => "double",
        "Comment" => "string",
        "FromDate" => "DateTime",
        "ToDate" => "DateTime",
        "IsCalculated" => "bool",
        "CreateDate" => "DateTime",
        "UpdateDate" => "DateTime",
        ];

    /**
	 * Get the model instance id.
	 * @return  int
	 */
    public function getInstanceId() 
    {
         
             
                return isset($this->container['RecurringChargeID']) ? $this->container['RecurringChargeID'] : null; 
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
         
             
            }


    #region Getters/Setters

    
    /**
	 * Get the [RecurringChargeID] field.
	 * @return  integer
	 */
	public function getRecurringChargeID() {
        return isset($this->container['RecurringChargeID']) ? $this->container['RecurringChargeID'] : null;
	}

	/**
	 * Set the [RecurringChargeID] field.
     * @param    integer $recurringChargeID
     * @return  RecurringCharge
	 */
	public function setRecurringChargeID($recurringChargeID) {
        $this->container['RecurringChargeID'] = $recurringChargeID;
        return $this;
	}

    
    /**
	 * Get the [UnitID] field.
	 * @return  integer
	 */
	public function getUnitID() {
        return isset($this->container['UnitID']) ? $this->container['UnitID'] : null;
	}

	/**
	 * Set the [UnitID] field.
     * @param    integer $unitID
     * @return  RecurringCharge
	 */
	public function setUnitID($unitID) {
        $this->container['UnitID'] = $unitID;
        return $this;
	}

    
    /**
	 * Get the [Frequency] field.
	 * @return  integer
	 */
	public function getFrequency() {
        return isset($this->container['Frequency']) ? $this->container['Frequency'] : null;
	}

	/**
	 * Set the [Frequency] field.
     * @param    integer $frequency
     * @return  RecurringCharge
	 */
	public function setFrequency($frequency) {
        $this->container['Frequency'] = $frequency;
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
     * @return  RecurringCharge
	 */
	public function setChargeTypeID($chargeTypeID) {
        $this->container['ChargeTypeID'] = $chargeTypeID;
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
     * @return  RecurringCharge
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
     * @return  RecurringCharge
	 */
	public function setComment($comment) {
        $this->container['Comment'] = $comment;
        return $this;
	}

    
    /**
	 * Get the [FromDate] field.
	 * @return  DateTime
	 */
	public function getFromDate() {
        return isset($this->container['FromDate']) ? $this->container['FromDate'] : null;
	}

	/**
	 * Set the [FromDate] field.
     * @param    DateTime $fromDate
     * @return  RecurringCharge
	 */
	public function setFromDate($fromDate) {
        $this->container['FromDate'] = $fromDate;
        return $this;
	}

    
    /**
	 * Get the [ToDate] field.
	 * @return  DateTime
	 */
	public function getToDate() {
        return isset($this->container['ToDate']) ? $this->container['ToDate'] : null;
	}

	/**
	 * Set the [ToDate] field.
     * @param    DateTime $toDate
     * @return  RecurringCharge
	 */
	public function setToDate($toDate) {
        $this->container['ToDate'] = $toDate;
        return $this;
	}

    
    /**
	 * Get the [IsCalculated] field.
	 * @return  bool
	 */
	public function getIsCalculated() {
        return isset($this->container['IsCalculated']) ? $this->container['IsCalculated'] : null;
	}

	/**
	 * Set the [IsCalculated] field.
     * @param    bool $isCalculated
     * @return  RecurringCharge
	 */
	public function setIsCalculated($isCalculated) {
        $this->container['IsCalculated'] = $isCalculated;
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
     * @return  RecurringCharge
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
     * @return  RecurringCharge
	 */
	public function setUpdateDate($updateDate) {
        $this->container['UpdateDate'] = $updateDate;
        return $this;
	}

    
    #endregion
}