<?php

namespace RentManager;
use RentManager\Models\Authentication\UserAuthorization;
use RentManager\Resources\Authentication\UserAuthorizationResourceQuery;

/**
 * Rent Manager
 *
 * @version 1.0
 * @author jdombroski
 */
abstract class RentManager
{
    private static $_corpId = null;
    private static $_apiRequestor = null;

    public static function init($corpId, $username, $password) {

        $requestor = new ApiRequestor($corpId);
        RentManager::setApiRequestor($requestor);

        //  Login to the API.
        $userAuth =  UserAuthorization::create(["Username" => $username, "Password" => $password]);
        $apiToken = UserAuthorizationResourceQuery::create("Authentication/AuthorizeUser")->login($userAuth);
        RentManager::getApiRequestor()->setHeader("X-RM12Api-ApiToken", $apiToken);

    }

    /**
     * Set the api requestor.
     * @param ApiRequestor $apiRequestor
     */
    public static function setApiRequestor(ApiRequestor &$apiRequestor) {
        RentManager::$_apiRequestor = $apiRequestor;
    }

    /**
     * Get the api requestor.
     * @return ApiRequestor
     */
    public static function getApiRequestor() {
        return RentManager::$_apiRequestor;
    }
}