# Grab\GrabfoodApiSdk\UpdateDeliveryStateApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateDeliveryState()**](UpdateDeliveryStateApi.md#updateDeliveryState) | **POST** /partner/v1/order/delivery | Update delivery state |


## `updateDeliveryState()`

```php
updateDeliveryState($content_type, $authorization, $order_delivery_request)
```

Update delivery state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\UpdateDeliveryStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$order_delivery_request = new \Grab\GrabfoodApiSdk\Model\OrderDeliveryRequest(); // \Grab\GrabfoodApiSdk\Model\OrderDeliveryRequest

try {
    $apiInstance->updateDeliveryState($content_type, $authorization, $order_delivery_request);
} catch (Exception $e) {
    echo 'Exception when calling UpdateDeliveryStateApi->updateDeliveryState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **order_delivery_request** | [**\Grab\GrabfoodApiSdk\Model\OrderDeliveryRequest**](../Model/OrderDeliveryRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
