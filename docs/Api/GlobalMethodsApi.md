# SkosmosClient\GlobalMethodsApi

All URIs are relative to *http://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataGet**](GlobalMethodsApi.md#dataGet) | **GET** /data | RDF data of the requested concept
[**labelGet**](GlobalMethodsApi.md#labelGet) | **GET** /label | List of labels for the requested concept
[**searchGet**](GlobalMethodsApi.md#searchGet) | **GET** /search | Search concepts and collections by query term
[**typesGet**](GlobalMethodsApi.md#typesGet) | **GET** /types | Information about the types (classes) of objects contained in all  vocabularies
[**vocabulariesGet**](GlobalMethodsApi.md#vocabulariesGet) | **GET** /vocabularies | Available vocabularies


# **dataGet**
> dataGet($uri, $format)

RDF data of the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\GlobalMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uri = "uri_example"; // string | URI of the concept whose data to return
$format = "format_example"; // string | the MIME type of the serialization format, e.g. \"text/turtle\" or \"application/rdf+xml\"

try {
    $apiInstance->dataGet($uri, $format);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMethodsApi->dataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uri** | **string**| URI of the concept whose data to return |
 **format** | **string**| the MIME type of the serialization format, e.g. \&quot;text/turtle\&quot; or \&quot;application/rdf+xml\&quot; | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/rdf+xml, text/turtle, application/ld+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **labelGet**
> \SkosmosClient\Model\LabelsAndUri labelGet($uri, $lang)

List of labels for the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\GlobalMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uri = "uri_example"; // string | URI of the concept whose labels to return
$lang = "lang_example"; // string | search language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->labelGet($uri, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMethodsApi->labelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uri** | **string**| URI of the concept whose labels to return |
 **lang** | **string**| search language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\LabelsAndUri**](../Model/LabelsAndUri.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchGet**
> \SkosmosClient\Model\SearchResults searchGet($query, $lang, $labellang, $vocab, $type, $parent, $group, $maxhits, $offset, $fields, $unique)

Search concepts and collections by query term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\GlobalMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = "query_example"; // string | the term to search for e.g. \"cat*\"
$lang = "lang_example"; // string | language of labels to match, e.g. \"en\" or \"fi\"
$labellang = "labellang_example"; // string | language of labels to return, e.g. \"en\" or \"fi\"
$vocab = "vocab_example"; // string | vocabulary/vocabularies to limit search to, e.g. \"yso\" or \"yso allars\"
$type = "type_example"; // string | limit search to concepts of the given type(s), e.g. \"skos:Concept\".
$parent = "parent_example"; // string | limit search to concepts which have the given concept (specified by URI) as parent in their transitive broader hierarchy
$group = "group_example"; // string | limit search to concepts in the given group (specified by URI)
$maxhits = 56; // int | Maximum number of results to return. If not given, all results will be returned.
$offset = 56; // int | offset where to start in the result set, useful for paging the result. If not given, defaults to 0.
$fields = "fields_example"; // string | space-separated list of extra fields to include in the results. e.g. \"related\" or \"prefLabel\" or any other skos property.
$unique = "unique_example"; // string | boolean flag to indicate that each concept should be returned only once, instead of returning all the different ways it could match (for example both via prefLabel and altLabel).

try {
    $result = $apiInstance->searchGet($query, $lang, $labellang, $vocab, $type, $parent, $group, $maxhits, $offset, $fields, $unique);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMethodsApi->searchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| the term to search for e.g. \&quot;cat*\&quot; |
 **lang** | **string**| language of labels to match, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]
 **labellang** | **string**| language of labels to return, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]
 **vocab** | **string**| vocabulary/vocabularies to limit search to, e.g. \&quot;yso\&quot; or \&quot;yso allars\&quot; | [optional]
 **type** | **string**| limit search to concepts of the given type(s), e.g. \&quot;skos:Concept\&quot;. | [optional]
 **parent** | **string**| limit search to concepts which have the given concept (specified by URI) as parent in their transitive broader hierarchy | [optional]
 **group** | **string**| limit search to concepts in the given group (specified by URI) | [optional]
 **maxhits** | **int**| Maximum number of results to return. If not given, all results will be returned. | [optional]
 **offset** | **int**| offset where to start in the result set, useful for paging the result. If not given, defaults to 0. | [optional]
 **fields** | **string**| space-separated list of extra fields to include in the results. e.g. \&quot;related\&quot; or \&quot;prefLabel\&quot; or any other skos property. | [optional]
 **unique** | **string**| boolean flag to indicate that each concept should be returned only once, instead of returning all the different ways it could match (for example both via prefLabel and altLabel). | [optional]

### Return type

[**\SkosmosClient\Model\SearchResults**](../Model/SearchResults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **typesGet**
> \SkosmosClient\Model\TypeList typesGet($lang)

Information about the types (classes) of objects contained in all  vocabularies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\GlobalMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lang = "lang_example"; // string | language of labels, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->typesGet($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMethodsApi->typesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | **string**| language of labels, e.g. \&quot;en\&quot; or \&quot;fi\&quot; |

### Return type

[**\SkosmosClient\Model\TypeList**](../Model/TypeList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocabulariesGet**
> \SkosmosClient\Model\VocabularyList vocabulariesGet($lang)

Available vocabularies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\GlobalMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lang = "lang_example"; // string | language of labels, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocabulariesGet($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMethodsApi->vocabulariesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | **string**| language of labels, e.g. \&quot;en\&quot; or \&quot;fi\&quot; |

### Return type

[**\SkosmosClient\Model\VocabularyList**](../Model/VocabularyList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

