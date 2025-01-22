# PeopleHR\OtherEventApi

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
otherEventAddotherevententitlementPost($body): \PeopleHR\Model\ErrorForaddotherevententitlement
```

Insert Update Other Event Entitlement

This API is used to Insert Update Other Event Entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddotherevententitlementParameter(); // \PeopleHR\Model\AddotherevententitlementParameter

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
| **body** | [**\PeopleHR\Model\AddotherevententitlementParameter**](../Model/AddotherevententitlementParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForaddotherevententitlement**](../Model/ErrorForaddotherevententitlement.md)

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
otherEventAddothereventleavePost($body): \PeopleHR\Model\ErrorForaddothereventleave
```

Add Other Event

This API is used to Add Other Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddothereventleaveParameter(); // \PeopleHR\Model\AddothereventleaveParameter

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
| **body** | [**\PeopleHR\Model\AddothereventleaveParameter**](../Model/AddothereventleaveParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForaddothereventleave**](../Model/ErrorForaddothereventleave.md)

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
otherEventDeleteOtherEventPost($body): \PeopleHR\Model\ErrorForDeleteOtherEvent
```

Delete Other Event

This API is used to Delete Other Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteOtherEventParameter(); // \PeopleHR\Model\DeleteOtherEventParameter

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
| **body** | [**\PeopleHR\Model\DeleteOtherEventParameter**](../Model/DeleteOtherEventParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteOtherEvent**](../Model/ErrorForDeleteOtherEvent.md)

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
otherEventGetothereventdetailPost($body): \PeopleHR\Model\ErrorForgetothereventdetail
```

Get Other Event Detail

This API is used to get other event detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetothereventdetailParameter(); // \PeopleHR\Model\GetothereventdetailParameter

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
| **body** | [**\PeopleHR\Model\GetothereventdetailParameter**](../Model/GetothereventdetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForgetothereventdetail**](../Model/ErrorForgetothereventdetail.md)

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
otherEventGetotherevententitlementPost($body): \PeopleHR\Model\ErrorForgetotherevententitlement
```

Get Other Event Entitlement

This API is used to get other event entitlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetotherevententitlementParameter(); // \PeopleHR\Model\GetotherevententitlementParameter

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
| **body** | [**\PeopleHR\Model\GetotherevententitlementParameter**](../Model/GetotherevententitlementParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForgetotherevententitlement**](../Model/ErrorForgetotherevententitlement.md)

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
otherEventUpdateothereventleavePost($body): \PeopleHR\Model\ErrorForupdateothereventleave
```

Update Other Event

This API is used to Update Other Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\OtherEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateothereventleaveParameter(); // \PeopleHR\Model\UpdateothereventleaveParameter

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
| **body** | [**\PeopleHR\Model\UpdateothereventleaveParameter**](../Model/UpdateothereventleaveParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForupdateothereventleave**](../Model/ErrorForupdateothereventleave.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
