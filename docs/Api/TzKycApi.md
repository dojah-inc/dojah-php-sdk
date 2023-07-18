# Dojah\TzKycApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNin()**](TzKycApi.md#getNin) | **GET** /api/v1/tz/kyc/nin | Lookup TZ NIN |


## `getNin()`

```php
getNin($app_id, $first_name, $last_name, $date_of_birth, $mothers_last_name, $mothers_first_name): object
```

Lookup TZ NIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";
$first_name = "khafsa";
$last_name = "mohammed";
$date_of_birth = "1994-01-11";
$mothers_last_name = "zulekha";
$mothers_first_name = "kassim";

try {
    $result = $dojah->tzKyc->getNin(
        app_id: $app_id, 
        first_name: $first_name, 
        last_name: $last_name, 
        date_of_birth: $date_of_birth, 
        mothers_last_name: $mothers_last_name, 
        mothers_first_name: $mothers_first_name
    );
} catch (\Exception $e) {
    echo 'Exception when calling TzKycApi->getNin: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |
| **mothers_last_name** | **string**|  | [optional] |
| **mothers_first_name** | **string**|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
