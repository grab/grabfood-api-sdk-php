# # OutOfStockInstruction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The short instruction message. | [optional]
**instruction_type** | **string** | Type of out-of-stock instruction chosen by customer. &#x60;CONTACT&#x60; is disabled by default, kindly reach out to your integration manager if you wish to receive this instruction. | [optional]
**replacement_item_id** | **string** | The preferred item&#39;s ID in the partner system. Only applicable when the instructionType is &#x60;SPECIFIC_ITEM&#x60;. | [optional]
**replacement_grab_item_id** | **string** | The preferred item&#39;s ID in the Grab system. Only applicable when the instructionType is &#x60;SPECIFIC_ITEM&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
