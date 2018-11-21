# CSAggregateJobCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availableTasks** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSAggregateJobTask[]**](CSAggregateJobTask.md) | The list of available tasks under this job code | [optional] 
**permittedEmployees** | **int[]** | The list of employee IDs that are permitted to record timesheets with this job code (empty means everyone) | [optional] 
**id** | **int** | The ID of the job code (not the code itself) | [optional] 
**code** | **string** | The job code itself | [optional] 
**client** | **string** | The name of the client | [optional] 
**clientId** | **int** | The ID of the client | [optional] 
**project** | **string** | The name of the project | [optional] 
**projectId** | **int** | The ID of the project | [optional] 
**organisationId** | **int** | Your organisation ID | [optional] 
**isDeleted** | **bool** | A flag indicating whether or not the job code has been marked as deleted | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


