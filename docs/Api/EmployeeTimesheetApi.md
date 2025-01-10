# OpenAPI\Client\EmployeeTimesheetApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeTimesheetCreateNewTimesheetPost()**](EmployeeTimesheetApi.md#employeeTimesheetCreateNewTimesheetPost) | **POST** /Employee Timesheet  -  CreateNewTimesheet | Create New Timesheet |
| [**employeeTimesheetDeleteTimesheetPost()**](EmployeeTimesheetApi.md#employeeTimesheetDeleteTimesheetPost) | **POST** /Employee Timesheet  -  DeleteTimesheet | Delete Timesheet |
| [**employeeTimesheetGetTimesheetDetailPost()**](EmployeeTimesheetApi.md#employeeTimesheetGetTimesheetDetailPost) | **POST** /Employee Timesheet  -  GetTimesheetDetail | Get Employee Timesheet Detail List |
| [**employeeTimesheetUpdateTimesheetPost()**](EmployeeTimesheetApi.md#employeeTimesheetUpdateTimesheetPost) | **POST** /Employee Timesheet  -  UpdateTimesheet | Update Employee Timesheet |


## `employeeTimesheetCreateNewTimesheetPost()`

```php
employeeTimesheetCreateNewTimesheetPost($body): \OpenAPI\Client\Model\ErrorForCreateNewEmployeeTimesheetDetail
```

Create New Timesheet

This API is used to create new employee Timesheet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\CreateNewTimesheetDefinition(); // \OpenAPI\Client\Model\CreateNewTimesheetDefinition

try {
    $result = $apiInstance->employeeTimesheetCreateNewTimesheetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeTimesheetApi->employeeTimesheetCreateNewTimesheetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CreateNewTimesheetDefinition**](../Model/CreateNewTimesheetDefinition.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForCreateNewEmployeeTimesheetDetail**](../Model/ErrorForCreateNewEmployeeTimesheetDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeTimesheetDeleteTimesheetPost()`

```php
employeeTimesheetDeleteTimesheetPost($body): \OpenAPI\Client\Model\ErrorForDeleteEmployeeTimesheetDetail
```

Delete Timesheet

This API is used to delete employee Timesheet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteTimesheetdefinition(); // \OpenAPI\Client\Model\DeleteTimesheetdefinition

try {
    $result = $apiInstance->employeeTimesheetDeleteTimesheetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeTimesheetApi->employeeTimesheetDeleteTimesheetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DeleteTimesheetdefinition**](../Model/DeleteTimesheetdefinition.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteEmployeeTimesheetDetail**](../Model/ErrorForDeleteEmployeeTimesheetDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeTimesheetGetTimesheetDetailPost()`

```php
employeeTimesheetGetTimesheetDetailPost($body): \OpenAPI\Client\Model\ErrorForGetTimesheetDetail
```

Get Employee Timesheet Detail List

This API is used to get employee timesheet detail list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetTimesheetdefinition(); // \OpenAPI\Client\Model\GetTimesheetdefinition

try {
    $result = $apiInstance->employeeTimesheetGetTimesheetDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeTimesheetApi->employeeTimesheetGetTimesheetDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetTimesheetdefinition**](../Model/GetTimesheetdefinition.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetTimesheetDetail**](../Model/ErrorForGetTimesheetDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeTimesheetUpdateTimesheetPost()`

```php
employeeTimesheetUpdateTimesheetPost($body): \OpenAPI\Client\Model\ErrorForUpdateEmployeeTimesheetDetail
```

Update Employee Timesheet

This API is used to update employee timesheet details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateTimesheetDefinition(); // \OpenAPI\Client\Model\UpdateTimesheetDefinition

try {
    $result = $apiInstance->employeeTimesheetUpdateTimesheetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeTimesheetApi->employeeTimesheetUpdateTimesheetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateTimesheetDefinition**](../Model/UpdateTimesheetDefinition.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateEmployeeTimesheetDetail**](../Model/ErrorForUpdateEmployeeTimesheetDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
