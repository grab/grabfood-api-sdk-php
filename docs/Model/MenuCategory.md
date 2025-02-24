# # MenuCategory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The category&#39;s ID that is on the partner system. This ID should be unique. |
**name** | **string** | The name of the category. |
**name_translation** | **array<string,string>** | Translation of the category name. Only support up to 1 translated language. Refer [Menu Translation](#section/Menu-Translation). | [optional]
**available_status** | **string** | The status for the category. Refer to FAQs for more details about [availableStatus](#section/Menu/What-is-availableStatus). |
**selling_time_id** | **string** | The selling time&#39;s ID for the category. All items within the category will apply the same selling time unless there is another selling time specified for the item. |
**sequence** | **int** | The sort or display order of the category within the menu. | [optional]
**items** | [**\Grab\GrabfoodApiSdk\Model\MenuItem[]**](MenuItem.md) | An array of item JSON objects. Max 300 allowed per category. Refer to [Items](#items) for more information. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
