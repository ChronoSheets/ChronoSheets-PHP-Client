# ChronoSheetsClient\TimesheetAutomationApi

All URIs are relative to https://api.chronosheets.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**timesheetAutomationCreateAutomationStep()**](TimesheetAutomationApi.md#timesheetAutomationCreateAutomationStep) | **POST** /TimesheetAutomation/CreateAutomationStep | Creates an automation step.  Timesheet automation is determined by looking at steps taken by the user.  Create a step to log some automation action, such as entering a geofence or tapping on an NFC badge.  Requires the &#39;SubmitTimesheets&#39; permission.
[**timesheetAutomationGetTimesheetAutomationAuditTrail()**](TimesheetAutomationApi.md#timesheetAutomationGetTimesheetAutomationAuditTrail) | **GET** /TimesheetAutomation/GetTimesheetAutomationAuditTrail | Retrieve the timesheet automation / alerts for geofences activities or NFC tap on/off.  Requires the &#39;ManageGeofencing&#39; permission.


## `timesheetAutomationCreateAutomationStep()`

```php
timesheetAutomationCreateAutomationStep($xChronosheetsAuth, $request): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseInt32
```

Creates an automation step.  Timesheet automation is determined by looking at steps taken by the user.  Create a step to log some automation action, such as entering a geofence or tapping on an NFC badge.  Requires the 'SubmitTimesheets' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChronoSheetsClient\Api\TimesheetAutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CreateAutomationStepRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CreateAutomationStepRequest

try {
    $result = $apiInstance->timesheetAutomationCreateAutomationStep($xChronosheetsAuth, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAutomationApi->timesheetAutomationCreateAutomationStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CreateAutomationStepRequest**](../Model/CreateAutomationStepRequest.md)|  |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseInt32**](../Model/ApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetAutomationGetTimesheetAutomationAuditTrail()`

```php
timesheetAutomationGetTimesheetAutomationAuditTrail($geofenceId, $nfcId, $userId, $sort, $order, $xChronosheetsAuth, $skip, $take): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseForPaginatedListTimesheetAutomationWithOrgAndGeofence
```

Retrieve the timesheet automation / alerts for geofences activities or NFC tap on/off.  Requires the 'ManageGeofencing' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChronoSheetsClient\Api\TimesheetAutomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geofenceId = 56; // int | The ID of the Geofence
$nfcId = 56; // int
$userId = 56; // int
$sort = 'sort_example'; // string
$order = 'order_example'; // string
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$skip = 56; // int | Skip this many records
$take = 56; // int | Take this many records

try {
    $result = $apiInstance->timesheetAutomationGetTimesheetAutomationAuditTrail($geofenceId, $nfcId, $userId, $sort, $order, $xChronosheetsAuth, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAutomationApi->timesheetAutomationGetTimesheetAutomationAuditTrail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geofenceId** | **int**| The ID of the Geofence |
 **nfcId** | **int**|  |
 **userId** | **int**|  |
 **sort** | **string**|  |
 **order** | **string**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **skip** | **int**| Skip this many records | [optional]
 **take** | **int**| Take this many records | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseForPaginatedListTimesheetAutomationWithOrgAndGeofence**](../Model/ApiResponseForPaginatedListTimesheetAutomationWithOrgAndGeofence.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
