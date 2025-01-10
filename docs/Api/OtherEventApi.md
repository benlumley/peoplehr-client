# OpenAPI\Client\OtherEventApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**otherEventAddotherevententitlementPost()**](OtherEventApi.md#otherEventAddotherevententitlementPost) | **POST** /Other Event  -  addotherevententitlement | Insert Update Other Event Entitlement |
| [**otherEventAddothereventleavePost()**](OtherEventApi.md#otherEventAddothereventleavePost) | **POST** /Other Event  -  addothereventleave | Add Other Event |
| [**otherEventDeleteOtherEventPost()**](OtherEventApi.md#otherEventDeleteOtherEventPost) | **POST** /Other Event  -  DeleteOtherEvent | Delete Other Event |
| [**otherEventGetothereventdetailPost()**](OtherEventApi.md#otherEventGetothereventdetailPost) | **POST** /Other Event  -  getothereventdetail | Get Other Event Detail |
| [**otherEventGetotherevententitlementPost()**](OtherEventApi.md#otherEventGetotherevententitlementPost) | **POST** /Other Event  -  getotherevententitlement | Get Other Event Entitlement |
| [**otherEventUpdateothereventleavePost()**](OtherEventApi.md#otherEventUpdateothereventleavePost) | **POST** /Other Event  -  updateothereventleave | Update Other Event |


## `otherEventAddotherevententitlementPost()`

```php
otherEventAddotherevententitlementPost($body): \OpenAPI\Client\Model\ErrorForaddotherevententitlement
```

Insert Update Other Event Entitlement

This API is used to Insert Update Other Event Entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddotherevententitlementParameter(); // \OpenAPI\Client\Model\AddotherevententitlementParameter

try {
    $result = $apiInstance->otherEventAddotherevententitlementPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherEventApi->otherEventAddotherevententitlementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AddotherevententitlementParameter**](../Model/AddotherevententitlementParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForaddotherevententitlement**](../Model/ErrorForaddotherevententitlement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otherEventAddothereventleavePost()`

```php
otherEventAddothereventleavePost($body): \OpenAPI\Client\Model\ErrorForaddothereventleave
```

Add Other Event

This API is used to Add Other Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddothereventleaveParameter(); // \OpenAPI\Client\Model\AddothereventleaveParameter

try {
    $result = $apiInstance->otherEventAddothereventleavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherEventApi->otherEventAddothereventleavePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AddothereventleaveParameter**](../Model/AddothereventleaveParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForaddothereventleave**](../Model/ErrorForaddothereventleave.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otherEventDeleteOtherEventPost()`

```php
otherEventDeleteOtherEventPost($body): \OpenAPI\Client\Model\ErrorForDeleteOtherEvent
```

Delete Other Event

This API is used to Delete Other Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteOtherEventParameter(); // \OpenAPI\Client\Model\DeleteOtherEventParameter

try {
    $result = $apiInstance->otherEventDeleteOtherEventPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherEventApi->otherEventDeleteOtherEventPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DeleteOtherEventParameter**](../Model/DeleteOtherEventParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteOtherEvent**](../Model/ErrorForDeleteOtherEvent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otherEventGetothereventdetailPost()`

```php
otherEventGetothereventdetailPost($body): \OpenAPI\Client\Model\ErrorForgetothereventdetail
```

Get Other Event Detail

This API is used to get other event detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetothereventdetailParameter(); // \OpenAPI\Client\Model\GetothereventdetailParameter

try {
    $result = $apiInstance->otherEventGetothereventdetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherEventApi->otherEventGetothereventdetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetothereventdetailParameter**](../Model/GetothereventdetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForgetothereventdetail**](../Model/ErrorForgetothereventdetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otherEventGetotherevententitlementPost()`

```php
otherEventGetotherevententitlementPost($body): \OpenAPI\Client\Model\ErrorForgetotherevententitlement
```

Get Other Event Entitlement

This API is used to get other event entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetotherevententitlementParameter(); // \OpenAPI\Client\Model\GetotherevententitlementParameter

try {
    $result = $apiInstance->otherEventGetotherevententitlementPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherEventApi->otherEventGetotherevententitlementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetotherevententitlementParameter**](../Model/GetotherevententitlementParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForgetotherevententitlement**](../Model/ErrorForgetotherevententitlement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `otherEventUpdateothereventleavePost()`

```php
otherEventUpdateothereventleavePost($body): \OpenAPI\Client\Model\ErrorForupdateothereventleave
```

Update Other Event

This API is used to Update Other Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateothereventleaveParameter(); // \OpenAPI\Client\Model\UpdateothereventleaveParameter

try {
    $result = $apiInstance->otherEventUpdateothereventleavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherEventApi->otherEventUpdateothereventleavePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateothereventleaveParameter**](../Model/UpdateothereventleaveParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForupdateothereventleave**](../Model/ErrorForupdateothereventleave.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
