# # EditOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The order&#39;s ID that is returned from GrabFood. Refer to FAQs for more details about [orderID and shortOrderNumber](#section/Order/What&#39;s-the-difference-between-orderID-and-shortOrderNumber). |
**items** | [**\Grab\GrabfoodApiSdk\Model\EditOrderItem[]**](EditOrderItem.md) | Specify the array of all items in the order, including deleted, added, updated and unchanged items. |
**only_recalculate** | **bool** | This parameter specifies whether to recalculate the edited order without submitting it. It is intended for testing purposes only. This parameter is set to false by default, which means the edited order will be recalculated and re-submitted to partners. | [optional]
**deposit_amount_in_min** | **int** | The deposit amount in minor unit in POS system. This is only applicable for STO order | [optional]
**offline_pos_discount_in_min** | **int** | The POS side discount amount in minor unit. This is only applicable for STO order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
