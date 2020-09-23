<?php

namespace EmploymentVerificationSimulationClientPhp\Client\Model;
use \EmploymentVerificationSimulationClientPhp\Client\ObjectSerializer;

class AckEVRequest extends AckEmploymentVerification 
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'AckEVRequest';
    
    protected static $apihubTypes = [
        'employment_verification_request_id' => 'string',
        'subscription_id' => 'string',
        'inquiry_id' => 'string'
    ];
    
    protected static $apihubFormats = [
        'employment_verification_request_id' => 'uuid',
        'subscription_id' => 'uuid',
        'inquiry_id' => 'uuid'
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
        'employment_verification_request_id' => 'employmentVerificationRequestId',
        'subscription_id' => 'subscriptionId',
        'inquiry_id' => 'inquiryId'
    ];
    
    protected static $setters = [
        'employment_verification_request_id' => 'setEmploymentVerificationRequestId',
        'subscription_id' => 'setSubscriptionId',
        'inquiry_id' => 'setInquiryId'
    ];
    
    protected static $getters = [
        'employment_verification_request_id' => 'getEmploymentVerificationRequestId',
        'subscription_id' => 'getSubscriptionId',
        'inquiry_id' => 'getInquiryId'
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
        $this->container['employment_verification_request_id'] = isset($data['employment_verification_request_id']) ? $data['employment_verification_request_id'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['inquiry_id'] = isset($data['inquiry_id']) ? $data['inquiry_id'] : null;
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
    
    public function getEmploymentVerificationRequestId()
    {
        return $this->container['employment_verification_request_id'];
    }
    
    public function setEmploymentVerificationRequestId($employment_verification_request_id)
    {
        $this->container['employment_verification_request_id'] = $employment_verification_request_id;
        return $this;
    }
    
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }
    
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;
        return $this;
    }
    
    public function getInquiryId()
    {
        return $this->container['inquiry_id'];
    }
    
    public function setInquiryId($inquiry_id)
    {
        $this->container['inquiry_id'] = $inquiry_id;
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