<?php

namespace RentManager\Runtime;

use RentManager\Runtime\Client;

/**
 * Base class for resource queries.
 *
 * @version 1.0
 * @author jdombroski
 */
abstract class BaseResourceQuery implements Resource
{
    protected $embeds = [];
    protected $filters = [];
    protected $fields = [];
    protected $pageNumber = null;
    protected $pageSize = null;
    protected $resourceUrl = null;

    /**
     * Create a new instance of the resource query.
     * @param string $resourceUrl The resource url to query.
     * @return $this|static
     */
    public static function create($resourceUrl) 
    {
        $query = new static;
        $query->resourceUrl = "/{$resourceUrl}";

        return $query;
    }

    /**
     * Add pagination to the resource query.
     * @param mixed $pageNumber
     * @param mixed $pageSize
     * @return $this
     */
    public function paginate($pageNumber, $pageSize = 1000) 
    {
        $this->pageNumber = $pageNumber;
        $this->pageSize = $pageSize;
        return $this;
    }


    /**
     * Add an embedded model to the resource query.
     * @param mixed $name
     */
    public function addEmbed($name) 
    {
        $this->embeds[] = $name;
    }

    /**
     * Add specfic fields to a resource query.
     * @param mixed $fields
     */
    protected function addFields($fields = []) 
    {
        $this->fields = $fields;
    }

    /**
     * Add a filter to the resource query.
     * @param mixed $property
     * @param mixed $value
     * @param mixed $operation
     * @return static
     */
    public function addFilter($property, $value, $operation) 
    {
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

        $this->filters[] = "{$property},{$operationString},{$value}";
        return $this;
    }

    /**
     * Add a filter to the resource query.
     * @param string $field
     * @param string $value
     * @param string $operator
     */
    public function filterBy($field, $value, $operator = "=")
    {
        $this->addFilter($field, $value, $operator);
        return $this;
    }

    /**
     * Get parameters for resource query.
     * @return string[]
     */
    protected function getParameters() {
        $params = [];

        if(!empty($this->embeds))
            $params["embeds"] = implode(",", $this->embeds);
        if(!empty($this->filters))
            $params["filters"] = implode(";", $this->filters);
        if(!empty($this->fields))
            $params["fields"] = implode(",", $this->fields);
        if($this->pageNumber)
            $params["pageNumber"] = $this->pageNumber;
        if($this->pageSize)
            $params["pageSize"] = $this->pageSize;

        return $params;
    }
    
    /**
     * Save a model instance to Rent Manager.
     * @param \RentManager\Runtime\BaseModel|\RentManager\Runtime\BaseModel[] $model
     * @param int $id The id of model if updating instead of creating.
     * @return mixed
     */
    public function save($model) {
        $res = Client::instance()->request("POST", $this->resourceUrl, $this->getParameters(), is_array($model) ? $model : [$model]);
        $data = json_decode($res->getBody(), true);
        $objs = [];

        //  Hydrate object models.
        if(is_array($data)) {
            foreach($data as $objdata) {
                $objs[] = call_user_func(static::getModelClass() . "::create", $objdata);
            }
        }

        //  Return array
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
     * Find models matching the filters.
     * @param mixed $filters
     * @return mixed[]
     */
    public function find() {

        $res = Client::instance()->request("GET", $this->resourceUrl, $this->getParameters());
        $data = json_decode($res->getBody(), true);

        $objs = [];

        if(is_array($data)) {
            foreach($data as $objdata) {
                $objs[] = call_user_func(static::getModelClass() . "::create", $objdata);
            }
        }

        return $objs;
    }

    /**
     * Find the first instance of a model.
     * @return mixed
     */
    public function findOne() {
        $res = Client::instance()->request("GET", $this->resourceUrl, $this->getParameters());
        $data = json_decode($res->getBody(), true);

        //  Handle array of 1 response.
        if(isset($data[0])) {
            $data = $data[0];
        }

        $obj = call_user_func(static::getModelClass() . "::create", $data);
        return $obj;
    }

}