# # RedeemResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** | To indicate whether the dine-in voucher redemption succeeded. | [optional]
**code** | **string** | The code for the reason of failed redemption. Empty if the &#x60;success&#x60; is true.  * &#x60;VOUCHER_REDEEMED&#x60; - The voucher has already been redeemed. * &#x60;INVALID_STATE&#x60; - The current status of voucher is EXPIRED or REFUNDED. * &#x60;REDEEM_FAILED&#x60; - Internal service error. * &#x60;INVALID_MERCHANT&#x60; - Voucher not applicable for this merchant. * &#x60;INVALID_ID&#x60; - Invalid certificateID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
