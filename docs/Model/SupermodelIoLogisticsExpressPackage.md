# # SupermodelIoLogisticsExpressPackage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type_code** | **string** | Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element. | [optional]
**weight** | **float** | The weight of the package. |
**dimensions** | [**\MyDHL\Client\Model\Dimensions**](Dimensions.md) |  |
**customer_references** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressPackageReference[]**](SupermodelIoLogisticsExpressPackageReference.md) | Here you can declare your customer references for each package | [optional]
**identifiers** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressIdentifier[]**](SupermodelIoLogisticsExpressIdentifier.md) | Identifiers section is on the package level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact. | [optional]
**description** | **string** | Please enter description of content for each package | [optional]
**label_barcodes** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesInner[]**](SupermodelIoLogisticsExpressPackageLabelBarcodesInner.md) | This allows you to define up to two bespoke barcodes on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode&#x3D;label | [optional]
**label_text** | [**\MyDHL\Client\Model\SupermodelIoLogisticsExpressPackageLabelTextInner[]**](SupermodelIoLogisticsExpressPackageLabelTextInner.md) | This allows you to enter up to two bespoke texts on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode&#x3D;label | [optional]
**label_description** | **string** | Please enter additional customer description | [optional]
**reference_number** | **float** | Please enter package reference number. If package reference number is provided for at least one package, then package reference number must be provided for all packages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
