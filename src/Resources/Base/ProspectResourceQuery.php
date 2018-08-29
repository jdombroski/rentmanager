<?php 

namespace RentManager\Resources\Base;
use RentManager\Resources\ProspectResourceQuery as ChildProspectResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager Prospect resource.
 */
class ProspectResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\Prospect";
    }

    /**
	 * Create a new instance of a Prospect resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildProspectResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [ProspectID] field.
	 * @return ChildProspectResourceQuery
	 */
	public function filterByProspectID($value, $operator = "=") {

        $this->addFilter("ProspectID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [ProspectDisplayID] field.
	 * @return ChildProspectResourceQuery
	 */
	public function filterByProspectDisplayID($value, $operator = "=") {

        $this->addFilter("ProspectDisplayID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [PropertyID] field.
	 * @return ChildProspectResourceQuery
	 */
	public function filterByPropertyID($value, $operator = "=") {

        $this->addFilter("PropertyID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Name] field.
	 * @return ChildProspectResourceQuery
	 */
	public function filterByName($value, $operator = "=") {

        $this->addFilter("Name", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [FirstName] field.
	 * @return ChildProspectResourceQuery
	 */
	public function filterByFirstName($value, $operator = "=") {

        $this->addFilter("FirstName", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [LastName] field.
	 * @return ChildProspectResourceQuery
	 */
	public function filterByLastName($value, $operator = "=") {

        $this->addFilter("LastName", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [MoveInDate] resource.
	 * @return ChildProspectResourceQuery
	 */
	public function embedMoveInDate() {

        $this->addEmbed("MoveInDate");
		return $this;
	}
            
    /**
	 * Embed the related [MoveOutDate] resource.
	 * @return ChildProspectResourceQuery
	 */
	public function embedMoveOutDate() {

        $this->addEmbed("MoveOutDate");
		return $this;
	}
            
    /**
	 * Embed the related [Property] resource.
	 * @return ChildProspectResourceQuery
	 */
	public function embedProperty() {

        $this->addEmbed("Property");
		return $this;
	}
            
    /**
	 * Embed the related [PrimaryContact] resource.
	 * @return ChildProspectResourceQuery
	 */
	public function embedPrimaryContact() {

        $this->addEmbed("PrimaryContact");
		return $this;
	}
            
    /**
	 * Embed the related [UserDefinedValues] resource.
	 * @return ChildProspectResourceQuery
	 */
	public function embedUserDefinedValues() {

        $this->addEmbed("UserDefinedValues");
		return $this;
	}
        

    /**
	 * Save a Prospect model or collection to the Rent Manager API.
	 * @param \RentManager\Models\Prospect|\RentManager\Models\Prospect[] $model
     * @return \RentManager\Models\Prospect|\RentManager\Models\Prospect[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a Prospect from the Rent Manager API.
	 * @return \RentManager\Models\Prospect
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a Prospect collection from the Rent Manager API.
     * @return \RentManager\Models\Prospect[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}