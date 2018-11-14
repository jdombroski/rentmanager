<?php

namespace RentManager\Generator;

use Symfony\Component\Yaml\Yaml;

class Parser 
{
    private $phpDir;
    private $baseNamespace;

    public function __construct()
    {
        $this->parse();
    }

    public function parse()
    {
        $file = getcwd() . "/rentmanager.yaml";
        
        $schema = Yaml::parseFile($file);

        $this->setPhpDir($schema["rentmanager"]["phpDir"]);
        $this->setBaseNamespace($schema["rentmanager"]["baseNamespace"]);
    }

    /**
     * Get the value of phpDir
     */ 
    public function getPhpDir()
    {
        return $this->phpDir;
    }

    /**
     * Set the value of phpDir
     *
     * @return  self
     */ 
    public function setPhpDir($phpDir)
    {
        $this->phpDir = $phpDir;

        return $this;
    }

    /**
     * Get the value of baseNamespace
     */ 
    public function getBaseNamespace()
    {
        return $this->baseNamespace;
    }

    /**
     * Set the value of baseNamespace
     *
     * @return  self
     */ 
    public function setBaseNamespace($baseNamespace)
    {
        $this->baseNamespace = $baseNamespace;

        return $this;
    }
}