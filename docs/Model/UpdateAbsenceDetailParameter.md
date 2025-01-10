# # UpdateAbsenceDetailParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_key** | **string** | APIKey for employee api to UpdateAbsence |
**action** | **string** | Action name &#x3D; UpdateAbsence |
**employee_id** | **string** | Employee Id for update absence |
**old_start_date** | **\DateTime** | OldStartDate for update absence |
**old_end_date** | **\DateTime** | Old End Date for update absence |
**duration_type** | **string** | DurationType for update absence |
**reason** | **string** | Reason For update absence of user |
**start_date** | **\DateTime** | Start Date for update absence |
**end_date** | **\DateTime** | End Date for update absence |
**part_of_day** | [**\OpenAPI\Client\Model\PartOfDayForUpdateAbsence**](PartOfDayForUpdateAbsence.md) | PartOfDay for update absence | [optional]
**duration** | **int** | Duration for update absence |
**absence_paid_status** | **string** | AbsencePaidStatus for update absence |
**emergency_leave** | **bool** | EmergencyLeave for update absence |
**add_comments** | [**\OpenAPI\Client\Model\AddCommentsArrayForAbsenceInner[]**](AddCommentsArrayForAbsenceInner.md) | AddComments array list | [optional]
**add_files** | [**\OpenAPI\Client\Model\AddFilesArrayForAbsenceInner[]**](AddFilesArrayForAbsenceInner.md) | AddFiles array list | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
