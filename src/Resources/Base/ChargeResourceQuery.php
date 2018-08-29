<?php 

namespace RentManager\Resources\Base;
use RentManager\Resources\ChargeResourceQuery as ChildChargeResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager Charge resource.
 */
class ChargeResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\Charge";
    }

    /**
	 * Create a new instance of a Charge resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildChargeResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [ChargeID] field.
	 * @return ChildChargeResourceQuery
	 */
	public function filterByChargeID($value, $operator = "=") {

        $this->addFilter("ChargeID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [ID] field.
	 * @return ChildChargeResourceQuery
	 */
	public function filterByID($value, $operator = "=") {

        $this->addFilter("ID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [ChargeTypeID] field.
	 * @return ChildChargeResourceQuery
	 */
	public function filterByChargeTypeID($value, $operator = "=") {

        $this->addFilter("ChargeTypeID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [AccountID] field.
	 * @return ChildChargeResourceQuery
	 */
	public function filterByAccountID($value, $operator = "=") {

        $this->addFilter("AccountID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [PropertyID] field.
	 * @return ChildChargeResourceQuery
	 */
	public function filterByPropertyID($value, $operator = "=") {

        $this->addFilter("PropertyID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Reference] field.
	 * @return ChildChargeResourceQuery
	 */
	public function filterByReference($value, $operator = "=") {

        $this->addFilter("Reference", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Comment] field.
	 * @return ChildChargeResourceQuery
	 */
	public function filterByComment($value, $operator = "=") {

        $this->addFilter("Comment", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [Amount] resource.
	 * @return ChildChargeResourceQuery
	 */
	public function embedAmount() {

        $this->addEmbed("Amount");
		return $this;
	}
            
    /**
	 * Embed the related [TransactionDate] resource.
	 * @return ChildChargeResourceQuery
	 */
	public function embedTransactionDate() {

        $this->addEmbed("TransactionDate");
		return $this;
	}
            
    /**
	 * Embed the related [CreateDate] resource.
	 * @return ChildChargeResourceQuery
	 */
	public function embedCreateDate() {

        $this->addEmbed("CreateDate");
		return $this;
	}
        

    /**
	 * Save a Charge model or collection to the Rent Manager API.
	 * @param \RentManager\Models\Charge|\RentManager\Models\Charge[] $model
     * @return \RentManager\Models\Charge|\RentManager\Models\Charge[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a Charge from the Rent Manager API.
	 * @return \RentManager\Models\Charge
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a Charge collection from the Rent Manager API.
     * @return \RentManager\Models\Charge[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}