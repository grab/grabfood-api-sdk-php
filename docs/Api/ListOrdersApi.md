# Grab\GrabfoodApiSdk\ListOrdersApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listOrders()**](ListOrdersApi.md#listOrders) | **GET** /partner/v1/orders | List orders |


## `listOrders()`

```php
listOrders($authorization, $merchant_id, $date, $page): \Grab\GrabfoodApiSdk\Model\ListOrdersResponse
```

List orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\ListOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$merchant_id = 1-CYNGRUNGSBCCC; // string | The merchant's ID that is in GrabFood's database.
$date = 'date_example'; // string
$page = 1; // int | Specify the page number for the report.

try {
    $result = $apiInstance->listOrders($authorization, $merchant_id, $date, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListOrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **merchant_id** | **string**| The merchant&#39;s ID that is in GrabFood&#39;s database. | |
| **date** | **string**|  | |
| **page** | **int**| Specify the page number for the report. | |

### Return type

[**\Grab\GrabfoodApiSdk\Model\ListOrdersResponse**](../Model/ListOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
