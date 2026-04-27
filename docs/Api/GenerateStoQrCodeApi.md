# Grab\GrabfoodApiSdk\GenerateStoQrCodeApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateStoQrCode()**](GenerateStoQrCodeApi.md#generateStoQrCode) | **GET** /partner/v1/dinein/sto/qrcode | Generate STO QR code |


## `generateStoQrCode()`

```php
generateStoQrCode($authorization, $content_type, $merchant_id, $qr_type, $table_number): \Grab\GrabfoodApiSdk\Model\GenerateSTOQRCodeResponse
```

Generate STO QR code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\GenerateStoQrCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$merchant_id = 'merchant_id_example'; // string
$qr_type = 'qr_type_example'; // string
$table_number = 'table_number_example'; // string

try {
    $result = $apiInstance->generateStoQrCode($authorization, $content_type, $merchant_id, $qr_type, $table_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerateStoQrCodeApi->generateStoQrCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **merchant_id** | **string**|  | |
| **qr_type** | **string**|  | |
| **table_number** | **string**|  | |

### Return type

[**\Grab\GrabfoodApiSdk\Model\GenerateSTOQRCodeResponse**](../Model/GenerateSTOQRCodeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
