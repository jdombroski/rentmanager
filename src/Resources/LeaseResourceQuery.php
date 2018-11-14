<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager Lease resource.
 */
class LeaseResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\Lease";
    }

    /**
	 * Create a new instance of a Lease resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  LeaseResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [LeaseID] field.
    * @return  LeaseResourceQuery
    */
    public function filterByLeaseID($value, $operator = "=") 
    {
        $this->addFilter("LeaseID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [TenantID] field.
    * @return  LeaseResourceQuery
    */
    public function filterByTenantID($value, $operator = "=") 
    {
        $this->addFilter("TenantID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [UnitID] field.
    * @return  LeaseResourceQuery
    */
    public function filterByUnitID($value, $operator = "=") 
    {
        $this->addFilter("UnitID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [PropertyID] field.
    * @return  LeaseResourceQuery
    */
    public function filterByPropertyID($value, $operator = "=") 
    {
        $this->addFilter("PropertyID", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [MoveInDate] resource.
    * @return  LeaseResourceQuery
    */
    public function embedMoveInDate() {

        $this->addEmbed("MoveInDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [MoveOutDate] resource.
    * @return  LeaseResourceQuery
    */
    public function embedMoveOutDate() {

        $this->addEmbed("MoveOutDate");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Property] resource.
    * @return  LeaseResourceQuery
    */
    public function embedProperty() {

        $this->addEmbed("Property");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Unit] resource.
    * @return  LeaseResourceQuery
    */
    public function embedUnit() {

        $this->addEmbed("Unit");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Tenant] resource.
    * @return  LeaseResourceQuery
    */
    public function embedTenant() {

        $this->addEmbed("Tenant");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [ActiveLeaseRenewal] resource.
    * @return  LeaseResourceQuery
    */
    public function embedActiveLeaseRenewal() {

        $this->addEmbed("ActiveLeaseRenewal");
        return $this;
    }
    
    
    
    /**
	 * Save a Lease model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\Lease|\RentManager\Models\Lease[] $model
     * @return  \RentManager\Models\Lease|\RentManager\Models\Lease[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a Lease from the Rent Manager API.
	 * @return  \RentManager\Models\Lease
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a Lease collection from the Rent Manager API.
     * @return  \RentManager\Models\Lease[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}