# # MenuSectionCategory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The category&#39;s ID that is on the partner system. This ID should be unique with a min length of 1 and max of 64. |
**name** | **string** | The name of the category. |
**name_translation** | **array<string,string>** | Translation of the category name. Only support up to 1 translated language. Refer [Menu Translation](#section/Menu-Translation). | [optional]
**available_status** | **string** | The status for the category. Refer to FAQs for more details about [availableStatus](#section/Menu/What-is-availableStatus). |
**items** | [**\Grab\GrabfoodApiSdk\Model\MenuSectionCategoryItem[]**](MenuSectionCategoryItem.md) | An array of item JSON objects. Max 300 allowed per category. Refer to [Items](#items) for more information. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
