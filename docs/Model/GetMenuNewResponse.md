# # GetMenuNewResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | The merchant&#39;s ID that is in GrabFood&#39;s database. | [optional]
**partner_merchant_id** | **string** | The merchant&#39;s ID that is on the partner&#39;s database. | [optional]
**currency** | [**\Grab\GrabfoodApiSdk\Model\Currency**](Currency.md) |  |
**selling_times** | [**\Grab\GrabfoodApiSdk\Model\SellingTime[]**](SellingTime.md) | An array of sellingTimes JSON objects. Max 20 allowed. Refer to [Selling Times](#selling-times) for more information. |
**categories** | [**\Grab\GrabfoodApiSdk\Model\MenuCategory[]**](MenuCategory.md) | An array of category JSON objects. Max 100 allowed. Refer to [Categories](#categories) for more information. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
