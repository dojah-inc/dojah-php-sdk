# Dojah\AMLApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getScreeningInfo()**](AMLApi.md#getScreeningInfo) | **GET** /v1/aml/screening/info | Get AML Info |
| [**screenAml()**](AMLApi.md#screenAml) | **POST** /api/v1/aml/screening | AML Screening |


## `getScreeningInfo()`

```php
getScreeningInfo($reference_id): \Dojah\Model\GetScreeningInfoResponse
```

Get AML Info

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
$apiInstance = new Dojah\Api\AMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$reference_id = "c574a3c8-dc27-4013-8bbc-462e7ed87d55";

try {
    $result = $apiInstance->getScreeningInfo(
        reference_id: $reference_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AMLApi->getScreeningInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetScreeningInfoResponse**](../Model/GetScreeningInfoResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `screenAml()`

```php
screenAml($screen_aml_request): \Dojah\Model\ScreenAmlResponse
```

AML Screening

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
$apiInstance = new Dojah\Api\AMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$screen_aml_request = [
        "first_name" => "Obama ",
        "last_name" => " ",
        "date_of_birth" => "1997-08-18",
    ];

try {
    $result = $apiInstance->screenAml(
        screen_aml_request: $screen_aml_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AMLApi->screenAml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_aml_request** | [**\Dojah\Model\ScreenAmlRequest**](../Model/ScreenAmlRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\ScreenAmlResponse**](../Model/ScreenAmlResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
