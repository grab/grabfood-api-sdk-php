# Grab\GrabfoodApiSdk\CreateCampaignApi

All URIs are relative to https://partner-api.grab.com/grabfood-sandbox, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCampaign()**](CreateCampaignApi.md#createCampaign) | **POST** /partner/v1/campaigns | Create campaign |


## `createCampaign()`

```php
createCampaign($content_type, $authorization, $create_campaign_request): \Grab\GrabfoodApiSdk\Model\CreateCampaignResponse
```

Create campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Grab\GrabfoodApiSdk\Api\CreateCampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$create_campaign_request = new \Grab\GrabfoodApiSdk\Model\CreateCampaignRequest(); // \Grab\GrabfoodApiSdk\Model\CreateCampaignRequest

try {
    $result = $apiInstance->createCampaign($content_type, $authorization, $create_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateCampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**| The content type of the request body. You must use &#x60;application/json&#x60; for this header as GrabFood API currently does not support other formats. | |
| **authorization** | **string**| Specify the generated authorization token of the bearer type. | |
| **create_campaign_request** | [**\Grab\GrabfoodApiSdk\Model\CreateCampaignRequest**](../Model/CreateCampaignRequest.md)|  | |

### Return type

[**\Grab\GrabfoodApiSdk\Model\CreateCampaignResponse**](../Model/CreateCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
