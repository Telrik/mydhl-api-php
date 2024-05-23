# # SupermodelIoLogisticsExpressExportDeclarationLineItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | Please provide line item number |
**description** | **string** | Please provide description of the line item |
**price** | **float** | Please provide unit or article price line item value |
**quantity** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerQuantity**](SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerQuantity.md) |  |
**commodity_codes** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCommodityCodesInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCommodityCodesInner.md) | Please provide Commodity codes for the shipment at item line level | [optional]
**export_reason_type** | **string** | Please provide the reason for export | [optional]
**manufacturer_country** | **string** | Please enter two letter ISO manufacturer country code |
**weight** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerWeight**](SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerWeight.md) |  |
**is_taxes_paid** | **bool** | Please provide if the Taxes is paid for the line item | [optional]
**customer_references** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerCustomerReferencesInner[]**](SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerCustomerReferencesInner.md) | Please provide the Customer References for the line item | [optional]
**customs_documents** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerCustomsDocumentsInner[]**](SupermodelIoLogisticsExpressExportDeclarationLineItemsInnerCustomsDocumentsInner.md) | Please provide the customs documents details | [optional]
**pre_calculated_line_item_total_value** | **float** | Please provide monetary value of the line item x quantity | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
