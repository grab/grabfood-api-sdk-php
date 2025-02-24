# # MenuEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The record&#39;s ID on the partner system. For example, the item id in case type is ITEM, modifier id is MODIFIER. | [optional]
**price** | **int** | The record&#39;s price in minor unit format. | [optional]
**available_status** | **string** | The record&#39;s availableStatus.  Note: In order to set an item as \&quot;UNAVAILABLE\&quot;, it is required to update both the &#x60;availableStatus&#x60; and &#x60;maxStock&#x60; fields, whereby the &#x60;maxStock&#x60; value should be set to 0. | [optional]
**max_stock** | **int** | Available stocks under inventory for this item. Auto reduce when there is order placed for this item.  Note: It is necessary to set &#x60;maxStock&#x60; to 0 if the &#x60;availableStatus&#x60; of the item is \&quot;UNAVAILABLE\&quot;. Item will be set to \&quot;AVAILABLE\&quot; if &#x60;maxStock&#x60; &gt; 0. | [optional]
**advanced_pricings** | [**\Grab\GrabfoodApiSdk\Model\UpdateAdvancedPricing[]**](UpdateAdvancedPricing.md) | Price configuration (in minor unit) for different service, order type and channel combination. If a service type does not have a specified price, it will utilize the default price of the item. | [optional]
**purchasabilities** | [**\Grab\GrabfoodApiSdk\Model\UpdatePurchasability[]**](UpdatePurchasability.md) | Purchasability is set to true by default for all service type, unless it is explicitly set to false. Modifier will reuse it’s item’s purchasability. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
