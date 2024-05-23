# # ServicePoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The facility ID from GREF database | [optional]
**facility_id** | **string** | Service Point ID is a unique key with 6 characters, consisting of Service Area for first 3 characters (e.g. BRU) and the last 3 characters is the Facility code (e.g. 001); Service point ID &#x3D; BRU001.  If address is used id not possible to use. | [optional]
**facility_type_code** | **string** | The facility type code from GREF database | [optional]
**service_area_code** | **string** | The service point’s Service Area Code | [optional]
**service_point_name** | **string** | Name of the service point | [optional]
**service_point_name_formatted** | **string** | Formatted name of the service point | [optional]
**local_name** | **string** | The local trading name of the Service Point | [optional]
**service_point_type** | **string** | The type of the Service Point. CITY, STATION, PARTNER or TWENTYFOURSEVEN. | [optional]
**address** | [**\MyDHL\Client\Model\Address**](Address.md) |  | [optional]
**geo_location** | [**\MyDHL\Client\Model\GeoLocation**](GeoLocation.md) |  | [optional]
**distance** | **string** | The distance from the search address to this Service Point (beeline). | [optional]
**shipping_cut_off_time** | **string** | Time until which a shipment can be handed in at the Service Point, and is still shipped on the same day | [optional]
**opening_hours** | [**\MyDHL\Client\Model\OpeningHours**](OpeningHours.md) |  | [optional]
**service_point_capabilities** | [**\MyDHL\Client\Model\ServicePointCapabilities**](ServicePointCapabilities.md) |  | [optional]
**contact_details** | [**\MyDHL\Client\Model\ContactDetails**](ContactDetails.md) |  | [optional]
**shipping_cut_off_time_html** | **string** | Obsolete. This is planned to be removed in future releases. | [optional]
**distance_value** | **string** | Distance of SVP from searched location | [optional]
**distance_metric** | **float** | Metric of distance | [optional]
**language** | [**\MyDHL\Client\Model\Language**](Language.md) |  | [optional]
**shipment_limitations** | [**\MyDHL\Client\Model\ShipmentLimitations**](ShipmentLimitations.md) |  | [optional]
**shipment_limitations_by_piece** | [**\MyDHL\Client\Model\ShipmentLimitationsByPiece**](ShipmentLimitationsByPiece.md) |  | [optional]
**charge_code** | **string** | Charge code, e.g. XX | [optional]
**partner** | [**\MyDHL\Client\Model\Partner**](Partner.md) |  | [optional]
**promotion** | [**\MyDHL\Client\Model\Promotion**](Promotion.md) |  | [optional]
**capacity_status** | [**\MyDHL\Client\Model\CapacityStatus**](CapacityStatus.md) |  | [optional]
**svp_status** | **string** | Status of the service point(Active or Inactive) | [optional]
**work_week_start** | **int** | Number of day when the work week starts. It starts from 0 to 6(Sunday to Saturday) | [optional]
**located_at** | **string** |  | [optional]
**time_zone** | [**\MyDHL\Client\Model\DateTimeZone**](DateTimeZone.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
