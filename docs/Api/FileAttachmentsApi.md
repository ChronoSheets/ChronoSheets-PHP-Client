# ChronoSheetsClient\FileAttachmentsApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fileAttachmentsDeleteTimesheetFileAttachment**](FileAttachmentsApi.md#fileAttachmentsDeleteTimesheetFileAttachment) | **DELETE** /api/FileAttachments/DeleteTimesheetFileAttachment | Delete a particular timesheet file attachment
[**fileAttachmentsGetMyFileAttachments**](FileAttachmentsApi.md#fileAttachmentsGetMyFileAttachments) | **GET** /api/FileAttachments/GetMyFileAttachments | Get my file attachments.  Get files you&#39;ve attached to timesheets.


# **fileAttachmentsDeleteTimesheetFileAttachment**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean fileAttachmentsDeleteTimesheetFileAttachment($fileAttachmentId, $xChronosheetsAuth)

Delete a particular timesheet file attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\FileAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileAttachmentId = 56; // int | The Id of the file attachment to delete
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->fileAttachmentsDeleteTimesheetFileAttachment($fileAttachmentId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAttachmentsApi->fileAttachmentsDeleteTimesheetFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileAttachmentId** | **int**| The Id of the file attachment to delete |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean**](../Model/CSApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileAttachmentsGetMyFileAttachments**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListTimesheetFileAttachment fileAttachmentsGetMyFileAttachments($startDate, $endDate, $skip, $take, $xChronosheetsAuth)

Get my file attachments.  Get files you've attached to timesheets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\FileAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The Start date of the date range.  File attachments after this date will be obtained.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The End date of the date range.  File attachments before this date will be obtained.
$skip = 56; // int | Skip this many File attachments
$take = 56; // int | Take this many File attachments
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->fileAttachmentsGetMyFileAttachments($startDate, $endDate, $skip, $take, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAttachmentsApi->fileAttachmentsGetMyFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The Start date of the date range.  File attachments after this date will be obtained. |
 **endDate** | **\DateTime**| The End date of the date range.  File attachments before this date will be obtained. |
 **skip** | **int**| Skip this many File attachments |
 **take** | **int**| Take this many File attachments |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListTimesheetFileAttachment**](../Model/CSApiResponseForPaginatedListTimesheetFileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

