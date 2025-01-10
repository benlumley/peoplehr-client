# OpenAPI\Client\EmployeeAbsenceApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeAbsenceAddAbsencePost()**](EmployeeAbsenceApi.md#employeeAbsenceAddAbsencePost) | **POST** /EmployeeAbsence  -  AddAbsence | Add Absence |
| [**employeeAbsenceDeleteAbsencePost()**](EmployeeAbsenceApi.md#employeeAbsenceDeleteAbsencePost) | **POST** /EmployeeAbsence  -  DeleteAbsence | Delete Absence |
| [**employeeAbsenceGetAbsenceDetailPost()**](EmployeeAbsenceApi.md#employeeAbsenceGetAbsenceDetailPost) | **POST** /EmployeeAbsence  -  GetAbsenceDetail | Get Absence Detail |
| [**employeeAbsenceUpdateAbsencePost()**](EmployeeAbsenceApi.md#employeeAbsenceUpdateAbsencePost) | **POST** /EmployeeAbsence  -  UpdateAbsence | Update Absence |


## `employeeAbsenceAddAbsencePost()`

```php
employeeAbsenceAddAbsencePost($body): \OpenAPI\Client\Model\ErrorForAddEmployeeAbsence
```

Add Absence

This API is used to add absence for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddAbsenceOfEmployeeParameter(); // \OpenAPI\Client\Model\AddAbsenceOfEmployeeParameter

try {
    $result = $apiInstance->employeeAbsenceAddAbsencePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAbsenceApi->employeeAbsenceAddAbsencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AddAbsenceOfEmployeeParameter**](../Model/AddAbsenceOfEmployeeParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddEmployeeAbsence**](../Model/ErrorForAddEmployeeAbsence.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeAbsenceDeleteAbsencePost()`

```php
employeeAbsenceDeleteAbsencePost($body): \OpenAPI\Client\Model\ErrorForEmployeeAbsenceDelete
```

Delete Absence

This API is used to delete absence  for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteAbsenceOfEmployeeParameter(); // \OpenAPI\Client\Model\DeleteAbsenceOfEmployeeParameter

try {
    $result = $apiInstance->employeeAbsenceDeleteAbsencePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAbsenceApi->employeeAbsenceDeleteAbsencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DeleteAbsenceOfEmployeeParameter**](../Model/DeleteAbsenceOfEmployeeParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForEmployeeAbsenceDelete**](../Model/ErrorForEmployeeAbsenceDelete.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeAbsenceGetAbsenceDetailPost()`

```php
employeeAbsenceGetAbsenceDetailPost($body): \OpenAPI\Client\Model\ErrorForGetAbsenceDetail
```

Get Absence Detail

This API is used to employee absence details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetAbsenceDetailParameter(); // \OpenAPI\Client\Model\GetAbsenceDetailParameter

try {
    $result = $apiInstance->employeeAbsenceGetAbsenceDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAbsenceApi->employeeAbsenceGetAbsenceDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetAbsenceDetailParameter**](../Model/GetAbsenceDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetAbsenceDetail**](../Model/ErrorForGetAbsenceDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeAbsenceUpdateAbsencePost()`

```php
employeeAbsenceUpdateAbsencePost($body): \OpenAPI\Client\Model\ErrorForUpdateAbsenceDetails
```

Update Absence

This API is used to update absence  for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateAbsenceDetailParameter(); // \OpenAPI\Client\Model\UpdateAbsenceDetailParameter

try {
    $result = $apiInstance->employeeAbsenceUpdateAbsencePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAbsenceApi->employeeAbsenceUpdateAbsencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateAbsenceDetailParameter**](../Model/UpdateAbsenceDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateAbsenceDetails**](../Model/ErrorForUpdateAbsenceDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
