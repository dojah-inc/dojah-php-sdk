# Dojah\UgKycApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVoter()**](UgKycApi.md#getVoter) | **GET** /api/v1/ug/kyc/voter | Voters ID |


## `getVoter()`

```php
getVoter($id, $first_name, $last_name): \Dojah\Model\GetVoterResponse
```

Voters ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$id = 67335751;
$first_name = "Happy";
$last_name = "Christmas";

try {
    $result = $dojah->ugKyc->getVoter(
        id: $id, 
        first_name: $first_name, 
        last_name: $last_name
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling UgKycApi->getVoter: ', $e->getMessage(), PHP_EOL;
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
