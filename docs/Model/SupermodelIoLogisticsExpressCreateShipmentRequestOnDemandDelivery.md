# # SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_option** | **string** | Please choose from one of the delivery options |
**location** | **string** | If delivery option is signatureDelivery please specify location where to leave the shipment | [optional]
**special_instructions** | **string** | Please enter additional information that might be useful for the DHL Express courier. This field is conditionally mandatory if selected location is &#39;Other&#39;. | [optional]
**gate_code** | **string** | Please provide entry code to gain access to an apartment complex or gate | [optional]
**where_to_leave** | **string** | In ase your deliveryOption is &#39;neighbour&#39; please specify where to leave the package | [optional]
**neighbour_name** | **string** | In case you wish to leave the package with neighbour please provide the neighbour&#39;s name | [optional]
**neighbour_house_number** | **string** | In case you wish to leave the package with neighbour please provide the neighbour&#39;s house number | [optional]
**authorizer_name** | **string** | In case your delivery option is &#39;signatureRelease&#39; please provide name of the person who is authorized to sign and receive the package | [optional]
**service_point_id** | **string** | In case your delivery option is &#39;servicepoint&#39; please provide unique DHL Express Service point location ID of where the parcel should be delieverd (please contact your local DHL Express Account Manager to obtain the list of the servicepoint IDs) | [optional]
**requested_delivery_date** | **string** | for future use | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
