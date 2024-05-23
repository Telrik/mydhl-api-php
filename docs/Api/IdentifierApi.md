# MyDHL\Client\IdentifierApi

All URIs are relative to https://api-mock.dhl.com/mydhlapi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**expApiIdentifiers()**](IdentifierApi.md#expApiIdentifiers) | **GET** /identifiers | Service to allocate identifiers upfront for DHL Express Breakbulk or Loose Break Bulk shipments |


## `expApiIdentifiers()`

```php
expApiIdentifiers($account_number, $type, $size, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version): \MyDHL\Client\Model\SupermodelIoLogisticsExpressIdentifierResponse
```

Service to allocate identifiers upfront for DHL Express Breakbulk or Loose Break Bulk shipments

Service to allocate identifiers upfront for DHL Express Breakbulk or Loose Break Bulk shipments. Requires authorization to use this service from DHL Express.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\IdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_number = 123456789; // string | DHL Express customer account number
$type = SID; // string | Type of DHL Express identifier to retrieve
$size = 1; // string | Number of identifiers to be retrieved
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)

try {
    $result = $apiInstance->expApiIdentifiers($account_number, $type, $size, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentifierApi->expApiIdentifiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_number** | **string**| DHL Express customer account number | |
| **type** | **string**| Type of DHL Express identifier to retrieve | |
| **size** | **string**| Number of identifiers to be retrieved | |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |

### Return type

[**\MyDHL\Client\Model\SupermodelIoLogisticsExpressIdentifierResponse**](../Model/SupermodelIoLogisticsExpressIdentifierResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
