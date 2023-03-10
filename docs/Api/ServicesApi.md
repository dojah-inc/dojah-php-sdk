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

$apiInstance = new Dojah\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$categorize_transactions_request = [
        "description" => "POS/WEB PURCHASE TRANSACTION -047608- -253842-MUNCHIES BY MOE OY OYNG",
        "trans_type" => "debit",
    ];

try {
    $result = $apiInstance->categorizeTransactions(
        categorize_transactions_request: $categorize_transactions_request
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
