# # ModifierGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The modifier group&#39;s ID that is on the partner system. This ID should be unique. |
**name** | **string** | The name of the modifier group. |
**name_translation** | **array<string,string>** | Translation of the modifier group name. Only support up to 1 translated language. Refer [Menu Translation](#section/Menu-Translation). | [optional]
**available_status** | **string** | The status for the modifier group.   &gt; The item may be marked as &#x60;\&quot;UNAVAILABLE\&quot;&#x60; if no available modifier to be selected within the required modifier group where &#x60;\&quot;selectionRangeMin\&quot;: 1&#x60;. |
**selection_range_min** | **int** | The minimum quantity of the modifiers to be selected. Refer to FAQs for more details about [selection range](#section/Menu/What-does-the-selection-range-do). | [optional]
**selection_range_max** | **int** | The maximum quantity of the modifiers to be selected. Refer to FAQs for more details about [selection range](#section/Menu/What-does-the-selection-range-do). |
**sequence** | **int** | The sort or display order of the modifier group within the menu. | [optional]
**modifiers** | [**\Grab\GrabfoodApiSdk\Model\MenuModifier[]**](MenuModifier.md) | An array of modifier JSON objects. Max 100 per modifierGroup. Refer to [Modifiers](#modifiers) for more information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
