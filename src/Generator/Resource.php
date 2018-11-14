<?php

namespace RentManager\Generator;

class Resource
{
    protected $model;
    protected $namespace;

    public function __construct($model, $namespace) 
    {
        $this->setModel($model);
        $this->setNamespace($namespace);
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of namespace
     */ 
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Set the value of namespace
     *
     * @return  self
     */ 
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }
}