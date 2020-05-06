<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager Address resource.
 */
class AddressResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\Address";
    }

    /**
	 * Create a new instance of a Address resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  AddressResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [AddressID] field.
    * @return  AddressResourceQuery
    */
    public function filterByAddressID($value, $operator = "=") 
    {
        $this->addFilter("AddressID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [AddressTypeID] field.
    * @return  AddressResourceQuery
    */
    public function filterByAddressTypeID($value, $operator = "=") 
    {
        $this->addFilter("AddressTypeID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Address] field.
    * @return  AddressResourceQuery
    */
    public function filterByAddress($value, $operator = "=") 
    {
        $this->addFilter("Address", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Street] field.
    * @return  AddressResourceQuery
    */
    public function filterByStreet($value, $operator = "=") 
    {
        $this->addFilter("Street", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [City] field.
    * @return  AddressResourceQuery
    */
    public function filterByCity($value, $operator = "=") 
    {
        $this->addFilter("City", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [State] field.
    * @return  AddressResourceQuery
    */
    public function filterByState($value, $operator = "=") 
    {
        $this->addFilter("State", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [PostalCode] field.
    * @return  AddressResourceQuery
    */
    public function filterByPostalCode($value, $operator = "=") 
    {
        $this->addFilter("PostalCode", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsPrimary] field.
    * @return  AddressResourceQuery
    */
    public function filterByIsPrimary($value, $operator = "=") 
    {
        $this->addFilter("IsPrimary", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsBilling] field.
    * @return  AddressResourceQuery
    */
    public function filterByIsBilling($value, $operator = "=") 
    {
        $this->addFilter("IsBilling", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ParentID] field.
    * @return  AddressResourceQuery
    */
    public function filterByParentID($value, $operator = "=") 
    {
        $this->addFilter("ParentID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [MetaTag] field.
    * @return  AddressResourceQuery
    */
    public function filterByMetaTag($value, $operator = "=") 
    {
        $this->addFilter("MetaTag", $value, $operator);
        return $this;
    }

    
    
    /**
	 * Save a Address model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\Address|\RentManager\Models\Address[] $model
     * @return  \RentManager\Models\Address|\RentManager\Models\Address[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Find one Address from the Rent Manager API.
	 * @return  \RentManager\Models\Address
	 */
    public function findOne() {
        return parent::findOne();
    }

    /**
     * Find a Address collection from the Rent Manager API.
     * @return  \RentManager\Models\Address[]
     */
    public function find() {
        return parent::find();
    }
}