# MyDHL\Client\ProductApi

All URIs are relative to https://api-mock.dhl.com/mydhlapi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**expApiProducts()**](ProductApi.md#expApiProducts) | **GET** /products | Retrieve available DHL Express products for a one piece Shipment |


## `expApiProducts()`

```php
expApiProducts($account_number, $origin_country_code, $origin_city_name, $destination_country_code, $destination_city_name, $weight, $length, $width, $height, $planned_shipping_date, $is_customs_declarable, $unit_of_measurement, $origin_postal_code, $destination_postal_code, $next_business_day, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version, $strict_validation, $get_all_value_added_services, $request_estimated_delivery_date, $estimated_delivery_date_type): \MyDHL\Client\Model\SupermodelIoLogisticsExpressProducts
```

Retrieve available DHL Express products for a one piece Shipment

The GET Products API will return DHL's product capabilities for a certain set of input data.  Using the shipper and receiver address as well as the dimension and weight of the piece belonging to a shipment, this operation returns the available products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_number = 123456789; // string | DHL Express customer account number
$origin_country_code = CZ; // string | A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
$origin_city_name = Prague; // string | Text specifying the city name
$destination_country_code = CZ; // string | A short text string code (see values defined in ISO 3166) specifying the shipment destination country. https://gs1.org/voc/Country, Alpha-2 Code
$destination_city_name = Prague; // string | Text specifying the city name
$weight = 5; // float | Gross weight of the shipment including packaging.
$length = 15; // float | Total length of the shipment including packaging.
$width = 10; // float | Total width of the shipment including packaging.
$height = 5; // float | Total height of the shipment including packaging.
$planned_shipping_date = 2020-02-26; // string | Timestamp represents the date you plan to ship your prospected shipment
$is_customs_declarable = false; // bool
$unit_of_measurement = metric; // string | The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value corresponds to the units of weight and measurement which are used throughout the message processing.
$origin_postal_code = 14800; // string | Text specifying the postal code for an address. https://gs1.org/voc/postalCode
$destination_postal_code = 14800; // string | Text specifying the postal code for an address. https://gs1.org/voc/postalCode
$next_business_day = false; // bool | When set to true and there are no products available for given plannedShippingDate then products available for the next possible pickup date are returned
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)
$strict_validation = false; // bool | If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
$get_all_value_added_services = false; // bool | Option to return list of all value added services and its rule groups if applicable
$request_estimated_delivery_date = true; // bool | Option to return Estimated Delivery Date in response
$estimated_delivery_date_type = QDDF; // string | Estimated Delivery Date Type. QDDF: is the fastest transit time as quoted to the customer at booking or shipment creation. When clearance or any other non-transport operational component is expected to impact transit time, QDDF does not constitute DHL's service commitment. QDDC: cconstitutes DHL's service commitment as quoted at booking or shipment creation. QDDC builds in clearance time, and potentially other special operational non-transport component(s), when relevant.

try {
    $result = $apiInstance->expApiProducts($account_number, $origin_country_code, $origin_city_name, $destination_country_code, $destination_city_name, $weight, $length, $width, $height, $planned_shipping_date, $is_customs_declarable, $unit_of_measurement, $origin_postal_code, $destination_postal_code, $next_business_day, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version, $strict_validation, $get_all_value_added_services, $request_estimated_delivery_date, $estimated_delivery_date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->expApiProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_number** | **string**| DHL Express customer account number | |
| **origin_country_code** | **string**| A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code | |
| **origin_city_name** | **string**| Text specifying the city name | |
| **destination_country_code** | **string**| A short text string code (see values defined in ISO 3166) specifying the shipment destination country. https://gs1.org/voc/Country, Alpha-2 Code | |
| **destination_city_name** | **string**| Text specifying the city name | |
| **weight** | **float**| Gross weight of the shipment including packaging. | |
| **length** | **float**| Total length of the shipment including packaging. | |
| **width** | **float**| Total width of the shipment including packaging. | |
| **height** | **float**| Total height of the shipment including packaging. | |
| **planned_shipping_date** | **string**| Timestamp represents the date you plan to ship your prospected shipment | |
| **is_customs_declarable** | **bool**|  | |
| **unit_of_measurement** | **string**| The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value corresponds to the units of weight and measurement which are used throughout the message processing. | |
| **origin_postal_code** | **string**| Text specifying the postal code for an address. https://gs1.org/voc/postalCode | [optional] |
| **destination_postal_code** | **string**| Text specifying the postal code for an address. https://gs1.org/voc/postalCode | [optional] |
| **next_business_day** | **bool**| When set to true and there are no products available for given plannedShippingDate then products available for the next possible pickup date are returned | [optional] |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |
| **strict_validation** | **bool**| If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request. | [optional] [default to false] |
| **get_all_value_added_services** | **bool**| Option to return list of all value added services and its rule groups if applicable | [optional] [default to false] |
| **request_estimated_delivery_date** | **bool**| Option to return Estimated Delivery Date in response | [optional] [default to true] |
| **estimated_delivery_date_type** | **string**| Estimated Delivery Date Type. QDDF: is the fastest transit time as quoted to the customer at booking or shipment creation. When clearance or any other non-transport operational component is expected to impact transit time, QDDF does not constitute DHL&#39;s service commitment. QDDC: cconstitutes DHL&#39;s service commitment as quoted at booking or shipment creation. QDDC builds in clearance time, and potentially other special operational non-transport component(s), when relevant. | [optional] [default to &#39;QDDF&#39;] |

### Return type

[**\MyDHL\Client\Model\SupermodelIoLogisticsExpressProducts**](../Model/SupermodelIoLogisticsExpressProducts.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
