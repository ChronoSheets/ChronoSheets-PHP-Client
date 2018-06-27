# ChronoSheetsClient\UserProfileApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userProfileDoLogin**](UserProfileApi.md#userProfileDoLogin) | **POST** /api/UserProfile/DoLogin | 
[**userProfileDoLogout**](UserProfileApi.md#userProfileDoLogout) | **DELETE** /api/UserProfile/DoLogout | 
[**userProfileGetMyProfile**](UserProfileApi.md#userProfileGetMyProfile) | **GET** /api/UserProfile/GetMyProfile | 
[**userProfileKeepSessionAlive**](UserProfileApi.md#userProfileKeepSessionAlive) | **GET** /api/UserProfile/KeepSessionAlive | 
[**userProfileUpdateMyProfile**](UserProfileApi.md#userProfileUpdateMyProfile) | **POST** /api/UserProfile/UpdateMyProfile | 


# **userProfileDoLogin**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseDoLoginResponse userProfileDoLogin($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSDoLoginRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSDoLoginRequest | 

try {
    $result = $apiInstance->userProfileDoLogin($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->userProfileDoLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSDoLoginRequest**](../Model/CSDoLoginRequest.md)|  |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseDoLoginResponse**](../Model/CSApiResponseDoLoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userProfileDoLogout**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean userProfileDoLogout($xChronosheetsAuth)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->userProfileDoLogout($xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->userProfileDoLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean**](../Model/CSApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userProfileGetMyProfile**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseUserProfile userProfileGetMyProfile($xChronosheetsAuth)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->userProfileGetMyProfile($xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->userProfileGetMyProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseUserProfile**](../Model/CSApiResponseUserProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userProfileKeepSessionAlive**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean userProfileKeepSessionAlive($xChronosheetsAuth)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->userProfileKeepSessionAlive($xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->userProfileKeepSessionAlive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean**](../Model/CSApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userProfileUpdateMyProfile**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseSignupResponse userProfileUpdateMyProfile($request, $xChronosheetsAuth)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSUpdateMyProfileRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSUpdateMyProfileRequest | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->userProfileUpdateMyProfile($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->userProfileUpdateMyProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSUpdateMyProfileRequest**](../Model/CSUpdateMyProfileRequest.md)|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseSignupResponse**](../Model/CSApiResponseSignupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

