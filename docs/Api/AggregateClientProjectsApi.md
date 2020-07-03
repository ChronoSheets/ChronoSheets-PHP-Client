# ChronoSheetsClient\AggregateClientProjectsApi

All URIs are relative to *https://api.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aggregateClientProjectsGetAggregateClientProjects**](AggregateClientProjectsApi.md#aggregateClientProjectsGetAggregateClientProjects) | **GET** /AggregateClientProjects/GetAggregateClientProjects | Get client and project information, aggregated.    Requires the &#39;SubmitTimesheets&#39; or &#39;ManageClientsAndProjects&#39; permissions.



## aggregateClientProjectsGetAggregateClientProjects

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListAggregateClient aggregateClientProjectsGetAggregateClientProjects($xChronosheetsAuth)

Get client and project information, aggregated.    Requires the 'SubmitTimesheets' or 'ManageClientsAndProjects' permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\AggregateClientProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->aggregateClientProjectsGetAggregateClientProjects($xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregateClientProjectsApi->aggregateClientProjectsGetAggregateClientProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListAggregateClient**](../Model/ApiResponseListAggregateClient.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

