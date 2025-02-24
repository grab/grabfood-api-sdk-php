# Grab\GrabfoodApiSdk\EditOrderApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**editOrder()**](EditOrderApi.md#editOrder) | **PUT** /partner/v1/orders/{orderID} | Edit Order |


## `editOrder()`

```php
editOrder($content_type, $authorization, $order_id, $edit_order_request)
```

Edit Order

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
    $apiInstance->editOrder($content_type, $authorization, $order_id, $edit_order_request);
} catch (Exception $e) {
    echo 'Exception when calling EditOrderApi->editOrder: ', $e->getMessage(), PHP_EOL;
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
