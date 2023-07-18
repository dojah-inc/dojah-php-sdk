# Dojah\GeneralApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBanks()**](GeneralApi.md#getBanks) | **GET** /v1/general/banks | General - Get Banks |
| [**getBin()**](GeneralApi.md#getBin) | **GET** /v1/general/bin | General Resolve BIN |
| [**getNuban()**](GeneralApi.md#getNuban) | **GET** /api/v1/general/account | General Resolve NUBAN |


## `getBanks()`

```php
getBanks($app_id): \Dojah\Model\GetBanksResponse
```

General - Get Banks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";

try {
    $result = $dojah->general->getBanks(
        app_id: $app_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GeneralApi->getBanks: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetBanksResponse**](../Model/GetBanksResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBin()`

```php
getBin($app_id, $card_bin): \Dojah\Model\GetBinResponse
```

General Resolve BIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";
$card_bin = 506118;

try {
    $result = $dojah->general->getBin(
        app_id: $app_id, 
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
| **app_id** | **string**|  | [optional] |
| **card_bin** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetBinResponse**](../Model/GetBinResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNuban()`

```php
getNuban($app_id, $bank_code, $account_number): \Dojah\Model\GeneralGetNubanResponse
```

General Resolve NUBAN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";
$bank_code = 58;
$account_number = 37466959;

try {
    $result = $dojah->general->getNuban(
        app_id: $app_id, 
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
| **app_id** | **string**|  | [optional] |
| **bank_code** | **int**|  | [optional] |
| **account_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GeneralGetNubanResponse**](../Model/GeneralGetNubanResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
