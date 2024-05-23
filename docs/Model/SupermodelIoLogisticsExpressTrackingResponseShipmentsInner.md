# # SupermodelIoLogisticsExpressTrackingResponseShipmentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_tracking_number** | **string** |  | [optional]
**status** | **string** |  | [optional]
**shipment_timestamp** | **string** |  | [optional]
**product_code** | **string** | DHL product code | [optional]
**description** | **string** |  | [optional]
**shipper_details** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetails**](SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetails.md) |  | [optional]
**receiver_details** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetails**](SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetails.md) |  | [optional]
**total_weight** | **float** |  | [optional]
**unit_of_measurements** | **string** |  | [optional]
**shipper_references** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressReference[]**](SupermodelIoLogisticsExpressReference.md) |  | [optional]
**events** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerEventsInner[]**](SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerEventsInner.md) |  |
**number_of_pieces** | **float** |  | [optional]
**pieces** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInner[]**](SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInner.md) |  | [optional]
**estimated_delivery_date** | **string** |  | [optional]
**children_shipment_identification_numbers** | **string[]** |  | [optional]
**controlled_access_data_codes** | **string[]** | controlled access data codes such as &#39;SHPR_CTY&#39; for shipper&#39;s city, &#39;CNSGN_CTY&#39; for consignee&#39;s city, &#39;SVP_URL&#39; for service point URL, &#39;SVP_FAC&#39; for service point facility code and &#39;SIGN_NM&#39; for signatory name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
