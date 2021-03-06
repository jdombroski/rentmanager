<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager Contact resource.
 */
class ContactResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\Contact";
    }

    /**
	 * Create a new instance of a Contact resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  ContactResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [ContactID] field.
    * @return  ContactResourceQuery
    */
    public function filterByContactID($value, $operator = "=") 
    {
        $this->addFilter("ContactID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [FirstName] field.
    * @return  ContactResourceQuery
    */
    public function filterByFirstName($value, $operator = "=") 
    {
        $this->addFilter("FirstName", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [LastName] field.
    * @return  ContactResourceQuery
    */
    public function filterByLastName($value, $operator = "=") 
    {
        $this->addFilter("LastName", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsPrimary] field.
    * @return  ContactResourceQuery
    */
    public function filterByIsPrimary($value, $operator = "=") 
    {
        $this->addFilter("IsPrimary", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Email] field.
    * @return  ContactResourceQuery
    */
    public function filterByEmail($value, $operator = "=") 
    {
        $this->addFilter("Email", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ParentID] field.
    * @return  ContactResourceQuery
    */
    public function filterByParentID($value, $operator = "=") 
    {
        $this->addFilter("ParentID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ContactTypeID] field.
    * @return  ContactResourceQuery
    */
    public function filterByContactTypeID($value, $operator = "=") 
    {
        $this->addFilter("ContactTypeID", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [Tenant] resource.
    * @return  ContactResourceQuery
    */
    public function embedTenant() {

        $this->addEmbed("Tenant");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [PhoneNumbers] resource.
    * @return  ContactResourceQuery
    */
    public function embedPhoneNumbers() {

        $this->addEmbed("PhoneNumbers");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [UserDefinedValues] resource.
    * @return  ContactResourceQuery
    */
    public function embedUserDefinedValues() {

        $this->addEmbed("UserDefinedValues");
        return $this;
    }
    
    
    
    /**
	 * Save a Contact model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\Contact|\RentManager\Models\Contact[] $model
     * @return  \RentManager\Models\Contact|\RentManager\Models\Contact[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Find one Contact from the Rent Manager API.
	 * @return  \RentManager\Models\Contact
	 */
    public function findOne() {
        return parent::findOne();
    }

    /**
     * Find a Contact collection from the Rent Manager API.
     * @return  \RentManager\Models\Contact[]
     */
    public function find() {
        return parent::find();
    }
}