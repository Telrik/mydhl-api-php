# # SupermodelIoLogisticsExpressUpdatePickupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dispatch_confirmation_number** | **string** | Please enter Dispatch confirmation number which identifies the already scheduled pickup |
**original_shipper_account_number** | **string** | Please enter the shipper account number which was used during the scheduled pickup creation |
**planned_pickup_date_and_time** | **string** | Identifies the date and time the package is ready for pickup Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper&#39;s time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).&lt;BR&gt; |
**close_time** | **string** | The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM) | [optional]
**location** | **string** | Provides information on where the package should be picked up by DHL courier. &lt;BR&gt; | [optional]
**location_type** | **string** | Provides information on where the package should be picked up by DHL courier. &lt;BR&gt; | [optional]
**accounts** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressAccount[]**](SupermodelIoLogisticsExpressAccount.md) |  |
**special_instructions** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsInner[]**](SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsInner.md) | Details special pickup instructions you may wish to send to the DHL Courier. | [optional]
**remark** | **string** | Please provide additional pickup remark | [optional]
**customer_details** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails**](SupermodelIoLogisticsExpressPickupRequestCustomerDetails.md) |  |
**shipment_details** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsInner[]**](SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsInner.md) | Please provide updated details related to shipment you want update the pickup for | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
