<?php


namespace RentManager\Resources\Authentication;
use RentManager\Resources\Authentication\Base\UserAuthorizationResourceQuery as BaseUserAuthorizationResourceQuery;
use RentManager\Models\Authentication\UserAuthorization;
use RentManager\RentManager;


/**
 * Rent Manager UserAuthorization resource.
 */
class UserAuthorizationResourceQuery extends BaseUserAuthorizationResourceQuery
{
    /**
     * Login and set the token header for future requests.
     * Returns the api token to use in the header of future requests.
     * @param UserAuthorization $userAuthentication
     * @return string
     */
    public function login(UserAuthorization $userAuthentication) {
        $response = RentManager::getApiRequestor()->request(
            "POST",
            $this->_resourceUrl,
            null,
            $userAuthentication
        );

        return trim($response->getBody(), '"');
    }
}