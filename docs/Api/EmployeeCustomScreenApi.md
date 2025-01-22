# PeopleHR\EmployeeCustomScreenApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeCustomScreenAddNewCustomScreenTransactionPost()**](EmployeeCustomScreenApi.md#employeeCustomScreenAddNewCustomScreenTransactionPost) | **POST** /Employee Custom Screen  -  AddNewCustomScreenTransaction | Add New Custom Screen Transaction |
| [**employeeCustomScreenDeleteCustomScreenTransactionPost()**](EmployeeCustomScreenApi.md#employeeCustomScreenDeleteCustomScreenTransactionPost) | **POST** /Employee Custom Screen  -  DeleteCustomScreenTransaction | Delete Custom Screen Transaction |
| [**employeeCustomScreenGetByCustomScreenTransactionIdPost()**](EmployeeCustomScreenApi.md#employeeCustomScreenGetByCustomScreenTransactionIdPost) | **POST** /Employee Custom Screen  -  GetByCustomScreenTransactionId | Get By Custom Screen Transaction Id |
| [**employeeCustomScreenGetCustomScreenByEmployeeIdPost()**](EmployeeCustomScreenApi.md#employeeCustomScreenGetCustomScreenByEmployeeIdPost) | **POST** /Employee Custom Screen  -  GetCustomScreenByEmployeeId | Get Custom Screen By Employee Id |
| [**employeeCustomScreenGetCustomScreenDetailPost()**](EmployeeCustomScreenApi.md#employeeCustomScreenGetCustomScreenDetailPost) | **POST** /Employee Custom Screen  -  GetCustomScreenDetail | Get Custom Screen Detail |
| [**employeeCustomScreenUpdateCustomScreenTransactionPost()**](EmployeeCustomScreenApi.md#employeeCustomScreenUpdateCustomScreenTransactionPost) | **POST** /Employee Custom Screen  -  UpdateCustomScreenTransaction | Update Custom Screen Transaction |


## `employeeCustomScreenAddNewCustomScreenTransactionPost()`

```php
employeeCustomScreenAddNewCustomScreenTransactionPost($body): \PeopleHR\Model\ErrorForAddNewCustomScreenTransaction
```

Add New Custom Screen Transaction

This API is used to add new custom screen transaction details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewCustomScreenTransactionParameter(); // \PeopleHR\Model\AddNewCustomScreenTransactionParameter

try {
    $result = $apiInstance->employeeCustomScreenAddNewCustomScreenTransactionPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCustomScreenApi->employeeCustomScreenAddNewCustomScreenTransactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewCustomScreenTransactionParameter**](../Model/AddNewCustomScreenTransactionParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewCustomScreenTransaction**](../Model/ErrorForAddNewCustomScreenTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCustomScreenDeleteCustomScreenTransactionPost()`

```php
employeeCustomScreenDeleteCustomScreenTransactionPost($body): \PeopleHR\Model\ErrorForDeleteCustomScreenTransaction
```

Delete Custom Screen Transaction

This API is used to delete custom screen transaction details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteCustomScreenTransactionParameter(); // \PeopleHR\Model\DeleteCustomScreenTransactionParameter

try {
    $result = $apiInstance->employeeCustomScreenDeleteCustomScreenTransactionPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCustomScreenApi->employeeCustomScreenDeleteCustomScreenTransactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\DeleteCustomScreenTransactionParameter**](../Model/DeleteCustomScreenTransactionParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteCustomScreenTransaction**](../Model/ErrorForDeleteCustomScreenTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCustomScreenGetByCustomScreenTransactionIdPost()`

```php
employeeCustomScreenGetByCustomScreenTransactionIdPost($body): \PeopleHR\Model\ErrorForGetByCustomScreenTransactionId
```

Get By Custom Screen Transaction Id

This API is used to get by custom screen transaction id detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetByCustomScreenTransactionIdParameter(); // \PeopleHR\Model\GetByCustomScreenTransactionIdParameter

try {
    $result = $apiInstance->employeeCustomScreenGetByCustomScreenTransactionIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCustomScreenApi->employeeCustomScreenGetByCustomScreenTransactionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetByCustomScreenTransactionIdParameter**](../Model/GetByCustomScreenTransactionIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetByCustomScreenTransactionId**](../Model/ErrorForGetByCustomScreenTransactionId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCustomScreenGetCustomScreenByEmployeeIdPost()`

```php
employeeCustomScreenGetCustomScreenByEmployeeIdPost($body): \PeopleHR\Model\ErrorForGetCustomScreenByEmployeeId
```

Get Custom Screen By Employee Id

This API is used to get custom screen by employee id detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetCustomScreenByEmployeeIdParameter(); // \PeopleHR\Model\GetCustomScreenByEmployeeIdParameter

try {
    $result = $apiInstance->employeeCustomScreenGetCustomScreenByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCustomScreenApi->employeeCustomScreenGetCustomScreenByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetCustomScreenByEmployeeIdParameter**](../Model/GetCustomScreenByEmployeeIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetCustomScreenByEmployeeId**](../Model/ErrorForGetCustomScreenByEmployeeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCustomScreenGetCustomScreenDetailPost()`

```php
employeeCustomScreenGetCustomScreenDetailPost($body): \PeopleHR\Model\ErrorForGetCustomScreenDetail
```

Get Custom Screen Detail

This API is used to get custom screen details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetCustomScreenDetailParameter(); // \PeopleHR\Model\GetCustomScreenDetailParameter

try {
    $result = $apiInstance->employeeCustomScreenGetCustomScreenDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCustomScreenApi->employeeCustomScreenGetCustomScreenDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetCustomScreenDetailParameter**](../Model/GetCustomScreenDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetCustomScreenDetail**](../Model/ErrorForGetCustomScreenDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCustomScreenUpdateCustomScreenTransactionPost()`

```php
employeeCustomScreenUpdateCustomScreenTransactionPost($body): \PeopleHR\Model\ErrorForUpdateCustomScreenTransaction
```

Update Custom Screen Transaction

This API is used to update custom screen transaction details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateCustomScreenTransactionParameter(); // \PeopleHR\Model\UpdateCustomScreenTransactionParameter

try {
    $result = $apiInstance->employeeCustomScreenUpdateCustomScreenTransactionPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCustomScreenApi->employeeCustomScreenUpdateCustomScreenTransactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateCustomScreenTransactionParameter**](../Model/UpdateCustomScreenTransactionParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateCustomScreenTransaction**](../Model/ErrorForUpdateCustomScreenTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
