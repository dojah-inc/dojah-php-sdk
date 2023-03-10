# Dojah\GHKYCApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDriversLicense()**](GHKYCApi.md#getDriversLicense) | **GET** /api/v1/gh/kyc/dl | Driver&#39;s License |
| [**getPassport()**](GHKYCApi.md#getPassport) | **GET** /api/v1/gh/kyc/passport | Passport |
| [**getSsnit()**](GHKYCApi.md#getSsnit) | **GET** /api/v1/gh/kyc/ssnit | SSNIT |


## `getDriversLicense()`

```php
getDriversLicense($id, $full_name, $date_of_birth): \Dojah\Model\GetDriversLicenseResponse
```

Driver's License

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

$apiInstance = new Dojah\Api\GHKYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$id = "V0000000";
$full_name = "John Doe";
$date_of_birth = "1988-09-01";

try {
    $result = $apiInstance->getDriversLicense(
        id: $id, 
        full_name: $full_name, 
        date_of_birth: $date_of_birth
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GHKYCApi->getDriversLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **full_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetDriversLicenseResponse**](../Model/GetDriversLicenseResponse.md)

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
getPassport($id, $first_name, $last_name, $middle_name, $date_of_birth): \Dojah\Model\GetPassportResponse
```

Passport

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

$apiInstance = new Dojah\Api\GHKYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$id = "G0000000";
$first_name = "John";
$last_name = "Doe";
$middle_name = "Jack";
$date_of_birth = "1990-04-05";

try {
    $result = $apiInstance->getPassport(
        id: $id, 
        first_name: $first_name, 
        last_name: $last_name, 
        middle_name: $middle_name, 
        date_of_birth: $date_of_birth
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GHKYCApi->getPassport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **middle_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetPassportResponse**](../Model/GetPassportResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSsnit()`

```php
getSsnit($id, $full_name, $date_of_birth): \Dojah\Model\GetSsnitResponse
```

SSNIT

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

$apiInstance = new Dojah\Api\GHKYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$id = "G0000000";
$full_name = "John Doe";
$date_of_birth = "1990-04-05";

try {
    $result = $apiInstance->getSsnit(
        id: $id, 
        full_name: $full_name, 
        date_of_birth: $date_of_birth
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GHKYCApi->getSsnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **full_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetSsnitResponse**](../Model/GetSsnitResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
