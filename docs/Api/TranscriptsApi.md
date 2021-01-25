# ChronoSheetsClient\TranscriptsApi

All URIs are relative to https://api.chronosheets.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**transcriptsGetMyTranscript()**](TranscriptsApi.md#transcriptsGetMyTranscript) | **GET** /Transcripts/GetMyTranscript | Get an audio to text transcript for a particular audio file attachment
[**transcriptsGetMyTranscripts()**](TranscriptsApi.md#transcriptsGetMyTranscripts) | **GET** /Transcripts/GetMyTranscripts | Get my file transcripts.  Get audio to text transcripts that you&#39;ve created.


## `transcriptsGetMyTranscript()`

```php
transcriptsGetMyTranscript($fileAttachmentId, $xChronosheetsAuth): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseTranscription
```

Get an audio to text transcript for a particular audio file attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChronoSheetsClient\Api\TranscriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileAttachmentId = 56; // int | The ID of the file attachment that has a transcript.  It should be an audio file attachment.
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->transcriptsGetMyTranscript($fileAttachmentId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptsApi->transcriptsGetMyTranscript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileAttachmentId** | **int**| The ID of the file attachment that has a transcript.  It should be an audio file attachment. |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseTranscription**](../Model/ApiResponseTranscription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transcriptsGetMyTranscripts()`

```php
transcriptsGetMyTranscripts($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $keyword): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseForPaginatedListOrgReportTranscript
```

Get my file transcripts.  Get audio to text transcripts that you've created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChronoSheetsClient\Api\TranscriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The Start date of the date range.  Transcripts after this date will be obtained.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The End date of the date range.  Transcripts before this date will be obtained.
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$skip = 56; // int | Skip this many transcripts
$take = 56; // int | Take this many transcripts
$keyword = 'keyword_example'; // string | Search the text content of the transcript keywords

try {
    $result = $apiInstance->transcriptsGetMyTranscripts($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $keyword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptsApi->transcriptsGetMyTranscripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The Start date of the date range.  Transcripts after this date will be obtained. |
 **endDate** | **\DateTime**| The End date of the date range.  Transcripts before this date will be obtained. |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **skip** | **int**| Skip this many transcripts | [optional]
 **take** | **int**| Take this many transcripts | [optional]
 **keyword** | **string**| Search the text content of the transcript keywords | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseForPaginatedListOrgReportTranscript**](../Model/ApiResponseForPaginatedListOrgReportTranscript.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
