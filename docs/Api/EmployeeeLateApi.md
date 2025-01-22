# PeopleHR\EmployeeeLateApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeeLateAddNewLatePost()**](EmployeeeLateApi.md#employeeeLateAddNewLatePost) | **POST** /Employeee Late  -  AddNewLate | Add new late |
| [**employeeeLateDeleteLatePost()**](EmployeeeLateApi.md#employeeeLateDeleteLatePost) | **POST** /Employeee Late  -  DeleteLate | Delete Late |
| [**employeeeLateGetLateByEmployeeIdPost()**](EmployeeeLateApi.md#employeeeLateGetLateByEmployeeIdPost) | **POST** /Employeee Late  -  GetLateByEmployeeId | Get late by employeeId |
| [**employeeeLateUpdateLatePost()**](EmployeeeLateApi.md#employeeeLateUpdateLatePost) | **POST** /Employeee Late  -  UpdateLate | Update Late |


## `employeeeLateAddNewLatePost()`

```php
employeeeLateAddNewLatePost($body): \PeopleHR\Model\ErrorForAddNewLate
```

Add new late

This API is used for add new late

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeeLateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewLateParameters(); // \PeopleHR\Model\AddNewLateParameters

try {
    $result = $apiInstance->employeeeLateAddNewLatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeeLateApi->employeeeLateAddNewLatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewLateParameters**](../Model/AddNewLateParameters.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewLate**](../Model/ErrorForAddNewLate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeeLateDeleteLatePost()`

```php
employeeeLateDeleteLatePost($body): \PeopleHR\Model\ErrorFordeletelate
```

Delete Late

This API is used to delete late

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeeLateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\EmployeedeletelateParameter(); // \PeopleHR\Model\EmployeedeletelateParameter

try {
    $result = $apiInstance->employeeeLateDeleteLatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeeLateApi->employeeeLateDeleteLatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\EmployeedeletelateParameter**](../Model/EmployeedeletelateParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorFordeletelate**](../Model/ErrorFordeletelate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeeLateGetLateByEmployeeIdPost()`

```php
employeeeLateGetLateByEmployeeIdPost($body): \PeopleHR\Model\ErrorForGetLateByEmployeeId
```

Get late by employeeId

This API is used for get late by employeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeeLateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetLateByEmployeeIdParameter(); // \PeopleHR\Model\GetLateByEmployeeIdParameter

try {
    $result = $apiInstance->employeeeLateGetLateByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeeLateApi->employeeeLateGetLateByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetLateByEmployeeIdParameter**](../Model/GetLateByEmployeeIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetLateByEmployeeId**](../Model/ErrorForGetLateByEmployeeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeeLateUpdateLatePost()`

```php
employeeeLateUpdateLatePost($body): \PeopleHR\Model\ErrorForUpadteLate
```

Update Late

This API is used for update late

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeeLateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateLateParameters(); // \PeopleHR\Model\UpdateLateParameters

try {
    $result = $apiInstance->employeeeLateUpdateLatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeeLateApi->employeeeLateUpdateLatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateLateParameters**](../Model/UpdateLateParameters.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpadteLate**](../Model/ErrorForUpadteLate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
