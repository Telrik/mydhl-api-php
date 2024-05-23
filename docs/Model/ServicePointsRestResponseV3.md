# # ServicePointsRestResponseV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\MyDHL\Client\Model\RestResponseStatus**](RestResponseStatus.md) |  | [optional]
**search_address** | **string** | The address used for the search (value of request parameter &#39;address&#39;) | [optional]
**search_location** | [**\MyDHL\Client\Model\GeoLocation**](GeoLocation.md) |  | [optional]
**map_culture** | **string** | The culture parameter for Bing Maps API (derived from the country parameter in the request) | [optional]
**map_language** | **string** | Map Culture Used for Third party Maps | [optional]
**service_points** | [**\MyDHL\Client\Model\ServicePoint[]**](ServicePoint.md) | Array of the found Service Points. Each Service Point entity contains details about the service point. | [optional]
**messages** | **string[]** | Array of strings. Contains information messages  - e.g. required language is not available, result was filtered due to incoming holidays. | [optional]
**translations** | [**\MyDHL\Client\Model\Translations**](Translations.md) |  | [optional]
**lite_mode** | **bool** | Indicates whether lite mode is acitvated or not. | [optional]
**promotion** | [**\MyDHL\Client\Model\Promotion**](Promotion.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
