# PeopleHR\EmployeeDocumentApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeDocumentGetAllDocumentPost()**](EmployeeDocumentApi.md#employeeDocumentGetAllDocumentPost) | **POST** /EmployeeDocument  -  GetAllDocument | Get All Document |
| [**employeeDocumentGetDocumentByIdPost()**](EmployeeDocumentApi.md#employeeDocumentGetDocumentByIdPost) | **POST** /EmployeeDocument  -  GetDocumentById | Get Document By Id |
| [**employeeDocumentUploadEmployeeDocumentPost()**](EmployeeDocumentApi.md#employeeDocumentUploadEmployeeDocumentPost) | **POST** /EmployeeDocument  -  UploadEmployeeDocument | Upload Employee Document |


## `employeeDocumentGetAllDocumentPost()`

```php
employeeDocumentGetAllDocumentPost($body): \PeopleHR\Model\ErrorForGetAllDocument
```

Get All Document

This API is used to GEt All Document Detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetAllDocumentParameter(); // \PeopleHR\Model\GetAllDocumentParameter

try {
    $result = $apiInstance->employeeDocumentGetAllDocumentPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeDocumentApi->employeeDocumentGetAllDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetAllDocumentParameter**](../Model/GetAllDocumentParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetAllDocument**](../Model/ErrorForGetAllDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeDocumentGetDocumentByIdPost()`

```php
employeeDocumentGetDocumentByIdPost($body): \PeopleHR\Model\ErrorForGetDocumentById
```

Get Document By Id

This API is used to get Document By Id for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetDocumentByIDParameter(); // \PeopleHR\Model\GetDocumentByIDParameter

try {
    $result = $apiInstance->employeeDocumentGetDocumentByIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeDocumentApi->employeeDocumentGetDocumentByIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetDocumentByIDParameter**](../Model/GetDocumentByIDParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetDocumentById**](../Model/ErrorForGetDocumentById.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeDocumentUploadEmployeeDocumentPost()`

```php
employeeDocumentUploadEmployeeDocumentPost($body): \PeopleHR\Model\ErrorForUploadEmployeeDocument
```

Upload Employee Document

This API is used to Upload Employee Document details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UploadEmployeeDocumentParameter(); // \PeopleHR\Model\UploadEmployeeDocumentParameter

try {
    $result = $apiInstance->employeeDocumentUploadEmployeeDocumentPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeDocumentApi->employeeDocumentUploadEmployeeDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UploadEmployeeDocumentParameter**](../Model/UploadEmployeeDocumentParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUploadEmployeeDocument**](../Model/ErrorForUploadEmployeeDocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
