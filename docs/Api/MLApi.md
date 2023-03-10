# Dojah\MLApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDocumentAnalysis()**](MLApi.md#getDocumentAnalysis) | **POST** /v1/document/analysis/dl | Document Analysis Drivers License |
| [**getGenericOcrText()**](MLApi.md#getGenericOcrText) | **POST** /v1/ml/ocr/generic | Generic OCR Service |
| [**getOcrText()**](MLApi.md#getOcrText) | **POST** /v1/ml/ocr | BVN Ocr |
| [**verifyPhotoIdWithSelfie()**](MLApi.md#verifyPhotoIdWithSelfie) | **POST** /v1/kyc/photoid/verify | KYC - Selfie Photo ID Verification |


## `getDocumentAnalysis()`

```php
getDocumentAnalysis($get_document_analysis_request): \Dojah\Model\GetDocumentAnalysisResponse
```

Document Analysis Drivers License

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

$apiInstance = new Dojah\Api\MLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$get_document_analysis_request = [
        "img" => "<base64 encoded image>",
    ];

try {
    $result = $apiInstance->getDocumentAnalysis(
        get_document_analysis_request: $get_document_analysis_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling MLApi->getDocumentAnalysis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_document_analysis_request** | [**\Dojah\Model\GetDocumentAnalysisRequest**](../Model/GetDocumentAnalysisRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\GetDocumentAnalysisResponse**](../Model/GetDocumentAnalysisResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGenericOcrText()`

```php
getGenericOcrText($get_generic_ocr_text_request): \Dojah\Model\GetGenericOcrTextResponse
```

Generic OCR Service

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

$apiInstance = new Dojah\Api\MLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$get_generic_ocr_text_request = [
        "img" => "<base64 encoded image>",
    ];

try {
    $result = $apiInstance->getGenericOcrText(
        get_generic_ocr_text_request: $get_generic_ocr_text_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling MLApi->getGenericOcrText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_generic_ocr_text_request** | [**\Dojah\Model\GetGenericOcrTextRequest**](../Model/GetGenericOcrTextRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\GetGenericOcrTextResponse**](../Model/GetGenericOcrTextResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOcrText()`

```php
getOcrText($get_ocr_text_request): \Dojah\Model\GetOcrTextResponse
```

BVN Ocr

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

$apiInstance = new Dojah\Api\MLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$get_ocr_text_request = [
        "image" => "<base64 encoded image>",
    ];

try {
    $result = $apiInstance->getOcrText(
        get_ocr_text_request: $get_ocr_text_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling MLApi->getOcrText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_ocr_text_request** | [**\Dojah\Model\GetOcrTextRequest**](../Model/GetOcrTextRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\GetOcrTextResponse**](../Model/GetOcrTextResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyPhotoIdWithSelfie()`

```php
verifyPhotoIdWithSelfie($verify_photo_id_with_selfie_request): \Dojah\Model\VerifyPhotoIdWithSelfieResponse
```

KYC - Selfie Photo ID Verification

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

$apiInstance = new Dojah\Api\MLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$verify_photo_id_with_selfie_request = [
        "selfie_image" => "<base64 encoded image>",
        "photoid_image" => "<base64 encoded image>",
    ];

try {
    $result = $apiInstance->verifyPhotoIdWithSelfie(
        verify_photo_id_with_selfie_request: $verify_photo_id_with_selfie_request
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling MLApi->verifyPhotoIdWithSelfie: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verify_photo_id_with_selfie_request** | [**\Dojah\Model\VerifyPhotoIdWithSelfieRequest**](../Model/VerifyPhotoIdWithSelfieRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\VerifyPhotoIdWithSelfieResponse**](../Model/VerifyPhotoIdWithSelfieResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
