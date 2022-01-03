# SkosmosClient\ConceptSpecificMethodsApi

All URIs are relative to *http://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vocidBroaderGet**](ConceptSpecificMethodsApi.md#vocidBroaderGet) | **GET** /{vocid}/broader | Broader concepts of the requested concept
[**vocidBroaderTransitiveGet**](ConceptSpecificMethodsApi.md#vocidBroaderTransitiveGet) | **GET** /{vocid}/broaderTransitive | Broader transitive hierarchy for the requested concept
[**vocidChildrenGet**](ConceptSpecificMethodsApi.md#vocidChildrenGet) | **GET** /{vocid}/children | Narrower concepts of the requested concept
[**vocidDataGet**](ConceptSpecificMethodsApi.md#vocidDataGet) | **GET** /{vocid}/data | RDF data of the whole vocabulary or a specific concept. If the vocabulary has support for it, MARCXML data is available for the whole vocabulary in each language.
[**vocidGroupMembersGet**](ConceptSpecificMethodsApi.md#vocidGroupMembersGet) | **GET** /{vocid}/groupMembers | Members of the requested concept group
[**vocidHierarchyGet**](ConceptSpecificMethodsApi.md#vocidHierarchyGet) | **GET** /{vocid}/hierarchy | Hierarchical context of the requested concept
[**vocidLabelGet**](ConceptSpecificMethodsApi.md#vocidLabelGet) | **GET** /{vocid}/label | List of labels for the requested concept
[**vocidMappingsGet**](ConceptSpecificMethodsApi.md#vocidMappingsGet) | **GET** /{vocid}/mappings | Mappings associated with the requested concept
[**vocidNarrowerGet**](ConceptSpecificMethodsApi.md#vocidNarrowerGet) | **GET** /{vocid}/narrower | Narrower concepts of the requested concept
[**vocidNarrowerTransitiveGet**](ConceptSpecificMethodsApi.md#vocidNarrowerTransitiveGet) | **GET** /{vocid}/narrowerTransitive | Narrower transitive hierarchy for the requested concept
[**vocidRelatedGet**](ConceptSpecificMethodsApi.md#vocidRelatedGet) | **GET** /{vocid}/related | Related concepts of the requested concept


# **vocidBroaderGet**
> \SkosmosClient\Model\BroaderResult vocidBroaderGet($vocid, $uri, $lang)

Broader concepts of the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$uri = "uri_example"; // string | URI of the concept whose broader concept to return
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidBroaderGet($vocid, $uri, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidBroaderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **uri** | **string**| URI of the concept whose broader concept to return |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\BroaderResult**](../Model/BroaderResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidBroaderTransitiveGet**
> \SkosmosClient\Model\BroaderTransitiveResult vocidBroaderTransitiveGet($vocid, $uri, $lang)

Broader transitive hierarchy for the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$uri = "uri_example"; // string | URI of the concept whose broader transitive hierarchy to return
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidBroaderTransitiveGet($vocid, $uri, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidBroaderTransitiveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **uri** | **string**| URI of the concept whose broader transitive hierarchy to return |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\BroaderTransitiveResult**](../Model/BroaderTransitiveResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidChildrenGet**
> \SkosmosClient\Model\ChildrenResult vocidChildrenGet($vocid, $uri, $lang)

Narrower concepts of the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$uri = "uri_example"; // string | URI of the concept whose narrower concepts to return
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidChildrenGet($vocid, $uri, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidChildrenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **uri** | **string**| URI of the concept whose narrower concepts to return |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\ChildrenResult**](../Model/ChildrenResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidDataGet**
> vocidDataGet($vocid, $format, $uri, $lang)

RDF data of the whole vocabulary or a specific concept. If the vocabulary has support for it, MARCXML data is available for the whole vocabulary in each language.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$format = "format_example"; // string | The MIME type of the serialization format, e.g \"text/turtle\" or \"application/rdf+xml\". If not specified, HTTP content negotiation (based on the Accept header) is used to determine a suitable serialization format from among the available ones.
$uri = "uri_example"; // string | URI of the desired concept. When no uri parameter is given, the whole vocabulary is returned instead.
$lang = "lang_example"; // string | RDF language code when the requested resource for the MIME type is language specific, e.g. \"fi\" or \"en\".

try {
    $apiInstance->vocidDataGet($vocid, $format, $uri, $lang);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **format** | **string**| The MIME type of the serialization format, e.g \&quot;text/turtle\&quot; or \&quot;application/rdf+xml\&quot;. If not specified, HTTP content negotiation (based on the Accept header) is used to determine a suitable serialization format from among the available ones. | [optional]
 **uri** | **string**| URI of the desired concept. When no uri parameter is given, the whole vocabulary is returned instead. | [optional]
 **lang** | **string**| RDF language code when the requested resource for the MIME type is language specific, e.g. \&quot;fi\&quot; or \&quot;en\&quot;. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/rdf+xml, text/turtle, application/ld+json, application/json, application/marcxml+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidGroupMembersGet**
> \SkosmosClient\Model\GroupMembers vocidGroupMembersGet($vocid, $lang)

Members of the requested concept group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidGroupMembersGet($vocid, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidGroupMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\GroupMembers**](../Model/GroupMembers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidHierarchyGet**
> \SkosmosClient\Model\Hierarchy vocidHierarchyGet($vocid, $uri, $lang)

Hierarchical context of the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$uri = "uri_example"; // string | URI of the concept whose hierarchical context to return
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidHierarchyGet($vocid, $uri, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidHierarchyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **uri** | **string**| URI of the concept whose hierarchical context to return |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\Hierarchy**](../Model/Hierarchy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidLabelGet**
> \SkosmosClient\Model\LabelsAndUri vocidLabelGet($vocid, $uri, $lang)

List of labels for the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$uri = "uri_example"; // string | URI of the concept whose labels to return
$lang = "lang_example"; // string | search language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidLabelGet($vocid, $uri, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidLabelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
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

# **vocidMappingsGet**
> \SkosmosClient\Model\ConceptMappings vocidMappingsGet($vocid, $uri, $external, $clang, $lang)

Mappings associated with the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$uri = "uri_example"; // string | URI of the concept whose hierarchical context to return
$external = true; // bool | Indicates whether mappings to external vocabularies should be listed
$clang = "clang_example"; // string | content language, e.g. \"en\" or \"fi\"
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidMappingsGet($vocid, $uri, $external, $clang, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidMappingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **uri** | **string**| URI of the concept whose hierarchical context to return |
 **external** | **bool**| Indicates whether mappings to external vocabularies should be listed | [optional]
 **clang** | **string**| content language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\ConceptMappings**](../Model/ConceptMappings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidNarrowerGet**
> \SkosmosClient\Model\NarrowerResult vocidNarrowerGet($vocid, $uri, $lang)

Narrower concepts of the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$uri = "uri_example"; // string | URI of the concept whose narrower concept to return
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidNarrowerGet($vocid, $uri, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidNarrowerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **uri** | **string**| URI of the concept whose narrower concept to return |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\NarrowerResult**](../Model/NarrowerResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidNarrowerTransitiveGet**
> \SkosmosClient\Model\NarrowerTransitiveResult vocidNarrowerTransitiveGet($vocid, $uri, $lang)

Narrower transitive hierarchy for the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$uri = "uri_example"; // string | URI of the concept whose narrower transitive hierarchy to return
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidNarrowerTransitiveGet($vocid, $uri, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidNarrowerTransitiveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **uri** | **string**| URI of the concept whose narrower transitive hierarchy to return |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\NarrowerTransitiveResult**](../Model/NarrowerTransitiveResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidRelatedGet**
> \SkosmosClient\Model\RelatedResult vocidRelatedGet($vocid, $uri, $lang)

Related concepts of the requested concept

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\ConceptSpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$uri = "uri_example"; // string | URI of the concept whose related concept to return
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidRelatedGet($vocid, $uri, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConceptSpecificMethodsApi->vocidRelatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **uri** | **string**| URI of the concept whose related concept to return |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\RelatedResult**](../Model/RelatedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

