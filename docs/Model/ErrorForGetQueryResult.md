# # ErrorForGetQueryResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_error** | **bool** | isError &#x3D; false means success and isError &#x3D; true means error | [optional]
**status** | **int** | Error Code &#x3D; 0 means &#39;The requested processed successfully.&#39;&lt;br /&gt;Error Code &#x3D; 1 means &#39;API key is missing.&#39; &lt;br /&gt;Error Code &#x3D; 2 means &#39;Invalid API Key.&#39;&lt;br /&gt;Error Code &#x3D; 2 means &#39;API key is missing.&#39; &lt;br /&gt;Error Code &#x3D; 3 means &#39;Action is missing.&#39; &lt;br /&gt;Error Code &#x3D; 4 means &#39;Action cannot be empty.&#39; &lt;br /&gt;Error Code &#x3D; 4 means &#39;Invalid Action.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;API Key does not exists.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;Invalid query name.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;QueryName is missing.&#39;&lt;br /&gt;Error Code &#x3D; 5 means &#39;No access to Query Builder schema.&#39;&lt;br /&gt;Error Code &#x3D; 7 means &#39;No json data found.&#39;&lt;br /&gt;Error Code &#x3D; 8 means &#39;Either empty or no Form Data.&#39;&lt;br /&gt;Error Code &#x3D; 9 means &#39;Invalid json data.&#39;&lt;br /&gt;Error Code &#x3D; 10 means &#39;No records found.&#39; | [optional]
**message** | **string** | Message show as per error code | [optional]
**result** | [**\PeopleHR\Model\Result1GetQueryResultInner[]**](Result1GetQueryResultInner.md) | Result value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
