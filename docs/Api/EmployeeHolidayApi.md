# PeopleHR\EmployeeHolidayApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employeeHolidayAddNewHolidayPost()**](EmployeeHolidayApi.md#employeeHolidayAddNewHolidayPost) | **POST** /Employee Holiday  -  AddNewHoliday | Add New Holiday |
| [**employeeHolidayDeleteHolidayPost()**](EmployeeHolidayApi.md#employeeHolidayDeleteHolidayPost) | **POST** /Employee Holiday  -  DeleteHoliday | Delete holiday |
| [**employeeHolidayGetHolidayDetailPost()**](EmployeeHolidayApi.md#employeeHolidayGetHolidayDetailPost) | **POST** /Employee Holiday  -  GetHolidayDetail | Get Holiday Detail |
| [**employeeHolidayUpdateHolidayPost()**](EmployeeHolidayApi.md#employeeHolidayUpdateHolidayPost) | **POST** /Employee Holiday  -  UpdateHoliday | Update Holiday |


## `employeeHolidayAddNewHolidayPost()`

```php
employeeHolidayAddNewHolidayPost($body): \PeopleHR\Model\ErrorForAddNewHoliday
```

Add New Holiday

This API is used to add new holiday

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeHolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewHolidayParameter(); // \PeopleHR\Model\AddNewHolidayParameter

try {
    $result = $apiInstance->employeeHolidayAddNewHolidayPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeHolidayApi->employeeHolidayAddNewHolidayPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewHolidayParameter**](../Model/AddNewHolidayParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewHoliday**](../Model/ErrorForAddNewHoliday.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeHolidayDeleteHolidayPost()`

```php
employeeHolidayDeleteHolidayPost($body): \PeopleHR\Model\ErrorForDeleteHolidy
```

Delete holiday

This API is used to delete holiday detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeHolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteHolidayParameter(); // \PeopleHR\Model\DeleteHolidayParameter

try {
    $result = $apiInstance->employeeHolidayDeleteHolidayPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeHolidayApi->employeeHolidayDeleteHolidayPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\DeleteHolidayParameter**](../Model/DeleteHolidayParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteHolidy**](../Model/ErrorForDeleteHolidy.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeHolidayGetHolidayDetailPost()`

```php
employeeHolidayGetHolidayDetailPost($body): \PeopleHR\Model\ErrorForGetHolidayDetail
```

Get Holiday Detail

This API is used to get holiday detail list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeHolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetHolidayDetailParameter(); // \PeopleHR\Model\GetHolidayDetailParameter

try {
    $result = $apiInstance->employeeHolidayGetHolidayDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeHolidayApi->employeeHolidayGetHolidayDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetHolidayDetailParameter**](../Model/GetHolidayDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetHolidayDetail**](../Model/ErrorForGetHolidayDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeHolidayUpdateHolidayPost()`

```php
employeeHolidayUpdateHolidayPost($body): \PeopleHR\Model\ErrorForUpdateHoliday
```

Update Holiday

This API is used to update holiday detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmployeeHolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateHolidayParameter(); // \PeopleHR\Model\UpdateHolidayParameter

try {
    $result = $apiInstance->employeeHolidayUpdateHolidayPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeHolidayApi->employeeHolidayUpdateHolidayPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateHolidayParameter**](../Model/UpdateHolidayParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateHoliday**](../Model/ErrorForUpdateHoliday.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
