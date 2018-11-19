<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager RecurringCharge resource.
 */
class RecurringChargeResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\RecurringCharge";
    }

    /**
	 * Create a new instance of a RecurringCharge resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  RecurringChargeResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [RecurringChargeID] field.
    * @return  RecurringChargeResourceQuery
    */
    public function filterByRecurringChargeID($value, $operator = "=") 
    {
        $this->addFilter("RecurringChargeID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [UnitID] field.
    * @return  RecurringChargeResourceQuery
    */
    public function filterByUnitID($value, $operator = "=") 
    {
        $this->addFilter("UnitID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Frequency] field.
    * @return  RecurringChargeResourceQuery
    */
    public function filterByFrequency($value, $operator = "=") 
    {
        $this->addFilter("Frequency", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ChargeTypeID] field.
    * @return  RecurringChargeResourceQuery
    */
    public function filterByChargeTypeID($value, $operator = "=") 
    {
        $this->addFilter("ChargeTypeID", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [Amount] resource.
    * @return  RecurringChargeResourceQuery
    */
    public function embedAmount() {

        $this->addEmbed("Amount");
        return $this;
    }
    
    
    
    
    /**
    * Filter resource by the [Comment] field.
    * @return  RecurringChargeResourceQuery
    */
    public function filterByComment($value, $operator = "=") 
    {
        $this->addFilter("Comment", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [FromDate] resource.
    * @return  RecurringChargeResourceQuery
    */
    public function embedFromDate() {

        $this->addEmbed("FromDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [ToDate] resource.
    * @return  RecurringChargeResourceQuery
    */
    public function embedToDate() {

        $this->addEmbed("ToDate");
        return $this;
    }
    
    
    
    
    /**
    * Filter resource by the [IsCalculated] field.
    * @return  RecurringChargeResourceQuery
    */
    public function filterByIsCalculated($value, $operator = "=") 
    {
        $this->addFilter("IsCalculated", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [CreateDate] resource.
    * @return  RecurringChargeResourceQuery
    */
    public function embedCreateDate() {

        $this->addEmbed("CreateDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [UpdateDate] resource.
    * @return  RecurringChargeResourceQuery
    */
    public function embedUpdateDate() {

        $this->addEmbed("UpdateDate");
        return $this;
    }
    
    
    
    /**
	 * Save a RecurringCharge model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\RecurringCharge|\RentManager\Models\RecurringCharge[] $model
     * @return  \RentManager\Models\RecurringCharge|\RentManager\Models\RecurringCharge[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Find one RecurringCharge from the Rent Manager API.
	 * @return  \RentManager\Models\RecurringCharge
	 */
    public function findOne() {
        return parent::findOne();
    }

    /**
     * Find a RecurringCharge collection from the Rent Manager API.
     * @return  \RentManager\Models\RecurringCharge[]
     */
    public function find() {
        return parent::find();
    }
}