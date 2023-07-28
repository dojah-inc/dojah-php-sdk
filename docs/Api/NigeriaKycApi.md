# Dojah\NigeriaKycApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBasicBvn()**](NigeriaKycApi.md#getBasicBvn) | **GET** /api/v1/kyc/bvn | KYC - Get Basic BVN Info |
| [**getBasicBvn1()**](NigeriaKycApi.md#getBasicBvn1) | **GET** /api/v1/kyc/bvn/basic | KYC - Lookup BVN Basic 1 |
| [**getBasicPhoneNumber()**](NigeriaKycApi.md#getBasicPhoneNumber) | **GET** /api/v1/kyc/phone_number/basic | KYC Lookup Phone Number Basic |
| [**getDriversLicense()**](NigeriaKycApi.md#getDriversLicense) | **GET** /api/v1/kyc/dl | KYC - Get Drivers License Info |
| [**getNin()**](NigeriaKycApi.md#getNin) | **GET** /api/v1/kyc/nin | KYC - Get NIN Info |
| [**getNormalBvn()**](NigeriaKycApi.md#getNormalBvn) | **GET** /api/v1/kyc/bvn/full | KYC - Lookup BVN Normal |
| [**getNuban()**](NigeriaKycApi.md#getNuban) | **GET** /api/v1/kyc/nuban | KYC - Get NUBAN Information |
| [**getPassport()**](NigeriaKycApi.md#getPassport) | **GET** /api/v1/kyc/passport | KYC - Passport |
| [**getPhoneNumber()**](NigeriaKycApi.md#getPhoneNumber) | **GET** /api/v1/kyc/phone_number | KYC - Lookup Phone Number |
| [**getPremiumBvn()**](NigeriaKycApi.md#getPremiumBvn) | **GET** /api/v1/kyc/bvn/advance | KYC - Lookup BVN Premium |
| [**getVnin()**](NigeriaKycApi.md#getVnin) | **GET** /api/v1/kyc/vnin | Lookup VNIN |


## `getBasicBvn()`

```php
getBasicBvn($bvn): \Dojah\Model\ValidateBvnResponse
```

KYC - Get Basic BVN Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$bvn = 22468537919;

try {
    $result = $dojah->nigeriaKyc->getBasicBvn(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getBasicBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\ValidateBvnResponse**](../Model/ValidateBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicBvn1()`

```php
getBasicBvn1($bvn): \Dojah\Model\GetBasicBvnResponse
```

KYC - Lookup BVN Basic 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$bvn = 22621998885;

try {
    $result = $dojah->nigeriaKyc->getBasicBvn1(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getBasicBvn1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetBasicBvnResponse**](../Model/GetBasicBvnResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicPhoneNumber()`

```php
getBasicPhoneNumber($phone_number): object
```

KYC Lookup Phone Number Basic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$phone_number = 9131377829;

try {
    $result = $dojah->nigeriaKyc->getBasicPhoneNumber(
        phone_number: $phone_number
    );
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getBasicPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number** | **int**|  | [optional] |

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

## `getDriversLicense()`

```php
getDriversLicense($license_number): \Dojah\Model\GetKycDriversLicenseResponse
```

KYC - Get Drivers License Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$license_number = "FKJ49409AB13";

try {
    $result = $dojah->nigeriaKyc->getDriversLicense(
        license_number: $license_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getDriversLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **license_number** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetKycDriversLicenseResponse**](../Model/GetKycDriversLicenseResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNin()`

```php
getNin($nin): \Dojah\Model\NigeriaKycGetNinResponse
```

KYC - Get NIN Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$nin = 55648152772;

try {
    $result = $dojah->nigeriaKyc->getNin(
        nin: $nin
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getNin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nin** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\NigeriaKycGetNinResponse**](../Model/NigeriaKycGetNinResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNormalBvn()`

```php
getNormalBvn($bvn): \Dojah\Model\GetFullBvnResponse
```

KYC - Lookup BVN Normal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$bvn = 22342291445;

try {
    $result = $dojah->nigeriaKyc->getNormalBvn(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getNormalBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetFullBvnResponse**](../Model/GetFullBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNuban()`

```php
getNuban($bank_code, $account_number): \Dojah\Model\GetNubanResponse
```

KYC - Get NUBAN Information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$bank_code = 58;
$account_number = 11223344;

try {
    $result = $dojah->nigeriaKyc->getNuban(
        bank_code: $bank_code, 
        account_number: $account_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getNuban: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bank_code** | **int**|  | [optional] |
| **account_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetNubanResponse**](../Model/GetNubanResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPassport()`

```php
getPassport($passport_number, $surname): \Dojah\Model\GetKycPassportResponse
```

KYC - Passport

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$passport_number = "B00671500";
$surname = "adekanmi";

try {
    $result = $dojah->nigeriaKyc->getPassport(
        passport_number: $passport_number, 
        surname: $surname
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getPassport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **passport_number** | **string**|  | [optional] |
| **surname** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetKycPassportResponse**](../Model/GetKycPassportResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhoneNumber()`

```php
getPhoneNumber($phone_number): \Dojah\Model\GetPhoneNumberResponse
```

KYC - Lookup Phone Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$phone_number = 8034628633;

try {
    $result = $dojah->nigeriaKyc->getPhoneNumber(
        phone_number: $phone_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetPhoneNumberResponse**](../Model/GetPhoneNumberResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth), [noauthAuth](../../README.md#noauthAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPremiumBvn()`

```php
getPremiumBvn($bvn): \Dojah\Model\GetPremiumBvnResponse
```

KYC - Lookup BVN Premium

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$bvn = 22200508254;

try {
    $result = $dojah->nigeriaKyc->getPremiumBvn(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getPremiumBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetPremiumBvnResponse**](../Model/GetPremiumBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVnin()`

```php
getVnin($vnin): \Dojah\Model\GetVninResponse
```

Lookup VNIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    apiKey: "APPID",
);

$vnin = "LC829995256998RD";

try {
    $result = $dojah->nigeriaKyc->getVnin(
        vnin: $vnin
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling NigeriaKycApi->getVnin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vnin** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetVninResponse**](../Model/GetVninResponse.md)

### Authorization

[appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
