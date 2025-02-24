# Grab\GrabfoodApiSdk\NotifyMembershipWebviewApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**notifyMembershipWebview()**](NotifyMembershipWebviewApi.md#notifyMembershipWebview) | **POST** /partner/v1/membership/notify | Notify Membership |


## `notifyMembershipWebview()`

```php
notifyMembershipWebview($authorization, $content_type, $notify_membership_webview_request)
```

Notify Membership

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\NotifyMembershipWebviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$notify_membership_webview_request = new \Grab\GrabfoodApiSdk\Model\NotifyMembershipWebviewRequest(); // \Grab\GrabfoodApiSdk\Model\NotifyMembershipWebviewRequest

try {
    $apiInstance->notifyMembershipWebview($authorization, $content_type, $notify_membership_webview_request);
} catch (Exception $e) {
    echo 'Exception when calling NotifyMembershipWebviewApi->notifyMembershipWebview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **notify_membership_webview_request** | [**\Grab\GrabfoodApiSdk\Model\NotifyMembershipWebviewRequest**](../Model/NotifyMembershipWebviewRequest.md)|  | |

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
