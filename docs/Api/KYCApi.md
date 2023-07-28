# Dojah\KYCApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkLiveness()**](KYCApi.md#checkLiveness) | **POST** /api/v1/ml/liveness | Liveness Check |
| [**getAccounts()**](KYCApi.md#getAccounts) | **GET** /api/v1/kyc/accounts | KYC - Fetch Accounts |
| [**getAddressVerification()**](KYCApi.md#getAddressVerification) | **GET** /api/v1/kyc/address | Fetch Address Verification Data |
| [**getBvnFromNuban()**](KYCApi.md#getBvnFromNuban) | **GET** /api/v1/kyc/nuban/bvn | Lookup BVN from NUBAN |
| [**getVin()**](KYCApi.md#getVin) | **GET** /api/v1/kyc/vin | KYC - Get VIN |
| [**submitAddress()**](KYCApi.md#submitAddress) | **POST** /api/v1/kyc/address | Submit Address |


## `checkLiveness()`

```php
checkLiveness($kyc_check_liveness_request): object
```

Liveness Check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$image = "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";

try {
    $result = $dojah->kYC->checkLiveness(
        image: $image
    );
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->checkLiveness: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kyc_check_liveness_request** | [**\Dojah\Model\KycCheckLivenessRequest**](../Model/KycCheckLivenessRequest.md)|  | |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccounts()`

```php
getAccounts($bvn): object
```

KYC - Fetch Accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$bvn = "22342291445 ";

try {
    $result = $dojah->kYC->getAccounts(
        bvn: $bvn
    );
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressVerification()`

```php
getAddressVerification($reference_id): object
```

Fetch Address Verification Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$reference_id = "69e10264-4b90-64fe-b4b7-c9dddafd0241";

try {
    $result = $dojah->kYC->getAddressVerification(
        reference_id: $reference_id
    );
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getAddressVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBvnFromNuban()`

```php
getBvnFromNuban($bank_code, $account_number): object
```

Lookup BVN from NUBAN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$bank_code = 57;
$account_number = 2174879334;

try {
    $result = $dojah->kYC->getBvnFromNuban(
        bank_code: $bank_code, 
        account_number: $account_number
    );
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getBvnFromNuban: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bank_code** | **int**|  | [optional] |
| **account_number** | **int**|  | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVin()`

```php
getVin($vin): \Dojah\Model\GetVinResponse
```

KYC - Get VIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$vin = "90F5B20205096041114";

try {
    $result = $dojah->kYC->getVin(
        vin: $vin
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getVin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vin** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetVinResponse**](../Model/GetVinResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitAddress()`

```php
submitAddress($kyc_submit_address_request): \Dojah\Model\KycSubmitAddressResponse
```

Submit Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$street = "Aso Rock Villa";
$lga = "Maitamia";
$state = "FCT";
$landmark = "Big Rock";
$first_name = "";
$last_name = "";
$middle_name = "";
$dob = "";
$gender = "";
$mobile = "";

try {
    $result = $dojah->kYC->submitAddress(
        street: $street, 
        lga: $lga, 
        state: $state, 
        landmark: $landmark, 
        first_name: $first_name, 
        last_name: $last_name, 
        middle_name: $middle_name, 
        dob: $dob, 
        gender: $gender, 
        mobile: $mobile
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->submitAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kyc_submit_address_request** | [**\Dojah\Model\KycSubmitAddressRequest**](../Model/KycSubmitAddressRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\KycSubmitAddressResponse**](../Model/KycSubmitAddressResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
