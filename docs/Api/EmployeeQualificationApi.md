# PeopleHR\EmployeeQualificationApi

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
employeeQualificationAddNewQualificationPost($body): \PeopleHR\Model\ErrorForAddNewQualification
```

Add New Qualification

This API is used to Add new qualification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewQualificationParameter(); // \PeopleHR\Model\AddNewQualificationParameter

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
| **body** | [**\PeopleHR\Model\AddNewQualificationParameter**](../Model/AddNewQualificationParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewQualification**](../Model/ErrorForAddNewQualification.md)

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
employeeQualificationDeleteQualificationPost($body): \PeopleHR\Model\ErrorForDeleteQualification
```

Delete Qualification

This API is used to delete qualification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteQualificationParameter(); // \PeopleHR\Model\DeleteQualificationParameter

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
| **body** | [**\PeopleHR\Model\DeleteQualificationParameter**](../Model/DeleteQualificationParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteQualification**](../Model/ErrorForDeleteQualification.md)

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
employeeQualificationGetQualificationByEmployeeIdPost($body): \PeopleHR\Model\ErrorForGetQualificationByEmployeeId
```

Get Qualification By EmployeeId

This API is used to get qualification by EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetQualificationByEmployeeIdParameter(); // \PeopleHR\Model\GetQualificationByEmployeeIdParameter

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
| **body** | [**\PeopleHR\Model\GetQualificationByEmployeeIdParameter**](../Model/GetQualificationByEmployeeIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetQualificationByEmployeeId**](../Model/ErrorForGetQualificationByEmployeeId.md)

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
employeeQualificationGetQualificationByQualificationIdPost($body): \PeopleHR\Model\ErrorForGetQualificationByQualificationId
```

Get Qualification By QualificationId

This API is used to Get qualification by qualification Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetQualificationByQualificationIdParameter(); // \PeopleHR\Model\GetQualificationByQualificationIdParameter

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
| **body** | [**\PeopleHR\Model\GetQualificationByQualificationIdParameter**](../Model/GetQualificationByQualificationIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetQualificationByQualificationId**](../Model/ErrorForGetQualificationByQualificationId.md)

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
employeeQualificationUpdateQualificationPost($body): \PeopleHR\Model\ErrorForUpdateQualification
```

Update Qualification

This API is used to Update qualification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeQualificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateQualificationParameter(); // \PeopleHR\Model\UpdateQualificationParameter

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
| **body** | [**\PeopleHR\Model\UpdateQualificationParameter**](../Model/UpdateQualificationParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateQualification**](../Model/ErrorForUpdateQualification.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
