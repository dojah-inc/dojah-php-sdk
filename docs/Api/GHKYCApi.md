# Dojah\GhKycApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDriversLicense()**](GhKycApi.md#getDriversLicense) | **GET** /api/v1/gh/kyc/dl | Driver&#39;s License |
| [**getPassport()**](GhKycApi.md#getPassport) | **GET** /api/v1/gh/kyc/passport | Passport |
| [**getSsnit()**](GhKycApi.md#getSsnit) | **GET** /api/v1/gh/kyc/ssnit | SSNIT |
| [**getVoter()**](GhKycApi.md#getVoter) | **GET** /api/v1/gh/kyc/voter | Voter ID Lookup |


## `getDriversLicense()`

```php
getDriversLicense($id, $full_name, $date_of_birth): \Dojah\Model\GetDriversLicenseResponse
```

Driver's License

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$id = "V0000000";
$full_name = "John Doe";
$date_of_birth = "1988-09-01";

try {
    $result = $dojah->ghKyc->getDriversLicense(
        id: $id, 
        full_name: $full_name, 
        date_of_birth: $date_of_birth
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GhKycApi->getDriversLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **full_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetDriversLicenseResponse**](../Model/GetDriversLicenseResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPassport()`

```php
getPassport($id, $first_name, $last_name, $middle_name, $date_of_birth): \Dojah\Model\GetPassportResponse
```

Passport

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$id = "G111235468";
$first_name = "John";
$last_name = "Doe";
$middle_name = "Jack";
$date_of_birth = "1990-04-05";

try {
    $result = $dojah->ghKyc->getPassport(
        id: $id, 
        first_name: $first_name, 
        last_name: $last_name, 
        middle_name: $middle_name, 
        date_of_birth: $date_of_birth
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GhKycApi->getPassport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **middle_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetPassportResponse**](../Model/GetPassportResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSsnit()`

```php
getSsnit($id, $full_name, $date_of_birth): \Dojah\Model\GetSsnitResponse
```

SSNIT

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$id = "G0000000";
$full_name = "John Doe";
$date_of_birth = "1990-04-05";

try {
    $result = $dojah->ghKyc->getSsnit(
        id: $id, 
        full_name: $full_name, 
        date_of_birth: $date_of_birth
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling GhKycApi->getSsnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |
| **full_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetSsnitResponse**](../Model/GetSsnitResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoter()`

```php
getVoter($id, $full_name, $is_new_id): object
```

Voter ID Lookup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$id = 6423007613;
$full_name = "John Doe";
$is_new_id = True;

try {
    $result = $dojah->ghKyc->getVoter(
        id: $id, 
        full_name: $full_name, 
        is_new_id: $is_new_id
    );
} catch (\Exception $e) {
    echo 'Exception when calling GhKycApi->getVoter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **full_name** | **string**|  | [optional] |
| **is_new_id** | **bool**|  | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
