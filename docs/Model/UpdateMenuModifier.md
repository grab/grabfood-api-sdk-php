# # UpdateMenuModifier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | The merchant&#39;s ID that is in GrabFood&#39;s database. |
**field** | **string** | The record type that you want to update. |
**id** | **string** | The record&#39;s ID on the partner system. For example, the modifier id in case type is MODIFIER. |
**price** | **int** | The record&#39;s price in minor unit format. | [optional]
**name** | **string** | **Only required when updating modifiers.** The record&#39;s name. Used as identifier to locate the correct record. |
**available_status** | **string** | The record&#39;s availableStatus. | [optional]
**is_free** | **bool** | Allows the modifier&#39;s price to be explicitly set as zero. Possible values are as follows:   * &#x60;isFree&#x60; &amp;&amp; &#x60;price &#x3D;&#x3D; 0&#x60; sets the modifier&#39;s price to zero.   * &#x60;isFree&#x60; &amp;&amp; &#x60;price &gt; 0&#x60; returns an error message that \&quot;price cannot be set to &gt; 0, if modifier is free”.   * &#x60;!isFree&#x60; &amp;&amp; &#x60;price &gt; 0&#x60; sets the modifier&#39;s price to the defined price.   * &#x60;!isFree&#x60; &amp;&amp; &#x60;price &#x3D;&#x3D; 0&#x60; does not update the modifier&#39;s price and reuses the existing price. | [optional]
**advanced_pricings** | [**\Grab\GrabfoodApiSdk\Model\UpdateAdvancedPricing[]**](UpdateAdvancedPricing.md) | Price configuration (in minor unit) for different service, order type and channel combination. If a service type does not have a specified price, it will utilize the default price of the item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
