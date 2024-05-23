# # SupermodelIoLogisticsExpressExportDeclarationInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Please enter commercial invoice number |
**date** | **string** | Please enter commercial invoice date |
**function** | **string** | Please provide the purpose was the document details captured and are planned to be used. Note: export and import is only applicable for approve Sale In Transit customers |
**customer_references** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesInner[]**](SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesInner.md) | Please provide the customer references at invoice level.   Note: customerReference/0/value with typeCode &#39;CU&#39; is mandatory if using POST method and no shipmentTrackingNumber is provided in request. It is recommended to provide less than 20 customer references of &#39;MRN&#39; type code | [optional]
**indicative_customs_values** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues**](SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues.md) |  | [optional]
**pre_calculated_total_values** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues**](SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
