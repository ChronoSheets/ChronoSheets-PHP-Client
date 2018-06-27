# ChronoSheetsClient\UsualHoursApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usualHoursGetUsualHours**](UsualHoursApi.md#usualHoursGetUsualHours) | **GET** /api/UsualHours/GetUsualHours | Get usual hours (rostered hours) for an employee
[**usualHoursSetUsualHours**](UsualHoursApi.md#usualHoursSetUsualHours) | **POST** /api/UsualHours/SetUsualHours | Set usual hours (rostered hours) for an employee


# **usualHoursGetUsualHours**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListUsualHoursDay usualHoursGetUsualHours($userId, $xChronosheetsAuth)

Get usual hours (rostered hours) for an employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\UsualHoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 56; // int | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->usualHoursGetUsualHours($userId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsualHoursApi->usualHoursGetUsualHours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListUsualHoursDay**](../Model/CSApiResponseListUsualHoursDay.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usualHoursSetUsualHours**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean usualHoursSetUsualHours($request, $xChronosheetsAuth)

Set usual hours (rostered hours) for an employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\UsualHoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSSetUsualHoursRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSSetUsualHoursRequest | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->usualHoursSetUsualHours($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsualHoursApi->usualHoursSetUsualHours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSSetUsualHoursRequest**](../Model/CSSetUsualHoursRequest.md)|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean**](../Model/CSApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

