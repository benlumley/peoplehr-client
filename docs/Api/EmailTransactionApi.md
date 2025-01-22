# PeopleHR\EmailTransactionApi

All URIs are relative to https://api.peoplehr.net/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**emailTransactionEmailInboxPost()**](EmailTransactionApi.md#emailTransactionEmailInboxPost) | **POST** /Email Transaction  -  EmailInbox | Email Inbox |


## `emailTransactionEmailInboxPost()`

```php
emailTransactionEmailInboxPost($body): \PeopleHR\Model\ErrorForEmailInbox
```

Email Inbox

This API is used for Email Inbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PeopleHR\Api\EmailTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PeopleHR\Model\EmailInboxParameter(); // \PeopleHR\Model\EmailInboxParameter

try {
    $result = $apiInstance->emailTransactionEmailInboxPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTransactionApi->emailTransactionEmailInboxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\PeopleHR\Model\EmailInboxParameter**](../Model/EmailInboxParameter.md)|  | |

### Return type

[**\PeopleHR\Model\ErrorForEmailInbox**](../Model/ErrorForEmailInbox.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
