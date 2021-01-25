# # ExtendedGeofence

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jobCode** | **string** | The Job code used when the employee enters/exits the geofence | [optional]
**taskName** | **string** | The name of the task used when the employee enters/exits the geofence | [optional]
**createdBy** | **string** | The name of the employee who created the geofence | [optional]
**updatedBy** | **string** | The name of the employee who last updated the geofence | [optional]
**alertOrganisation** | **string** | The name of the organisation group who will be notified when the geofence is triggered | [optional]
**geoFencingId** | **int** | The ID of the geofence | [optional]
**orgId** | **int** | The ID of the organisation owning the geofence record | [optional]
**createdByUserId** | **int** | The ID of the user/employee who created the geofence | [optional]
**lastUpdatedByUserId** | **int** | The ID of the user/employee who last updated the geofence | [optional]
**name** | **string** | A descriptive name of the geofence | [optional]
**locationName** | **string** | The name of the approx. location of the geofence | [optional]
**coordinates** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\BasicCoordinate[]**](BasicCoordinate.md) | A list of co-ordinates specifying the geofence | [optional]
**createdAt** | [**\DateTime**](\DateTime.md) | The date and time the geofence was created.  Time is in UTC. | [optional]
**updatedAt** | [**\DateTime**](\DateTime.md) | The date and time the geofence was updated last.  Time is in UTC. | [optional]
**triggerJobCodeId** | **int** | The ID of the job code used when the employee enters/exits the geofence | [optional]
**triggerTaskId** | **int** | The ID of the task used when the employee enters/exits the geofence | [optional]
**triggerSettings** | **string** | The settings for triggering actions | [optional]
**alertToOrgGroupId** | **int** | The organisation group that will be notified when the geofence is triggered | [optional]
**alertSettings** | **string** | The settings for trigger alerts | [optional]
**startTimeHour** | **int** | The hour start time. E.g. 13 would be 1pm.  Time is in 24hr format. | [optional]
**startTimeMinute** | **int** | The minute start time.  E.g. 46 would be the 46th minute of the hour. | [optional]
**endTimeHour** | **int** | The hour end time. E.g. 21 would be 9pm.  Time is in 24hr format. | [optional]
**endTimeMinute** | **int** | The minute end time.  E.g. 13 would be the 13th minute of the hour. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
