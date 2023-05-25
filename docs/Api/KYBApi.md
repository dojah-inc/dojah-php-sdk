# Dojah\KYBApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdvancedCac()**](KYBApi.md#getAdvancedCac) | **GET** /v1/kyc/cac/advance | KYC - Get CAC Advanced |
| [**getBasicCac()**](KYBApi.md#getBasicCac) | **GET** /v1/kyc/cac/basic | KYB - Get CAC 2 |
| [**getCac()**](KYBApi.md#getCac) | **GET** /v1/kyc/cac | KYC - Get CAC |
| [**getTin()**](KYBApi.md#getTin) | **GET** /v1/kyc/tin | KYC - Fetch Tin |


## `getAdvancedCac()`

```php
getAdvancedCac($rc, $type, $class): \Dojah\Model\GetAdvancedCacResponse
```

KYC - Get CAC Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$rc = 1432074;
$type = "co";
$class = "advance";

try {
    $result = $dojah->kYB->getAdvancedCac(
        rc: $rc, 
        type: $type, 
        class: $class
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYBApi->getAdvancedCac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rc** | **int**|  | [optional] |
| **type** | **string**|  | [optional] |
| **class** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetAdvancedCacResponse**](../Model/GetAdvancedCacResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicCac()`

```php
getBasicCac($rc, $type): \Dojah\Model\GetBasicCacResponse
```

KYB - Get CAC 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$rc = 3330883;
$type = "bn";

try {
    $result = $dojah->kYB->getBasicCac(
        rc: $rc, 
        type: $type
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYBApi->getBasicCac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rc** | **int**|  | [optional] |
| **type** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetBasicCacResponse**](../Model/GetBasicCacResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCac()`

```php
getCac($rc_number, $company_name): \Dojah\Model\GetCacResponse
```

KYC - Get CAC

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$rc_number = 1432074;
$company_name = "ELTA SOLUTIONS LIMITED";

try {
    $result = $dojah->kYB->getCac(
        rc_number: $rc_number, 
        company_name: $company_name
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYBApi->getCac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rc_number** | **int**|  | [optional] |
| **company_name** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetCacResponse**](../Model/GetCacResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTin()`

```php
getTin($tin): \Dojah\Model\GetTinResponse
```

KYC - Fetch Tin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$tin = "21148119-0001";

try {
    $result = $dojah->kYB->getTin(
        tin: $tin
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYBApi->getTin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tin** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetTinResponse**](../Model/GetTinResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
