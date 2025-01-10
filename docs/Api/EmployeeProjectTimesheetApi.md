# OpenAPI\Client\EmployeeProjectTimesheetApi

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
employeeProjectTimesheetAddNewProjectPost($body): \OpenAPI\Client\Model\ErrorForAddNewProject
```

Add New Project

This API is used to add new project details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewProjectParameter(); // \OpenAPI\Client\Model\AddNewProjectParameter

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
| **body** | [**\OpenAPI\Client\Model\AddNewProjectParameter**](../Model/AddNewProjectParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewProject**](../Model/ErrorForAddNewProject.md)

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
employeeProjectTimesheetAddNewProjectTaskDetailPost($body): \OpenAPI\Client\Model\ErrorForAddNewProjectTaskDetail
```

Add New Project Task Detail

This API is used to add new project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewProjectTaskDetailParameter(); // \OpenAPI\Client\Model\AddNewProjectTaskDetailParameter

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
| **body** | [**\OpenAPI\Client\Model\AddNewProjectTaskDetailParameter**](../Model/AddNewProjectTaskDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewProjectTaskDetail**](../Model/ErrorForAddNewProjectTaskDetail.md)

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
employeeProjectTimesheetAddNewProjectTaskPost($body): \OpenAPI\Client\Model\ErrorForAddNewProjectTask
```

Add New Project Task

This API is used to add new project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewProjectTaskParameter(); // \OpenAPI\Client\Model\AddNewProjectTaskParameter

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
| **body** | [**\OpenAPI\Client\Model\AddNewProjectTaskParameter**](../Model/AddNewProjectTaskParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewProjectTask**](../Model/ErrorForAddNewProjectTask.md)

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
employeeProjectTimesheetCreateProjectTimesheetPost($body): \OpenAPI\Client\Model\ErrorForCreateProjectTimesheet
```

Create project timesheet

This API is used to create project timesheet for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\CreateProjectTimesheetParameter(); // \OpenAPI\Client\Model\CreateProjectTimesheetParameter

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
| **body** | [**\OpenAPI\Client\Model\CreateProjectTimesheetParameter**](../Model/CreateProjectTimesheetParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForCreateProjectTimesheet**](../Model/ErrorForCreateProjectTimesheet.md)

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
employeeProjectTimesheetDeleteProjectTimesheetPost($body): \OpenAPI\Client\Model\ErrorForDeleteProjectTimesheet
```

Delete project timesheet

This API is used to delete project timesheet for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteProjectTimesheetParameter(); // \OpenAPI\Client\Model\DeleteProjectTimesheetParameter

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
| **body** | [**\OpenAPI\Client\Model\DeleteProjectTimesheetParameter**](../Model/DeleteProjectTimesheetParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteProjectTimesheet**](../Model/ErrorForDeleteProjectTimesheet.md)

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
employeeProjectTimesheetEditProjectPost($body): \OpenAPI\Client\Model\ErrorForEditProject
```

Edit Project

This API is used to edit project details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\EditProjectParameter(); // \OpenAPI\Client\Model\EditProjectParameter

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
| **body** | [**\OpenAPI\Client\Model\EditProjectParameter**](../Model/EditProjectParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForEditProject**](../Model/ErrorForEditProject.md)

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
employeeProjectTimesheetEditProjectTaskDetailPost($body): \OpenAPI\Client\Model\ErrorForEditProjectTaskDetail
```

Edit Project Task Detail

This API is used to edit project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\EditProjectTaskDetailParameter(); // \OpenAPI\Client\Model\EditProjectTaskDetailParameter

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
| **body** | [**\OpenAPI\Client\Model\EditProjectTaskDetailParameter**](../Model/EditProjectTaskDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForEditProjectTaskDetail**](../Model/ErrorForEditProjectTaskDetail.md)

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
employeeProjectTimesheetEditProjectTaskPost($body): \OpenAPI\Client\Model\ErrorForEditProjectTask
```

Edit Project Task

This API is used to edit project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\EditProjectTaskParameter(); // \OpenAPI\Client\Model\EditProjectTaskParameter

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
| **body** | [**\OpenAPI\Client\Model\EditProjectTaskParameter**](../Model/EditProjectTaskParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForEditProjectTask**](../Model/ErrorForEditProjectTask.md)

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
employeeProjectTimesheetGetAllProjectTaskDetailPost($body): \OpenAPI\Client\Model\ErrorForGetAllProjectTaskDetail
```

Get All Project Task Detail

This API is used to get all project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetAllProjectTaskDetailParameter(); // \OpenAPI\Client\Model\GetAllProjectTaskDetailParameter

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
| **body** | [**\OpenAPI\Client\Model\GetAllProjectTaskDetailParameter**](../Model/GetAllProjectTaskDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetAllProjectTaskDetail**](../Model/ErrorForGetAllProjectTaskDetail.md)

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
employeeProjectTimesheetGetAllProjectTaskPost($body): \OpenAPI\Client\Model\ErrorForGetAllProjectTask
```

Get All Project Task

This API is used to get all project task detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetAllProjectTaskParameter(); // \OpenAPI\Client\Model\GetAllProjectTaskParameter

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
| **body** | [**\OpenAPI\Client\Model\GetAllProjectTaskParameter**](../Model/GetAllProjectTaskParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetAllProjectTask**](../Model/ErrorForGetAllProjectTask.md)

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
employeeProjectTimesheetGetAllTimesheetProjectPost($body): \OpenAPI\Client\Model\ErrorForGetAllTimesheetProject
```

Get All Timesheet Project

This API is used to get all timesheet project detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetAllTimesheetProjectParameter(); // \OpenAPI\Client\Model\GetAllTimesheetProjectParameter

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
| **body** | [**\OpenAPI\Client\Model\GetAllTimesheetProjectParameter**](../Model/GetAllTimesheetProjectParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetAllTimesheetProject**](../Model/ErrorForGetAllTimesheetProject.md)

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
employeeProjectTimesheetGetProjectTimesheetByTransactionIdPost($body): \OpenAPI\Client\Model\ErrorForGetProjectTimesheetByTransactionId
```

Get Project Timesheet By TransactionId

This API is used to get project timesheet by transactionid for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetProjectTimesheetByTransactionId(); // \OpenAPI\Client\Model\GetProjectTimesheetByTransactionId

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
| **body** | [**\OpenAPI\Client\Model\GetProjectTimesheetByTransactionId**](../Model/GetProjectTimesheetByTransactionId.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetProjectTimesheetByTransactionId**](../Model/ErrorForGetProjectTimesheetByTransactionId.md)

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
employeeProjectTimesheetGetProjectTimesheetDetailPost($body): \OpenAPI\Client\Model\ErrorForGetProjectTimesheetDetail
```

Get Project Time sheet Detail

This API is used to get project time sheet detail for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetProjectTimesheetDetail(); // \OpenAPI\Client\Model\GetProjectTimesheetDetail

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
| **body** | [**\OpenAPI\Client\Model\GetProjectTimesheetDetail**](../Model/GetProjectTimesheetDetail.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetProjectTimesheetDetail**](../Model/ErrorForGetProjectTimesheetDetail.md)

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
employeeProjectTimesheetUpdateProjectTimesheetPost($body): \OpenAPI\Client\Model\ErrorForUpdateProjectTimesheet
```

Update project timesheet

This API is used to update project timesheet for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeProjectTimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateProjectTimesheetParameter(); // \OpenAPI\Client\Model\UpdateProjectTimesheetParameter

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
| **body** | [**\OpenAPI\Client\Model\UpdateProjectTimesheetParameter**](../Model/UpdateProjectTimesheetParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateProjectTimesheet**](../Model/ErrorForUpdateProjectTimesheet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
