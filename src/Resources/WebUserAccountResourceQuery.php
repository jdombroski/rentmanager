<?php 

namespace RentManager\Resources;

use RentManager\Runtime\BaseResourceQuery;

/**
 * Rent Manager WebUserAccount resource.
 */
class WebUserAccountResourceQuery extends BaseResourceQuery
{
    public function getModelClass() 
    {
        return "\RentManager\Models\WebUserAccount";
    }

    /**
	 * Create a new instance of a WebUserAccount resource query.
     * @param  string $resourceUrl The url of the resource query.
	 * @return  WebUserAccountResourceQuery
	 */
    public static function create($resourceUrl) 
    {
        return parent::create($resourceUrl);
    }
    
    
    
    /**
    * Filter resource by the [WebUserAccountID] field.
    * @return  WebUserAccountResourceQuery
    */
    public function filterByWebUserAccountID($value, $operator = "=") 
    {
        $this->addFilter("WebUserAccountID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [WebUserID] field.
    * @return  WebUserAccountResourceQuery
    */
    public function filterByWebUserID($value, $operator = "=") 
    {
        $this->addFilter("WebUserID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [AccountID] field.
    * @return  WebUserAccountResourceQuery
    */
    public function filterByAccountID($value, $operator = "=") 
    {
        $this->addFilter("AccountID", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [Nickname] field.
    * @return  WebUserAccountResourceQuery
    */
    public function filterByNickname($value, $operator = "=") 
    {
        $this->addFilter("Nickname", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsDefault] field.
    * @return  WebUserAccountResourceQuery
    */
    public function filterByIsDefault($value, $operator = "=") 
    {
        $this->addFilter("IsDefault", $value, $operator);
        return $this;
    }

    
    
    
    /**
    * Filter resource by the [IsEnabled] field.
    * @return  WebUserAccountResourceQuery
    */
    public function filterByIsEnabled($value, $operator = "=") 
    {
        $this->addFilter("IsEnabled", $value, $operator);
        return $this;
    }

    
    
            
    /**
    * Embed the related [Property] resource.
    * @return  WebUserAccountResourceQuery
    */
    public function embedProperty() {

        $this->addEmbed("Property");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Unit] resource.
    * @return  WebUserAccountResourceQuery
    */
    public function embedUnit() {

        $this->addEmbed("Unit");
        return $this;
    }
    
    
    
            
    /**
    * Embed the related [Tenant] resource.
    * @return  WebUserAccountResourceQuery
    */
    public function embedTenant() {

        $this->addEmbed("Tenant");
        return $this;
    }
    
    
    
    /**
	 * Save a WebUserAccount model or collection to the Rent Manager API.
	 * @param  \RentManager\Models\WebUserAccount|\RentManager\Models\WebUserAccount[] $model
     * @return  \RentManager\Models\WebUserAccount|\RentManager\Models\WebUserAccount[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a WebUserAccount from the Rent Manager API.
	 * @return  \RentManager\Models\WebUserAccount
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a WebUserAccount collection from the Rent Manager API.
     * @return  \RentManager\Models\WebUserAccount[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}