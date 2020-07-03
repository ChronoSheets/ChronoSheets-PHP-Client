# # InsertUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**emailAddress** | **string** | The Email Address of the employee | [optional] 
**firstName** | **string** | The First Name of the employee | [optional] 
**lastName** | **string** | The Last Name of the employee | [optional] 
**isSubscribedToNewsletter** | **bool** | Whether or not the employee is subscribed to ChronoSheets newsletters | [optional] 
**roles** | **int** | A BIT field designating which Roles/Permissions the employee will have when they sign in.  See the {timesheets.types.Enums.UserRoles} Enum for more details | [optional] 
**alertSettings** | **int** | A BIT field designating which Alerts the employee will receive.  See the {timesheets.types.Enums.AlertSettings} Enum for more details | [optional] 
**userName** | **string** | The UserName of the employee.  This can be used when logging into ChronoSheets | [optional] 
**hourlyPayRate** | **double** | Set the starting usual Hourly Pay Rate with this value.  This is the Pay Rate the employee receives for working during Rostered Hours | [optional] 
**hourlyOvertimePayRate** | **double** | Set the starting usual Overtime Hourly Pay Rate with this value.  This is the Pay Rate the employee receives for working outside of Rostered Hours | [optional] 
**currentDate** | [**\DateTime**](\DateTime.md) | The Current date time | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


