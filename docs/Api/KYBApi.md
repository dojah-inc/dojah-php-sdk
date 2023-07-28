# Dojah\KYBApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**businessDetail()**](KYBApi.md#businessDetail) | **GET** /api/v1/kyb/business/detail | Business Detail |
| [**businessSearch()**](KYBApi.md#businessSearch) | **GET** /api/v1/kyb/business/search | Business Search |
| [**getCac()**](KYBApi.md#getCac) | **GET** /api/v1/kyc/cac | KYC - Get CAC |
| [**getTin()**](KYBApi.md#getTin) | **GET** /api/v1/kyc/tin | KYC - Fetch Tin |


## `businessDetail()`

```php
businessDetail($international_number, $country_code, $full): object
```

Business Detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$international_number = "RC-1885308";
$country_code = "NG";
$full = True;

try {
    $result = $dojah->kYB->businessDetail(
        international_number: $international_number, 
        country_code: $country_code, 
        full: $full
    );
} catch (\Exception $e) {
    echo 'Exception when calling KYBApi->businessDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **international_number** | **string**|  | [optional] |
| **country_code** | **string**|  | [optional] |
| **full** | **bool**|  | [optional] |

### Return type

**object**

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessSearch()`

```php
businessSearch($country_code, $company): object
```

Business Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$country_code = "NG";
$company = 1885308;

try {
    $result = $dojah->kYB->businessSearch(
        country_code: $country_code, 
        company: $company
    );
} catch (\Exception $e) {
    echo 'Exception when calling KYBApi->businessSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**|  | [optional] |
| **company** | **int**|  | [optional] |

### Return type

**object**

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCac()`

```php
getCac($rc_number, $company_name): \Dojah\Model\KybGetCacResponse
```

KYC - Get CAC

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
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

[**\Dojah\Model\KybGetCacResponse**](../Model/KybGetCacResponse.md)

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
getTin($tin): \Dojah\Model\KybGetTinResponse
```

KYC - Fetch Tin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$tin = "24111697-0001";

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

[**\Dojah\Model\KybGetTinResponse**](../Model/KybGetTinResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
