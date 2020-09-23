<?php

namespace EmploymentVerificationSimulationClientPhp\Client\Model;
use \EmploymentVerificationSimulationClientPhp\Client\ObjectSerializer;

class AckFailureEVConsumption extends AckEmploymentVerification 
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'AckFailureEVConsumption';
    
    protected static $apihubTypes = [
        'employment_verification' => '\EmploymentVerificationSimulationClientPhp\Client\Model\FailureEVConsumption'
    ];
    
    protected static $apihubFormats = [
        'employment_verification' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes + parent::apihubTypes();
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats + parent::apihubFormats();
    }
    
    protected static $attributeMap = [
        'employment_verification' => 'employmentVerification'
    ];
    
    protected static $setters = [
        'employment_verification' => 'setEmploymentVerification'
    ];
    
    protected static $getters = [
        'employment_verification' => 'getEmploymentVerification'
    ];
    
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }
    
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }
    
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        $this->container['employment_verification'] = isset($data['employment_verification']) ? $data['employment_verification'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getEmploymentVerification()
    {
        return $this->container['employment_verification'];
    }
    
    public function setEmploymentVerification($employment_verification)
    {
        $this->container['employment_verification'] = $employment_verification;
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
