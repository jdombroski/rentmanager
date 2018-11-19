<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager Charge resource.
 */
class ChargeResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\Charge";
    }

    /**
	 * Create a new instance of a Charge resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  ChargeResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [ChargeID] field.
    * @return  ChargeResourceQuery
    */
    public function filterByChargeID($value, $operator = "=") 
    {
        $this->addFilter("ChargeID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ID] field.
    * @return  ChargeResourceQuery
    */
    public function filterByID($value, $operator = "=") 
    {
        $this->addFilter("ID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ChargeTypeID] field.
    * @return  ChargeResourceQuery
    */
    public function filterByChargeTypeID($value, $operator = "=") 
    {
        $this->addFilter("ChargeTypeID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [AccountID] field.
    * @return  ChargeResourceQuery
    */
    public function filterByAccountID($value, $operator = "=") 
    {
        $this->addFilter("AccountID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [PropertyID] field.
    * @return  ChargeResourceQuery
    */
    public function filterByPropertyID($value, $operator = "=") 
    {
        $this->addFilter("PropertyID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Reference] field.
    * @return  ChargeResourceQuery
    */
    public function filterByReference($value, $operator = "=") 
    {
        $this->addFilter("Reference", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Comment] field.
    * @return  ChargeResourceQuery
    */
    public function filterByComment($value, $operator = "=") 
    {
        $this->addFilter("Comment", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [Amount] resource.
    * @return  ChargeResourceQuery
    */
    public function embedAmount() {

        $this->addEmbed("Amount");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [TransactionDate] resource.
    * @return  ChargeResourceQuery
    */
    public function embedTransactionDate() {

        $this->addEmbed("TransactionDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [CreateDate] resource.
    * @return  ChargeResourceQuery
    */
    public function embedCreateDate() {

        $this->addEmbed("CreateDate");
        return $this;
    }
    
    
    
    /**
	 * Save a Charge model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\Charge|\RentManager\Models\Charge[] $model
     * @return  \RentManager\Models\Charge|\RentManager\Models\Charge[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Find one Charge from the Rent Manager API.
	 * @return  \RentManager\Models\Charge
	 */
    public function findOne() {
        return parent::findOne();
    }

    /**
     * Find a Charge collection from the Rent Manager API.
     * @return  \RentManager\Models\Charge[]
     */
    public function find() {
        return parent::find();
    }
}