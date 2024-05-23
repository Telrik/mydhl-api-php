# # ProductsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_name** | **string** | Name of the DHL Express product | [optional]
**product_code** | **string** | This is the global DHL Express product code for which the delivery is feasible respecting the input data from the request. | [optional]
**local_product_code** | **string** | This is the local DHL Express product code for which the delivery is feasible respecting the input data from the request. | [optional]
**local_product_country_code** | **string** | The country code for the local service used | [optional]
**network_type_code** | **string** | The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.&lt;BR&gt;            Possible Values;&lt;BR&gt;            DD: Day Definite product&lt;BR&gt;            TD: Time Definite product | [optional]
**is_customer_agreement** | **bool** | Indicator that the product only can be offered to customers with prior agreement. | [optional]
**weight** | [**\MyDHL\Client\Model\Weight**](Weight.md) |  | [optional]
**breakdown** | [**\MyDHL\Client\Model\ProductsInnerBreakdownInner[]**](ProductsInnerBreakdownInner.md) |  | [optional]
**service_code_mutually_exclusive_groups** | [**\MyDHL\Client\Model\ProductsInnerServiceCodeMutuallyExclusiveGroupsInner[]**](ProductsInnerServiceCodeMutuallyExclusiveGroupsInner.md) | Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment | [optional]
**service_code_dependency_rule_groups** | [**\MyDHL\Client\Model\ProductsInnerServiceCodeDependencyRuleGroupsInner[]**](ProductsInnerServiceCodeDependencyRuleGroupsInner.md) | Dependency rule groups for a particular serviceCode. | [optional]
**pickup_capabilities** | [**\MyDHL\Client\Model\ProductsInnerPickupCapabilities**](ProductsInnerPickupCapabilities.md) |  | [optional]
**delivery_capabilities** | [**\MyDHL\Client\Model\ProductsInnerDeliveryCapabilities**](ProductsInnerDeliveryCapabilities.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
