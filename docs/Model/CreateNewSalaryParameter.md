# # CreateNewSalaryParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_key** | **string** | APIKey for Create New Salary of employee |
**action** | **string** | Action name &#x3D; CreateNewSalary |
**employee_id** | **string** | Employee Id for create new salary |
**effective_from** | **\DateTime** | EffectiveFrom for create new salary |
**salary_type** | [**\OpenAPI\Client\Model\SalaryType**](SalaryType.md) | SalaryType for create new salary |
**payment_frequency** | [**\OpenAPI\Client\Model\PaymentFrequency**](PaymentFrequency.md) | PaymentFrequency for create new salary |
**salary_amount** | **int** | SalaryAmount for create new salary |
**currency_code** | **string** | CurrencyCode for create new salary |
**change_reason** | **string** | ChangeReason for create new salary |
**comments** | **string** | Comments for create new salary | [optional]
**deductions** | [**\OpenAPI\Client\Model\DeductionsArrayInner[]**](DeductionsArrayInner.md) | Deductions of user Array |
**entitlements** | [**\OpenAPI\Client\Model\EntitlementsArrayInner[]**](EntitlementsArrayInner.md) | Entitlements of user |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
