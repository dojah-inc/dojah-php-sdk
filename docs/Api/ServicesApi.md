# Dojah\ServicesApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWalletBalance()**](ServicesApi.md#getWalletBalance) | **GET** /api/v1/balance | Get Dojah Wallet Balance |


## `getWalletBalance()`

```php
getWalletBalance(): \Dojah\Model\GetWalletBalanceResponse
```

Get Dojah Wallet Balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);


try {
    $result = $dojah->services->getWalletBalance();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling ServicesApi->getWalletBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\GetWalletBalanceResponse**](../Model/GetWalletBalanceResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth), [noauthAuth](../../README.md#noauthAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
