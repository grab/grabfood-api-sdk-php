# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_number** | **string** | The delivery address&#39; unit number. | [optional]
**delivery_instruction** | **string** | Instructions for the delivery. | [optional]
**poi_source** | **string** | POI source | [optional]
**poi_id** | **string** | POI ID, empty when poiSource is GRAB. | [optional]
**address** | **string** | The delivery address containing street name, city, postal code, and country. Has value only when poiSource is &#x60;GRAB&#x60;. | [optional]
**postcode** | **string** | The postcode of the delivery address. Has value only when poiSource is &#x60;GRAB&#x60;. | [optional]
**coordinates** | [**\Grab\GrabfoodApiSdk\Model\Coordinates**](Coordinates.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
