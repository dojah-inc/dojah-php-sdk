# Dojah\ZafKycApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getId()**](ZafKycApi.md#getId) | **GET** /api/v1/za/kyc/id | KYC - Lookup ID |


## `getId()`

```php
getId($id_number): \Dojah\Model\ZafKycGetIdResponse
```

KYC - Lookup ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$id_number = 9910180077084;

try {
    $result = $dojah->zafKyc->getId(
        id_number: $id_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling ZafKycApi->getId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\ZafKycGetIdResponse**](../Model/ZafKycGetIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
