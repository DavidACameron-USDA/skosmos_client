# HierarchyResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | URI of the concept | 
**broader** | **string[]** |  | [optional] 
**narrower** | [**\SkosmosClient\Model\LabelAndUriAndChildren[]**](LabelAndUriAndChildren.md) |  | [optional] 
**has_children** | **bool** | Indicates whether the concept has narrower concepts | 
**pref_label** | **string** | Preferred label of concept | 
**notation** | **string** | Notation code | [optional] 
**top** | **string** | This field is present if the current concept is a toplevel concept in the vocabulary and contains the concept scheme URI | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


