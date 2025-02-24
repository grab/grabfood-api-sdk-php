# # OrderReadyEstimation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_change** | **bool** | A boolean value indicating if the order ready time can be changed. |
**estimated_order_ready_time** | **\DateTime** | The order ready time for this order estimated by GrabFood, based on ISO_8601/RFC3339. |
**max_order_ready_time** | **\DateTime** | The max allowed order ready time for this order, based on ISO_8601/RFC3339. |
**new_order_ready_time** | **\DateTime** | The new order ready time for this order. Only present after a new order ready time is set (default will be null), based on ISO_8601/RFC3339. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
