<?php 

namespace RentManager\Resources\Base;
use RentManager\Resources\ContactResourceQuery as ChildContactResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager Contact resource.
 */
class ContactResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\Contact";
    }

    /**
	 * Create a new instance of a Contact resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildContactResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [ContactID] field.
	 * @return ChildContactResourceQuery
	 */
	public function filterByContactID($value, $operator = "=") {

        $this->addFilter("ContactID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [FirstName] field.
	 * @return ChildContactResourceQuery
	 */
	public function filterByFirstName($value, $operator = "=") {

        $this->addFilter("FirstName", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [LastName] field.
	 * @return ChildContactResourceQuery
	 */
	public function filterByLastName($value, $operator = "=") {

        $this->addFilter("LastName", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [IsPrimary] field.
	 * @return ChildContactResourceQuery
	 */
	public function filterByIsPrimary($value, $operator = "=") {

        $this->addFilter("IsPrimary", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Email] field.
	 * @return ChildContactResourceQuery
	 */
	public function filterByEmail($value, $operator = "=") {

        $this->addFilter("Email", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [ParentID] field.
	 * @return ChildContactResourceQuery
	 */
	public function filterByParentID($value, $operator = "=") {

        $this->addFilter("ParentID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [ContactTypeID] field.
	 * @return ChildContactResourceQuery
	 */
	public function filterByContactTypeID($value, $operator = "=") {

        $this->addFilter("ContactTypeID", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [Tenant] resource.
	 * @return ChildContactResourceQuery
	 */
	public function embedTenant() {

        $this->addEmbed("Tenant");
		return $this;
	}
            
    /**
	 * Embed the related [PhoneNumbers] resource.
	 * @return ChildContactResourceQuery
	 */
	public function embedPhoneNumbers() {

        $this->addEmbed("PhoneNumbers");
		return $this;
	}
            
    /**
	 * Embed the related [UserDefinedValues] resource.
	 * @return ChildContactResourceQuery
	 */
	public function embedUserDefinedValues() {

        $this->addEmbed("UserDefinedValues");
		return $this;
	}
        

    /**
	 * Save a Contact model or collection to the Rent Manager API.
	 * @param \RentManager\Models\Contact|\RentManager\Models\Contact[] $model
     * @return \RentManager\Models\Contact|\RentManager\Models\Contact[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a Contact from the Rent Manager API.
	 * @return \RentManager\Models\Contact
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a Contact collection from the Rent Manager API.
     * @return \RentManager\Models\Contact[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}