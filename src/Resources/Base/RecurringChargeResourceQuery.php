<?php 

namespace RentManager\Resources\Base;
use RentManager\Resources\RecurringChargeResourceQuery as ChildRecurringChargeResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager RecurringCharge resource.
 */
class RecurringChargeResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\RecurringCharge";
    }

    /**
	 * Create a new instance of a RecurringCharge resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildRecurringChargeResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [RecurringChargeID] field.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function filterByRecurringChargeID($value, $operator = "=") {

        $this->addFilter("RecurringChargeID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [UnitID] field.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function filterByUnitID($value, $operator = "=") {

        $this->addFilter("UnitID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Frequency] field.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function filterByFrequency($value, $operator = "=") {

        $this->addFilter("Frequency", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [ChargeTypeID] field.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function filterByChargeTypeID($value, $operator = "=") {

        $this->addFilter("ChargeTypeID", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [Amount] resource.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function embedAmount() {

        $this->addEmbed("Amount");
		return $this;
	}
            
    /**
	 * Filter resource by the [Comment] field.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function filterByComment($value, $operator = "=") {

        $this->addFilter("Comment", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [FromDate] resource.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function embedFromDate() {

        $this->addEmbed("FromDate");
		return $this;
	}
            
    /**
	 * Embed the related [ToDate] resource.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function embedToDate() {

        $this->addEmbed("ToDate");
		return $this;
	}
            
    /**
	 * Filter resource by the [IsCalculated] field.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function filterByIsCalculated($value, $operator = "=") {

        $this->addFilter("IsCalculated", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [CreateDate] resource.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function embedCreateDate() {

        $this->addEmbed("CreateDate");
		return $this;
	}
            
    /**
	 * Embed the related [UpdateDate] resource.
	 * @return ChildRecurringChargeResourceQuery
	 */
	public function embedUpdateDate() {

        $this->addEmbed("UpdateDate");
		return $this;
	}
        

    /**
	 * Save a RecurringCharge model or collection to the Rent Manager API.
	 * @param \RentManager\Models\RecurringCharge|\RentManager\Models\RecurringCharge[] $model
     * @return \RentManager\Models\RecurringCharge|\RentManager\Models\RecurringCharge[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a RecurringCharge from the Rent Manager API.
	 * @return \RentManager\Models\RecurringCharge
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a RecurringCharge collection from the Rent Manager API.
     * @return \RentManager\Models\RecurringCharge[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}