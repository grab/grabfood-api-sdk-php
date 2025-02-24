# Grab\GrabfoodApiSdk\GetOauthGrabApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOauthGrab()**](GetOauthGrabApi.md#getOauthGrab) | **POST** /grabid/v1/oauth2/token | Get Oauth access token |


## `getOauthGrab()`

```php
getOauthGrab($content_type, $grab_oauth_request): \Grab\GrabfoodApiSdk\Model\GrabOauthResponse
```
### URI(s):
- https://api.grab.com Staging Environment- https://api.grab.com Production Environment
Get Oauth access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\GetOauthGrabApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$grab_oauth_request = new \Grab\GrabfoodApiSdk\Model\GrabOauthRequest(); // \Grab\GrabfoodApiSdk\Model\GrabOauthRequest | 

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getOauthGrab($content_type, $grab_oauth_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetOauthGrabApi->getOauthGrab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **grab_oauth_request** | [**\Grab\GrabfoodApiSdk\Model\GrabOauthRequest**](../Model/GrabOauthRequest.md)|  | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |


### Return type

[**\Grab\GrabfoodApiSdk\Model\GrabOauthResponse**](../Model/GrabOauthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
