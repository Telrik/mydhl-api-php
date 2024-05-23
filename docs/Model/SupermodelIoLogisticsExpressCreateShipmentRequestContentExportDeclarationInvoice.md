# # SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Please enter commercial invoice number |
**date** | **\DateTime** | Please enter commercial invoice date |
**signature_name** | **string** | Please enter who has signed the invoce | [optional]
**signature_title** | **string** | Please provide title of person who has signed the invoice | [optional]
**signature_image** | **string** | Please provide the signature image | [optional]
**instructions** | **string[]** | Shipment instructions for customs invoice printing purposes. Printed only when using Customs Invoice template COMMERCIAL_INVOICE_04. If using Customs Invoice template    COMMERCIAL_INVOICE_04, recommended max length is 120 characters. | [optional]
**customer_data_text_entries** | **string[]** | Customer data text to be printed in&lt;BR&gt;                  customs invoice.&lt;BR&gt;                  Printed only when using Customs&lt;BR&gt;                  Invoice template&lt;BR&gt;                  COMMERCIAL_INVOICE_04. | [optional]
**total_net_weight** | **float** | Please provide the total net weight | [optional]
**total_gross_weight** | **float** | Please provide the total gross weight | [optional]
**customer_references** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesInner.md) | Please provide the customer references at invoice level. It is recommended to provide less than 20 customer references of &#39;MRN&#39; type code. | [optional]
**terms_of_payment** | **string** | Please provide the terms of payment | [optional]
**indicative_customs_values** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues.md) |  | [optional]
**pre_calculated_total_values** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
