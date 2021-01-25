# ChronoSheetsClient\FileAttachmentsApi

All URIs are relative to https://api.chronosheets.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fileAttachmentsDeleteTimesheetFileAttachment()**](FileAttachmentsApi.md#fileAttachmentsDeleteTimesheetFileAttachment) | **DELETE** /FileAttachments/DeleteTimesheetFileAttachment | Delete a particular timesheet file attachment  Requires the &#39;SubmitTimesheets&#39; permission.
[**fileAttachmentsGetFileAttachmentById()**](FileAttachmentsApi.md#fileAttachmentsGetFileAttachmentById) | **GET** /FileAttachments/GetFileAttachmentById | Get a particular file attachment by ID.  User must own the file attachment for access.
[**fileAttachmentsGetMyFileAttachments()**](FileAttachmentsApi.md#fileAttachmentsGetMyFileAttachments) | **GET** /FileAttachments/GetMyFileAttachments | Get my file attachments.  Get files you&#39;ve attached to timesheets.


## `fileAttachmentsDeleteTimesheetFileAttachment()`

```php
fileAttachmentsDeleteTimesheetFileAttachment($fileAttachmentId, $xChronosheetsAuth): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseBoolean
```

Delete a particular timesheet file attachment  Requires the 'SubmitTimesheets' permission.

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
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->fileAttachmentsDeleteTimesheetFileAttachment($fileAttachmentId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAttachmentsApi->fileAttachmentsDeleteTimesheetFileAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileAttachmentId** | **int**| The Id of the file attachment to delete |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseBoolean**](../Model/ApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileAttachmentsGetFileAttachmentById()`

```php
fileAttachmentsGetFileAttachmentById($fileAttachmentId, $xChronosheetsAuth): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseTimesheetFileAttachment
```

Get a particular file attachment by ID.  User must own the file attachment for access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChronoSheetsClient\Api\FileAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileAttachmentId = 56; // int | The ID of the file attachment
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->fileAttachmentsGetFileAttachmentById($fileAttachmentId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAttachmentsApi->fileAttachmentsGetFileAttachmentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileAttachmentId** | **int**| The ID of the file attachment |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseTimesheetFileAttachment**](../Model/ApiResponseTimesheetFileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileAttachmentsGetMyFileAttachments()`

```php
fileAttachmentsGetMyFileAttachments($startDate, $endDate, $xChronosheetsAuth, $skip, $take): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseForPaginatedListTimesheetFileAttachment
```

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
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$skip = 56; // int | Skip this many File attachments
$take = 56; // int | Take this many File attachments

try {
    $result = $apiInstance->fileAttachmentsGetMyFileAttachments($startDate, $endDate, $xChronosheetsAuth, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileAttachmentsApi->fileAttachmentsGetMyFileAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The Start date of the date range.  File attachments after this date will be obtained. |
 **endDate** | **\DateTime**| The End date of the date range.  File attachments before this date will be obtained. |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **skip** | **int**| Skip this many File attachments | [optional]
 **take** | **int**| Take this many File attachments | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseForPaginatedListTimesheetFileAttachment**](../Model/ApiResponseForPaginatedListTimesheetFileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
