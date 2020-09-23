<?php

namespace EmploymentVerificationSimulationClientPhp\Client\Model;

use \ArrayAccess;
use \EmploymentVerificationSimulationClientPhp\Client\ObjectSerializer;

class SuccessEVConsumption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'SuccessEVConsumption';
    
    protected static $apihubTypes = [
        'request' => '\EmploymentVerificationSimulationClientPhp\Client\Model\EmploymentVerification',
        'names' => 'string',
        'birthday' => '\DateTime',
        'work_status' => 'string',
        'valid_until' => '\DateTime',
        'industry' => '\EmploymentVerificationSimulationClientPhp\Client\Model\CatalogIndustry',
        'industry_risk_segment' => 'string',
        'nss_check' => 'bool'
    ];
    
    protected static $apihubFormats = [
        'request' => null,
        'names' => null,
        'birthday' => 'date',
        'work_status' => null,
        'valid_until' => 'date',
        'industry' => null,
        'industry_risk_segment' => null,
        'nss_check' => null
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
        'names' => 'names',
        'birthday' => 'birthday',
        'work_status' => 'workStatus',
        'valid_until' => 'validUntil',
        'industry' => 'industry',
        'industry_risk_segment' => 'industryRiskSegment',
        'nss_check' => 'nssCheck'
    ];
    
    protected static $setters = [
        'request' => 'setRequest',
        'names' => 'setNames',
        'birthday' => 'setBirthday',
        'work_status' => 'setWorkStatus',
        'valid_until' => 'setValidUntil',
        'industry' => 'setIndustry',
        'industry_risk_segment' => 'setIndustryRiskSegment',
        'nss_check' => 'setNssCheck'
    ];
    
    protected static $getters = [
        'request' => 'getRequest',
        'names' => 'getNames',
        'birthday' => 'getBirthday',
        'work_status' => 'getWorkStatus',
        'valid_until' => 'getValidUntil',
        'industry' => 'getIndustry',
        'industry_risk_segment' => 'getIndustryRiskSegment',
        'nss_check' => 'getNssCheck'
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
    const WORK_STATUS_W = 'W';
    const WORK_STATUS_NW = 'NW';
    const INDUSTRY_RISK_SEGMENT_H = 'H';
    const INDUSTRY_RISK_SEGMENT_M = 'M';
    const INDUSTRY_RISK_SEGMENT_L = 'L';
    
    
    
    public function getWorkStatusAllowableValues()
    {
        return [
            self::WORK_STATUS_W,
            self::WORK_STATUS_NW,
        ];
    }
    
    
    public function getIndustryRiskSegmentAllowableValues()
    {
        return [
            self::INDUSTRY_RISK_SEGMENT_H,
            self::INDUSTRY_RISK_SEGMENT_M,
            self::INDUSTRY_RISK_SEGMENT_L,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['work_status'] = isset($data['work_status']) ? $data['work_status'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['industry_risk_segment'] = isset($data['industry_risk_segment']) ? $data['industry_risk_segment'] : null;
        $this->container['nss_check'] = isset($data['nss_check']) ? $data['nss_check'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getWorkStatusAllowableValues();
        if (!is_null($this->container['work_status']) && !in_array($this->container['work_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'work_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        $allowedValues = $this->getIndustryRiskSegmentAllowableValues();
        if (!is_null($this->container['industry_risk_segment']) && !in_array($this->container['industry_risk_segment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'industry_risk_segment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
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
    
    public function getNames()
    {
        return $this->container['names'];
    }
    
    public function setNames($names)
    {
        $this->container['names'] = $names;
        return $this;
    }
    
    public function getBirthday()
    {
        return $this->container['birthday'];
    }
    
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;
        return $this;
    }
    
    public function getWorkStatus()
    {
        return $this->container['work_status'];
    }
    
    public function setWorkStatus($work_status)
    {
        $allowedValues = $this->getWorkStatusAllowableValues();
        if (!is_null($work_status) && !in_array($work_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'work_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['work_status'] = $work_status;
        return $this;
    }
    
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }
    
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;
        return $this;
    }
    
    public function getIndustry()
    {
        return $this->container['industry'];
    }
    
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;
        return $this;
    }
    
    public function getIndustryRiskSegment()
    {
        return $this->container['industry_risk_segment'];
    }
    
    public function setIndustryRiskSegment($industry_risk_segment)
    {
        $allowedValues = $this->getIndustryRiskSegmentAllowableValues();
        if (!is_null($industry_risk_segment) && !in_array($industry_risk_segment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'industry_risk_segment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['industry_risk_segment'] = $industry_risk_segment;
        return $this;
    }
    
    public function getNssCheck()
    {
        return $this->container['nss_check'];
    }
    
    public function setNssCheck($nss_check)
    {
        $this->container['nss_check'] = $nss_check;
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
