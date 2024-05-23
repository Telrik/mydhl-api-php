# # SupermodelIoLogisticsExpressUploadInvoiceDataRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**planned_ship_date** | **string** | The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD | [optional]
**accounts** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressAccount[]**](SupermodelIoLogisticsExpressAccount.md) | Please enter all the DHL Express accounts and types to be used for this shipment.   Note: accounts/0/number with typeCode &#39;shipper&#39; is mandatory if using POST method and no shipmentTrackingNumber is provided in request. | [optional]
**content** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent**](SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent.md) |  |
**output_image_properties** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties**](SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties.md) |  | [optional]
**customer_details** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails**](SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
