<?php
/**
 * ConceptSpecificMethodsApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace SkosmosClient;

use \SkosmosClient\Configuration;
use \SkosmosClient\ApiException;
use \SkosmosClient\ObjectSerializer;

/**
 * ConceptSpecificMethodsApiTest Class Doc Comment
 *
 * @category Class
 * @package  SkosmosClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConceptSpecificMethodsApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for vocidBroaderGet
     *
     * Broader concepts of the requested concept.
     *
     */
    public function testVocidBroaderGet()
    {
    }

    /**
     * Test case for vocidBroaderTransitiveGet
     *
     * Broader transitive hierarchy for the requested concept.
     *
     */
    public function testVocidBroaderTransitiveGet()
    {
    }

    /**
     * Test case for vocidChildrenGet
     *
     * Narrower concepts of the requested concept.
     *
     */
    public function testVocidChildrenGet()
    {
    }

    /**
     * Test case for vocidDataGet
     *
     * RDF data of the whole vocabulary or a specific concept. If the vocabulary has support for it, MARCXML data is available for the whole vocabulary in each language..
     *
     */
    public function testVocidDataGet()
    {
    }

    /**
     * Test case for vocidGroupMembersGet
     *
     * Members of the requested concept group.
     *
     */
    public function testVocidGroupMembersGet()
    {
    }

    /**
     * Test case for vocidHierarchyGet
     *
     * Hierarchical context of the requested concept.
     *
     */
    public function testVocidHierarchyGet()
    {
    }

    /**
     * Test case for vocidLabelGet
     *
     * List of labels for the requested concept.
     *
     */
    public function testVocidLabelGet()
    {
    }

    /**
     * Test case for vocidMappingsGet
     *
     * Mappings associated with the requested concept.
     *
     */
    public function testVocidMappingsGet()
    {
    }

    /**
     * Test case for vocidNarrowerGet
     *
     * Narrower concepts of the requested concept.
     *
     */
    public function testVocidNarrowerGet()
    {
    }

    /**
     * Test case for vocidNarrowerTransitiveGet
     *
     * Narrower transitive hierarchy for the requested concept.
     *
     */
    public function testVocidNarrowerTransitiveGet()
    {
    }

    /**
     * Test case for vocidRelatedGet
     *
     * Related concepts of the requested concept.
     *
     */
    public function testVocidRelatedGet()
    {
    }
}
