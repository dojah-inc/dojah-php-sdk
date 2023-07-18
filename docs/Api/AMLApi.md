# Dojah\AMLApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getScreeningInfo()**](AMLApi.md#getScreeningInfo) | **GET** /api/v1/aml/screening/info | Get AML Info |
| [**screenAml()**](AMLApi.md#screenAml) | **POST** /api/v1/aml/screening/platform | AML Screening |


## `getScreeningInfo()`

```php
getScreeningInfo($profile_id): object
```

Get AML Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Appid: YOUR_APPID,
);

$profile_id = "WC7117469";

try {
    $result = $dojah->aML->getScreeningInfo(
        profile_id: $profile_id
    );
} catch (\Exception $e) {
    echo 'Exception when calling AMLApi->getScreeningInfo: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | [optional] |

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

## `screenAml()`

```php
screenAml($aml_screen_aml_request): \Dojah\Model\AmlScreenAmlResponse
```

AML Screening

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Appid: YOUR_APPID,
);

$first_name = "Tinubu ";
$last_name = "Bola";
$date_of_birth = "1997-08-18";
$name_query_match_threshold = "80";

try {
    $result = $dojah->aML->screenAml(
        first_name: $first_name, 
        last_name: $last_name, 
        date_of_birth: $date_of_birth, 
        name_query_match_threshold: $name_query_match_threshold
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AMLApi->screenAml: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **aml_screen_aml_request** | [**\Dojah\Model\AmlScreenAmlRequest**](../Model/AmlScreenAmlRequest.md)|  | |

### Return type

[**\Dojah\Model\AmlScreenAmlResponse**](../Model/AmlScreenAmlResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
