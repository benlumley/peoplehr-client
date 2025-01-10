# OpenAPI\Client\EmployeeVehicleApi

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
employeeVehicleAddNewVehicleDetailPost($body): \OpenAPI\Client\Model\ErrorForAddNewVehicleDetail
```

Add New Vehicle Detail

This API is used to create employee's new vehicle detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewVehicleDetailDefinition(); // \OpenAPI\Client\Model\AddNewVehicleDetailDefinition

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
| **body** | [**\OpenAPI\Client\Model\AddNewVehicleDetailDefinition**](../Model/AddNewVehicleDetailDefinition.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewVehicleDetail**](../Model/ErrorForAddNewVehicleDetail.md)

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
employeeVehicleDeleteVehicleDetailPost($body): \OpenAPI\Client\Model\ErrorForDeleteVehicleDetail
```

Delete Vehicle Detail

This API is used to delete employee's vehicle detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteVehicleDetailDefinition(); // \OpenAPI\Client\Model\DeleteVehicleDetailDefinition

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
| **body** | [**\OpenAPI\Client\Model\DeleteVehicleDetailDefinition**](../Model/DeleteVehicleDetailDefinition.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteVehicleDetail**](../Model/ErrorForDeleteVehicleDetail.md)

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
employeeVehicleGetByVehicleDetailIdPost($body): \OpenAPI\Client\Model\ErrorForGetVehicleDetailByVehicleId
```

Get By Vehicle Detail Id

This API is used to get employee's vehicle detail by vehicle id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetVehicleDetailByVehicleIdDefinition(); // \OpenAPI\Client\Model\GetVehicleDetailByVehicleIdDefinition

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
| **body** | [**\OpenAPI\Client\Model\GetVehicleDetailByVehicleIdDefinition**](../Model/GetVehicleDetailByVehicleIdDefinition.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetVehicleDetailByVehicleId**](../Model/ErrorForGetVehicleDetailByVehicleId.md)

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
employeeVehicleGetVehicleByEmployeeIdPost($body): \OpenAPI\Client\Model\ErrorForGetVehicleDetailByEmployeeId
```

Get Vehicle By Employee Id

This API is used to get employee's vehicle detail by employee id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetVehicleDetailByEmployeeIdDefinition(); // \OpenAPI\Client\Model\GetVehicleDetailByEmployeeIdDefinition

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
| **body** | [**\OpenAPI\Client\Model\GetVehicleDetailByEmployeeIdDefinition**](../Model/GetVehicleDetailByEmployeeIdDefinition.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetVehicleDetailByEmployeeId**](../Model/ErrorForGetVehicleDetailByEmployeeId.md)

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
employeeVehicleUpdateVehicleDetailPost($body): \OpenAPI\Client\Model\ErrorForUpdateVehicleDetail
```

Update Vehicle Detail

This API is used to update employee's vehicle detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeVehicleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateVehicleDetailDefinition(); // \OpenAPI\Client\Model\UpdateVehicleDetailDefinition

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
| **body** | [**\OpenAPI\Client\Model\UpdateVehicleDetailDefinition**](../Model/UpdateVehicleDetailDefinition.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateVehicleDetail**](../Model/ErrorForUpdateVehicleDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
