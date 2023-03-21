# Employment Verification - PHP API Client

<p>API EVA<p> <p>Es una solución que verifica si un cliente cuenta con empleo formal arrojando un indicador de riesgo de pérdida de empleo con base al sector industrial en el que labora.</p><br/><img src='https://github.com/APIHub-CdC/imagenes-cdc/blob/master/circulo_de_credito-apihub.png' height='37' width='160'/><br/>

## Requisitos

PHP >= 7.3
### Dependencias adicionales
- Composer [vea como instalar][1]
- Se debe contar con las siguientes dependencias de PHP:
    - ext-curl
    - ext-mbstring
```sh
# RHEL distros
yum install php-mbstring
yum install curl

# Debian distros
apt-get install php-mbstring
apt-get install php-curl
```

## Instalación

Ejecutar: `composer install`

## Guía de inicio
 
### Paso 1. Modificar URL y credenciales

 Modificar la URL y las credenciales de acceso a la petición en ***test/Api/EmploymentVerificationApiTest.php***, como se muestra en el siguiente fragmento de código:

```php
...
public  function setUp():  void {

  $this->username = "";
  $this->password = "";
  $this->apiKey   = "";

  $apiUrl = "";

  $this->config = new Configuration();
  $this->config->setHost($apiUrl);

  $this->httpClient = new HttpClient();
}
...
 ```
 
### Paso 2. Capturar los datos y realizar la petición

> **NOTA:** Los datos de la siguiente petición son sólo representativos.

```php
...
public function testEmploymentverificationsWithPrivacyNotice(): void
{
    $address = new Address();
    $address->setState(StateCatalog::CDMX);
    $address->setPostalCode("");
    $address->setCity("");
    $address->setCounty("");
    $address->setSettlement("");
    $address->setStreetAndNumber("");

    $fullName = new FullName();
    $fullName->setFirstName("");
    $fullName->setMiddleName("");
    $fullName->setFirstSurname("");
    $fullName->setSecondSurname("");
    $fullName->setAditionalSurname("");

    // Current date time with the format required by EVA API
    // Note that this date time MUST correspond with the real acceptance date time from the client
    $microTime = sprintf("%.2f", microtime(true));
    $dateTime = date('Y-m-d\TH:i:s', $microTime).'.'.substr($microTime, -2).'Z';

    $privacyNotice = new PrivacyNotice();
    $privacyNotice->setFullName($fullName);
    $privacyNotice->setAddress($address);
    $privacyNotice->setAcceptanceDate($dateTime);
    $privacyNotice->setAcceptance(Self::YES); // [Y,N]

    $employment = new EmploymentVerification();
    $employment->setCurp("");
    $employment->setNss("");
    $employment->setEmail("");
    $employment->setEmploymentVerificationRequestId($this->uuid());
    $employment->setSubscriptionId("");

    $requestPayload = new EmploymentVerificationWithPrivacyNotice();
    $requestPayload->setPrivacyNotice($privacyNotice);
    $requestPayload->setEmploymentVerification($employment);

    $reponse = null;

    try  {
        $api = new ApiClient($this->httpClient, $this->config);
        $response = $api->employmentverificationsWithPrivacyNotice($this->apiKey, $this->username, $this->password, $requestPayload);
        print("\n".$response);
        
    }  catch  (ApiException $exception)  {
        print("\nThe HTTP request failed, an error occurred: ".($exception->getMessage()));
        print("\n".$exception->getResponseObject());
    }

    $this->assertNotNull($response);
}
...
```

## 3 Pruebas unitarias

Deshabilita la ejecución de un método test agregando la anotación **`@group skip`**

```php
...
/**
* HTTP GET employment verification by inquiryId.
*
* @group skip
*/
public  function  testGetEmploymentVerificationByInquiryId(): void
{
...
}
...
```

 - Para ejecutar **todas** las pruebas unitarias elimina la anotación @group skip en cada método test y ejecuta:

```sh

./vendor/bin/phpunit

```

 - Para ejecutar pruebas unitarias específicas, utiliza la anotación
   `@group skip` y la opción `--exclude` en phpunit:

```sh

./vendor/bin/phpunit --exclude skip

```

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

---
[CONDICIONES DE USO, REPRODUCCIÓN Y DISTRIBUCIÓN](https://github.com/APIHub-CdC/licencias-cdc)

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos