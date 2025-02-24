# # SubmitOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The order&#39;s ID that is returned from GrabFood. Refer to FAQs for more details about [orderID and shortOrderNumber](#section/Order/What&#39;s-the-difference-between-orderID-and-shortOrderNumber). |
**short_order_number** | **string** | The GrabFood short order number. This is unique for each merchant per day. Refer to FAQs for more details about [orderID and shortOrderNumber](#section/Order/What&#39;s-the-difference-between-orderID-and-shortOrderNumber). |
**merchant_id** | **string** | The merchant&#39;s ID that is in GrabFood&#39;s database. |
**partner_merchant_id** | **string** | The merchant&#39;s ID that is on the partner&#39;s database. | [optional]
**payment_type** | **string** | The payment method used. Refer to FAQs for more details about [paymentType](#section/Order/Does-the-paymentType-affect-partners). |
**cutlery** | **bool** | The boolean value to indicate whether cutlery are needed or not. Refer to FAQs for more details about [cutlery](#section/Order/What-do-the-true-or-false-values-mean-for-cutlery). |
**order_time** | **string** | The UTC time that a consumer places the order, based on ISO_8601/RFC3339. |
**submit_time** | **\DateTime** | The order submit time, based on ISO_8601/RFC3339. &#x60;null&#x60; in Submit Order payload. Only present in the [List Orders](#tag/list-order) response. | [optional]
**complete_time** | **\DateTime** | The order complete time, based on ISO_8601/RFC3339. &#x60;null&#x60; in Submit Order payload. Only present in the [List Orders](#tag/list-order) response. | [optional]
**scheduled_time** | **string** | The order scheduled time, based on ISO_8601/RFC3339. Empty for non-scheduled orders. | [optional]
**order_state** | **string** | The state of the order. Empty in Submit Order payload. Only present in the [List Orders](#tag/list-order) response. Refer to [Order States](#section/Order-states). | [optional]
**currency** | [**\Grab\GrabfoodApiSdk\Model\Currency**](Currency.md) |  |
**feature_flags** | [**\Grab\GrabfoodApiSdk\Model\OrderFeatureFlags**](OrderFeatureFlags.md) |  |
**items** | [**\Grab\GrabfoodApiSdk\Model\OrderItem[]**](OrderItem.md) | The ordered items in an array of JSON Object. |
**campaigns** | [**\Grab\GrabfoodApiSdk\Model\OrderCampaign[]**](OrderCampaign.md) | The campaigns that are applicable for the order. &#x60;null&#x60; when there is no campaign applied. Only campaigns that are funded by merchants will be sent. | [optional]
**promos** | [**\Grab\GrabfoodApiSdk\Model\OrderPromo[]**](OrderPromo.md) | An array of promotion objects. &#x60;null&#x60; when there is no promo code applied. Only promotions that are funded by merchants will be sent. | [optional]
**price** | [**\Grab\GrabfoodApiSdk\Model\OrderPrice**](OrderPrice.md) |  |
**dine_in** | [**\Grab\GrabfoodApiSdk\Model\DineIn**](DineIn.md) |  | [optional]
**receiver** | [**\Grab\GrabfoodApiSdk\Model\Receiver**](Receiver.md) |  | [optional]
**order_ready_estimation** | [**\Grab\GrabfoodApiSdk\Model\OrderReadyEstimation**](OrderReadyEstimation.md) |  | [optional]
**membership_id** | **string** | Membership ID for loyalty project. Only present for loyalty program partners. Empty if not applicable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
