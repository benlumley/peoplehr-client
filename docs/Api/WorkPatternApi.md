# PeopleHR\WorkPatternApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**workPatternGetWorkPatternDetailPost()**](WorkPatternApi.md#workPatternGetWorkPatternDetailPost) | **POST** /WorkPattern  -  GetWorkPatternDetail | Get work pattern detail |


## `workPatternGetWorkPatternDetailPost()`

```php
workPatternGetWorkPatternDetailPost($body): \PeopleHR\Model\ErrorForWorkPattern
```

Get work pattern detail

This API is used to get work pattern detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\WorkPatternApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\WorkPatternParameter(); // \PeopleHR\Model\WorkPatternParameter

try {
    $result = $apiInstance->workPatternGetWorkPatternDetailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkPatternApi->workPatternGetWorkPatternDetailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\WorkPatternParameter**](../Model/WorkPatternParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForWorkPattern**](../Model/ErrorForWorkPattern.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
