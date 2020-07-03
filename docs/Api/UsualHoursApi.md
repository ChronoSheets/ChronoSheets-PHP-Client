# ChronoSheetsClient\UsualHoursApi

All URIs are relative to *https://api.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usualHoursGetUsualHours**](UsualHoursApi.md#usualHoursGetUsualHours) | **GET** /UsualHours/GetUsualHours | Get usual hours (rostered hours) for an employee.  Requires the &#39;ManageOrganisationUsers&#39; permission.
[**usualHoursSetUsualHours**](UsualHoursApi.md#usualHoursSetUsualHours) | **PUT** /UsualHours/SetUsualHours | Set usual hours (rostered hours) for an employee.  Requires the &#39;ManageOrganisationUsers&#39; permission.



## usualHoursGetUsualHours

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListUsualHoursDay usualHoursGetUsualHours($userId, $xChronosheetsAuth)

Get usual hours (rostered hours) for an employee.  Requires the 'ManageOrganisationUsers' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\UsualHoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 56; // int | The ID of the User for which you want to get UsualHours for
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

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
 **userId** | **int**| The ID of the User for which you want to get UsualHours for |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListUsualHoursDay**](../Model/ApiResponseListUsualHoursDay.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usualHoursSetUsualHours

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseBoolean usualHoursSetUsualHours($xChronosheetsAuth, $request)

Set usual hours (rostered hours) for an employee.  Requires the 'ManageOrganisationUsers' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\UsualHoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\SetUsualHoursRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\SetUsualHoursRequest | A Set UsualHours Request object containing updated data.  Make sure to specify the Day types in the request object so that ChronoSheets knows which Days to update

try {
    $result = $apiInstance->usualHoursSetUsualHours($xChronosheetsAuth, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsualHoursApi->usualHoursSetUsualHours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\SetUsualHoursRequest**](../Model/SetUsualHoursRequest.md)| A Set UsualHours Request object containing updated data.  Make sure to specify the Day types in the request object so that ChronoSheets knows which Days to update |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseBoolean**](../Model/ApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

