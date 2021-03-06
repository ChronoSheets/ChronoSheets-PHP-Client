# ChronoSheetsClient\TripsApi

All URIs are relative to https://api.chronosheets.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tripsCreateTrip()**](TripsApi.md#tripsCreateTrip) | **POST** /Trips/CreateTrip | Create a new trip.  Important: create a timesheet record before calling this, passing in the new timesheet record id as a reference.    Requires the &#39;SubmitTimesheets&#39; permission.
[**tripsGetMyTripById()**](TripsApi.md#tripsGetMyTripById) | **GET** /Trips/GetMyTripById | Get trip by Id.    Requires the &#39;ViewMyTrips&#39; permission.
[**tripsGetMyTrips()**](TripsApi.md#tripsGetMyTrips) | **GET** /Trips/GetMyTrips | Get my trips.  Get the GPS trips you&#39;ve recorded and submitted.    Requires the &#39;ViewMyTrips&#39; permission.


## `tripsCreateTrip()`

```php
tripsCreateTrip($xChronosheetsAuth, $request): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseInt32
```

Create a new trip.  Important: create a timesheet record before calling this, passing in the new timesheet record id as a reference.    Requires the 'SubmitTimesheets' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChronoSheetsClient\Api\TripsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CreateTripRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CreateTripRequest | A Create Trip Request object containing values for the new Trip to create

try {
    $result = $apiInstance->tripsCreateTrip($xChronosheetsAuth, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TripsApi->tripsCreateTrip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CreateTripRequest**](../Model/CreateTripRequest.md)| A Create Trip Request object containing values for the new Trip to create |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseInt32**](../Model/ApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tripsGetMyTripById()`

```php
tripsGetMyTripById($tripId, $xChronosheetsAuth): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseTrip
```

Get trip by Id.    Requires the 'ViewMyTrips' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChronoSheetsClient\Api\TripsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tripId = 56; // int | The ID of the Trip you want to get
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tripsGetMyTripById($tripId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TripsApi->tripsGetMyTripById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tripId** | **int**| The ID of the Trip you want to get |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseTrip**](../Model/ApiResponseTrip.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tripsGetMyTrips()`

```php
tripsGetMyTrips($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $vehicleId): \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseForPaginatedListTrip
```

Get my trips.  Get the GPS trips you've recorded and submitted.    Requires the 'ViewMyTrips' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ChronoSheetsClient\Api\TripsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The Start date of the date range.  Trips after this date will be obtained.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The End date of the date range.  Trips before this date will be obtained.
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$skip = 56; // int | Skip this many Trips
$take = 56; // int | Take this many Trips
$vehicleId = 56; // int | Filter by a particular Vehicle (get trips made with a particular vehicle), specified by VehicleId

try {
    $result = $apiInstance->tripsGetMyTrips($startDate, $endDate, $xChronosheetsAuth, $skip, $take, $vehicleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TripsApi->tripsGetMyTrips: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The Start date of the date range.  Trips after this date will be obtained. |
 **endDate** | **\DateTime**| The End date of the date range.  Trips before this date will be obtained. |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **skip** | **int**| Skip this many Trips | [optional]
 **take** | **int**| Take this many Trips | [optional]
 **vehicleId** | **int**| Filter by a particular Vehicle (get trips made with a particular vehicle), specified by VehicleId | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseForPaginatedListTrip**](../Model/ApiResponseForPaginatedListTrip.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`, `multipart/form-data`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
