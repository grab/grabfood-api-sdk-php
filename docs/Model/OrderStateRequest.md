# # OrderStateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | The merchant&#39;s ID that is in GrabFood&#39;s database. |
**partner_merchant_id** | **string** | The merchant&#39;s ID that is on the partner&#39;s database. | [optional]
**order_id** | **string** | The order&#39;s ID that is returned from GrabFood. Refer to FAQs for more details about [orderID and shortOrderNumber](#section/Order/What&#39;s-the-difference-between-orderID-and-shortOrderNumber). |
**state** | **string** | The current order state. For takeaway orders, only &#x60;DELIVERED&#x60; and &#x60;CANCELLED&#x60; states are pushed. |
**driver_eta** | **int** | The driver&#39;s estimated of arrival (ETA) in seconds when the state is &#x60;DRIVER_ALLOCATED&#x60;. | [optional]
**code** | **string** | The current order&#39;s sub-state. This is in free text so you should only use for reference. Grab may use this for troubleshooting. If you want some analysis, kindly use &#x60;state&#x60; instead. | [optional]
**message** | **string** | Additional information to explain the current order state. May be system status or human entered message. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
