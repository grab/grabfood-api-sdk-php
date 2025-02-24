# # RedeemDineInVoucherResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**certificate_id** | **string** | This certificateID is decoded from scanning the QR code, and 1:1 mapping with &#x60;voucherCode&#x60;. | [optional]
**voucher_code** | **string** | A short code for the dine-in voucher purchased by the user. | [optional]
**voucher** | [**\Grab\GrabfoodApiSdk\Model\Voucher**](Voucher.md) |  | [optional]
**redeem_result** | [**\Grab\GrabfoodApiSdk\Model\RedeemResult**](RedeemResult.md) |  | [optional]
**merchant_id** | **string** | The merchant&#39;s ID that is in GrabFood&#39;s database. | [optional]
**campaign_id** | **string** | The dine-in voucher campaign&#39;s ID in GrabFood&#39;s database. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
