# # ErrorForDeleteBenefit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_error** | **bool** | isError false means Success And isError true means Error | [optional]
**status** | **int** | Error Code &#x3D; 0 means &#39;Benefit record deleted successfully.&#39;&lt;br/&gt;&lt;br /&gt;Error Code &#x3D; 2 means &#39;Invalid API Key.&#39;&lt;br /&gt;Error Code &#x3D; 4 means  &#39;Invalid Action&#39;&lt;br /&gt;Error Code &#x3D; 4 means  &#39;Action cannot be empty&#39;&lt;br/&gt;&lt;br /&gt;Error Code &#x3D; 5 means &#39;API key does not exists&#39; .&lt;br/&gt;&lt;br /&gt; Error Code &#x3D; 5 means &#39;EmployeeId cannot be empty.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;EmployeeId contains more than 15 characters.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;EmployeeId contains invalid data.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;EmployeeId does not exists.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;EmployeeId is missing.&#39; &lt;br/&gt;&lt;br /&gt;Error Code &#x3D; 5 means &#39;Pending authorization request exists in system for passed Benefit id.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;Benefit Id is invalid.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;valid Benefit Id Cannot be Empty.&#39; &lt;br/&gt;&lt;br /&gt;Error Code &#x3D; 6 means &#39;Oops! Something went wrong.&#39; &lt;br /&gt;Error Code &#x3D; 5 means &#39;No record found.&#39;&lt;br /&gt;Error Code &#x3D; 6 means &#39;No record found.&#39;&lt;br /&gt;Error Code &#x3D; 6 means &#39;invalid action.&#39;&lt;br /&gt;Error Code &#x3D; 7 means &#39;No json data found.&#39;&lt;br /&gt;Error Code &#x3D; 8 means &#39;Either empty or no Form Data.&#39;&lt;br /&gt;Error Code &#x3D; 9 means &#39;Invalid json data.&#39;&lt;br /&gt; | [optional]
**message** | **string** | Message As Per the Error code | [optional]
**result** | **object** | Can be ignored | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
