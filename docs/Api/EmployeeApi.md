# PeopleHR\EmployeeApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeAddEmployeeImagePost()**](EmployeeApi.md#employeeAddEmployeeImagePost) | **POST** /Employee  -  AddEmployeeImage | Add Employee Image By Id |
| [**employeeCheckAuthenticationPost()**](EmployeeApi.md#employeeCheckAuthenticationPost) | **POST** /Employee  -  CheckAuthentication | Check Authentication |
| [**employeeCreateNewEmployeePost()**](EmployeeApi.md#employeeCreateNewEmployeePost) | **POST** /Employee  -  CreateNewEmployee | Create New Employee |
| [**employeeGetAllEmployeeDetailPost()**](EmployeeApi.md#employeeGetAllEmployeeDetailPost) | **POST** /Employee  -  GetAllEmployeeDetail | Get All Employee Detail |
| [**employeeGetEmployeeDetailByIdPost()**](EmployeeApi.md#employeeGetEmployeeDetailByIdPost) | **POST** /Employee  -  GetEmployeeDetailById | Get Employee Detail By Id |
| [**employeeMarkAsLeaverByIdPost()**](EmployeeApi.md#employeeMarkAsLeaverByIdPost) | **POST** /Employee  -  MarkAsLeaverById | Mark As Leaver By Id |
| [**employeeUpdateEmployeeDetailPost()**](EmployeeApi.md#employeeUpdateEmployeeDetailPost) | **POST** /Employee  -  UpdateEmployeeDetail | Update Employee Details |
| [**employeeUpdateEmployeeIdPost()**](EmployeeApi.md#employeeUpdateEmployeeIdPost) | **POST** /Employee  -  UpdateEmployeeId | Update Employee Id |


## `employeeAddEmployeeImagePost()`

```php
employeeAddEmployeeImagePost($body): \PeopleHR\Model\ErrorForAddEmployeeImageById
```

Add Employee Image By Id

This API is used to add employee image by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddEmployeeImageById2(); // \PeopleHR\Model\AddEmployeeImageById2

try {
    $result = $apiInstance->employeeAddEmployeeImagePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeAddEmployeeImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddEmployeeImageById2**](../Model/AddEmployeeImageById2.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddEmployeeImageById**](../Model/ErrorForAddEmployeeImageById.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCheckAuthenticationPost()`

```php
employeeCheckAuthenticationPost($body): \PeopleHR\Model\CheckAuthenticationResult
```

Check Authentication

This API is used to check authentication for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\CheckAuthentication2(); // \PeopleHR\Model\CheckAuthentication2

try {
    $result = $apiInstance->employeeCheckAuthenticationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeCheckAuthenticationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\CheckAuthentication2**](../Model/CheckAuthentication2.md)|  | |

### Return type

[**\PeopleHR\Model\CheckAuthenticationResult**](../Model/CheckAuthenticationResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCreateNewEmployeePost()`

```php
employeeCreateNewEmployeePost($body): \PeopleHR\Model\ErrorForCreateNewEmployeeDetail
```

Create New Employee

This API is used to create new employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\CreateEmployeeDetailParameter(); // \PeopleHR\Model\CreateEmployeeDetailParameter

try {
    $result = $apiInstance->employeeCreateNewEmployeePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeCreateNewEmployeePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\CreateEmployeeDetailParameter**](../Model/CreateEmployeeDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForCreateNewEmployeeDetail**](../Model/ErrorForCreateNewEmployeeDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeGetAllEmployeeDetailPost()`

```php
employeeGetAllEmployeeDetailPost($body): \PeopleHR\Model\ErrorForGetAllEmployeeDetail
```

Get All Employee Detail

This API is used to get employee detail list. Please note the History fields have been deprecated and will not return any data. To retrieve History data the individual employee record needs to be retrieved using the GetEmployeeDetail method call, this will return the History data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetAllEmployeeDetailParameter(); // \PeopleHR\Model\GetAllEmployeeDetailParameter

try {
    $result = $apiInstance->employeeGetAllEmployeeDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeGetAllEmployeeDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetAllEmployeeDetailParameter**](../Model/GetAllEmployeeDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetAllEmployeeDetail**](../Model/ErrorForGetAllEmployeeDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeGetEmployeeDetailByIdPost()`

```php
employeeGetEmployeeDetailByIdPost($body): \PeopleHR\Model\ErrorForGetEmployeeDetailById
```

Get Employee Detail By Id

This API is used to get employee detail by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetEmployeeDetailByIdParameter(); // \PeopleHR\Model\GetEmployeeDetailByIdParameter

try {
    $result = $apiInstance->employeeGetEmployeeDetailByIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeGetEmployeeDetailByIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetEmployeeDetailByIdParameter**](../Model/GetEmployeeDetailByIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetEmployeeDetailById**](../Model/ErrorForGetEmployeeDetailById.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeMarkAsLeaverByIdPost()`

```php
employeeMarkAsLeaverByIdPost($body): \PeopleHR\Model\ErrorForMarkAsLeaverById
```

Mark As Leaver By Id

This API is used to update/mark employee leaver status by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\MarkAsLeaverById2(); // \PeopleHR\Model\MarkAsLeaverById2

try {
    $result = $apiInstance->employeeMarkAsLeaverByIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeMarkAsLeaverByIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\MarkAsLeaverById2**](../Model/MarkAsLeaverById2.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForMarkAsLeaverById**](../Model/ErrorForMarkAsLeaverById.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeUpdateEmployeeDetailPost()`

```php
employeeUpdateEmployeeDetailPost($body): \PeopleHR\Model\ErrorForUpdateEmployeeDetail
```

Update Employee Details

This API is used to update employee details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateEmployeeDetail3(); // \PeopleHR\Model\UpdateEmployeeDetail3

try {
    $result = $apiInstance->employeeUpdateEmployeeDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeUpdateEmployeeDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateEmployeeDetail3**](../Model/UpdateEmployeeDetail3.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateEmployeeDetail**](../Model/ErrorForUpdateEmployeeDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeUpdateEmployeeIdPost()`

```php
employeeUpdateEmployeeIdPost($body): \PeopleHR\Model\ErrorForUpdateEmployeeId
```

Update Employee Id

This API is used to update employee id details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateEmployeeId2(); // \PeopleHR\Model\UpdateEmployeeId2

try {
    $result = $apiInstance->employeeUpdateEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeUpdateEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateEmployeeId2**](../Model/UpdateEmployeeId2.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateEmployeeId**](../Model/ErrorForUpdateEmployeeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
