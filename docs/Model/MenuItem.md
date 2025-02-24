# # MenuItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The item&#39;s ID in the partner system. This ID should be unique. |
**name** | **string** | The name of the item. |
**name_translation** | **array<string,string>** | Translation of the item name. Only support up to 1 translated language. Refer [Menu Translation](#section/Menu-Translation). | [optional]
**available_status** | **string** | The status for the item. Refer to FAQs for more details about [availableStatus](#section/Menu/What-is-availableStatus).  &gt; Note: In order to set an item as &#x60;\&quot;UNAVAILABLE\&quot;&#x60;, it is required to update both the &#x60;availableStatus&#x60; and &#x60;maxStock&#x60; fields, whereby the &#x60;maxStock&#x60; should be set to 0. |
**description** | **string** | The description of the item. There is a custom length limit of 2000 for &#x60;VN&#x60;. | [optional]
**description_translation** | **array<string,string>** | Translation of the item description. Only support up to 1 translated language. Refer [Menu Translation](#section/Menu-Translation). | [optional]
**price** | **int** | The item&#39;s price in minor format. For example: 1900 means $19 with &#x60;currency.exponent&#x60; as 2. Refer to [FAQ](#section/Menu/Is-the-menu-price-with-or-without-tax) to determine whether the pricing should be tax-inclusive or tax-exclusive. |
**photos** | **string[]** | An array string for the item’s image URL link. Only 1 image is supported. Refer to FAQs for more details about [images formats](#section/Menu/What-are-the-recommended-formats-for-an-item-image). | [optional]
**special_type** | **string** | The item&#39;s special Tag. Refer to FAQs for more details about [specialType](#section/Menu/What&#39;s-specialType). | [optional]
**taxable** | **bool** | **For Indonesia only.** This field allows the configuration for an item to be marked as tax applicable, and marked item would then be included in a commercial invoice to consumers as per the government&#39;s regulations. | [optional]
**barcode** | **string** | The barcode Number (GTIN). Max 64 allowed. GTIN must be 8, 12, 13, 14 numeric digits. | [optional]
**selling_time_id** | **string** | The selling time&#39;s ID for the item. This value overrides the category&#39;s selling time if it is different. Empty value implies the category&#39;s selling time will be applied. | [optional]
**max_stock** | **int** | Available stocks under inventory for this item. Auto reduce when there is order placed for this item. Empty value implies no limit.  &gt; Note: It is necessary to set &#x60;maxStock&#x60; to 0 if the &#x60;availableStatus&#x60; of the item is &#x60;\&quot;UNAVAILABLE\&quot;&#x60;. Item will be set to &#x60;\&quot;AVAILABLE\&quot;&#x60; if &#x60;maxStock&#x60; &gt; 0. | [optional]
**sequence** | **int** | The sort or display order of the item within the menu. | [optional]
**advanced_pricing** | [**\Grab\GrabfoodApiSdk\Model\AdvancedPricing**](AdvancedPricing.md) |  | [optional]
**purchasability** | [**\Grab\GrabfoodApiSdk\Model\Purchasability**](Purchasability.md) |  | [optional]
**modifier_groups** | [**\Grab\GrabfoodApiSdk\Model\ModifierGroup[]**](ModifierGroup.md) | An array of the modifierGroup JSON objects. Max 30 allowed per item. Refer to [Modifier groups](#modifier-groups) for more information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
