<?php

namespace RentManager\Generator;

class Model
{
    protected $name;
    protected $namespace;
    
    /** @var Property[] */
    protected $properties = [];

    public function __construct($name, $namespace)
    {
        $this->setName($name);
        $this->setNamespace($namespace);
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

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

    /**
     * Get the value of properties
     */ 
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Add a property.
     * @param Property $property.
     */
    public function addProperty(Property $property) {
        $this->properties[] = $property;
        return $this;
    }
}