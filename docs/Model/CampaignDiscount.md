# # CampaignDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of discount |
**cap** | **float** | The maximum discount dollar amount. It is **not required** and will be ignored when the &#x60;discount.type&#x60; is: - &#x60;net&#x60; - &#x60;delivery&#x60; - &#x60;freeItem&#x60; - &#x60;bundleSameNet&#x60; - &#x60;bundleSamePercentage&#x60; - &#x60;bundleSameFixPrice&#x60; - &#x60;bundleDiffNet&#x60; - &#x60;bundleDiffPercentage&#x60; - &#x60;bundleDiffFixPrice&#x60; | [optional]
**value** | **float** | Specify the discount amount. Decimal number is not supported For VN, ID and TH. For example, &#x60;10.5&#x60; is not allowed and it should be &#x60;10.0&#x60;. * Dollar amount value when &#x60;discount.type&#x60; is &#x60;net&#x60;, &#x60;delivery&#x60;, &#x60;bundleSameNet&#x60;, &#x60;bundleSameFixPrice&#x60;, &#x60;bundleDiffNet&#x60;, &#x60;bundleDiffFixPrice&#x60;. * Percentage value (0-100) when &#x60;discount.type&#x60; is &#x60;percentage&#x60;, &#x60;bundleSamePercentage&#x60;, &#x60;bundleDiffPercentage&#x60;. * **Not required** when &#x60;discount.type&#x60; is &#x60;freeItem&#x60;. | [optional]
**scope** | [**\Grab\GrabfoodApiSdk\Model\CampaignScope**](CampaignScope.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
