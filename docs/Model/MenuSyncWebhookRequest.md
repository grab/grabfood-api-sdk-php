# # MenuSyncWebhookRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** | An universally unique identifier (UUID) string. Used to uniquely identify a webhook request. Partners should use this value to distinguish between different webhook requests. If two requests contain the same requestID, only the first request should be considered and later requests **must** be ignored or discarded. | [optional]
**merchant_id** | **string** | The merchant&#39;s ID that is in GrabFood&#39;s database. | [optional]
**partner_merchant_id** | **string** | The merchant&#39;s ID that is on the partner&#39;s database. | [optional]
**job_id** | **string** | An UUID string. Uniquely identifies a menu sync job. This can be found from the [Menu Update Notification](#tag/update-menu-noti) API response header. | [optional]
**updated_at** | **string** | Indicates the time of menu sync status change. This is based on ISO_8601/RFC3339. For example: &#x60;2022-07-29T15:55:59Z&#x60;. | [optional]
**status** | **string** | Indicates the state of the menu sync job. | [optional]
**errors** | **string[]** | A string array of errors that occurred during processing. This array is empty if the status is not &#x60;FAILED&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
