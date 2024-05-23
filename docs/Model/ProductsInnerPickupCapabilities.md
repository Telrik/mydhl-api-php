# # ProductsInnerPickupCapabilities

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_business_day** | **bool** | This indicator has values of Y or N, and tells the consumer if the service in the response has a pickup date on the same day as the requested shipment date (per the request). | [optional]
**local_cutoff_date_and_time** | **string** | This is the cutoff time for the service&lt;BR&gt;                offered in the response. This represents the latest time (local to origin) which the shipment can be tendered to the courier for that service on that day. | [optional]
**gmt_cutoff_time** | **string** | Pickup cut off time in GMT | [optional]
**pickup_earliest** | **string** | The DHL earliest time possible for pickup | [optional]
**pickup_latest** | **string** | The DHL latest time possible for pickup | [optional]
**origin_service_area_code** | **string** | The DHL Service Area Code for the origin of the Shipment | [optional]
**origin_facility_area_code** | **string** | The DHL Facility Code for the Origin | [optional]
**pickup_additional_days** | **float** | This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area. | [optional]
**pickup_day_of_week** | **float** | Pickup day of the week number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
