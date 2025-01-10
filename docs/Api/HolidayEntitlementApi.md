# OpenAPI\Client\HolidayEntitlementApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**holidayEntitlementGetHolidayEntitlementPost()**](HolidayEntitlementApi.md#holidayEntitlementGetHolidayEntitlementPost) | **POST** /Holiday Entitlement  -  GetHolidayEntitlement | Get Holiday Entitlement |
| [**holidayEntitlementGetNextYearHolidayEntitlementPost()**](HolidayEntitlementApi.md#holidayEntitlementGetNextYearHolidayEntitlementPost) | **POST** /Holiday Entitlement  -  GetNextYearHolidayEntitlement | Get Next Year Holiday Entitlement |
| [**holidayEntitlementUpdateHolidayEntitlementPost()**](HolidayEntitlementApi.md#holidayEntitlementUpdateHolidayEntitlementPost) | **POST** /Holiday Entitlement  -  UpdateHolidayEntitlement | Update Holiday Entitlement |
| [**holidayEntitlementUpdateNextYearHolidayEntitlementPost()**](HolidayEntitlementApi.md#holidayEntitlementUpdateNextYearHolidayEntitlementPost) | **POST** /Holiday Entitlement  -  UpdateNextYearHolidayEntitlement | Update Next Year Holiday Entitlement |


## `holidayEntitlementGetHolidayEntitlementPost()`

```php
holidayEntitlementGetHolidayEntitlementPost($body): \OpenAPI\Client\Model\ErrorForGetHolidayEntitlement
```

Get Holiday Entitlement

This API is used to get holiday entitlement details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HolidayEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetHolidayEntitlementParameter(); // \OpenAPI\Client\Model\GetHolidayEntitlementParameter

try {
    $result = $apiInstance->holidayEntitlementGetHolidayEntitlementPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayEntitlementApi->holidayEntitlementGetHolidayEntitlementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetHolidayEntitlementParameter**](../Model/GetHolidayEntitlementParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetHolidayEntitlement**](../Model/ErrorForGetHolidayEntitlement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `holidayEntitlementGetNextYearHolidayEntitlementPost()`

```php
holidayEntitlementGetNextYearHolidayEntitlementPost($body): \OpenAPI\Client\Model\ErrorForGetNextYearHolidayEntitlement
```

Get Next Year Holiday Entitlement

This API is used to get next year holiday entitlement details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HolidayEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\GetNextYearHolidayEntitlementParameter(); // \OpenAPI\Client\Model\GetNextYearHolidayEntitlementParameter

try {
    $result = $apiInstance->holidayEntitlementGetNextYearHolidayEntitlementPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayEntitlementApi->holidayEntitlementGetNextYearHolidayEntitlementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GetNextYearHolidayEntitlementParameter**](../Model/GetNextYearHolidayEntitlementParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForGetNextYearHolidayEntitlement**](../Model/ErrorForGetNextYearHolidayEntitlement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `holidayEntitlementUpdateHolidayEntitlementPost()`

```php
holidayEntitlementUpdateHolidayEntitlementPost($body): \OpenAPI\Client\Model\ErrorForUpdateHolidayEntitlement
```

Update Holiday Entitlement

This API is used to update holiday entitlement details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HolidayEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateHolidayEntitlementParameter(); // \OpenAPI\Client\Model\UpdateHolidayEntitlementParameter

try {
    $result = $apiInstance->holidayEntitlementUpdateHolidayEntitlementPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayEntitlementApi->holidayEntitlementUpdateHolidayEntitlementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateHolidayEntitlementParameter**](../Model/UpdateHolidayEntitlementParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateHolidayEntitlement**](../Model/ErrorForUpdateHolidayEntitlement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `holidayEntitlementUpdateNextYearHolidayEntitlementPost()`

```php
holidayEntitlementUpdateNextYearHolidayEntitlementPost($body): \OpenAPI\Client\Model\ErrorForUpdateNextYearHolidayEntitlement
```

Update Next Year Holiday Entitlement

This API is used to update next year holiday entitlement details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HolidayEntitlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UpdateNextYearHolidayEntitlementParameter(); // \OpenAPI\Client\Model\UpdateNextYearHolidayEntitlementParameter

try {
    $result = $apiInstance->holidayEntitlementUpdateNextYearHolidayEntitlementPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayEntitlementApi->holidayEntitlementUpdateNextYearHolidayEntitlementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UpdateNextYearHolidayEntitlementParameter**](../Model/UpdateNextYearHolidayEntitlementParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForUpdateNextYearHolidayEntitlement**](../Model/ErrorForUpdateNextYearHolidayEntitlement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
