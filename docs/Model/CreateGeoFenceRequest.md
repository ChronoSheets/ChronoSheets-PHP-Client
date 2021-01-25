# # CreateGeoFenceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the geo fence | [optional]
**fenceCoordinates** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\BasicCoordinate[]**](BasicCoordinate.md) | A list of coordinates specifying the geofence region | [optional]
**triggerJobCodeId** | **int** | The job code to be used when the person enters/leaves the geofence | [optional]
**triggerTaskId** | **int** | The task to be used when the person enters/leaves the geofence | [optional]
**sendAlertToOrgGroupId** | **int** | Send an alert to a user, specified by their user ID | [optional]
**alertSettings** | **string** | Define when you want the alerts to be sent | [optional]
**triggerSettings** | **string** | Define how to you want to trigger the timesheet automation | [optional]
**startTimeHour** | **int** | The start hour in which this geofence should apply.  After this time, the geofence will be active. | [optional]
**startTimeMinute** | **int** | The start minute in which this geofence should apply.  After this time, the geofence will be active. | [optional]
**endTimeHour** | **int** | The end hour in which this geofence will stop applying.  After this time, the geofence will be inactive. | [optional]
**endTimeMinute** | **int** | The end minute in which this geofence will stop applying.  After this time, the geofence will be inactive. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
