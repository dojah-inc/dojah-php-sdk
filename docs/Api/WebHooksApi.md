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
deleteWebhook($app_id): \Dojah\Model\DeleteWebhookResponse
```

Delete Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";

try {
    $result = $dojah->webHooks->deleteWebhook(
        app_id: $app_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WebHooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\DeleteWebhookResponse**](../Model/DeleteWebhookResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooks()`

```php
getWebhooks($app_id): \Dojah\Model\GetWebhooksResponse
```

Fetch All Webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";

try {
    $result = $dojah->webHooks->getWebhooks(
        app_id: $app_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WebHooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetWebhooksResponse**](../Model/GetWebhooksResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifyWebhook()`

```php
notifyWebhook($notify_webhook_request, $app_id): \Dojah\Model\NotifyWebhookResponse
```

Post Hook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$subject = "kyc_widget";
$data = [
        "stuff" => "12345678",
    ];
$app_id = "{{app_id}}";

try {
    $result = $dojah->webHooks->notifyWebhook(
        subject: $subject, 
        data: $data, 
        app_id: $app_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WebHooksApi->notifyWebhook: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notify_webhook_request** | [**\Dojah\Model\NotifyWebhookRequest**](../Model/NotifyWebhookRequest.md)|  | |
| **app_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\NotifyWebhookResponse**](../Model/NotifyWebhookResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeService()`

```php
subscribeService($subscribe_service_request, $app_id): \Dojah\Model\SubscribeServiceResponse
```

Subscribe to service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$webhook = "https://webhook.site/bc33b503-bf38-4b65-88e5-349d86378d4a";
$service = "sms";
$app_id = "{{app_id}}";

try {
    $result = $dojah->webHooks->subscribeService(
        webhook: $webhook, 
        service: $service, 
        app_id: $app_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WebHooksApi->subscribeService: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribe_service_request** | [**\Dojah\Model\SubscribeServiceRequest**](../Model/SubscribeServiceRequest.md)|  | |
| **app_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\SubscribeServiceResponse**](../Model/SubscribeServiceResponse.md)

### Authorization

[noauthAuth](../../README.md#noauthAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
