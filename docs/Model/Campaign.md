# # Campaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The campaign&#39;s ID. |
**created_by** | **string** | The party who created the campaign. Can be created by partners via API, merchants via the merchant app or Grab. |
**merchant_id** | **string** | The merchant&#39;s ID that is in GrabFood&#39;s database. |
**name** | **string** | The campaign&#39;s name. |
**quotas** | [**\Grab\GrabfoodApiSdk\Model\CampaignQuotas**](CampaignQuotas.md) |  | [optional]
**conditions** | [**\Grab\GrabfoodApiSdk\Model\CampaignConditions**](CampaignConditions.md) |  | [optional]
**discount** | [**\Grab\GrabfoodApiSdk\Model\CampaignDiscount**](CampaignDiscount.md) |  | [optional]
**custom_tag** | **string** | Specify the tag for custom bundle offer campaign. Only whitelisted partner is supported as of now. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
