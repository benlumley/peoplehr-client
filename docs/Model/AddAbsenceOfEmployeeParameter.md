# # AddAbsenceOfEmployeeParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_key** | **string** | APIKey for employee api to checkAuthentication |
**action** | **string** | Action name &#x3D; AddNewAbsence |
**employee_id** | **string** | Employee Id for add new absence |
**duration_type** | **string** | DurationType of user |
**reason** | **string** | Reason for add new absence |
**start_date** | **\DateTime** | Start date for add new absence |
**end_date** | **\DateTime** | EndDate for add new absence |
**part_of_day** | [**\PeopleHR\Model\PartOfDay**](PartOfDay.md) | PartOfDay for add new absence |
**duration** | **int** | Duration for add new absence |
**absence_paid_status** | **string** | AbsencePaidStatus for add new absence |
**emergency_leave** | **bool** | EmergencyLeave for add new absence |
**add_comments** | [**\PeopleHR\Model\AddCommentsArrayForAbsenceInner[]**](AddCommentsArrayForAbsenceInner.md) | AddComments array list | [optional]
**add_files** | [**\PeopleHR\Model\AddFilesArrayForAbsenceInner[]**](AddFilesArrayForAbsenceInner.md) | AddFiles array list | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
