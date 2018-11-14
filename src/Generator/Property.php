<?php

namespace RentManager\Generator;

class Property
{
    protected $name;
    protected $type;
    protected $isKey = false;

    public function __construct($name, $type, $isKey = false) 
    {
        $this->setName($name);
        $this->setType($type);
        $this->setIsKey($isKey);
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
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of isKey
     */ 
    public function getIsKey()
    {
        return $this->isKey;
    }

    /**
     * Set the value of isKey
     *
     * @return  self
     */ 
    public function setIsKey($isKey)
    {
        $this->isKey = $isKey;

        return $this;
    }

    /**
     * Check if the property is the key.
     */
    public function isKey()
    {
        return $this->getIsKey();
    }
}