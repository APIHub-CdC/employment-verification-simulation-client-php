# Employment Verification Sandbox

This API lets you verify a person employment status. If a person has a job it also returns the industrial sector and the industry COVID risk segment.

## Requirements

Building the API client library requires:
1. PHP >= 7.1

### Additional dependencies
- You must have the following PHP dependencies:
    - ext-curl
    - ext-mbstring
- 
If not, for linux use the following commands
```sh
#example with php in version 7.3 for another version put php{version}-curl
apt-get install php7.3-curl
apt-get install php7.3-mbstring
```
- Composer [see how to install][1]
## Installation

To install the dependencies, the following command must be executed:
```shell
composer install
```

## Getting started

#### Step 1. Get your ```x-api-key```
 Get your ```x-api-key``` Following step 1, 2 and 3 the start guide ***https://developer.circulodecredito.com.mx/guia-de-inicio*** 

#### Step 2. Change url and request data
The following data to modify can be found in ** test/Api/EmploymentVerificationApiTest.php **
It is important to have the setUp () that will be in charge of initializing the url. Modify the URL ** ('the_url') ** of the object request ** _ \ $ config _ **, as shown in the following code snippet:


``` php
    public function setUp()
    {
        $config = new Configuration();
        $config->setHost('the_url');
        $this->x_api_key = "your_api_key";
        $client = new \GuzzleHttp\Client();
        $this->apiInstance = new EmploymentVerificationApi($client,$config);
    }
    
      
    public function testPostEmploymentVerification()
    {
        try {
            $request = new EmploymentVerification();

            $request->setEmploymentVerificationRequestId($this->gen_uuid());
            $request->setSubscriptionId("subscriptionId");
            $request->setCurp("curp");
            $request->setNss(null);
            $request->setEmail("email@email.com");

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
```

### Step 3. Run the unit test

Having the previous steps, all that remains is to run the unit test, with the following command:

```sh
./vendor/bin/phpunit
```

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos