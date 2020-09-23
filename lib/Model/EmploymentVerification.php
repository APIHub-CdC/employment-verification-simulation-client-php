<?php

namespace EmploymentVerificationSimulationClientPhp\Client\Model;
use \EmploymentVerificationSimulationClientPhp\Client\ObjectSerializer;

class EmploymentVerification extends EmploymentVerificationId 
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'EmploymentVerification';
    
    protected static $apihubTypes = [
        'curp' => 'string',
        'nss' => 'string',
        'email' => 'string',
        'inquiry_status' => 'string',
        'success_check' => 'bool'
    ];
    
    protected static $apihubFormats = [
        'curp' => null,
        'nss' => null,
        'email' => 'email',
        'inquiry_status' => null,
        'success_check' => null
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
        'curp' => 'curp',
        'nss' => 'nss',
        'email' => 'email',
        'inquiry_status' => 'inquiryStatus',
        'success_check' => 'successCheck'
    ];
    
    protected static $setters = [
        'curp' => 'setCurp',
        'nss' => 'setNss',
        'email' => 'setEmail',
        'inquiry_status' => 'setInquiryStatus',
        'success_check' => 'setSuccessCheck'
    ];
    
    protected static $getters = [
        'curp' => 'getCurp',
        'nss' => 'getNss',
        'email' => 'getEmail',
        'inquiry_status' => 'getInquiryStatus',
        'success_check' => 'getSuccessCheck'
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
    const INQUIRY_STATUS_RI = 'RI';
    const INQUIRY_STATUS_SN = 'SN';
    const INQUIRY_STATUS_DN = 'DN';
    const INQUIRY_STATUS_DND = 'DND';
    const INQUIRY_STATUS_CI = 'CI';
    
    
    
    public function getInquiryStatusAllowableValues()
    {
        return [
            self::INQUIRY_STATUS_RI,
            self::INQUIRY_STATUS_SN,
            self::INQUIRY_STATUS_DN,
            self::INQUIRY_STATUS_DND,
            self::INQUIRY_STATUS_CI,
        ];
    }
    
    
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['nss'] = isset($data['nss']) ? $data['nss'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['inquiry_status'] = isset($data['inquiry_status']) ? $data['inquiry_status'] : null;
        $this->container['success_check'] = isset($data['success_check']) ? $data['success_check'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();
        if (!is_null($this->container['curp']) && (mb_strlen($this->container['curp']) > 18)) {
            $invalidProperties[] = "invalid value for 'curp', the character length must be smaller than or equal to 18.";
        }
        if (!is_null($this->container['curp']) && (mb_strlen($this->container['curp']) < 18)) {
            $invalidProperties[] = "invalid value for 'curp', the character length must be bigger than or equal to 18.";
        }
        if (!is_null($this->container['nss']) && (mb_strlen($this->container['nss']) > 11)) {
            $invalidProperties[] = "invalid value for 'nss', the character length must be smaller than or equal to 11.";
        }
        if (!is_null($this->container['nss']) && (mb_strlen($this->container['nss']) < 11)) {
            $invalidProperties[] = "invalid value for 'nss', the character length must be bigger than or equal to 11.";
        }
        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 80)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 80.";
        }
        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 3)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 3.";
        }
        $allowedValues = $this->getInquiryStatusAllowableValues();
        if (!is_null($this->container['inquiry_status']) && !in_array($this->container['inquiry_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'inquiry_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        if (!is_null($curp) && (mb_strlen($curp) > 18)) {
            throw new \InvalidArgumentException('invalid length for $curp when calling EmploymentVerification., must be smaller than or equal to 18.');
        }
        if (!is_null($curp) && (mb_strlen($curp) < 18)) {
            throw new \InvalidArgumentException('invalid length for $curp when calling EmploymentVerification., must be bigger than or equal to 18.');
        }
        $this->container['curp'] = $curp;
        return $this;
    }
    
    public function getNss()
    {
        return $this->container['nss'];
    }
    
    public function setNss($nss)
    {
        if (!is_null($nss) && (mb_strlen($nss) > 11)) {
            throw new \InvalidArgumentException('invalid length for $nss when calling EmploymentVerification., must be smaller than or equal to 11.');
        }
        if (!is_null($nss) && (mb_strlen($nss) < 11)) {
            throw new \InvalidArgumentException('invalid length for $nss when calling EmploymentVerification., must be bigger than or equal to 11.');
        }
        $this->container['nss'] = $nss;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->container['email'];
    }
    
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $email when calling EmploymentVerification., must be smaller than or equal to 80.');
        }
        if (!is_null($email) && (mb_strlen($email) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email when calling EmploymentVerification., must be bigger than or equal to 3.');
        }
        $this->container['email'] = $email;
        return $this;
    }
    
    public function getInquiryStatus()
    {
        return $this->container['inquiry_status'];
    }
    
    public function setInquiryStatus($inquiry_status)
    {
        $allowedValues = $this->getInquiryStatusAllowableValues();
        if (!is_null($inquiry_status) && !in_array($inquiry_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'inquiry_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inquiry_status'] = $inquiry_status;
        return $this;
    }
    
    public function getSuccessCheck()
    {
        return $this->container['success_check'];
    }
    
    public function setSuccessCheck($success_check)
    {
        $this->container['success_check'] = $success_check;
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
