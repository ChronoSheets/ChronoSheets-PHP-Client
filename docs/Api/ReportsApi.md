# ChronoSheetsClient\ReportsApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsGetAllChartsDataAdmin**](ReportsApi.md#reportsGetAllChartsDataAdmin) | **GET** /api/Reports/GetAllChartsDataAdmin | Get Consolidated Admin Reports Data (Jobs, Tasks, Clients and Projects)
[**reportsGetAllChartsDataUser**](ReportsApi.md#reportsGetAllChartsDataUser) | **GET** /api/Reports/GetAllChartsDataUser | Get Consolidated User Reports Data (Jobs and Tasks)
[**reportsGetOrgTripById**](ReportsApi.md#reportsGetOrgTripById) | **GET** /api/Reports/GetOrgTripById | Get trip by Id, for reporting purposes
[**reportsGetOrganisationTimesheetFileAttachments**](ReportsApi.md#reportsGetOrganisationTimesheetFileAttachments) | **GET** /api/Reports/GetOrganisationTimesheetFileAttachments | Reports on Organisation timesheet file attachments
[**reportsGetOrganisationTrips**](ReportsApi.md#reportsGetOrganisationTrips) | **GET** /api/Reports/GetOrganisationTrips | Reports on Organisation trips (GPS tracking from whole organisation)
[**reportsGetRawDataAdmin**](ReportsApi.md#reportsGetRawDataAdmin) | **GET** /api/Reports/GetRawDataAdmin | Get Timesheets Raw Data
[**reportsProjectCostingsAdmin**](ReportsApi.md#reportsProjectCostingsAdmin) | **GET** /api/Reports/ProjectCostingsAdmin | Gets project cost estimations VS actual cost for date range and users
[**reportsUserJobsOverTime**](ReportsApi.md#reportsUserJobsOverTime) | **GET** /api/Reports/UserJobsOverTime | Timeseries jobs data for the logged in user


# **reportsGetAllChartsDataAdmin**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseCombinedReportsData reportsGetAllChartsDataAdmin($startDate, $endDate, $userIds, $xChronosheetsAuth)

Get Consolidated Admin Reports Data (Jobs, Tasks, Clients and Projects)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$userIds = "userIds_example"; // string | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->reportsGetAllChartsDataAdmin($startDate, $endDate, $userIds, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetAllChartsDataAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |
 **userIds** | **string**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

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

Get Consolidated User Reports Data (Jobs and Tasks)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
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
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseCombinedReportsData**](../Model/CSApiResponseCombinedReportsData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetOrgTripById**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTrip reportsGetOrgTripById($tripId, $xChronosheetsAuth)

Get trip by Id, for reporting purposes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tripId = 56; // int | The ID of the trip
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
 **tripId** | **int**| The ID of the trip |
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
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTimesheetFileAttachment reportsGetOrganisationTimesheetFileAttachments($startDate, $endDate, $skip, $take, $userIds, $xChronosheetsAuth)

Reports on Organisation timesheet file attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$skip = 56; // int | 
$take = 56; // int | 
$userIds = "userIds_example"; // string | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->reportsGetOrganisationTimesheetFileAttachments($startDate, $endDate, $skip, $take, $userIds, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetOrganisationTimesheetFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |
 **skip** | **int**|  |
 **take** | **int**|  |
 **userIds** | **string**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTimesheetFileAttachment**](../Model/CSApiResponseForPaginatedListOrgReportTimesheetFileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetOrganisationTrips**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTrip reportsGetOrganisationTrips($startDate, $endDate, $skip, $take, $userIds, $xChronosheetsAuth)

Reports on Organisation trips (GPS tracking from whole organisation)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$skip = 56; // int | 
$take = 56; // int | 
$userIds = "userIds_example"; // string | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->reportsGetOrganisationTrips($startDate, $endDate, $skip, $take, $userIds, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetOrganisationTrips: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |
 **skip** | **int**|  |
 **take** | **int**|  |
 **userIds** | **string**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListOrgReportTrip**](../Model/CSApiResponseForPaginatedListOrgReportTrip.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGetRawDataAdmin**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListRawReportItem reportsGetRawDataAdmin($startDate, $endDate, $userIds, $sort, $order, $skip, $take, $xChronosheetsAuth)

Get Timesheets Raw Data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$userIds = "userIds_example"; // string | 
$sort = "sort_example"; // string | 
$order = "order_example"; // string | 
$skip = 56; // int | 
$take = 56; // int | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->reportsGetRawDataAdmin($startDate, $endDate, $userIds, $sort, $order, $skip, $take, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetRawDataAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |
 **userIds** | **string**|  |
 **sort** | **string**|  |
 **order** | **string**|  |
 **skip** | **int**|  |
 **take** | **int**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListRawReportItem**](../Model/CSApiResponseForPaginatedListRawReportItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsProjectCostingsAdmin**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListProjectCostingReportItem reportsProjectCostingsAdmin($startDate, $endDate, $userIds, $xChronosheetsAuth)

Gets project cost estimations VS actual cost for date range and users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$userIds = "userIds_example"; // string | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->reportsProjectCostingsAdmin($startDate, $endDate, $userIds, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsProjectCostingsAdmin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |
 **userIds** | **string**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

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

Timeseries jobs data for the logged in user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
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
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListJobSeriesReportItem**](../Model/CSApiResponseListJobSeriesReportItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

