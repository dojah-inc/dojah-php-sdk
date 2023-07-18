# Dojah\ServicesApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWalletBalance()**](ServicesApi.md#getWalletBalance) | **GET** /api/v1/balance | Get Dojah Wallet Balance |


## `getWalletBalance()`

```php
getWalletBalance($app_id): \Dojah\Model\GetWalletBalanceResponse
```

Get Dojah Wallet Balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";

try {
    $result = $dojah->services->getWalletBalance(
        app_id: $app_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling ServicesApi->getWalletBalance: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetWalletBalanceResponse**](../Model/GetWalletBalanceResponse.md)

### Authorization

[noauthAuth](../../README.md#noauthAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
