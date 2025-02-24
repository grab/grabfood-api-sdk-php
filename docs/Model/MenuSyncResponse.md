# # MenuSyncResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_time** | **\DateTime** | The Unix time the specified menu was created in GrabFood&#39;s database. |
**updated_time** | **\DateTime** | The Unix time the specified menu was created in GrabFood&#39;s database. |
**code** | **string** | The status code for this request. See [Menu sync response statuses](#section/Menu-sync-response-statuses) for more information. |
**errors** | **string[]** | An array of strings of error message. | [optional]
**sections** | [**\Grab\GrabfoodApiSdk\Model\MenuSyncFail[]**](MenuSyncFail.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
