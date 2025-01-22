# PeopleHR\QueryApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**queryGetQueryResultByQueryNamePost()**](QueryApi.md#queryGetQueryResultByQueryNamePost) | **POST** /Query  -  GetQueryResultByQueryName | Get Query Result By QueryName |
| [**queryGetQueryResultPost()**](QueryApi.md#queryGetQueryResultPost) | **POST** /Query  -  GetQueryResult | Get Query Result by Query Id |


## `queryGetQueryResultByQueryNamePost()`

```php
queryGetQueryResultByQueryNamePost($body): \PeopleHR\Model\ErrorForGetQueryResultByQueryName
```

Get Query Result By QueryName

This API is used to get query result By query name details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetQueryResultByQueryNameParameter(); // \PeopleHR\Model\GetQueryResultByQueryNameParameter

try {
    $result = $apiInstance->queryGetQueryResultByQueryNamePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->queryGetQueryResultByQueryNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetQueryResultByQueryNameParameter**](../Model/GetQueryResultByQueryNameParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetQueryResultByQueryName**](../Model/ErrorForGetQueryResultByQueryName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryGetQueryResultPost()`

```php
queryGetQueryResultPost($body): \PeopleHR\Model\ErrorForGetQueryResult
```

Get Query Result by Query Id

Deprecated.This API is used to get query result by query id details. It has been superseeded by Get Query Result By QueryName which returns date information in a UTC YYYY/MM/DD format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\QueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetQueryResultParameter(); // \PeopleHR\Model\GetQueryResultParameter

try {
    $result = $apiInstance->queryGetQueryResultPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueryApi->queryGetQueryResultPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetQueryResultParameter**](../Model/GetQueryResultParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetQueryResult**](../Model/ErrorForGetQueryResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
