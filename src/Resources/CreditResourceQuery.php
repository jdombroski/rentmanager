<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager Credit resource.
 */
class CreditResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\Credit";
    }

    /**
	 * Create a new instance of a Credit resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  CreditResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [ID] field.
    * @return  CreditResourceQuery
    */
    public function filterByID($value, $operator = "=") 
    {
        $this->addFilter("ID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [AccountID] field.
    * @return  CreditResourceQuery
    */
    public function filterByAccountID($value, $operator = "=") 
    {
        $this->addFilter("AccountID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ChargeTypeID] field.
    * @return  CreditResourceQuery
    */
    public function filterByChargeTypeID($value, $operator = "=") 
    {
        $this->addFilter("ChargeTypeID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [TransactionType] field.
    * @return  CreditResourceQuery
    */
    public function filterByTransactionType($value, $operator = "=") 
    {
        $this->addFilter("TransactionType", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [CreateDate] resource.
    * @return  CreditResourceQuery
    */
    public function embedCreateDate() {

        $this->addEmbed("CreateDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [UpdateDate] resource.
    * @return  CreditResourceQuery
    */
    public function embedUpdateDate() {

        $this->addEmbed("UpdateDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [TransactionDate] resource.
    * @return  CreditResourceQuery
    */
    public function embedTransactionDate() {

        $this->addEmbed("TransactionDate");
        return $this;
    }
    
    
    
    
    /**
    * Filter resource by the [Reference] field.
    * @return  CreditResourceQuery
    */
    public function filterByReference($value, $operator = "=") 
    {
        $this->addFilter("Reference", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Comment] field.
    * @return  CreditResourceQuery
    */
    public function filterByComment($value, $operator = "=") 
    {
        $this->addFilter("Comment", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [Amount] resource.
    * @return  CreditResourceQuery
    */
    public function embedAmount() {

        $this->addEmbed("Amount");
        return $this;
    }
    
    
    
    /**
	 * Save a Credit model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\Credit|\RentManager\Models\Credit[] $model
     * @return  \RentManager\Models\Credit|\RentManager\Models\Credit[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Find one Credit from the Rent Manager API.
	 * @return  \RentManager\Models\Credit
	 */
    public function findOne() {
        return parent::findOne();
    }

    /**
     * Find a Credit collection from the Rent Manager API.
     * @return  \RentManager\Models\Credit[]
     */
    public function find() {
        return parent::find();
    }
}