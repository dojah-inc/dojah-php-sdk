# Dojah\WebHooksApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWebhook()**](WebHooksApi.md#deleteWebhook) | **DELETE** /api/v1/webhook/delete | Delete Webhook |
| [**getWebhooks()**](WebHooksApi.md#getWebhooks) | **GET** /api/v1/webhook/fetch | Fetch All Webhooks |
| [**notifyWebhook()**](WebHooksApi.md#notifyWebhook) | **POST** /api/v1/webhook/notify | Post Hook |
| [**subscribeService()**](WebHooksApi.md#subscribeService) | **POST** /api/v1/webhook/subscribe | Subscribe to service |


## `deleteWebhook()`

```php
deleteWebhook(): \Dojah\Model\DeleteWebhookResponse
```

Delete Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);


try {
    $result = $dojah->webHooks->deleteWebhook();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WebHooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\DeleteWebhookResponse**](../Model/DeleteWebhookResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooks()`

```php
getWebhooks(): \Dojah\Model\GetWebhooksResponse
```

Fetch All Webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);


try {
    $result = $dojah->webHooks->getWebhooks();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WebHooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\GetWebhooksResponse**](../Model/GetWebhooksResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifyWebhook()`

```php
notifyWebhook($notify_webhook_request): \Dojah\Model\NotifyWebhookResponse
```

Post Hook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$subject = "kyc_widget";
$data = [
        "stuff" => "12345678",
    ];

try {
    $result = $dojah->webHooks->notifyWebhook(
        subject: $subject, 
        data: $data
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WebHooksApi->notifyWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notify_webhook_request** | [**\Dojah\Model\NotifyWebhookRequest**](../Model/NotifyWebhookRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\NotifyWebhookResponse**](../Model/NotifyWebhookResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeService()`

```php
subscribeService($subscribe_service_request): \Dojah\Model\SubscribeServiceResponse
```

Subscribe to service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$webhook = "https://webhook.site/c587711d-d9f2-4982-9107-b1f9789a5dfe";
$service = "kyc_widget";

try {
    $result = $dojah->webHooks->subscribeService(
        webhook: $webhook, 
        service: $service
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WebHooksApi->subscribeService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribe_service_request** | [**\Dojah\Model\SubscribeServiceRequest**](../Model/SubscribeServiceRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\SubscribeServiceResponse**](../Model/SubscribeServiceResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
