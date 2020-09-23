<?php

namespace EmploymentVerificationSimulationClientPhp\Client;

use \EmploymentVerificationSimulationClientPhp\Client\Configuration;
use \EmploymentVerificationSimulationClientPhp\Client\ApiException;
use \EmploymentVerificationSimulationClientPhp\Client\ObjectSerializer;

use \EmploymentVerificationSimulationClientPhp\Client\Model\EmploymentVerification;
use \EmploymentVerificationSimulationClientPhp\Client\Api\EmploymentVerificationApi;

class EmploymentVerificationApiTest extends \PHPUnit_Framework_TestCase
{
    
  
    
    public function setUp()
    {
        $config = new Configuration();
        $config->setHost('https://circulodecredito-dev.apigee.net/sandbox');
        $this->x_api_key = "GKD25Kfmc6VeoxGLAGtlrbYgZobDdB7S";
        $client = new \GuzzleHttp\Client();
        $this->apiInstance = new EmploymentVerificationApi($client,$config);
    }
    
      
    public function testPostEmploymentVerification()
    {
        try {
            $request = new EmploymentVerification();

            $request->setEmploymentVerificationRequestId($this->gen_uuid());
            $request->setSubscriptionId("d002402e-f9e4-4f3d-8390-6558bf89c103");
            $request->setCurp("PUPJ970229HDFZZG33");
            $request->setNss(null);
            $request->setEmail("api33@circulodecredito.com.mx");

            $result = $this->apiInstance->postEmploymentVerification($this->x_api_key, $request);
            print_r($result);
            
            if($result['inquiry_id']!=null){
                //Get by inquiryId
                 $this->getEmploymentVerification($result['inquiry_id']);

            }
        } catch (ApiException | Exception $e) {
            echo 'Exception when calling EmploymentVerificationApiTest->testPostEmploymentVerification: ', $e->getMessage(), PHP_EOL;
        }
    }
    
    public function getEmploymentVerification($inquiryId)
    {
        try {
            $result = $this->apiInstance->getEmploymentVerification($this->x_api_key, $inquiryId);
            print_r($result);
            
        } catch (ApiException | Exception $e) {
            echo 'Exception when calling EmploymentVerificationApiTest->getEmploymentVerification: ', $e->getMessage(), PHP_EOL;
        }
    }
    
    public function testGetEmploymentVerifications()
    {
        try {
            $page=1;
            $per_page=5;
            $result = $this->apiInstance->getEmploymentVerifications($this->x_api_key, $page,$per_page);
            print_r($result);
            
    
        } catch (ApiException | Exception $e) {
            echo 'Exception when calling EmploymentVerificationApiTest->testGetEmploymentVerifications: ', $e->getMessage(), PHP_EOL;
        }
    }

    private function gen_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0x0fff ) | 0x4000,
            mt_rand( 0, 0x3fff ) | 0x8000,
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }
}
