# SkosmosClient\VocabularySpecificMethodsApi

All URIs are relative to *http://localhost/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vocidDataGet**](VocabularySpecificMethodsApi.md#vocidDataGet) | **GET** /{vocid}/data | RDF data of the whole vocabulary or a specific concept. If the vocabulary has support for it, MARCXML data is available for the whole vocabulary in each language.
[**vocidGet**](VocabularySpecificMethodsApi.md#vocidGet) | **GET** /{vocid}/ | General information about the vocabulary
[**vocidGroupsGet**](VocabularySpecificMethodsApi.md#vocidGroupsGet) | **GET** /{vocid}/groups | Concept groups in the vocabulary
[**vocidIndexGet**](VocabularySpecificMethodsApi.md#vocidIndexGet) | **GET** /{vocid}/index/ | Initial letters of the alphabetical index
[**vocidIndexLetterGet**](VocabularySpecificMethodsApi.md#vocidIndexLetterGet) | **GET** /{vocid}/index/{letter} | Concepts for a given letter in the alphabetical index
[**vocidLabelStatisticsGet**](VocabularySpecificMethodsApi.md#vocidLabelStatisticsGet) | **GET** /{vocid}/labelStatistics | Number of labels by language
[**vocidLookupGet**](VocabularySpecificMethodsApi.md#vocidLookupGet) | **GET** /{vocid}/lookup | Look up concepts by label
[**vocidModifiedGet**](VocabularySpecificMethodsApi.md#vocidModifiedGet) | **GET** /{vocid}/modified | Modified concepts in the vocabulary
[**vocidNewGet**](VocabularySpecificMethodsApi.md#vocidNewGet) | **GET** /{vocid}/new | New concepts in the vocabulary
[**vocidSearchGet**](VocabularySpecificMethodsApi.md#vocidSearchGet) | **GET** /{vocid}/search | Finds concepts and collections from a vocabulary by query term
[**vocidTopConceptsGet**](VocabularySpecificMethodsApi.md#vocidTopConceptsGet) | **GET** /{vocid}/topConcepts | Top concepts of the vocabulary
[**vocidTypesGet**](VocabularySpecificMethodsApi.md#vocidTypesGet) | **GET** /{vocid}/types | Information about the types (classes) of objects in the vocabulary
[**vocidVocabularyStatisticsGet**](VocabularySpecificMethodsApi.md#vocidVocabularyStatisticsGet) | **GET** /{vocid}/vocabularyStatistics | Number of Concepts and Collections in the vocabulary


# **vocidDataGet**
> vocidDataGet($vocid, $format, $uri, $lang)

RDF data of the whole vocabulary or a specific concept. If the vocabulary has support for it, MARCXML data is available for the whole vocabulary in each language.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
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
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidDataGet: ', $e->getMessage(), PHP_EOL;
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

# **vocidGet**
> \SkosmosClient\Model\VocabularyInfo vocidGet($vocid, $lang)

General information about the vocabulary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | The Skosmos vocabulary id e.g. stw or yso
$lang = "lang_example"; // string | language of labels, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidGet($vocid, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| The Skosmos vocabulary id e.g. stw or yso |
 **lang** | **string**| language of labels, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\VocabularyInfo**](../Model/VocabularyInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidGroupsGet**
> \SkosmosClient\Model\GroupResult vocidGroupsGet($vocid, $lang)

Concept groups in the vocabulary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidGroupsGet($vocid, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\GroupResult**](../Model/GroupResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidIndexGet**
> \SkosmosClient\Model\IndexLetters vocidIndexGet($vocid, $lang)

Initial letters of the alphabetical index

Returns a list of the initial letters of labels (skos:prefLabel, skos:altLabel) in the given language, or the default language of the vocabulary. The special value \"0-9\" indicates the presence of labels starting with a number and the value \"!*\" indicates labels starting with a special character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$lang = "lang_example"; // string | language of labels, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidIndexGet($vocid, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **lang** | **string**| language of labels, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\IndexLetters**](../Model/IndexLetters.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidIndexLetterGet**
> \SkosmosClient\Model\IndexConcepts vocidIndexLetterGet($vocid, $letter, $lang)

Concepts for a given letter in the alphabetical index

Returns a list of the concepes which have a label (skos:prefLabel or skos:altLabel) starting with the given letter in the given language, or the default language of the vocabulary. The special value \"0-9\" matches labels starting with a number and the value \"!*\" matches labels starting with a special character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$letter = "letter_example"; // string | an initial letter, or one of the special values \"0-9 or \"!*\"
$lang = "lang_example"; // string | language of labels, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidIndexLetterGet($vocid, $letter, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidIndexLetterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **letter** | **string**| an initial letter, or one of the special values \&quot;0-9 or \&quot;!*\&quot; |
 **lang** | **string**| language of labels, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\IndexConcepts**](../Model/IndexConcepts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidLabelStatisticsGet**
> \SkosmosClient\Model\LabelStatistics vocidLabelStatisticsGet($vocid, $lang)

Number of labels by language

Returns a list of label (skos:prefLabel, skos:altLabel and skos:hiddenLabel) counts in all the different languages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$lang = "lang_example"; // string | language of labels, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidLabelStatisticsGet($vocid, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidLabelStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **lang** | **string**| language of labels, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\LabelStatistics**](../Model/LabelStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidLookupGet**
> \SkosmosClient\Model\LookupResults vocidLookupGet($vocid, $label, $lang)

Look up concepts by label

Returns the best matching concept(s) for the given label in JSON-LD format. In case the label matches several concepts with the same precedence, all of them are returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$label = "label_example"; // string | the label to look for, e.g. \"cat\" or \"dog\"
$lang = "lang_example"; // string | search language, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidLookupGet($vocid, $label, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidLookupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **label** | **string**| the label to look for, e.g. \&quot;cat\&quot; or \&quot;dog\&quot; |
 **lang** | **string**| search language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\LookupResults**](../Model/LookupResults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidModifiedGet**
> \SkosmosClient\Model\ChangedConceptsResult vocidModifiedGet($vocid, $lang, $offset, $limit)

Modified concepts in the vocabulary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"
$offset = 8.14; // float | offset of the starting index
$limit = 8.14; // float | maximum number of concepts to return

try {
    $result = $apiInstance->vocidModifiedGet($vocid, $lang, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidModifiedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]
 **offset** | **float**| offset of the starting index | [optional]
 **limit** | **float**| maximum number of concepts to return | [optional]

### Return type

[**\SkosmosClient\Model\ChangedConceptsResult**](../Model/ChangedConceptsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidNewGet**
> \SkosmosClient\Model\ChangedConceptsResult vocidNewGet($vocid, $lang, $offset, $limit)

New concepts in the vocabulary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$lang = "lang_example"; // string | label language, e.g. \"en\" or \"fi\"
$offset = 8.14; // float | offset of the starting index
$limit = 8.14; // float | maximum number of concepts to return

try {
    $result = $apiInstance->vocidNewGet($vocid, $lang, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidNewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **lang** | **string**| label language, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]
 **offset** | **float**| offset of the starting index | [optional]
 **limit** | **float**| maximum number of concepts to return | [optional]

### Return type

[**\SkosmosClient\Model\ChangedConceptsResult**](../Model/ChangedConceptsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidSearchGet**
> \SkosmosClient\Model\SearchResults vocidSearchGet($vocid, $query, $lang, $type, $parent, $group, $maxhits, $offset, $fields, $unique)

Finds concepts and collections from a vocabulary by query term

Returns a list of search results. The search is performed as a case-insensitive pattern, where an asterisk (*) may be used as wildcard. E.g. \"cat*\" may return results such as \"CATCH-22\" and \"categorization\". If decoded into RDF, the result is a vocabulary fragment expressed as SKOS.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$query = "query_example"; // string | the term to search for e.g. \"cat*\"
$lang = "lang_example"; // string | language of labels to match, e.g. \"en\" or \"fi\"
$type = "type_example"; // string | limit search to concepts of the given type, e.g. \"skos:Concept\"; multiple types can be specified as a space-separated list
$parent = "parent_example"; // string | limit search to concepts which have the given concept (specified by URI) as parent in their transitive broader hierarchy
$group = "group_example"; // string | limit search to concepts in the given group (specified by URI)
$maxhits = 56; // int | Maximum number of results to return. If not given, all results will be returned.
$offset = 56; // int | offset where to start in ther esult set, useful for paging the result. If not given, defaults to 0.
$fields = "fields_example"; // string | space-separated list of extra fields to include in the results. e.g. \"related\" or \"prefLabel\" or any other skos property.
$unique = "unique_example"; // string | boolean flag to indicate that each concept should be returned only once, instead of returning all the different ways it could match (for example both via prefLabel and altLabel).

try {
    $result = $apiInstance->vocidSearchGet($vocid, $query, $lang, $type, $parent, $group, $maxhits, $offset, $fields, $unique);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **query** | **string**| the term to search for e.g. \&quot;cat*\&quot; |
 **lang** | **string**| language of labels to match, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]
 **type** | **string**| limit search to concepts of the given type, e.g. \&quot;skos:Concept\&quot;; multiple types can be specified as a space-separated list | [optional]
 **parent** | **string**| limit search to concepts which have the given concept (specified by URI) as parent in their transitive broader hierarchy | [optional]
 **group** | **string**| limit search to concepts in the given group (specified by URI) | [optional]
 **maxhits** | **int**| Maximum number of results to return. If not given, all results will be returned. | [optional]
 **offset** | **int**| offset where to start in ther esult set, useful for paging the result. If not given, defaults to 0. | [optional]
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

# **vocidTopConceptsGet**
> \SkosmosClient\Model\TopConcepts vocidTopConceptsGet($vocid, $lang, $scheme)

Top concepts of the vocabulary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$lang = "lang_example"; // string | language of labels, e.g. \"en\" or \"fi\"
$scheme = "scheme_example"; // string | concept scheme whose top concepts to return. If not given, the default concept scheme of the vocabulary will be used.

try {
    $result = $apiInstance->vocidTopConceptsGet($vocid, $lang, $scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidTopConceptsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **lang** | **string**| language of labels, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]
 **scheme** | **string**| concept scheme whose top concepts to return. If not given, the default concept scheme of the vocabulary will be used. | [optional]

### Return type

[**\SkosmosClient\Model\TopConcepts**](../Model/TopConcepts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidTypesGet**
> \SkosmosClient\Model\TypeList vocidTypesGet($vocid, $lang)

Information about the types (classes) of objects in the vocabulary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$lang = "lang_example"; // string | language of labels, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidTypesGet($vocid, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **lang** | **string**| language of labels, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\TypeList**](../Model/TypeList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vocidVocabularyStatisticsGet**
> \SkosmosClient\Model\VocabularyStatistics vocidVocabularyStatisticsGet($vocid, $lang)

Number of Concepts and Collections in the vocabulary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SkosmosClient\Api\VocabularySpecificMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vocid = "vocid_example"; // string | a Skosmos vocabulary identifier e.g. \"stw\" or \"yso\"
$lang = "lang_example"; // string | language of labels, e.g. \"en\" or \"fi\"

try {
    $result = $apiInstance->vocidVocabularyStatisticsGet($vocid, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VocabularySpecificMethodsApi->vocidVocabularyStatisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vocid** | **string**| a Skosmos vocabulary identifier e.g. \&quot;stw\&quot; or \&quot;yso\&quot; |
 **lang** | **string**| language of labels, e.g. \&quot;en\&quot; or \&quot;fi\&quot; | [optional]

### Return type

[**\SkosmosClient\Model\VocabularyStatistics**](../Model/VocabularyStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

