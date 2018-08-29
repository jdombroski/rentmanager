<?php

namespace RentManager\Resources;
use RentManager\ApiRequestor;
use RentManager\RentManager;

/**
 * Base class for resource queries.
 *
 * @version 1.0
 * @author jdombroski
 */
abstract class BaseResourceQuery implements Resource
{
    protected static $_apiRequestor = null;

    protected $_embeds = [];
    protected $_filters = [];
    protected $_fields = [];
    protected $_pageNumber = null;
    protected $_pageSize = null;
    protected $_resourceUrl = null;

    public static function create($resourceUrl) {
        $query = new static;
        $query->_resourceUrl = "/{$resourceUrl}";

        return $query;
    }

    /**
     * Add pagination to the resource query.
     * @param mixed $pageNumber
     * @param mixed $pageSize
     * @return BaseResourceQuery
     */
    public function paginate($pageNumber, $pageSize = 1000) {
        $this->_pageNumber = $pageNumber;
        $this->_pageSize = $pageSize;
        return $this;
    }


    /**
     * Add an embedded model to the resource query.
     * @param mixed $name
     */
    public function addEmbed($name) {
        $this->_embeds[] = $name;
    }

    /**
     * Add specfic fields to a resource query.
     * @param mixed $fields
     */
    protected function addFields($fields = []) {
        $this->_fields = $fields;
    }

    /**
     * Add a filter to the resource query.
     * @param mixed $property
     * @param mixed $value
     * @param mixed $operation
     * @return static
     */
    public function addFilter($property, $value, $operation) {

        $operationString = "";
        switch($operation) {
            case "<":
                $operationString = "lt";
                break;
            case "<=":
                $operationString = "le";
                break;
            case ">":
                $operationString = "gt";
                break;
            case ">=":
                $operationString = "ge";
                break;
            case "In":
                $operationString = "in";
                break;
            case "<>":
                $operationString = "ne";
                break;
            case "!=":
                $operationString = "ne";
                break;
            case "=":
                $operationString = "eq";
                break;
        }

        //  Convert array to list
        if(is_array($value)) {
            $value = "(" . implode(",", $value) . ")";
        }

        $this->_filters[] = "{$property},{$operationString},{$value}";
        return $this;
    }

    /**
     * Get parameters for resource query.
     * @return string[]
     */
    protected function getParameters() {
        $params = [];

        if(!empty($this->_embeds))
            $params["embeds"] = implode(",", $this->_embeds);
        if(!empty($this->_filters))
            $params["filters"] = implode(";", $this->_filters);
        if(!empty($this->_fields))
            $params["fields"] = implode(",", $this->_fields);
        if($this->_pageNumber)
            $params["pageNumber"] = $this->_pageNumber;
        if($this->_pageSize)
            $params["pageSize"] = $this->_pageSize;

        return $params;
    }

    public static function deleteInstance() {

    }

    public static function deleteCollection() {

    }

    /**
     * Save a model instance to Rent Manager.
     * @param \RentManager\Models\BaseModel|\RentManager\Models\BaseModel[] $model
     * @param int $id Id of model if updating instead of creating.
     * @return mixed
     */
    public function save($model) {
        $res = RentManager::getApiRequestor()->request("POST", $this->_resourceUrl, $this->getParameters(), is_array($model) ? $model : [$model]);
        $data = json_decode($res->getBody(), true);
        $objs = [];

        if(is_array($data)) {
            foreach($data as $obj_data) {
                $objs[] = call_user_func(static::getModelClass() . "::create", $obj_data);
            }
        }

        switch(count($objs)) {
            case 0:
                return null;
            case 1:
                return $objs[0];
            default:
                return $objs;
        }
    }

    /**
     * Retrieve a collection of models.
     * @param mixed $filters
     * @return mixed[]
     */
    public function retrieveCollection() {

        $res = RentManager::getApiRequestor()->request("GET", $this->_resourceUrl, $this->getParameters());
        $data = json_decode($res->getBody(), true);

        $objs = [];

        if(is_array($data)) {
            foreach($data as $obj_data) {
                $objs[] = call_user_func(static::getModelClass() . "::create", $obj_data);
            }
        }

        return $objs;
    }

    /**
     * Retreive an instance of the model.
     * @return mixed
     */
    public function retrieveInstance() {
        $res = RentManager::getApiRequestor()->request("GET", $this->_resourceUrl, $this->getParameters());
        $data = json_decode($res->getBody(), true);
        $obj = call_user_func(static::getModelClass() . "::create", $data);
        return $obj;
    }

}