# Dojah\KeKycApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNationalId()**](KeKycApi.md#getNationalId) | **GET** /api/v1/ke/kyc/id | KYC - National ID |
| [**getPassport()**](KeKycApi.md#getPassport) | **GET** /api/v1/ke/kyc/passport | KYC - Passport |


## `getNationalId()`

```php
getNationalId($app_id, $id): \Dojah\Model\GetNationalIdResponse
```

KYC - National ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";
$id = 24798402;

try {
    $result = $dojah->keKyc->getNationalId(
        app_id: $app_id, 
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
| **app_id** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetNationalIdResponse**](../Model/GetNationalIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPassport()`

```php
getPassport($app_id): object
```

KYC - Passport

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";

try {
    $result = $dojah->keKyc->getPassport(
        app_id: $app_id
    );
} catch (\Exception $e) {
    echo 'Exception when calling KeKycApi->getPassport: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
