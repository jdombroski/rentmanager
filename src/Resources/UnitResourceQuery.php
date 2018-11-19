<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager Unit resource.
 */
class UnitResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\Unit";
    }

    /**
	 * Create a new instance of a Unit resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  UnitResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [UnitID] field.
    * @return  UnitResourceQuery
    */
    public function filterByUnitID($value, $operator = "=") 
    {
        $this->addFilter("UnitID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [PropertyID] field.
    * @return  UnitResourceQuery
    */
    public function filterByPropertyID($value, $operator = "=") 
    {
        $this->addFilter("PropertyID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Name] field.
    * @return  UnitResourceQuery
    */
    public function filterByName($value, $operator = "=") 
    {
        $this->addFilter("Name", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Comment] field.
    * @return  UnitResourceQuery
    */
    public function filterByComment($value, $operator = "=") 
    {
        $this->addFilter("Comment", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [Property] resource.
    * @return  UnitResourceQuery
    */
    public function embedProperty() {

        $this->addEmbed("Property");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [UserDefinedValues] resource.
    * @return  UnitResourceQuery
    */
    public function embedUserDefinedValues() {

        $this->addEmbed("UserDefinedValues");
        return $this;
    }
    
    
    
    /**
	 * Save a Unit model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\Unit|\RentManager\Models\Unit[] $model
     * @return  \RentManager\Models\Unit|\RentManager\Models\Unit[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Find one Unit from the Rent Manager API.
	 * @return  \RentManager\Models\Unit
	 */
    public function findOne() {
        return parent::findOne();
    }

    /**
     * Find a Unit collection from the Rent Manager API.
     * @return  \RentManager\Models\Unit[]
     */
    public function find() {
        return parent::find();
    }
}