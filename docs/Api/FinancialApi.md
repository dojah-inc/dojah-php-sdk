# Dojah\FinancialApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**collectStatusFromPdf()**](FinancialApi.md#collectStatusFromPdf) | **POST** /api/v1/financial/transactions/pdf | Collect Status via PDF Statement |
| [**collectTransactions()**](FinancialApi.md#collectTransactions) | **POST** /v1/financial/transactions | Collect Transactions |
| [**getAccount()**](FinancialApi.md#getAccount) | **GET** /api/v1/financial/account_information | Get Account Information |
| [**getAccountAnalysis()**](FinancialApi.md#getAccountAnalysis) | **GET** /api/v1/financial/analysis | Get Account Analysis |
| [**getAccountSubscriptions()**](FinancialApi.md#getAccountSubscriptions) | **GET** /v1/financial/account_subscription | Get Account Subscriptions |
| [**getAccountTransactions()**](FinancialApi.md#getAccountTransactions) | **GET** /api/v1/financial/account_transactions | Get Account Transactions |
| [**getBasicBvn()**](FinancialApi.md#getBasicBvn) | **GET** /v1/financial/bvn_information/basic | Get BVN Information Basic |
| [**getEarningStructure()**](FinancialApi.md#getEarningStructure) | **GET** /v1/financial/earning_structure | Get Earning Structure |
| [**getFullBvn()**](FinancialApi.md#getFullBvn) | **GET** /v1/financial/bvn_information/full | Get BVN Information Full |
| [**getSpendingPattern()**](FinancialApi.md#getSpendingPattern) | **GET** /v1/financial/spending_pattern | Get Spending Pattern |


## `collectStatusFromPdf()`

```php
collectStatusFromPdf($statement, $bank_code): \Dojah\Model\CollectStatusFromPdfResponse
```

Collect Status via PDF Statement

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$statement = "/path/to/file.txt";
$bank_code = 56;

try {
    $result = $apiInstance->collectStatusFromPdf(
        statement: $statement, 
        bank_code: $bank_code
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->collectStatusFromPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **statement** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **bank_code** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\CollectStatusFromPdfResponse**](../Model/CollectStatusFromPdfResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `collectTransactions()`

```php
collectTransactions($collect_transactions_request): \Dojah\Model\CollectTransactionsResponse
```

Collect Transactions

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$collect_transactions_request = [
        "app_id" => "6138a052147a0100341ca124",
    ];

try {
    $result = $apiInstance->collectTransactions(
        collect_transactions_request: $collect_transactions_request
    );
    print_r($result->$getMessage());
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->collectTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collect_transactions_request** | [**\Dojah\Model\CollectTransactionsRequest**](../Model/CollectTransactionsRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\CollectTransactionsResponse**](../Model/CollectTransactionsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($account_id): \Dojah\Model\GetAccountResponse
```

Get Account Information

/services/@app_id/account/@account_id

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$account_id = "d5b86083-08c5-4de2-ac19-7610a16c297d";

try {
    $result = $apiInstance->getAccount(
        account_id: $account_id
    );
    print_r($result->$getName());
    print_r($result->$getAccountNumber());
    print_r($result->$getBvn());
    print_r($result->$getAccountType());
    print_r($result->$getCurrency());
    print_r($result->$getAccountStatus());
    print_r($result->$getBalance());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetAccountResponse**](../Model/GetAccountResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountAnalysis()`

```php
getAccountAnalysis(): \Dojah\Model\GetAccountAnalysisResponse
```

Get Account Analysis

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getAccountAnalysis();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->getAccountAnalysis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\GetAccountAnalysisResponse**](../Model/GetAccountAnalysisResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountSubscriptions()`

```php
getAccountSubscriptions($account_id): \Dojah\Model\GetAccountSubscriptionsResponse
```

Get Account Subscriptions

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$account_id = "02f63911-a958-4025-9d72-8bd2d7da274b";

try {
    $result = $apiInstance->getAccountSubscriptions(
        account_id: $account_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->getAccountSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetAccountSubscriptionsResponse**](../Model/GetAccountSubscriptionsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountTransactions()`

```php
getAccountTransactions($account_id, $length): \Dojah\Model\GetAccountTransactionsResponse
```

Get Account Transactions

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$account_id = "d5b86083-08c5-4de2-ac19-7610a16c297d";
$length = 200;

try {
    $result = $apiInstance->getAccountTransactions(
        account_id: $account_id, 
        length: $length
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->getAccountTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | [optional] |
| **length** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetAccountTransactionsResponse**](../Model/GetAccountTransactionsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicBvn()`

```php
getBasicBvn($account_id): \Dojah\Model\FinancialGetBasicBvnResponse
```

Get BVN Information Basic

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$account_id = "34c7a2a10b4d4050869fe6f0aa6f0a30";

try {
    $result = $apiInstance->getBasicBvn(
        account_id: $account_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->getBasicBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\FinancialGetBasicBvnResponse**](../Model/FinancialGetBasicBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEarningStructure()`

```php
getEarningStructure($account_id): \Dojah\Model\GetEarningStructureResponse
```

Get Earning Structure

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$account_id = "02f63911-a958-4025-9d72-8bd2d7da274b";

try {
    $result = $apiInstance->getEarningStructure(
        account_id: $account_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->getEarningStructure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetEarningStructureResponse**](../Model/GetEarningStructureResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFullBvn()`

```php
getFullBvn($account_id): \Dojah\Model\FinancialGetFullBvnResponse
```

Get BVN Information Full

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$account_id = "34c7a2a10b4d4050869fe6f0aa6f0a30";

try {
    $result = $apiInstance->getFullBvn(
        account_id: $account_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->getFullBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\FinancialGetFullBvnResponse**](../Model/FinancialGetFullBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpendingPattern()`

```php
getSpendingPattern($account_id): \Dojah\Model\GetSpendingPatternResponse
```

Get Spending Pattern

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
$apiInstance = new Dojah\Api\FinancialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$account_id = "02f63911-a958-4025-9d72-8bd2d7da274b";

try {
    $result = $apiInstance->getSpendingPattern(
        account_id: $account_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FinancialApi->getSpendingPattern: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetSpendingPatternResponse**](../Model/GetSpendingPatternResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
