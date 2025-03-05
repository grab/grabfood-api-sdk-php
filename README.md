# grabfood

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

For more information, please visit [https://developer.grab.com](https://developer.grab.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/grab/grabfood-api-sdk-php.git"
    }
  ],
  "require": {
    "grab/grabfood-api-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/grabfood/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Grab\GrabfoodApiSdk\Api\AcceptRejectOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Bearer <ACCESS_TOKEN_HERE>; // string | Specify the generated authorization token of the bearer type.
$content_type = application/json; // string | The content type of the request body. You must use `application/json` for this header as GrabFood API currently does not support other formats.
$accept_order_request = new \Grab\GrabfoodApiSdk\Model\AcceptOrderRequest(); // \Grab\GrabfoodApiSdk\Model\AcceptOrderRequest | 

try {
    $apiInstance->acceptRejectOrder($authorization, $content_type, $accept_order_request);
} catch (Exception $e) {
    echo 'Exception when calling AcceptRejectOrderApi->acceptRejectOrder: ', $e->getMessage(), PHP_EOL;
}

```

## Environment Configuration

The SDK supports both staging and production environments. You can switch between environments by modifying the host settings parameter:

```php
use OpenAPI\Client\Configuration;
$config = Configuration::getDefaultConfiguration()

// Staging Environment (default)
$config->setHost($config->getHostFromSettings(Configuration::StgEnv));

// Production Environment
$config->setHost($config->getHostFromSettings(Configuration::PrdEnv));
```

## API Endpoints

All URIs are relative to *https://partner-api.grab.com/grabfood-sandbox*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AcceptRejectOrderApi* | [**acceptRejectOrder**](docs/Api/AcceptRejectOrderApi.md#acceptrejectorder) | **POST** /partner/v1/order/prepare | Manually accept/reject orders
*CancelOrderApi* | [**cancelOrder**](docs/Api/CancelOrderApi.md#cancelorder) | **PUT** /partner/v1/order/cancel | Cancel an order
*CheckOrderCancelableApi* | [**checkOrderCancelable**](docs/Api/CheckOrderCancelableApi.md#checkordercancelable) | **GET** /partner/v1/order/cancelable | Check order cancelable
*CreateCampaignApi* | [**createCampaign**](docs/Api/CreateCampaignApi.md#createcampaign) | **POST** /partner/v1/campaigns | Create campaign
*CreateSelfServeJourneyApi* | [**createSelfServeJourney**](docs/Api/CreateSelfServeJourneyApi.md#createselfservejourney) | **POST** /partner/v1/self-serve/activation | Create self serve journey
*DeleteCampaignApi* | [**deleteCampaign**](docs/Api/DeleteCampaignApi.md#deletecampaign) | **DELETE** /partner/v1/campaigns/{campaign_id} | Delete campaigns
*EditOrderApi* | [**editOrder**](docs/Api/EditOrderApi.md#editorder) | **PUT** /partner/v1/orders/{orderID} | Edit Order
*GetDineinVoucherApi* | [**getDineinVoucher**](docs/Api/GetDineinVoucherApi.md#getdineinvoucher) | **GET** /partner/v1/dinein/voucher | Get Dine In Voucher
*GetOauthGrabApi* | [**getOauthGrab**](docs/Api/GetOauthGrabApi.md#getoauthgrab) | **POST** /grabid/v1/oauth2/token | Get Oauth access token
*GetStoreHourApi* | [**getStoreHour**](docs/Api/GetStoreHourApi.md#getstorehour) | **GET** /partner/v2/merchants/{merchantID}/store/hours | Get Store Hours
*GetStoreStatusApi* | [**getStoreStatus**](docs/Api/GetStoreStatusApi.md#getstorestatus) | **GET** /partner/v1/merchants/{merchantID}/store/status | Get Store Status
*ListCampaignApi* | [**listCampaign**](docs/Api/ListCampaignApi.md#listcampaign) | **GET** /partner/v1/campaigns | List campaigns
*ListOrdersApi* | [**listOrders**](docs/Api/ListOrdersApi.md#listorders) | **GET** /partner/v1/orders | List orders
*MarkOrderReadyApi* | [**markOrderReady**](docs/Api/MarkOrderReadyApi.md#markorderready) | **POST** /partner/v1/orders/mark | Mark order as ready
*NotifyMembershipWebviewApi* | [**notifyMembershipWebview**](docs/Api/NotifyMembershipWebviewApi.md#notifymembershipwebview) | **POST** /partner/v1/membership/notify | Notify Membership
*PauseStoreApi* | [**pauseStore**](docs/Api/PauseStoreApi.md#pausestore) | **PUT** /partner/v1/merchant/pause | Pause store
*RedeemDineinVoucherApi* | [**redeemDineinVoucher**](docs/Api/RedeemDineinVoucherApi.md#redeemdineinvoucher) | **POST** /partner/v1/dinein/voucher/redeem | Redeem Dine In Voucher
*TraceMenuSyncApi* | [**traceMenuSync**](docs/Api/TraceMenuSyncApi.md#tracemenusync) | **GET** /partner/v1/merchant/menu/trace | Trace menu sync
*UpdateCampaignApi* | [**updateCampaign**](docs/Api/UpdateCampaignApi.md#updatecampaign) | **PUT** /partner/v1/campaigns/{campaign_id} | Update campaign
*UpdateDeliveryStateApi* | [**updateDeliveryState**](docs/Api/UpdateDeliveryStateApi.md#updatedeliverystate) | **POST** /partner/v1/order/delivery | Update delivery state
*UpdateMenuNotificationApi* | [**updateMenuNotification**](docs/Api/UpdateMenuNotificationApi.md#updatemenunotification) | **POST** /partner/v1/merchant/menu/notification | Notify Grab of updated menu
*UpdateMenuRecordApi* | [**batchUpdateMenu**](docs/Api/UpdateMenuRecordApi.md#batchupdatemenu) | **PUT** /partner/v1/batch/menu | Batch Update Menu
*UpdateMenuRecordApi* | [**updateMenu**](docs/Api/UpdateMenuRecordApi.md#updatemenu) | **PUT** /partner/v1/menu | Update menu record
*UpdateOrderReadyTimeApi* | [**updateOrderReadyTime**](docs/Api/UpdateOrderReadyTimeApi.md#updateorderreadytime) | **PUT** /partner/v1/order/readytime | Update new order ready time
*UpdateStoreDeliveryHourApi* | [**updateStoreDeliveryHour**](docs/Api/UpdateStoreDeliveryHourApi.md#updatestoredeliveryhour) | **PUT** /partner/v1/merchants/{merchantID}/store/opening-hours | Update Store Delivery Hours
*UpdateStoreDineInHourApi* | [**updateStoreDineInHour**](docs/Api/UpdateStoreDineInHourApi.md#updatestoredineinhour) | **PUT** /partner/v1/merchants/{merchantID}/store/dine-in-hours | Update Store Dine-in Hours
*UpdateStoreSpecialHourApi* | [**updateStoreSpecialHour**](docs/Api/UpdateStoreSpecialHourApi.md#updatestorespecialhour) | **PUT** /partner/v2/merchants/{merchantID}/store/special-opening-hour | Update Store Special Hours

## Models

- [AcceptOrderRequest](docs/Model/AcceptOrderRequest.md)
- [Address](docs/Model/Address.md)
- [AdvancedPricing](docs/Model/AdvancedPricing.md)
- [BatchUpdateMenuItem](docs/Model/BatchUpdateMenuItem.md)
- [BatchUpdateMenuResponse](docs/Model/BatchUpdateMenuResponse.md)
- [BindMembershipNativeRequest](docs/Model/BindMembershipNativeRequest.md)
- [BindMembershipNativeResponse](docs/Model/BindMembershipNativeResponse.md)
- [Campaign](docs/Model/Campaign.md)
- [CampaignConditions](docs/Model/CampaignConditions.md)
- [CampaignDiscount](docs/Model/CampaignDiscount.md)
- [CampaignQuotas](docs/Model/CampaignQuotas.md)
- [CampaignScope](docs/Model/CampaignScope.md)
- [CancelCode](docs/Model/CancelCode.md)
- [CancelOrderLimitType](docs/Model/CancelOrderLimitType.md)
- [CancelOrderRequest](docs/Model/CancelOrderRequest.md)
- [CancelOrderResponse](docs/Model/CancelOrderResponse.md)
- [CancelReason](docs/Model/CancelReason.md)
- [CheckOrderCancelableResponse](docs/Model/CheckOrderCancelableResponse.md)
- [Coordinates](docs/Model/Coordinates.md)
- [CreateCampaignRequest](docs/Model/CreateCampaignRequest.md)
- [CreateCampaignResponse](docs/Model/CreateCampaignResponse.md)
- [CreateSelfServeJourneyRequest](docs/Model/CreateSelfServeJourneyRequest.md)
- [CreateSelfServeJourneyRequestPartner](docs/Model/CreateSelfServeJourneyRequestPartner.md)
- [CreateSelfServeJourneyResponse](docs/Model/CreateSelfServeJourneyResponse.md)
- [Currency](docs/Model/Currency.md)
- [DineIn](docs/Model/DineIn.md)
- [EditOrderItem](docs/Model/EditOrderItem.md)
- [EditOrderRequest](docs/Model/EditOrderRequest.md)
- [Error](docs/Model/Error.md)
- [GetDineInVoucherResponse](docs/Model/GetDineInVoucherResponse.md)
- [GetMembershipNativeResponse](docs/Model/GetMembershipNativeResponse.md)
- [GetMembershipNativeResponsePointInfo](docs/Model/GetMembershipNativeResponsePointInfo.md)
- [GetMembershipRequest](docs/Model/GetMembershipRequest.md)
- [GetMembershipWebviewResponse](docs/Model/GetMembershipWebviewResponse.md)
- [GetMenuNewResponse](docs/Model/GetMenuNewResponse.md)
- [GetMenuOldResponse](docs/Model/GetMenuOldResponse.md)
- [GetRewardNativeRequest](docs/Model/GetRewardNativeRequest.md)
- [GetRewardNativeResponse](docs/Model/GetRewardNativeResponse.md)
- [GrabOauthRequest](docs/Model/GrabOauthRequest.md)
- [GrabOauthResponse](docs/Model/GrabOauthResponse.md)
- [ListCampaignResponse](docs/Model/ListCampaignResponse.md)
- [ListOrdersResponse](docs/Model/ListOrdersResponse.md)
- [MarkOrderRequest](docs/Model/MarkOrderRequest.md)
- [MenuCategory](docs/Model/MenuCategory.md)
- [MenuEntity](docs/Model/MenuEntity.md)
- [MenuEntityError](docs/Model/MenuEntityError.md)
- [MenuItem](docs/Model/MenuItem.md)
- [MenuModifier](docs/Model/MenuModifier.md)
- [MenuSection](docs/Model/MenuSection.md)
- [MenuSectionCategory](docs/Model/MenuSectionCategory.md)
- [MenuSectionCategoryItem](docs/Model/MenuSectionCategoryItem.md)
- [MenuSyncFail](docs/Model/MenuSyncFail.md)
- [MenuSyncFailCategory](docs/Model/MenuSyncFailCategory.md)
- [MenuSyncFailItem](docs/Model/MenuSyncFailItem.md)
- [MenuSyncFailModifier](docs/Model/MenuSyncFailModifier.md)
- [MenuSyncFailModifierGroup](docs/Model/MenuSyncFailModifierGroup.md)
- [MenuSyncFailServiceHours](docs/Model/MenuSyncFailServiceHours.md)
- [MenuSyncResponse](docs/Model/MenuSyncResponse.md)
- [MenuSyncWebhookRequest](docs/Model/MenuSyncWebhookRequest.md)
- [ModifierGroup](docs/Model/ModifierGroup.md)
- [NewOrderTimeRequest](docs/Model/NewOrderTimeRequest.md)
- [NotifyMembershipWebviewRequest](docs/Model/NotifyMembershipWebviewRequest.md)
- [OpenPeriod](docs/Model/OpenPeriod.md)
- [Order](docs/Model/Order.md)
- [OrderCampaign](docs/Model/OrderCampaign.md)
- [OrderDeliveryRequest](docs/Model/OrderDeliveryRequest.md)
- [OrderFeatureFlags](docs/Model/OrderFeatureFlags.md)
- [OrderFreeItem](docs/Model/OrderFreeItem.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemModifier](docs/Model/OrderItemModifier.md)
- [OrderPrice](docs/Model/OrderPrice.md)
- [OrderPromo](docs/Model/OrderPromo.md)
- [OrderReadyEstimation](docs/Model/OrderReadyEstimation.md)
- [OrderStateRequest](docs/Model/OrderStateRequest.md)
- [OutOfStockInstruction](docs/Model/OutOfStockInstruction.md)
- [PartnerOauthRequest](docs/Model/PartnerOauthRequest.md)
- [PartnerOauthResponse](docs/Model/PartnerOauthResponse.md)
- [PauseStoreRequest](docs/Model/PauseStoreRequest.md)
- [Purchasability](docs/Model/Purchasability.md)
- [PushIntegrationStatusWebhookRequest](docs/Model/PushIntegrationStatusWebhookRequest.md)
- [Receiver](docs/Model/Receiver.md)
- [RedeemDineInVoucherRequest](docs/Model/RedeemDineInVoucherRequest.md)
- [RedeemDineInVoucherResponse](docs/Model/RedeemDineInVoucherResponse.md)
- [RedeemResult](docs/Model/RedeemResult.md)
- [RegisterMembershipNativeRequest](docs/Model/RegisterMembershipNativeRequest.md)
- [RegisterMembershipNativeResponse](docs/Model/RegisterMembershipNativeResponse.md)
- [RewardItem](docs/Model/RewardItem.md)
- [SellingTime](docs/Model/SellingTime.md)
- [ServiceHour](docs/Model/ServiceHour.md)
- [ServiceHours](docs/Model/ServiceHours.md)
- [SpecialOpeningHour](docs/Model/SpecialOpeningHour.md)
- [SpecialOpeningHourMetadata](docs/Model/SpecialOpeningHourMetadata.md)
- [SpecialOpeningHourOpeningHours](docs/Model/SpecialOpeningHourOpeningHours.md)
- [StoreHour](docs/Model/StoreHour.md)
- [StoreHourResponse](docs/Model/StoreHourResponse.md)
- [StoreStatusResponse](docs/Model/StoreStatusResponse.md)
- [SubmitOrderRequest](docs/Model/SubmitOrderRequest.md)
- [UnbindMembershipNativeRequest](docs/Model/UnbindMembershipNativeRequest.md)
- [UnlinkMembershipWebviewRequest](docs/Model/UnlinkMembershipWebviewRequest.md)
- [UpdateAdvancedPricing](docs/Model/UpdateAdvancedPricing.md)
- [UpdateCampaignRequest](docs/Model/UpdateCampaignRequest.md)
- [UpdateDeliveryHourRequest](docs/Model/UpdateDeliveryHourRequest.md)
- [UpdateDeliveryHourResponse](docs/Model/UpdateDeliveryHourResponse.md)
- [UpdateDineInHourRequest](docs/Model/UpdateDineInHourRequest.md)
- [UpdateDineInHourResponse](docs/Model/UpdateDineInHourResponse.md)
- [UpdateMenuItem](docs/Model/UpdateMenuItem.md)
- [UpdateMenuModifier](docs/Model/UpdateMenuModifier.md)
- [UpdateMenuNotifRequest](docs/Model/UpdateMenuNotifRequest.md)
- [UpdateMenuRequest](docs/Model/UpdateMenuRequest.md)
- [UpdatePurchasability](docs/Model/UpdatePurchasability.md)
- [UpdateSpecialHourRequest](docs/Model/UpdateSpecialHourRequest.md)
- [UpdateSpecialHourResponse](docs/Model/UpdateSpecialHourResponse.md)
- [Voucher](docs/Model/Voucher.md)
- [VoucherDescriptionInfo](docs/Model/VoucherDescriptionInfo.md)
- [WorkingHour](docs/Model/WorkingHour.md)
- [WorkingHourDay](docs/Model/WorkingHourDay.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1.3`
    - Package version: `1.0.2`
    - Generator version: `7.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`