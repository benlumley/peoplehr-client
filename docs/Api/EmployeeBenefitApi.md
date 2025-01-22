# PeopleHR\EmployeeBenefitApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeBenefitAddNewBenefitPost()**](EmployeeBenefitApi.md#employeeBenefitAddNewBenefitPost) | **POST** /EmployeeBenefit  -  AddNewBenefit | Add New Benefit |
| [**employeeBenefitDeleteBenefitPost()**](EmployeeBenefitApi.md#employeeBenefitDeleteBenefitPost) | **POST** /EmployeeBenefit  -  DeleteBenefit | Delete Benefit |
| [**employeeBenefitGetBenefitByBenefitIdPost()**](EmployeeBenefitApi.md#employeeBenefitGetBenefitByBenefitIdPost) | **POST** /EmployeeBenefit  -  GetBenefitByBenefitId | Get By Benefit Id |
| [**employeeBenefitGetBenefitByEmployeeIdPost()**](EmployeeBenefitApi.md#employeeBenefitGetBenefitByEmployeeIdPost) | **POST** /EmployeeBenefit  -  GetBenefitByEmployeeId | Get Benefit By EmployeeId Id |
| [**employeeBenefitUpdateBenefitPost()**](EmployeeBenefitApi.md#employeeBenefitUpdateBenefitPost) | **POST** /EmployeeBenefit  -  UpdateBenefit | Update Benefit |


## `employeeBenefitAddNewBenefitPost()`

```php
employeeBenefitAddNewBenefitPost($body): \PeopleHR\Model\ErrorForAddNewBenefitApi
```

Add New Benefit

This API is used to Add new benefit details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewBenefitParameter(); // \PeopleHR\Model\AddNewBenefitParameter

try {
    $result = $apiInstance->employeeBenefitAddNewBenefitPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeBenefitApi->employeeBenefitAddNewBenefitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewBenefitParameter**](../Model/AddNewBenefitParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewBenefitApi**](../Model/ErrorForAddNewBenefitApi.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeBenefitDeleteBenefitPost()`

```php
employeeBenefitDeleteBenefitPost($body): \PeopleHR\Model\ErrorForDeleteBenefit
```

Delete Benefit

This API is used to Delete Benefit Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteBenefitParameter(); // \PeopleHR\Model\DeleteBenefitParameter

try {
    $result = $apiInstance->employeeBenefitDeleteBenefitPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeBenefitApi->employeeBenefitDeleteBenefitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\DeleteBenefitParameter**](../Model/DeleteBenefitParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteBenefit**](../Model/ErrorForDeleteBenefit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeBenefitGetBenefitByBenefitIdPost()`

```php
employeeBenefitGetBenefitByBenefitIdPost($body): \PeopleHR\Model\ErrorForGetByBenefitIdApi
```

Get By Benefit Id

This API is used to get by  benefit id details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetByBenefitIdParameter(); // \PeopleHR\Model\GetByBenefitIdParameter

try {
    $result = $apiInstance->employeeBenefitGetBenefitByBenefitIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeBenefitApi->employeeBenefitGetBenefitByBenefitIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetByBenefitIdParameter**](../Model/GetByBenefitIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetByBenefitIdApi**](../Model/ErrorForGetByBenefitIdApi.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeBenefitGetBenefitByEmployeeIdPost()`

```php
employeeBenefitGetBenefitByEmployeeIdPost($body): \PeopleHR\Model\ErrorForGetBenefitByEmployeeId
```

Get Benefit By EmployeeId Id

This API is used to get by employee id details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetBenefitByEmployeeIdParameter(); // \PeopleHR\Model\GetBenefitByEmployeeIdParameter

try {
    $result = $apiInstance->employeeBenefitGetBenefitByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeBenefitApi->employeeBenefitGetBenefitByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetBenefitByEmployeeIdParameter**](../Model/GetBenefitByEmployeeIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetBenefitByEmployeeId**](../Model/ErrorForGetBenefitByEmployeeId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeBenefitUpdateBenefitPost()`

```php
employeeBenefitUpdateBenefitPost($body): \PeopleHR\Model\ErrorForUpdateBenefitApi
```

Update Benefit

This API is used to Update Benefit Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateBenefitParameter(); // \PeopleHR\Model\UpdateBenefitParameter

try {
    $result = $apiInstance->employeeBenefitUpdateBenefitPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeBenefitApi->employeeBenefitUpdateBenefitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateBenefitParameter**](../Model/UpdateBenefitParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateBenefitApi**](../Model/ErrorForUpdateBenefitApi.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
