# # PosOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The long orderID in grab system. | [optional]
**partner_order_id** | **string** | The orderID in pos system. | [optional]
**merchant_id** | **string** | The merchant&#39;s ID is the one in GrabFood&#39;s database. | [optional]
**partner_merchant_id** | **string** | The merchant ID in pos system. | [optional]
**order_time** | **\DateTime** | The UTC time that a consumer places the order, based on ISO_8601/RFC3339. | [optional]
**order_state** | **string** | The order state in POS system, eg, COMPLETED. | [optional]
**currency** | [**\Grab\GrabfoodApiSdk\Model\Currency**](Currency.md) |  | [optional]
**items** | [**\Grab\GrabfoodApiSdk\Model\POSItem[]**](POSItem.md) | The ordered items in an array of JSON Object. | [optional]
**price** | [**\Grab\GrabfoodApiSdk\Model\PosPriceDetails**](PosPriceDetails.md) |  | [optional]
**dine_in** | [**\Grab\GrabfoodApiSdk\Model\DineIn**](DineIn.md) |  | [optional]
**payments** | [**\Grab\GrabfoodApiSdk\Model\Payment[]**](Payment.md) | An array of payment objects. &#x60;null&#x60; when there is no payment info from pos. This is only applicable for STO order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
