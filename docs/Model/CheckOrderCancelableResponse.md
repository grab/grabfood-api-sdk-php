# # CheckOrderCancelableResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancel_able** | **bool** | The boolean value to indicate whether an order can be cancelled. | [optional]
**non_cancellation_reason** | **string** | The reason for the order to be non-cancelable. | [optional]
**limit_type** | [**\Grab\GrabfoodApiSdk\Model\CancelOrderLimitType**](CancelOrderLimitType.md) |  | [optional]
**limit_times** | **int** | The remaining cancellation quota for the merchant. A value is only returned when the nearest remaining cancellation limit is approaching, else it returns 0. | [optional]
**cancel_reasons** | [**\Grab\GrabfoodApiSdk\Model\CancelReason[]**](CancelReason.md) | An array of cancel order reasons JSON objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
