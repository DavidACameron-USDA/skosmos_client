<?php
/**
 * ConceptMappingTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  SkosmosClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Skosmos API
 *
 * The Skosmos REST API is a read-only interface to the data stored on the vocabulary server. The URL namespace is the base URL of the Skosmos instance followed by `/rest/v1/`.   Most methods return the data as UTF-8 encoded JSON-LD, served using the `application/json` MIME type. The data consists of a single JSON object which includes JSON-LD context information (in the `@context` field) and one or more fields which contain the actual data. Some methods (`data`) return other formats (RDF/XML, Turtle, RDF/JSON) with the appropriate MIME type.  The API supports Cross-Origin Resource Sharing by setting the Access-Control-Allow-Origin HTTP header to `\"*\"` for all requests.  The API supports the JSONP convention of appending a callback parameter to any URL. The returned data will then be wrapped in a JavaScript function call using the function name provided as the callback parameter value. JSONP wrapped data will be served using the `application/javascript` MIME type.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.24
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace SkosmosClient;

/**
 * ConceptMappingTest Class Doc Comment
 *
 * @category    Class
 * @description ConceptMapping
 * @package     SkosmosClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConceptMappingTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "ConceptMapping"
     */
    public function testConceptMapping()
    {
    }

    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
    }

    /**
     * Test attribute "notation"
     */
    public function testPropertyNotation()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "pref_label"
     */
    public function testPropertyPrefLabel()
    {
    }

    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
    }

    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "href_link"
     */
    public function testPropertyHrefLink()
    {
    }

    /**
     * Test attribute "lang"
     */
    public function testPropertyLang()
    {
    }

    /**
     * Test attribute "vocab_name"
     */
    public function testPropertyVocabName()
    {
    }

    /**
     * Test attribute "type_label"
     */
    public function testPropertyTypeLabel()
    {
    }

    /**
     * Test attribute "from_scheme"
     */
    public function testPropertyFromScheme()
    {
    }

    /**
     * Test attribute "to_scheme"
     */
    public function testPropertyToScheme()
    {
    }
}
