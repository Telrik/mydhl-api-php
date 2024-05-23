# MyDHL\Client\ReferenceDataApi

All URIs are relative to https://api-mock.dhl.com/mydhlapi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**expApiReferenceData()**](ReferenceDataApi.md#expApiReferenceData) | **GET** /reference-data | provide reference data currently used for MyDHL API services usage. |


## `expApiReferenceData()`

```php
expApiReferenceData($dataset_name, $filter_by_value, $filter_by_attribute, $comparison_operator, $query_string, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version): \MyDHL\Client\Model\SupermodelIoLogisticsExpressReferenceDataResponse
```

provide reference data currently used for MyDHL API services usage.

The reference data service retrieves the reference data used for MyDHL API shipment or upload invoice data service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MyDHL\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MyDHL\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataset_name = country; // string | Must provide at least one datasetName value. If providing just the datasetName with no filterBy fields - the response will return the entire data set from the dataset table (bulk).
$filter_by_value = MY; // string | Use filter by value to query based on the specific string for optimized search.<br> <br> List of supported filterByValue per dataset (eg. dataset: filterByAttribute| supported filterByValue) <br><br> a) returnStatusMessage: serviceName|CreateShipment,DocumentImageRequest,RateRequest,RequestIdentifier,RequestPickup,AddressValidateRequest,TrackingRequest,UpdatePickup,UpdateShipment,UploadInvoiceData,DeleteShipment,DocumentRetrieve-ePOD <br> b) returnStatusMessage: operationName|get-image,identifiers,address-validate,    RouteRequest, shipments, tracking, upload-image,landed-cost,rates,upload-invoice-data,pickup,proof-of-delivery <br> c) returnStatusMessage: protocol|REST,SOAP,XMLPI <br> d) productCode: docNonDocIndicator|Y,N
$filter_by_attribute = countryCode; // string | Use filter by attribute to define the list of supported attibuted for the specified datasetName. <br> List of supported attributes per dataset <br> (eg. dataset: supported filterByAttributes values) <br><br> a) country: countryCode, countryName <br> b) countryPostalcodeFormat: countryCode <br> c) dangerousGoods: serviceCode <br> d) incoterm: incoterm <br> e) productCode: productCode, countryCode, docNonDocIndicator <br> f) serviceCode: serviceCode, countryCode, chargeCodeTypeCode, serviceGroupDescription <br> g) packageTypeCode: packageTypeCode <br> h) documentTypeCode: customsDocumentTypeCode <br> i) customerShipmentReferenceType: shipmentReferenceTypeCode <br> j) customerPackageReferenceType: packageReferenceTypeCode <br> k) invoiceReferenceType: invoiceReferenceTypeCode <br> l) invoiceItemReferenceType: itemReferenceTypeCode <br> m) registrationNumberTypeCode: registrationTypeCode <br> n) commodityCategory: commodityCategoryCode, commodityCategoryGroup, commodityCategoryDescription <br> o) returnStatusMessage: statusCode, serviceName, operationName, protocol <br> p) trackingEventCode: eventTypeCode, eventTypeDescription, visibleToCustomer <br> q) unitOfMeasurement: unitOfMeasurement
$comparison_operator = equal; // string | Use comparison operator to define the specific match condition for optimized search.
$query_string = queryString=operationName:shipment:equal; // string | Use queryString for additional filter criteria in format of '[attribute]:[value]:[comparisonOperator]'. <br> All additional filters are applied together with logical connector 'AND'. <br> Maximum of three additional attribute-value-comparisonOperator combinations. <br> Multiple queryString parameters will be separated  by comma \",\" separator
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)

try {
    $result = $apiInstance->expApiReferenceData($dataset_name, $filter_by_value, $filter_by_attribute, $comparison_operator, $query_string, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->expApiReferenceData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dataset_name** | **string**| Must provide at least one datasetName value. If providing just the datasetName with no filterBy fields - the response will return the entire data set from the dataset table (bulk). | |
| **filter_by_value** | **string**| Use filter by value to query based on the specific string for optimized search.&lt;br&gt; &lt;br&gt; List of supported filterByValue per dataset (eg. dataset: filterByAttribute| supported filterByValue) &lt;br&gt;&lt;br&gt; a) returnStatusMessage: serviceName|CreateShipment,DocumentImageRequest,RateRequest,RequestIdentifier,RequestPickup,AddressValidateRequest,TrackingRequest,UpdatePickup,UpdateShipment,UploadInvoiceData,DeleteShipment,DocumentRetrieve-ePOD &lt;br&gt; b) returnStatusMessage: operationName|get-image,identifiers,address-validate,    RouteRequest, shipments, tracking, upload-image,landed-cost,rates,upload-invoice-data,pickup,proof-of-delivery &lt;br&gt; c) returnStatusMessage: protocol|REST,SOAP,XMLPI &lt;br&gt; d) productCode: docNonDocIndicator|Y,N | [optional] |
| **filter_by_attribute** | **string**| Use filter by attribute to define the list of supported attibuted for the specified datasetName. &lt;br&gt; List of supported attributes per dataset &lt;br&gt; (eg. dataset: supported filterByAttributes values) &lt;br&gt;&lt;br&gt; a) country: countryCode, countryName &lt;br&gt; b) countryPostalcodeFormat: countryCode &lt;br&gt; c) dangerousGoods: serviceCode &lt;br&gt; d) incoterm: incoterm &lt;br&gt; e) productCode: productCode, countryCode, docNonDocIndicator &lt;br&gt; f) serviceCode: serviceCode, countryCode, chargeCodeTypeCode, serviceGroupDescription &lt;br&gt; g) packageTypeCode: packageTypeCode &lt;br&gt; h) documentTypeCode: customsDocumentTypeCode &lt;br&gt; i) customerShipmentReferenceType: shipmentReferenceTypeCode &lt;br&gt; j) customerPackageReferenceType: packageReferenceTypeCode &lt;br&gt; k) invoiceReferenceType: invoiceReferenceTypeCode &lt;br&gt; l) invoiceItemReferenceType: itemReferenceTypeCode &lt;br&gt; m) registrationNumberTypeCode: registrationTypeCode &lt;br&gt; n) commodityCategory: commodityCategoryCode, commodityCategoryGroup, commodityCategoryDescription &lt;br&gt; o) returnStatusMessage: statusCode, serviceName, operationName, protocol &lt;br&gt; p) trackingEventCode: eventTypeCode, eventTypeDescription, visibleToCustomer &lt;br&gt; q) unitOfMeasurement: unitOfMeasurement | [optional] |
| **comparison_operator** | **string**| Use comparison operator to define the specific match condition for optimized search. | [optional] [default to &#39;equal&#39;] |
| **query_string** | **string**| Use queryString for additional filter criteria in format of &#39;[attribute]:[value]:[comparisonOperator]&#39;. &lt;br&gt; All additional filters are applied together with logical connector &#39;AND&#39;. &lt;br&gt; Maximum of three additional attribute-value-comparisonOperator combinations. &lt;br&gt; Multiple queryString parameters will be separated  by comma \&quot;,\&quot; separator | [optional] |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |

### Return type

[**\MyDHL\Client\Model\SupermodelIoLogisticsExpressReferenceDataResponse**](../Model/SupermodelIoLogisticsExpressReferenceDataResponse.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
