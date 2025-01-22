# PeopleHR\RightToWorkApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rightToWorkAddrighttoworkdetailPost()**](RightToWorkApi.md#rightToWorkAddrighttoworkdetailPost) | **POST** /Right To Work  -  addrighttoworkdetail | Add Right To Work Detail |
| [**rightToWorkDeleterighttoworkdetailPost()**](RightToWorkApi.md#rightToWorkDeleterighttoworkdetailPost) | **POST** /Right To Work  -  deleterighttoworkdetail | Delete Right To Work Detail |
| [**rightToWorkGetrighttoworkdetailPost()**](RightToWorkApi.md#rightToWorkGetrighttoworkdetailPost) | **POST** /Right To Work  -  getrighttoworkdetail | Get Right To Work Detail |
| [**rightToWorkUpdaterighttoworkdetailPost()**](RightToWorkApi.md#rightToWorkUpdaterighttoworkdetailPost) | **POST** /Right To Work  -  updaterighttoworkdetail | Update Right To Work Detail |


## `rightToWorkAddrighttoworkdetailPost()`

```php
rightToWorkAddrighttoworkdetailPost($body): \PeopleHR\Model\ErrorForaddrighttoworkdetail
```

Add Right To Work Detail

This API is used to add right to work detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\RightToWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewRightToWorkDetailParameter(); // \PeopleHR\Model\AddNewRightToWorkDetailParameter

try {
    $result = $apiInstance->rightToWorkAddrighttoworkdetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RightToWorkApi->rightToWorkAddrighttoworkdetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewRightToWorkDetailParameter**](../Model/AddNewRightToWorkDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForaddrighttoworkdetail**](../Model/ErrorForaddrighttoworkdetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rightToWorkDeleterighttoworkdetailPost()`

```php
rightToWorkDeleterighttoworkdetailPost($body): \PeopleHR\Model\ErrorFordeleterighttoworkdetail
```

Delete Right To Work Detail

This API is used to delete right to work detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\RightToWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleterighttoworkdetailParameter(); // \PeopleHR\Model\DeleterighttoworkdetailParameter

try {
    $result = $apiInstance->rightToWorkDeleterighttoworkdetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RightToWorkApi->rightToWorkDeleterighttoworkdetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\DeleterighttoworkdetailParameter**](../Model/DeleterighttoworkdetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorFordeleterighttoworkdetail**](../Model/ErrorFordeleterighttoworkdetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rightToWorkGetrighttoworkdetailPost()`

```php
rightToWorkGetrighttoworkdetailPost($body): \PeopleHR\Model\ErrorForgetrighttoworkdetail
```

Get Right To Work Detail

This API is used to get right to work detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\RightToWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetRightToWorkDetailParameter(); // \PeopleHR\Model\GetRightToWorkDetailParameter

try {
    $result = $apiInstance->rightToWorkGetrighttoworkdetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RightToWorkApi->rightToWorkGetrighttoworkdetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetRightToWorkDetailParameter**](../Model/GetRightToWorkDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForgetrighttoworkdetail**](../Model/ErrorForgetrighttoworkdetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rightToWorkUpdaterighttoworkdetailPost()`

```php
rightToWorkUpdaterighttoworkdetailPost($body): \PeopleHR\Model\ErrorForupdaterighttoworkdetail
```

Update Right To Work Detail

This API is used to update right to work details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\RightToWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdaterighttoworkdetailParameter(); // \PeopleHR\Model\UpdaterighttoworkdetailParameter

try {
    $result = $apiInstance->rightToWorkUpdaterighttoworkdetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RightToWorkApi->rightToWorkUpdaterighttoworkdetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdaterighttoworkdetailParameter**](../Model/UpdaterighttoworkdetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForupdaterighttoworkdetail**](../Model/ErrorForupdaterighttoworkdetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
