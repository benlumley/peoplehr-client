# PeopleHR\EmployeeTrainingApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeTrainingAddtrainingdetailPost()**](EmployeeTrainingApi.md#employeeTrainingAddtrainingdetailPost) | **POST** /Employee Training  -  addtrainingdetail | Add Training Detail |
| [**employeeTrainingDeletetrainingdetailPost()**](EmployeeTrainingApi.md#employeeTrainingDeletetrainingdetailPost) | **POST** /Employee Training  -  deletetrainingdetail | Delete Training Detail |
| [**employeeTrainingGetTrainingDetailPost()**](EmployeeTrainingApi.md#employeeTrainingGetTrainingDetailPost) | **POST** /Employee Training  -  GetTrainingDetail | Get Training Detail |
| [**employeeTrainingUpdatetrainingdetailPost()**](EmployeeTrainingApi.md#employeeTrainingUpdatetrainingdetailPost) | **POST** /Employee Training  -  updatetrainingdetail | Update Training Detail |


## `employeeTrainingAddtrainingdetailPost()`

```php
employeeTrainingAddtrainingdetailPost($body): \PeopleHR\Model\ErrorForAddTrainingDetail
```

Add Training Detail

This API is used to Add Training Detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeTrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddTrainingDetailParameter(); // \PeopleHR\Model\AddTrainingDetailParameter

try {
    $result = $apiInstance->employeeTrainingAddtrainingdetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeTrainingApi->employeeTrainingAddtrainingdetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddTrainingDetailParameter**](../Model/AddTrainingDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddTrainingDetail**](../Model/ErrorForAddTrainingDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeTrainingDeletetrainingdetailPost()`

```php
employeeTrainingDeletetrainingdetailPost($body): \PeopleHR\Model\ErrorFordeletetrainingdetail
```

Delete Training Detail

This API is used to delete training detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeTrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteTrainingDetailParameter(); // \PeopleHR\Model\DeleteTrainingDetailParameter

try {
    $result = $apiInstance->employeeTrainingDeletetrainingdetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeTrainingApi->employeeTrainingDeletetrainingdetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\DeleteTrainingDetailParameter**](../Model/DeleteTrainingDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorFordeletetrainingdetail**](../Model/ErrorFordeletetrainingdetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeTrainingGetTrainingDetailPost()`

```php
employeeTrainingGetTrainingDetailPost($body): \PeopleHR\Model\ErrorForGetTrainingDetail
```

Get Training Detail

This API is used to Get  training detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeTrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetTrainingDetailParameter(); // \PeopleHR\Model\GetTrainingDetailParameter

try {
    $result = $apiInstance->employeeTrainingGetTrainingDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeTrainingApi->employeeTrainingGetTrainingDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetTrainingDetailParameter**](../Model/GetTrainingDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetTrainingDetail**](../Model/ErrorForGetTrainingDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeTrainingUpdatetrainingdetailPost()`

```php
employeeTrainingUpdatetrainingdetailPost($body): \PeopleHR\Model\ErrorForUpdateTrainingDetail
```

Update Training Detail

This API is used to update training detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeTrainingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateTrainingDetailParameter(); // \PeopleHR\Model\UpdateTrainingDetailParameter

try {
    $result = $apiInstance->employeeTrainingUpdatetrainingdetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeTrainingApi->employeeTrainingUpdatetrainingdetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateTrainingDetailParameter**](../Model/UpdateTrainingDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateTrainingDetail**](../Model/ErrorForUpdateTrainingDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
