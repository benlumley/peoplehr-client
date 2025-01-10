# OpenAPI\Client\EmployeeSalaryApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeSalaryCreateNewSalaryPost()**](EmployeeSalaryApi.md#employeeSalaryCreateNewSalaryPost) | **POST** /EmployeeSalary  -  CreateNewSalary | Create New Salary |
| [**employeeSalaryDeleteSalaryPost()**](EmployeeSalaryApi.md#employeeSalaryDeleteSalaryPost) | **POST** /EmployeeSalary  -  DeleteSalary | Delete Salary |
| [**employeeSalaryGetSalaryDetailPost()**](EmployeeSalaryApi.md#employeeSalaryGetSalaryDetailPost) | **POST** /EmployeeSalary  -  GetSalaryDetail | Get Salary Detail |


## `employeeSalaryCreateNewSalaryPost()`

```php
employeeSalaryCreateNewSalaryPost($body): \OpenAPI\Client\Model\ErrorForCreateNewSalary1
```

Create New Salary

This API is used to Create New Salary for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeSalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\CreateNewSalaryParameter(); // \OpenAPI\Client\Model\CreateNewSalaryParameter

try {
    $result = $apiInstance->employeeSalaryCreateNewSalaryPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeSalaryApi->employeeSalaryCreateNewSalaryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CreateNewSalaryParameter**](../Model/CreateNewSalaryParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForCreateNewSalary1**](../Model/ErrorForCreateNewSalary1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeSalaryDeleteSalaryPost()`

```php
employeeSalaryDeleteSalaryPost($body): \OpenAPI\Client\Model\ErrorForDeleteSalary
```

Delete Salary

This API is used to delete Salary details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeSalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteSalaryParameter(); // \OpenAPI\Client\Model\DeleteSalaryParameter

try {
    $result = $apiInstance->employeeSalaryDeleteSalaryPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeSalaryApi->employeeSalaryDeleteSalaryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DeleteSalaryParameter**](../Model/DeleteSalaryParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteSalary**](../Model/ErrorForDeleteSalary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeSalaryGetSalaryDetailPost()`

```php
employeeSalaryGetSalaryDetailPost($body): \OpenAPI\Client\Model\ErrorForGetSalaryDetail
```

Get Salary Detail

This API is used to Get employee salary details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeSalaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetSalaryDetail2(); // \OpenAPI\Client\Model\GetSalaryDetail2

try {
    $result = $apiInstance->employeeSalaryGetSalaryDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeSalaryApi->employeeSalaryGetSalaryDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetSalaryDetail2**](../Model/GetSalaryDetail2.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetSalaryDetail**](../Model/ErrorForGetSalaryDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
