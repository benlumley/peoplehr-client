# OpenAPI\Client\BackgroundCheckApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**backgroundCheckAddBackgroundCheckDetailPost()**](BackgroundCheckApi.md#backgroundCheckAddBackgroundCheckDetailPost) | **POST** /Background Check  -  AddBackgroundCheckDetail | Add Background Check Detail |
| [**backgroundCheckDeleteBackgroundCheckDetailPost()**](BackgroundCheckApi.md#backgroundCheckDeleteBackgroundCheckDetailPost) | **POST** /Background Check  -  DeleteBackgroundCheckDetail | Delete Background Check Detail |
| [**backgroundCheckGetBackgroundCheckDetailByEmployeeIdPost()**](BackgroundCheckApi.md#backgroundCheckGetBackgroundCheckDetailByEmployeeIdPost) | **POST** /Background Check  -  GetBackgroundCheckDetailByEmployeeId | Get Background Check Detail By EmployeeId |
| [**backgroundCheckUpdateBackgroundCheckDetailPost()**](BackgroundCheckApi.md#backgroundCheckUpdateBackgroundCheckDetailPost) | **POST** /Background Check  -  UpdateBackgroundCheckDetail | Update Background Check Detail |


## `backgroundCheckAddBackgroundCheckDetailPost()`

```php
backgroundCheckAddBackgroundCheckDetailPost($body): \OpenAPI\Client\Model\ErrorForAddBackgroundCheckDetail
```

Add Background Check Detail

This API is used to add background check detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BackgroundCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddBackgroundCheckDetailParameter(); // \OpenAPI\Client\Model\AddBackgroundCheckDetailParameter

try {
    $result = $apiInstance->backgroundCheckAddBackgroundCheckDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackgroundCheckApi->backgroundCheckAddBackgroundCheckDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AddBackgroundCheckDetailParameter**](../Model/AddBackgroundCheckDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddBackgroundCheckDetail**](../Model/ErrorForAddBackgroundCheckDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backgroundCheckDeleteBackgroundCheckDetailPost()`

```php
backgroundCheckDeleteBackgroundCheckDetailPost($body): \OpenAPI\Client\Model\ErrorForDeleteBackgroundCheckDetail
```

Delete Background Check Detail

This API is used to Delete Background Check Detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BackgroundCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteBackgroundCheckDetailParameter(); // \OpenAPI\Client\Model\DeleteBackgroundCheckDetailParameter

try {
    $result = $apiInstance->backgroundCheckDeleteBackgroundCheckDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackgroundCheckApi->backgroundCheckDeleteBackgroundCheckDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DeleteBackgroundCheckDetailParameter**](../Model/DeleteBackgroundCheckDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteBackgroundCheckDetail**](../Model/ErrorForDeleteBackgroundCheckDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backgroundCheckGetBackgroundCheckDetailByEmployeeIdPost()`

```php
backgroundCheckGetBackgroundCheckDetailByEmployeeIdPost($body): \OpenAPI\Client\Model\ErrorForGetBackgroundCheckDetailByEmployeeId
```

Get Background Check Detail By EmployeeId

This API is used to Get Background Check Detail By EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BackgroundCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetBackgroundCheckDetailByEmployeeIdParameter(); // \OpenAPI\Client\Model\GetBackgroundCheckDetailByEmployeeIdParameter

try {
    $result = $apiInstance->backgroundCheckGetBackgroundCheckDetailByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackgroundCheckApi->backgroundCheckGetBackgroundCheckDetailByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetBackgroundCheckDetailByEmployeeIdParameter**](../Model/GetBackgroundCheckDetailByEmployeeIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetBackgroundCheckDetailByEmployeeId**](../Model/ErrorForGetBackgroundCheckDetailByEmployeeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backgroundCheckUpdateBackgroundCheckDetailPost()`

```php
backgroundCheckUpdateBackgroundCheckDetailPost($body): \OpenAPI\Client\Model\ErrorForUpdateBackgroundCheckDetail
```

Update Background Check Detail

This API is used to update background check detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BackgroundCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateBackgroundCheckDetailParameter(); // \OpenAPI\Client\Model\UpdateBackgroundCheckDetailParameter

try {
    $result = $apiInstance->backgroundCheckUpdateBackgroundCheckDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackgroundCheckApi->backgroundCheckUpdateBackgroundCheckDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateBackgroundCheckDetailParameter**](../Model/UpdateBackgroundCheckDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateBackgroundCheckDetail**](../Model/ErrorForUpdateBackgroundCheckDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
