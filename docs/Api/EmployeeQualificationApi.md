# OpenAPI\Client\EmployeeQualificationApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeQualificationAddNewQualificationPost()**](EmployeeQualificationApi.md#employeeQualificationAddNewQualificationPost) | **POST** /Employee Qualification  -  AddNewQualification | Add New Qualification |
| [**employeeQualificationDeleteQualificationPost()**](EmployeeQualificationApi.md#employeeQualificationDeleteQualificationPost) | **POST** /Employee Qualification  -  DeleteQualification | Delete Qualification |
| [**employeeQualificationGetQualificationByEmployeeIdPost()**](EmployeeQualificationApi.md#employeeQualificationGetQualificationByEmployeeIdPost) | **POST** /Employee Qualification  -  GetQualificationByEmployeeId | Get Qualification By EmployeeId |
| [**employeeQualificationGetQualificationByQualificationIdPost()**](EmployeeQualificationApi.md#employeeQualificationGetQualificationByQualificationIdPost) | **POST** /Employee Qualification  -  GetQualificationByQualificationId | Get Qualification By QualificationId |
| [**employeeQualificationUpdateQualificationPost()**](EmployeeQualificationApi.md#employeeQualificationUpdateQualificationPost) | **POST** /Employee Qualification  -  UpdateQualification | Update Qualification |


## `employeeQualificationAddNewQualificationPost()`

```php
employeeQualificationAddNewQualificationPost($body): \OpenAPI\Client\Model\ErrorForAddNewQualification
```

Add New Qualification

This API is used to Add new qualification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewQualificationParameter(); // \OpenAPI\Client\Model\AddNewQualificationParameter

try {
    $result = $apiInstance->employeeQualificationAddNewQualificationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeQualificationApi->employeeQualificationAddNewQualificationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AddNewQualificationParameter**](../Model/AddNewQualificationParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewQualification**](../Model/ErrorForAddNewQualification.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeQualificationDeleteQualificationPost()`

```php
employeeQualificationDeleteQualificationPost($body): \OpenAPI\Client\Model\ErrorForDeleteQualification
```

Delete Qualification

This API is used to delete qualification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteQualificationParameter(); // \OpenAPI\Client\Model\DeleteQualificationParameter

try {
    $result = $apiInstance->employeeQualificationDeleteQualificationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeQualificationApi->employeeQualificationDeleteQualificationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DeleteQualificationParameter**](../Model/DeleteQualificationParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteQualification**](../Model/ErrorForDeleteQualification.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeQualificationGetQualificationByEmployeeIdPost()`

```php
employeeQualificationGetQualificationByEmployeeIdPost($body): \OpenAPI\Client\Model\ErrorForGetQualificationByEmployeeId
```

Get Qualification By EmployeeId

This API is used to get qualification by EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetQualificationByEmployeeIdParameter(); // \OpenAPI\Client\Model\GetQualificationByEmployeeIdParameter

try {
    $result = $apiInstance->employeeQualificationGetQualificationByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeQualificationApi->employeeQualificationGetQualificationByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetQualificationByEmployeeIdParameter**](../Model/GetQualificationByEmployeeIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetQualificationByEmployeeId**](../Model/ErrorForGetQualificationByEmployeeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeQualificationGetQualificationByQualificationIdPost()`

```php
employeeQualificationGetQualificationByQualificationIdPost($body): \OpenAPI\Client\Model\ErrorForGetQualificationByQualificationId
```

Get Qualification By QualificationId

This API is used to Get qualification by qualification Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetQualificationByQualificationIdParameter(); // \OpenAPI\Client\Model\GetQualificationByQualificationIdParameter

try {
    $result = $apiInstance->employeeQualificationGetQualificationByQualificationIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeQualificationApi->employeeQualificationGetQualificationByQualificationIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetQualificationByQualificationIdParameter**](../Model/GetQualificationByQualificationIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetQualificationByQualificationId**](../Model/ErrorForGetQualificationByQualificationId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeQualificationUpdateQualificationPost()`

```php
employeeQualificationUpdateQualificationPost($body): \OpenAPI\Client\Model\ErrorForUpdateQualification
```

Update Qualification

This API is used to Update qualification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateQualificationParameter(); // \OpenAPI\Client\Model\UpdateQualificationParameter

try {
    $result = $apiInstance->employeeQualificationUpdateQualificationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeQualificationApi->employeeQualificationUpdateQualificationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateQualificationParameter**](../Model/UpdateQualificationParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateQualification**](../Model/ErrorForUpdateQualification.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
