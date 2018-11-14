<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager UserDefinedValue resource.
 */
class UserDefinedValueResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\UserDefinedValue";
    }

    /**
	 * Create a new instance of a UserDefinedValue resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  UserDefinedValueResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [UserDefinedFieldID] field.
    * @return  UserDefinedValueResourceQuery
    */
    public function filterByUserDefinedFieldID($value, $operator = "=") 
    {
        $this->addFilter("UserDefinedFieldID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ParentID] field.
    * @return  UserDefinedValueResourceQuery
    */
    public function filterByParentID($value, $operator = "=") 
    {
        $this->addFilter("ParentID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Name] field.
    * @return  UserDefinedValueResourceQuery
    */
    public function filterByName($value, $operator = "=") 
    {
        $this->addFilter("Name", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Value] field.
    * @return  UserDefinedValueResourceQuery
    */
    public function filterByValue($value, $operator = "=") 
    {
        $this->addFilter("Value", $value, $operator);
        return $this;
    }

    
    
    /**
	 * Save a UserDefinedValue model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\UserDefinedValue|\RentManager\Models\UserDefinedValue[] $model
     * @return  \RentManager\Models\UserDefinedValue|\RentManager\Models\UserDefinedValue[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a UserDefinedValue from the Rent Manager API.
	 * @return  \RentManager\Models\UserDefinedValue
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a UserDefinedValue collection from the Rent Manager API.
     * @return  \RentManager\Models\UserDefinedValue[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}