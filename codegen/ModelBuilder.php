<?php

namespace ModelBuilder;

/**
 * ModelBuilder short summary.
 *
 * ModelBuilder description.
 *
 * @version 1.0
 * @author Jeff
 */
class ModelBuilder
{
    private static $_basePath = "";
    private static $_baseModelNamespace = null;
    private static $_baseResourceNamespace = null;

    public static function build($xmlPath) {

        self::$_basePath = __DIR__ . "/../src";

        $xml = simplexml_load_file($xmlPath);


        $GLOBALS["baseClass"] = (string) $xml->attributes()->baseClass;
        $GLOBALS["defaultNamespace"] = (string) $xml->attributes()->namespace;

        foreach($xml->model as $model) {
            $GLOBALS["modelName"] = (string) $model->attributes()->name;
            $GLOBALS["properties"] = $model->property;
            $GLOBALS["resourceUrl"] = (string) $model->attributes()->resourceUrl;

            $GLOBALS["namespace"] = isset($model->attributes()->namespace) ?  $GLOBALS["defaultNamespace"] . "\\" . (string) $model->attributes()->namespace : $GLOBALS["defaultNamespace"];

            echo "NAMESPACE: ". $GLOBALS["namespace"] . "\n";

            ob_start();
            include __DIR__ . "/BaseTemplate.php";
            $baseClassCode = ob_get_contents();
            ob_end_clean();

            ob_start();
            include __DIR__ . "/Template.php";
            $classCode = ob_get_contents();
            ob_end_clean();

            $baseFileDirectory = static::$_basePath . str_replace("\\", "/", $namespace) . "/Base/";
            $fileDirectory = static::$_basePath . "{$namespace}/";

            if(!file_exists($baseFileDirectory))
                mkdir($baseFileDirectory, 0777, true);

            file_put_contents($baseFileDirectory . "{$modelName}.php", $baseClassCode);

            if(!file_exists($fileDirectory . "{$modelName}.php")) {
                file_put_contents($fileDirectory . "{$modelName}.php", $classCode);
            }
            static::buildResource((string) $model->attributes()->name, (string) $model->attributes()->resourceUrl, $GLOBALS["namespace"]);
        }

    }


    public static function buildAll($xmlPath) {
        $schema = json_decode(json_encode(simplexml_load_file($xmlPath)), true);

        $baseClass = $schema["@attributes"]["base"];
        $baseNamespace = $schema["@attributes"]["namespace"];
        self::$_baseModelNamespace = "{$baseNamespace}\Models";
        self::$_baseResourceNamespace = "{$baseNamespace}\Resources";

        foreach($schema["model"] as $modelSchema) {
            ModelBuilder::buildModel($modelSchema, $baseClass);
            ModelBuilder::buildResource($modelSchema);
        }

        //print_r($schema);
    }

    private static function buildModel($model, $baseClass) {

        $name = $model["@attributes"]["name"];
        $namespace = isset($model["@attributes"]["namespace"]) ? self::$_baseModelNamespace . "\\{$model["@attributes"]["namespace"]}" : self::$_baseModelNamespace ;

        ob_start();
        include __DIR__ . "/BaseModelTemplate.php";
        $baseClassCode = ob_get_contents();
        ob_end_clean();

        ob_start();
        include __DIR__ . "/ModelTemplate.php";
        $classCode = ob_get_contents();
        ob_end_clean();

        $baseFileDirectory = static::$_basePath . str_replace("\\", "/", $namespace) . "/Base/";
        $baseFilePath = static::$_basePath . str_replace("\\", "/", $namespace) . "/Base/{$name}.php";
        $filePath = static::$_basePath . str_replace("\\", "/", $namespace) . "/{$name}.php";

        if(!file_exists($baseFileDirectory))
            mkdir($baseFileDirectory, 0777, true);

        file_put_contents($baseFilePath, $baseClassCode);


        if(!file_exists($filePath)) {
            file_put_contents($filePath, $classCode);
        }

    }

    private static function buildResource($model) {

        $name = $model["@attributes"]["name"];
        $namespace = isset($model["@attributes"]["namespace"]) ? self::$_baseResourceNamespace . "\\{$model["@attributes"]["namespace"]}" : self::$_baseResourceNamespace;

        ob_start();
        include __DIR__ . "/BaseResourceTemplate.php";
        $baseClassCode = ob_get_contents();
        ob_end_clean();

        ob_start();
        include __DIR__ . "/ResourceTemplate.php";
        $classCode = ob_get_contents();
        ob_end_clean();

        $baseFileDirectory = static::$_basePath . str_replace("\\", "/", $namespace) . "/Base/";
        $baseFilePath = static::$_basePath . str_replace("\\", "/", $namespace) . "/Base/{$name}ResourceQuery.php";
        $filePath = static::$_basePath . str_replace("\\", "/", $namespace) . "/{$name}ResourceQuery.php";

        if(!file_exists($baseFileDirectory))
            mkdir($baseFileDirectory, 0777, true);

        file_put_contents($baseFilePath, $baseClassCode);


        if(!file_exists($filePath)) {
            file_put_contents($filePath, $classCode);
        }

    }

    public static function getModelNamespace($modelSchema) {
        return isset($modelSchema["@attributes"]["namespace"]) ? self::$_baseModelNamespace . "\\{$modelSchema["@attributes"]["namespace"]}" : self::$_baseModelNamespace;
    }

    public static function getResourceNamespace($modelSchema) {
        return isset($modelSchema["@attributes"]["namespace"]) ? self::$_baseResourceNamespace . "\\{$modelSchema["@attributes"]["namespace"]}" : self::$_baseResourceNamespace;
    }

    public static function isComplexType($type) {
        return !in_array($type, ["string", "integer", "double", "bool", "char"]);
    }

}