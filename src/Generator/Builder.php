<?php

namespace RentManager\Generator;

use Jenssegers\Blade\Blade;

class Builder
{
    private $xml;
    private $parser;
    private $blade;

    public function __construct(Parser $parser)
    {
        $this->xml = simplexml_load_file(__DIR__ . "/../../schema/rentmanager.xml");
        $this->setParser($parser);
        $this->setBlade(new Blade(__DIR__ . '/templates', __DIR__ . '/cache'));
    }

    public function build()
    {
        $resources = $this->parseXml();
        $this->generateFiles($resources);
    }

    private function parseXml()
    {
        $baseNamespace = $this->getParser()->getBaseNamespace() . (isset($this->xml->attributes()->namespace) ? "\\" . (string) $this->xml->attributes()->namespace : '');    //  Get the base namespace.
        $resources = [];
        foreach($this->xml->model as $modelXml) {

            $modelNamespace = "{$baseNamespace}\Models" . (isset($modelXml->attributes()->namespace)  ? "\\" . (string) $modelXml->attributes()->namespace : '');
            $resourceNamespace = "{$baseNamespace}\Resources" . (isset($modelXml->attributes()->namespace)  ? "\\" . (string) $modelXml->attributes()->namespace : '');

            $model = new Model(
                (string) $modelXml->attributes()->name,
                $modelNamespace
            );

            foreach($modelXml->property as $propertyXml) {
                $property = new Property(
                    (string) $propertyXml->attributes()->name,
                    (string) $propertyXml->attributes()->type,
                    isset($propertyXml->attributes()->key) ? true : false
                );
                $model->addProperty($property);
            }

            $resources[] = new Resource($model, $resourceNamespace);
        }

        return $resources;
    }

    /**
     * Generate the files.
     * @param \RentManager\Generator\Resource[] $resources
     */
    private function generateFiles($resources)
    {
        foreach($resources as $resource) {

            $modelPath          = $this->getParser()->getPhpDir() . "/Models/{$resource->getModel()->getName()}.php";
            $resourcePath       = $this->getParser()->getPhpDir() . "/Resources/{$resource->getModel()->getName()}ResourceQuery.php";

            if(!is_dir(dirname($modelPath))) {
                mkdir(dirname($modelPath), 0777, true);
            }

            if(!is_dir(dirname($resourcePath))) {
                mkdir(dirname($resourcePath), 0777, true);
            }

            $resourceContent = $this->getBlade()->make("resource", compact("resource"));
            $modelContent = $this->getBlade()->make("model", ['model' => $resource->getModel()]);


            file_put_contents($modelPath, $modelContent);
            file_put_contents($resourcePath, $resourceContent);
        }
    }

    /**
     * Get the value of parser
     * @return Parser
     */ 
    public function getParser()
    {
        return $this->parser;
    }

    /**
     * Set the value of parser
     *
     * @return  self
     */ 
    public function setParser($parser)
    {
        $this->parser = $parser;

        return $this;
    }

    /**
     * Get the value of blade
     */ 
    public function getBlade()
    {
        return $this->blade;
    }

    /**
     * Set the value of blade
     *
     * @return  self
     */ 
    public function setBlade($blade)
    {
        $this->blade = $blade;

        return $this;
    }

    private function normalizePath($path) 
    {
        $path = str_replace('\\\\', "\\", $path);
        $path = str_replace('/', "\\", $path);
        return $path;
    }
}