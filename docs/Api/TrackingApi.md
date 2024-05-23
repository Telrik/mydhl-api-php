# MyDHL\Client\TrackingApi

All URIs are relative to https://api-mock.dhl.com/mydhlapi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**expApiShipmentsTracking()**](TrackingApi.md#expApiShipmentsTracking) | **GET** /shipments/{shipmentTrackingNumber}/tracking | Track a single DHL Express Shipment |
| [**expApiShipmentsTrackingMulti()**](TrackingApi.md#expApiShipmentsTrackingMulti) | **GET** /tracking | Track a single or multiple DHL Express Shipments |


## `expApiShipmentsTracking()`

```php
expApiShipmentsTracking($shipment_tracking_number, $tracking_view, $level_of_detail, $request_controlled_access_data_codes, $request_gmt_offset_per_event, $message_reference, $message_reference_date, $accept_language, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version): \MyDHL\Client\Model\SupermodelIoLogisticsExpressTrackingResponse
```

Track a single DHL Express Shipment

The Tracking service retrieves tracking statuses for a single DHL Express Shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_tracking_number = 9356579890; // string | DHL Express shipment identification number
$tracking_view = all; // string
$level_of_detail = all; // string
$request_controlled_access_data_codes = false; // bool | Query parameter to request to return values of controlled access code fields in response.
$request_gmt_offset_per_event = false; // bool | Query parameter to request to return GMT Offset of each event in response, for both shipment level and piece level.
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$accept_language = eng; // string | Format {3-character language code}
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)

try {
    $result = $apiInstance->expApiShipmentsTracking($shipment_tracking_number, $tracking_view, $level_of_detail, $request_controlled_access_data_codes, $request_gmt_offset_per_event, $message_reference, $message_reference_date, $accept_language, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->expApiShipmentsTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_tracking_number** | **string**| DHL Express shipment identification number | |
| **tracking_view** | **string**|  | [optional] [default to &#39;all-checkpoints&#39;] |
| **level_of_detail** | **string**|  | [optional] [default to &#39;shipment&#39;] |
| **request_controlled_access_data_codes** | **bool**| Query parameter to request to return values of controlled access code fields in response. | [optional] |
| **request_gmt_offset_per_event** | **bool**| Query parameter to request to return GMT Offset of each event in response, for both shipment level and piece level. | [optional] |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **accept_language** | **string**| Format {3-character language code} | [optional] [default to &#39;eng&#39;] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |

### Return type

[**\MyDHL\Client\Model\SupermodelIoLogisticsExpressTrackingResponse**](../Model/SupermodelIoLogisticsExpressTrackingResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expApiShipmentsTrackingMulti()`

```php
expApiShipmentsTrackingMulti($shipment_tracking_number, $piece_tracking_number, $shipment_reference, $shipment_reference_type, $shipper_account_number, $date_range_from, $date_range_to, $tracking_view, $level_of_detail, $request_controlled_access_data_codes, $message_reference, $message_reference_date, $accept_language, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version): \MyDHL\Client\Model\SupermodelIoLogisticsExpressTrackingResponse
```

Track a single or multiple DHL Express Shipments

The Tracking service retrieves tracking statuses for a single or multiple DHL Express Shipments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_tracking_number = 9356579890; // string[] | DHL Express shipment identification number
$piece_tracking_number = array('piece_tracking_number_example'); // string[] | DHL Express shipment piece tracking number
$shipment_reference = CustomerReference1; // string | Shipment reference which was provided during the shipment label creation
$shipment_reference_type = CU; // string | Shipment reference type which was provided during the shipment label creation
$shipper_account_number = 123456789; // string | Shipper DHL Express Account number under which the shipment label was created
$date_range_from = 2020-05-01; // string | When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the start of the period.
$date_range_to = 2020-06-01; // string | When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the end of the period.
$tracking_view = all; // string
$level_of_detail = all; // string
$request_controlled_access_data_codes = false; // bool | Query parameter to request to return values of controlled access code fields in response.
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$accept_language = eng; // string | Format {3-character language code}
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)

try {
    $result = $apiInstance->expApiShipmentsTrackingMulti($shipment_tracking_number, $piece_tracking_number, $shipment_reference, $shipment_reference_type, $shipper_account_number, $date_range_from, $date_range_to, $tracking_view, $level_of_detail, $request_controlled_access_data_codes, $message_reference, $message_reference_date, $accept_language, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->expApiShipmentsTrackingMulti: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_tracking_number** | [**string[]**](../Model/string.md)| DHL Express shipment identification number | [optional] |
| **piece_tracking_number** | [**string[]**](../Model/string.md)| DHL Express shipment piece tracking number | [optional] |
| **shipment_reference** | **string**| Shipment reference which was provided during the shipment label creation | [optional] |
| **shipment_reference_type** | **string**| Shipment reference type which was provided during the shipment label creation | [optional] |
| **shipper_account_number** | **string**| Shipper DHL Express Account number under which the shipment label was created | [optional] |
| **date_range_from** | **string**| When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the start of the period. | [optional] |
| **date_range_to** | **string**| When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the end of the period. | [optional] |
| **tracking_view** | **string**|  | [optional] [default to &#39;all-checkpoints&#39;] |
| **level_of_detail** | **string**|  | [optional] [default to &#39;shipment&#39;] |
| **request_controlled_access_data_codes** | **bool**| Query parameter to request to return values of controlled access code fields in response. | [optional] |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **accept_language** | **string**| Format {3-character language code} | [optional] [default to &#39;eng&#39;] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |

### Return type

[**\MyDHL\Client\Model\SupermodelIoLogisticsExpressTrackingResponse**](../Model/SupermodelIoLogisticsExpressTrackingResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
