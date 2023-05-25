# Dojah\GeneralApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBanks()**](GeneralApi.md#getBanks) | **GET** /v1/general/banks | General - Get Banks |
| [**getBin()**](GeneralApi.md#getBin) | **GET** /v1/general/bin | General Resolve BIN |
| [**getDataPlans()**](GeneralApi.md#getDataPlans) | **GET** /v1/purchase/data/plans | Purchase - Get Data Plans |
| [**getNuban()**](GeneralApi.md#getNuban) | **GET** /v1/general/account | General Resolve NUBAN |
| [**getWalletBalance()**](GeneralApi.md#getWalletBalance) | **GET** /api/v1/balance | Get Dojah Wallet Balance |
| [**purchaseAirtime()**](GeneralApi.md#purchaseAirtime) | **POST** /v1/purchase/airtime | Purchase - Send Airtime |
| [**purchaseData()**](GeneralApi.md#purchaseData) | **POST** /v1/purchase/data | Purchase - Buy Data |


## `getBanks()`

```php
getBanks(): \Dojah\Model\GetBanksResponse
```

General - Get Banks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);


try {
    $result = $dojah->general->getBanks();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GeneralApi->getBanks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\GetBanksResponse**](../Model/GetBanksResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBin()`

```php
getBin($card_bin): \Dojah\Model\GetBinResponse
```

General Resolve BIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$card_bin = 506118;

try {
    $result = $dojah->general->getBin(
        card_bin: $card_bin
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GeneralApi->getBin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_bin** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetBinResponse**](../Model/GetBinResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataPlans()`

```php
getDataPlans(): \Dojah\Model\GetDataPlansResponse
```

Purchase - Get Data Plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);


try {
    $result = $dojah->general->getDataPlans();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GeneralApi->getDataPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\GetDataPlansResponse**](../Model/GetDataPlansResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNuban()`

```php
getNuban($bank_code, $account_number): \Dojah\Model\GeneralGetNubanResponse
```

General Resolve NUBAN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$bank_code = 58;
$account_number = 37466959;

try {
    $result = $dojah->general->getNuban(
        bank_code: $bank_code, 
        account_number: $account_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GeneralApi->getNuban: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bank_code** | **int**|  | [optional] |
| **account_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GeneralGetNubanResponse**](../Model/GeneralGetNubanResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);


try {
    $result = $dojah->general->getWalletBalance();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GeneralApi->getWalletBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\GetWalletBalanceResponse**](../Model/GetWalletBalanceResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseAirtime()`

```php
purchaseAirtime($purchase_airtime_request): \Dojah\Model\PurchaseAirtimeResponse
```

Purchase - Send Airtime

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$destination = "08068810228";
$amount = "100";

try {
    $result = $dojah->general->purchaseAirtime(
        destination: $destination, 
        amount: $amount
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GeneralApi->purchaseAirtime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_airtime_request** | [**\Dojah\Model\PurchaseAirtimeRequest**](../Model/PurchaseAirtimeRequest.md)|  | [optional] |

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

## `purchaseData()`

```php
purchaseData($purchase_data_request): \Dojah\Model\PurchaseDataResponse
```

Purchase - Buy Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$plan = "9MOBILE_1.5GB";
$destination = "09090577941";

try {
    $result = $dojah->general->purchaseData(
        plan: $plan, 
        destination: $destination
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GeneralApi->purchaseData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_data_request** | [**\Dojah\Model\PurchaseDataRequest**](../Model/PurchaseDataRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\PurchaseDataResponse**](../Model/PurchaseDataResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
