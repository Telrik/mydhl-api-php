# # SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_items** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInner.md) | Please enter details for each export line item |
**invoice** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice.md) |  | [optional]
**remarks** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksInner.md) | Please enter up to three remarks. &lt;BR&gt;              If using Customs Invoice template COMMERCIAL_INVOICE_04, the invoice can only print the first remarks field. The recommended max length is 20 characters. &lt;BR&gt;              If using Customs Invoice template COMMERCIAL_INVOICE_L_10 or COMMERCIAL_INVOICE_P_10, the invoice can print all three remraks fields.  The recommended max length is 45 characters. | [optional]
**additional_charges** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesInner.md) | Please enter additional charge to appear on the invoice&lt;BR&gt;              admin, Administration Charge&lt;BR&gt;              delivery, Delivery Charge&lt;BR&gt;              documentation, Documentation Charge&lt;BR&gt;              expedite, Expedite Charge&lt;BR&gt;              export, Export Charge&lt;BR&gt;              freight, Freight Charge&lt;BR&gt;              fuel_surcharge, Fuel Surcharge&lt;BR&gt;              logistic, Logistic Charge&lt;BR&gt;              other, Other Charge&lt;BR&gt;              packaging, Packaging Charge&lt;BR&gt;              pickup, Pickup Charge&lt;BR&gt;              handling, Handling Charge&lt;BR&gt;              vat, VAT Charge&lt;BR&gt;              insurance, Insurance Cost&lt;BR&gt;              reverse_charge, Reverse Charge | [optional]
**destination_port_name** | **string** | Please provide destination port details | [optional]
**place_of_incoterm** | **string** | Name of port of departure, shipment or destination as required under the applicable delivery term. | [optional]
**payer_vat_number** | **string** | Please provide Payer VAT number | [optional]
**recipient_reference** | **string** | Please enter recipient reference | [optional]
**exporter** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter.md) |  | [optional]
**package_marks** | **string** | Please enter package marks | [optional]
**declaration_notes** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesInner.md) | Please provide up to three dcelaration notes | [optional]
**export_reference** | **string** | Please enter export reference | [optional]
**export_reason** | **string** | Please enter export reason | [optional]
**export_reason_type** | **string** | Please provide the reason for export | [optional]
**licenses** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesInner.md) | Please provide details about export and import licenses | [optional]
**shipment_type** | **string** | Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons | [optional]
**customs_documents** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsInner.md) | Please provide the Customs Documents at invoice level | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
