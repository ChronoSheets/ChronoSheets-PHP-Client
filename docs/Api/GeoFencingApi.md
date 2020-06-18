# ChronoSheetsClient\GeoFencingApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**geoFencingCreateGeofence**](GeoFencingApi.md#geoFencingCreateGeofence) | **POST** /api/GeoFencing/CreateGeofence | Create a geofencing with rules to be used for clock on/off automation.  Requires the &#39;ManageGeofencing&#39; permission.
[**geoFencingDeleteGeofence**](GeoFencingApi.md#geoFencingDeleteGeofence) | **DELETE** /api/GeoFencing/DeleteGeofence | Deletes a geofence.  Requires the &#39;ManageGeofencing&#39; permission.
[**geoFencingGetGeofenceById**](GeoFencingApi.md#geoFencingGetGeofenceById) | **GET** /api/GeoFencing/GetGeofenceById | Get a geofence by ID  Requires the &#39;SubmitTimesheets&#39; permission.
[**geoFencingGetGeofences**](GeoFencingApi.md#geoFencingGetGeofences) | **GET** /api/GeoFencing/GetGeofences | Get geofences belonging to your organisation  Requires the &#39;SubmitTimesheets&#39; permission.
[**geoFencingUpdateGeofence**](GeoFencingApi.md#geoFencingUpdateGeofence) | **PUT** /api/GeoFencing/UpdateGeofence | Updates a geofencing with rules to be used for clock on/off automation.  Requires the &#39;ManageGeofencing&#39; permission.


# **geoFencingCreateGeofence**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32 geoFencingCreateGeofence($request, $xChronosheetsAuth)

Create a geofencing with rules to be used for clock on/off automation.  Requires the 'ManageGeofencing' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\GeoFencingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSCreateGeoFenceRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSCreateGeoFenceRequest | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->geoFencingCreateGeofence($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeoFencingApi->geoFencingCreateGeofence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSCreateGeoFenceRequest**](../Model/CSCreateGeoFenceRequest.md)|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32**](../Model/CSApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoFencingDeleteGeofence**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseGeofence geoFencingDeleteGeofence($geofenceId, $xChronosheetsAuth)

Deletes a geofence.  Requires the 'ManageGeofencing' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\GeoFencingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geofenceId = 56; // int | Specify the geofence you want to delete with the geofence ID.
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->geoFencingDeleteGeofence($geofenceId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeoFencingApi->geoFencingDeleteGeofence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geofenceId** | **int**| Specify the geofence you want to delete with the geofence ID. |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseGeofence**](../Model/CSApiResponseGeofence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoFencingGetGeofenceById**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseGeofence geoFencingGetGeofenceById($geofenceId, $xChronosheetsAuth)

Get a geofence by ID  Requires the 'SubmitTimesheets' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\GeoFencingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$geofenceId = 56; // int | The ID of the geofence you want to obtain
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->geoFencingGetGeofenceById($geofenceId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeoFencingApi->geoFencingGetGeofenceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geofenceId** | **int**| The ID of the geofence you want to obtain |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseGeofence**](../Model/CSApiResponseGeofence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoFencingGetGeofences**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListExtendedGeofence geoFencingGetGeofences($xChronosheetsAuth, $skip, $take)

Get geofences belonging to your organisation  Requires the 'SubmitTimesheets' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\GeoFencingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token
$skip = 56; // int | Number of records to skip
$take = 56; // int | Number of records to take

try {
    $result = $apiInstance->geoFencingGetGeofences($xChronosheetsAuth, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeoFencingApi->geoFencingGetGeofences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **skip** | **int**| Number of records to skip | [optional]
 **take** | **int**| Number of records to take | [optional]

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListExtendedGeofence**](../Model/CSApiResponseForPaginatedListExtendedGeofence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoFencingUpdateGeofence**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32 geoFencingUpdateGeofence($request, $xChronosheetsAuth)

Updates a geofencing with rules to be used for clock on/off automation.  Requires the 'ManageGeofencing' permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\GeoFencingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSUpdateGeoFenceRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSUpdateGeoFenceRequest | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->geoFencingUpdateGeofence($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeoFencingApi->geoFencingUpdateGeofence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSUpdateGeoFenceRequest**](../Model/CSUpdateGeoFenceRequest.md)|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32**](../Model/CSApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

