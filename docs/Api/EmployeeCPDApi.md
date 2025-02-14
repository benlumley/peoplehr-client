# PeopleHR\EmployeeCPDApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeCPDAddNewCPDPost()**](EmployeeCPDApi.md#employeeCPDAddNewCPDPost) | **POST** /Employee CPD  -  AddNewCPD | Add new CPD |
| [**employeeCPDDeleteCPDPost()**](EmployeeCPDApi.md#employeeCPDDeleteCPDPost) | **POST** /Employee CPD  -  DeleteCPD | Delete CPD |
| [**employeeCPDGetByCPDIdPost()**](EmployeeCPDApi.md#employeeCPDGetByCPDIdPost) | **POST** /Employee CPD  -  GetByCPDId | Get By CPDId |
| [**employeeCPDGetCPDByEmployeeIdPost()**](EmployeeCPDApi.md#employeeCPDGetCPDByEmployeeIdPost) | **POST** /Employee CPD  -  GetCPDByEmployeeId | Get CPD By EmployeeId |
| [**employeeCPDUpdateCPDPost()**](EmployeeCPDApi.md#employeeCPDUpdateCPDPost) | **POST** /Employee CPD  -  UpdateCPD | Update CPD |


## `employeeCPDAddNewCPDPost()`

```php
employeeCPDAddNewCPDPost($body): \PeopleHR\Model\ErrorForAddNewCPD
```

Add new CPD

This API is used to add new CPD for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCPDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddnewCPDParameter(); // \PeopleHR\Model\AddnewCPDParameter

try {
    $result = $apiInstance->employeeCPDAddNewCPDPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCPDApi->employeeCPDAddNewCPDPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddnewCPDParameter**](../Model/AddnewCPDParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewCPD**](../Model/ErrorForAddNewCPD.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCPDDeleteCPDPost()`

```php
employeeCPDDeleteCPDPost($body): \PeopleHR\Model\ErrorForDeleteCPD
```

Delete CPD

This API is used to delete CPD for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCPDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteCPDParameter(); // \PeopleHR\Model\DeleteCPDParameter

try {
    $result = $apiInstance->employeeCPDDeleteCPDPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCPDApi->employeeCPDDeleteCPDPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\DeleteCPDParameter**](../Model/DeleteCPDParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteCPD**](../Model/ErrorForDeleteCPD.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCPDGetByCPDIdPost()`

```php
employeeCPDGetByCPDIdPost($body): \PeopleHR\Model\ErrorForGetByCPDId
```

Get By CPDId

This API is used to Get By CPDId for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCPDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetByCPDIdParameter(); // \PeopleHR\Model\GetByCPDIdParameter

try {
    $result = $apiInstance->employeeCPDGetByCPDIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCPDApi->employeeCPDGetByCPDIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetByCPDIdParameter**](../Model/GetByCPDIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetByCPDId**](../Model/ErrorForGetByCPDId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCPDGetCPDByEmployeeIdPost()`

```php
employeeCPDGetCPDByEmployeeIdPost($body): \PeopleHR\Model\ErrorForGetCPDByEmployeeId
```

Get CPD By EmployeeId

This API is used to Get CPD By EmployeeId for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCPDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetCPDByEmployeeIdParameter(); // \PeopleHR\Model\GetCPDByEmployeeIdParameter

try {
    $result = $apiInstance->employeeCPDGetCPDByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCPDApi->employeeCPDGetCPDByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetCPDByEmployeeIdParameter**](../Model/GetCPDByEmployeeIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetCPDByEmployeeId**](../Model/ErrorForGetCPDByEmployeeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCPDUpdateCPDPost()`

```php
employeeCPDUpdateCPDPost($body): \PeopleHR\Model\ErrorForUpdateCPD
```

Update CPD

This API is used to update CPD for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeCPDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateCPDParameter(); // \PeopleHR\Model\UpdateCPDParameter

try {
    $result = $apiInstance->employeeCPDUpdateCPDPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeCPDApi->employeeCPDUpdateCPDPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateCPDParameter**](../Model/UpdateCPDParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateCPD**](../Model/ErrorForUpdateCPD.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
