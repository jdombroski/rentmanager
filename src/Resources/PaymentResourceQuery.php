<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager Payment resource.
 */
class PaymentResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\Payment";
    }

    /**
	 * Create a new instance of a Payment resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  PaymentResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [ID] field.
    * @return  PaymentResourceQuery
    */
    public function filterByID($value, $operator = "=") 
    {
        $this->addFilter("ID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [AccountID] field.
    * @return  PaymentResourceQuery
    */
    public function filterByAccountID($value, $operator = "=") 
    {
        $this->addFilter("AccountID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [TransactionType] field.
    * @return  PaymentResourceQuery
    */
    public function filterByTransactionType($value, $operator = "=") 
    {
        $this->addFilter("TransactionType", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [AmountAllocated] resource.
    * @return  PaymentResourceQuery
    */
    public function embedAmountAllocated() {

        $this->addEmbed("AmountAllocated");
        return $this;
    }
    
    
    
    
    /**
    * Filter resource by the [IsFullyAllocated] field.
    * @return  PaymentResourceQuery
    */
    public function filterByIsFullyAllocated($value, $operator = "=") 
    {
        $this->addFilter("IsFullyAllocated", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsSecurityDepositPriorToGLStartDate] field.
    * @return  PaymentResourceQuery
    */
    public function filterByIsSecurityDepositPriorToGLStartDate($value, $operator = "=") 
    {
        $this->addFilter("IsSecurityDepositPriorToGLStartDate", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ReceiptID] field.
    * @return  PaymentResourceQuery
    */
    public function filterByReceiptID($value, $operator = "=") 
    {
        $this->addFilter("ReceiptID", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [ReversalDate] resource.
    * @return  PaymentResourceQuery
    */
    public function embedReversalDate() {

        $this->addEmbed("ReversalDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Amount] resource.
    * @return  PaymentResourceQuery
    */
    public function embedAmount() {

        $this->addEmbed("Amount");
        return $this;
    }
    
    
    
    
    /**
    * Filter resource by the [Comment] field.
    * @return  PaymentResourceQuery
    */
    public function filterByComment($value, $operator = "=") 
    {
        $this->addFilter("Comment", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [TransactionDate] resource.
    * @return  PaymentResourceQuery
    */
    public function embedTransactionDate() {

        $this->addEmbed("TransactionDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [CreateDate] resource.
    * @return  PaymentResourceQuery
    */
    public function embedCreateDate() {

        $this->addEmbed("CreateDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [UpdateDate] resource.
    * @return  PaymentResourceQuery
    */
    public function embedUpdateDate() {

        $this->addEmbed("UpdateDate");
        return $this;
    }
    
    
    
    /**
	 * Save a Payment model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\Payment|\RentManager\Models\Payment[] $model
     * @return  \RentManager\Models\Payment|\RentManager\Models\Payment[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a Payment from the Rent Manager API.
	 * @return  \RentManager\Models\Payment
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a Payment collection from the Rent Manager API.
     * @return  \RentManager\Models\Payment[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}