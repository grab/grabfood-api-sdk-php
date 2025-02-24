# # CampaignConditions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_time** | **\DateTime** | The campaign&#39;s start time in UTC format. For example, 2021-09-23T03:30:00Z means 2021-09-23 11:30:00 (UTC +08:00). |
**end_time** | **\DateTime** | The campaign&#39;s end time in UTC format. |
**eater_type** | **string** | The type of eater eligible for the campaign.  * &#x60;all&#x60; - campaign will be applied to everyone. No limitation on campaign type. * &#x60;new&#x60; - campaign will be applied to consumers who have not ordered from this store in the last three months. Only applicable to **order-level** campaign. |
**min_basket_amount** | **float** | The minimum basket amount to be eligible for the campaign. Only applicable to **order-level** campaign but not to item-level discount campaign. | [optional]
**bundle_quantity** | **int** | Specify the bundle quantity for bundle offer campaign. | [optional]
**working_hour** | [**\Grab\GrabfoodApiSdk\Model\WorkingHour**](WorkingHour.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
