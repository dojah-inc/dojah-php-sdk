# Dojah\DocumentAnalysisApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyzeDocument()**](DocumentAnalysisApi.md#analyzeDocument) | **POST** /api/v1/document/analysis | KYC - Document Analysis |


## `analyzeDocument()`

```php
analyzeDocument($app_id): \Dojah\Model\AnalyzeDocumentResponse
```

KYC - Document Analysis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
);

$app_id = "{{app_id}}";

try {
    $result = $dojah->documentAnalysis->analyzeDocument(
        app_id: $app_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling DocumentAnalysisApi->analyzeDocument: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\AnalyzeDocumentResponse**](../Model/AnalyzeDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
