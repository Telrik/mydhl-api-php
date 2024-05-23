# MyDHL\Client\ShipmentApi

All URIs are relative to https://api-mock.dhl.com/mydhlapi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**expApiShipments()**](ShipmentApi.md#expApiShipments) | **POST** /shipments | Create Shipment |
| [**expApiShipmentsDocumentimage()**](ShipmentApi.md#expApiShipmentsDocumentimage) | **GET** /shipments/{shipmentTrackingNumber}/get-image | Get Image |
| [**expApiShipmentsEpod()**](ShipmentApi.md#expApiShipmentsEpod) | **GET** /shipments/{shipmentTrackingNumber}/proof-of-delivery | Electronic Proof of Delivery |
| [**expApiShipmentsImgUpload()**](ShipmentApi.md#expApiShipmentsImgUpload) | **PATCH** /shipments/{shipmentTrackingNumber}/upload-image | Upload Paperless Trade shipment (PLT) images of previously created shipment. |
| [**expApiShipmentsInvoiceDataAwb()**](ShipmentApi.md#expApiShipmentsInvoiceDataAwb) | **PATCH** /shipments/{shipmentTrackingNumber}/upload-invoice-data | Upload Commercial Invoice data for your DHL Express shipment |


## `expApiShipments()`

```php
expApiShipments($supermodel_io_logistics_express_create_shipment_request, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version, $strict_validation, $bypass_plt_error, $validate_data_only): \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponse
```

Create Shipment

## Create Shipment The ShipmentRequest Operation will allow you to generate an AWB number and piece IDs, generate a shipping label, transmit manifest shipment detail to DHL, and optionally book a courier for the pickup of a shipment. The key elements in the response of the Shipment Request will be a base64 encoded PDF label and the Shipment and Piece identification numbers, which you can use for tracking on the DHL web site. While the RateRequest and ShipmentRequest services can be used independently, DHL recommends the use of RateRequest to first validate the products available for the shipper/receiver. The global product codes which are output during the RateResponse can be used directly as input into the Shipment Request, as both perform similar validations in terms of service capability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supermodel_io_logistics_express_create_shipment_request = new \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequest(); // \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequest | Details about the shipment to be created
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)
$strict_validation = false; // bool | If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
$bypass_plt_error = false; // bool | Option to bypass PLT - WY service code lane capability validation
$validate_data_only = false; // bool | If set to true, indicate to perform shipment data compliant validation on the shipment information.

try {
    $result = $apiInstance->expApiShipments($supermodel_io_logistics_express_create_shipment_request, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version, $strict_validation, $bypass_plt_error, $validate_data_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->expApiShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supermodel_io_logistics_express_create_shipment_request** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequest**](../Model/SupermodelIoLogisticsExpressCreateShipmentRequest.md)| Details about the shipment to be created | |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |
| **strict_validation** | **bool**| If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request. | [optional] [default to false] |
| **bypass_plt_error** | **bool**| Option to bypass PLT - WY service code lane capability validation | [optional] |
| **validate_data_only** | **bool**| If set to true, indicate to perform shipment data compliant validation on the shipment information. | [optional] [default to false] |

### Return type

[**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponse**](../Model/SupermodelIoLogisticsExpressCreateShipmentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expApiShipmentsDocumentimage()`

```php
expApiShipmentsDocumentimage($shipment_tracking_number, $shipper_account_number, $type_code, $pickup_year_and_month, $encoding_format, $all_in_one_pdf, $compressed_package, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version): \MyDHL\Client\Model\SupermodelIoLogisticsExpressDocumentImageResponse
```

Get Image

The Get Image service can be used to retrieve customer's own uploaded Commercial Invoice, Waybill Document  or supporting documents that uploaded during shipment creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_tracking_number = 9356579890; // string | DHL Express shipment identification number
$shipper_account_number = 123456789; // string | DHL Express customer shipper account number
$type_code = 'type_code_example'; // string | Please provide correct document type.
$pickup_year_and_month = YYYY-MM; // string | Please provide the pickup's date in YYYY-MM format
$encoding_format = 'encoding_format_example'; // string | Please provide the document image encoding format in pdf or tiff format
$all_in_one_pdf = false; // bool | Option to return all the document images in a single PDF file
$compressed_package = false; // bool | Option to return all the document images in a compressed package
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)

try {
    $result = $apiInstance->expApiShipmentsDocumentimage($shipment_tracking_number, $shipper_account_number, $type_code, $pickup_year_and_month, $encoding_format, $all_in_one_pdf, $compressed_package, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->expApiShipmentsDocumentimage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_tracking_number** | **string**| DHL Express shipment identification number | |
| **shipper_account_number** | **string**| DHL Express customer shipper account number | |
| **type_code** | **string**| Please provide correct document type. | |
| **pickup_year_and_month** | **string**| Please provide the pickup&#39;s date in YYYY-MM format | |
| **encoding_format** | **string**| Please provide the document image encoding format in pdf or tiff format | [optional] |
| **all_in_one_pdf** | **bool**| Option to return all the document images in a single PDF file | [optional] |
| **compressed_package** | **bool**| Option to return all the document images in a compressed package | [optional] |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |

### Return type

[**\MyDHL\Client\Model\SupermodelIoLogisticsExpressDocumentImageResponse**](../Model/SupermodelIoLogisticsExpressDocumentImageResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expApiShipmentsEpod()`

```php
expApiShipmentsEpod($shipment_tracking_number, $shipper_account_number, $content, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version): \MyDHL\Client\Model\SupermodelIoLogisticsExpressEPODResponse
```

Electronic Proof of Delivery

The electronic proof of delivery service can be used to retrieve proof of delivery for certain delivered DHL Express shipments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_tracking_number = 9356579890; // string | DHL Express shipment identification number
$shipper_account_number = 123456789; // string | DHL Express customer shipper account number
$content = epod-summary; // string
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)

try {
    $result = $apiInstance->expApiShipmentsEpod($shipment_tracking_number, $shipper_account_number, $content, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->expApiShipmentsEpod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_tracking_number** | **string**| DHL Express shipment identification number | |
| **shipper_account_number** | **string**| DHL Express customer shipper account number | [optional] |
| **content** | **string**|  | [optional] [default to &#39;epod-summary&#39;] |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |

### Return type

[**\MyDHL\Client\Model\SupermodelIoLogisticsExpressEPODResponse**](../Model/SupermodelIoLogisticsExpressEPODResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expApiShipmentsImgUpload()`

```php
expApiShipmentsImgUpload($shipment_tracking_number, $supermodel_io_logistics_express_image_upload_request)
```

Upload Paperless Trade shipment (PLT) images of previously created shipment.

The upload-image service can be used to upload PLT images to a previously created shipment.  The PLT images for the shipment can be uploaded before the shipment has been physically  collected by DHL courier. However, the original shipment must contain WY as the special service otherwise,  an error will be returned when the customer wants to use the reupload function in this upload-image service.     IMPORTANT: Please note that at least 10mins must be given between the initial createShipment request and then  the upload-image request (including subsequent upload-image request).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_tracking_number = 9356579890; // string | DHL Express shipment identification number
$supermodel_io_logistics_express_image_upload_request = new \MyDHL\Client\Model\SupermodelIoLogisticsExpressImageUploadRequest(); // \MyDHL\Client\Model\SupermodelIoLogisticsExpressImageUploadRequest | Details about the shipment images

try {
    $apiInstance->expApiShipmentsImgUpload($shipment_tracking_number, $supermodel_io_logistics_express_image_upload_request);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->expApiShipmentsImgUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_tracking_number** | **string**| DHL Express shipment identification number | |
| **supermodel_io_logistics_express_image_upload_request** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressImageUploadRequest**](../Model/SupermodelIoLogisticsExpressImageUploadRequest.md)| Details about the shipment images | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expApiShipmentsInvoiceDataAwb()`

```php
expApiShipmentsInvoiceDataAwb($shipment_tracking_number, $supermodel_io_logistics_express_upload_invoice_data_request, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version)
```

Upload Commercial Invoice data for your DHL Express shipment

## Upload Invoice Data with Shipment ID The upload invoice data service can be used to upload Commerical Invoice data with Shipment Identification Number for your DHL Express shipment.Customer can provide Commercial Invoice data before Shipment Data via Create Shipment flow or vice versa.  Important Note: UploadInvoiceData service is not enabled by default and must be requested per customer. Use of this service is only enabled on exceptional basis and DHL Express recommends to submit shipment requests together with a commercial invoice data.To enable use of UploadInvoiceData service, please contact your DHL Express IT representative. To use UploadInvoiceData service, it is required that \"PM\" service code is provided in MyDHL API Create Shipment request. \"PM\" service code is not enabled by  default for the customers, and needs to be enabled upon request.  When Shipment is created via MyDHL API Create Shipment service before uploading the Commercial Invoice (CIN) data,it is mandatory to provide the Shipment Identification Number as received in MyDHL API Create Shipment service Response. When Commercial Invoice (CIN) data is uploaded prior to creating a shipment via MyDHL API Create Shipment service, it is mandatory to provide Invoice Reference Number with Invoice Reference Type value \"CU\" and Shipper Account Number.   These elements are mandatory to facilitate an effective data merge of the Commercial Invoice (CIN) data with Shipment Data. As an output customer will receive Notification element value '0' on successful upload of Commercial Invoice (CIN) data.  DHL backend application performs the subsequent data merging process of the Shipment Data and Commercial Invoice data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_tracking_number = 9356579890; // string | DHL Express shipment identification number
$supermodel_io_logistics_express_upload_invoice_data_request = new \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest(); // \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest | Details about the invoice data
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)

try {
    $apiInstance->expApiShipmentsInvoiceDataAwb($shipment_tracking_number, $supermodel_io_logistics_express_upload_invoice_data_request, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->expApiShipmentsInvoiceDataAwb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_tracking_number** | **string**| DHL Express shipment identification number | |
| **supermodel_io_logistics_express_upload_invoice_data_request** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest**](../Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequest.md)| Details about the invoice data | |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
