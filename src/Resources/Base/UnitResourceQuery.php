<?php 

namespace RentManager\Resources\Base;
use RentManager\Resources\UnitResourceQuery as ChildUnitResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager Unit resource.
 */
class UnitResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\Unit";
    }

    /**
	 * Create a new instance of a Unit resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildUnitResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [UnitID] field.
	 * @return ChildUnitResourceQuery
	 */
	public function filterByUnitID($value, $operator = "=") {

        $this->addFilter("UnitID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [PropertyID] field.
	 * @return ChildUnitResourceQuery
	 */
	public function filterByPropertyID($value, $operator = "=") {

        $this->addFilter("PropertyID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Name] field.
	 * @return ChildUnitResourceQuery
	 */
	public function filterByName($value, $operator = "=") {

        $this->addFilter("Name", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Comment] field.
	 * @return ChildUnitResourceQuery
	 */
	public function filterByComment($value, $operator = "=") {

        $this->addFilter("Comment", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [Property] resource.
	 * @return ChildUnitResourceQuery
	 */
	public function embedProperty() {

        $this->addEmbed("Property");
		return $this;
	}
            
    /**
	 * Embed the related [UserDefinedValues] resource.
	 * @return ChildUnitResourceQuery
	 */
	public function embedUserDefinedValues() {

        $this->addEmbed("UserDefinedValues");
		return $this;
	}
        

    /**
	 * Save a Unit model or collection to the Rent Manager API.
	 * @param \RentManager\Models\Unit|\RentManager\Models\Unit[] $model
     * @return \RentManager\Models\Unit|\RentManager\Models\Unit[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a Unit from the Rent Manager API.
	 * @return \RentManager\Models\Unit
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a Unit collection from the Rent Manager API.
     * @return \RentManager\Models\Unit[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}