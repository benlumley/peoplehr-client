# PeopleHR\EmployeeAppraisalApi

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
employeeAppraisalAddNewAppraisalPost($body): \PeopleHR\Model\ErrorForAddNewAppraisal
```

Add New Appraisal

This API is used to add new appraisal for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewAppraisalParameter(); // \PeopleHR\Model\AddNewAppraisalParameter

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
| **body** | [**\PeopleHR\Model\AddNewAppraisalParameter**](../Model/AddNewAppraisalParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewAppraisal**](../Model/ErrorForAddNewAppraisal.md)

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
employeeAppraisalDeleteAppraisalPost($body): \PeopleHR\Model\ErrorForDeleteAppraisal
```

Delete Appraisal

This API is used to Delete Appraisal for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteAppraisalParameter(); // \PeopleHR\Model\DeleteAppraisalParameter

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
| **body** | [**\PeopleHR\Model\DeleteAppraisalParameter**](../Model/DeleteAppraisalParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteAppraisal**](../Model/ErrorForDeleteAppraisal.md)

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
employeeAppraisalGetByAppraisalIdPost($body): \PeopleHR\Model\ErrorForGetByAppraisalId
```

Get By Appraisal Id

This API is used to Get By Appraisal Id  details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetByAppraisalIdForEmployeeAppraisal(); // \PeopleHR\Model\GetByAppraisalIdForEmployeeAppraisal

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
| **body** | [**\PeopleHR\Model\GetByAppraisalIdForEmployeeAppraisal**](../Model/GetByAppraisalIdForEmployeeAppraisal.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetByAppraisalId**](../Model/ErrorForGetByAppraisalId.md)

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
employeeAppraisalGetByEmployeeIdPost($body): \PeopleHR\Model\ErrorForEmployeeAppraisalGetEmployeeById
```

Get By Employee Id

This API is used to Get By Employee Id Appraisal details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetByEmployeeIdForEmployeeAppraisal(); // \PeopleHR\Model\GetByEmployeeIdForEmployeeAppraisal

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
| **body** | [**\PeopleHR\Model\GetByEmployeeIdForEmployeeAppraisal**](../Model/GetByEmployeeIdForEmployeeAppraisal.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForEmployeeAppraisalGetEmployeeById**](../Model/ErrorForEmployeeAppraisalGetEmployeeById.md)

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
employeeAppraisalUpdateAppraisalPost($body): \PeopleHR\Model\ErrorForUpdateAppraisal
```

Update Appraisal

This API is used to Update Appraisal for given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeAppraisalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateAppraisalParameter(); // \PeopleHR\Model\UpdateAppraisalParameter

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
| **body** | [**\PeopleHR\Model\UpdateAppraisalParameter**](../Model/UpdateAppraisalParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateAppraisal**](../Model/ErrorForUpdateAppraisal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
