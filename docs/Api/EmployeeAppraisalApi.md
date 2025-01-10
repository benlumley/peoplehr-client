# OpenAPI\Client\EmployeeAppraisalApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeAppraisalAddNewAppraisalPost()**](EmployeeAppraisalApi.md#employeeAppraisalAddNewAppraisalPost) | **POST** /EmployeeAppraisal  -  AddNewAppraisal | Add New Appraisal |
| [**employeeAppraisalDeleteAppraisalPost()**](EmployeeAppraisalApi.md#employeeAppraisalDeleteAppraisalPost) | **POST** /EmployeeAppraisal  -  DeleteAppraisal | Delete Appraisal |
| [**employeeAppraisalGetByAppraisalIdPost()**](EmployeeAppraisalApi.md#employeeAppraisalGetByAppraisalIdPost) | **POST** /EmployeeAppraisal  -  GetByAppraisalId | Get By Appraisal Id |
| [**employeeAppraisalGetByEmployeeIdPost()**](EmployeeAppraisalApi.md#employeeAppraisalGetByEmployeeIdPost) | **POST** /EmployeeAppraisal  -  GetByEmployeeId | Get By Employee Id |
| [**employeeAppraisalUpdateAppraisalPost()**](EmployeeAppraisalApi.md#employeeAppraisalUpdateAppraisalPost) | **POST** /EmployeeAppraisal  -  UpdateAppraisal | Update Appraisal |


## `employeeAppraisalAddNewAppraisalPost()`

```php
employeeAppraisalAddNewAppraisalPost($body): \OpenAPI\Client\Model\ErrorForAddNewAppraisal
```

Add New Appraisal

This API is used to add new appraisal for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewAppraisalParameter(); // \OpenAPI\Client\Model\AddNewAppraisalParameter

try {
    $result = $apiInstance->employeeAppraisalAddNewAppraisalPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAppraisalApi->employeeAppraisalAddNewAppraisalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AddNewAppraisalParameter**](../Model/AddNewAppraisalParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewAppraisal**](../Model/ErrorForAddNewAppraisal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeAppraisalDeleteAppraisalPost()`

```php
employeeAppraisalDeleteAppraisalPost($body): \OpenAPI\Client\Model\ErrorForDeleteAppraisal
```

Delete Appraisal

This API is used to Delete Appraisal for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteAppraisalParameter(); // \OpenAPI\Client\Model\DeleteAppraisalParameter

try {
    $result = $apiInstance->employeeAppraisalDeleteAppraisalPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAppraisalApi->employeeAppraisalDeleteAppraisalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DeleteAppraisalParameter**](../Model/DeleteAppraisalParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteAppraisal**](../Model/ErrorForDeleteAppraisal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeAppraisalGetByAppraisalIdPost()`

```php
employeeAppraisalGetByAppraisalIdPost($body): \OpenAPI\Client\Model\ErrorForGetByAppraisalId
```

Get By Appraisal Id

This API is used to Get By Appraisal Id  details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetByAppraisalIdForEmployeeAppraisal(); // \OpenAPI\Client\Model\GetByAppraisalIdForEmployeeAppraisal

try {
    $result = $apiInstance->employeeAppraisalGetByAppraisalIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAppraisalApi->employeeAppraisalGetByAppraisalIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetByAppraisalIdForEmployeeAppraisal**](../Model/GetByAppraisalIdForEmployeeAppraisal.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetByAppraisalId**](../Model/ErrorForGetByAppraisalId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeAppraisalGetByEmployeeIdPost()`

```php
employeeAppraisalGetByEmployeeIdPost($body): \OpenAPI\Client\Model\ErrorForEmployeeAppraisalGetEmployeeById
```

Get By Employee Id

This API is used to Get By Employee Id Appraisal details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetByEmployeeIdForEmployeeAppraisal(); // \OpenAPI\Client\Model\GetByEmployeeIdForEmployeeAppraisal

try {
    $result = $apiInstance->employeeAppraisalGetByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAppraisalApi->employeeAppraisalGetByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetByEmployeeIdForEmployeeAppraisal**](../Model/GetByEmployeeIdForEmployeeAppraisal.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForEmployeeAppraisalGetEmployeeById**](../Model/ErrorForEmployeeAppraisalGetEmployeeById.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeAppraisalUpdateAppraisalPost()`

```php
employeeAppraisalUpdateAppraisalPost($body): \OpenAPI\Client\Model\ErrorForUpdateAppraisal
```

Update Appraisal

This API is used to Update Appraisal for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateAppraisalParameter(); // \OpenAPI\Client\Model\UpdateAppraisalParameter

try {
    $result = $apiInstance->employeeAppraisalUpdateAppraisalPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeAppraisalApi->employeeAppraisalUpdateAppraisalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateAppraisalParameter**](../Model/UpdateAppraisalParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateAppraisal**](../Model/ErrorForUpdateAppraisal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
