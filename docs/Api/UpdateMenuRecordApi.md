# Grab\GrabfoodApiSdk\UpdateMenuRecordApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchUpdateMenu()**](UpdateMenuRecordApi.md#batchUpdateMenu) | **PUT** /partner/v1/batch/menu | Batch Update Menu |
| [**updateMenu()**](UpdateMenuRecordApi.md#updateMenu) | **PUT** /partner/v1/menu | Update menu record |


## `batchUpdateMenu()`

```php
batchUpdateMenu($content_type, $authorization, $batch_update_menu_item): \Grab\GrabfoodApiSdk\Model\BatchUpdateMenuResponse
```

Batch Update Menu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\UpdateMenuRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$batch_update_menu_item = new \Grab\GrabfoodApiSdk\Model\BatchUpdateMenuItem(); // \Grab\GrabfoodApiSdk\Model\BatchUpdateMenuItem | 

try {
    $result = $apiInstance->batchUpdateMenu($content_type, $authorization, $batch_update_menu_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateMenuRecordApi->batchUpdateMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **batch_update_menu_item** | [**\Grab\GrabfoodApiSdk\Model\BatchUpdateMenuItem**](../Model/BatchUpdateMenuItem.md)|  | |

### Return type

[**\Grab\GrabfoodApiSdk\Model\BatchUpdateMenuResponse**](../Model/BatchUpdateMenuResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMenu()`

```php
updateMenu($content_type, $authorization, $update_menu_request)
```

Update menu record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\UpdateMenuRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$update_menu_request = new \Grab\GrabfoodApiSdk\Model\UpdateMenuRequest(); // \Grab\GrabfoodApiSdk\Model\UpdateMenuRequest | 

try {
    $apiInstance->updateMenu($content_type, $authorization, $update_menu_request);
} catch (Exception $e) {
    echo 'Exception when calling UpdateMenuRecordApi->updateMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **update_menu_request** | [**\Grab\GrabfoodApiSdk\Model\UpdateMenuRequest**](../Model/UpdateMenuRequest.md)|  | |

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
