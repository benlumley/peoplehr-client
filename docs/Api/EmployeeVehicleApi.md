# PeopleHR\EmployeeVehicleApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeVehicleAddNewVehicleDetailPost()**](EmployeeVehicleApi.md#employeeVehicleAddNewVehicleDetailPost) | **POST** /Employee Vehicle  -  AddNewVehicleDetail | Add New Vehicle Detail |
| [**employeeVehicleDeleteVehicleDetailPost()**](EmployeeVehicleApi.md#employeeVehicleDeleteVehicleDetailPost) | **POST** /Employee Vehicle  -  DeleteVehicleDetail | Delete Vehicle Detail |
| [**employeeVehicleGetByVehicleDetailIdPost()**](EmployeeVehicleApi.md#employeeVehicleGetByVehicleDetailIdPost) | **POST** /Employee Vehicle  -  GetByVehicleDetailId | Get By Vehicle Detail Id |
| [**employeeVehicleGetVehicleByEmployeeIdPost()**](EmployeeVehicleApi.md#employeeVehicleGetVehicleByEmployeeIdPost) | **POST** /Employee Vehicle  -  GetVehicleByEmployeeId | Get Vehicle By Employee Id |
| [**employeeVehicleUpdateVehicleDetailPost()**](EmployeeVehicleApi.md#employeeVehicleUpdateVehicleDetailPost) | **POST** /Employee Vehicle  -  UpdateVehicleDetail | Update Vehicle Detail |


## `employeeVehicleAddNewVehicleDetailPost()`

```php
employeeVehicleAddNewVehicleDetailPost($body): \PeopleHR\Model\ErrorForAddNewVehicleDetail
```

Add New Vehicle Detail

This API is used to create employee's new vehicle detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewVehicleDetailDefinition(); // \PeopleHR\Model\AddNewVehicleDetailDefinition

try {
    $result = $apiInstance->employeeVehicleAddNewVehicleDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeVehicleApi->employeeVehicleAddNewVehicleDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewVehicleDetailDefinition**](../Model/AddNewVehicleDetailDefinition.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewVehicleDetail**](../Model/ErrorForAddNewVehicleDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeVehicleDeleteVehicleDetailPost()`

```php
employeeVehicleDeleteVehicleDetailPost($body): \PeopleHR\Model\ErrorForDeleteVehicleDetail
```

Delete Vehicle Detail

This API is used to delete employee's vehicle detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteVehicleDetailDefinition(); // \PeopleHR\Model\DeleteVehicleDetailDefinition

try {
    $result = $apiInstance->employeeVehicleDeleteVehicleDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeVehicleApi->employeeVehicleDeleteVehicleDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\DeleteVehicleDetailDefinition**](../Model/DeleteVehicleDetailDefinition.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteVehicleDetail**](../Model/ErrorForDeleteVehicleDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeVehicleGetByVehicleDetailIdPost()`

```php
employeeVehicleGetByVehicleDetailIdPost($body): \PeopleHR\Model\ErrorForGetVehicleDetailByVehicleId
```

Get By Vehicle Detail Id

This API is used to get employee's vehicle detail by vehicle id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetVehicleDetailByVehicleIdDefinition(); // \PeopleHR\Model\GetVehicleDetailByVehicleIdDefinition

try {
    $result = $apiInstance->employeeVehicleGetByVehicleDetailIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeVehicleApi->employeeVehicleGetByVehicleDetailIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetVehicleDetailByVehicleIdDefinition**](../Model/GetVehicleDetailByVehicleIdDefinition.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetVehicleDetailByVehicleId**](../Model/ErrorForGetVehicleDetailByVehicleId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeVehicleGetVehicleByEmployeeIdPost()`

```php
employeeVehicleGetVehicleByEmployeeIdPost($body): \PeopleHR\Model\ErrorForGetVehicleDetailByEmployeeId
```

Get Vehicle By Employee Id

This API is used to get employee's vehicle detail by employee id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetVehicleDetailByEmployeeIdDefinition(); // \PeopleHR\Model\GetVehicleDetailByEmployeeIdDefinition

try {
    $result = $apiInstance->employeeVehicleGetVehicleByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeVehicleApi->employeeVehicleGetVehicleByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetVehicleDetailByEmployeeIdDefinition**](../Model/GetVehicleDetailByEmployeeIdDefinition.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetVehicleDetailByEmployeeId**](../Model/ErrorForGetVehicleDetailByEmployeeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeVehicleUpdateVehicleDetailPost()`

```php
employeeVehicleUpdateVehicleDetailPost($body): \PeopleHR\Model\ErrorForUpdateVehicleDetail
```

Update Vehicle Detail

This API is used to update employee's vehicle detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateVehicleDetailDefinition(); // \PeopleHR\Model\UpdateVehicleDetailDefinition

try {
    $result = $apiInstance->employeeVehicleUpdateVehicleDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeVehicleApi->employeeVehicleUpdateVehicleDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateVehicleDetailDefinition**](../Model/UpdateVehicleDetailDefinition.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateVehicleDetail**](../Model/ErrorForUpdateVehicleDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
