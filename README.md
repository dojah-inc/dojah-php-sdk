# dojah-php-sdk [Packagist](https://packagist.org/packages/konfig/dojah-php-sdk)

Use Dojah to verify, onboard and manage user identity across Africa!


## Installation & Usage

### Requirements

This library requires `PHP ^8.0`

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/dojah-inc/dojah-php-sdk.git"
    }
  ],
  "require": {
    "konfig/dojah-php-sdk": "4.1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/dojah-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: "AUTHORIZATION",
    AppId: "APP_ID",
);

$profile_id = "WC7117469";

try {
    $result = $dojah->aML->getScreeningInfo(
        profile_id: $profile_id
    );
} catch (\Exception $e) {
    echo 'Exception when calling AMLApi->getScreeningInfo: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to *https://api.dojah.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AMLApi* | [**getScreeningInfo**](docs/Api/AMLApi.md#getscreeninginfo) | **GET** /api/v1/aml/screening/info | Get AML Info
*AMLApi* | [**screenAml**](docs/Api/AMLApi.md#screenaml) | **POST** /api/v1/aml/screening/platform | AML Screening
*AuthenticationApi* | [**getSenderId**](docs/Api/AuthenticationApi.md#getsenderid) | **GET** /api/v1/messaging/sender_ids | Messaging - Get Sender IDs
*AuthenticationApi* | [**getSmsStatus**](docs/Api/AuthenticationApi.md#getsmsstatus) | **GET** /v1/messaging/sms/get_status | Messaging - Get SMS Status
*AuthenticationApi* | [**requestSenderId**](docs/Api/AuthenticationApi.md#requestsenderid) | **POST** /api/v1/messaging/sender_id | Messaging - Request Sender ID
*AuthenticationApi* | [**sendOtp**](docs/Api/AuthenticationApi.md#sendotp) | **POST** /api/v1/messaging/otp | Messaging - Send OTP
*AuthenticationApi* | [**sendSms**](docs/Api/AuthenticationApi.md#sendsms) | **POST** /api/v1/messaging/sms | Messaging - Send SMS
*AuthenticationApi* | [**validateOtp**](docs/Api/AuthenticationApi.md#validateotp) | **GET** /api/v1/messaging/otp/validate | Messaging - Validate OTP
*DocumentAnalysisApi* | [**analyzeDocument**](docs/Api/DocumentAnalysisApi.md#analyzedocument) | **POST** /api/v1/document/analysis | KYC - Document Analysis
*FraudApi* | [**getEmailReputation**](docs/Api/FraudApi.md#getemailreputation) | **GET** /api/v1/kyc/email | Email Reputation
*FraudApi* | [**getIpReputation**](docs/Api/FraudApi.md#getipreputation) | **GET** /api/v1/fraud/ip | IP Reputation
*FraudApi* | [**screenPhone**](docs/Api/FraudApi.md#screenphone) | **GET** /api/v1/fraud/phone | Phone Screening
*FraudApi* | [**screenUser**](docs/Api/FraudApi.md#screenuser) | **GET** /api/v1/fraud/user | User Screening
*GhKycApi* | [**getDriversLicense**](docs/Api/GhKycApi.md#getdriverslicense) | **GET** /api/v1/gh/kyc/dl | Driver&#39;s License
*GhKycApi* | [**getPassport**](docs/Api/GhKycApi.md#getpassport) | **GET** /api/v1/gh/kyc/passport | Passport
*GhKycApi* | [**getSsnit**](docs/Api/GhKycApi.md#getssnit) | **GET** /api/v1/gh/kyc/ssnit | SSNIT
*GhKycApi* | [**getVoter**](docs/Api/GhKycApi.md#getvoter) | **GET** /api/v1/gh/kyc/voter | Voter ID Lookup
*GeneralApi* | [**getBanks**](docs/Api/GeneralApi.md#getbanks) | **GET** /v1/general/banks | General - Get Banks
*GeneralApi* | [**getBin**](docs/Api/GeneralApi.md#getbin) | **GET** /v1/general/bin | General Resolve BIN
*GeneralApi* | [**getNuban**](docs/Api/GeneralApi.md#getnuban) | **GET** /api/v1/general/account | General Resolve NUBAN
*GlobalKycApi* | [**caEkyc**](docs/Api/GlobalKycApi.md#caekyc) | **GET** /api/v1/ca/kyc | Canada Ekyc
*GlobalKycApi* | [**getUsSsn**](docs/Api/GlobalKycApi.md#getusssn) | **GET** /api/v1/us/kyc | US SSN
*GlobalKycApi* | [**ukTwoPlusTwo**](docs/Api/GlobalKycApi.md#uktwoplustwo) | **GET** /api/v1/uk/kyc | UK 2+2
*KeKycApi* | [**getNationalId**](docs/Api/KeKycApi.md#getnationalid) | **GET** /api/v1/ke/kyc/id | KYC - National ID
*KeKycApi* | [**getPassport**](docs/Api/KeKycApi.md#getpassport) | **GET** /api/v1/ke/kyc/passport | KYC - Passport
*KYBApi* | [**businessDetail**](docs/Api/KYBApi.md#businessdetail) | **GET** /api/v1/kyb/business/detail | Business Detail
*KYBApi* | [**businessSearch**](docs/Api/KYBApi.md#businesssearch) | **GET** /api/v1/kyb/business/search | Business Search
*KYBApi* | [**getCac**](docs/Api/KYBApi.md#getcac) | **GET** /api/v1/kyc/cac | KYC - Get CAC
*KYBApi* | [**getTin**](docs/Api/KYBApi.md#gettin) | **GET** /api/v1/kyc/tin | KYC - Fetch Tin
*KYCApi* | [**checkLiveness**](docs/Api/KYCApi.md#checkliveness) | **POST** /api/v1/ml/liveness | Liveness Check
*KYCApi* | [**getAccounts**](docs/Api/KYCApi.md#getaccounts) | **GET** /api/v1/kyc/accounts | KYC - Fetch Accounts
*KYCApi* | [**getAddressVerification**](docs/Api/KYCApi.md#getaddressverification) | **GET** /api/v1/kyc/address | Fetch Address Verification Data
*KYCApi* | [**getBvnFromNuban**](docs/Api/KYCApi.md#getbvnfromnuban) | **GET** /api/v1/kyc/nuban/bvn | Lookup BVN from NUBAN
*KYCApi* | [**getVin**](docs/Api/KYCApi.md#getvin) | **GET** /api/v1/kyc/vin | KYC - Get VIN
*KYCApi* | [**submitAddress**](docs/Api/KYCApi.md#submitaddress) | **POST** /api/v1/kyc/address | Submit Address
*MLApi* | [**verifyPhotoIdWithSelfie**](docs/Api/MLApi.md#verifyphotoidwithselfie) | **POST** /api/v1/kyc/photoid/verify | KYC - Selfie Photo ID Verification
*NigeriaKycApi* | [**getBasicBvn**](docs/Api/NigeriaKycApi.md#getbasicbvn) | **GET** /api/v1/kyc/bvn | KYC - Get Basic BVN Info
*NigeriaKycApi* | [**getBasicBvn1**](docs/Api/NigeriaKycApi.md#getbasicbvn1) | **GET** /api/v1/kyc/bvn/basic | KYC - Lookup BVN Basic 1
*NigeriaKycApi* | [**getBasicPhoneNumber**](docs/Api/NigeriaKycApi.md#getbasicphonenumber) | **GET** /api/v1/kyc/phone_number/basic | KYC Lookup Phone Number Basic
*NigeriaKycApi* | [**getDriversLicense**](docs/Api/NigeriaKycApi.md#getdriverslicense) | **GET** /api/v1/kyc/dl | KYC - Get Drivers License Info
*NigeriaKycApi* | [**getNin**](docs/Api/NigeriaKycApi.md#getnin) | **GET** /api/v1/kyc/nin | KYC - Get NIN Info
*NigeriaKycApi* | [**getNormalBvn**](docs/Api/NigeriaKycApi.md#getnormalbvn) | **GET** /api/v1/kyc/bvn/full | KYC - Lookup BVN Normal
*NigeriaKycApi* | [**getNuban**](docs/Api/NigeriaKycApi.md#getnuban) | **GET** /api/v1/kyc/nuban | KYC - Get NUBAN Information
*NigeriaKycApi* | [**getPassport**](docs/Api/NigeriaKycApi.md#getpassport) | **GET** /api/v1/kyc/passport | KYC - Passport
*NigeriaKycApi* | [**getPhoneNumber**](docs/Api/NigeriaKycApi.md#getphonenumber) | **GET** /api/v1/kyc/phone_number | KYC - Lookup Phone Number
*NigeriaKycApi* | [**getPremiumBvn**](docs/Api/NigeriaKycApi.md#getpremiumbvn) | **GET** /api/v1/kyc/bvn/advance | KYC - Lookup BVN Premium
*NigeriaKycApi* | [**getVnin**](docs/Api/NigeriaKycApi.md#getvnin) | **GET** /api/v1/kyc/vnin | Lookup VNIN
*PurchaseApi* | [**sendAirtime**](docs/Api/PurchaseApi.md#sendairtime) | **POST** /v1/purchase/airtime | Purchase - Send Airtime
*ServicesApi* | [**getWalletBalance**](docs/Api/ServicesApi.md#getwalletbalance) | **GET** /api/v1/balance | Get Dojah Wallet Balance
*TzKycApi* | [**getNin**](docs/Api/TzKycApi.md#getnin) | **GET** /api/v1/tz/kyc/nin | Lookup TZ NIN
*UgKycApi* | [**getVoter**](docs/Api/UgKycApi.md#getvoter) | **GET** /api/v1/ug/kyc/voter | Voters ID
*VerificationsApi* | [**validateBvn**](docs/Api/VerificationsApi.md#validatebvn) | **GET** /v1/kyc/bvn | KYC - Validate BVN
*VerificationsApi* | [**verifyAge**](docs/Api/VerificationsApi.md#verifyage) | **GET** /v1/kyc/age_verification | KYC - Age Verification
*VerificationsApi* | [**verifySelfieBvn**](docs/Api/VerificationsApi.md#verifyselfiebvn) | **POST** /v1/kyc/bvn/verify | KYV - Selfie BVN Verificatoin
*VerificationsApi* | [**verifySelfieNin**](docs/Api/VerificationsApi.md#verifyselfienin) | **POST** /api/v1/kyc/nin/verify | KYC - Selfie NIN Verification
*VerificationsApi* | [**verifySelfieVnin**](docs/Api/VerificationsApi.md#verifyselfievnin) | **POST** /api/v1/kyc/vnin/verify | KYC - Selfie vNIN verification
*WebHooksApi* | [**deleteWebhook**](docs/Api/WebHooksApi.md#deletewebhook) | **DELETE** /api/v1/webhook/delete | Delete Webhook
*WebHooksApi* | [**getWebhooks**](docs/Api/WebHooksApi.md#getwebhooks) | **GET** /api/v1/webhook/fetch | Fetch All Webhooks
*WebHooksApi* | [**notifyWebhook**](docs/Api/WebHooksApi.md#notifywebhook) | **POST** /api/v1/webhook/notify | Post Hook
*WebHooksApi* | [**subscribeService**](docs/Api/WebHooksApi.md#subscribeservice) | **POST** /api/v1/webhook/subscribe | Subscribe to service
*ZafKycApi* | [**getId**](docs/Api/ZafKycApi.md#getid) | **GET** /api/v1/za/kyc/id | KYC - Lookup ID
*ZwKycApi* | [**checkCredit**](docs/Api/ZwKycApi.md#checkcredit) | **GET** /api/v1/zw/kyc/fcb | Credit Check
*ZwKycApi* | [**verifyId**](docs/Api/ZwKycApi.md#verifyid) | **GET** /api/v1/zw/kyc/nin | National ID Verification

## Models

- [AmlScreenAmlRequest](docs/Model/AmlScreenAmlRequest.md)
- [AmlScreenAmlResponse](docs/Model/AmlScreenAmlResponse.md)
- [AmlScreenAmlResponseEntity](docs/Model/AmlScreenAmlResponseEntity.md)
- [AnalyzeDocumentResponse](docs/Model/AnalyzeDocumentResponse.md)
- [AnalyzeDocumentResponseEntity](docs/Model/AnalyzeDocumentResponseEntity.md)
- [AnalyzeDocumentResponseEntityDocumentImages](docs/Model/AnalyzeDocumentResponseEntityDocumentImages.md)
- [AnalyzeDocumentResponseEntityDocumentType](docs/Model/AnalyzeDocumentResponseEntityDocumentType.md)
- [AnalyzeDocumentResponseEntityStatus](docs/Model/AnalyzeDocumentResponseEntityStatus.md)
- [AnalyzeDocumentResponseEntityTextDataInner](docs/Model/AnalyzeDocumentResponseEntityTextDataInner.md)
- [AuthenticationSendOtpRequest](docs/Model/AuthenticationSendOtpRequest.md)
- [AuthenticationSendOtpResponse](docs/Model/AuthenticationSendOtpResponse.md)
- [AuthenticationSendOtpResponseEntityInner](docs/Model/AuthenticationSendOtpResponseEntityInner.md)
- [AuthenticationValidateOtpResponse](docs/Model/AuthenticationValidateOtpResponse.md)
- [AuthenticationValidateOtpResponseEntity](docs/Model/AuthenticationValidateOtpResponseEntity.md)
- [DeleteWebhookResponse](docs/Model/DeleteWebhookResponse.md)
- [FraudGetEmailReputationResponse](docs/Model/FraudGetEmailReputationResponse.md)
- [FraudGetEmailReputationResponseEntity](docs/Model/FraudGetEmailReputationResponseEntity.md)
- [FraudGetEmailReputationResponseEntityBreachDetails](docs/Model/FraudGetEmailReputationResponseEntityBreachDetails.md)
- [FraudGetEmailReputationResponseEntityDetails](docs/Model/FraudGetEmailReputationResponseEntityDetails.md)
- [FraudGetEmailReputationResponseEntityDomainDetails](docs/Model/FraudGetEmailReputationResponseEntityDomainDetails.md)
- [FraudGetIpReputationResponse](docs/Model/FraudGetIpReputationResponse.md)
- [FraudGetIpReputationResponseEntity](docs/Model/FraudGetIpReputationResponseEntity.md)
- [FraudGetIpReputationResponseEntityReport](docs/Model/FraudGetIpReputationResponseEntityReport.md)
- [FraudGetIpReputationResponseEntityReportAnonymity](docs/Model/FraudGetIpReputationResponseEntityReportAnonymity.md)
- [FraudGetIpReputationResponseEntityReportBlacklists](docs/Model/FraudGetIpReputationResponseEntityReportBlacklists.md)
- [FraudGetIpReputationResponseEntityReportInformation](docs/Model/FraudGetIpReputationResponseEntityReportInformation.md)
- [FraudGetIpReputationResponseEntityReportRiskScore](docs/Model/FraudGetIpReputationResponseEntityReportRiskScore.md)
- [FraudScreenPhoneResponse](docs/Model/FraudScreenPhoneResponse.md)
- [FraudScreenPhoneResponseEntity](docs/Model/FraudScreenPhoneResponseEntity.md)
- [FraudScreenUserResponse](docs/Model/FraudScreenUserResponse.md)
- [FraudScreenUserResponseEntity](docs/Model/FraudScreenUserResponseEntity.md)
- [FraudScreenUserResponseEntityEmailCheckResult](docs/Model/FraudScreenUserResponseEntityEmailCheckResult.md)
- [FraudScreenUserResponseEntityEmailCheckResultBreachDetails](docs/Model/FraudScreenUserResponseEntityEmailCheckResultBreachDetails.md)
- [FraudScreenUserResponseEntityEmailCheckResultBreachDetailsBreachesInner](docs/Model/FraudScreenUserResponseEntityEmailCheckResultBreachDetailsBreachesInner.md)
- [FraudScreenUserResponseEntityEmailCheckResultDomainDetails](docs/Model/FraudScreenUserResponseEntityEmailCheckResultDomainDetails.md)
- [FraudScreenUserResponseEntityIpCheckResult](docs/Model/FraudScreenUserResponseEntityIpCheckResult.md)
- [FraudScreenUserResponseEntityIpCheckResultAnonymity](docs/Model/FraudScreenUserResponseEntityIpCheckResultAnonymity.md)
- [FraudScreenUserResponseEntityIpCheckResultBlacklists](docs/Model/FraudScreenUserResponseEntityIpCheckResultBlacklists.md)
- [FraudScreenUserResponseEntityIpCheckResultIpDetails](docs/Model/FraudScreenUserResponseEntityIpCheckResultIpDetails.md)
- [FraudScreenUserResponseEntityIpCheckResultRiskScore](docs/Model/FraudScreenUserResponseEntityIpCheckResultRiskScore.md)
- [FraudScreenUserResponseEntityPhoneCheckResult](docs/Model/FraudScreenUserResponseEntityPhoneCheckResult.md)
- [GeneralGetNubanResponse](docs/Model/GeneralGetNubanResponse.md)
- [GeneralGetNubanResponseEntity](docs/Model/GeneralGetNubanResponseEntity.md)
- [GetBanksResponse](docs/Model/GetBanksResponse.md)
- [GetBanksResponseEntityInner](docs/Model/GetBanksResponseEntityInner.md)
- [GetBasicBvnResponse](docs/Model/GetBasicBvnResponse.md)
- [GetBasicBvnResponseEntity](docs/Model/GetBasicBvnResponseEntity.md)
- [GetBinResponse](docs/Model/GetBinResponse.md)
- [GetBinResponseEntity](docs/Model/GetBinResponseEntity.md)
- [GetDriversLicenseResponse](docs/Model/GetDriversLicenseResponse.md)
- [GetDriversLicenseResponseEntity](docs/Model/GetDriversLicenseResponseEntity.md)
- [GetFullBvnResponse](docs/Model/GetFullBvnResponse.md)
- [GetFullBvnResponseEntity](docs/Model/GetFullBvnResponseEntity.md)
- [GetKycDriversLicenseResponse](docs/Model/GetKycDriversLicenseResponse.md)
- [GetKycDriversLicenseResponseEntity](docs/Model/GetKycDriversLicenseResponseEntity.md)
- [GetKycDriversLicenseResponseEntityPersonalDetails](docs/Model/GetKycDriversLicenseResponseEntityPersonalDetails.md)
- [GetKycPassportResponse](docs/Model/GetKycPassportResponse.md)
- [GetKycPassportResponseEntity](docs/Model/GetKycPassportResponseEntity.md)
- [GetNationalIdResponse](docs/Model/GetNationalIdResponse.md)
- [GetNationalIdResponseEntity](docs/Model/GetNationalIdResponseEntity.md)
- [GetNubanResponse](docs/Model/GetNubanResponse.md)
- [GetNubanResponseEntity](docs/Model/GetNubanResponseEntity.md)
- [GetPassportResponse](docs/Model/GetPassportResponse.md)
- [GetPassportResponseEntity](docs/Model/GetPassportResponseEntity.md)
- [GetPhoneNumber404Response](docs/Model/GetPhoneNumber404Response.md)
- [GetPhoneNumber404ResponseEntity](docs/Model/GetPhoneNumber404ResponseEntity.md)
- [GetPhoneNumberResponse](docs/Model/GetPhoneNumberResponse.md)
- [GetPhoneNumberResponseEntity](docs/Model/GetPhoneNumberResponseEntity.md)
- [GetPremiumBvnResponse](docs/Model/GetPremiumBvnResponse.md)
- [GetPremiumBvnResponseEntity](docs/Model/GetPremiumBvnResponseEntity.md)
- [GetSenderIdResponse](docs/Model/GetSenderIdResponse.md)
- [GetSenderIdResponseEntityInner](docs/Model/GetSenderIdResponseEntityInner.md)
- [GetSmsStatusResponse](docs/Model/GetSmsStatusResponse.md)
- [GetSmsStatusResponseEntity](docs/Model/GetSmsStatusResponseEntity.md)
- [GetSsnitResponse](docs/Model/GetSsnitResponse.md)
- [GetSsnitResponseEntity](docs/Model/GetSsnitResponseEntity.md)
- [GetVinResponse](docs/Model/GetVinResponse.md)
- [GetVinResponseEntity](docs/Model/GetVinResponseEntity.md)
- [GetVninResponse](docs/Model/GetVninResponse.md)
- [GetVninResponseEntity](docs/Model/GetVninResponseEntity.md)
- [GetWalletBalanceResponse](docs/Model/GetWalletBalanceResponse.md)
- [GetWalletBalanceResponseEntity](docs/Model/GetWalletBalanceResponseEntity.md)
- [GetWebhooksResponse](docs/Model/GetWebhooksResponse.md)
- [GetWebhooksResponseEntityInner](docs/Model/GetWebhooksResponseEntityInner.md)
- [KybGetCacResponse](docs/Model/KybGetCacResponse.md)
- [KybGetCacResponseEntity](docs/Model/KybGetCacResponseEntity.md)
- [KybGetTinResponse](docs/Model/KybGetTinResponse.md)
- [KybGetTinResponseEntity](docs/Model/KybGetTinResponseEntity.md)
- [KycCheckLivenessRequest](docs/Model/KycCheckLivenessRequest.md)
- [KycSubmitAddressRequest](docs/Model/KycSubmitAddressRequest.md)
- [KycSubmitAddressResponse](docs/Model/KycSubmitAddressResponse.md)
- [KycSubmitAddressResponseEntity](docs/Model/KycSubmitAddressResponseEntity.md)
- [KycSubmitAddressResponseEntityData](docs/Model/KycSubmitAddressResponseEntityData.md)
- [KycSubmitAddressResponseEntityDataApplicant](docs/Model/KycSubmitAddressResponseEntityDataApplicant.md)
- [KycSubmitAddressResponseEntityDataNeighbor](docs/Model/KycSubmitAddressResponseEntityDataNeighbor.md)
- [MlVerifyPhotoIdWithSelfieRequest](docs/Model/MlVerifyPhotoIdWithSelfieRequest.md)
- [NigeriaKycGetNinResponse](docs/Model/NigeriaKycGetNinResponse.md)
- [NigeriaKycGetNinResponseEntity](docs/Model/NigeriaKycGetNinResponseEntity.md)
- [NotifyWebhookRequest](docs/Model/NotifyWebhookRequest.md)
- [NotifyWebhookRequestData](docs/Model/NotifyWebhookRequestData.md)
- [NotifyWebhookResponse](docs/Model/NotifyWebhookResponse.md)
- [PurchaseAirtimeRequest](docs/Model/PurchaseAirtimeRequest.md)
- [PurchaseAirtimeResponse](docs/Model/PurchaseAirtimeResponse.md)
- [PurchaseAirtimeResponseEntity](docs/Model/PurchaseAirtimeResponseEntity.md)
- [PurchaseAirtimeResponseEntityDataInner](docs/Model/PurchaseAirtimeResponseEntityDataInner.md)
- [RequestSenderIdRequest](docs/Model/RequestSenderIdRequest.md)
- [RequestSenderIdResponse](docs/Model/RequestSenderIdResponse.md)
- [RequestSenderIdResponseEntityInner](docs/Model/RequestSenderIdResponseEntityInner.md)
- [SendSmsRequest](docs/Model/SendSmsRequest.md)
- [SendSmsResponse](docs/Model/SendSmsResponse.md)
- [SendSmsResponseEntity](docs/Model/SendSmsResponseEntity.md)
- [SubscribeServiceRequest](docs/Model/SubscribeServiceRequest.md)
- [SubscribeServiceResponse](docs/Model/SubscribeServiceResponse.md)
- [ValidateBvnResponse](docs/Model/ValidateBvnResponse.md)
- [ValidateBvnResponseEntity](docs/Model/ValidateBvnResponseEntity.md)
- [ValidateBvnResponseEntityBvn](docs/Model/ValidateBvnResponseEntityBvn.md)
- [ValidateBvnResponseEntityFirstName](docs/Model/ValidateBvnResponseEntityFirstName.md)
- [VerificationsVerifySelfieNinRequest](docs/Model/VerificationsVerifySelfieNinRequest.md)
- [VerificationsVerifySelfieVninRequest](docs/Model/VerificationsVerifySelfieVninRequest.md)
- [VerifyAgeResponse](docs/Model/VerifyAgeResponse.md)
- [VerifyAgeResponseEntity](docs/Model/VerifyAgeResponseEntity.md)
- [VerifySelfieBvnRequest](docs/Model/VerifySelfieBvnRequest.md)
- [VerifySelfieBvnResponse](docs/Model/VerifySelfieBvnResponse.md)
- [VerifySelfieBvnResponseEntity](docs/Model/VerifySelfieBvnResponseEntity.md)
- [VerifySelfieBvnResponseEntitySelfieVerification](docs/Model/VerifySelfieBvnResponseEntitySelfieVerification.md)
- [ZafKycGetIdResponse](docs/Model/ZafKycGetIdResponse.md)
- [ZafKycGetIdResponseEntity](docs/Model/ZafKycGetIdResponseEntity.md)
- [ZwKycCheckCreditResponse](docs/Model/ZwKycCheckCreditResponse.md)
- [ZwKycCheckCreditResponseEntity](docs/Model/ZwKycCheckCreditResponseEntity.md)
- [ZwKycVerifyIdResponse](docs/Model/ZwKycVerifyIdResponse.md)
- [ZwKycVerifyIdResponseEntity](docs/Model/ZwKycVerifyIdResponseEntity.md)

## Author

This PHP package is automatically generated by [Konfig](https://konfigthis.com):