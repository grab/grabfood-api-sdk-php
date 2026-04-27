# # VirtualContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | The generated virtual phone number that will forward calls to the customer&#39;s actual phone number. Will be omitted if the &#x60;status&#x60; is not &#x60;ACTIVE&#x60;. | [optional]
**pin** | **string** | A unique PIN required when forwarding calls to the customer for verification and security. Will be omitted if the &#x60;status&#x60; is not &#x60;ACTIVE&#x60;. | [optional]
**expired_at** | **string** | The expiry time of the virtual contact in UTC based on ISO_8601/RFC3339. Will be omitted if the &#x60;status&#x60; is not &#x60;ACTIVE&#x60;. | [optional]
**status** | **string** | Indicates the current status and validity of the virtual contact. * &#x60;ACTIVE&#x60; - The virtual contact is valid. * &#x60;EXPIRED&#x60; - The virtual contact has expired and is no longer valid. * &#x60;UNAVAILABLE&#x60; - An internal error occurred while generating or retrieving the virtual contact. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
