# # ClientSideUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the user | [optional]
**organisationId** | **int** | The ID of the organisation | [optional]
**userName** | **string** | The username of the user | [optional]
**firstName** | **string** | The first name of the user | [optional]
**lastName** | **string** | The last name of the user | [optional]
**emailAddress** | **string** | The email address of the user | [optional]
**roles** | **int** | A BIT field designating which Roles/Permissions the employee will have when they sign in.  See the {timesheets.types.Enums.UserRoles} Enum for more details | [optional]
**alertSettings** | **int** | A BIT field designating which Alerts the employee will receive.  See the {timesheets.types.Enums.AlertSettings} Enum for more details | [optional]
**setupWizardRequired** | **bool** | Whether or not the setup wizard is required | [optional]
**isSubscribedToNewsletter** | **bool** | Whether or not the user is subscribed to the user | [optional]
**organisation** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\Organisation**](Organisation.md) |  | [optional]
**isPrimaryAccount** | **bool** | Whether or not this account is the organisation&#39;s primary account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
