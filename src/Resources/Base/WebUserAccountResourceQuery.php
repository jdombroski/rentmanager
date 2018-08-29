<?php 

namespace RentManager\Resources\Base;
use RentManager\Resources\WebUserAccountResourceQuery as ChildWebUserAccountResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager WebUserAccount resource.
 */
class WebUserAccountResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\WebUserAccount";
    }

    /**
	 * Create a new instance of a WebUserAccount resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildWebUserAccountResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [WebUserAccountID] field.
	 * @return ChildWebUserAccountResourceQuery
	 */
	public function filterByWebUserAccountID($value, $operator = "=") {

        $this->addFilter("WebUserAccountID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [WebUserID] field.
	 * @return ChildWebUserAccountResourceQuery
	 */
	public function filterByWebUserID($value, $operator = "=") {

        $this->addFilter("WebUserID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [AccountID] field.
	 * @return ChildWebUserAccountResourceQuery
	 */
	public function filterByAccountID($value, $operator = "=") {

        $this->addFilter("AccountID", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Nickname] field.
	 * @return ChildWebUserAccountResourceQuery
	 */
	public function filterByNickname($value, $operator = "=") {

        $this->addFilter("Nickname", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [IsDefault] field.
	 * @return ChildWebUserAccountResourceQuery
	 */
	public function filterByIsDefault($value, $operator = "=") {

        $this->addFilter("IsDefault", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [IsEnabled] field.
	 * @return ChildWebUserAccountResourceQuery
	 */
	public function filterByIsEnabled($value, $operator = "=") {

        $this->addFilter("IsEnabled", $value, $operator);

		return $this;
	}
            
    /**
	 * Embed the related [Property] resource.
	 * @return ChildWebUserAccountResourceQuery
	 */
	public function embedProperty() {

        $this->addEmbed("Property");
		return $this;
	}
            
    /**
	 * Embed the related [Unit] resource.
	 * @return ChildWebUserAccountResourceQuery
	 */
	public function embedUnit() {

        $this->addEmbed("Unit");
		return $this;
	}
            
    /**
	 * Embed the related [Tenant] resource.
	 * @return ChildWebUserAccountResourceQuery
	 */
	public function embedTenant() {

        $this->addEmbed("Tenant");
		return $this;
	}
        

    /**
	 * Save a WebUserAccount model or collection to the Rent Manager API.
	 * @param \RentManager\Models\WebUserAccount|\RentManager\Models\WebUserAccount[] $model
     * @return \RentManager\Models\WebUserAccount|\RentManager\Models\WebUserAccount[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a WebUserAccount from the Rent Manager API.
	 * @return \RentManager\Models\WebUserAccount
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a WebUserAccount collection from the Rent Manager API.
     * @return \RentManager\Models\WebUserAccount[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}