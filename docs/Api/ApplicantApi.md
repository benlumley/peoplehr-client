# OpenAPI\Client\ApplicantApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applicantCheckDuplicateApplicantPost()**](ApplicantApi.md#applicantCheckDuplicateApplicantPost) | **POST** /Applicant  -  CheckDuplicateApplicant | Check duplicate applicant |
| [**applicantCreateNewApplicantPost()**](ApplicantApi.md#applicantCreateNewApplicantPost) | **POST** /Applicant  -  CreateNewApplicant | Create New Applicant |
| [**applicantUploadapplicantdocumentPost()**](ApplicantApi.md#applicantUploadapplicantdocumentPost) | **POST** /Applicant  -  uploadapplicantdocument | upload applicant document |


## `applicantCheckDuplicateApplicantPost()`

```php
applicantCheckDuplicateApplicantPost($body): \OpenAPI\Client\Model\ErrorForCheckDuplicateApplicant
```

Check duplicate applicant

This API is used to Check duplicate applicant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\CheckDuplicateApplicantParameter(); // \OpenAPI\Client\Model\CheckDuplicateApplicantParameter

try {
    $result = $apiInstance->applicantCheckDuplicateApplicantPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantApi->applicantCheckDuplicateApplicantPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CheckDuplicateApplicantParameter**](../Model/CheckDuplicateApplicantParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForCheckDuplicateApplicant**](../Model/ErrorForCheckDuplicateApplicant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicantCreateNewApplicantPost()`

```php
applicantCreateNewApplicantPost($body): \OpenAPI\Client\Model\ErrorForCreateNewApplicant
```

Create New Applicant

This API is used to create new applicant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\CreateApplicantDetailParameter(); // \OpenAPI\Client\Model\CreateApplicantDetailParameter

try {
    $result = $apiInstance->applicantCreateNewApplicantPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantApi->applicantCreateNewApplicantPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CreateApplicantDetailParameter**](../Model/CreateApplicantDetailParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForCreateNewApplicant**](../Model/ErrorForCreateNewApplicant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicantUploadapplicantdocumentPost()`

```php
applicantUploadapplicantdocumentPost($body): \OpenAPI\Client\Model\ErrorForuploadapplicantdocument
```

upload applicant document

This API is used to upload applicant document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ApplicantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \OpenAPI\Client\Model\UploadapplicantdocumentParameter(); // \OpenAPI\Client\Model\UploadapplicantdocumentParameter

try {
    $result = $apiInstance->applicantUploadapplicantdocumentPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantApi->applicantUploadapplicantdocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UploadapplicantdocumentParameter**](../Model/UploadapplicantdocumentParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ErrorForuploadapplicantdocument**](../Model/ErrorForuploadapplicantdocument.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
