# Grab\GrabfoodApiSdk\ListCampaignApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listCampaign()**](ListCampaignApi.md#listCampaign) | **GET** /partner/v1/campaigns | List campaigns |


## `listCampaign()`

```php
listCampaign($authorization, $merchant_id): \Grab\GrabfoodApiSdk\Model\ListCampaignResponse
```

List campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\ListCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$merchant_id = 1-CYNGRUNGSBCCC; // string | The merchant's ID that is in GrabFood's database.

try {
    $result = $apiInstance->listCampaign($authorization, $merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListCampaignApi->listCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **merchant_id** | **string**| The merchant&#39;s ID that is in GrabFood&#39;s database. | |

### Return type

[**\Grab\GrabfoodApiSdk\Model\ListCampaignResponse**](../Model/ListCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
