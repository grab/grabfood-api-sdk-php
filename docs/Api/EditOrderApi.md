# Grab\GrabfoodApiSdk\EditOrderApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**editOrderV1()**](EditOrderApi.md#editOrderV1) | **PUT** /partner/v1/orders/{orderID} | Edit Order V1 |
| [**editOrderV2()**](EditOrderApi.md#editOrderV2) | **PUT** /partner/v2/orders/{orderID} | Edit Order V2 |


## `editOrderV1()`

```php
editOrderV1($content_type, $authorization, $order_id, $edit_order_request)
```

Edit Order V1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\EditOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$order_id = 'order_id_example'; // string
$edit_order_request = new \Grab\GrabfoodApiSdk\Model\EditOrderRequest(); // \Grab\GrabfoodApiSdk\Model\EditOrderRequest

try {
    $apiInstance->editOrderV1($content_type, $authorization, $order_id, $edit_order_request);
} catch (Exception $e) {
    echo 'Exception when calling EditOrderApi->editOrderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **order_id** | **string**|  | |
| **edit_order_request** | [**\Grab\GrabfoodApiSdk\Model\EditOrderRequest**](../Model/EditOrderRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editOrderV2()`

```php
editOrderV2($content_type, $authorization, $order_id, $edit_order_request): \Grab\GrabfoodApiSdk\Model\EditOrderV2Response
```

Edit Order V2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\EditOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$order_id = 'order_id_example'; // string
$edit_order_request = new \Grab\GrabfoodApiSdk\Model\EditOrderRequest(); // \Grab\GrabfoodApiSdk\Model\EditOrderRequest

try {
    $result = $apiInstance->editOrderV2($content_type, $authorization, $order_id, $edit_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditOrderApi->editOrderV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **order_id** | **string**|  | |
| **edit_order_request** | [**\Grab\GrabfoodApiSdk\Model\EditOrderRequest**](../Model/EditOrderRequest.md)|  | |

### Return type

[**\Grab\GrabfoodApiSdk\Model\EditOrderV2Response**](../Model/EditOrderV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
