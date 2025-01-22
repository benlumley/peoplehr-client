# PeopleHR\MaternityPaternityApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**maternityPaternityAddNewMaternityPaternityPost()**](MaternityPaternityApi.md#maternityPaternityAddNewMaternityPaternityPost) | **POST** /Maternity Paternity  -  AddNewMaternityPaternity | Add New Maternity Paternity |
| [**maternityPaternityDeleteMaternityPaternityPost()**](MaternityPaternityApi.md#maternityPaternityDeleteMaternityPaternityPost) | **POST** /Maternity Paternity  -  DeleteMaternityPaternity | Delete Maternity Paternity |
| [**maternityPaternityGetByMaternityPaternityIdPost()**](MaternityPaternityApi.md#maternityPaternityGetByMaternityPaternityIdPost) | **POST** /Maternity Paternity  -  GetByMaternityPaternityId | Get by maternity paternity id |
| [**maternityPaternityGetMaternityPaternityByEmployeeIdPost()**](MaternityPaternityApi.md#maternityPaternityGetMaternityPaternityByEmployeeIdPost) | **POST** /Maternity Paternity  -  GetMaternityPaternityByEmployeeId | Get maternity paternity by employeeid |
| [**maternityPaternityUpdateMaternityPaternityPost()**](MaternityPaternityApi.md#maternityPaternityUpdateMaternityPaternityPost) | **POST** /Maternity Paternity  -  UpdateMaternityPaternity | Update Maternity Paternity |


## `maternityPaternityAddNewMaternityPaternityPost()`

```php
maternityPaternityAddNewMaternityPaternityPost($body): \PeopleHR\Model\ErrorForAddNewMaternityPaternityApi
```

Add New Maternity Paternity

This API is used to add new maternity paternity details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\MaternityPaternityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\AddNewMaternityPaternityParameter(); // \PeopleHR\Model\AddNewMaternityPaternityParameter

try {
    $result = $apiInstance->maternityPaternityAddNewMaternityPaternityPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaternityPaternityApi->maternityPaternityAddNewMaternityPaternityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\AddNewMaternityPaternityParameter**](../Model/AddNewMaternityPaternityParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForAddNewMaternityPaternityApi**](../Model/ErrorForAddNewMaternityPaternityApi.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `maternityPaternityDeleteMaternityPaternityPost()`

```php
maternityPaternityDeleteMaternityPaternityPost($body): \PeopleHR\Model\ErrorForDeleteMaternityPaternity
```

Delete Maternity Paternity

This API is used to Delete Maternity Paternity Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\MaternityPaternityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\DeleteMaternityPaternityParameter(); // \PeopleHR\Model\DeleteMaternityPaternityParameter

try {
    $result = $apiInstance->maternityPaternityDeleteMaternityPaternityPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaternityPaternityApi->maternityPaternityDeleteMaternityPaternityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\DeleteMaternityPaternityParameter**](../Model/DeleteMaternityPaternityParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForDeleteMaternityPaternity**](../Model/ErrorForDeleteMaternityPaternity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `maternityPaternityGetByMaternityPaternityIdPost()`

```php
maternityPaternityGetByMaternityPaternityIdPost($body): \PeopleHR\Model\ErrorForGetByMaternityPaternityId
```

Get by maternity paternity id

This API is used to get by maternity paternity id details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\MaternityPaternityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetByMaternityPaternityParameter(); // \PeopleHR\Model\GetByMaternityPaternityParameter

try {
    $result = $apiInstance->maternityPaternityGetByMaternityPaternityIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaternityPaternityApi->maternityPaternityGetByMaternityPaternityIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetByMaternityPaternityParameter**](../Model/GetByMaternityPaternityParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetByMaternityPaternityId**](../Model/ErrorForGetByMaternityPaternityId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `maternityPaternityGetMaternityPaternityByEmployeeIdPost()`

```php
maternityPaternityGetMaternityPaternityByEmployeeIdPost($body): \PeopleHR\Model\ErrorForGetByMaternityPaternityByEmpId
```

Get maternity paternity by employeeid

This API is used to get maternity paternity by employeeid details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\MaternityPaternityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\GetMaternityPaternityByEmployeeIdParameter(); // \PeopleHR\Model\GetMaternityPaternityByEmployeeIdParameter

try {
    $result = $apiInstance->maternityPaternityGetMaternityPaternityByEmployeeIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaternityPaternityApi->maternityPaternityGetMaternityPaternityByEmployeeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\GetMaternityPaternityByEmployeeIdParameter**](../Model/GetMaternityPaternityByEmployeeIdParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForGetByMaternityPaternityByEmpId**](../Model/ErrorForGetByMaternityPaternityByEmpId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `maternityPaternityUpdateMaternityPaternityPost()`

```php
maternityPaternityUpdateMaternityPaternityPost($body): \PeopleHR\Model\ErrorForUpdateMaternityPaternityApi
```

Update Maternity Paternity

This API is used to Update Maternity Paternity Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\MaternityPaternityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\UpdateMaternityPaternityParameter(); // \PeopleHR\Model\UpdateMaternityPaternityParameter

try {
    $result = $apiInstance->maternityPaternityUpdateMaternityPaternityPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaternityPaternityApi->maternityPaternityUpdateMaternityPaternityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\UpdateMaternityPaternityParameter**](../Model/UpdateMaternityPaternityParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForUpdateMaternityPaternityApi**](../Model/ErrorForUpdateMaternityPaternityApi.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
