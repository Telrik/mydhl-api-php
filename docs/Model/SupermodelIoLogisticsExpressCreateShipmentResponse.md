# # SupermodelIoLogisticsExpressCreateShipmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL where the request has been sent to | [optional]
**shipment_tracking_number** | **string** | Here you will receive Shipment Identification Number of your package | [optional]
**cancel_pickup_url** | **string** | If you requested pickup for your shipment you can use this URL to cancel the pickup | [optional]
**tracking_url** | **string** | You can use ths URL to track your shipment | [optional]
**dispatch_confirmation_number** | **string** | If you asked for pickup service here you will find Dispach Confirmation Number which identifies your pickup booking | [optional]
**packages** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesInner[]**](SupermodelIoLogisticsExpressCreateShipmentResponsePackagesInner.md) | Here you can find information for all pieces your shipment is having like Piece Identification Number | [optional]
**documents** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsInner[]**](SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsInner.md) | Here you can find all documents created for the shipment like Transport and WaybillDoc labels, Invoice, Receipt | [optional]
**on_demand_delivery_url** | **string** | In this field you will find the On Demand Delivery (ODD) URL link if requested | [optional]
**shipment_details** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInner[]**](SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInner.md) | Here you can find additional information related to your shipment when you ask for it in the request | [optional]
**shipment_charges** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesInner[]**](SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesInner.md) | Here you can find rates related to your shipment | [optional]
**barcode_info** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo**](SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo.md) |  | [optional]
**estimated_delivery_date** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate**](SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate.md) |  | [optional]
**warnings** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
