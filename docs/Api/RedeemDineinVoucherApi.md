# Grab\GrabfoodApiSdk\RedeemDineinVoucherApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**redeemDineinVoucher()**](RedeemDineinVoucherApi.md#redeemDineinVoucher) | **POST** /partner/v1/dinein/voucher/redeem | Redeem Dine In Voucher |


## `redeemDineinVoucher()`

```php
redeemDineinVoucher($authorization, $content_type, $redeem_dine_in_voucher_request): \Grab\GrabfoodApiSdk\Model\RedeemDineInVoucherResponse
```

Redeem Dine In Voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\RedeemDineinVoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$redeem_dine_in_voucher_request = new \Grab\GrabfoodApiSdk\Model\RedeemDineInVoucherRequest(); // \Grab\GrabfoodApiSdk\Model\RedeemDineInVoucherRequest

try {
    $result = $apiInstance->redeemDineinVoucher($authorization, $content_type, $redeem_dine_in_voucher_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedeemDineinVoucherApi->redeemDineinVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **redeem_dine_in_voucher_request** | [**\Grab\GrabfoodApiSdk\Model\RedeemDineInVoucherRequest**](../Model/RedeemDineInVoucherRequest.md)|  | |

### Return type

[**\Grab\GrabfoodApiSdk\Model\RedeemDineInVoucherResponse**](../Model/RedeemDineInVoucherResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
