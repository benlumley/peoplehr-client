# OpenAPI\Client\EmployeeDrivingApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeDrivingAddNewDrivingLicensePost()**](EmployeeDrivingApi.md#employeeDrivingAddNewDrivingLicensePost) | **POST** /Employee Driving  -  AddNewDrivingLicense | Add New Driving License |
| [**employeeDrivingDeleteDrivingLicensePost()**](EmployeeDrivingApi.md#employeeDrivingDeleteDrivingLicensePost) | **POST** /Employee Driving  -  DeleteDrivingLicense | Delete Driving License |
| [**employeeDrivingGetDrivingLicenseByDrivingIdPost()**](EmployeeDrivingApi.md#employeeDrivingGetDrivingLicenseByDrivingIdPost) | **POST** /Employee Driving  -  GetDrivingLicenseByDrivingId | Get Driving License By Driving Id |
| [**employeeDrivingGetDrivingLicenseByEmployeeIdPost()**](EmployeeDrivingApi.md#employeeDrivingGetDrivingLicenseByEmployeeIdPost) | **POST** /Employee Driving  -  GetDrivingLicenseByEmployeeId | Get Driving License By Employee Id |
| [**employeeDrivingUpdateDrivingLicensePost()**](EmployeeDrivingApi.md#employeeDrivingUpdateDrivingLicensePost) | **POST** /Employee Driving  -  UpdateDrivingLicense | Update Driving License |


## `employeeDrivingAddNewDrivingLicensePost()`

```php
employeeDrivingAddNewDrivingLicensePost($body): \OpenAPI\Client\Model\ErrorForAddNewDrivingLicense
```

Add New Driving License

This API is used to Add new driving license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeDrivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewDrivingLicenseParameter(); // \OpenAPI\Client\Model\AddNewDrivingLicenseParameter

try {
    $result = $apiInstance->employeeDrivingAddNewDrivingLicensePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeDrivingApi->employeeDrivingAddNewDrivingLicensePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AddNewDrivingLicenseParameter**](../Model/AddNewDrivingLicenseParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewDrivingLicense**](../Model/ErrorForAddNewDrivingLicense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeDrivingDeleteDrivingLicensePost()`

```php
employeeDrivingDeleteDrivingLicensePost($body): \OpenAPI\Client\Model\ErrorForDeleteDrivingLicense
```

Delete Driving License

This API is used to delete driving license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeDrivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteDrivingLicenseParameter(); // \OpenAPI\Client\Model\DeleteDrivingLicenseParameter

try {
    $result = $apiInstance->employeeDrivingDeleteDrivingLicensePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeDrivingApi->employeeDrivingDeleteDrivingLicensePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DeleteDrivingLicenseParameter**](../Model/DeleteDrivingLicenseParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteDrivingLicense**](../Model/ErrorForDeleteDrivingLicense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeDrivingGetDrivingLicenseByDrivingIdPost()`

```php
employeeDrivingGetDrivingLicenseByDrivingIdPost($body): \OpenAPI\Client\Model\ErrorForGetDrivingLicenseByDrivingId
```

Get Driving License By Driving Id

This API is used to get driving license by drivingId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeDrivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetDrivingLicenseByDrivingIdParameter(); // \OpenAPI\Client\Model\GetDrivingLicenseByDrivingIdParameter

try {
    $result = $apiInstance->employeeDrivingGetDrivingLicenseByDrivingIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeDrivingApi->employeeDrivingGetDrivingLicenseByDrivingIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetDrivingLicenseByDrivingIdParameter**](../Model/GetDrivingLicenseByDrivingIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetDrivingLicenseByDrivingId**](../Model/ErrorForGetDrivingLicenseByDrivingId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeDrivingGetDrivingLicenseByEmployeeIdPost()`

```php
employeeDrivingGetDrivingLicenseByEmployeeIdPost($body): \OpenAPI\Client\Model\ErrorForGetDrivingLicenseByEmployeeId
```

Get Driving License By Employee Id

This API is used to get driving license by employeeid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeDrivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetDrivingLicenseByEmployeeIdParameter(); // \OpenAPI\Client\Model\GetDrivingLicenseByEmployeeIdParameter

try {
    $result = $apiInstance->employeeDrivingGetDrivingLicenseByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeDrivingApi->employeeDrivingGetDrivingLicenseByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetDrivingLicenseByEmployeeIdParameter**](../Model/GetDrivingLicenseByEmployeeIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetDrivingLicenseByEmployeeId**](../Model/ErrorForGetDrivingLicenseByEmployeeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeDrivingUpdateDrivingLicensePost()`

```php
employeeDrivingUpdateDrivingLicensePost($body): \OpenAPI\Client\Model\ErrorForUpdateDrivingLicense
```

Update Driving License

This API is used to update driving license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeDrivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateDrivingLicenseParameter(); // \OpenAPI\Client\Model\UpdateDrivingLicenseParameter

try {
    $result = $apiInstance->employeeDrivingUpdateDrivingLicensePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeDrivingApi->employeeDrivingUpdateDrivingLicensePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateDrivingLicenseParameter**](../Model/UpdateDrivingLicenseParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateDrivingLicense**](../Model/ErrorForUpdateDrivingLicense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
