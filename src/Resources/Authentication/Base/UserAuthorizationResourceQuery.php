<?php 

namespace RentManager\Resources\Authentication\Base;
use RentManager\Resources\Authentication\UserAuthorizationResourceQuery as ChildUserAuthorizationResourceQuery;
use RentManager\Resources\BaseResourceQuery;


/**
 * Rent Manager UserAuthorization resource.
 */
class UserAuthorizationResourceQuery extends BaseResourceQuery
{
    public function getModelClass() {
        return "\RentManager\Models\Authentication\UserAuthorization";
    }

    /**
	 * Create a new instance of a UserAuthorization resource query.
     * @param string $resourceUrl The url of the resource query.
	 * @return ChildUserAuthorizationResourceQuery
	 */
    public static function create($resourceUrl) {
        return parent::create($resourceUrl);
    }
        
    /**
	 * Filter resource by the [Username] field.
	 * @return ChildUserAuthorizationResourceQuery
	 */
	public function filterByUsername($value, $operator = "=") {

        $this->addFilter("Username", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [Password] field.
	 * @return ChildUserAuthorizationResourceQuery
	 */
	public function filterByPassword($value, $operator = "=") {

        $this->addFilter("Password", $value, $operator);

		return $this;
	}
            
    /**
	 * Filter resource by the [LocationID] field.
	 * @return ChildUserAuthorizationResourceQuery
	 */
	public function filterByLocationID($value, $operator = "=") {

        $this->addFilter("LocationID", $value, $operator);

		return $this;
	}
        

    /**
	 * Save a UserAuthorization model or collection to the Rent Manager API.
	 * @param \RentManager\Models\Authentication\UserAuthorization|\RentManager\Models\Authentication\UserAuthorization[] $model
     * @return \RentManager\Models\Authentication\UserAuthorization|\RentManager\Models\Authentication\UserAuthorization[]
	 */
    public function save($model) {
        return parent::save($model);
    }

    /**
	 * Retrieve an instance of a UserAuthorization from the Rent Manager API.
	 * @return \RentManager\Models\Authentication\UserAuthorization
	 */
    public function retrieveInstance() {
        return parent::retrieveInstance();
    }

    /**
     * Retrieve a UserAuthorization collection from the Rent Manager API.
     * @return \RentManager\Models\Authentication\UserAuthorization[]
     */
    public function retrieveCollection() {
        return parent::retrieveCollection();
    }
}