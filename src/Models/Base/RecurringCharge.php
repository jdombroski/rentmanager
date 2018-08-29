<?php 

namespace RentManager\Models\Base;
use RentManager\Models\BaseModel as BaseModel;
use DateTime;

/**
 * RecurringCharge base class.
 */
class RecurringCharge extends BaseModel
{

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
	 * @return int
	 */
    public function getInstanceId() {
                return isset($this->container['RecurringChargeID']) ? $this->container['RecurringChargeID'] : null;
        
    }


    #region Getters/Setters

    
    /**
	 * Get the [RecurringChargeID] field.
	 * @return integer
	 */
	public function getRecurringChargeID() {
		return isset($this->container['RecurringChargeID']) ? $this->container['RecurringChargeID'] : null;
	}

	/**
	 * Set the [RecurringChargeID] field.
	 * @param integer $RecurringChargeID
	 */
	public function setRecurringChargeID($RecurringChargeID) {
		$this->container['RecurringChargeID'] = $RecurringChargeID;
	}

    
    /**
	 * Get the [UnitID] field.
	 * @return integer
	 */
	public function getUnitID() {
		return isset($this->container['UnitID']) ? $this->container['UnitID'] : null;
	}

	/**
	 * Set the [UnitID] field.
	 * @param integer $UnitID
	 */
	public function setUnitID($UnitID) {
		$this->container['UnitID'] = $UnitID;
	}

    
    /**
	 * Get the [Frequency] field.
	 * @return integer
	 */
	public function getFrequency() {
		return isset($this->container['Frequency']) ? $this->container['Frequency'] : null;
	}

	/**
	 * Set the [Frequency] field.
	 * @param integer $Frequency
	 */
	public function setFrequency($Frequency) {
		$this->container['Frequency'] = $Frequency;
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
	 * Get the [FromDate] field.
	 * @return DateTime
	 */
	public function getFromDate() {
		return isset($this->container['FromDate']) ? $this->container['FromDate'] : null;
	}

	/**
	 * Set the [FromDate] field.
	 * @param DateTime $FromDate
	 */
	public function setFromDate($FromDate) {
		$this->container['FromDate'] = $FromDate;
	}

    
    /**
	 * Get the [ToDate] field.
	 * @return DateTime
	 */
	public function getToDate() {
		return isset($this->container['ToDate']) ? $this->container['ToDate'] : null;
	}

	/**
	 * Set the [ToDate] field.
	 * @param DateTime $ToDate
	 */
	public function setToDate($ToDate) {
		$this->container['ToDate'] = $ToDate;
	}

    
    /**
	 * Get the [IsCalculated] field.
	 * @return bool
	 */
	public function getIsCalculated() {
		return isset($this->container['IsCalculated']) ? $this->container['IsCalculated'] : null;
	}

	/**
	 * Set the [IsCalculated] field.
	 * @param bool $IsCalculated
	 */
	public function setIsCalculated($IsCalculated) {
		$this->container['IsCalculated'] = $IsCalculated;
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

    
    /**
	 * Get the [UpdateDate] field.
	 * @return DateTime
	 */
	public function getUpdateDate() {
		return isset($this->container['UpdateDate']) ? $this->container['UpdateDate'] : null;
	}

	/**
	 * Set the [UpdateDate] field.
	 * @param DateTime $UpdateDate
	 */
	public function setUpdateDate($UpdateDate) {
		$this->container['UpdateDate'] = $UpdateDate;
	}

    
    #endregion
}