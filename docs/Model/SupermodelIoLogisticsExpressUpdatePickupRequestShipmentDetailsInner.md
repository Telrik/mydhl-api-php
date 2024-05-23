# # SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_code** | **string** | Please provide DHL Express Global product code of the shipment |
**local_product_code** | **string** | Please provide DHL Express Local product code of the shipment | [optional]
**accounts** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressAccount[]**](SupermodelIoLogisticsExpressAccount.md) |  | [optional]
**value_added_services** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressValueAddedServicesRates[]**](SupermodelIoLogisticsExpressValueAddedServicesRates.md) |  | [optional]
**is_customs_declarable** | **bool** | For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false) |
**declared_value** | **float** | For customs purposes please advise on declared value of the shipment | [optional]
**declared_value_currency** | **string** | For customs purposes please advise on declared value currency code of the shipment | [optional]
**unit_of_measurement** | **string** | Please enter Unit of measurement - metric,imperial |
**shipment_tracking_number** | **string** | Please provide Shipment Identification number (AWB number) | [optional]
**packages** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressPackageRR[]**](SupermodelIoLogisticsExpressPackageRR.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
