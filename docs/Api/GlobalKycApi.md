# Dojah\GlobalKycApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**caEkyc()**](GlobalKycApi.md#caEkyc) | **GET** /api/v1/ca/kyc | Canada Ekyc |
| [**getUsSsn()**](GlobalKycApi.md#getUsSsn) | **GET** /api/v1/us/kyc | US SSN |
| [**ukTwoPlusTwo()**](GlobalKycApi.md#ukTwoPlusTwo) | **GET** /api/v1/uk/kyc | UK 2+2 |


## `caEkyc()`

```php
caEkyc($app_id, $country, $first_name, $last_name, $street_name, $date_of_birth, $house_number, $post_code): object
```

Canada Ekyc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";
$country = "GBR";
$first_name = "Tobi";
$last_name = "Ololade";
$street_name = "Street 1";
$date_of_birth = "1992-05-18";
$house_number = 25;
$post_code = 1234;

try {
    $result = $dojah->globalKyc->caEkyc(
        app_id: $app_id, 
        country: $country, 
        first_name: $first_name, 
        last_name: $last_name, 
        street_name: $street_name, 
        date_of_birth: $date_of_birth, 
        house_number: $house_number, 
        post_code: $post_code
    );
} catch (\Exception $e) {
    echo 'Exception when calling GlobalKycApi->caEkyc: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |
| **country** | **string**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **street_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |
| **house_number** | **int**|  | [optional] |
| **post_code** | **int**|  | [optional] |

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

## `getUsSsn()`

```php
getUsSsn($app_id, $country, $first_name, $last_name, $street_name, $date_of_birth, $house_number, $post_code): object
```

US SSN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";
$country = "GBR";
$first_name = "Tobi";
$last_name = "Ololade";
$street_name = "Street 1";
$date_of_birth = "1992-05-18";
$house_number = 25;
$post_code = 1234;

try {
    $result = $dojah->globalKyc->getUsSsn(
        app_id: $app_id, 
        country: $country, 
        first_name: $first_name, 
        last_name: $last_name, 
        street_name: $street_name, 
        date_of_birth: $date_of_birth, 
        house_number: $house_number, 
        post_code: $post_code
    );
} catch (\Exception $e) {
    echo 'Exception when calling GlobalKycApi->getUsSsn: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |
| **country** | **string**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **street_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |
| **house_number** | **int**|  | [optional] |
| **post_code** | **int**|  | [optional] |

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

## `ukTwoPlusTwo()`

```php
ukTwoPlusTwo($app_id, $country, $first_name, $last_name, $street_name, $date_of_birth, $house_number, $post_code): object
```

UK 2+2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";
$country = "GBR";
$first_name = "Tobi";
$last_name = "Ololade";
$street_name = "Street 1";
$date_of_birth = "1992-05-18";
$house_number = 25;
$post_code = 1234;

try {
    $result = $dojah->globalKyc->ukTwoPlusTwo(
        app_id: $app_id, 
        country: $country, 
        first_name: $first_name, 
        last_name: $last_name, 
        street_name: $street_name, 
        date_of_birth: $date_of_birth, 
        house_number: $house_number, 
        post_code: $post_code
    );
} catch (\Exception $e) {
    echo 'Exception when calling GlobalKycApi->ukTwoPlusTwo: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |
| **country** | **string**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **street_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |
| **house_number** | **int**|  | [optional] |
| **post_code** | **int**|  | [optional] |

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
