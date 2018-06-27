# ChronoSheetsClient\TasksApi

All URIs are relative to *https://www.chronosheets.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tasksCreateTask**](TasksApi.md#tasksCreateTask) | **PUT** /api/Tasks/CreateTask | Create a task
[**tasksDeleteTask**](TasksApi.md#tasksDeleteTask) | **DELETE** /api/Tasks/DeleteTask | Delete a task
[**tasksGetTaskById**](TasksApi.md#tasksGetTaskById) | **GET** /api/Tasks/GetTaskById | Get a particular task by id
[**tasksGetTasks**](TasksApi.md#tasksGetTasks) | **GET** /api/Tasks/GetTasks | Get tasks in your organisation
[**tasksGetTasksForJob**](TasksApi.md#tasksGetTasksForJob) | **GET** /api/Tasks/GetTasksForJob | Get tasks for a particular job
[**tasksUpdateTask**](TasksApi.md#tasksUpdateTask) | **POST** /api/Tasks/UpdateTask | Update a task


# **tasksCreateTask**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32 tasksCreateTask($request, $xChronosheetsAuth)

Create a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSInsertTaskRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSInsertTaskRequest | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tasksCreateTask($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksCreateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSInsertTaskRequest**](../Model/CSInsertTaskRequest.md)|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseInt32**](../Model/CSApiResponseInt32.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksDeleteTask**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean tasksDeleteTask($taskId, $xChronosheetsAuth)

Delete a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taskId = 56; // int | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tasksDeleteTask($taskId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksDeleteTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **int**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean**](../Model/CSApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksGetTaskById**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTimesheetTask tasksGetTaskById($taskId, $xChronosheetsAuth)

Get a particular task by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taskId = 56; // int | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tasksGetTaskById($taskId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksGetTaskById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **int**|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTimesheetTask**](../Model/CSApiResponseTimesheetTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksGetTasks**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListTimesheetTask tasksGetTasks($xChronosheetsAuth)

Get tasks in your organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tasksGetTasks($xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksGetTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListTimesheetTask**](../Model/CSApiResponseListTimesheetTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksGetTasksForJob**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListTimesheetTask tasksGetTasksForJob($jobId, $xChronosheetsAuth)

Get tasks for a particular job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jobId = 56; // int | The ID of the job
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tasksGetTasksForJob($jobId, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksGetTasksForJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **int**| The ID of the job |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseListTimesheetTask**](../Model/CSApiResponseListTimesheetTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksUpdateTask**
> \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean tasksUpdateTask($request, $xChronosheetsAuth)

Update a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ChronoSheetsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \ChronoSheetsClient\ChronoSheetsClientLibModel\CSUpdateTaskRequest(); // \ChronoSheetsClient\ChronoSheetsClientLibModel\CSUpdateTaskRequest | 
$xChronosheetsAuth = "xChronosheetsAuth_example"; // string | The ChronoSheets Auth Token

try {
    $result = $apiInstance->tasksUpdateTask($request, $xChronosheetsAuth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksUpdateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSUpdateTaskRequest**](../Model/CSUpdateTaskRequest.md)|  |
 **xChronosheetsAuth** | **string**| The ChronoSheets Auth Token |

### Return type

[**\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean**](../Model/CSApiResponseBoolean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

