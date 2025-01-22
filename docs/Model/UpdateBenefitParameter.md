# # UpdateBenefitParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_key** | **string** | APIKey for employee api to UpdateBenefit |
**action** | **string** | Action name &#x3D; UpdateBenefit |
**employee_id** | **string** | Employee Id for update benefit |
**benefit** | **string** | Benefit for update benefit |
**benefit_id** | **int** | Benefit id for update benefit |
**date_awarded** | **\DateTime** | DateAwarded for update benefit |
**expiry_date** | **\DateTime** | ExpiryDate for update benefit | [optional]
**value** | **float** | Value for update benefit | [optional]
**recover_on_termination** | [**\PeopleHR\Model\RecoverOnTermination**](RecoverOnTermination.md) | RecoverOnTermination for update benefit |
**custom_columns** | [**\PeopleHR\Model\CustomColumnsArrayForAddNewBenefitInner[]**](CustomColumnsArrayForAddNewBenefitInner.md) | CustomColumns contain column name and column value | [optional]
**add_files** | [**\PeopleHR\Model\AddFilesArrayForUpdateBenefitInner[]**](AddFilesArrayForUpdateBenefitInner.md) | AddFiles contain file info. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
