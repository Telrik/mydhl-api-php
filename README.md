# MyDHLAPI

Welcome to the official DHL Express APIs (MyDHL API) below are the published API Documentation to fulfill your shipping needs with DHL Express. 
    
Please follow the process described [here](https://developer.dhl.com/api-reference/dhl-express-mydhl-api#get-started-section/user-guide--get-access) to request access to the DHL Express - MyDHL API services  
In case you already have DHL Express - MyDHL API Service credentials please ensure to use the endpoints/environments listed 
[here](https://developer.dhl.com/api-reference/dhl-express-mydhl-api#get-started-section/user-guide--environments)


For more information, please visit [https://developer.dhl.com/help-center](https://developer.dhl.com/help-center).

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
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MyDHLAPI/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = pickup; // string
$country_code = CZ; // string | A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
$postal_code = 14800; // string | Text specifying the postal code for an address. https://gs1.org/voc/postalCode
$city_name = Prague; // string | Text specifying the city name
$county_name = praha; // string | Text specifying the county name
$strict_validation = true; // bool | If set to true service will return no records when exact valid match not found
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)

try {
    $result = $apiInstance->expApiAddressValidate($type, $country_code, $postal_code, $city_name, $county_name, $strict_validation, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->expApiAddressValidate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-mock.dhl.com/mydhlapi*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressApi* | [**expApiAddressValidate**](docs/Api/AddressApi.md#expapiaddressvalidate) | **GET** /address-validate | Validate DHL Express pickup/delivery capabilities at origin/destination
*IdentifierApi* | [**expApiIdentifiers**](docs/Api/IdentifierApi.md#expapiidentifiers) | **GET** /identifiers | Service to allocate identifiers upfront for DHL Express Breakbulk or Loose Break Bulk shipments
*InvoiceApi* | [**expApiShipmentsInvoiceData**](docs/Api/InvoiceApi.md#expapishipmentsinvoicedata) | **POST** /invoices/upload-invoice-data | Upload Commercial invoice data
*PickupApi* | [**expApiPickups**](docs/Api/PickupApi.md#expapipickups) | **POST** /pickups | Create a DHL Express pickup booking request
*PickupApi* | [**expApiPickupsCancel**](docs/Api/PickupApi.md#expapipickupscancel) | **DELETE** /pickups/{dispatchConfirmationNumber} | Cancel a DHL Express pickup booking request
*PickupApi* | [**expApiPickupsUpdate**](docs/Api/PickupApi.md#expapipickupsupdate) | **PATCH** /pickups/{dispatchConfirmationNumber} | Update pickup information for an existing DHL Express pickup booking request
*ProductApi* | [**expApiProducts**](docs/Api/ProductApi.md#expapiproducts) | **GET** /products | Retrieve available DHL Express products for a one piece Shipment
*RatingApi* | [**expApiLandedCost**](docs/Api/RatingApi.md#expapilandedcost) | **POST** /landed-cost | Landed Cost
*RatingApi* | [**expApiRates**](docs/Api/RatingApi.md#expapirates) | **GET** /rates | Retrieve Rates for a one piece Shipment
*RatingApi* | [**expApiRatesMany**](docs/Api/RatingApi.md#expapiratesmany) | **POST** /rates | Retrieve Rates for Multi-piece Shipments
*ReferenceDataApi* | [**expApiReferenceData**](docs/Api/ReferenceDataApi.md#expapireferencedata) | **GET** /reference-data | provide reference data currently used for MyDHL API services usage.
*ServicepointApi* | [**expApiServicepoints**](docs/Api/ServicepointApi.md#expapiservicepoints) | **GET** /servicepoints | Returns list of service points based on the given postal location address, service point ID or geocode details for DHL Express Service points to pick-up and drop-off shipments
*ShipmentApi* | [**expApiShipments**](docs/Api/ShipmentApi.md#expapishipments) | **POST** /shipments | Create Shipment
*ShipmentApi* | [**expApiShipmentsDocumentimage**](docs/Api/ShipmentApi.md#expapishipmentsdocumentimage) | **GET** /shipments/{shipmentTrackingNumber}/get-image | Get Image
*ShipmentApi* | [**expApiShipmentsEpod**](docs/Api/ShipmentApi.md#expapishipmentsepod) | **GET** /shipments/{shipmentTrackingNumber}/proof-of-delivery | Electronic Proof of Delivery
*ShipmentApi* | [**expApiShipmentsImgUpload**](docs/Api/ShipmentApi.md#expapishipmentsimgupload) | **PATCH** /shipments/{shipmentTrackingNumber}/upload-image | Upload Paperless Trade shipment (PLT) images of previously created shipment.
*ShipmentApi* | [**expApiShipmentsInvoiceDataAwb**](docs/Api/ShipmentApi.md#expapishipmentsinvoicedataawb) | **PATCH** /shipments/{shipmentTrackingNumber}/upload-invoice-data | Upload Commercial Invoice data for your DHL Express shipment
*TrackingApi* | [**expApiShipmentsTracking**](docs/Api/TrackingApi.md#expapishipmentstracking) | **GET** /shipments/{shipmentTrackingNumber}/tracking | Track a single DHL Express Shipment
*TrackingApi* | [**expApiShipmentsTrackingMulti**](docs/Api/TrackingApi.md#expapishipmentstrackingmulti) | **GET** /tracking | Track a single or multiple DHL Express Shipments

## Models

- [Address](docs/Model/Address.md)
- [CapacityStatus](docs/Model/CapacityStatus.md)
- [Chronology](docs/Model/Chronology.md)
- [ClosedDates](docs/Model/ClosedDates.md)
- [ContactDetails](docs/Model/ContactDetails.md)
- [DateTimeField](docs/Model/DateTimeField.md)
- [DateTimeFieldType](docs/Model/DateTimeFieldType.md)
- [DateTimeZone](docs/Model/DateTimeZone.md)
- [Dimensions](docs/Model/Dimensions.md)
- [Dimensions1](docs/Model/Dimensions1.md)
- [Dimensions2](docs/Model/Dimensions2.md)
- [Dimensions3](docs/Model/Dimensions3.md)
- [DurationField](docs/Model/DurationField.md)
- [DurationFieldType](docs/Model/DurationFieldType.md)
- [EstimatedDeliveryDate](docs/Model/EstimatedDeliveryDate.md)
- [EstimatedDeliveryDate1](docs/Model/EstimatedDeliveryDate1.md)
- [ExceptionResponse](docs/Model/ExceptionResponse.md)
- [ExchangeRatesInner](docs/Model/ExchangeRatesInner.md)
- [GeoLocation](docs/Model/GeoLocation.md)
- [Holidays](docs/Model/Holidays.md)
- [Language](docs/Model/Language.md)
- [LocalTime](docs/Model/LocalTime.md)
- [MonetaryAmountInner](docs/Model/MonetaryAmountInner.md)
- [OpenDatesTime](docs/Model/OpenDatesTime.md)
- [OpeningHours](docs/Model/OpeningHours.md)
- [OpeningTime](docs/Model/OpeningTime.md)
- [Partner](docs/Model/Partner.md)
- [Pickup](docs/Model/Pickup.md)
- [PickupPickupDetails](docs/Model/PickupPickupDetails.md)
- [PickupPickupRequestorDetails](docs/Model/PickupPickupRequestorDetails.md)
- [PickupSpecialInstructionsInner](docs/Model/PickupSpecialInstructionsInner.md)
- [PriceDetailInner](docs/Model/PriceDetailInner.md)
- [ProductsInner](docs/Model/ProductsInner.md)
- [ProductsInner1](docs/Model/ProductsInner1.md)
- [ProductsInner1DeliveryCapabilities](docs/Model/ProductsInner1DeliveryCapabilities.md)
- [ProductsInner1DetailedPriceBreakdownInner](docs/Model/ProductsInner1DetailedPriceBreakdownInner.md)
- [ProductsInner1DetailedPriceBreakdownInnerBreakdownInner](docs/Model/ProductsInner1DetailedPriceBreakdownInnerBreakdownInner.md)
- [ProductsInner1PickupCapabilities](docs/Model/ProductsInner1PickupCapabilities.md)
- [ProductsInner1TotalPriceBreakdownInner](docs/Model/ProductsInner1TotalPriceBreakdownInner.md)
- [ProductsInner1TotalPriceBreakdownInnerPriceBreakdownInner](docs/Model/ProductsInner1TotalPriceBreakdownInnerPriceBreakdownInner.md)
- [ProductsInner1TotalPriceInner](docs/Model/ProductsInner1TotalPriceInner.md)
- [ProductsInnerBreakdownInner](docs/Model/ProductsInnerBreakdownInner.md)
- [ProductsInnerDeliveryCapabilities](docs/Model/ProductsInnerDeliveryCapabilities.md)
- [ProductsInnerPickupCapabilities](docs/Model/ProductsInnerPickupCapabilities.md)
- [ProductsInnerServiceCodeDependencyRuleGroupsInner](docs/Model/ProductsInnerServiceCodeDependencyRuleGroupsInner.md)
- [ProductsInnerServiceCodeDependencyRuleGroupsInnerDependencyRuleGroupInner](docs/Model/ProductsInnerServiceCodeDependencyRuleGroupsInnerDependencyRuleGroupInner.md)
- [ProductsInnerServiceCodeDependencyRuleGroupsInnerDependencyRuleGroupInnerRequiredServiceCodesInner](docs/Model/ProductsInnerServiceCodeDependencyRuleGroupsInnerDependencyRuleGroupInnerRequiredServiceCodesInner.md)
- [ProductsInnerServiceCodeMutuallyExclusiveGroupsInner](docs/Model/ProductsInnerServiceCodeMutuallyExclusiveGroupsInner.md)
- [ProductsInnerServiceCodeMutuallyExclusiveGroupsInnerServiceCodesInner](docs/Model/ProductsInnerServiceCodeMutuallyExclusiveGroupsInnerServiceCodesInner.md)
- [Promotion](docs/Model/Promotion.md)
- [RestResponseStatus](docs/Model/RestResponseStatus.md)
- [ServicePoint](docs/Model/ServicePoint.md)
- [ServicePointCapabilities](docs/Model/ServicePointCapabilities.md)
- [ServicePointsRestResponseV3](docs/Model/ServicePointsRestResponseV3.md)
- [ShipmentLimitations](docs/Model/ShipmentLimitations.md)
- [ShipmentLimitationsByPiece](docs/Model/ShipmentLimitationsByPiece.md)
- [Suggestion](docs/Model/Suggestion.md)
- [SupermodelIoLogisticsExpressAccount](docs/Model/SupermodelIoLogisticsExpressAccount.md)
- [SupermodelIoLogisticsExpressAddress](docs/Model/SupermodelIoLogisticsExpressAddress.md)
- [SupermodelIoLogisticsExpressAddressCreateShipmentRequest](docs/Model/SupermodelIoLogisticsExpressAddressCreateShipmentRequest.md)
- [SupermodelIoLogisticsExpressAddressCreateShipmentResponse](docs/Model/SupermodelIoLogisticsExpressAddressCreateShipmentResponse.md)
- [SupermodelIoLogisticsExpressAddressRatesRequest](docs/Model/SupermodelIoLogisticsExpressAddressRatesRequest.md)
- [SupermodelIoLogisticsExpressAddressValidateResponse](docs/Model/SupermodelIoLogisticsExpressAddressValidateResponse.md)
- [SupermodelIoLogisticsExpressAddressValidateResponseAddressInner](docs/Model/SupermodelIoLogisticsExpressAddressValidateResponseAddressInner.md)
- [SupermodelIoLogisticsExpressAddressValidateResponseAddressInnerServiceArea](docs/Model/SupermodelIoLogisticsExpressAddressValidateResponseAddressInnerServiceArea.md)
- [SupermodelIoLogisticsExpressBankDetailsInner](docs/Model/SupermodelIoLogisticsExpressBankDetailsInner.md)
- [SupermodelIoLogisticsExpressContact](docs/Model/SupermodelIoLogisticsExpressContact.md)
- [SupermodelIoLogisticsExpressContactBuyer](docs/Model/SupermodelIoLogisticsExpressContactBuyer.md)
- [SupermodelIoLogisticsExpressContactCreateShipmentResponse](docs/Model/SupermodelIoLogisticsExpressContactCreateShipmentResponse.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequest](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequest.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContent](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContent.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCommodityCodesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCommodityCodesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCustomerReferencesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCustomerReferencesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCustomsDocumentsInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCustomsDocumentsInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerQuantity](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerQuantity.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerWeight](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerWeight.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponse](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponse.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponsePackagesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponsePackagesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponsePackagesInnerDocumentsInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponsePackagesInnerDocumentsInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesInnerServiceBreakdownInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesInnerServiceBreakdownInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInner.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerCustomerDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerCustomerDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerCustomerDetailsShipperDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerCustomerDetailsShipperDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerDestinationServiceArea](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerDestinationServiceArea.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerOriginServiceArea](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerOriginServiceArea.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetails](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetails.md)
- [SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerValueAddedServicesInner](docs/Model/SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerValueAddedServicesInner.md)
- [SupermodelIoLogisticsExpressDeliveryOptionsResponse](docs/Model/SupermodelIoLogisticsExpressDeliveryOptionsResponse.md)
- [SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsInner](docs/Model/SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsInner.md)
- [SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsInnerDeliveryWindowsInner](docs/Model/SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsInnerDeliveryWindowsInner.md)
- [SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsInnerParametersInner](docs/Model/SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsInnerParametersInner.md)
- [SupermodelIoLogisticsExpressDocumentImageResponse](docs/Model/SupermodelIoLogisticsExpressDocumentImageResponse.md)
- [SupermodelIoLogisticsExpressDocumentImageResponseDocumentsInner](docs/Model/SupermodelIoLogisticsExpressDocumentImageResponseDocumentsInner.md)
- [SupermodelIoLogisticsExpressDocumentImagesInner](docs/Model/SupermodelIoLogisticsExpressDocumentImagesInner.md)
- [SupermodelIoLogisticsExpressEPODResponse](docs/Model/SupermodelIoLogisticsExpressEPODResponse.md)
- [SupermodelIoLogisticsExpressEPODResponseDocumentsInner](docs/Model/SupermodelIoLogisticsExpressEPODResponseDocumentsInner.md)
- [SupermodelIoLogisticsExpressErrorResponse](docs/Model/SupermodelIoLogisticsExpressErrorResponse.md)
- [SupermodelIoLogisticsExpressExportDeclaration](docs/Model/SupermodelIoLogisticsExpressExportDeclaration.md)
- [SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesInner](docs/Model/SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesInner.md)
- [SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsInner](docs/Model/SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsInner.md)
- [SupermodelIoLogisticsExpressExportDeclarationInvoice](docs/Model/SupermodelIoLogisticsExpressExportDeclarationInvoice.md)
- [SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesInner](docs/Model/SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesInner.md)
- [SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues](docs/Model/SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues.md)
- [SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues](docs/Model/SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues.md)
- [SupermodelIoLogisticsExpressExportDeclarationLineItemsInner](docs/Model/SupermodelIoLogisticsExpressExportDeclarationLineItemsInner.md)
- [SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerCustomerReferencesInner](docs/Model/SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerCustomerReferencesInner.md)
- [SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerCustomsDocumentsInner](docs/Model/SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerCustomsDocumentsInner.md)
- [SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerQuantity](docs/Model/SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerQuantity.md)
- [SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerWeight](docs/Model/SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerWeight.md)
- [SupermodelIoLogisticsExpressExportDeclarationRemarksInner](docs/Model/SupermodelIoLogisticsExpressExportDeclarationRemarksInner.md)
- [SupermodelIoLogisticsExpressIdentifier](docs/Model/SupermodelIoLogisticsExpressIdentifier.md)
- [SupermodelIoLogisticsExpressIdentifierResponse](docs/Model/SupermodelIoLogisticsExpressIdentifierResponse.md)
- [SupermodelIoLogisticsExpressIdentifierResponseIdentifiersInner](docs/Model/SupermodelIoLogisticsExpressIdentifierResponseIdentifiersInner.md)
- [SupermodelIoLogisticsExpressImageUploadRequest](docs/Model/SupermodelIoLogisticsExpressImageUploadRequest.md)
- [SupermodelIoLogisticsExpressLandedCostRequest](docs/Model/SupermodelIoLogisticsExpressLandedCostRequest.md)
- [SupermodelIoLogisticsExpressLandedCostRequestChargesInner](docs/Model/SupermodelIoLogisticsExpressLandedCostRequestChargesInner.md)
- [SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails](docs/Model/SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails.md)
- [SupermodelIoLogisticsExpressLandedCostRequestItemsInner](docs/Model/SupermodelIoLogisticsExpressLandedCostRequestItemsInner.md)
- [SupermodelIoLogisticsExpressLandedCostRequestItemsInnerAdditionalQuantityDefinitionsInner](docs/Model/SupermodelIoLogisticsExpressLandedCostRequestItemsInnerAdditionalQuantityDefinitionsInner.md)
- [SupermodelIoLogisticsExpressLandedCostRequestItemsInnerGoodsCharacteristicsInner](docs/Model/SupermodelIoLogisticsExpressLandedCostRequestItemsInnerGoodsCharacteristicsInner.md)
- [SupermodelIoLogisticsExpressPackage](docs/Model/SupermodelIoLogisticsExpressPackage.md)
- [SupermodelIoLogisticsExpressPackageLabelBarcodesInner](docs/Model/SupermodelIoLogisticsExpressPackageLabelBarcodesInner.md)
- [SupermodelIoLogisticsExpressPackageLabelTextInner](docs/Model/SupermodelIoLogisticsExpressPackageLabelTextInner.md)
- [SupermodelIoLogisticsExpressPackageRR](docs/Model/SupermodelIoLogisticsExpressPackageRR.md)
- [SupermodelIoLogisticsExpressPackageReference](docs/Model/SupermodelIoLogisticsExpressPackageReference.md)
- [SupermodelIoLogisticsExpressPickupRequest](docs/Model/SupermodelIoLogisticsExpressPickupRequest.md)
- [SupermodelIoLogisticsExpressPickupRequestCustomerDetails](docs/Model/SupermodelIoLogisticsExpressPickupRequestCustomerDetails.md)
- [SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails](docs/Model/SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails.md)
- [SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails](docs/Model/SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails.md)
- [SupermodelIoLogisticsExpressPickupRequestShipmentDetailsInner](docs/Model/SupermodelIoLogisticsExpressPickupRequestShipmentDetailsInner.md)
- [SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsInner](docs/Model/SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsInner.md)
- [SupermodelIoLogisticsExpressPickupResponse](docs/Model/SupermodelIoLogisticsExpressPickupResponse.md)
- [SupermodelIoLogisticsExpressProducts](docs/Model/SupermodelIoLogisticsExpressProducts.md)
- [SupermodelIoLogisticsExpressRateRequest](docs/Model/SupermodelIoLogisticsExpressRateRequest.md)
- [SupermodelIoLogisticsExpressRateRequestCustomerDetails](docs/Model/SupermodelIoLogisticsExpressRateRequestCustomerDetails.md)
- [SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationInner](docs/Model/SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationInner.md)
- [SupermodelIoLogisticsExpressRateRequestProductsAndServicesInner](docs/Model/SupermodelIoLogisticsExpressRateRequestProductsAndServicesInner.md)
- [SupermodelIoLogisticsExpressRates](docs/Model/SupermodelIoLogisticsExpressRates.md)
- [SupermodelIoLogisticsExpressReference](docs/Model/SupermodelIoLogisticsExpressReference.md)
- [SupermodelIoLogisticsExpressReferenceData](docs/Model/SupermodelIoLogisticsExpressReferenceData.md)
- [SupermodelIoLogisticsExpressReferenceDataDataInnerInner](docs/Model/SupermodelIoLogisticsExpressReferenceDataDataInnerInner.md)
- [SupermodelIoLogisticsExpressReferenceDataResponse](docs/Model/SupermodelIoLogisticsExpressReferenceDataResponse.md)
- [SupermodelIoLogisticsExpressRegistrationNumbers](docs/Model/SupermodelIoLogisticsExpressRegistrationNumbers.md)
- [SupermodelIoLogisticsExpressTrackingResponse](docs/Model/SupermodelIoLogisticsExpressTrackingResponse.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInner](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInner.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerEventsInner](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerEventsInner.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerEventsInnerServiceAreaInner](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerEventsInnerServiceAreaInner.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInner](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInner.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInnerEventsInner](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInnerEventsInner.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInnerEventsInnerServiceAreaInner](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInnerEventsInnerServiceAreaInner.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetails](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetails.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetailsPostalAddress](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetailsPostalAddress.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetailsServiceAreaInner](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetailsServiceAreaInner.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetails](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetails.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetailsPostalAddress](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetailsPostalAddress.md)
- [SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetailsServiceAreaInner](docs/Model/SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetailsServiceAreaInner.md)
- [SupermodelIoLogisticsExpressUpdatePickupRequest](docs/Model/SupermodelIoLogisticsExpressUpdatePickupRequest.md)
- [SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsInner](docs/Model/SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsInner.md)
- [SupermodelIoLogisticsExpressUpdatePickupResponse](docs/Model/SupermodelIoLogisticsExpressUpdatePickupResponse.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequest](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequest.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsInner](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsInner.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID.md)
- [SupermodelIoLogisticsExpressUploadInvoiceDataResponse](docs/Model/SupermodelIoLogisticsExpressUploadInvoiceDataResponse.md)
- [SupermodelIoLogisticsExpressValueAddedServices](docs/Model/SupermodelIoLogisticsExpressValueAddedServices.md)
- [SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsInner](docs/Model/SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsInner.md)
- [SupermodelIoLogisticsExpressValueAddedServicesRates](docs/Model/SupermodelIoLogisticsExpressValueAddedServicesRates.md)
- [Translations](docs/Model/Translations.md)
- [ValueUnit](docs/Model/ValueUnit.md)
- [Weight](docs/Model/Weight.md)
- [Weight1](docs/Model/Weight1.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

### apiKey

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.11.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
