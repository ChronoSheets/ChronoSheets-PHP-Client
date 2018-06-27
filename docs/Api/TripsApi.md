# ChronoSheetsClient\TripsApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tripsCreateTrip**](TripsApi.md#tripsCreateTrip) | **POST** /api/Trips/CreateTrip | Create a new trip.  Important: create a timesheet record before calling this, passing in the new timesheet record id as a reference.
[**tripsGetMyTripById**](TripsApi.md#tripsGetMyTripById) | **GET** /api/Trips/GetMyTripById | Get trip by Id
[**tripsGetMyTrips**](TripsApi.md#tripsGetMyTrips) | **GET** /api/Trips/GetMyTrips | Get my trips


# **tripsCreateTrip**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32 tripsCreateTrip($request, $xChronosheetsAuth)

Create a new trip.  Important: create a timesheet record before calling this, passing in the new timesheet record id as a reference.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TripsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSCreateTripRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSCreateTripRequest | The create trip request
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tripsCreateTrip($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TripsApi->tripsCreateTrip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSCreateTripRequest**](../Model/CSCreateTripRequest.md)| The create trip request |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32**](../Model/CSApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tripsGetMyTripById**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTrip tripsGetMyTripById($tripId, $xChronosheetsAuth)

Get trip by Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TripsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tripId = 56; // int | The ID of the trip
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tripsGetMyTripById($tripId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TripsApi->tripsGetMyTripById: ', $e->getMessage(), PHP_EOL;
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

# **tripsGetMyTrips**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListTrip tripsGetMyTrips($startDate, $endDate, $skip, $take, $vehicleId, $xChronosheetsAuth)

Get my trips

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TripsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$skip = 56; // int | 
$take = 56; // int | 
$vehicleId = 56; // int | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tripsGetMyTrips($startDate, $endDate, $skip, $take, $vehicleId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TripsApi->tripsGetMyTrips: ', $e->getMessage(), PHP_EOL;
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
 **vehicleId** | **int**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListTrip**](../Model/CSApiResponseForPaginatedListTrip.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

