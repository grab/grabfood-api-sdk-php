# # OrderItemModifier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The modifier&#39;s ID that is on the partner&#39;s system. | [optional]
**price** | **int** | The modifier&#39;s price (tax-inclusive) in minor format.  &#x60;&#x60;&#x60; price &#x3D; round(165 * (1 + 0.06)) &#x3D; 175 | [optional]
**tax** | **int** | Tax in minor format for 1 modifier. Refer to FAQs for more details about [tax](#section/Order/How-is-tax-calculated). &#x60;&#x60;&#x60; tax &#x3D; 165*0.06&#x3D;10 | [optional]
**quantity** | **int** | The number of modifiers present. The value is always 1. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
