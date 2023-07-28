# Dojah\PurchaseApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendAirtime()**](PurchaseApi.md#sendAirtime) | **POST** /v1/purchase/airtime | Purchase - Send Airtime |


## `sendAirtime()`

```php
sendAirtime($purchase_airtime_request): \Dojah\Model\PurchaseAirtimeResponse
```

Purchase - Send Airtime

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$destination = "08068810228";
$amount = "100";

try {
    $result = $dojah->purchase->sendAirtime(
        destination: $destination, 
        amount: $amount
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling PurchaseApi->sendAirtime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_airtime_request** | [**\Dojah\Model\PurchaseAirtimeRequest**](../Model/PurchaseAirtimeRequest.md)|  | |

### Return type

[**\Dojah\Model\PurchaseAirtimeResponse**](../Model/PurchaseAirtimeResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
