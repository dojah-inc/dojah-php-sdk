# Dojah\FraudApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmailReputation()**](FraudApi.md#getEmailReputation) | **GET** /api/v1/kyc/email | Email Reputation |
| [**getIpReputation()**](FraudApi.md#getIpReputation) | **GET** /api/v1/fraud/ip | IP Reputation |
| [**screenPhone()**](FraudApi.md#screenPhone) | **GET** /api/v1/fraud/phone | Phone Screening |
| [**screenUser()**](FraudApi.md#screenUser) | **GET** /api/v1/fraud/user | User Screening |


## `getEmailReputation()`

```php
getEmailReputation($email): \Dojah\Model\FraudGetEmailReputationResponse
```

Email Reputation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$email = "johndoe@gmail.com";

try {
    $result = $dojah->fraud->getEmailReputation(
        email: $email
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FraudApi->getEmailReputation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\FraudGetEmailReputationResponse**](../Model/FraudGetEmailReputationResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth), [noauthAuth](../../README.md#noauthAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIpReputation()`

```php
getIpReputation($ip_address): \Dojah\Model\FraudGetIpReputationResponse
```

IP Reputation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$ip_address = "102.215.56.170";

try {
    $result = $dojah->fraud->getIpReputation(
        ip_address: $ip_address
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FraudApi->getIpReputation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_address** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\FraudGetIpReputationResponse**](../Model/FraudGetIpReputationResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `screenPhone()`

```php
screenPhone($phone_number): \Dojah\Model\FraudScreenPhoneResponse
```

Phone Screening

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$phone_number = 2348068810228;

try {
    $result = $dojah->fraud->screenPhone(
        phone_number: $phone_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FraudApi->screenPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\FraudScreenPhoneResponse**](../Model/FraudScreenPhoneResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `screenUser()`

```php
screenUser($first_name, $last_name, $date_of_birth, $email, $phone, $ip_address): \Dojah\Model\FraudScreenUserResponse
```

User Screening

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$first_name = "Robert";
$last_name = "Morris";
$date_of_birth = "1986-11-12";
$email = "andre.little@moore.com";
$phone = "001-640-858-2058";
$ip_address = "116.7.209.8";

try {
    $result = $dojah->fraud->screenUser(
        first_name: $first_name, 
        last_name: $last_name, 
        date_of_birth: $date_of_birth, 
        email: $email, 
        phone: $phone, 
        ip_address: $ip_address
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling FraudApi->screenUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |
| **date_of_birth** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **phone** | **string**|  | [optional] |
| **ip_address** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\FraudScreenUserResponse**](../Model/FraudScreenUserResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
