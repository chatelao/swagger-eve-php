<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdLink
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * The version of the OpenAPI document: 1.2.9
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Model;

use \ArrayAccess;
use \Swagger\Client\Eve\ObjectSerializer;

/**
 * GetCharactersCharacterIdPlanetsPlanetIdLink Class Doc Comment
 *
 * @category Class
 * @description link object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCharactersCharacterIdPlanetsPlanetIdLink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_planets_planet_id_link';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'destination_pin_id' => 'int',
        'link_level' => 'int',
        'source_pin_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'destination_pin_id' => 'int64',
        'link_level' => 'int32',
        'source_pin_id' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'destination_pin_id' => 'destination_pin_id',
        'link_level' => 'link_level',
        'source_pin_id' => 'source_pin_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_pin_id' => 'setDestinationPinId',
        'link_level' => 'setLinkLevel',
        'source_pin_id' => 'setSourcePinId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_pin_id' => 'getDestinationPinId',
        'link_level' => 'getLinkLevel',
        'source_pin_id' => 'getSourcePinId'
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
        return self::$openAPIModelName;
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
        $this->container['destination_pin_id'] = isset($data['destination_pin_id']) ? $data['destination_pin_id'] : null;
        $this->container['link_level'] = isset($data['link_level']) ? $data['link_level'] : null;
        $this->container['source_pin_id'] = isset($data['source_pin_id']) ? $data['source_pin_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['destination_pin_id'] === null) {
            $invalidProperties[] = "'destination_pin_id' can't be null";
        }
        if ($this->container['link_level'] === null) {
            $invalidProperties[] = "'link_level' can't be null";
        }
        if (($this->container['link_level'] > 10)) {
            $invalidProperties[] = "invalid value for 'link_level', must be smaller than or equal to 10.";
        }

        if (($this->container['link_level'] < 0)) {
            $invalidProperties[] = "invalid value for 'link_level', must be bigger than or equal to 0.";
        }

        if ($this->container['source_pin_id'] === null) {
            $invalidProperties[] = "'source_pin_id' can't be null";
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
     * Gets destination_pin_id
     *
     * @return int
     */
    public function getDestinationPinId()
    {
        return $this->container['destination_pin_id'];
    }

    /**
     * Sets destination_pin_id
     *
     * @param int $destination_pin_id destination_pin_id integer
     *
     * @return $this
     */
    public function setDestinationPinId($destination_pin_id)
    {
        $this->container['destination_pin_id'] = $destination_pin_id;

        return $this;
    }

    /**
     * Gets link_level
     *
     * @return int
     */
    public function getLinkLevel()
    {
        return $this->container['link_level'];
    }

    /**
     * Sets link_level
     *
     * @param int $link_level link_level integer
     *
     * @return $this
     */
    public function setLinkLevel($link_level)
    {

        if (($link_level > 10)) {
            throw new \InvalidArgumentException('invalid value for $link_level when calling GetCharactersCharacterIdPlanetsPlanetIdLink., must be smaller than or equal to 10.');
        }
        if (($link_level < 0)) {
            throw new \InvalidArgumentException('invalid value for $link_level when calling GetCharactersCharacterIdPlanetsPlanetIdLink., must be bigger than or equal to 0.');
        }

        $this->container['link_level'] = $link_level;

        return $this;
    }

    /**
     * Gets source_pin_id
     *
     * @return int
     */
    public function getSourcePinId()
    {
        return $this->container['source_pin_id'];
    }

    /**
     * Sets source_pin_id
     *
     * @param int $source_pin_id source_pin_id integer
     *
     * @return $this
     */
    public function setSourcePinId($source_pin_id)
    {
        $this->container['source_pin_id'] = $source_pin_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


