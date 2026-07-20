# # OrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The item&#39;s externalID in the partner system. |
**grab_item_id** | **string** | The item&#39;s ID in Grab system. Partner can use this field in the &#x60;EditOrder&#x60; endpoint. Note: The index number (after &#x60;#&#x60;) is different for the same item with different modifiers. This helps identify items when editing complex orders. This is currently controlled by feature flag until full rollout, for non whitelisted partners, the &#39;#&#39; and index number will not be included. |
**quantity** | **int** | The number of the item ordered. |
**price** | **int** | The price for a single item along with its associated modifiers in minor unit and tax-inclusive.  &#x60;&#x60;&#x60; price &#x3D; Item price(tax inclusive) + Modifier price(tax inclusive) | (2241*1.06)+(165*1.06)&#x3D;2550 |
**tax** | **int** | Tax in minor format for ~~a single item~~ total items along with its associated modifiers (multiply by quantity) . &#x60;0&#x60; if tax configuration is absent. Refer to FAQs for more details about [tax](#section/Order/How-is-tax-calculated).  Note: Currently in Staging environment, the tax is calculated based on the single item. In Production environment, the tax is calculated based on the total items (multiply by quantity). There will be a change in the future to match the logic in Staging environment. &#x60;&#x60;&#x60; tax &#x3D; Item tax + Modifier tax | (2241*0.06)+(165*0.06) * 1 &#x3D;144 | [optional]
**specifications** | **string** | An extra note for the merchant. Empty if no note from consumer. | [optional]
**bcrs_unit_count** | **int** | **For Singapore only.** The number of BCRS (Beverage Container Return Scheme) eligible containers for this item. Only present when the item is BCRS-eligible and the merchant has BCRS enabled; omitted otherwise. This represents how many beverage containers (plastic bottles or metal cans) the item contributes towards the BCRS deposit charge. | [optional]
**out_of_stock_instruction** | [**\Grab\GrabfoodApiSdk\Model\OutOfStockInstruction**](OutOfStockInstruction.md) |  | [optional]
**modifiers** | [**\Grab\GrabfoodApiSdk\Model\OrderItemModifier[]**](OrderItemModifier.md) | An array of JSON objects modifiers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
