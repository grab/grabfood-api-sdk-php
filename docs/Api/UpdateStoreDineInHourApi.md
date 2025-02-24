# Grab\GrabfoodApiSdk\UpdateStoreDineInHourApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateStoreDineInHour()**](UpdateStoreDineInHourApi.md#updateStoreDineInHour) | **PUT** /partner/v1/merchants/{merchantID}/store/dine-in-hours | Update Store Dine-in Hours |


## `updateStoreDineInHour()`

```php
updateStoreDineInHour($content_type, $authorization, $merchant_id, $update_dine_in_hour_request): \Grab\GrabfoodApiSdk\Model\UpdateDineInHourResponse
```

Update Store Dine-in Hours

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\UpdateStoreDineInHourApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$merchant_id = 1-CYNGRUNGSBCCC; // string | The merchant's ID that is in GrabFood's database.
$update_dine_in_hour_request = new \Grab\GrabfoodApiSdk\Model\UpdateDineInHourRequest(); // \Grab\GrabfoodApiSdk\Model\UpdateDineInHourRequest

try {
    $result = $apiInstance->updateStoreDineInHour($content_type, $authorization, $merchant_id, $update_dine_in_hour_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateStoreDineInHourApi->updateStoreDineInHour: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **merchant_id** | **string**| The merchant&#39;s ID that is in GrabFood&#39;s database. | |
| **update_dine_in_hour_request** | [**\Grab\GrabfoodApiSdk\Model\UpdateDineInHourRequest**](../Model/UpdateDineInHourRequest.md)|  | |

### Return type

[**\Grab\GrabfoodApiSdk\Model\UpdateDineInHourResponse**](../Model/UpdateDineInHourResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
