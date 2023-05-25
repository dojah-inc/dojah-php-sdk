# Dojah\WalletApi

All URIs are relative to https://api.dojah.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWallet()**](WalletApi.md#createWallet) | **POST** /v1/wallet/ngn/create | Create NGN Wallet |
| [**creditSubwallet()**](WalletApi.md#creditSubwallet) | **POST** /v1/wallet/ngn/credit | Credit Sub-wallet |
| [**getTransaction()**](WalletApi.md#getTransaction) | **GET** /v1/wallet/ngn/transaction | Retrieve Transaction Details |
| [**getWallet()**](WalletApi.md#getWallet) | **GET** /v1/wallet/ngn/retrieve | Retrieve Wallet Details |
| [**getWallets()**](WalletApi.md#getWallets) | **GET** /v1/wallet/ngn/accounts | Get Wallets |
| [**transferFunds()**](WalletApi.md#transferFunds) | **POST** /v1/wallet/ngn/transfer | Transfer Funds |


## `createWallet()`

```php
createWallet($create_wallet_request): \Dojah\Model\CreateWalletResponse
```

Create NGN Wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$last_name = "Dojah";
$first_name = "Inc";
$phone_number = "08068810258";
$dob = "18-May-1992";
$route = "WEMA";

try {
    $result = $dojah->wallet->createWallet(
        last_name: $last_name, 
        first_name: $first_name, 
        phone_number: $phone_number, 
        dob: $dob, 
        route: $route
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WalletApi->createWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_wallet_request** | [**\Dojah\Model\CreateWalletRequest**](../Model/CreateWalletRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\CreateWalletResponse**](../Model/CreateWalletResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditSubwallet()`

```php
creditSubwallet($credit_subwallet_request): \Dojah\Model\CreditSubwalletResponse
```

Credit Sub-wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
);

$amount = "12";
$wallet_id = "867a8cae-8073-4914-8b04-d7fd096c1006";

try {
    $result = $dojah->wallet->creditSubwallet(
        amount: $amount, 
        wallet_id: $wallet_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WalletApi->creditSubwallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_subwallet_request** | [**\Dojah\Model\CreditSubwalletRequest**](../Model/CreditSubwalletRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\CreditSubwalletResponse**](../Model/CreditSubwalletResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransaction()`

```php
getTransaction($transaction_id): \Dojah\Model\GetTransactionResponse
```

Retrieve Transaction Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$transaction_id = "Dojah-c02585e5-9a8b-4230-8c1b-11fd2869f4ce";

try {
    $result = $dojah->wallet->getTransaction(
        transaction_id: $transaction_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WalletApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetTransactionResponse**](../Model/GetTransactionResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWallet()`

```php
getWallet($wallet_id): \Dojah\Model\GetWalletResponse
```

Retrieve Wallet Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$wallet_id = "694a047f-fb99-46d7-8c3c-d655716a834a";

try {
    $result = $dojah->wallet->getWallet(
        wallet_id: $wallet_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WalletApi->getWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetWalletResponse**](../Model/GetWalletResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWallets()`

```php
getWallets($app_id): \Dojah\Model\GetWalletsResponse
```

Get Wallets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$app_id = "{{app_id}}";

try {
    $result = $dojah->wallet->getWallets(
        app_id: $app_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WalletApi->getWallets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**|  | [optional] |

### Return type

[**\Dojah\Model\GetWalletsResponse**](../Model/GetWalletsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferFunds()`

```php
transferFunds($transfer_funds_request): \Dojah\Model\TransferFundsResponse
```

Transfer Funds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$dojah = new \Dojah\Client(
    Authorization: YOUR_AUTHORIZATION,
    AppId: YOUR_APP_ID,
);

$amount = "50";
$recipient_bank_code = "058";
$recipient_account_number = "0037466959";
$wallet_id = "6187eb92-a4ad-420f-98cf-05a34188f467";

try {
    $result = $dojah->wallet->transferFunds(
        amount: $amount, 
        recipient_bank_code: $recipient_bank_code, 
        recipient_account_number: $recipient_account_number, 
        wallet_id: $wallet_id
    );
    print_r($result->$getEntity());
} catch (\Exception $e) {
    echo 'Exception when calling WalletApi->transferFunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_funds_request** | [**\Dojah\Model\TransferFundsRequest**](../Model/TransferFundsRequest.md)|  | [optional] |

### Return type

[**\Dojah\Model\TransferFundsResponse**](../Model/TransferFundsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth), [appIdAuth](../../README.md#appIdAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
