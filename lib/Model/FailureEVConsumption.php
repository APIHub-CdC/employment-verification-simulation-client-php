<?php

namespace EmploymentVerificationSimulationClientPhp\Client\Model;

use \ArrayAccess;
use \EmploymentVerificationSimulationClientPhp\Client\ObjectSerializer;

class FailureEVConsumption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'FailureEVConsumption';
    
    protected static $apihubTypes = [
        'request' => '\EmploymentVerificationSimulationClientPhp\Client\Model\EmploymentVerification',
        'errors' => '\EmploymentVerificationSimulationClientPhp\Client\Model\Error[]'
    ];
    
    protected static $apihubFormats = [
        'request' => null,
        'errors' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'request' => 'request',
        'errors' => 'errors'
    ];
    
    protected static $setters = [
        'request' => 'setRequest',
        'errors' => 'setErrors'
    ];
    
    protected static $getters = [
        'request' => 'getRequest',
        'errors' => 'getErrors'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getRequest()
    {
        return $this->container['request'];
    }
    
    public function setRequest($request)
    {
        $this->container['request'] = $request;
        return $this;
    }
    
    public function getErrors()
    {
        return $this->container['errors'];
    }
    
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
