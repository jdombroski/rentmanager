<?php 

namespace RentManager\Resources\Base;
use RentManager\Resources\UserDefinedFieldResourceQuery as ChildUserDefinedFieldResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager UserDefinedField resource.
 */
class UserDefinedFieldResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\UserDefinedField";
    }

    /**
	 * Create a new instance of a UserDefinedField resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildUserDefinedFieldResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [UserDefinedFieldID] field.
	 * @return ChildUserDefinedFieldResourceQuery
	 */
	public function filterByUserDefinedFieldID($value, $operator = "=") {

        $this->addFilter("UserDefinedFieldID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [SortOrder] field.
	 * @return ChildUserDefinedFieldResourceQuery
	 */
	public function filterBySortOrder($value, $operator = "=") {

        $this->addFilter("SortOrder", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Name] field.
	 * @return ChildUserDefinedFieldResourceQuery
	 */
	public function filterByName($value, $operator = "=") {

        $this->addFilter("Name", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [IsRequired] resource.
	 * @return ChildUserDefinedFieldResourceQuery
	 */
	public function embedIsRequired() {

        $this->addEmbed("IsRequired");
		return $this;
	}
        

    /**
	 * Save a UserDefinedField model or collection to the Rent Manager API.
	 * @param \RentManager\Models\UserDefinedField|\RentManager\Models\UserDefinedField[] $model
     * @return \RentManager\Models\UserDefinedField|\RentManager\Models\UserDefinedField[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a UserDefinedField from the Rent Manager API.
	 * @return \RentManager\Models\UserDefinedField
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a UserDefinedField collection from the Rent Manager API.
     * @return \RentManager\Models\UserDefinedField[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}