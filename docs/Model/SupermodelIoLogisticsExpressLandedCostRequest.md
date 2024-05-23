# # SupermodelIoLogisticsExpressLandedCostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_details** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails**](SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails.md) |  |
**accounts** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressAccount[]**](SupermodelIoLogisticsExpressAccount.md) | Please enter all the DHL Express accounts and types to be used for this shipment |
**product_code** | **string** | Please enter DHL Express Global Product code | [optional]
**local_product_code** | **string** | Please enter DHL Express Local Product code | [optional]
**unit_of_measurement** | **string** | Please enter Unit of measurement - metric,imperial |
**currency_code** | **string** | Currency code for the item price (the product being sold) and freight charge. The Landed Cost calculation result will be returned in this defined currency |
**is_customs_declarable** | **bool** | Set this to true is shipment contains declarable content |
**is_dtp_requested** | **bool** | Set this to true if you want DHL EXpress product Duties and Taxes Paid outside shipment destination | [optional]
**is_insurance_requested** | **bool** | Set this true if you ask for DHL Express insurance service | [optional]
**get_cost_breakdown** | **bool** | Allowed values &#39;true&#39; - item cost breakdown will be returned, &#39;false&#39; - item cost breakdown will not be returned |
**charges** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesInner[]**](SupermodelIoLogisticsExpressLandedCostRequestChargesInner.md) | Please provide any additional charges you would like to include in total cost calculation | [optional]
**shipment_purpose** | **string** | Possible values:&lt;BR&gt;      commercial: B2B&lt;BR&gt;      personal: B2C&lt;BR&gt;      commercia&#39;: B2B&lt;BR&gt;      personal: B2C | [optional]
**transportation_mode** | **string** |  | [optional]
**merchant_selected_carrier_name** | **string** | Carrier being used to ship with. Allowed values are:&lt;BR&gt;      &#39;DHL&#39;,&#39;UPS&#39;,&#39;FEDEX&#39;,&#39;TNT&#39;,&#39;POST&#39;,&lt;BR&gt;      &#39;OTHERS&#39; | [optional]
**packages** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressPackageRR[]**](SupermodelIoLogisticsExpressPackageRR.md) | Here you can define properties per package |
**items** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsInner[]**](SupermodelIoLogisticsExpressLandedCostRequestItemsInner.md) |  |
**get_tariff_formula** | **bool** | Allowed values &#39;true&#39; - tariff formula on item and shipment level will be returned, &#39;false&#39; - tariff formula on item and shipment level will not be returned | [optional]
**get_quotation_id** | **bool** | Allowed values &#39;true&#39; - quotation ID on shipment level will be returned, &#39;false&#39; - quotation ID on shipment level will not be returned | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
