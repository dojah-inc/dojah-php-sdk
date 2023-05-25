# Dojah\KYCApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyzeDocument()**](KYCApi.md#analyzeDocument) | **POST** /api/v1/document/analysis | KYC - Document Analysis |
| [**getBasicBvn()**](KYCApi.md#getBasicBvn) | **GET** /api/v1/kyc/bvn/basic | KYC - Get Basic BVN Info |
| [**getBasicPhoneNumber()**](KYCApi.md#getBasicPhoneNumber) | **GET** /v1/kyc/phone_number/basic | KYC Lookup Phone Number Basic |
| [**getDriversLicense()**](KYCApi.md#getDriversLicense) | **GET** /api/v1/kyc/dl | KYC - Get Drivers License Info |
| [**getEmailReputation()**](KYCApi.md#getEmailReputation) | **GET** /v1/kyc/email | KYC - Get Email Reputation |
| [**getFullBvn()**](KYCApi.md#getFullBvn) | **GET** /api/v1/kyc/bvn/full | KYC - Lookup BVN Basic |
| [**getNuban()**](KYCApi.md#getNuban) | **GET** /api/v1/kyc/nuban | KYC - Get NUBAN Information |
| [**getPassport()**](KYCApi.md#getPassport) | **GET** /api/v1/kyc/passport | KYC - Passport |
| [**getPhoneNumber()**](KYCApi.md#getPhoneNumber) | **GET** /api/v1/kyc/phone_number | KYC - Lookup Phone Number |
| [**getPremiumBvn()**](KYCApi.md#getPremiumBvn) | **GET** /api/v1/kyc/bvn/advance | KYC - Lookup BVN Premium |
| [**getVIN()**](KYCApi.md#getVIN) | **GET** /api/v1/kyc/vin | KYC - Get VIN |
| [**getVnin()**](KYCApi.md#getVnin) | **GET** /api/v1/kyc/vnin | Lookup VNIN |
| [**validateBvn()**](KYCApi.md#validateBvn) | **GET** /api/v1/kyc/bvn | KYC - Validate BVN |
| [**verifyAge()**](KYCApi.md#verifyAge) | **GET** /v1/kyc/age_verification | KYC - Age Verification |
| [**verifySelfieBvn()**](KYCApi.md#verifySelfieBvn) | **POST** /v1/kyc/bvn/verify | KYC - Selfie BVN Verificatoin |
| [**verifySelfieNin()**](KYCApi.md#verifySelfieNin) | **POST** /v1/kyc/nin/verify | KYC - Selfie NIN Verification |


## `analyzeDocument()`

```php
analyzeDocument(): \Dojah\Model\AnalyzeDocumentResponse
```

KYC - Document Analysis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);


try {
    $result = $dojah->kYC->analyzeDocument();
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->analyzeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Dojah\Model\AnalyzeDocumentResponse**](../Model/AnalyzeDocumentResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicBvn()`

```php
getBasicBvn($bvn): \Dojah\Model\GetBasicBvnResponse
```

KYC - Get Basic BVN Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$bvn = 22468537919;

try {
    $result = $dojah->kYC->getBasicBvn(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getBasicBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetBasicBvnResponse**](../Model/GetBasicBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBasicPhoneNumber()`

```php
getBasicPhoneNumber($phone_number): \Dojah\Model\GetBasicPhoneNumberResponse
```

KYC Lookup Phone Number Basic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$phone_number = 8068810228;

try {
    $result = $dojah->kYC->getBasicPhoneNumber(
        phone_number: $phone_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getBasicPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetBasicPhoneNumberResponse**](../Model/GetBasicPhoneNumberResponse.md)

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
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$license_number = "FKJ49409AB13";

try {
    $result = $dojah->kYC->getDriversLicense(
        license_number: $license_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getDriversLicense: ', $e->getMessage(), PHP_EOL;
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

## `getEmailReputation()`

```php
getEmailReputation($email): \Dojah\Model\GetEmailReputationResponse
```

KYC - Get Email Reputation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$email = "johndoe@gmail.com";

try {
    $result = $dojah->kYC->getEmailReputation(
        email: $email
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getEmailReputation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetEmailReputationResponse**](../Model/GetEmailReputationResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFullBvn()`

```php
getFullBvn($bvn): \Dojah\Model\GetFullBvnResponse
```

KYC - Lookup BVN Basic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$bvn = 22222222222;

try {
    $result = $dojah->kYC->getFullBvn(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getFullBvn: ', $e->getMessage(), PHP_EOL;
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
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$bank_code = 58;
$account_number = 11223344;

try {
    $result = $dojah->kYC->getNuban(
        bank_code: $bank_code, 
        account_number: $account_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getNuban: ', $e->getMessage(), PHP_EOL;
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
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$passport_number = 70142502085;
$surname = "ololade";

try {
    $result = $dojah->kYC->getPassport(
        passport_number: $passport_number, 
        surname: $surname
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getPassport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **passport_number** | **int**|  | [optional] |
| **surname** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetKycPassportResponse**](../Model/GetKycPassportResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

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
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$phone_number = 8011111111;

try {
    $result = $dojah->kYC->getPhoneNumber(
        phone_number: $phone_number
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone_number** | **int**|  | [optional] |

### Return type

[**\Dojah\Model\GetPhoneNumberResponse**](../Model/GetPhoneNumberResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

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
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$bvn = 22305638508;

try {
    $result = $dojah->kYC->getPremiumBvn(
        bvn: $bvn
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getPremiumBvn: ', $e->getMessage(), PHP_EOL;
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

## `getVIN()`

```php
getVIN($mode, $firstname, $lastname, $vin, $state): \Dojah\Model\GetVinResponse
```

KYC - Get VIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$mode = "vin";
$firstname = "moshood";
$lastname = "saliu";
$vin = 55586;
$state = "ondo";

try {
    $result = $dojah->kYC->getVIN(
        mode: $mode, 
        firstname: $firstname, 
        lastname: $lastname, 
        vin: $vin, 
        state: $state
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getVIN: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mode** | **string**|  | [optional] |
| **firstname** | **string**|  | [optional] |
| **lastname** | **string**|  | [optional] |
| **vin** | **int**|  | [optional] |
| **state** | **string**|  | [optional] |

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
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$vnin = "AB012345678910YZ";

try {
    $result = $dojah->kYC->getVnin(
        vnin: $vnin
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->getVnin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vnin** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetVninResponse**](../Model/GetVninResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateBvn()`

```php
validateBvn($bvn, $first_name, $dob): \Dojah\Model\ValidateBvnResponse
```

KYC - Validate BVN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$bvn = 22250148240;
$first_name = "FRANCIS";
$dob = "1982-02-19";

try {
    $result = $dojah->kYC->validateBvn(
        bvn: $bvn, 
        first_name: $first_name, 
        dob: $dob
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->validateBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bvn** | **int**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **dob** | **string**|  | [optional] |

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

## `verifyAge()`

```php
verifyAge($mode, $account_number, $bank_code, $dob, $first_name, $last_name): \Dojah\Model\VerifyAgeResponse
```

KYC - Age Verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$mode = "account_number";
$account_number = 3046507407;
$bank_code = 11;
$dob = "1993-06-10";
$first_name = "Mosh";
$last_name = "Saliu";

try {
    $result = $dojah->kYC->verifyAge(
        mode: $mode, 
        account_number: $account_number, 
        bank_code: $bank_code, 
        dob: $dob, 
        first_name: $first_name, 
        last_name: $last_name
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->verifyAge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mode** | **string**|  | [optional] |
| **account_number** | **int**|  | [optional] |
| **bank_code** | **int**|  | [optional] |
| **dob** | **string**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\VerifyAgeResponse**](../Model/VerifyAgeResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifySelfieBvn()`

```php
verifySelfieBvn($verify_selfie_bvn_request): \Dojah\Model\VerifySelfieBvnResponse
```

KYC - Selfie BVN Verificatoin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$bvn = "22468537919";
$selfie_image = "<base64 encoded image>";

try {
    $result = $dojah->kYC->verifySelfieBvn(
        bvn: $bvn, 
        selfie_image: $selfie_image
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->verifySelfieBvn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verify_selfie_bvn_request** | [**\Dojah\Model\VerifySelfieBvnRequest**](../Model/VerifySelfieBvnRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\VerifySelfieBvnResponse**](../Model/VerifySelfieBvnResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifySelfieNin()`

```php
verifySelfieNin($verify_selfie_nin_request): \Dojah\Model\VerifySelfieNinResponse
```

KYC - Selfie NIN Verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$nin = "79628483753";
$selfie_image = "<base64 encoded image>";

try {
    $result = $dojah->kYC->verifySelfieNin(
        nin: $nin, 
        selfie_image: $selfie_image
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling KYCApi->verifySelfieNin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verify_selfie_nin_request** | [**\Dojah\Model\VerifySelfieNinRequest**](../Model/VerifySelfieNinRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\VerifySelfieNinResponse**](../Model/VerifySelfieNinResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
