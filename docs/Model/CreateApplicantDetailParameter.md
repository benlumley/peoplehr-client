# # CreateApplicantDetailParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_key** | **string** | APIKey for applicant api to Create new applicant |
**action** | **string** | Action name &#x3D; CreateNewApplicant |
**vacancy_reference** | **string** | Vacancy reference for create new applicant | [optional]
**first_name** | **string** | First name for create new applicant |
**last_name** | **string** | Last name for create new applicant |
**email** | **string** | Email for create new applicant | [optional]
**gender** | [**\OpenAPI\Client\Model\Gender**](Gender.md) | Gender for create new applicant | [optional]
**date_of_birth** | **\DateTime** | Date of birth for create new applicant | [optional]
**post_code** | **string** | Post code for create new applicant | [optional]
**address** | **string** | Address for create new applicant | [optional]
**phone_number** | **string** | PhoneNumber for create new applicant | [optional]
**other_contact_details** | **string** | Other contact details for create new applicant | [optional]
**source** | **string** | Source for create new applicant | [optional]
**additional_questions** | [**\OpenAPI\Client\Model\AdditionalQuestionsForCreatenewApplicantArrayInner[]**](AdditionalQuestionsForCreatenewApplicantArrayInner.md) | Source for create new applicant | [optional]
**internal_questions** | [**\OpenAPI\Client\Model\AdditionalQuestionsForCreatenewApplicantArrayInner[]**](AdditionalQuestionsForCreatenewApplicantArrayInner.md) | Internal questions for create new applicant | [optional]
**documents** | [**\OpenAPI\Client\Model\DocumentsForCreateNewApplicantArrayInner[]**](DocumentsForCreateNewApplicantArrayInner.md) | Documents for create new applicant |
**skills** | **string** | Skills for create new applicant |
**recruitment_cost** | **int** | Recruitment cost for create new applicant | [optional]
**date_last_contacted** | **\DateTime** | Date last contacted for create new applicant | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
