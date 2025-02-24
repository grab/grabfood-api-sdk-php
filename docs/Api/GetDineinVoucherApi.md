# Grab\GrabfoodApiSdk\GetDineinVoucherApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDineinVoucher()**](GetDineinVoucherApi.md#getDineinVoucher) | **GET** /partner/v1/dinein/voucher | Get Dine In Voucher |


## `getDineinVoucher()`

```php
getDineinVoucher($authorization, $merchant_id, $voucher_code, $certificate_id): \Grab\GrabfoodApiSdk\Model\GetDineInVoucherResponse
```

Get Dine In Voucher

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\GetDineinVoucherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$merchant_id = 'merchant_id_example'; // string
$voucher_code = 'voucher_code_example'; // string | A short code for the dine-in voucher purchased by the user. Required if `certificateID` is not specified.
$certificate_id = 'certificate_id_example'; // string | This certificateID is decoded from scanning the QR code, and 1:1 mapping with voucherCode. Required if `voucherCode` is not specified.

try {
    $result = $apiInstance->getDineinVoucher($authorization, $merchant_id, $voucher_code, $certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetDineinVoucherApi->getDineinVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **merchant_id** | **string**|  | |
| **voucher_code** | **string**| A short code for the dine-in voucher purchased by the user. Required if &#x60;certificateID&#x60; is not specified. | [optional] |
| **certificate_id** | **string**| This certificateID is decoded from scanning the QR code, and 1:1 mapping with voucherCode. Required if &#x60;voucherCode&#x60; is not specified. | [optional] |

### Return type

[**\Grab\GrabfoodApiSdk\Model\GetDineInVoucherResponse**](../Model/GetDineInVoucherResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
