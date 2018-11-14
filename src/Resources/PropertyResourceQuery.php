<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager Property resource.
 */
class PropertyResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\Property";
    }

    /**
	 * Create a new instance of a Property resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  PropertyResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [PropertyID] field.
    * @return  PropertyResourceQuery
    */
    public function filterByPropertyID($value, $operator = "=") 
    {
        $this->addFilter("PropertyID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Name] field.
    * @return  PropertyResourceQuery
    */
    public function filterByName($value, $operator = "=") 
    {
        $this->addFilter("Name", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ShortName] field.
    * @return  PropertyResourceQuery
    */
    public function filterByShortName($value, $operator = "=") 
    {
        $this->addFilter("ShortName", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [BillingName1] field.
    * @return  PropertyResourceQuery
    */
    public function filterByBillingName1($value, $operator = "=") 
    {
        $this->addFilter("BillingName1", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [BillingName2] field.
    * @return  PropertyResourceQuery
    */
    public function filterByBillingName2($value, $operator = "=") 
    {
        $this->addFilter("BillingName2", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ManagerName] field.
    * @return  PropertyResourceQuery
    */
    public function filterByManagerName($value, $operator = "=") 
    {
        $this->addFilter("ManagerName", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsActive] field.
    * @return  PropertyResourceQuery
    */
    public function filterByIsActive($value, $operator = "=") 
    {
        $this->addFilter("IsActive", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsCommercial] field.
    * @return  PropertyResourceQuery
    */
    public function filterByIsCommercial($value, $operator = "=") 
    {
        $this->addFilter("IsCommercial", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [PropertyType] field.
    * @return  PropertyResourceQuery
    */
    public function filterByPropertyType($value, $operator = "=") 
    {
        $this->addFilter("PropertyType", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [Units] resource.
    * @return  PropertyResourceQuery
    */
    public function embedUnits() {

        $this->addEmbed("Units");
        return $this;
    }
    
    
    
    /**
	 * Save a Property model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\Property|\RentManager\Models\Property[] $model
     * @return  \RentManager\Models\Property|\RentManager\Models\Property[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a Property from the Rent Manager API.
	 * @return  \RentManager\Models\Property
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a Property collection from the Rent Manager API.
     * @return  \RentManager\Models\Property[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}