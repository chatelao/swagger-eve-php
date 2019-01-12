<?php
/**
 * GetCharactersCharacterIdClonesJumpClone
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
 * OpenAPI spec version: 0.8.6
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
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
 * GetCharactersCharacterIdClonesJumpClone Class Doc Comment
 *
 * @category Class
 * @description jump_clone object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCharactersCharacterIdClonesJumpClone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_clones_jump_clone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'jump_clone_id' => 'int',
        'implants' => 'int[]',
        'location_id' => 'int',
        'location_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'jump_clone_id' => 'int32',
        'implants' => 'int32',
        'location_id' => 'int64',
        'location_type' => null
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
        'name' => 'name',
        'jump_clone_id' => 'jump_clone_id',
        'implants' => 'implants',
        'location_id' => 'location_id',
        'location_type' => 'location_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'jump_clone_id' => 'setJumpCloneId',
        'implants' => 'setImplants',
        'location_id' => 'setLocationId',
        'location_type' => 'setLocationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'jump_clone_id' => 'getJumpCloneId',
        'implants' => 'getImplants',
        'location_id' => 'getLocationId',
        'location_type' => 'getLocationType'
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

    const LOCATION_TYPE_STATION = 'station';
    const LOCATION_TYPE_STRUCTURE = 'structure';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocationTypeAllowableValues()
    {
        return [
            self::LOCATION_TYPE_STATION,
            self::LOCATION_TYPE_STRUCTURE,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['jump_clone_id'] = isset($data['jump_clone_id']) ? $data['jump_clone_id'] : null;
        $this->container['implants'] = isset($data['implants']) ? $data['implants'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location_type'] = isset($data['location_type']) ? $data['location_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['jump_clone_id'] === null) {
            $invalidProperties[] = "'jump_clone_id' can't be null";
        }
        if ($this->container['implants'] === null) {
            $invalidProperties[] = "'implants' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['location_type'] === null) {
            $invalidProperties[] = "'location_type' can't be null";
        }
        $allowedValues = $this->getLocationTypeAllowableValues();
        if (!is_null($this->container['location_type']) && !in_array($this->container['location_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'location_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name string
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets jump_clone_id
     *
     * @return int
     */
    public function getJumpCloneId()
    {
        return $this->container['jump_clone_id'];
    }

    /**
     * Sets jump_clone_id
     *
     * @param int $jump_clone_id jump_clone_id integer
     *
     * @return $this
     */
    public function setJumpCloneId($jump_clone_id)
    {
        $this->container['jump_clone_id'] = $jump_clone_id;

        return $this;
    }

    /**
     * Gets implants
     *
     * @return int[]
     */
    public function getImplants()
    {
        return $this->container['implants'];
    }

    /**
     * Sets implants
     *
     * @param int[] $implants implants array
     *
     * @return $this
     */
    public function setImplants($implants)
    {
        $this->container['implants'] = $implants;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id location_id integer
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location_type
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->container['location_type'];
    }

    /**
     * Sets location_type
     *
     * @param string $location_type location_type string
     *
     * @return $this
     */
    public function setLocationType($location_type)
    {
        $allowedValues = $this->getLocationTypeAllowableValues();
        if (!in_array($location_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'location_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['location_type'] = $location_type;

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
}


