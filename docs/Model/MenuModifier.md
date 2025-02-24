# # MenuModifier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The modifier&#39;s ID that is on the partner&#39;s system. This ID should be unique. |
**name** | **string** | The name of the modifier. |
**name_translation** | **array<string,string>** | Translation of the modifier name. Only support up to 1 translated language. Refer [Menu Translation](#section/Menu-Translation). | [optional]
**available_status** | **string** | The status for the modifier. Refer to FAQs for more details about [availableStatus](#section/Menu/What-is-availableStatus). |
**price** | **int** | The modifier&#39;s price in minor format. Refer to FAQs for more details about [tax](#section/Menu/Is-the-menu-price-with-or-without-tax). | [optional]
**barcode** | **string** | The barcode Number (GTIN). GTIN must be 8, 12, 13, 14 numeric digits. | [optional]
**sequence** | **int** | The sort or display order of the modifier within the menu. | [optional]
**advanced_pricing** | [**\Grab\GrabfoodApiSdk\Model\AdvancedPricing**](AdvancedPricing.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
