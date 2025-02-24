# Grab\GrabfoodApiSdk\MarkOrderReadyApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**markOrderReady()**](MarkOrderReadyApi.md#markOrderReady) | **POST** /partner/v1/orders/mark | Mark order as ready |


## `markOrderReady()`

```php
markOrderReady($content_type, $authorization, $mark_order_request)
```

Mark order as ready

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\MarkOrderReadyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$mark_order_request = new \Grab\GrabfoodApiSdk\Model\MarkOrderRequest(); // \Grab\GrabfoodApiSdk\Model\MarkOrderRequest

try {
    $apiInstance->markOrderReady($content_type, $authorization, $mark_order_request);
} catch (Exception $e) {
    echo 'Exception when calling MarkOrderReadyApi->markOrderReady: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **mark_order_request** | [**\Grab\GrabfoodApiSdk\Model\MarkOrderRequest**](../Model/MarkOrderRequest.md)|  | |

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
