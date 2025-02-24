# # CampaignScope

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The scope type for this campaign.  * &#x60;order&#x60; - order level campaign. * &#x60;items&#x60; - item level campaign or bundle offer.  * &#x60;category&#x60; - category level campaign where all items within applies the same discount. |
**object_ids** | **string[]** | The list of item IDs in the partner&#39;s database applicable for discount when &#x60;discount.scope.type&#x60; is &#x60;items&#x60; (or category IDs for &#x60;category&#x60;).  One and only 1 item supported when &#x60;discount.type&#x60; is: - &#x60;freeItem&#x60; - &#x60;bundleSameNet&#x60; - &#x60;bundleSamePercentage&#x60; - &#x60;bundleSameFixPrice&#x60;  Minimum 2 - Maximum 20 items supported when &#x60;discount.type&#x60; is: - &#x60;bundleDiffNet&#x60; - &#x60;bundleDiffPercentage&#x60; - &#x60;bundleDiffFixPrice&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
