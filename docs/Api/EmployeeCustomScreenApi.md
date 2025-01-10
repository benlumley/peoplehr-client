# OpenAPI\Client\EmployeeCustomScreenApi

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
employeeCustomScreenAddNewCustomScreenTransactionPost($body): \OpenAPI\Client\Model\ErrorForAddNewCustomScreenTransaction
```

Add New Custom Screen Transaction

This API is used to add new custom screen transaction details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewCustomScreenTransactionParameter(); // \OpenAPI\Client\Model\AddNewCustomScreenTransactionParameter

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
| **body** | [**\OpenAPI\Client\Model\AddNewCustomScreenTransactionParameter**](../Model/AddNewCustomScreenTransactionParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewCustomScreenTransaction**](../Model/ErrorForAddNewCustomScreenTransaction.md)

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
employeeCustomScreenDeleteCustomScreenTransactionPost($body): \OpenAPI\Client\Model\ErrorForDeleteCustomScreenTransaction
```

Delete Custom Screen Transaction

This API is used to delete custom screen transaction details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteCustomScreenTransactionParameter(); // \OpenAPI\Client\Model\DeleteCustomScreenTransactionParameter

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
| **body** | [**\OpenAPI\Client\Model\DeleteCustomScreenTransactionParameter**](../Model/DeleteCustomScreenTransactionParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteCustomScreenTransaction**](../Model/ErrorForDeleteCustomScreenTransaction.md)

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
employeeCustomScreenGetByCustomScreenTransactionIdPost($body): \OpenAPI\Client\Model\ErrorForGetByCustomScreenTransactionId
```

Get By Custom Screen Transaction Id

This API is used to get by custom screen transaction id detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetByCustomScreenTransactionIdParameter(); // \OpenAPI\Client\Model\GetByCustomScreenTransactionIdParameter

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
| **body** | [**\OpenAPI\Client\Model\GetByCustomScreenTransactionIdParameter**](../Model/GetByCustomScreenTransactionIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetByCustomScreenTransactionId**](../Model/ErrorForGetByCustomScreenTransactionId.md)

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
employeeCustomScreenGetCustomScreenByEmployeeIdPost($body): \OpenAPI\Client\Model\ErrorForGetCustomScreenByEmployeeId
```

Get Custom Screen By Employee Id

This API is used to get custom screen by employee id detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetCustomScreenByEmployeeIdParameter(); // \OpenAPI\Client\Model\GetCustomScreenByEmployeeIdParameter

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
| **body** | [**\OpenAPI\Client\Model\GetCustomScreenByEmployeeIdParameter**](../Model/GetCustomScreenByEmployeeIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetCustomScreenByEmployeeId**](../Model/ErrorForGetCustomScreenByEmployeeId.md)

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
employeeCustomScreenGetCustomScreenDetailPost($body): \OpenAPI\Client\Model\ErrorForGetCustomScreenDetail
```

Get Custom Screen Detail

This API is used to get custom screen details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetCustomScreenDetailParameter(); // \OpenAPI\Client\Model\GetCustomScreenDetailParameter

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
| **body** | [**\OpenAPI\Client\Model\GetCustomScreenDetailParameter**](../Model/GetCustomScreenDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetCustomScreenDetail**](../Model/ErrorForGetCustomScreenDetail.md)

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
employeeCustomScreenUpdateCustomScreenTransactionPost($body): \OpenAPI\Client\Model\ErrorForUpdateCustomScreenTransaction
```

Update Custom Screen Transaction

This API is used to update custom screen transaction details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeCustomScreenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateCustomScreenTransactionParameter(); // \OpenAPI\Client\Model\UpdateCustomScreenTransactionParameter

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
| **body** | [**\OpenAPI\Client\Model\UpdateCustomScreenTransactionParameter**](../Model/UpdateCustomScreenTransactionParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateCustomScreenTransaction**](../Model/ErrorForUpdateCustomScreenTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
