<?php
/**
 * MembersList
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
 * Do not edit the class manually.
 */

namespace SkosmosClient\Model;

use \ArrayAccess;
use \SkosmosClient\ObjectSerializer;

/**
 * MembersList Class Doc Comment
 *
 * @category Class
 * @package  SkosmosClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MembersList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MembersList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uri' => 'string',
        'type' => 'string[]',
        'is_super' => 'bool',
        'has_members' => 'bool',
        'pref_label' => 'string',
        'notation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uri' => null,
        'type' => null,
        'is_super' => null,
        'has_members' => null,
        'pref_label' => null,
        'notation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uri' => 'uri',
        'type' => 'type',
        'is_super' => 'isSuper',
        'has_members' => 'hasMembers',
        'pref_label' => 'prefLabel',
        'notation' => 'notation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uri' => 'setUri',
        'type' => 'setType',
        'is_super' => 'setIsSuper',
        'has_members' => 'setHasMembers',
        'pref_label' => 'setPrefLabel',
        'notation' => 'setNotation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uri' => 'getUri',
        'type' => 'getType',
        'is_super' => 'getIsSuper',
        'has_members' => 'getHasMembers',
        'pref_label' => 'getPrefLabel',
        'notation' => 'getNotation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['is_super'] = isset($data['is_super']) ? $data['is_super'] : null;
        $this->container['has_members'] = isset($data['has_members']) ? $data['has_members'] : null;
        $this->container['pref_label'] = isset($data['pref_label']) ? $data['pref_label'] : null;
        $this->container['notation'] = isset($data['notation']) ? $data['notation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ($this->container['has_members'] === null) {
            $invalidProperties[] = "'has_members' can't be null";
        }
        if ($this->container['pref_label'] === null) {
            $invalidProperties[] = "'pref_label' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri URI of the concept
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string[]
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string[] $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_super
     *
     * @return bool
     */
    public function getIsSuper()
    {
        return $this->container['is_super'];
    }

    /**
     * Sets is_super
     *
     * @param bool $is_super Indicates whether the group is a superGroup to an another group
     *
     * @return $this
     */
    public function setIsSuper($is_super)
    {
        $this->container['is_super'] = $is_super;

        return $this;
    }

    /**
     * Gets has_members
     *
     * @return bool
     */
    public function getHasMembers()
    {
        return $this->container['has_members'];
    }

    /**
     * Sets has_members
     *
     * @param bool $has_members Indicates whether the group has members
     *
     * @return $this
     */
    public function setHasMembers($has_members)
    {
        $this->container['has_members'] = $has_members;

        return $this;
    }

    /**
     * Gets pref_label
     *
     * @return string
     */
    public function getPrefLabel()
    {
        return $this->container['pref_label'];
    }

    /**
     * Sets pref_label
     *
     * @param string $pref_label Preferred label of concept
     *
     * @return $this
     */
    public function setPrefLabel($pref_label)
    {
        $this->container['pref_label'] = $pref_label;

        return $this;
    }

    /**
     * Gets notation
     *
     * @return string
     */
    public function getNotation()
    {
        return $this->container['notation'];
    }

    /**
     * Sets notation
     *
     * @param string $notation Notation code
     *
     * @return $this
     */
    public function setNotation($notation)
    {
        $this->container['notation'] = $notation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


