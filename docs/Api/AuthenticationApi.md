# Dojah\AuthenticationApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSenderId()**](AuthenticationApi.md#getSenderId) | **GET** /api/v1/messaging/sender_ids | Messaging - Get Sender IDs |
| [**getSmsStatus()**](AuthenticationApi.md#getSmsStatus) | **GET** /v1/messaging/sms/get_status | Messaging - Get SMS Status |
| [**requestSenderId()**](AuthenticationApi.md#requestSenderId) | **POST** /api/v1/messaging/sender_id | Messaging - Request Sender ID |
| [**sendOtp()**](AuthenticationApi.md#sendOtp) | **POST** /api/v1/messaging/otp | Messaging - Send OTP |
| [**sendSms()**](AuthenticationApi.md#sendSms) | **POST** /api/v1/messaging/sms | Messaging - Send SMS |
| [**validateOtp()**](AuthenticationApi.md#validateOtp) | **GET** /api/v1/messaging/otp/validate | Messaging - Validate OTP |


## `getSenderId()`

```php
getSenderId(): \Dojah\Model\GetSenderIdResponse
```

Messaging - Get Sender IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);


try {
    $result = $dojah->authentication->getSenderId();
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

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$message_id = "54818c8a-4aed-4e5f-b846-8274fd4e0bbd";

try {
    $result = $dojah->authentication->getSmsStatus(
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

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$sender_id = "Dojah";

try {
    $result = $dojah->authentication->requestSenderId(
        sender_id: $sender_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->requestSenderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_sender_id_request** | [**\Dojah\Model\RequestSenderIdRequest**](../Model/RequestSenderIdRequest.md)|  | |

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
sendOtp($authentication_send_otp_request): \Dojah\Model\AuthenticationSendOtpResponse
```

Messaging - Send OTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$destination = "08068810228";
$length = 6;
$channel = "sms";
$sender_id = "Dojah";
$priority = True;

try {
    $result = $dojah->authentication->sendOtp(
        destination: $destination, 
        length: $length, 
        channel: $channel, 
        sender_id: $sender_id, 
        priority: $priority
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->sendOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authentication_send_otp_request** | [**\Dojah\Model\AuthenticationSendOtpRequest**](../Model/AuthenticationSendOtpRequest.md)|  | |

### Return type

[**\Dojah\Model\AuthenticationSendOtpResponse**](../Model/AuthenticationSendOtpResponse.md)

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

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$destination = "08068810228";
$message = "Checking to see if you are Okay";
$channel = "whatsapp";
$sender_id = "Kedesa";

try {
    $result = $dojah->authentication->sendSms(
        destination: $destination, 
        message: $message, 
        channel: $channel, 
        sender_id: $sender_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->sendSms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_sms_request** | [**\Dojah\Model\SendSmsRequest**](../Model/SendSmsRequest.md)|  | |

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
validateOtp($reference_id, $code): \Dojah\Model\AuthenticationValidateOtpResponse
```

Messaging - Validate OTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$reference_id = "a89e4b64-367f-414f-a189-1800bc364b05";
$code = 81974;

try {
    $result = $dojah->authentication->validateOtp(
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

[**\Dojah\Model\AuthenticationValidateOtpResponse**](../Model/AuthenticationValidateOtpResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
