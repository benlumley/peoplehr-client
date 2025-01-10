# # ErrorForGetByCustomScreenTransactionId

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_error** | **bool** | isError &#x3D; false means success and isError &#x3D; true means error | [optional]
**status** | **int** | Error Code &#x3D; 0 means &#39;The requested processed successfully.&#39;&lt;br /&gt;Error Code &#x3D; 1 means &#39;API key is missing.&#39; &lt;br /&gt;Error Code &#x3D; 2 means &#39;Invalid API Key.&#39;&lt;br /&gt;Error Code &#x3D; 3 means &#39;Action is missing.&#39; &lt;br /&gt;Error Code &#x3D; 4 means &#39;Action cannot be empty.&#39; &lt;br /&gt;Error Code &#x3D; 4 means &#39;Invalid Action.&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;EmployeeId does not exists.&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;EmployeeId contains invalid data.&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;EmployeeId contains more than 15 characters.&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;EmployeeId cannot be empty.&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;EmployeeId is missing.&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;ScreenId does not exists..&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;ScreenId is invalid&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;ScreenId cannot be empty&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;ScreenId is missing.&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;Custom Screen TransactionId is invalid&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;Custom Screen TransactionId cannot be empty.&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;Custom Screen TransactionId is missing.&#39;&lt;br /&gt;Error Code &#x3D; 6 means &#39;Oops! Something went wrong.&#39;&lt;br /&gt;Error Code &#x3D; 7 means &#39;No json data found.&#39;&lt;br /&gt;Error Code &#x3D; 8 means &#39;Either empty or no Form Data.&#39;&lt;br /&gt;Error Code &#x3D; 9 means &#39;Invalid json data.&#39;&lt;br /&gt;Error Code &#x3D; 10 means &#39;No detail has been found. | [optional]
**message** | **string** | Message show as per error code | [optional]
**result** | [**\OpenAPI\Client\Model\Result1GetByCustomScreenTransactionIdObject**](Result1GetByCustomScreenTransactionIdObject.md) | Result value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
