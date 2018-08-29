<?php 

namespace RentManager\Resources\Base;
use RentManager\Resources\ChargeTypeResourceQuery as ChildChargeTypeResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager ChargeType resource.
 */
class ChargeTypeResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\ChargeType";
    }

    /**
	 * Create a new instance of a ChargeType resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildChargeTypeResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [ChargeTypeID] field.
	 * @return ChildChargeTypeResourceQuery
	 */
	public function filterByChargeTypeID($value, $operator = "=") {

        $this->addFilter("ChargeTypeID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Name] field.
	 * @return ChildChargeTypeResourceQuery
	 */
	public function filterByName($value, $operator = "=") {

        $this->addFilter("Name", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Description] field.
	 * @return ChildChargeTypeResourceQuery
	 */
	public function filterByDescription($value, $operator = "=") {

        $this->addFilter("Description", $value, $operator);

		return $this;
	}
        

    /**
	 * Save a ChargeType model or collection to the Rent Manager API.
	 * @param \RentManager\Models\ChargeType|\RentManager\Models\ChargeType[] $model
     * @return \RentManager\Models\ChargeType|\RentManager\Models\ChargeType[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a ChargeType from the Rent Manager API.
	 * @return \RentManager\Models\ChargeType
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a ChargeType collection from the Rent Manager API.
     * @return \RentManager\Models\ChargeType[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}