# Dojah\KYCApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyzeDocument()**](KYCApi.md#analyzeDocument) | **POST** /api/v1/document/analysis | KYC - Document Analysis |
| [**getBasicBvn()**](KYCApi.md#getBasicBvn) | **GET** /api/v1/kyc/bvn/basic | KYC - Get Basic BVN Info |
| [**getBasicPhoneNumber()**](KYCApi.md#getBasicPhoneNumber) | **GET** /v1/kyc/phone_number/basic | KYC Lookup Phone Number Basic |
| [**getDriversLicense()**](KYCApi.md#getDriversLicense) | **GET** /api/v1/kyc/dl | KYC - Get Drivers License Info |
| [**getEmailReputation()**](KYCApi.md#getEmailReputation) | **GET** /v1/kyc/email | KYC - Get Email Reputation |
| [**getFullBvn()**](KYCApi.md#getFullBvn) | **GET** /api/v1/kyc/bvn/full | KYC - Lookup BVN Basic |
| [**getNuban()**](KYCApi.md#getNuban) | **GET** /api/v1/kyc/nuban | KYC - Get NUBAN Information |
| [**getPassport()**](KYCApi.md#getPassport) | **GET** /api/v1/kyc/passport | KYC - Passport |
| [**getPhoneNumber()**](KYCApi.md#getPhoneNumber) | **GET** /api/v1/kyc/phone_number | KYC - Lookup Phone Number |
| [**getPremiumBvn()**](KYCApi.md#getPremiumBvn) | **GET** /api/v1/kyc/bvn/advance | KYC - Lookup BVN Premium |
| [**getVIN()**](KYCApi.md#getVIN) | **GET** /api/v1/kyc/vin | KYC - Get VIN |
| [**getVnin()**](KYCApi.md#getVnin) | **GET** /api/v1/kyc/vnin | Lookup VNIN |
| [**validateBvn()**](KYCApi.md#validateBvn) | **GET** /api/v1/kyc/bvn | KYC - Validate BVN |
| [**verifyAge()**](KYCApi.md#verifyAge) | **GET** /v1/kyc/age_verification | KYC - Age Verification |
| [**verifySelfieBvn()**](KYCApi.md#verifySelfieBvn) | **POST** /v1/kyc/bvn/verify | KYC - Selfie BVN Verificatoin |
| [**verifySelfieNin()**](KYCApi.md#verifySelfieNin) | **POST** /v1/kyc/nin/verify | KYC - Selfie NIN Verification |


## `analyzeDocument()`

```php
analyzeDocument(): \Dojah\Model\AnalyzeDocumentResponse
```

KYC - Document Analysis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->analyzeDocument();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->analyzeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\AnalyzeDocumentResponse**](../Model/AnalyzeDocumentResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicBvn()`

```php
getBasicBvn($bvn): \Dojah\Model\GetBasicBvnResponse
```

KYC - Get Basic BVN Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$bvn = 22468537919;

try {
    $result = $apiInstance->getBasicBvn(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getBasicBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetBasicBvnResponse**](../Model/GetBasicBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicPhoneNumber()`

```php
getBasicPhoneNumber($phone_number): \Dojah\Model\GetBasicPhoneNumberResponse
```

KYC Lookup Phone Number Basic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$phone_number = 8068810228;

try {
    $result = $apiInstance->getBasicPhoneNumber(
        phone_number: $phone_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getBasicPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetBasicPhoneNumberResponse**](../Model/GetBasicPhoneNumberResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDriversLicense()`

```php
getDriversLicense($license_number): \Dojah\Model\GetKycDriversLicenseResponse
```

KYC - Get Drivers License Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$license_number = "FKJ49409AB13";

try {
    $result = $apiInstance->getDriversLicense(
        license_number: $license_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getDriversLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **license_number** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetKycDriversLicenseResponse**](../Model/GetKycDriversLicenseResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailReputation()`

```php
getEmailReputation($email): \Dojah\Model\GetEmailReputationResponse
```

KYC - Get Email Reputation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$email = "johndoe@gmail.com";

try {
    $result = $apiInstance->getEmailReputation(
        email: $email
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getEmailReputation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetEmailReputationResponse**](../Model/GetEmailReputationResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFullBvn()`

```php
getFullBvn($bvn): \Dojah\Model\GetFullBvnResponse
```

KYC - Lookup BVN Basic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$bvn = 22222222222;

try {
    $result = $apiInstance->getFullBvn(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getFullBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetFullBvnResponse**](../Model/GetFullBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNuban()`

```php
getNuban($bank_code, $account_number): \Dojah\Model\GetNubanResponse
```

KYC - Get NUBAN Information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$bank_code = 58;
$account_number = 11223344;

try {
    $result = $apiInstance->getNuban(
        bank_code: $bank_code, 
        account_number: $account_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getNuban: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bank_code** | **int**|  | [optional] |
| **account_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetNubanResponse**](../Model/GetNubanResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPassport()`

```php
getPassport($passport_number, $surname): \Dojah\Model\GetKycPassportResponse
```

KYC - Passport

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$passport_number = 70142502085;
$surname = "ololade";

try {
    $result = $apiInstance->getPassport(
        passport_number: $passport_number, 
        surname: $surname
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getPassport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **passport_number** | **int**|  | [optional] |
| **surname** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetKycPassportResponse**](../Model/GetKycPassportResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneNumber()`

```php
getPhoneNumber($phone_number): \Dojah\Model\GetPhoneNumberResponse
```

KYC - Lookup Phone Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$phone_number = 8011111111;

try {
    $result = $apiInstance->getPhoneNumber(
        phone_number: $phone_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetPhoneNumberResponse**](../Model/GetPhoneNumberResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPremiumBvn()`

```php
getPremiumBvn($bvn): \Dojah\Model\GetPremiumBvnResponse
```

KYC - Lookup BVN Premium

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$bvn = 22305638508;

try {
    $result = $apiInstance->getPremiumBvn(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getPremiumBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetPremiumBvnResponse**](../Model/GetPremiumBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVIN()`

```php
getVIN($mode, $firstname, $lastname, $vin, $state): \Dojah\Model\GetVinResponse
```

KYC - Get VIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$mode = "vin";
$firstname = "moshood";
$lastname = "saliu";
$vin = 55586;
$state = "ondo";

try {
    $result = $apiInstance->getVIN(
        mode: $mode, 
        firstname: $firstname, 
        lastname: $lastname, 
        vin: $vin, 
        state: $state
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getVIN: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mode** | **string**|  | [optional] |
| **firstname** | **string**|  | [optional] |
| **lastname** | **string**|  | [optional] |
| **vin** | **int**|  | [optional] |
| **state** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetVinResponse**](../Model/GetVinResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVnin()`

```php
getVnin($vnin): \Dojah\Model\GetVninResponse
```

Lookup VNIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$vnin = "AB012345678910YZ";

try {
    $result = $apiInstance->getVnin(
        vnin: $vnin
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getVnin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vnin** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetVninResponse**](../Model/GetVninResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateBvn()`

```php
validateBvn($bvn, $first_name, $dob): \Dojah\Model\ValidateBvnResponse
```

KYC - Validate BVN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$bvn = 22250148240;
$first_name = "FRANCIS";
$dob = "1982-02-19";

try {
    $result = $apiInstance->validateBvn(
        bvn: $bvn, 
        first_name: $first_name, 
        dob: $dob
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->validateBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **dob** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\ValidateBvnResponse**](../Model/ValidateBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyAge()`

```php
verifyAge($mode, $account_number, $bank_code, $dob, $first_name, $last_name): \Dojah\Model\VerifyAgeResponse
```

KYC - Age Verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$mode = "account_number";
$account_number = 3046507407;
$bank_code = 11;
$dob = "1993-06-10";
$first_name = "Mosh";
$last_name = "Saliu";

try {
    $result = $apiInstance->verifyAge(
        mode: $mode, 
        account_number: $account_number, 
        bank_code: $bank_code, 
        dob: $dob, 
        first_name: $first_name, 
        last_name: $last_name
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->verifyAge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mode** | **string**|  | [optional] |
| **account_number** | **int**|  | [optional] |
| **bank_code** | **int**|  | [optional] |
| **dob** | **string**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\VerifyAgeResponse**](../Model/VerifyAgeResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifySelfieBvn()`

```php
verifySelfieBvn($verify_selfie_bvn_request): \Dojah\Model\VerifySelfieBvnResponse
```

KYC - Selfie BVN Verificatoin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$verify_selfie_bvn_request = [
        "bvn" => "22468537919",
        "selfie_image" => "<base64 encoded image>",
    ];

try {
    $result = $apiInstance->verifySelfieBvn(
        verify_selfie_bvn_request: $verify_selfie_bvn_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->verifySelfieBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verify_selfie_bvn_request** | [**\Dojah\Model\VerifySelfieBvnRequest**](../Model/VerifySelfieBvnRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\VerifySelfieBvnResponse**](../Model/VerifySelfieBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifySelfieNin()`

```php
verifySelfieNin($verify_selfie_nin_request): \Dojah\Model\VerifySelfieNinResponse
```

KYC - Selfie NIN Verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\KYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$verify_selfie_nin_request = [
        "nin" => "79628483753",
        "selfie_image" => "<base64 encoded image>",
    ];

try {
    $result = $apiInstance->verifySelfieNin(
        verify_selfie_nin_request: $verify_selfie_nin_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->verifySelfieNin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verify_selfie_nin_request** | [**\Dojah\Model\VerifySelfieNinRequest**](../Model/VerifySelfieNinRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\VerifySelfieNinResponse**](../Model/VerifySelfieNinResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
