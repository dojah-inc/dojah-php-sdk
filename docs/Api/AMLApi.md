# Dojah\AMLApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getScreeningInfo()**](AMLApi.md#getScreeningInfo) | **GET** /v1/aml/screening/info | Get AML Info |
| [**screenAml()**](AMLApi.md#screenAml) | **POST** /api/v1/aml/screening | AML Screening |


## `getScreeningInfo()`

```php
getScreeningInfo($reference_id): \Dojah\Model\GetScreeningInfoResponse
```

Get AML Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$reference_id = "c574a3c8-dc27-4013-8bbc-462e7ed87d55";

try {
    $result = $dojah->aML->getScreeningInfo(
        reference_id: $reference_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AMLApi->getScreeningInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetScreeningInfoResponse**](../Model/GetScreeningInfoResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `screenAml()`

```php
screenAml($screen_aml_request): \Dojah\Model\ScreenAmlResponse
```

AML Screening

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$first_name = "Obama ";
$last_name = " ";
$date_of_birth = "1997-08-18";

try {
    $result = $dojah->aML->screenAml(
        first_name: $first_name, 
        last_name: $last_name, 
        date_of_birth: $date_of_birth
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AMLApi->screenAml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **screen_aml_request** | [**\Dojah\Model\ScreenAmlRequest**](../Model/ScreenAmlRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\ScreenAmlResponse**](../Model/ScreenAmlResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
