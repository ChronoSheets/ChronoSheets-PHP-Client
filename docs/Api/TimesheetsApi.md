# ChronoSheetsClient\TimesheetsApi

All URIs are relative to *https://api.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timesheetsCreateSingleTimesheet**](TimesheetsApi.md#timesheetsCreateSingleTimesheet) | **POST** /Timesheets/CreateSingleTimesheet | Inserts a single timesheet record.    Requires the &#39;SubmitTimesheets&#39; permission.
[**timesheetsDeleteTimesheet**](TimesheetsApi.md#timesheetsDeleteTimesheet) | **DELETE** /Timesheets/DeleteTimesheet | Delete a timesheet.    Requires the &#39;SubmitTimesheets&#39; permission.
[**timesheetsGetTimesheets**](TimesheetsApi.md#timesheetsGetTimesheets) | **GET** /Timesheets/GetTimesheets | Get timesheets between start and end dates.  Note: the date range cannot exceed 24 hours.  This method is generally used to get timesheets for a particular day.    Requires the &#39;SubmitTimesheets&#39; permission.
[**timesheetsUpdateTimesheets**](TimesheetsApi.md#timesheetsUpdateTimesheets) | **PUT** /Timesheets/UpdateTimesheets | Batch update timesheets.    Requires the &#39;SubmitTimesheets&#39; permission.



## timesheetsCreateSingleTimesheet

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseInt32 timesheetsCreateSingleTimesheet($xChronosheetsAuth, $request)

Inserts a single timesheet record.    Requires the 'SubmitTimesheets' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\Timesheet(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\Timesheet | A Timesheet Request object containing values for the new Timesheet to create

try {
    $result = $apiInstance->timesheetsCreateSingleTimesheet($xChronosheetsAuth, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetsCreateSingleTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\Timesheet**](../Model/Timesheet.md)| A Timesheet Request object containing values for the new Timesheet to create |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseInt32**](../Model/ApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## timesheetsDeleteTimesheet

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseBoolean timesheetsDeleteTimesheet($timesheetId, $xChronosheetsAuth)

Delete a timesheet.    Requires the 'SubmitTimesheets' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timesheetId = 56; // int | The ID of the Timesheet you want to delete
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->timesheetsDeleteTimesheet($timesheetId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetsDeleteTimesheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timesheetId** | **int**| The ID of the Timesheet you want to delete |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseBoolean**](../Model/ApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## timesheetsGetTimesheets

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListTimesheet timesheetsGetTimesheets($startDate, $endDate, $xChronosheetsAuth)

Get timesheets between start and end dates.  Note: the date range cannot exceed 24 hours.  This method is generally used to get timesheets for a particular day.    Requires the 'SubmitTimesheets' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the date range
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the date range
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->timesheetsGetTimesheets($startDate, $endDate, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetsGetTimesheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The start date of the date range |
 **endDate** | **\DateTime**| The end date of the date range |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListTimesheet**](../Model/ApiResponseListTimesheet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## timesheetsUpdateTimesheets

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListInt32 timesheetsUpdateTimesheets($xChronosheetsAuth, $request)

Batch update timesheets.    Requires the 'SubmitTimesheets' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\TimesheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\BatchUpdateTimesheetRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\BatchUpdateTimesheetRequest | A BatchUpdateTimesheet Request object containing values for the new Timesheets to create or update.  If the timesheet Id is specified, then an update will be performed, else the timesheet record will be created.

try {
    $result = $apiInstance->timesheetsUpdateTimesheets($xChronosheetsAuth, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetsApi->timesheetsUpdateTimesheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\BatchUpdateTimesheetRequest**](../Model/BatchUpdateTimesheetRequest.md)| A BatchUpdateTimesheet Request object containing values for the new Timesheets to create or update.  If the timesheet Id is specified, then an update will be performed, else the timesheet record will be created. |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListInt32**](../Model/ApiResponseListInt32.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

