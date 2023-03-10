# Dojah\UGKYCApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVoter()**](UGKYCApi.md#getVoter) | **GET** /api/v1/ug/kyc/voter | Voters ID |


## `getVoter()`

```php
getVoter($id, $first_name, $last_name): \Dojah\Model\GetVoterResponse
```

Voters ID

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
$apiInstance = new Dojah\Api\UGKYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$id = 67335751;
$first_name = "Happy";
$last_name = "Christmas";

try {
    $result = $apiInstance->getVoter(
        id: $id, 
        first_name: $first_name, 
        last_name: $last_name
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling UGKYCApi->getVoter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetVoterResponse**](../Model/GetVoterResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
