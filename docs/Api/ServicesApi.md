# Dojah\ServicesApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categorizeTransactions()**](ServicesApi.md#categorizeTransactions) | **POST** /v1/ml/categorize_transaction | Categorize Transactions |


## `categorizeTransactions()`

```php
categorizeTransactions($categorize_transactions_request): \Dojah\Model\CategorizeTransactionsResponse
```

Categorize Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$description = "POS/WEB PURCHASE TRANSACTION -047608- -253842-MUNCHIES BY MOE OY OYNG";
$trans_type = "debit";

try {
    $result = $dojah->services->categorizeTransactions(
        description: $description, 
        trans_type: $trans_type
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling ServicesApi->categorizeTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categorize_transactions_request** | [**\Dojah\Model\CategorizeTransactionsRequest**](../Model/CategorizeTransactionsRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\CategorizeTransactionsResponse**](../Model/CategorizeTransactionsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
