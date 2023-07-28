# Dojah\KeKycApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNationalId()**](KeKycApi.md#getNationalId) | **GET** /api/v1/ke/kyc/id | KYC - National ID |
| [**getPassport()**](KeKycApi.md#getPassport) | **GET** /api/v1/ke/kyc/passport | KYC - Passport |


## `getNationalId()`

```php
getNationalId($id): \Dojah\Model\GetNationalIdResponse
```

KYC - National ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$id = 24798402;

try {
    $result = $dojah->keKyc->getNationalId(
        id: $id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KeKycApi->getNationalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetNationalIdResponse**](../Model/GetNationalIdResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPassport()`

```php
getPassport(): object
```

KYC - Passport

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);


try {
    $result = $dojah->keKyc->getPassport();
} catch (\Exception $e) {
    echo 'Exception when calling KeKycApi->getPassport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
