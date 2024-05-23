# # SupermodelIoLogisticsExpressImageUploadRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**original_planned_shipping_date** | **string** |  |
**accounts** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressAccount[]**](SupermodelIoLogisticsExpressAccount.md) | Please enter all the DHL Express accounts and types to be used for this shipment |
**product_code** | **string** | Please enter DHL Express Global Product code |
**document_images** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressDocumentImagesInner[]**](SupermodelIoLogisticsExpressDocumentImagesInner.md) | This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
