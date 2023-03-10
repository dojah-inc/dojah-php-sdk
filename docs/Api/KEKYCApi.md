# Dojah\KEKYCApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNationalId()**](KEKYCApi.md#getNationalId) | **GET** /api/v1/ke/kyc/id | KYC - National ID |


## `getNationalId()`

```php
getNationalId($id, $first_name, $last_name, $middle_name, $date_of_birth, $gender): \Dojah\Model\GetNationalIdResponse
```

KYC - National ID

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

$apiInstance = new Dojah\Api\KEKYCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$id = 24798402;
$first_name = "ZEDEKIAH";
$last_name = "ANDENGA";
$middle_name = "string_example";
$date_of_birth = "1985-12-29";
$gender = "M";

try {
    $result = $apiInstance->getNationalId(
        id: $id, 
        first_name: $first_name, 
        last_name: $last_name, 
        middle_name: $middle_name, 
        date_of_birth: $date_of_birth, 
        gender: $gender
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KEKYCApi->getNationalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **middle_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |
| **gender** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetNationalIdResponse**](../Model/GetNationalIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
