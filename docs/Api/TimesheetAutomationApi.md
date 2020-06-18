# ChronoSheetsClient\TimesheetAutomationApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timesheetAutomationCreateAutomationStep**](TimesheetAutomationApi.md#timesheetAutomationCreateAutomationStep) | **POST** /api/TimesheetAutomation/CreateAutomationStep | Creates an automation step.  Timesheet automation is determined by looking at steps taken by the user.  Create a step to log some automation action, such as entering a geofence or tapping on an NFC badge.  Requires the &#39;SubmitTimesheets&#39; permission.


# **timesheetAutomationCreateAutomationStep**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32 timesheetAutomationCreateAutomationStep($request, $xChronosheetsAuth)

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
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSCreateAutomationStepRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSCreateAutomationStepRequest | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->timesheetAutomationCreateAutomationStep($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetAutomationApi->timesheetAutomationCreateAutomationStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSCreateAutomationStepRequest**](../Model/CSCreateAutomationStepRequest.md)|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32**](../Model/CSApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

