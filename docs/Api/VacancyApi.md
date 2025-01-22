# PeopleHR\VacancyApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vacancyCreateNewVacancyPost()**](VacancyApi.md#vacancyCreateNewVacancyPost) | **POST** /Vacancy  -  CreateNewVacancy | Create New Vacancy |
| [**vacancyGetAllVacanciesPost()**](VacancyApi.md#vacancyGetAllVacanciesPost) | **POST** /Vacancy  -  GetAllVacancies | Get all vacancies |
| [**vacancyGetVacancyPost()**](VacancyApi.md#vacancyGetVacancyPost) | **POST** /Vacancy  -  GetVacancy | Get vacancy |


## `vacancyCreateNewVacancyPost()`

```php
vacancyCreateNewVacancyPost($body): \PeopleHR\Model\ErrorForCreateNewVacancy
```

Create New Vacancy

This API is used to create new vacancy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\VacancyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\CreateVacancyDetailParameter(); // \PeopleHR\Model\CreateVacancyDetailParameter

try {
    $result = $apiInstance->vacancyCreateNewVacancyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VacancyApi->vacancyCreateNewVacancyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\CreateVacancyDetailParameter**](../Model/CreateVacancyDetailParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForCreateNewVacancy**](../Model/ErrorForCreateNewVacancy.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vacancyGetAllVacanciesPost()`

```php
vacancyGetAllVacanciesPost($body): \PeopleHR\Model\ErrorForGetAllVacancy
```

Get all vacancies

This API is used to get all vacancies detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\VacancyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetAllVacancyParameters(); // \PeopleHR\Model\GetAllVacancyParameters

try {
    $result = $apiInstance->vacancyGetAllVacanciesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VacancyApi->vacancyGetAllVacanciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetAllVacancyParameters**](../Model/GetAllVacancyParameters.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetAllVacancy**](../Model/ErrorForGetAllVacancy.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vacancyGetVacancyPost()`

```php
vacancyGetVacancyPost($body): \PeopleHR\Model\ErrorForGetVacancy
```

Get vacancy

This API is used to get vacancy detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\VacancyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetVacancyParameters(); // \PeopleHR\Model\GetVacancyParameters

try {
    $result = $apiInstance->vacancyGetVacancyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VacancyApi->vacancyGetVacancyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetVacancyParameters**](../Model/GetVacancyParameters.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetVacancy**](../Model/ErrorForGetVacancy.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
