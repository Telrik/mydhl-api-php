# # Pickup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_requested** | **bool** | Please advise if a pickup is needed for this shipment | [default to false]
**close_time** | **string** | The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM) | [optional]
**location** | **string** | Provides information on where the package should be picked up by DHL courier. | [optional]
**special_instructions** | [**\MyDHL\Client\Model\PickupSpecialInstructionsInner[]**](PickupSpecialInstructionsInner.md) | Details special pickup instructions you may wish to send to the DHL Courier. | [optional]
**pickup_details** | [**\MyDHL\Client\Model\PickupPickupDetails**](PickupPickupDetails.md) |  | [optional]
**pickup_requestor_details** | [**\MyDHL\Client\Model\PickupPickupRequestorDetails**](PickupPickupRequestorDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
