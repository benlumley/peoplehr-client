# # ErrorForGetAllVacancy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_error** | **bool** | isError &#x3D; false means success and isError &#x3D; true means error | [optional]
**status** | **int** | &lt;br /&gt;Error Code &#x3D; 5 means &#39;Reference not exist.&#39; &lt;br /&gt;Error Code &#x3D; 6 means &#39;Unknown error occured.&#39; &lt;br/&gt;&lt;br /&gt; Error Code &#x3D; 5 means &#39;No access on ATS schema.&#39;&lt;br /&gt;Error Code &#x3D; 7 means &#39;No json data found.&#39;&lt;br /&gt;Error Code &#x3D; 8 means &#39;Either empty or no Form Data.&#39;&lt;br /&gt;Error Code &#x3D; 9 means &#39;Invalid json data.&#39;&lt;br /&gt;Error Code &#x3D; 10 means &#39;No record found.&#39;&lt;br/&gt; | [optional]
**message** | **string** | Message show as per error code | [optional]
**result** | [**\OpenAPI\Client\Model\ResultGetAllVacancyObjectInner[]**](ResultGetAllVacancyObjectInner.md) | Result value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
