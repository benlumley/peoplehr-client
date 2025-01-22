# PeopleHR\EmployeeAbsenceApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeAbsenceAddAbsencePost()**](EmployeeAbsenceApi.md#employeeAbsenceAddAbsencePost) | **POST** /EmployeeAbsence  -  AddAbsence | Add Absence |
| [**employeeAbsenceDeleteAbsencePost()**](EmployeeAbsenceApi.md#employeeAbsenceDeleteAbsencePost) | **POST** /EmployeeAbsence  -  DeleteAbsence | Delete Absence |
| [**employeeAbsenceGetAbsenceDetailPost()**](EmployeeAbsenceApi.md#employeeAbsenceGetAbsenceDetailPost) | **POST** /EmployeeAbsence  -  GetAbsenceDetail | Get Absence Detail |
| [**employeeAbsenceUpdateAbsencePost()**](EmployeeAbsenceApi.md#employeeAbsenceUpdateAbsencePost) | **POST** /EmployeeAbsence  -  UpdateAbsence | Update Absence |


## `employeeAbsenceAddAbsencePost()`

```php
employeeAbsenceAddAbsencePost($body): \PeopleHR\Model\ErrorForAddEmployeeAbsence
```

Add Absence

This API is used to add absence for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddAbsenceOfEmployeeParameter(); // \PeopleHR\Model\AddAbsenceOfEmployeeParameter

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
| **body** | [**\PeopleHR\Model\AddAbsenceOfEmployeeParameter**](../Model/AddAbsenceOfEmployeeParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddEmployeeAbsence**](../Model/ErrorForAddEmployeeAbsence.md)

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
employeeAbsenceDeleteAbsencePost($body): \PeopleHR\Model\ErrorForEmployeeAbsenceDelete
```

Delete Absence

This API is used to delete absence  for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteAbsenceOfEmployeeParameter(); // \PeopleHR\Model\DeleteAbsenceOfEmployeeParameter

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
| **body** | [**\PeopleHR\Model\DeleteAbsenceOfEmployeeParameter**](../Model/DeleteAbsenceOfEmployeeParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForEmployeeAbsenceDelete**](../Model/ErrorForEmployeeAbsenceDelete.md)

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
employeeAbsenceGetAbsenceDetailPost($body): \PeopleHR\Model\ErrorForGetAbsenceDetail
```

Get Absence Detail

This API is used to employee absence details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetAbsenceDetailParameter(); // \PeopleHR\Model\GetAbsenceDetailParameter

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
| **body** | [**\PeopleHR\Model\GetAbsenceDetailParameter**](../Model/GetAbsenceDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetAbsenceDetail**](../Model/ErrorForGetAbsenceDetail.md)

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
employeeAbsenceUpdateAbsencePost($body): \PeopleHR\Model\ErrorForUpdateAbsenceDetails
```

Update Absence

This API is used to update absence  for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateAbsenceDetailParameter(); // \PeopleHR\Model\UpdateAbsenceDetailParameter

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
| **body** | [**\PeopleHR\Model\UpdateAbsenceDetailParameter**](../Model/UpdateAbsenceDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateAbsenceDetails**](../Model/ErrorForUpdateAbsenceDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
