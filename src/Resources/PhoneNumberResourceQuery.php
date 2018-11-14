<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager PhoneNumber resource.
 */
class PhoneNumberResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\PhoneNumber";
    }

    /**
	 * Create a new instance of a PhoneNumber resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  PhoneNumberResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [PhoneNumberID] field.
    * @return  PhoneNumberResourceQuery
    */
    public function filterByPhoneNumberID($value, $operator = "=") 
    {
        $this->addFilter("PhoneNumberID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [PhoneNumberTypeID] field.
    * @return  PhoneNumberResourceQuery
    */
    public function filterByPhoneNumberTypeID($value, $operator = "=") 
    {
        $this->addFilter("PhoneNumberTypeID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [PhoneNumber] field.
    * @return  PhoneNumberResourceQuery
    */
    public function filterByPhoneNumber($value, $operator = "=") 
    {
        $this->addFilter("PhoneNumber", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Extension] field.
    * @return  PhoneNumberResourceQuery
    */
    public function filterByExtension($value, $operator = "=") 
    {
        $this->addFilter("Extension", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [StrippedPhoneNumber] field.
    * @return  PhoneNumberResourceQuery
    */
    public function filterByStrippedPhoneNumber($value, $operator = "=") 
    {
        $this->addFilter("StrippedPhoneNumber", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsPrimary] field.
    * @return  PhoneNumberResourceQuery
    */
    public function filterByIsPrimary($value, $operator = "=") 
    {
        $this->addFilter("IsPrimary", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsTextReady] field.
    * @return  PhoneNumberResourceQuery
    */
    public function filterByIsTextReady($value, $operator = "=") 
    {
        $this->addFilter("IsTextReady", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ParentID] field.
    * @return  PhoneNumberResourceQuery
    */
    public function filterByParentID($value, $operator = "=") 
    {
        $this->addFilter("ParentID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ParentType] field.
    * @return  PhoneNumberResourceQuery
    */
    public function filterByParentType($value, $operator = "=") 
    {
        $this->addFilter("ParentType", $value, $operator);
        return $this;
    }

    
    
    /**
	 * Save a PhoneNumber model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\PhoneNumber|\RentManager\Models\PhoneNumber[] $model
     * @return  \RentManager\Models\PhoneNumber|\RentManager\Models\PhoneNumber[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a PhoneNumber from the Rent Manager API.
	 * @return  \RentManager\Models\PhoneNumber
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a PhoneNumber collection from the Rent Manager API.
     * @return  \RentManager\Models\PhoneNumber[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}