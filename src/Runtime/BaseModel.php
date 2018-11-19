<?php

namespace RentManager\Runtime;

use JsonSerializable;
use DateTime;

/**
 * Base model for Rent Manager models.
 *
 * @version 1.0
 * @author jdombroski
 */
abstract class BaseModel
{
    /**
     * Associative array for storing property values.
     * @var array
     */
    protected $container = [];

    abstract public function getInstanceId();


    /**
     * Get the property => types for the model.
     * @return mixed
     */
    public static function getTypes() {
        return static::$types;
    }

    /**
     * Create a new model.
     * @param mixed $data
     * @return mixed
     */
    public static function create($data = []) {
        $obj = new static;

        foreach($data as $prop => $val) {
            $setter = "set{$prop}";
            if(method_exists($obj, $setter)) {

                //  Final value to use with setter.
                $finalVal = null;

                if(in_array(static::getTypes()[$prop], ["string", "integer", "bool", "double", "decimal"])) {

                    settype($val, static::getTypes()[$prop]);

                    //  Property is a primitive data type.
                    $finalVal = $val;

                } else if(static::getTypes()[$prop] == "DateTime") {

                    //  Property is a datetime object.
                    $finalVal = new \DateTime($val);

                } else {

                    //  If not a primitive or datetime, property must be a model.

                    $type = str_replace("[]", "", static::getTypes()[$prop]);     //  Get property object type.
                    $propertyIsArray = strpos(static::getTypes()[$prop], "[]") !== false; //  Test if property is an array.
                    $class = "RentManager\\Models\\{$type}";

                    if($propertyIsArray) {
                        $finalVal = [];
                        foreach($val as $sub_data) {
                            $finalVal[] = call_user_func("{$class}::create", $sub_data);
                        }
                    } else {
                        $finalVal = call_user_func("{$class}::create", $val);
                    }

                }
                $obj->$setter($finalVal);   //  Set the final value.
            } else {
                //throw new ErrorException("Setting does not exist for " . get_class($obj) . ": {$setter}");
            }
        }

        return $obj;
    }

    public function jsonSerialize()
    {
        return $this->serialize($this->container);
    }

    /**
     * Serialize the object for making an api request.
     * @param mixed $array
     * @return array
     */
    private function serialize($array) {
        $serialized = [];

        foreach($array as $var => $val) {

            if(is_array($val)) {

                //  If value is itself an array, we must serialize it.
                $serialized[$var] = $this->serialize($val);

            }  else if($val instanceof BaseModel) {

                //  If value is a model, we must call it's own serialization.
                $serialized[$var] = $val->jsonSerialize();

            } else if($val instanceof DateTime) {

                //  If value is a DateTime, format.
                $serialized[$var] = $val->format("c");

            } else if(in_array(static::getTypes()[$var], ["string", "integer", "bool", "double", "decimal"])) {

                //  If value is a primitive then we are done.
                $serialized[$var] = $val;

            }

        }

        return $serialized;
    }
}