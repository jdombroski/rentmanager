<?php

namespace RentManager\Resources;
use RentManager\RentManager;

/**
 * Action class for resource queries.
 *
 * @version 1.0
 * @author jdombroski
 */
class ActionResourceQuery extends BaseResourceQuery
{

    public static function deleteInstance() {

    }

    public static function deleteCollection() {

    }

    public function save($model) {

    }

    public function getModelClass() {
        return null;
    }

    /**
     * Retrieve a collection.
     * @return mixed[]
     */
    public function retrieveCollection() {

        $res = RentManager::getApiRequestor()->request("GET", $this->_resourceUrl, $this->getParameters());
        $data = json_decode($res->getBody(), true);

        return $data;
    }

    /**
     * Retreive an instance .
     * @return mixed
     */
    public function retrieveInstance() {
        $res = RentManager::getApiRequestor()->request("GET", $this->_resourceUrl, $this->getParameters());
        $data = json_decode($res->getBody(), true);
        return $data;
    }

}