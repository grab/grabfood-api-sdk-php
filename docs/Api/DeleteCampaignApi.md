# Grab\GrabfoodApiSdk\DeleteCampaignApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCampaign()**](DeleteCampaignApi.md#deleteCampaign) | **DELETE** /partner/v1/campaigns/{campaign_id} | Delete campaigns |


## `deleteCampaign()`

```php
deleteCampaign($authorization, $campaign_id)
```

Delete campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\DeleteCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$campaign_id = 'campaign_id_example'; // string

try {
    $apiInstance->deleteCampaign($authorization, $campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling DeleteCampaignApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **campaign_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
