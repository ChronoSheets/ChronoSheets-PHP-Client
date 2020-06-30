# ChronoSheetsClient\UserPayRatesApi

All URIs are relative to *https://api.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userPayRatesCreatePayRate**](UserPayRatesApi.md#userPayRatesCreatePayRate) | **POST** /UserPayRates/CreatePayRate | Create a new pay rate for a particular user, archiving the previous pay rate.    Requires the &#39;ManageOrganisationUsers&#39; permission.
[**userPayRatesGetPayRates**](UserPayRatesApi.md#userPayRatesGetPayRates) | **GET** /UserPayRates/GetPayRates | Get a collection of pay rates for a particular user, specified by user id.    Requires the &#39;ManageOrganisationUsers&#39; permission.


# **userPayRatesCreatePayRate**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32 userPayRatesCreatePayRate($request, $xChronosheetsAuth)

Create a new pay rate for a particular user, archiving the previous pay rate.    Requires the 'ManageOrganisationUsers' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\UserPayRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSInsertUserHourlyRateRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSInsertUserHourlyRateRequest | An Insert UserHourlyRate Request object containing values for the new UserHourlyRate to create
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->userPayRatesCreatePayRate($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPayRatesApi->userPayRatesCreatePayRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSInsertUserHourlyRateRequest**](../Model/CSInsertUserHourlyRateRequest.md)| An Insert UserHourlyRate Request object containing values for the new UserHourlyRate to create |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32**](../Model/CSApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPayRatesGetPayRates**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListUserHourlyRate userPayRatesGetPayRates($userId, $xChronosheetsAuth)

Get a collection of pay rates for a particular user, specified by user id.    Requires the 'ManageOrganisationUsers' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\UserPayRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 56; // int | The ID of the User for which you want to get UserHourlyRate objects
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->userPayRatesGetPayRates($userId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPayRatesApi->userPayRatesGetPayRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**| The ID of the User for which you want to get UserHourlyRate objects |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListUserHourlyRate**](../Model/CSApiResponseListUserHourlyRate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

