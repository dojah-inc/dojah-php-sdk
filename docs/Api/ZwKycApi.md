# Dojah\ZwKycApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkCredit()**](ZwKycApi.md#checkCredit) | **GET** /api/v1/zw/kyc/fcb | Credit Check |
| [**verifyId()**](ZwKycApi.md#verifyId) | **GET** /api/v1/zw/kyc/nin | National ID Verification |


## `checkCredit()`

```php
checkCredit($id_number, $name, $surname, $gender, $dob, $marital_status, $mobile_number): \Dojah\Model\ZwKycCheckCreditResponse
```

Credit Check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$id_number = "45190221E45";
$name = "CHIMUNDEGE";
$surname = "CHIMUNDEGE";
$gender = "F";
$dob = "1994-04-03";
$marital_status = "M";
$mobile_number = 26424257383;

try {
    $result = $dojah->zwKyc->checkCredit(
        id_number: $id_number, 
        name: $name, 
        surname: $surname, 
        gender: $gender, 
        dob: $dob, 
        marital_status: $marital_status, 
        mobile_number: $mobile_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling ZwKycApi->checkCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_number** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **surname** | **string**|  | [optional] |
| **gender** | **string**|  | [optional] |
| **dob** | **string**|  | [optional] |
| **marital_status** | **string**|  | [optional] |
| **mobile_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\ZwKycCheckCreditResponse**](../Model/ZwKycCheckCreditResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyId()`

```php
verifyId($id): \Dojah\Model\ZwKycVerifyIdResponse
```

National ID Verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$id = "45190221E45";

try {
    $result = $dojah->zwKyc->verifyId(
        id: $id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling ZwKycApi->verifyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\ZwKycVerifyIdResponse**](../Model/ZwKycVerifyIdResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
