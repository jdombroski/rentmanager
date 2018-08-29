<?php 

namespace RentManager\Resources\Base;
use RentManager\Resources\LeaseResourceQuery as ChildLeaseResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager Lease resource.
 */
class LeaseResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\Lease";
    }

    /**
	 * Create a new instance of a Lease resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildLeaseResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [LeaseID] field.
	 * @return ChildLeaseResourceQuery
	 */
	public function filterByLeaseID($value, $operator = "=") {

        $this->addFilter("LeaseID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [TenantID] field.
	 * @return ChildLeaseResourceQuery
	 */
	public function filterByTenantID($value, $operator = "=") {

        $this->addFilter("TenantID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [UnitID] field.
	 * @return ChildLeaseResourceQuery
	 */
	public function filterByUnitID($value, $operator = "=") {

        $this->addFilter("UnitID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [PropertyID] field.
	 * @return ChildLeaseResourceQuery
	 */
	public function filterByPropertyID($value, $operator = "=") {

        $this->addFilter("PropertyID", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [MoveInDate] resource.
	 * @return ChildLeaseResourceQuery
	 */
	public function embedMoveInDate() {

        $this->addEmbed("MoveInDate");
		return $this;
	}
            
    /**
	 * Embed the related [MoveOutDate] resource.
	 * @return ChildLeaseResourceQuery
	 */
	public function embedMoveOutDate() {

        $this->addEmbed("MoveOutDate");
		return $this;
	}
            
    /**
	 * Embed the related [Property] resource.
	 * @return ChildLeaseResourceQuery
	 */
	public function embedProperty() {

        $this->addEmbed("Property");
		return $this;
	}
            
    /**
	 * Embed the related [Unit] resource.
	 * @return ChildLeaseResourceQuery
	 */
	public function embedUnit() {

        $this->addEmbed("Unit");
		return $this;
	}
            
    /**
	 * Embed the related [Tenant] resource.
	 * @return ChildLeaseResourceQuery
	 */
	public function embedTenant() {

        $this->addEmbed("Tenant");
		return $this;
	}
            
    /**
	 * Embed the related [ActiveLeaseRenewal] resource.
	 * @return ChildLeaseResourceQuery
	 */
	public function embedActiveLeaseRenewal() {

        $this->addEmbed("ActiveLeaseRenewal");
		return $this;
	}
        

    /**
	 * Save a Lease model or collection to the Rent Manager API.
	 * @param \RentManager\Models\Lease|\RentManager\Models\Lease[] $model
     * @return \RentManager\Models\Lease|\RentManager\Models\Lease[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a Lease from the Rent Manager API.
	 * @return \RentManager\Models\Lease
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a Lease collection from the Rent Manager API.
     * @return \RentManager\Models\Lease[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}