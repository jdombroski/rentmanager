<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager ContactType resource.
 */
class ContactTypeResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\ContactType";
    }

    /**
	 * Create a new instance of a ContactType resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  ContactTypeResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [ContactTypeID] field.
    * @return  ContactTypeResourceQuery
    */
    public function filterByContactTypeID($value, $operator = "=") 
    {
        $this->addFilter("ContactTypeID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Name] field.
    * @return  ContactTypeResourceQuery
    */
    public function filterByName($value, $operator = "=") 
    {
        $this->addFilter("Name", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Description] field.
    * @return  ContactTypeResourceQuery
    */
    public function filterByDescription($value, $operator = "=") 
    {
        $this->addFilter("Description", $value, $operator);
        return $this;
    }

    
    
    /**
	 * Save a ContactType model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\ContactType|\RentManager\Models\ContactType[] $model
     * @return  \RentManager\Models\ContactType|\RentManager\Models\ContactType[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Find one ContactType from the Rent Manager API.
	 * @return  \RentManager\Models\ContactType
	 */
    public function findOne() {
        return parent::findOne();
    }

    /**
     * Find a ContactType collection from the Rent Manager API.
     * @return  \RentManager\Models\ContactType[]
     */
    public function find() {
        return parent::find();
    }
}