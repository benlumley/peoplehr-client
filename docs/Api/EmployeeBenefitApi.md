# OpenAPI\Client\EmployeeBenefitApi

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
employeeBenefitAddNewBenefitPost($body): \OpenAPI\Client\Model\ErrorForAddNewBenefitApi
```

Add New Benefit

This API is used to Add new benefit details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\AddNewBenefitParameter(); // \OpenAPI\Client\Model\AddNewBenefitParameter

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
| **body** | [**\OpenAPI\Client\Model\AddNewBenefitParameter**](../Model/AddNewBenefitParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForAddNewBenefitApi**](../Model/ErrorForAddNewBenefitApi.md)

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
employeeBenefitDeleteBenefitPost($body): \OpenAPI\Client\Model\ErrorForDeleteBenefit
```

Delete Benefit

This API is used to Delete Benefit Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\DeleteBenefitParameter(); // \OpenAPI\Client\Model\DeleteBenefitParameter

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
| **body** | [**\OpenAPI\Client\Model\DeleteBenefitParameter**](../Model/DeleteBenefitParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForDeleteBenefit**](../Model/ErrorForDeleteBenefit.md)

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
employeeBenefitGetBenefitByBenefitIdPost($body): \OpenAPI\Client\Model\ErrorForGetByBenefitIdApi
```

Get By Benefit Id

This API is used to get by  benefit id details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetByBenefitIdParameter(); // \OpenAPI\Client\Model\GetByBenefitIdParameter

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
| **body** | [**\OpenAPI\Client\Model\GetByBenefitIdParameter**](../Model/GetByBenefitIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetByBenefitIdApi**](../Model/ErrorForGetByBenefitIdApi.md)

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
employeeBenefitGetBenefitByEmployeeIdPost($body): \OpenAPI\Client\Model\ErrorForGetBenefitByEmployeeId
```

Get Benefit By EmployeeId Id

This API is used to get by employee id details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetBenefitByEmployeeIdParameter(); // \OpenAPI\Client\Model\GetBenefitByEmployeeIdParameter

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
| **body** | [**\OpenAPI\Client\Model\GetBenefitByEmployeeIdParameter**](../Model/GetBenefitByEmployeeIdParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetBenefitByEmployeeId**](../Model/ErrorForGetBenefitByEmployeeId.md)

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
employeeBenefitUpdateBenefitPost($body): \OpenAPI\Client\Model\ErrorForUpdateBenefitApi
```

Update Benefit

This API is used to Update Benefit Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EmployeeBenefitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateBenefitParameter(); // \OpenAPI\Client\Model\UpdateBenefitParameter

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
| **body** | [**\OpenAPI\Client\Model\UpdateBenefitParameter**](../Model/UpdateBenefitParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateBenefitApi**](../Model/ErrorForUpdateBenefitApi.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
