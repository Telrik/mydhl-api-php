# MyDHL\Client\ServicepointApi

All URIs are relative to https://api-mock.dhl.com/mydhlapi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**expApiServicepoints()**](ServicepointApi.md#expApiServicepoints) | **GET** /servicepoints | Returns list of service points based on the given postal location address, service point ID or geocode details for DHL Express Service points to pick-up and drop-off shipments |


## `expApiServicepoints()`

```php
expApiServicepoints($address, $place_id, $provider_id, $latitude, $longitude, $service_point_id, $country_code, $language, $language_script_code, $language_country_code, $service_point_results, $capability, $open_before, $open_after, $open_day, $weight, $weight_uom, $length, $width, $height, $dimensions_uom, $result_uom, $service_area_code, $service_point_types, $max_distance, $piece_count_limit, $import_charges, $key, $combine_parameters, $edd, $exclude_fully_booked, $shipment_id, $piece_id, $shipment_origin_service_area_code, $is_results_specific_capab_required, $encrypt, $b64, $svp_status, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version): \MyDHL\Client\Model\ServicePointsRestResponseV3
```

Returns list of service points based on the given postal location address, service point ID or geocode details for DHL Express Service points to pick-up and drop-off shipments

Get service points based on the given input parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MyDHL\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MyDHL\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

// Configure HTTP basic authorization: basicAuth
$config = MyDHL\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Client\Api\ServicepointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = VGP Victory House, Shop no 6 , 6A, CHENNAI, Tamil Nadu; // string | The address near which Service Points are to be found. If servicePointID is used, address is not needed.     Address can be sent as raw address. However to be GDPR compliant, tokenized address in  request should be sent.
$place_id = ChIJYTN9T-plUjoRM9RjaAunYW4; // string | To specify the placeID for which the nearest service points have to be searched. PlaceId refers to the ID provided by any provider for particular Address. Ex: Google
$provider_id = google; // string | To specify the providerId(provider) for the place ID
$latitude = 2.93653; // string | Latitude of user location. If address / servicePointID  parameter used, this parameter is not needed.
$longitude = 101.47346; // string | Longitude of user location. If address / servicePointID  parameter used, this parameter is not needed. It works in combination with the latitude parameter
$service_point_id = BRU001; // string | Service Point ID is a unique key with 6 characters, consisting of Service Area for first 3 characters (e.g. BRU) and the last 3 characters is the Facility code (e.g. 001); Service point ID = BRU001.     If address is used, id is not possible to use.
$country_code = NL; // string | Only ISO 3166-1 - Alpha-2 for country code can be used, e.g. “NL”, “ES”, “GB”, “US”, “DE”, .... This country code is used for returning matching service points in that country.          When rendering the service point information, the time format (24h or AM/PM), and distance unit (km/miles) are derived from the country information stored in the GSPL database for the country specified via this parameter.     E.g. for countryCode=GB will be time format AM/PM and distance unit will be mi.     E.g. for countryCode=DE will be time format 24h and distance unit will be km.           The CountryCode is also used in the address search by Google/Bing to limit the results to the specified country (f.e. to avoid picking a street with the same name from a different country)
$language = eng; // string | Language Code - represents the language. Mandatory if Script Code is provided or Language Country Code is provided, else optional. E.g. ‘eng’     Language Code is using ISO 3166-1 alpha-3 (3 letters)
$language_script_code = Latn; // string | Language Script Code - represents the writing system. Mandatory if Language Country Code is provided, else optional.
$language_country_code = GB; // string | Language Country Code - can be used to differentiate between linguistic variants of the same Language.
$service_point_results = 10; // string | Max. number of service points to be returned.      If id or idf is used, this parameter is not needed as this will return searched service point.
$capability = 86,87; // string | Comma separated list of physical process capability codes.     81: I have a DHL account or return shipment     82: I have paid online     88: I will pay at the DHL Service Point     73: I will create a DHL shipping label at the DHL Service Point     74: I have printed a DHL label    75,76: I have a QR code    78,79: Im collecting a DHL Express parcel    86,87: I have directed a DHL Express parcel to a DHL Service Point    Possible Combinations : 81,73 | 81,74 | 81,75,76  | 82,74 | 82,75,76 | 88,73 | 78,79 | 86,87    Note: | is just used to represent the seperation of combinations.
$open_before = 840; // string | Service points open Before given Time. E.g.: 14:00 will find service points which are open before 14:00
$open_after = 900; // string | Service points open After given time e.g.:15:00 will find service points which are open after 15:00
$open_day = array('open_day_example'); // string[] | Open on Weekday, valid values as follow:     1 - Monday     2 - Tuesday     3 - Wednesday     4 - Thursday     5 - Friday     6 - Saturday     0 – Sunday
$weight = 10; // string | Max. weight of the shipment. Decimals are allowed as well (decimal separator either “,” or “.”)
$weight_uom = kg; // string[] | Weight units – kg or lb. Required if weight is passed in.
$length = 30; // string | Max. length of the shipment  - the highest dimension     e.g. 30. Decimals are allowed as well (decimal separator either “,” or “.”)
$width = 20; // string | Max. width of the shipment  - the middle dimension     e.g. 20. Decimals are allowed as well (decimal separator either “,” or “.”)
$height = 10; // string | Max. height of the shipment  - the lowest dimension     e.g. 10. Decimals are allowed as well (decimal separator either “,” or “.”)
$dimensions_uom = cm; // string[] | Dimension units – cm or in. Required with any of length, width or height parameter.
$result_uom = mi; // string[] | Distance uom to be used when returning response, it can be either km or mi. If not provided, default uom set for the country is returned.
$service_area_code = MAA; // string | Service Area Code of the search address
$service_point_types = CTY,STN; // string[] | Comma separated list of service point types, e.g. “CTY,STN,247”.     Allowed Values:     CTY (City) - High street premises. DHL owned and managed. Eg. Downtown    STN (Station) - DHL premises. DHL owned and managed at PUD locations    PRT (Partner) - Partners(External) store. Eg. 7-Eleven, Shell    247 (24/7) - operating 24hours a day, has locker facility.  DHL owned and unmanned or / and automated
$max_distance = 50; // string | Maximum distance in kilometers between the geocoded address and the returned Service Points. Values equal or less than 0 are ignored.     Accuracy of the maxDistance parameter:     The GREF web service uses a search rectangle for  Service Point searches. Therefore the maxDistance value is used to create a square with side length l = maxDistance * 2. This means that the distance of some of the found Service Points may actually be longer as specified by the maxDistance parameter, if the Service Point is located outside the circle with radius r = maxDistance, but still within the search square:     Centre point of the search square is the latitude/longitude pair resulting from a geocoding request to the Bing geocoding API, which in some cases may not represent the actual location of the address. The more precisely the address is specified, the higher is the probability that the geocoded location matches with the search address.
$piece_count_limit = 2; // string | Static number, max pieces which can be handled on the service point.
$import_charges = n; // string[] | Y/N – indicator whether it is possible to pay import charges on service point.
$key = 85fg600e-be39-4ef0-ac47-23ghj4756948g; // string | Unique API key which required separate onboarding request to enable this service.  Please approach your country representative for onboarding. Once approval is granted, API key will be generated and used for authentication.
$combine_parameters = (servicePointTypes=STN,CTY),(servicePointTypes=PRT,247&importCharges=true); // string | Allows combination of values for parameters servicePointTypes and importChanges. Limitations:- Only 1 level of conditions is allowed (not multiple AND/OR)Applicable only on servicePointTypes and importCharges parameters “,” stands for OR condition “&” stands for AND condition “()” splits multiple conditions.
$edd = 2023-06-25T22:59:00Z; // string | Estimated Delivery date:     YYYY-MM-DDThh:mm:ssTZD (for example 2023-06-25T22:59:00Z). This is a Servicepoint Capacity Management System Parameter to receive a capacity data of the found service points additionally calling Servicepoint Capacity Management System service.
$exclude_fully_booked = n; // string[] | Parameter which will enable to filter out fully booked services in the Service Point Locator response to client.     Values:     Y - Service Point Locator will not send back service points which are fully booked.     N - Service Point Locator will send back all service points, also those where is no free capacity.     If not provided in request, it will be set up as N by default.      This is a Servicepoint Capacity Management System parameter.
$shipment_id = 6360778572; // string | To specify the shipment ID. This is used for Servicepoint Capacity Management System parameter.
$piece_id = JD0081105201831337270; // string | Piece ID without Data Identifier / Prefix. (for example JD0081105201831337270 instead of JJD0081105201831337270). This is a Servicepoint Capacity Management System parameter.
$shipment_origin_service_area_code = CLU; // string | To specify the Shipment Origin Service Area Code. This is a Servicepoint Capacity Management System parameter.
$is_results_specific_capab_required = false; // string[] | This is to include preconfigured non UI capability codes(ex. PPC 72) to be considered while sending the request to Reference Data backend service. PPC 72 is applicable only for REST request and not for Service Point Locator UI.
$encrypt = n; // string[] | This 'encrypt' flag is to indicate to Service Point Locator whether the address is tokenized(encrypt=y) or non-tokenized. So that Service Point Locator can detokenize to provide matching Service Point list.          When 'encrypt=y', Service Point Locator clients should mandatorily send tokenized address in the REST request.      When 'encrypt=n' or without 'encrypt' parameter, client should only send non-tokenized address(raw address).     Sample below:            Non-tokenized(raw) address: Sabah, Malaysia           Tokenized address: YmtzOVpTQWdQSGRjSm41bFlDRkZjR0ZKSWc9PQ==          Address Tokenization: Service Point Locator provides additional security to mask the address sent by the client in REST request which will hide raw address visible on the ‘View page Source’ or in ‘Developer tools.
$b64 = false; // string[] | This indicates whether the address parameter contains the base64 encoded value or not.
$svp_status = A; // string[] | ServicePoint Status(svpStatus) to be used especially when looking for inactive service points with the svpStatus S,U,X,Y. By default active svpStatus 'A' is considered when this parameter is not sent in the request.   A = Service Available (Open)  S = Service Suspended (Temporarily closed)   U = Service Unavailable (Temporarily closed)   Y = Not Yet Open (Temporarily closed)   X = Closed (Temporarily closed)
$message_reference = d0e7832e-5c98-11ea-bc55-0242ac13; // string | Please provide message reference
$message_reference_date = Wed, 21 Oct 2015 07:28:00 GMT; // string | Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
$plugin_name =  ; // string | Please provide name of the plugin (applicable to 3PV only)
$plugin_version =  ; // string | Please provide version of the plugin (applicable to 3PV only)
$shipping_system_platform_name =  ; // string | Please provide name of the shipping platform(applicable to 3PV only)
$shipping_system_platform_version =  ; // string | Please provide version of the shipping platform (applicable to 3PV only)
$webstore_platform_name =  ; // string | Please provide name of the webstore platform (applicable to 3PV only)
$webstore_platform_version =  ; // string | Please provide version of the webstore platform (applicable to 3PV only)

try {
    $result = $apiInstance->expApiServicepoints($address, $place_id, $provider_id, $latitude, $longitude, $service_point_id, $country_code, $language, $language_script_code, $language_country_code, $service_point_results, $capability, $open_before, $open_after, $open_day, $weight, $weight_uom, $length, $width, $height, $dimensions_uom, $result_uom, $service_area_code, $service_point_types, $max_distance, $piece_count_limit, $import_charges, $key, $combine_parameters, $edd, $exclude_fully_booked, $shipment_id, $piece_id, $shipment_origin_service_area_code, $is_results_specific_capab_required, $encrypt, $b64, $svp_status, $message_reference, $message_reference_date, $plugin_name, $plugin_version, $shipping_system_platform_name, $shipping_system_platform_version, $webstore_platform_name, $webstore_platform_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicepointApi->expApiServicepoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| The address near which Service Points are to be found. If servicePointID is used, address is not needed.     Address can be sent as raw address. However to be GDPR compliant, tokenized address in  request should be sent. | [optional] |
| **place_id** | **string**| To specify the placeID for which the nearest service points have to be searched. PlaceId refers to the ID provided by any provider for particular Address. Ex: Google | [optional] |
| **provider_id** | **string**| To specify the providerId(provider) for the place ID | [optional] |
| **latitude** | **string**| Latitude of user location. If address / servicePointID  parameter used, this parameter is not needed. | [optional] |
| **longitude** | **string**| Longitude of user location. If address / servicePointID  parameter used, this parameter is not needed. It works in combination with the latitude parameter | [optional] |
| **service_point_id** | **string**| Service Point ID is a unique key with 6 characters, consisting of Service Area for first 3 characters (e.g. BRU) and the last 3 characters is the Facility code (e.g. 001); Service point ID &#x3D; BRU001.     If address is used, id is not possible to use. | [optional] |
| **country_code** | **string**| Only ISO 3166-1 - Alpha-2 for country code can be used, e.g. “NL”, “ES”, “GB”, “US”, “DE”, .... This country code is used for returning matching service points in that country.          When rendering the service point information, the time format (24h or AM/PM), and distance unit (km/miles) are derived from the country information stored in the GSPL database for the country specified via this parameter.     E.g. for countryCode&#x3D;GB will be time format AM/PM and distance unit will be mi.     E.g. for countryCode&#x3D;DE will be time format 24h and distance unit will be km.           The CountryCode is also used in the address search by Google/Bing to limit the results to the specified country (f.e. to avoid picking a street with the same name from a different country) | [optional] |
| **language** | **string**| Language Code - represents the language. Mandatory if Script Code is provided or Language Country Code is provided, else optional. E.g. ‘eng’     Language Code is using ISO 3166-1 alpha-3 (3 letters) | [optional] |
| **language_script_code** | **string**| Language Script Code - represents the writing system. Mandatory if Language Country Code is provided, else optional. | [optional] |
| **language_country_code** | **string**| Language Country Code - can be used to differentiate between linguistic variants of the same Language. | [optional] |
| **service_point_results** | **string**| Max. number of service points to be returned.      If id or idf is used, this parameter is not needed as this will return searched service point. | [optional] |
| **capability** | **string**| Comma separated list of physical process capability codes.     81: I have a DHL account or return shipment     82: I have paid online     88: I will pay at the DHL Service Point     73: I will create a DHL shipping label at the DHL Service Point     74: I have printed a DHL label    75,76: I have a QR code    78,79: Im collecting a DHL Express parcel    86,87: I have directed a DHL Express parcel to a DHL Service Point    Possible Combinations : 81,73 | 81,74 | 81,75,76  | 82,74 | 82,75,76 | 88,73 | 78,79 | 86,87    Note: | is just used to represent the seperation of combinations. | [optional] |
| **open_before** | **string**| Service points open Before given Time. E.g.: 14:00 will find service points which are open before 14:00 | [optional] |
| **open_after** | **string**| Service points open After given time e.g.:15:00 will find service points which are open after 15:00 | [optional] |
| **open_day** | [**string[]**](../Model/string.md)| Open on Weekday, valid values as follow:     1 - Monday     2 - Tuesday     3 - Wednesday     4 - Thursday     5 - Friday     6 - Saturday     0 – Sunday | [optional] |
| **weight** | **string**| Max. weight of the shipment. Decimals are allowed as well (decimal separator either “,” or “.”) | [optional] |
| **weight_uom** | [**string[]**](../Model/string.md)| Weight units – kg or lb. Required if weight is passed in. | [optional] |
| **length** | **string**| Max. length of the shipment  - the highest dimension     e.g. 30. Decimals are allowed as well (decimal separator either “,” or “.”) | [optional] |
| **width** | **string**| Max. width of the shipment  - the middle dimension     e.g. 20. Decimals are allowed as well (decimal separator either “,” or “.”) | [optional] |
| **height** | **string**| Max. height of the shipment  - the lowest dimension     e.g. 10. Decimals are allowed as well (decimal separator either “,” or “.”) | [optional] |
| **dimensions_uom** | [**string[]**](../Model/string.md)| Dimension units – cm or in. Required with any of length, width or height parameter. | [optional] |
| **result_uom** | [**string[]**](../Model/string.md)| Distance uom to be used when returning response, it can be either km or mi. If not provided, default uom set for the country is returned. | [optional] |
| **service_area_code** | **string**| Service Area Code of the search address | [optional] |
| **service_point_types** | [**string[]**](../Model/string.md)| Comma separated list of service point types, e.g. “CTY,STN,247”.     Allowed Values:     CTY (City) - High street premises. DHL owned and managed. Eg. Downtown    STN (Station) - DHL premises. DHL owned and managed at PUD locations    PRT (Partner) - Partners(External) store. Eg. 7-Eleven, Shell    247 (24/7) - operating 24hours a day, has locker facility.  DHL owned and unmanned or / and automated | [optional] |
| **max_distance** | **string**| Maximum distance in kilometers between the geocoded address and the returned Service Points. Values equal or less than 0 are ignored.     Accuracy of the maxDistance parameter:     The GREF web service uses a search rectangle for  Service Point searches. Therefore the maxDistance value is used to create a square with side length l &#x3D; maxDistance * 2. This means that the distance of some of the found Service Points may actually be longer as specified by the maxDistance parameter, if the Service Point is located outside the circle with radius r &#x3D; maxDistance, but still within the search square:     Centre point of the search square is the latitude/longitude pair resulting from a geocoding request to the Bing geocoding API, which in some cases may not represent the actual location of the address. The more precisely the address is specified, the higher is the probability that the geocoded location matches with the search address. | [optional] |
| **piece_count_limit** | **string**| Static number, max pieces which can be handled on the service point. | [optional] |
| **import_charges** | [**string[]**](../Model/string.md)| Y/N – indicator whether it is possible to pay import charges on service point. | [optional] |
| **key** | **string**| Unique API key which required separate onboarding request to enable this service.  Please approach your country representative for onboarding. Once approval is granted, API key will be generated and used for authentication. | [optional] |
| **combine_parameters** | **string**| Allows combination of values for parameters servicePointTypes and importChanges. Limitations:- Only 1 level of conditions is allowed (not multiple AND/OR)Applicable only on servicePointTypes and importCharges parameters “,” stands for OR condition “&amp;” stands for AND condition “()” splits multiple conditions. | [optional] |
| **edd** | **string**| Estimated Delivery date:     YYYY-MM-DDThh:mm:ssTZD (for example 2023-06-25T22:59:00Z). This is a Servicepoint Capacity Management System Parameter to receive a capacity data of the found service points additionally calling Servicepoint Capacity Management System service. | [optional] |
| **exclude_fully_booked** | [**string[]**](../Model/string.md)| Parameter which will enable to filter out fully booked services in the Service Point Locator response to client.     Values:     Y - Service Point Locator will not send back service points which are fully booked.     N - Service Point Locator will send back all service points, also those where is no free capacity.     If not provided in request, it will be set up as N by default.      This is a Servicepoint Capacity Management System parameter. | [optional] |
| **shipment_id** | **string**| To specify the shipment ID. This is used for Servicepoint Capacity Management System parameter. | [optional] |
| **piece_id** | **string**| Piece ID without Data Identifier / Prefix. (for example JD0081105201831337270 instead of JJD0081105201831337270). This is a Servicepoint Capacity Management System parameter. | [optional] |
| **shipment_origin_service_area_code** | **string**| To specify the Shipment Origin Service Area Code. This is a Servicepoint Capacity Management System parameter. | [optional] |
| **is_results_specific_capab_required** | [**string[]**](../Model/string.md)| This is to include preconfigured non UI capability codes(ex. PPC 72) to be considered while sending the request to Reference Data backend service. PPC 72 is applicable only for REST request and not for Service Point Locator UI. | [optional] |
| **encrypt** | [**string[]**](../Model/string.md)| This &#39;encrypt&#39; flag is to indicate to Service Point Locator whether the address is tokenized(encrypt&#x3D;y) or non-tokenized. So that Service Point Locator can detokenize to provide matching Service Point list.          When &#39;encrypt&#x3D;y&#39;, Service Point Locator clients should mandatorily send tokenized address in the REST request.      When &#39;encrypt&#x3D;n&#39; or without &#39;encrypt&#39; parameter, client should only send non-tokenized address(raw address).     Sample below:            Non-tokenized(raw) address: Sabah, Malaysia           Tokenized address: YmtzOVpTQWdQSGRjSm41bFlDRkZjR0ZKSWc9PQ&#x3D;&#x3D;          Address Tokenization: Service Point Locator provides additional security to mask the address sent by the client in REST request which will hide raw address visible on the ‘View page Source’ or in ‘Developer tools. | [optional] |
| **b64** | [**string[]**](../Model/string.md)| This indicates whether the address parameter contains the base64 encoded value or not. | [optional] |
| **svp_status** | [**string[]**](../Model/string.md)| ServicePoint Status(svpStatus) to be used especially when looking for inactive service points with the svpStatus S,U,X,Y. By default active svpStatus &#39;A&#39; is considered when this parameter is not sent in the request.   A &#x3D; Service Available (Open)  S &#x3D; Service Suspended (Temporarily closed)   U &#x3D; Service Unavailable (Temporarily closed)   Y &#x3D; Not Yet Open (Temporarily closed)   X &#x3D; Closed (Temporarily closed) | [optional] |
| **message_reference** | **string**| Please provide message reference | [optional] |
| **message_reference_date** | **string**| Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2 | [optional] |
| **plugin_name** | **string**| Please provide name of the plugin (applicable to 3PV only) | [optional] |
| **plugin_version** | **string**| Please provide version of the plugin (applicable to 3PV only) | [optional] |
| **shipping_system_platform_name** | **string**| Please provide name of the shipping platform(applicable to 3PV only) | [optional] |
| **shipping_system_platform_version** | **string**| Please provide version of the shipping platform (applicable to 3PV only) | [optional] |
| **webstore_platform_name** | **string**| Please provide name of the webstore platform (applicable to 3PV only) | [optional] |
| **webstore_platform_version** | **string**| Please provide version of the webstore platform (applicable to 3PV only) | [optional] |

### Return type

[**\MyDHL\Client\Model\ServicePointsRestResponseV3**](../Model/ServicePointsRestResponseV3.md)

### Authorization

[apiKey](../../README.md#apiKey), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
