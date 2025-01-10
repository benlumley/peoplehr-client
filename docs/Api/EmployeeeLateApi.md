# OpenAPI\Client\EmployeeeLateApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeeLateAddNewLatePost()**](EmployeeeLateApi.md#employeeeLateAddNewLatePost) | **POST** /Employeee Late  -  AddNewLate | Add new late |
| [**employeeeLateDeleteLatePost()**](EmployeeeLateApi.md#employeeeLateDeleteLatePost) | **POST** /Employeee Late  -  DeleteLate | Delete Late |
| [**employeeeLateGetLateByEmployeeIdPost()**](EmployeeeLateApi.md#employeeeLateGetLateByEmployeeIdPost) | **POST** /Employeee Late  -  GetLateByEmployeeId | Get late by employeeId |
| [**employeeeLateUpdateLatePost()**](EmployeeeLateApi.md#employeeeLateUpdateLatePost) | **POST** /Employeee Late  -  UpdateLate | Update Late |


## `employeeeLateAddNewLatePost()`

```php
employeeeLateAddNewLatePost($body): \OpenAPI\Client\Model\ErrorForAddNewLate
```

Add new late

This API is used for add new late

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeeLateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewLateParameters(); // \OpenAPI\Client\Model\AddNewLateParameters

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
| **body** | [**\OpenAPI\Client\Model\AddNewLateParameters**](../Model/AddNewLateParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewLate**](../Model/ErrorForAddNewLate.md)

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
employeeeLateDeleteLatePost($body): \OpenAPI\Client\Model\ErrorFordeletelate
```

Delete Late

This API is used to delete late

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeeLateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\EmployeedeletelateParameter(); // \OpenAPI\Client\Model\EmployeedeletelateParameter

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
| **body** | [**\OpenAPI\Client\Model\EmployeedeletelateParameter**](../Model/EmployeedeletelateParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorFordeletelate**](../Model/ErrorFordeletelate.md)

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
employeeeLateGetLateByEmployeeIdPost($body): \OpenAPI\Client\Model\ErrorForGetLateByEmployeeId
```

Get late by employeeId

This API is used for get late by employeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeeLateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetLateByEmployeeIdParameter(); // \OpenAPI\Client\Model\GetLateByEmployeeIdParameter

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
| **body** | [**\OpenAPI\Client\Model\GetLateByEmployeeIdParameter**](../Model/GetLateByEmployeeIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetLateByEmployeeId**](../Model/ErrorForGetLateByEmployeeId.md)

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
employeeeLateUpdateLatePost($body): \OpenAPI\Client\Model\ErrorForUpadteLate
```

Update Late

This API is used for update late

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeeLateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateLateParameters(); // \OpenAPI\Client\Model\UpdateLateParameters

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
| **body** | [**\OpenAPI\Client\Model\UpdateLateParameters**](../Model/UpdateLateParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpadteLate**](../Model/ErrorForUpadteLate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
