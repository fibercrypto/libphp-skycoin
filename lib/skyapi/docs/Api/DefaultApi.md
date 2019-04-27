# Skyapi\DefaultApi

All URIs are relative to *http://127.0.0.1:6420*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressCount**](DefaultApi.md#addressCount) | **GET** /api/v1/addresscount | Returns the total number of unique address that have coins.
[**addressUxouts**](DefaultApi.md#addressUxouts) | **GET** /api/v1/address_uxouts | 
[**balanceGet**](DefaultApi.md#balanceGet) | **GET** /api/v1/balance | Returns the balance of one or more addresses, both confirmed and predicted. The predicted balance is the confirmed balance minus the pending spends.
[**balancePost**](DefaultApi.md#balancePost) | **POST** /api/v1/balance | Returns the balance of one or more addresses, both confirmed and predicted. The predicted balance is the confirmed balance minus the pending spends.
[**block**](DefaultApi.md#block) | **GET** /api/v1/block | 
[**blockchainMetadata**](DefaultApi.md#blockchainMetadata) | **GET** /api/v1/blockchain/metadata | Returns the blockchain metadata.
[**blockchainProgress**](DefaultApi.md#blockchainProgress) | **GET** /api/v1/blockchain/progress | Returns the blockchain sync progress.
[**blocksGet**](DefaultApi.md#blocksGet) | **GET** /api/v1/blocks | blocksHandler returns blocks between a start and end point,
[**blocksPost**](DefaultApi.md#blocksPost) | **POST** /api/v1/blocks | blocksHandler returns blocks between a start and end point,
[**coinSupply**](DefaultApi.md#coinSupply) | **GET** /api/v1/coinSupply | 
[**csrf**](DefaultApi.md#csrf) | **GET** /api/v1/csrf | Creates a new CSRF token. Previous CSRF tokens are invalidated by this call.
[**defaultConnections**](DefaultApi.md#defaultConnections) | **GET** /api/v1/network/defaultConnections | defaultConnectionsHandler returns the list of default hardcoded bootstrap addresses.\\n They are not necessarily connected to.
[**explorerAddress**](DefaultApi.md#explorerAddress) | **GET** /api/v1/explorer/address | 
[**health**](DefaultApi.md#health) | **GET** /api/v1/health | Returns node health data.
[**lastBlocks**](DefaultApi.md#lastBlocks) | **GET** /api/v1/last_blocks | 
[**networkConnection**](DefaultApi.md#networkConnection) | **GET** /api/v1/network/connection | This endpoint returns a specific connection.
[**networkConnections**](DefaultApi.md#networkConnections) | **GET** /api/v1/network/connections | This endpoint returns all outgoings connections.
[**networkConnectionsDisconnect**](DefaultApi.md#networkConnectionsDisconnect) | **POST** /api/v1/network/connection/disconnect | 
[**networkConnectionsExchange**](DefaultApi.md#networkConnectionsExchange) | **GET** /api/v1/network/connections/exchange | 
[**networkConnectionsTrust**](DefaultApi.md#networkConnectionsTrust) | **GET** /api/v1/network/connections/trust | trustConnectionsHandler returns all trusted connections.\\n They are not necessarily connected to. In the default configuration, these will be a subset of the default hardcoded bootstrap addresses.
[**outputsGet**](DefaultApi.md#outputsGet) | **GET** /api/v1/outputs | If neither addrs nor hashes are specificed, return all unspent outputs. If only one filter is specified, then return outputs match the filter. Both filters cannot be specified.
[**outputsPost**](DefaultApi.md#outputsPost) | **POST** /api/v1/outputs | If neither addrs nor hashes are specificed, return all unspent outputs. If only one filter is specified, then return outputs match the filter. Both filters cannot be specified.
[**pendingTxs**](DefaultApi.md#pendingTxs) | **GET** /api/v1/pendingTxs | 
[**resendUnconfirmedTxns**](DefaultApi.md#resendUnconfirmedTxns) | **POST** /api/v1/resendUnconfirmedTxns | 
[**richlist**](DefaultApi.md#richlist) | **GET** /api/v1/richlist | Returns the top skycoin holders.
[**transaction**](DefaultApi.md#transaction) | **GET** /api/v1/transaction | 
[**transactionInject**](DefaultApi.md#transactionInject) | **POST** /api/v2/transaction/inject | Broadcast a hex-encoded, serialized transaction to the network.
[**transactionRaw**](DefaultApi.md#transactionRaw) | **GET** /api/v2/transaction/raw | Returns the hex-encoded byte serialization of a transaction. The transaction may be confirmed or unconfirmed.
[**transactionVerify**](DefaultApi.md#transactionVerify) | **POST** /api/v2/transaction/verify | 
[**transactionsGet**](DefaultApi.md#transactionsGet) | **GET** /api/v1/transactions | Returns transactions that match the filters.
[**transactionsPost**](DefaultApi.md#transactionsPost) | **POST** /api/v1/transactions | Returns transactions that match the filters.
[**uxout**](DefaultApi.md#uxout) | **GET** /api/v1/uxout | Returns an unspent output by ID.
[**verifyAddress**](DefaultApi.md#verifyAddress) | **POST** /api/v2/address/verify | Verifies a Skycoin address.
[**version**](DefaultApi.md#version) | **GET** /api/v1/version | 
[**wallet**](DefaultApi.md#wallet) | **GET** /api/v1/wallet | Returns a wallet by id.
[**walletBalance**](DefaultApi.md#walletBalance) | **GET** /api/v1/wallet/balance | Returns the wallet&#39;s balance, both confirmed and predicted.  The predicted balance is the confirmed balance minus the pending spends.
[**walletCreate**](DefaultApi.md#walletCreate) | **POST** /api/v1/wallet/create | 
[**walletDecrypt**](DefaultApi.md#walletDecrypt) | **POST** /api/v1/wallet/decrypt | Decrypts wallet.
[**walletEncrypt**](DefaultApi.md#walletEncrypt) | **POST** /api/v1/wallet/encrypt | Encrypt wallet.
[**walletFolder**](DefaultApi.md#walletFolder) | **GET** /api/v1/wallets/folderName | 
[**walletNewAddress**](DefaultApi.md#walletNewAddress) | **POST** /api/v1/wallet/newAddress | 
[**walletNewSeed**](DefaultApi.md#walletNewSeed) | **GET** /api/v1/wallet/newSeed | 
[**walletRecover**](DefaultApi.md#walletRecover) | **POST** /api/v2/wallet/recover | Recovers an encrypted wallet by providing the seed. The first address will be generated from seed and compared to the first address of the specified wallet. If they match, the wallet will be regenerated with an optional password. If the wallet is not encrypted, an error is returned.
[**walletSeed**](DefaultApi.md#walletSeed) | **POST** /api/v1/wallet/seed | This endpoint only works for encrypted wallets. If the wallet is unencrypted, The seed will be not returned.
[**walletSeedVerify**](DefaultApi.md#walletSeedVerify) | **POST** /api/v2/wallet/seed/verify | Verifies a wallet seed.
[**walletSpent**](DefaultApi.md#walletSpent) | **POST** /api/v1/wallet/spend | 
[**walletTransaction**](DefaultApi.md#walletTransaction) | **POST** /api/v1/wallet/transaction | 
[**walletTransactions**](DefaultApi.md#walletTransactions) | **GET** /api/v1/wallet/transactions | 
[**walletUnload**](DefaultApi.md#walletUnload) | **POST** /api/v1/wallet/unload | Unloads wallet from the wallet service.
[**walletUpdate**](DefaultApi.md#walletUpdate) | **POST** /api/v1/wallet/update | Update the wallet.
[**wallets**](DefaultApi.md#wallets) | **GET** /api/v1/wallets | 


# **addressCount**
> object addressCount()

Returns the total number of unique address that have coins.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->addressCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addressCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressUxouts**
> \Skyapi\Model\InlineResponse200[] addressUxouts($address)



Returns the historical, spent outputs associated with an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | address to filter by

try {
    $result = $apiInstance->addressUxouts($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addressUxouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| address to filter by |

### Return type

[**\Skyapi\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **balanceGet**
> object balanceGet($addrs)

Returns the balance of one or more addresses, both confirmed and predicted. The predicted balance is the confirmed balance minus the pending spends.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addrs = 'addrs_example'; // string | command separated list of addresses

try {
    $result = $apiInstance->balanceGet($addrs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->balanceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addrs** | **string**| command separated list of addresses |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **balancePost**
> object balancePost($addrs)

Returns the balance of one or more addresses, both confirmed and predicted. The predicted balance is the confirmed balance minus the pending spends.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addrs = 'addrs_example'; // string | command separated list of addresses

try {
    $result = $apiInstance->balancePost($addrs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->balancePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addrs** | **string**| command separated list of addresses |

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **block**
> object block($hash, $seq)



Returns a block by hash or seq. Note: only one of hash or seq is allowed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | 
$seq = 56; // int | 

try {
    $result = $apiInstance->block($hash, $seq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->block: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**|  | [optional]
 **seq** | **int**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blockchainMetadata**
> object blockchainMetadata()

Returns the blockchain metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->blockchainMetadata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->blockchainMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blockchainProgress**
> object blockchainProgress()

Returns the blockchain sync progress.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->blockchainProgress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->blockchainProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blocksGet**
> object blocksGet($start, $end, $seqs)

blocksHandler returns blocks between a start and end point,

or an explicit list of sequences. If using start and end, the block sequences include both the start and end point. Explicit sequences cannot be combined with start and end. Without verbose.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start = 56; // int | 
$end = 56; // int | 
$seqs = array(56); // int[] | 

try {
    $result = $apiInstance->blocksGet($start, $end, $seqs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->blocksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **int**|  | [optional]
 **end** | **int**|  | [optional]
 **seqs** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blocksPost**
> object blocksPost($start, $end, $seqs)

blocksHandler returns blocks between a start and end point,

or an explicit list of sequences. If using start and end, the block sequences include both the start and end point. Explicit sequences cannot be combined with start and end. Without verbose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 56; // int | 
$end = 56; // int | 
$seqs = array(56); // int[] | 

try {
    $result = $apiInstance->blocksPost($start, $end, $seqs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->blocksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **int**|  | [optional]
 **end** | **int**|  | [optional]
 **seqs** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coinSupply**
> coinSupply()



coinSupplyHandler returns coin distribution supply stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->coinSupply();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->coinSupply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **csrf**
> \Skyapi\Model\InlineResponse2001 csrf()

Creates a new CSRF token. Previous CSRF tokens are invalidated by this call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->csrf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->csrf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Skyapi\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **defaultConnections**
> string[] defaultConnections()

defaultConnectionsHandler returns the list of default hardcoded bootstrap addresses.\\n They are not necessarily connected to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->defaultConnections();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->defaultConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **explorerAddress**
> \Skyapi\Model\InlineResponse2002[] explorerAddress($address)



Returns all transactions (confirmed and unconfirmed) for an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | tags to filter by

try {
    $result = $apiInstance->explorerAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->explorerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| tags to filter by | [optional]

### Return type

[**\Skyapi\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **health**
> object health()

Returns node health data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->health();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->health: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lastBlocks**
> object lastBlocks($num)



Returns the most recent N blocks on the blockchain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$num = 56; // int | 

try {
    $result = $apiInstance->lastBlocks($num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->lastBlocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **num** | **int**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkConnection**
> \Skyapi\Model\InlineResponse2003 networkConnection($addr)

This endpoint returns a specific connection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addr = 'addr_example'; // string | Address port

try {
    $result = $apiInstance->networkConnection($addr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addr** | **string**| Address port |

### Return type

[**\Skyapi\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkConnections**
> \Skyapi\Model\InlineResponse2003[] networkConnections($states, $direction)

This endpoint returns all outgoings connections.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$states = 'states_example'; // string | Connection status.
$direction = 'direction_example'; // string | Direction of the connection.

try {
    $result = $apiInstance->networkConnections($states, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkConnections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **states** | **string**| Connection status. | [optional]
 **direction** | **string**| Direction of the connection. | [optional]

### Return type

[**\Skyapi\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkConnectionsDisconnect**
> networkConnectionsDisconnect($id)



This endpoint disconnects a connection by ID or address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Address id.

try {
    $apiInstance->networkConnectionsDisconnect($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkConnectionsDisconnect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Address id. |

### Return type

void (empty response body)

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkConnectionsExchange**
> string[] networkConnectionsExchange()



This endpoint returns all connections found through peer exchange

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkConnectionsExchange();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkConnectionsExchange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **networkConnectionsTrust**
> string[] networkConnectionsTrust()

trustConnectionsHandler returns all trusted connections.\\n They are not necessarily connected to. In the default configuration, these will be a subset of the default hardcoded bootstrap addresses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->networkConnectionsTrust();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkConnectionsTrust: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outputsGet**
> object outputsGet($address, $hash)

If neither addrs nor hashes are specificed, return all unspent outputs. If only one filter is specified, then return outputs match the filter. Both filters cannot be specified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = array('address_example'); // string[] | 
$hash = array('hash_example'); // string[] | 

try {
    $result = $apiInstance->outputsGet($address, $hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->outputsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | [**string[]**](../Model/string.md)|  | [optional]
 **hash** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **outputsPost**
> object outputsPost($address, $hash)

If neither addrs nor hashes are specificed, return all unspent outputs. If only one filter is specified, then return outputs match the filter. Both filters cannot be specified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 'address_example'; // string | 
$hash = 'hash_example'; // string | 

try {
    $result = $apiInstance->outputsPost($address, $hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->outputsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**|  | [optional]
 **hash** | **string**|  | [optional]

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pendingTxs**
> \Skyapi\Model\InlineResponse2004[] pendingTxs()



Returns pending (unconfirmed) transactions without verbose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->pendingTxs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pendingTxs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Skyapi\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendUnconfirmedTxns**
> resendUnconfirmedTxns()



Broadcasts all unconfirmed transactions from the unconfirmed transaction pool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->resendUnconfirmedTxns();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->resendUnconfirmedTxns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **richlist**
> object richlist($include_distribution, $n)

Returns the top skycoin holders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$include_distribution = True; // bool | include distribution addresses or not, default value false
$n = 'n_example'; // string | include distribution addresses or not, default value false

try {
    $result = $apiInstance->richlist($include_distribution, $n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->richlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_distribution** | **bool**| include distribution addresses or not, default value false | [optional]
 **n** | **string**| include distribution addresses or not, default value false | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transaction**
> object transaction($txid, $encoded)



Returns a transaction identified by its txid hash with just id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = 'txid_example'; // string | transaction hash
$encoded = True; // bool | return as a raw encoded transaction.

try {
    $result = $apiInstance->transaction($txid, $encoded);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| transaction hash |
 **encoded** | **bool**| return as a raw encoded transaction. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionInject**
> object transactionInject($rawtx)

Broadcast a hex-encoded, serialized transaction to the network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rawtx = 'rawtx_example'; // string | hex-encoded serialized transaction string.

try {
    $result = $apiInstance->transactionInject($rawtx);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionInject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rawtx** | **string**| hex-encoded serialized transaction string. |

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRaw**
> object transactionRaw($txid)

Returns the hex-encoded byte serialization of a transaction. The transaction may be confirmed or unconfirmed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = 'txid_example'; // string | Transaction id hash

try {
    $result = $apiInstance->transactionRaw($txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionRaw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Transaction id hash | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionVerify**
> object transactionVerify()



Decode and verify an encoded transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->transactionVerify();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionsGet**
> object transactionsGet($addrs, $confirmed)

Returns transactions that match the filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addrs = 'addrs_example'; // string | command separated list of addresses
$confirmed = 'confirmed_example'; // string | Whether the transactions should be confirmed [optional, must be 0 or 1; if not provided, returns all]

try {
    $result = $apiInstance->transactionsGet($addrs, $confirmed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addrs** | **string**| command separated list of addresses | [optional]
 **confirmed** | **string**| Whether the transactions should be confirmed [optional, must be 0 or 1; if not provided, returns all] | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionsPost**
> object transactionsPost($addrs, $confirmed)

Returns transactions that match the filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addrs = 'addrs_example'; // string | command separated list of addresses
$confirmed = 'confirmed_example'; // string | Whether the transactions should be confirmed [optional, must be 0 or 1; if not provided, returns all]

try {
    $result = $apiInstance->transactionsPost($addrs, $confirmed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addrs** | **string**| command separated list of addresses | [optional]
 **confirmed** | **string**| Whether the transactions should be confirmed [optional, must be 0 or 1; if not provided, returns all] | [optional]

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uxout**
> object uxout($uxid)

Returns an unspent output by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uxid = 'uxid_example'; // string | uxid to filter by

try {
    $result = $apiInstance->uxout($uxid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uxout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uxid** | **string**| uxid to filter by | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyAddress**
> \Skyapi\Model\InlineResponse2007 verifyAddress($address)

Verifies a Skycoin address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 'address_example'; // string | Address id.

try {
    $result = $apiInstance->verifyAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->verifyAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address id. |

### Return type

[**\Skyapi\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **version**
> version()



versionHandler returns the application version info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->version();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->version: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wallet**
> object wallet($id)

Returns a wallet by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | tags to filter by

try {
    $result = $apiInstance->wallet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->wallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| tags to filter by |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletBalance**
> object walletBalance($id)

Returns the wallet's balance, both confirmed and predicted.  The predicted balance is the confirmed balance minus the pending spends.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | tags to filter by

try {
    $result = $apiInstance->walletBalance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| tags to filter by |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletCreate**
> object walletCreate($seed, $label, $scan, $encrypt, $password)



Loads wallet from seed, will scan ahead N address and load addresses till the last one that have coins.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seed = 'seed_example'; // string | Wallet seed.
$label = 'label_example'; // string | Wallet label.
$scan = 56; // int | The number of addresses to scan ahead for balances.
$encrypt = True; // bool | Encrypt wallet.
$password = 'password_example'; // string | Wallet Password

try {
    $result = $apiInstance->walletCreate($seed, $label, $scan, $encrypt, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seed** | **string**| Wallet seed. |
 **label** | **string**| Wallet label. |
 **scan** | **int**| The number of addresses to scan ahead for balances. | [optional]
 **encrypt** | **bool**| Encrypt wallet. | [optional]
 **password** | **string**| Wallet Password | [optional]

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletDecrypt**
> object walletDecrypt($id, $password)

Decrypts wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Wallet id.
$password = 'password_example'; // string | Wallet password.

try {
    $result = $apiInstance->walletDecrypt($id, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletDecrypt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet id. |
 **password** | **string**| Wallet password. |

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletEncrypt**
> object walletEncrypt($id, $password)

Encrypt wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Wallet id.
$password = 'password_example'; // string | Wallet password.

try {
    $result = $apiInstance->walletEncrypt($id, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletEncrypt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet id. |
 **password** | **string**| Wallet password. |

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletFolder**
> \Skyapi\Model\InlineResponse2006 walletFolder($addr)



Returns the wallet directory path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addr = 'addr_example'; // string | Address port

try {
    $result = $apiInstance->walletFolder($addr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addr** | **string**| Address port |

### Return type

[**\Skyapi\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletNewAddress**
> object walletNewAddress($id, $num, $password)



Generates new addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Wallet Id
$num = 'num_example'; // string | The number you want to generate
$password = 'password_example'; // string | Wallet Password

try {
    $result = $apiInstance->walletNewAddress($id, $num, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletNewAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet Id |
 **num** | **string**| The number you want to generate | [optional]
 **password** | **string**| Wallet Password | [optional]

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletNewSeed**
> object walletNewSeed($entropy)



Returns the wallet directory path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entropy = 'entropy_example'; // string | Entropy bitSize.

try {
    $result = $apiInstance->walletNewSeed($entropy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletNewSeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entropy** | **string**| Entropy bitSize. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletRecover**
> object walletRecover($id, $seed, $password)

Recovers an encrypted wallet by providing the seed. The first address will be generated from seed and compared to the first address of the specified wallet. If they match, the wallet will be regenerated with an optional password. If the wallet is not encrypted, an error is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Wallet id.
$seed = 'seed_example'; // string | Wallet seed.
$password = 'password_example'; // string | Wallet password.

try {
    $result = $apiInstance->walletRecover($id, $seed, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletRecover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet id. |
 **seed** | **string**| Wallet seed. |
 **password** | **string**| Wallet password. | [optional]

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletSeed**
> object walletSeed($id, $password)

This endpoint only works for encrypted wallets. If the wallet is unencrypted, The seed will be not returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Wallet Id.
$password = 'password_example'; // string | Wallet password.

try {
    $result = $apiInstance->walletSeed($id, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletSeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet Id. |
 **password** | **string**| Wallet password. |

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletSeedVerify**
> object walletSeedVerify($seed)

Verifies a wallet seed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seed = 'seed_example'; // string | Seed to be verified.

try {
    $result = $apiInstance->walletSeedVerify($seed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletSeedVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seed** | **string**| Seed to be verified. | [optional]

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletSpent**
> object walletSpent($id, $dst, $coins, $password)



Creates and broadcasts a transaction sending money from one of our wallets to destination address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Wallet id
$dst = 'dst_example'; // string | Recipient address
$coins = 'coins_example'; // string | Number of coins to spend, in droplets. 1 coin equals 1e6 droplets.
$password = 'password_example'; // string | Wallet password.

try {
    $result = $apiInstance->walletSpent($id, $dst, $coins, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletSpent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet id |
 **dst** | **string**| Recipient address |
 **coins** | **string**| Number of coins to spend, in droplets. 1 coin equals 1e6 droplets. |
 **password** | **string**| Wallet password. |

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletTransaction**
> object walletTransaction($inline_object)



Creates a signed transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = new \Skyapi\Model\InlineObject(); // \Skyapi\Model\InlineObject | 

try {
    $result = $apiInstance->walletTransaction($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\Skyapi\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

**object**

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletTransactions**
> object walletTransactions($id)



Returns returns all unconfirmed transactions for all addresses in a given wallet verbose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Wallet id.

try {
    $result = $apiInstance->walletTransactions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet id. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletUnload**
> walletUnload($id)

Unloads wallet from the wallet service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Wallet Id.

try {
    $apiInstance->walletUnload($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletUnload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet Id. |

### Return type

void (empty response body)

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletUpdate**
> walletUpdate($id, $label)

Update the wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: csrfAuth
$config = Skyapi\Configuration::getDefaultConfiguration()->setApiKey('X-CSRF-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Skyapi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-CSRF-TOKEN', 'Bearer');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Wallet Id.
$label = 'label_example'; // string | The label the wallet will be updated to.

try {
    $apiInstance->walletUpdate($id, $label);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet Id. |
 **label** | **string**| The label the wallet will be updated to. |

### Return type

void (empty response body)

### Authorization

[csrfAuth](../../README.md#csrfAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wallets**
> \Skyapi\Model\InlineResponse2005[] wallets()



Returns all loaded wallets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Skyapi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->wallets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->wallets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Skyapi\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

