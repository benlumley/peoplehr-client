# PeopleHR\EmployeeTimesheetApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeTimesheetCreateNewTimesheetPost()**](EmployeeTimesheetApi.md#employeeTimesheetCreateNewTimesheetPost) | **POST** /Employee Timesheet  -  CreateNewTimesheet | Create New Timesheet |
| [**employeeTimesheetDeleteTimesheetPost()**](EmployeeTimesheetApi.md#employeeTimesheetDeleteTimesheetPost) | **POST** /Employee Timesheet  -  DeleteTimesheet | Delete Timesheet |
| [**employeeTimesheetGetTimesheetDetailPost()**](EmployeeTimesheetApi.md#employeeTimesheetGetTimesheetDetailPost) | **POST** /Employee Timesheet  -  GetTimesheetDetail | Get Employee Timesheet Detail List |
| [**employeeTimesheetUpdateTimesheetPost()**](EmployeeTimesheetApi.md#employeeTimesheetUpdateTimesheetPost) | **POST** /Employee Timesheet  -  UpdateTimesheet | Update Employee Timesheet |


## `employeeTimesheetCreateNewTimesheetPost()`

```php
employeeTimesheetCreateNewTimesheetPost($body): \PeopleHR\Model\ErrorForCreateNewEmployeeTimesheetDetail
```

Create New Timesheet

This API is used to create new employee Timesheet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\CreateNewTimesheetDefinition(); // \PeopleHR\Model\CreateNewTimesheetDefinition

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
| **body** | [**\PeopleHR\Model\CreateNewTimesheetDefinition**](../Model/CreateNewTimesheetDefinition.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForCreateNewEmployeeTimesheetDetail**](../Model/ErrorForCreateNewEmployeeTimesheetDetail.md)

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
employeeTimesheetDeleteTimesheetPost($body): \PeopleHR\Model\ErrorForDeleteEmployeeTimesheetDetail
```

Delete Timesheet

This API is used to delete employee Timesheet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteTimesheetdefinition(); // \PeopleHR\Model\DeleteTimesheetdefinition

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
| **body** | [**\PeopleHR\Model\DeleteTimesheetdefinition**](../Model/DeleteTimesheetdefinition.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteEmployeeTimesheetDetail**](../Model/ErrorForDeleteEmployeeTimesheetDetail.md)

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
employeeTimesheetGetTimesheetDetailPost($body): \PeopleHR\Model\ErrorForGetTimesheetDetail
```

Get Employee Timesheet Detail List

This API is used to get employee timesheet detail list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetTimesheetdefinition(); // \PeopleHR\Model\GetTimesheetdefinition

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
| **body** | [**\PeopleHR\Model\GetTimesheetdefinition**](../Model/GetTimesheetdefinition.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetTimesheetDetail**](../Model/ErrorForGetTimesheetDetail.md)

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
employeeTimesheetUpdateTimesheetPost($body): \PeopleHR\Model\ErrorForUpdateEmployeeTimesheetDetail
```

Update Employee Timesheet

This API is used to update employee timesheet details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateTimesheetDefinition(); // \PeopleHR\Model\UpdateTimesheetDefinition

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
| **body** | [**\PeopleHR\Model\UpdateTimesheetDefinition**](../Model/UpdateTimesheetDefinition.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateEmployeeTimesheetDetail**](../Model/ErrorForUpdateEmployeeTimesheetDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
