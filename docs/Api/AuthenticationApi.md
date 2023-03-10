# Dojah\AuthenticationApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSenderId()**](AuthenticationApi.md#getSenderId) | **GET** /api/v1/messaging/sender_ids | Messaging - Get Sender IDs |
| [**getSmsStatus()**](AuthenticationApi.md#getSmsStatus) | **GET** /v1/messaging/sms/get_status | Messaging - Get SMS Status |
| [**requestSenderId()**](AuthenticationApi.md#requestSenderId) | **POST** /api/v1/messaging/sender_id | Messaging - Request Sender ID |
| [**sendOtp()**](AuthenticationApi.md#sendOtp) | **POST** /v1/messaging/otp | Messaging - Send OTP |
| [**sendSms()**](AuthenticationApi.md#sendSms) | **POST** /api/v1/messaging/sms | Messaging - Send SMS |
| [**validateOtp()**](AuthenticationApi.md#validateOtp) | **GET** /v1/messaging/otp/validate | Messaging - Validate OTP |


## `getSenderId()`

```php
getSenderId(): \Dojah\Model\GetSenderIdResponse
```

Messaging - Get Sender IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->getSenderId();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->getSenderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\GetSenderIdResponse**](../Model/GetSenderIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsStatus()`

```php
getSmsStatus($message_id): \Dojah\Model\GetSmsStatusResponse
```

Messaging - Get SMS Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$message_id = "54818c8a-4aed-4e5f-b846-8274fd4e0bbd";

try {
    $result = $apiInstance->getSmsStatus(
        message_id: $message_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->getSmsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetSmsStatusResponse**](../Model/GetSmsStatusResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestSenderId()`

```php
requestSenderId($request_sender_id_request): \Dojah\Model\RequestSenderIdResponse
```

Messaging - Request Sender ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$request_sender_id_request = [
        "sender_id" => "Dojah",
    ];

try {
    $result = $apiInstance->requestSenderId(
        request_sender_id_request: $request_sender_id_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->requestSenderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_sender_id_request** | [**\Dojah\Model\RequestSenderIdRequest**](../Model/RequestSenderIdRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\RequestSenderIdResponse**](../Model/RequestSenderIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendOtp()`

```php
sendOtp($send_otp_request): \Dojah\Model\SendOtpResponse
```

Messaging - Send OTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$send_otp_request = [
        "destination" => "08068810228",
        "length" => 6,
        "channel" => "sms",
        "sender_id" => "Dojah",
        "priority" => True,
    ];

try {
    $result = $apiInstance->sendOtp(
        send_otp_request: $send_otp_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->sendOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_otp_request** | [**\Dojah\Model\SendOtpRequest**](../Model/SendOtpRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\SendOtpResponse**](../Model/SendOtpResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSms()`

```php
sendSms($send_sms_request): \Dojah\Model\SendSmsResponse
```

Messaging - Send SMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$send_sms_request = [
        "destination" => "08068810228",
        "message" => "Checking to see if you are Okay",
        "channel" => "whatsapp",
        "sender_id" => "Kedesa",
    ];

try {
    $result = $apiInstance->sendSms(
        send_sms_request: $send_sms_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->sendSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_sms_request** | [**\Dojah\Model\SendSmsRequest**](../Model/SendSmsRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\SendSmsResponse**](../Model/SendSmsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateOtp()`

```php
validateOtp($reference_id, $code): \Dojah\Model\ValidateOtpResponse
```

Messaging - Validate OTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$reference_id = "a89e4b64-367f-414f-a189-1800bc364b05";
$code = 81974;

try {
    $result = $apiInstance->validateOtp(
        reference_id: $reference_id, 
        code: $code
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->validateOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**|  | [optional] |
| **code** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\ValidateOtpResponse**](../Model/ValidateOtpResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
