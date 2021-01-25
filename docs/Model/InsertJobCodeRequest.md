# # InsertJobCodeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | A short code for the Job.  This is referred to as a Job Code | [optional]
**projectId** | **int** | The linked Project.  Time spent with this JobCode is on this Project | [optional]
**clientId** | **int** | The linked Client.  Time spent with this JobCode is for this Client | [optional]
**linkedTaskIds** | **int[]** | A list of Task Ids.  This are the Tasks that become available to the employee when they select this JobCode | [optional]
**linkedOrgGroupIds** | **int[]** | Optionally restrict access to the JobCode by specifying which Organisation Groups can use it | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
