<?php

namespace EmploymentVerificationSimulationClientPhp\Client\Model;
use \EmploymentVerificationSimulationClientPhp\Client\ObjectSerializer;

class CatalogIndustry
{
    
    const GOVERNMENT = 'GOVERNMENT';
    const AGROPECUARY = 'AGROPECUARY';
    const WHOLESALE = 'WHOLESALE';
    const RETAIL = 'RETAIL';
    const CONSTRUCTION = 'CONSTRUCTION';
    const MEDIA = 'MEDIA';
    const MINERY = 'MINERY';
    const MANUFACTURING = 'MANUFACTURING';
    const ENERGY = 'ENERGY';
    const OTHER_NON_GOVERNMENTAL_SERVICES = 'OTHER NON GOVERNMENTAL SERVICES';
    const HOSPITALITY = 'HOSPITALITY';
    const RESTAURANTS = 'RESTAURANTS';
    const CULTURE__LEISURE = 'CULTURE & LEISURE';
    const HEALTH = 'HEALTH';
    const EDUCATION = 'EDUCATION';
    const FINANCIAL_SERVICES = 'FINANCIAL SERVICES';
    const REAL_ESTATE = 'REAL ESTATE';
    const PROFESSIONAL_SCIENTIFIC__TECHNICAL_SERVICES = 'PROFESSIONAL, SCIENTIFIC & TECHNICAL SERVICES';
    const CARGO = 'CARGO';
    const TRANSPORT = 'TRANSPORT';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::GOVERNMENT,
            self::AGROPECUARY,
            self::WHOLESALE,
            self::RETAIL,
            self::CONSTRUCTION,
            self::MEDIA,
            self::MINERY,
            self::MANUFACTURING,
            self::ENERGY,
            self::OTHER_NON_GOVERNMENTAL_SERVICES,
            self::HOSPITALITY,
            self::RESTAURANTS,
            self::CULTURE__LEISURE,
            self::HEALTH,
            self::EDUCATION,
            self::FINANCIAL_SERVICES,
            self::REAL_ESTATE,
            self::PROFESSIONAL_SCIENTIFIC__TECHNICAL_SERVICES,
            self::CARGO,
            self::TRANSPORT,
        ];
    }
}
