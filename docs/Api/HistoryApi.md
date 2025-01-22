# PeopleHR\HistoryApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**historyGetHistoryByEmployeeIdAndFieldNamePost()**](HistoryApi.md#historyGetHistoryByEmployeeIdAndFieldNamePost) | **POST** /History  -  GetHistoryByEmployeeIdAndFieldName | Get History By EmployeeId And FieldName |


## `historyGetHistoryByEmployeeIdAndFieldNamePost()`

```php
historyGetHistoryByEmployeeIdAndFieldNamePost($body): \PeopleHR\Model\ErrorForGetHistoryByEmployeeIdAndFieldName
```

Get History By EmployeeId And FieldName

This API is used to get history by employeeId and fieldname details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetHistoryByEmployeeIdAndFieldNameParameter(); // \PeopleHR\Model\GetHistoryByEmployeeIdAndFieldNameParameter

try {
    $result = $apiInstance->historyGetHistoryByEmployeeIdAndFieldNamePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->historyGetHistoryByEmployeeIdAndFieldNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetHistoryByEmployeeIdAndFieldNameParameter**](../Model/GetHistoryByEmployeeIdAndFieldNameParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetHistoryByEmployeeIdAndFieldName**](../Model/ErrorForGetHistoryByEmployeeIdAndFieldName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
