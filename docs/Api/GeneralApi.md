# Dojah\GeneralApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBanks()**](GeneralApi.md#getBanks) | **GET** /v1/general/banks | General - Get Banks |
| [**getBin()**](GeneralApi.md#getBin) | **GET** /v1/general/bin | General Resolve BIN |
| [**getNuban()**](GeneralApi.md#getNuban) | **GET** /api/v1/general/account | General Resolve NUBAN |


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
    apiKey: "APPID",
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
    apiKey: "APPID",
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
    apiKey: "APPID",
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
