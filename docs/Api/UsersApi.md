# ChronoSheetsClient\UsersApi

All URIs are relative to *https://api.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersCreateTimesheetUser**](UsersApi.md#usersCreateTimesheetUser) | **POST** /Users/CreateTimesheetUser | Create a user account in your organisation.  Requires the &#39;ManageOrganisationUsers&#39; permission.
[**usersGetTimesheetUser**](UsersApi.md#usersGetTimesheetUser) | **GET** /Users/GetTimesheetUser | Get a particular user in your organisation.  Requires the &#39;ManageOrganisationUsers&#39; or &#39;ManageOrganisationGroups&#39; permissions.
[**usersGetTimesheetUsers**](UsersApi.md#usersGetTimesheetUsers) | **GET** /Users/GetTimesheetUsers | Get users accounts in your organisation.  Requires the &#39;ManageOrganisationUsers&#39; or &#39;ManageOrganisationGroups&#39; permissions.
[**usersUpdateTimesheetUser**](UsersApi.md#usersUpdateTimesheetUser) | **PUT** /Users/UpdateTimesheetUser | Update a user account.  Requires the &#39;ManageOrganisationUsers&#39; permission.



## usersCreateTimesheetUser

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseInsertUserResponse usersCreateTimesheetUser($xChronosheetsAuth, $request)

Create a user account in your organisation.  Requires the 'ManageOrganisationUsers' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\InsertUserRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\InsertUserRequest | An Insert User Request object containing values for the new User to create

try {
    $result = $apiInstance->usersCreateTimesheetUser($xChronosheetsAuth, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersCreateTimesheetUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\InsertUserRequest**](../Model/InsertUserRequest.md)| An Insert User Request object containing values for the new User to create |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseInsertUserResponse**](../Model/ApiResponseInsertUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersGetTimesheetUser

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUserForManagement usersGetTimesheetUser($userId, $xChronosheetsAuth)

Get a particular user in your organisation.  Requires the 'ManageOrganisationUsers' or 'ManageOrganisationGroups' permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 56; // int | The User ID of the UserForManagement you want to get
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->usersGetTimesheetUser($userId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetTimesheetUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **int**| The User ID of the UserForManagement you want to get |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUserForManagement**](../Model/ApiResponseUserForManagement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersGetTimesheetUsers

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListUserForManagement usersGetTimesheetUsers($xChronosheetsAuth)

Get users accounts in your organisation.  Requires the 'ManageOrganisationUsers' or 'ManageOrganisationGroups' permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->usersGetTimesheetUsers($xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetTimesheetUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListUserForManagement**](../Model/ApiResponseListUserForManagement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersUpdateTimesheetUser

> \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUpdateUserResponse usersUpdateTimesheetUser($xChronosheetsAuth, $request)

Update a user account.  Requires the 'ManageOrganisationUsers' permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new ChronoSheetsClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = 'xChronosheetsAuth_example'; // string | The ChronoSheets Auth Token
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\UpdateUserRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\UpdateUserRequest | A Update User Request object containing updated fields.  Make sure to specify the User Id in the request object so that ChronoSheets knows which User to update

try {
    $result = $apiInstance->usersUpdateTimesheetUser($xChronosheetsAuth, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUpdateTimesheetUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\UpdateUserRequest**](../Model/UpdateUserRequest.md)| A Update User Request object containing updated fields.  Make sure to specify the User Id in the request object so that ChronoSheets knows which User to update |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUpdateUserResponse**](../Model/ApiResponseUpdateUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
- **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

