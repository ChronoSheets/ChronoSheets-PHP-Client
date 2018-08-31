# ChronoSheetsClient\ReportsApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsGetAllChartsDataAdmin**](ReportsApi.md#reportsGetAllChartsDataAdmin) | **GET** /api/Reports/GetAllChartsDataAdmin | Get Consolidated Admin Reports Data (Jobs, Tasks, Clients and Projects).  These are the organisation wide reports, with data from potentially all employees.    Requires the &#39;ReportAdmin&#39; permission.
[**reportsGetAllChartsDataUser**](ReportsApi.md#reportsGetAllChartsDataUser) | **GET** /api/Reports/GetAllChartsDataUser | Get Consolidated User Reports Data (Jobs, Tasks, Clients and Projects).  These are the user&#39;s own reports.    Requires the &#39;ViewOwnReports&#39; permission.
[**reportsGetFleetSummaryAdmin**](ReportsApi.md#reportsGetFleetSummaryAdmin) | **GET** /api/Reports/GetFleetSummaryAdmin | Gets a summary report, which includes total distance travelled and total running costs, for vehicles within your organisation  Requires the &#39;ReportAdmin&#39; permission.
[**reportsGetOrgTripById**](ReportsApi.md#reportsGetOrgTripById) | **GET** /api/Reports/GetOrgTripById | Get trip by Id, for reporting purposes.    Requires the &#39;ReportAdmin&#39; permission.
[**reportsGetOrganisationTimesheetFileAttachments**](ReportsApi.md#reportsGetOrganisationTimesheetFileAttachments) | **GET** /api/Reports/GetOrganisationTimesheetFileAttachments | Reports on Organisation timesheet file attachments (files uploaded and attached to timesheet records)  Requires the &#39;ReportAdmin&#39; permission.
[**reportsGetOrganisationTranscripts**](ReportsApi.md#reportsGetOrganisationTranscripts) | **GET** /api/Reports/GetOrganisationTranscripts | Reports on Organisation transcripts (When an audio file is attached, it will be automatically transcribed, these are the transcriptions)    Requires the &#39;ReportAdmin&#39; permission.
[**reportsGetOrganisationTrips**](ReportsApi.md#reportsGetOrganisationTrips) | **GET** /api/Reports/GetOrganisationTrips | Reports on Organisation trips (GPS tracking from whole organisation).    Requires the &#39;ReportAdmin&#39; permission.
[**reportsGetRawDataAdmin**](ReportsApi.md#reportsGetRawDataAdmin) | **GET** /api/Reports/GetRawDataAdmin | Get Timesheets Raw Data.  This data details each timesheet record.  These are the organisation wide timesheet records, with data from potentially all employees.    Requires the &#39;ReportAdmin&#39; permission.
[**reportsProjectCostingsAdmin**](ReportsApi.md#reportsProjectCostingsAdmin) | **GET** /api/Reports/ProjectCostingsAdmin | Gets project cost estimations VS actual cost for date range and users.    Requires the &#39;ReportAdmin&#39; permission.
[**reportsUserJobsOverTime**](ReportsApi.md#reportsUserJobsOverTime) | **GET** /api/Reports/UserJobsOverTime | Timeseries jobs data for the logged in user.    Requires the &#39;ViewOwnReports&#39; or &#39;SubmitTimesheets&#39;.


# **reportsGetAllChartsDataAdmin**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseCombinedReportsData reportsGetAllChartsDataAdmin($startDate, $endDate, $xChronosheetsAuth, $userIds)

Get Consolidated Admin Reports Data (Jobs, Tasks, Clients and Projects).  These are the organisation wide reports, with data from potentially all employees.    Requires the 'ReportAdmin' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the date range.  Report data in the response is after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the date range.  Report data in the response is before this date
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token
$userIds = "userIds_example"; // string | A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string.

try {
    $result = $apiInstance->reportsGetAllChartsDataAdmin($startDate, $endDate, $xChronosheetsAuth, $userIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetAllChartsDataAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date for the date range.  Report data in the response is after this date |
 **endDate** | **\DateTime**| The end date for the date range.  Report data in the response is before this date |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **userIds** | **string**| A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string. | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseCombinedReportsData**](../Model/CSApiResponseCombinedReportsData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetAllChartsDataUser**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseCombinedReportsData reportsGetAllChartsDataUser($startDate, $endDate, $xChronosheetsAuth)

Get Consolidated User Reports Data (Jobs, Tasks, Clients and Projects).  These are the user's own reports.    Requires the 'ViewOwnReports' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the date range.  Report data in the response is after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the date range.  Report data in the response is before this date
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->reportsGetAllChartsDataUser($startDate, $endDate, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetAllChartsDataUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date for the date range.  Report data in the response is after this date |
 **endDate** | **\DateTime**| The end date for the date range.  Report data in the response is before this date |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseCombinedReportsData**](../Model/CSApiResponseCombinedReportsData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetFleetSummaryAdmin**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListFleetSummaryReportItem reportsGetFleetSummaryAdmin($startDate, $endDate, $xChronosheetsAuth, $userIds)

Gets a summary report, which includes total distance travelled and total running costs, for vehicles within your organisation  Requires the 'ReportAdmin' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the date range.  Report data in the response is after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the date range.  Report data in the response is before this date
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token
$userIds = "userIds_example"; // string | A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string.

try {
    $result = $apiInstance->reportsGetFleetSummaryAdmin($startDate, $endDate, $xChronosheetsAuth, $userIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetFleetSummaryAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date for the date range.  Report data in the response is after this date |
 **endDate** | **\DateTime**| The end date for the date range.  Report data in the response is before this date |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **userIds** | **string**| A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string. | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListFleetSummaryReportItem**](../Model/CSApiResponseListFleetSummaryReportItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetOrgTripById**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTrip reportsGetOrgTripById($tripId, $xChronosheetsAuth)

Get trip by Id, for reporting purposes.    Requires the 'ReportAdmin' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tripId = 56; // int | The ID of the Trip you want to get
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->reportsGetOrgTripById($tripId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetOrgTripById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tripId** | **int**| The ID of the Trip you want to get |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTrip**](../Model/CSApiResponseTrip.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetOrganisationTimesheetFileAttachments**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTimesheetFileAttachment reportsGetOrganisationTimesheetFileAttachments($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $userIds)

Reports on Organisation timesheet file attachments (files uploaded and attached to timesheet records)  Requires the 'ReportAdmin' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the date range.  Report data in the response is after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the date range.  Report data in the response is before this date
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token
$skip = 56; // int | Skip this many items
$take = 56; // int | Take this many items
$userIds = "userIds_example"; // string | A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string.

try {
    $result = $apiInstance->reportsGetOrganisationTimesheetFileAttachments($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $userIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetOrganisationTimesheetFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date for the date range.  Report data in the response is after this date |
 **endDate** | **\DateTime**| The end date for the date range.  Report data in the response is before this date |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **skip** | **int**| Skip this many items | [optional]
 **take** | **int**| Take this many items | [optional]
 **userIds** | **string**| A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string. | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTimesheetFileAttachment**](../Model/CSApiResponseForPaginatedListOrgReportTimesheetFileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetOrganisationTranscripts**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTranscript reportsGetOrganisationTranscripts($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $userIds, $keywords)

Reports on Organisation transcripts (When an audio file is attached, it will be automatically transcribed, these are the transcriptions)    Requires the 'ReportAdmin' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the date range.  Report data in the response is after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the date range.  Report data in the response is before this date
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token
$skip = 56; // int | Skip this many items
$take = 56; // int | Take this many items
$userIds = "userIds_example"; // string | A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string.
$keywords = "keywords_example"; // string | Search the transcripts by keyword(s)

try {
    $result = $apiInstance->reportsGetOrganisationTranscripts($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $userIds, $keywords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetOrganisationTranscripts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date for the date range.  Report data in the response is after this date |
 **endDate** | **\DateTime**| The end date for the date range.  Report data in the response is before this date |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **skip** | **int**| Skip this many items | [optional]
 **take** | **int**| Take this many items | [optional]
 **userIds** | **string**| A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string. | [optional]
 **keywords** | **string**| Search the transcripts by keyword(s) | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTranscript**](../Model/CSApiResponseForPaginatedListOrgReportTranscript.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetOrganisationTrips**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTrip reportsGetOrganisationTrips($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $userIds)

Reports on Organisation trips (GPS tracking from whole organisation).    Requires the 'ReportAdmin' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the date range.  Report data in the response is after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the date range.  Report data in the response is before this date
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token
$skip = 56; // int | Skip this many items
$take = 56; // int | Take this many items
$userIds = "userIds_example"; // string | A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string.

try {
    $result = $apiInstance->reportsGetOrganisationTrips($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $userIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetOrganisationTrips: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date for the date range.  Report data in the response is after this date |
 **endDate** | **\DateTime**| The end date for the date range.  Report data in the response is before this date |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **skip** | **int**| Skip this many items | [optional]
 **take** | **int**| Take this many items | [optional]
 **userIds** | **string**| A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string. | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTrip**](../Model/CSApiResponseForPaginatedListOrgReportTrip.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetRawDataAdmin**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListRawReportItem reportsGetRawDataAdmin($startDate, $endDate, $xChronosheetsAuth, $userIds, $sort, $order, $skip, $take)

Get Timesheets Raw Data.  This data details each timesheet record.  These are the organisation wide timesheet records, with data from potentially all employees.    Requires the 'ReportAdmin' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the date range.  Report data in the response is after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the date range.  Report data in the response is before this date
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token
$userIds = "userIds_example"; // string | A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string.
$sort = "sort_example"; // string | Decide which column to sort on
$order = "order_example"; // string | Decide which direction to sort the column
$skip = 56; // int | Skip this many rows
$take = 56; // int | Take this many rows

try {
    $result = $apiInstance->reportsGetRawDataAdmin($startDate, $endDate, $xChronosheetsAuth, $userIds, $sort, $order, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetRawDataAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date for the date range.  Report data in the response is after this date |
 **endDate** | **\DateTime**| The end date for the date range.  Report data in the response is before this date |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **userIds** | **string**| A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string. | [optional]
 **sort** | **string**| Decide which column to sort on | [optional]
 **order** | **string**| Decide which direction to sort the column | [optional]
 **skip** | **int**| Skip this many rows | [optional]
 **take** | **int**| Take this many rows | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListRawReportItem**](../Model/CSApiResponseForPaginatedListRawReportItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsProjectCostingsAdmin**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListProjectCostingReportItem reportsProjectCostingsAdmin($startDate, $endDate, $xChronosheetsAuth, $userIds)

Gets project cost estimations VS actual cost for date range and users.    Requires the 'ReportAdmin' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the date range.  Report data in the response is after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the date range.  Report data in the response is before this date
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token
$userIds = "userIds_example"; // string | A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string.

try {
    $result = $apiInstance->reportsProjectCostingsAdmin($startDate, $endDate, $xChronosheetsAuth, $userIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsProjectCostingsAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date for the date range.  Report data in the response is after this date |
 **endDate** | **\DateTime**| The end date for the date range.  Report data in the response is before this date |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **userIds** | **string**| A comma-separated list of user Ids, if you want to filter the report data to particular users.  If you want all, send a blank string. | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListProjectCostingReportItem**](../Model/CSApiResponseListProjectCostingReportItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsUserJobsOverTime**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListJobSeriesReportItem reportsUserJobsOverTime($startDate, $endDate, $xChronosheetsAuth)

Timeseries jobs data for the logged in user.    Requires the 'ViewOwnReports' or 'SubmitTimesheets'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the date range.  Report data in the response is after this date
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the date range.  Report data in the response is before this date
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->reportsUserJobsOverTime($startDate, $endDate, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsUserJobsOverTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date for the date range.  Report data in the response is after this date |
 **endDate** | **\DateTime**| The end date for the date range.  Report data in the response is before this date |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListJobSeriesReportItem**](../Model/CSApiResponseListJobSeriesReportItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

