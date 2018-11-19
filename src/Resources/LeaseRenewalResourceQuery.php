<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager LeaseRenewal resource.
 */
class LeaseRenewalResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\LeaseRenewal";
    }

    /**
	 * Create a new instance of a LeaseRenewal resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  LeaseRenewalResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [LeaseRenewalID] field.
    * @return  LeaseRenewalResourceQuery
    */
    public function filterByLeaseRenewalID($value, $operator = "=") 
    {
        $this->addFilter("LeaseRenewalID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [ParentLeaseID] field.
    * @return  LeaseRenewalResourceQuery
    */
    public function filterByParentLeaseID($value, $operator = "=") 
    {
        $this->addFilter("ParentLeaseID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [UnitID] field.
    * @return  LeaseRenewalResourceQuery
    */
    public function filterByUnitID($value, $operator = "=") 
    {
        $this->addFilter("UnitID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [LeaseLength] field.
    * @return  LeaseRenewalResourceQuery
    */
    public function filterByLeaseLength($value, $operator = "=") 
    {
        $this->addFilter("LeaseLength", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [SignDate] resource.
    * @return  LeaseRenewalResourceQuery
    */
    public function embedSignDate() {

        $this->addEmbed("SignDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [StartDate] resource.
    * @return  LeaseRenewalResourceQuery
    */
    public function embedStartDate() {

        $this->addEmbed("StartDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [EndDate] resource.
    * @return  LeaseRenewalResourceQuery
    */
    public function embedEndDate() {

        $this->addEmbed("EndDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Property] resource.
    * @return  LeaseRenewalResourceQuery
    */
    public function embedProperty() {

        $this->addEmbed("Property");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Unit] resource.
    * @return  LeaseRenewalResourceQuery
    */
    public function embedUnit() {

        $this->addEmbed("Unit");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Tenant] resource.
    * @return  LeaseRenewalResourceQuery
    */
    public function embedTenant() {

        $this->addEmbed("Tenant");
        return $this;
    }
    
    
    
    /**
	 * Save a LeaseRenewal model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\LeaseRenewal|\RentManager\Models\LeaseRenewal[] $model
     * @return  \RentManager\Models\LeaseRenewal|\RentManager\Models\LeaseRenewal[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Find one LeaseRenewal from the Rent Manager API.
	 * @return  \RentManager\Models\LeaseRenewal
	 */
    public function findOne() {
        return parent::findOne();
    }

    /**
     * Find a LeaseRenewal collection from the Rent Manager API.
     * @return  \RentManager\Models\LeaseRenewal[]
     */
    public function find() {
        return parent::find();
    }
}