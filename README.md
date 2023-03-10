# dojah-php-sdk [Packagist](https://packagist.org/packages/konfig/dojah-php-sdk)

Use Dojah to verify, onboard and manage user identity across Africa!


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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
    "dojah-inc/dojah-php-sdk": "1.0.0"
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

// Configure API key authorization: apikeyAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: appIdAuth
$config = Dojah\Configuration::getDefaultConfiguration()->setApiKey('AppId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Dojah\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AppId', 'Bearer');

// Setting host path is optional and defaults to https://api.dojah.io
// Dojah\Configuration::getDefaultConfiguration()->setHost("https://api.dojah.io");

$apiInstance = new Dojah\Api\AMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$reference_id = "c574a3c8-dc27-4013-8bbc-462e7ed87d55";

try {
    $result = $apiInstance->getScreeningInfo(
        reference_id: $reference_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling AMLApi->getScreeningInfo: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to *https://api.dojah.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AMLApi* | [**getScreeningInfo**](docs/Api/AMLApi.md#getscreeninginfo) | **GET** /v1/aml/screening/info | Get AML Info
*AMLApi* | [**screenAml**](docs/Api/AMLApi.md#screenaml) | **POST** /api/v1/aml/screening | AML Screening
*AuthenticationApi* | [**getSenderId**](docs/Api/AuthenticationApi.md#getsenderid) | **GET** /api/v1/messaging/sender_ids | Messaging - Get Sender IDs
*AuthenticationApi* | [**getSmsStatus**](docs/Api/AuthenticationApi.md#getsmsstatus) | **GET** /v1/messaging/sms/get_status | Messaging - Get SMS Status
*AuthenticationApi* | [**requestSenderId**](docs/Api/AuthenticationApi.md#requestsenderid) | **POST** /api/v1/messaging/sender_id | Messaging - Request Sender ID
*AuthenticationApi* | [**sendOtp**](docs/Api/AuthenticationApi.md#sendotp) | **POST** /v1/messaging/otp | Messaging - Send OTP
*AuthenticationApi* | [**sendSms**](docs/Api/AuthenticationApi.md#sendsms) | **POST** /api/v1/messaging/sms | Messaging - Send SMS
*AuthenticationApi* | [**validateOtp**](docs/Api/AuthenticationApi.md#validateotp) | **GET** /v1/messaging/otp/validate | Messaging - Validate OTP
*FinancialApi* | [**collectStatusFromPdf**](docs/Api/FinancialApi.md#collectstatusfrompdf) | **POST** /api/v1/financial/transactions/pdf | Collect Status via PDF Statement
*FinancialApi* | [**collectTransactions**](docs/Api/FinancialApi.md#collecttransactions) | **POST** /v1/financial/transactions | Collect Transactions
*FinancialApi* | [**getAccount**](docs/Api/FinancialApi.md#getaccount) | **GET** /api/v1/financial/account_information | Get Account Information
*FinancialApi* | [**getAccountAnalysis**](docs/Api/FinancialApi.md#getaccountanalysis) | **GET** /api/v1/financial/analysis | Get Account Analysis
*FinancialApi* | [**getAccountSubscriptions**](docs/Api/FinancialApi.md#getaccountsubscriptions) | **GET** /v1/financial/account_subscription | Get Account Subscriptions
*FinancialApi* | [**getAccountTransactions**](docs/Api/FinancialApi.md#getaccounttransactions) | **GET** /api/v1/financial/account_transactions | Get Account Transactions
*FinancialApi* | [**getBasicBvn**](docs/Api/FinancialApi.md#getbasicbvn) | **GET** /v1/financial/bvn_information/basic | Get BVN Information Basic
*FinancialApi* | [**getEarningStructure**](docs/Api/FinancialApi.md#getearningstructure) | **GET** /v1/financial/earning_structure | Get Earning Structure
*FinancialApi* | [**getFullBvn**](docs/Api/FinancialApi.md#getfullbvn) | **GET** /v1/financial/bvn_information/full | Get BVN Information Full
*FinancialApi* | [**getSpendingPattern**](docs/Api/FinancialApi.md#getspendingpattern) | **GET** /v1/financial/spending_pattern | Get Spending Pattern
*GHKYCApi* | [**getDriversLicense**](docs/Api/GHKYCApi.md#getdriverslicense) | **GET** /api/v1/gh/kyc/dl | Driver&#39;s License
*GHKYCApi* | [**getPassport**](docs/Api/GHKYCApi.md#getpassport) | **GET** /api/v1/gh/kyc/passport | Passport
*GHKYCApi* | [**getSsnit**](docs/Api/GHKYCApi.md#getssnit) | **GET** /api/v1/gh/kyc/ssnit | SSNIT
*GeneralApi* | [**getBanks**](docs/Api/GeneralApi.md#getbanks) | **GET** /v1/general/banks | General - Get Banks
*GeneralApi* | [**getBin**](docs/Api/GeneralApi.md#getbin) | **GET** /v1/general/bin | General Resolve BIN
*GeneralApi* | [**getDataPlans**](docs/Api/GeneralApi.md#getdataplans) | **GET** /v1/purchase/data/plans | Purchase - Get Data Plans
*GeneralApi* | [**getNuban**](docs/Api/GeneralApi.md#getnuban) | **GET** /v1/general/account | General Resolve NUBAN
*GeneralApi* | [**getWalletBalance**](docs/Api/GeneralApi.md#getwalletbalance) | **GET** /api/v1/balance | Get Dojah Wallet Balance
*GeneralApi* | [**purchaseAirtime**](docs/Api/GeneralApi.md#purchaseairtime) | **POST** /v1/purchase/airtime | Purchase - Send Airtime
*GeneralApi* | [**purchaseData**](docs/Api/GeneralApi.md#purchasedata) | **POST** /v1/purchase/data | Purchase - Buy Data
*KEKYCApi* | [**getNationalId**](docs/Api/KEKYCApi.md#getnationalid) | **GET** /api/v1/ke/kyc/id | KYC - National ID
*KYBApi* | [**getAdvancedCac**](docs/Api/KYBApi.md#getadvancedcac) | **GET** /v1/kyc/cac/advance | KYC - Get CAC Advanced
*KYBApi* | [**getBasicCac**](docs/Api/KYBApi.md#getbasiccac) | **GET** /v1/kyc/cac/basic | KYB - Get CAC 2
*KYBApi* | [**getCac**](docs/Api/KYBApi.md#getcac) | **GET** /v1/kyc/cac | KYC - Get CAC
*KYBApi* | [**getTin**](docs/Api/KYBApi.md#gettin) | **GET** /v1/kyc/tin | KYC - Fetch Tin
*KYCApi* | [**analyzeDocument**](docs/Api/KYCApi.md#analyzedocument) | **POST** /api/v1/document/analysis | KYC - Document Analysis
*KYCApi* | [**getBasicBvn**](docs/Api/KYCApi.md#getbasicbvn) | **GET** /api/v1/kyc/bvn/basic | KYC - Get Basic BVN Info
*KYCApi* | [**getBasicPhoneNumber**](docs/Api/KYCApi.md#getbasicphonenumber) | **GET** /v1/kyc/phone_number/basic | KYC Lookup Phone Number Basic
*KYCApi* | [**getDriversLicense**](docs/Api/KYCApi.md#getdriverslicense) | **GET** /api/v1/kyc/dl | KYC - Get Drivers License Info
*KYCApi* | [**getEmailReputation**](docs/Api/KYCApi.md#getemailreputation) | **GET** /v1/kyc/email | KYC - Get Email Reputation
*KYCApi* | [**getFullBvn**](docs/Api/KYCApi.md#getfullbvn) | **GET** /api/v1/kyc/bvn/full | KYC - Lookup BVN Basic
*KYCApi* | [**getNuban**](docs/Api/KYCApi.md#getnuban) | **GET** /api/v1/kyc/nuban | KYC - Get NUBAN Information
*KYCApi* | [**getPassport**](docs/Api/KYCApi.md#getpassport) | **GET** /api/v1/kyc/passport | KYC - Passport
*KYCApi* | [**getPhoneNumber**](docs/Api/KYCApi.md#getphonenumber) | **GET** /api/v1/kyc/phone_number | KYC - Lookup Phone Number
*KYCApi* | [**getPremiumBvn**](docs/Api/KYCApi.md#getpremiumbvn) | **GET** /api/v1/kyc/bvn/advance | KYC - Lookup BVN Premium
*KYCApi* | [**getVIN**](docs/Api/KYCApi.md#getvin) | **GET** /api/v1/kyc/vin | KYC - Get VIN
*KYCApi* | [**getVnin**](docs/Api/KYCApi.md#getvnin) | **GET** /api/v1/kyc/vnin | Lookup VNIN
*KYCApi* | [**validateBvn**](docs/Api/KYCApi.md#validatebvn) | **GET** /api/v1/kyc/bvn | KYC - Validate BVN
*KYCApi* | [**verifyAge**](docs/Api/KYCApi.md#verifyage) | **GET** /v1/kyc/age_verification | KYC - Age Verification
*KYCApi* | [**verifySelfieBvn**](docs/Api/KYCApi.md#verifyselfiebvn) | **POST** /v1/kyc/bvn/verify | KYC - Selfie BVN Verificatoin
*KYCApi* | [**verifySelfieNin**](docs/Api/KYCApi.md#verifyselfienin) | **POST** /v1/kyc/nin/verify | KYC - Selfie NIN Verification
*MLApi* | [**getDocumentAnalysis**](docs/Api/MLApi.md#getdocumentanalysis) | **POST** /v1/document/analysis/dl | Document Analysis Drivers License
*MLApi* | [**getGenericOcrText**](docs/Api/MLApi.md#getgenericocrtext) | **POST** /v1/ml/ocr/generic | Generic OCR Service
*MLApi* | [**getOcrText**](docs/Api/MLApi.md#getocrtext) | **POST** /v1/ml/ocr | BVN Ocr
*MLApi* | [**verifyPhotoIdWithSelfie**](docs/Api/MLApi.md#verifyphotoidwithselfie) | **POST** /v1/kyc/photoid/verify | KYC - Selfie Photo ID Verification
*ServicesApi* | [**categorizeTransactions**](docs/Api/ServicesApi.md#categorizetransactions) | **POST** /v1/ml/categorize_transaction | Categorize Transactions
*UGKYCApi* | [**getVoter**](docs/Api/UGKYCApi.md#getvoter) | **GET** /api/v1/ug/kyc/voter | Voters ID
*WalletApi* | [**createWallet**](docs/Api/WalletApi.md#createwallet) | **POST** /v1/wallet/ngn/create | Create NGN Wallet
*WalletApi* | [**creditSubwallet**](docs/Api/WalletApi.md#creditsubwallet) | **POST** /v1/wallet/ngn/credit | Credit Sub-wallet
*WalletApi* | [**getTransaction**](docs/Api/WalletApi.md#gettransaction) | **GET** /v1/wallet/ngn/transaction | Retrieve Transaction Details
*WalletApi* | [**getWallet**](docs/Api/WalletApi.md#getwallet) | **GET** /v1/wallet/ngn/retrieve | Retrieve Wallet Details
*WalletApi* | [**getWallets**](docs/Api/WalletApi.md#getwallets) | **GET** /v1/wallet/ngn/accounts | Get Wallets
*WalletApi* | [**transferFunds**](docs/Api/WalletApi.md#transferfunds) | **POST** /v1/wallet/ngn/transfer | Transfer Funds
*WebHooksApi* | [**deleteWebhook**](docs/Api/WebHooksApi.md#deletewebhook) | **DELETE** /api/v1/webhook/delete | Delete Webhook
*WebHooksApi* | [**getWebhooks**](docs/Api/WebHooksApi.md#getwebhooks) | **GET** /api/v1/webhook/fetch | Fetch All Webhooks
*WebHooksApi* | [**notifyWebhook**](docs/Api/WebHooksApi.md#notifywebhook) | **POST** /api/v1/webhook/notify | Post Hook
*WebHooksApi* | [**subscribeService**](docs/Api/WebHooksApi.md#subscribeservice) | **POST** /api/v1/webhook/subscribe | Subscribe to service

## Models

- [AnalyzeDocumentResponse](docs/Model/AnalyzeDocumentResponse.md)
- [AnalyzeDocumentResponseEntity](docs/Model/AnalyzeDocumentResponseEntity.md)
- [AnalyzeDocumentResponseEntityDocumentImages](docs/Model/AnalyzeDocumentResponseEntityDocumentImages.md)
- [AnalyzeDocumentResponseEntityDocumentType](docs/Model/AnalyzeDocumentResponseEntityDocumentType.md)
- [AnalyzeDocumentResponseEntityStatus](docs/Model/AnalyzeDocumentResponseEntityStatus.md)
- [AnalyzeDocumentResponseEntityTextDataInner](docs/Model/AnalyzeDocumentResponseEntityTextDataInner.md)
- [CategorizeTransactionsRequest](docs/Model/CategorizeTransactionsRequest.md)
- [CategorizeTransactionsResponse](docs/Model/CategorizeTransactionsResponse.md)
- [CategorizeTransactionsResponseEntity](docs/Model/CategorizeTransactionsResponseEntity.md)
- [CollectStatusFromPdfRequest](docs/Model/CollectStatusFromPdfRequest.md)
- [CollectStatusFromPdfResponse](docs/Model/CollectStatusFromPdfResponse.md)
- [CollectTransactionsRequest](docs/Model/CollectTransactionsRequest.md)
- [CollectTransactionsRequestTransactionsInner](docs/Model/CollectTransactionsRequestTransactionsInner.md)
- [CollectTransactionsResponse](docs/Model/CollectTransactionsResponse.md)
- [CollectTransactionsResponseEntity](docs/Model/CollectTransactionsResponseEntity.md)
- [CreateWalletRequest](docs/Model/CreateWalletRequest.md)
- [CreateWalletResponse](docs/Model/CreateWalletResponse.md)
- [CreateWalletResponseEntity](docs/Model/CreateWalletResponseEntity.md)
- [CreditSubwalletRequest](docs/Model/CreditSubwalletRequest.md)
- [CreditSubwalletResponse](docs/Model/CreditSubwalletResponse.md)
- [CreditSubwalletResponseEntity](docs/Model/CreditSubwalletResponseEntity.md)
- [DeleteWebhookResponse](docs/Model/DeleteWebhookResponse.md)
- [FinancialGetBasicBvnResponse](docs/Model/FinancialGetBasicBvnResponse.md)
- [FinancialGetBasicBvnResponseEntity](docs/Model/FinancialGetBasicBvnResponseEntity.md)
- [FinancialGetFullBvnResponse](docs/Model/FinancialGetFullBvnResponse.md)
- [FinancialGetFullBvnResponseEntity](docs/Model/FinancialGetFullBvnResponseEntity.md)
- [GeneralGetNubanResponse](docs/Model/GeneralGetNubanResponse.md)
- [GeneralGetNubanResponseEntity](docs/Model/GeneralGetNubanResponseEntity.md)
- [GeneralGetWalletBalanceResponse](docs/Model/GeneralGetWalletBalanceResponse.md)
- [GetAccountAnalysisResponse](docs/Model/GetAccountAnalysisResponse.md)
- [GetAccountAnalysisResponseEntity](docs/Model/GetAccountAnalysisResponseEntity.md)
- [GetAccountAnalysisResponseEntityAccountBreakdown](docs/Model/GetAccountAnalysisResponseEntityAccountBreakdown.md)
- [GetAccountAnalysisResponseEntityExpenseBreakdown](docs/Model/GetAccountAnalysisResponseEntityExpenseBreakdown.md)
- [GetAccountAnalysisResponseEntityFundsManagement](docs/Model/GetAccountAnalysisResponseEntityFundsManagement.md)
- [GetAccountAnalysisResponseEntityInflowBreakdown](docs/Model/GetAccountAnalysisResponseEntityInflowBreakdown.md)
- [GetAccountAnalysisResponseEntityTransactionRoutineBreakdown](docs/Model/GetAccountAnalysisResponseEntityTransactionRoutineBreakdown.md)
- [GetAccountResponse](docs/Model/GetAccountResponse.md)
- [GetAccountSubscriptionsResponse](docs/Model/GetAccountSubscriptionsResponse.md)
- [GetAccountSubscriptionsResponseEntity](docs/Model/GetAccountSubscriptionsResponseEntity.md)
- [GetAccountTransactionsResponse](docs/Model/GetAccountTransactionsResponse.md)
- [GetAccountTransactionsResponseEntity](docs/Model/GetAccountTransactionsResponseEntity.md)
- [GetAccountTransactionsResponseEntityTransactionsInner](docs/Model/GetAccountTransactionsResponseEntityTransactionsInner.md)
- [GetAdvancedCacResponse](docs/Model/GetAdvancedCacResponse.md)
- [GetBanksResponse](docs/Model/GetBanksResponse.md)
- [GetBanksResponseEntityInner](docs/Model/GetBanksResponseEntityInner.md)
- [GetBasicBvnResponse](docs/Model/GetBasicBvnResponse.md)
- [GetBasicBvnResponseEntity](docs/Model/GetBasicBvnResponseEntity.md)
- [GetBasicCacResponse](docs/Model/GetBasicCacResponse.md)
- [GetBasicCacResponseEntity](docs/Model/GetBasicCacResponseEntity.md)
- [GetBasicPhoneNumberResponse](docs/Model/GetBasicPhoneNumberResponse.md)
- [GetBasicPhoneNumberResponseEntity](docs/Model/GetBasicPhoneNumberResponseEntity.md)
- [GetBinResponse](docs/Model/GetBinResponse.md)
- [GetBinResponseEntity](docs/Model/GetBinResponseEntity.md)
- [GetCacResponse](docs/Model/GetCacResponse.md)
- [GetCacResponseEntity](docs/Model/GetCacResponseEntity.md)
- [GetDataPlansResponse](docs/Model/GetDataPlansResponse.md)
- [GetDocumentAnalysisRequest](docs/Model/GetDocumentAnalysisRequest.md)
- [GetDocumentAnalysisResponse](docs/Model/GetDocumentAnalysisResponse.md)
- [GetDocumentAnalysisResponseEntity](docs/Model/GetDocumentAnalysisResponseEntity.md)
- [GetDocumentAnalysisResponseEntityData](docs/Model/GetDocumentAnalysisResponseEntityData.md)
- [GetDriversLicenseResponse](docs/Model/GetDriversLicenseResponse.md)
- [GetDriversLicenseResponseEntity](docs/Model/GetDriversLicenseResponseEntity.md)
- [GetEarningStructureResponse](docs/Model/GetEarningStructureResponse.md)
- [GetEarningStructureResponseEntity](docs/Model/GetEarningStructureResponseEntity.md)
- [GetEmailReputationResponse](docs/Model/GetEmailReputationResponse.md)
- [GetEmailReputationResponseEntity](docs/Model/GetEmailReputationResponseEntity.md)
- [GetEmailReputationResponseEntityDetails](docs/Model/GetEmailReputationResponseEntityDetails.md)
- [GetFullBvnResponse](docs/Model/GetFullBvnResponse.md)
- [GetFullBvnResponseEntity](docs/Model/GetFullBvnResponseEntity.md)
- [GetGenericOcrTextRequest](docs/Model/GetGenericOcrTextRequest.md)
- [GetGenericOcrTextResponse](docs/Model/GetGenericOcrTextResponse.md)
- [GetKycDriversLicenseResponse](docs/Model/GetKycDriversLicenseResponse.md)
- [GetKycDriversLicenseResponseEntity](docs/Model/GetKycDriversLicenseResponseEntity.md)
- [GetKycDriversLicenseResponseEntityPersonalDetails](docs/Model/GetKycDriversLicenseResponseEntityPersonalDetails.md)
- [GetKycPassportResponse](docs/Model/GetKycPassportResponse.md)
- [GetKycPassportResponseEntity](docs/Model/GetKycPassportResponseEntity.md)
- [GetNationalIdResponse](docs/Model/GetNationalIdResponse.md)
- [GetNationalIdResponseEntity](docs/Model/GetNationalIdResponseEntity.md)
- [GetNubanResponse](docs/Model/GetNubanResponse.md)
- [GetNubanResponseEntity](docs/Model/GetNubanResponseEntity.md)
- [GetOcrTextRequest](docs/Model/GetOcrTextRequest.md)
- [GetOcrTextResponse](docs/Model/GetOcrTextResponse.md)
- [GetOcrTextResponseEntity](docs/Model/GetOcrTextResponseEntity.md)
- [GetPassportResponse](docs/Model/GetPassportResponse.md)
- [GetPassportResponseEntity](docs/Model/GetPassportResponseEntity.md)
- [GetPhoneNumber404Response](docs/Model/GetPhoneNumber404Response.md)
- [GetPhoneNumberResponse](docs/Model/GetPhoneNumberResponse.md)
- [GetPhoneNumberResponseEntity](docs/Model/GetPhoneNumberResponseEntity.md)
- [GetPremiumBvnResponse](docs/Model/GetPremiumBvnResponse.md)
- [GetPremiumBvnResponseEntity](docs/Model/GetPremiumBvnResponseEntity.md)
- [GetScreeningInfoResponse](docs/Model/GetScreeningInfoResponse.md)
- [GetScreeningInfoResponseEntity](docs/Model/GetScreeningInfoResponseEntity.md)
- [GetScreeningInfoResponseEntityResult](docs/Model/GetScreeningInfoResponseEntityResult.md)
- [GetSenderIdResponse](docs/Model/GetSenderIdResponse.md)
- [GetSenderIdResponseEntityInner](docs/Model/GetSenderIdResponseEntityInner.md)
- [GetSmsStatusResponse](docs/Model/GetSmsStatusResponse.md)
- [GetSmsStatusResponseEntity](docs/Model/GetSmsStatusResponseEntity.md)
- [GetSpendingPatternResponse](docs/Model/GetSpendingPatternResponse.md)
- [GetSpendingPatternResponseEntity](docs/Model/GetSpendingPatternResponseEntity.md)
- [GetSpendingPatternResponseEntityPattern](docs/Model/GetSpendingPatternResponseEntityPattern.md)
- [GetSpendingPatternResponseEntityPatternAirtimeData](docs/Model/GetSpendingPatternResponseEntityPatternAirtimeData.md)
- [GetSpendingPatternResponseEntityPatternBankTransfer](docs/Model/GetSpendingPatternResponseEntityPatternBankTransfer.md)
- [GetSpendingPatternResponseEntityPatternCharges](docs/Model/GetSpendingPatternResponseEntityPatternCharges.md)
- [GetSpendingPatternResponseEntityPatternFood](docs/Model/GetSpendingPatternResponseEntityPatternFood.md)
- [GetSpendingPatternResponseEntityPatternOthers](docs/Model/GetSpendingPatternResponseEntityPatternOthers.md)
- [GetSsnitResponse](docs/Model/GetSsnitResponse.md)
- [GetSsnitResponseEntity](docs/Model/GetSsnitResponseEntity.md)
- [GetTinResponse](docs/Model/GetTinResponse.md)
- [GetTinResponseEntity](docs/Model/GetTinResponseEntity.md)
- [GetTransactionResponse](docs/Model/GetTransactionResponse.md)
- [GetTransactionResponseEntity](docs/Model/GetTransactionResponseEntity.md)
- [GetVinResponse](docs/Model/GetVinResponse.md)
- [GetVinResponseEntity](docs/Model/GetVinResponseEntity.md)
- [GetVninResponse](docs/Model/GetVninResponse.md)
- [GetVninResponseEntity](docs/Model/GetVninResponseEntity.md)
- [GetVoterResponse](docs/Model/GetVoterResponse.md)
- [GetVoterResponseEntity](docs/Model/GetVoterResponseEntity.md)
- [GetWalletBalanceResponse](docs/Model/GetWalletBalanceResponse.md)
- [GetWalletBalanceResponseEntity](docs/Model/GetWalletBalanceResponseEntity.md)
- [GetWalletResponse](docs/Model/GetWalletResponse.md)
- [GetWalletResponseEntity](docs/Model/GetWalletResponseEntity.md)
- [GetWalletsResponse](docs/Model/GetWalletsResponse.md)
- [GetWalletsResponseEntity](docs/Model/GetWalletsResponseEntity.md)
- [GetWebhooksResponse](docs/Model/GetWebhooksResponse.md)
- [GetWebhooksResponseEntityInner](docs/Model/GetWebhooksResponseEntityInner.md)
- [NotifyWebhookRequest](docs/Model/NotifyWebhookRequest.md)
- [NotifyWebhookRequestData](docs/Model/NotifyWebhookRequestData.md)
- [NotifyWebhookResponse](docs/Model/NotifyWebhookResponse.md)
- [PurchaseAirtimeRequest](docs/Model/PurchaseAirtimeRequest.md)
- [PurchaseAirtimeResponse](docs/Model/PurchaseAirtimeResponse.md)
- [PurchaseAirtimeResponseEntity](docs/Model/PurchaseAirtimeResponseEntity.md)
- [PurchaseAirtimeResponseEntityDataInner](docs/Model/PurchaseAirtimeResponseEntityDataInner.md)
- [PurchaseDataRequest](docs/Model/PurchaseDataRequest.md)
- [PurchaseDataResponse](docs/Model/PurchaseDataResponse.md)
- [PurchaseDataResponseEntityInner](docs/Model/PurchaseDataResponseEntityInner.md)
- [RequestSenderIdRequest](docs/Model/RequestSenderIdRequest.md)
- [RequestSenderIdResponse](docs/Model/RequestSenderIdResponse.md)
- [RequestSenderIdResponseEntityInner](docs/Model/RequestSenderIdResponseEntityInner.md)
- [ScreenAmlRequest](docs/Model/ScreenAmlRequest.md)
- [ScreenAmlResponse](docs/Model/ScreenAmlResponse.md)
- [ScreenAmlResponseEntity](docs/Model/ScreenAmlResponseEntity.md)
- [SendOtpRequest](docs/Model/SendOtpRequest.md)
- [SendOtpResponse](docs/Model/SendOtpResponse.md)
- [SendOtpResponseEntityInner](docs/Model/SendOtpResponseEntityInner.md)
- [SendSmsRequest](docs/Model/SendSmsRequest.md)
- [SendSmsResponse](docs/Model/SendSmsResponse.md)
- [SendSmsResponseEntity](docs/Model/SendSmsResponseEntity.md)
- [SubscribeServiceRequest](docs/Model/SubscribeServiceRequest.md)
- [SubscribeServiceResponse](docs/Model/SubscribeServiceResponse.md)
- [TransferFundsRequest](docs/Model/TransferFundsRequest.md)
- [TransferFundsResponse](docs/Model/TransferFundsResponse.md)
- [TransferFundsResponseEntity](docs/Model/TransferFundsResponseEntity.md)
- [ValidateBvnResponse](docs/Model/ValidateBvnResponse.md)
- [ValidateBvnResponseEntity](docs/Model/ValidateBvnResponseEntity.md)
- [ValidateBvnResponseEntityBvn](docs/Model/ValidateBvnResponseEntityBvn.md)
- [ValidateBvnResponseEntityFirstName](docs/Model/ValidateBvnResponseEntityFirstName.md)
- [ValidateOtpResponse](docs/Model/ValidateOtpResponse.md)
- [ValidateOtpResponseEntity](docs/Model/ValidateOtpResponseEntity.md)
- [VerifyAgeResponse](docs/Model/VerifyAgeResponse.md)
- [VerifyAgeResponseEntity](docs/Model/VerifyAgeResponseEntity.md)
- [VerifyPhotoIdWithSelfieRequest](docs/Model/VerifyPhotoIdWithSelfieRequest.md)
- [VerifyPhotoIdWithSelfieResponse](docs/Model/VerifyPhotoIdWithSelfieResponse.md)
- [VerifyPhotoIdWithSelfieResponseEntity](docs/Model/VerifyPhotoIdWithSelfieResponseEntity.md)
- [VerifyPhotoIdWithSelfieResponseEntitySelfie](docs/Model/VerifyPhotoIdWithSelfieResponseEntitySelfie.md)
- [VerifySelfieBvnRequest](docs/Model/VerifySelfieBvnRequest.md)
- [VerifySelfieBvnResponse](docs/Model/VerifySelfieBvnResponse.md)
- [VerifySelfieBvnResponseEntity](docs/Model/VerifySelfieBvnResponseEntity.md)
- [VerifySelfieBvnResponseEntitySelfieVerification](docs/Model/VerifySelfieBvnResponseEntitySelfieVerification.md)
- [VerifySelfieNinRequest](docs/Model/VerifySelfieNinRequest.md)
- [VerifySelfieNinResponse](docs/Model/VerifySelfieNinResponse.md)
- [VerifySelfieNinResponseEntity](docs/Model/VerifySelfieNinResponseEntity.md)
- [VerifySelfieNinResponseEntitySelfieVerification](docs/Model/VerifySelfieNinResponseEntitySelfieVerification.md)

## Authorization

### apikeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### appIdAuth

- **Type**: API key
- **API key parameter name**: AppId
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by [Konfig](https://konfigthis.com):

- API version: `1.0.0`
    - Package version: `1.0.0`
