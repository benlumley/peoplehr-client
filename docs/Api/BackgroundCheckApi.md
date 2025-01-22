# PeopleHR\BackgroundCheckApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**backgroundCheckAddBackgroundCheckDetailPost()**](BackgroundCheckApi.md#backgroundCheckAddBackgroundCheckDetailPost) | **POST** /Background Check  -  AddBackgroundCheckDetail | Add Background Check Detail |
| [**backgroundCheckDeleteBackgroundCheckDetailPost()**](BackgroundCheckApi.md#backgroundCheckDeleteBackgroundCheckDetailPost) | **POST** /Background Check  -  DeleteBackgroundCheckDetail | Delete Background Check Detail |
| [**backgroundCheckGetBackgroundCheckDetailByEmployeeIdPost()**](BackgroundCheckApi.md#backgroundCheckGetBackgroundCheckDetailByEmployeeIdPost) | **POST** /Background Check  -  GetBackgroundCheckDetailByEmployeeId | Get Background Check Detail By EmployeeId |
| [**backgroundCheckUpdateBackgroundCheckDetailPost()**](BackgroundCheckApi.md#backgroundCheckUpdateBackgroundCheckDetailPost) | **POST** /Background Check  -  UpdateBackgroundCheckDetail | Update Background Check Detail |


## `backgroundCheckAddBackgroundCheckDetailPost()`

```php
backgroundCheckAddBackgroundCheckDetailPost($body): \PeopleHR\Model\ErrorForAddBackgroundCheckDetail
```

Add Background Check Detail

This API is used to add background check detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\BackgroundCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddBackgroundCheckDetailParameter(); // \PeopleHR\Model\AddBackgroundCheckDetailParameter

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
| **body** | [**\PeopleHR\Model\AddBackgroundCheckDetailParameter**](../Model/AddBackgroundCheckDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddBackgroundCheckDetail**](../Model/ErrorForAddBackgroundCheckDetail.md)

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
backgroundCheckDeleteBackgroundCheckDetailPost($body): \PeopleHR\Model\ErrorForDeleteBackgroundCheckDetail
```

Delete Background Check Detail

This API is used to Delete Background Check Detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\BackgroundCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteBackgroundCheckDetailParameter(); // \PeopleHR\Model\DeleteBackgroundCheckDetailParameter

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
| **body** | [**\PeopleHR\Model\DeleteBackgroundCheckDetailParameter**](../Model/DeleteBackgroundCheckDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteBackgroundCheckDetail**](../Model/ErrorForDeleteBackgroundCheckDetail.md)

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
backgroundCheckGetBackgroundCheckDetailByEmployeeIdPost($body): \PeopleHR\Model\ErrorForGetBackgroundCheckDetailByEmployeeId
```

Get Background Check Detail By EmployeeId

This API is used to Get Background Check Detail By EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\BackgroundCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetBackgroundCheckDetailByEmployeeIdParameter(); // \PeopleHR\Model\GetBackgroundCheckDetailByEmployeeIdParameter

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
| **body** | [**\PeopleHR\Model\GetBackgroundCheckDetailByEmployeeIdParameter**](../Model/GetBackgroundCheckDetailByEmployeeIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetBackgroundCheckDetailByEmployeeId**](../Model/ErrorForGetBackgroundCheckDetailByEmployeeId.md)

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
backgroundCheckUpdateBackgroundCheckDetailPost($body): \PeopleHR\Model\ErrorForUpdateBackgroundCheckDetail
```

Update Background Check Detail

This API is used to update background check detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\BackgroundCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateBackgroundCheckDetailParameter(); // \PeopleHR\Model\UpdateBackgroundCheckDetailParameter

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
| **body** | [**\PeopleHR\Model\UpdateBackgroundCheckDetailParameter**](../Model/UpdateBackgroundCheckDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateBackgroundCheckDetail**](../Model/ErrorForUpdateBackgroundCheckDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
