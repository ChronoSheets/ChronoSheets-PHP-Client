# ChronoSheetsClient\FleetApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fleetCreateVehicle**](FleetApi.md#fleetCreateVehicle) | **PUT** /api/Fleet/CreateVehicle | Create a vehicle
[**fleetGetVehicleById**](FleetApi.md#fleetGetVehicleById) | **GET** /api/Fleet/GetVehicleById | Get a particular vehicle
[**fleetGetVehicles**](FleetApi.md#fleetGetVehicles) | **GET** /api/Fleet/GetVehicles | Get a collection of vehicles that are under your organisation
[**fleetUpdateVehicle**](FleetApi.md#fleetUpdateVehicle) | **POST** /api/Fleet/UpdateVehicle | Update a vehicle


# **fleetCreateVehicle**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32 fleetCreateVehicle($request, $xChronosheetsAuth)

Create a vehicle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSInsertVehicleRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSInsertVehicleRequest | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->fleetCreateVehicle($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->fleetCreateVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSInsertVehicleRequest**](../Model/CSInsertVehicleRequest.md)|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32**](../Model/CSApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fleetGetVehicleById**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseFleetVehicle fleetGetVehicleById($vehicleId, $xChronosheetsAuth)

Get a particular vehicle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vehicleId = 56; // int | The ID of the vehicle you want to get
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->fleetGetVehicleById($vehicleId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->fleetGetVehicleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicleId** | **int**| The ID of the vehicle you want to get |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseFleetVehicle**](../Model/CSApiResponseFleetVehicle.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fleetGetVehicles**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListFleetVehicle fleetGetVehicles($includeDeleted, $xChronosheetsAuth)

Get a collection of vehicles that are under your organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeDeleted = true; // bool | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->fleetGetVehicles($includeDeleted, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->fleetGetVehicles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeDeleted** | **bool**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListFleetVehicle**](../Model/CSApiResponseListFleetVehicle.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fleetUpdateVehicle**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean fleetUpdateVehicle($request, $xChronosheetsAuth)

Update a vehicle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSSaveVehicleRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSSaveVehicleRequest | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->fleetUpdateVehicle($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->fleetUpdateVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSSaveVehicleRequest**](../Model/CSSaveVehicleRequest.md)|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean**](../Model/CSApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

