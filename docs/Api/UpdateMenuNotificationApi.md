# Grab\GrabfoodApiSdk\UpdateMenuNotificationApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateMenuNotification()**](UpdateMenuNotificationApi.md#updateMenuNotification) | **POST** /partner/v1/merchant/menu/notification | Notify Grab of updated menu |


## `updateMenuNotification()`

```php
updateMenuNotification($content_type, $authorization, $update_menu_notif_request)
```

Notify Grab of updated menu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\UpdateMenuNotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$update_menu_notif_request = new \Grab\GrabfoodApiSdk\Model\UpdateMenuNotifRequest(); // \Grab\GrabfoodApiSdk\Model\UpdateMenuNotifRequest | 

try {
    $apiInstance->updateMenuNotification($content_type, $authorization, $update_menu_notif_request);
} catch (Exception $e) {
    echo 'Exception when calling UpdateMenuNotificationApi->updateMenuNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **update_menu_notif_request** | [**\Grab\GrabfoodApiSdk\Model\UpdateMenuNotifRequest**](../Model/UpdateMenuNotifRequest.md)|  | |

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
