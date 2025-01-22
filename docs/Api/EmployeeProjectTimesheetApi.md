# PeopleHR\EmployeeProjectTimesheetApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeProjectTimesheetAddNewProjectPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetAddNewProjectPost) | **POST** /Employee Project Timesheet  -  AddNewProject | Add New Project |
| [**employeeProjectTimesheetAddNewProjectTaskDetailPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetAddNewProjectTaskDetailPost) | **POST** /Employee Project Timesheet  -  AddNewProjectTaskDetail | Add New Project Task Detail |
| [**employeeProjectTimesheetAddNewProjectTaskPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetAddNewProjectTaskPost) | **POST** /Employee Project Timesheet  -  AddNewProjectTask | Add New Project Task |
| [**employeeProjectTimesheetCreateProjectTimesheetPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetCreateProjectTimesheetPost) | **POST** /Employee Project Timesheet  -  CreateProjectTimesheet | Create project timesheet |
| [**employeeProjectTimesheetDeleteProjectTimesheetPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetDeleteProjectTimesheetPost) | **POST** /Employee Project Timesheet  -  DeleteProjectTimesheet | Delete project timesheet |
| [**employeeProjectTimesheetEditProjectPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetEditProjectPost) | **POST** /Employee Project Timesheet  -  EditProject | Edit Project |
| [**employeeProjectTimesheetEditProjectTaskDetailPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetEditProjectTaskDetailPost) | **POST** /Employee Project Timesheet  -  EditProjectTaskDetail | Edit Project Task Detail |
| [**employeeProjectTimesheetEditProjectTaskPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetEditProjectTaskPost) | **POST** /Employee Project Timesheet  -  EditProjectTask | Edit Project Task |
| [**employeeProjectTimesheetGetAllProjectTaskDetailPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetGetAllProjectTaskDetailPost) | **POST** /Employee Project Timesheet  -  GetAllProjectTaskDetail | Get All Project Task Detail |
| [**employeeProjectTimesheetGetAllProjectTaskPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetGetAllProjectTaskPost) | **POST** /Employee Project Timesheet  -  GetAllProjectTask | Get All Project Task |
| [**employeeProjectTimesheetGetAllTimesheetProjectPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetGetAllTimesheetProjectPost) | **POST** /Employee Project Timesheet  -  GetAllTimesheetProject | Get All Timesheet Project |
| [**employeeProjectTimesheetGetProjectTimesheetByTransactionIdPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetGetProjectTimesheetByTransactionIdPost) | **POST** /Employee Project Timesheet  -  GetProjectTimesheetByTransactionId | Get Project Timesheet By TransactionId |
| [**employeeProjectTimesheetGetProjectTimesheetDetailPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetGetProjectTimesheetDetailPost) | **POST** /Employee Project Timesheet  -  GetProjectTimesheetDetail | Get Project Time sheet Detail |
| [**employeeProjectTimesheetUpdateProjectTimesheetPost()**](EmployeeProjectTimesheetApi.md#employeeProjectTimesheetUpdateProjectTimesheetPost) | **POST** /Employee Project Timesheet  -  UpdateProjectTimesheet | Update project timesheet |


## `employeeProjectTimesheetAddNewProjectPost()`

```php
employeeProjectTimesheetAddNewProjectPost($body): \PeopleHR\Model\ErrorForAddNewProject
```

Add New Project

This API is used to add new project details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewProjectParameter(); // \PeopleHR\Model\AddNewProjectParameter

try {
    $result = $apiInstance->employeeProjectTimesheetAddNewProjectPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetAddNewProjectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewProjectParameter**](../Model/AddNewProjectParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewProject**](../Model/ErrorForAddNewProject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetAddNewProjectTaskDetailPost()`

```php
employeeProjectTimesheetAddNewProjectTaskDetailPost($body): \PeopleHR\Model\ErrorForAddNewProjectTaskDetail
```

Add New Project Task Detail

This API is used to add new project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewProjectTaskDetailParameter(); // \PeopleHR\Model\AddNewProjectTaskDetailParameter

try {
    $result = $apiInstance->employeeProjectTimesheetAddNewProjectTaskDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetAddNewProjectTaskDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewProjectTaskDetailParameter**](../Model/AddNewProjectTaskDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewProjectTaskDetail**](../Model/ErrorForAddNewProjectTaskDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetAddNewProjectTaskPost()`

```php
employeeProjectTimesheetAddNewProjectTaskPost($body): \PeopleHR\Model\ErrorForAddNewProjectTask
```

Add New Project Task

This API is used to add new project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewProjectTaskParameter(); // \PeopleHR\Model\AddNewProjectTaskParameter

try {
    $result = $apiInstance->employeeProjectTimesheetAddNewProjectTaskPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetAddNewProjectTaskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewProjectTaskParameter**](../Model/AddNewProjectTaskParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewProjectTask**](../Model/ErrorForAddNewProjectTask.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetCreateProjectTimesheetPost()`

```php
employeeProjectTimesheetCreateProjectTimesheetPost($body): \PeopleHR\Model\ErrorForCreateProjectTimesheet
```

Create project timesheet

This API is used to create project timesheet for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\CreateProjectTimesheetParameter(); // \PeopleHR\Model\CreateProjectTimesheetParameter

try {
    $result = $apiInstance->employeeProjectTimesheetCreateProjectTimesheetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetCreateProjectTimesheetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\CreateProjectTimesheetParameter**](../Model/CreateProjectTimesheetParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForCreateProjectTimesheet**](../Model/ErrorForCreateProjectTimesheet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetDeleteProjectTimesheetPost()`

```php
employeeProjectTimesheetDeleteProjectTimesheetPost($body): \PeopleHR\Model\ErrorForDeleteProjectTimesheet
```

Delete project timesheet

This API is used to delete project timesheet for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteProjectTimesheetParameter(); // \PeopleHR\Model\DeleteProjectTimesheetParameter

try {
    $result = $apiInstance->employeeProjectTimesheetDeleteProjectTimesheetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetDeleteProjectTimesheetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\DeleteProjectTimesheetParameter**](../Model/DeleteProjectTimesheetParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteProjectTimesheet**](../Model/ErrorForDeleteProjectTimesheet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetEditProjectPost()`

```php
employeeProjectTimesheetEditProjectPost($body): \PeopleHR\Model\ErrorForEditProject
```

Edit Project

This API is used to edit project details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\EditProjectParameter(); // \PeopleHR\Model\EditProjectParameter

try {
    $result = $apiInstance->employeeProjectTimesheetEditProjectPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetEditProjectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\EditProjectParameter**](../Model/EditProjectParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForEditProject**](../Model/ErrorForEditProject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetEditProjectTaskDetailPost()`

```php
employeeProjectTimesheetEditProjectTaskDetailPost($body): \PeopleHR\Model\ErrorForEditProjectTaskDetail
```

Edit Project Task Detail

This API is used to edit project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\EditProjectTaskDetailParameter(); // \PeopleHR\Model\EditProjectTaskDetailParameter

try {
    $result = $apiInstance->employeeProjectTimesheetEditProjectTaskDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetEditProjectTaskDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\EditProjectTaskDetailParameter**](../Model/EditProjectTaskDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForEditProjectTaskDetail**](../Model/ErrorForEditProjectTaskDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetEditProjectTaskPost()`

```php
employeeProjectTimesheetEditProjectTaskPost($body): \PeopleHR\Model\ErrorForEditProjectTask
```

Edit Project Task

This API is used to edit project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\EditProjectTaskParameter(); // \PeopleHR\Model\EditProjectTaskParameter

try {
    $result = $apiInstance->employeeProjectTimesheetEditProjectTaskPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetEditProjectTaskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\EditProjectTaskParameter**](../Model/EditProjectTaskParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForEditProjectTask**](../Model/ErrorForEditProjectTask.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetGetAllProjectTaskDetailPost()`

```php
employeeProjectTimesheetGetAllProjectTaskDetailPost($body): \PeopleHR\Model\ErrorForGetAllProjectTaskDetail
```

Get All Project Task Detail

This API is used to get all project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetAllProjectTaskDetailParameter(); // \PeopleHR\Model\GetAllProjectTaskDetailParameter

try {
    $result = $apiInstance->employeeProjectTimesheetGetAllProjectTaskDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetGetAllProjectTaskDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetAllProjectTaskDetailParameter**](../Model/GetAllProjectTaskDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetAllProjectTaskDetail**](../Model/ErrorForGetAllProjectTaskDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetGetAllProjectTaskPost()`

```php
employeeProjectTimesheetGetAllProjectTaskPost($body): \PeopleHR\Model\ErrorForGetAllProjectTask
```

Get All Project Task

This API is used to get all project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetAllProjectTaskParameter(); // \PeopleHR\Model\GetAllProjectTaskParameter

try {
    $result = $apiInstance->employeeProjectTimesheetGetAllProjectTaskPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetGetAllProjectTaskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetAllProjectTaskParameter**](../Model/GetAllProjectTaskParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetAllProjectTask**](../Model/ErrorForGetAllProjectTask.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetGetAllTimesheetProjectPost()`

```php
employeeProjectTimesheetGetAllTimesheetProjectPost($body): \PeopleHR\Model\ErrorForGetAllTimesheetProject
```

Get All Timesheet Project

This API is used to get all timesheet project detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetAllTimesheetProjectParameter(); // \PeopleHR\Model\GetAllTimesheetProjectParameter

try {
    $result = $apiInstance->employeeProjectTimesheetGetAllTimesheetProjectPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetGetAllTimesheetProjectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetAllTimesheetProjectParameter**](../Model/GetAllTimesheetProjectParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetAllTimesheetProject**](../Model/ErrorForGetAllTimesheetProject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetGetProjectTimesheetByTransactionIdPost()`

```php
employeeProjectTimesheetGetProjectTimesheetByTransactionIdPost($body): \PeopleHR\Model\ErrorForGetProjectTimesheetByTransactionId
```

Get Project Timesheet By TransactionId

This API is used to get project timesheet by transactionid for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetProjectTimesheetByTransactionId(); // \PeopleHR\Model\GetProjectTimesheetByTransactionId

try {
    $result = $apiInstance->employeeProjectTimesheetGetProjectTimesheetByTransactionIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetGetProjectTimesheetByTransactionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetProjectTimesheetByTransactionId**](../Model/GetProjectTimesheetByTransactionId.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetProjectTimesheetByTransactionId**](../Model/ErrorForGetProjectTimesheetByTransactionId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetGetProjectTimesheetDetailPost()`

```php
employeeProjectTimesheetGetProjectTimesheetDetailPost($body): \PeopleHR\Model\ErrorForGetProjectTimesheetDetail
```

Get Project Time sheet Detail

This API is used to get project time sheet detail for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetProjectTimesheetDetail(); // \PeopleHR\Model\GetProjectTimesheetDetail

try {
    $result = $apiInstance->employeeProjectTimesheetGetProjectTimesheetDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetGetProjectTimesheetDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetProjectTimesheetDetail**](../Model/GetProjectTimesheetDetail.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetProjectTimesheetDetail**](../Model/ErrorForGetProjectTimesheetDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProjectTimesheetUpdateProjectTimesheetPost()`

```php
employeeProjectTimesheetUpdateProjectTimesheetPost($body): \PeopleHR\Model\ErrorForUpdateProjectTimesheet
```

Update project timesheet

This API is used to update project timesheet for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateProjectTimesheetParameter(); // \PeopleHR\Model\UpdateProjectTimesheetParameter

try {
    $result = $apiInstance->employeeProjectTimesheetUpdateProjectTimesheetPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeProjectTimesheetApi->employeeProjectTimesheetUpdateProjectTimesheetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateProjectTimesheetParameter**](../Model/UpdateProjectTimesheetParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateProjectTimesheet**](../Model/ErrorForUpdateProjectTimesheet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
