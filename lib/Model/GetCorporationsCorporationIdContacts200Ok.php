<?php
/**
 * GetCorporationsCorporationIdContacts200Ok
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
 * The version of the OpenAPI document: 1.3.8
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
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
 * GetCorporationsCorporationIdContacts200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCorporationsCorporationIdContacts200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_contacts_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_id' => 'int',
        'contact_type' => 'string',
        'is_watched' => 'bool',
        'label_ids' => 'int[]',
        'standing' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contact_id' => 'int32',
        'contact_type' => null,
        'is_watched' => null,
        'label_ids' => 'int64',
        'standing' => 'float'
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
        'contact_id' => 'contact_id',
        'contact_type' => 'contact_type',
        'is_watched' => 'is_watched',
        'label_ids' => 'label_ids',
        'standing' => 'standing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
        'contact_type' => 'setContactType',
        'is_watched' => 'setIsWatched',
        'label_ids' => 'setLabelIds',
        'standing' => 'setStanding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
        'contact_type' => 'getContactType',
        'is_watched' => 'getIsWatched',
        'label_ids' => 'getLabelIds',
        'standing' => 'getStanding'
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

    const CONTACT_TYPE_CHARACTER = 'character';
    const CONTACT_TYPE_CORPORATION = 'corporation';
    const CONTACT_TYPE_ALLIANCE = 'alliance';
    const CONTACT_TYPE_FACTION = 'faction';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContactTypeAllowableValues()
    {
        return [
            self::CONTACT_TYPE_CHARACTER,
            self::CONTACT_TYPE_CORPORATION,
            self::CONTACT_TYPE_ALLIANCE,
            self::CONTACT_TYPE_FACTION,
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
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['contact_type'] = isset($data['contact_type']) ? $data['contact_type'] : null;
        $this->container['is_watched'] = isset($data['is_watched']) ? $data['is_watched'] : null;
        $this->container['label_ids'] = isset($data['label_ids']) ? $data['label_ids'] : null;
        $this->container['standing'] = isset($data['standing']) ? $data['standing'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contact_id'] === null) {
            $invalidProperties[] = "'contact_id' can't be null";
        }
        if ($this->container['contact_type'] === null) {
            $invalidProperties[] = "'contact_type' can't be null";
        }
        $allowedValues = $this->getContactTypeAllowableValues();
        if (!is_null($this->container['contact_type']) && !in_array($this->container['contact_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contact_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['standing'] === null) {
            $invalidProperties[] = "'standing' can't be null";
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
     * Gets contact_id
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int $contact_id contact_id integer
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets contact_type
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->container['contact_type'];
    }

    /**
     * Sets contact_type
     *
     * @param string $contact_type contact_type string
     *
     * @return $this
     */
    public function setContactType($contact_type)
    {
        $allowedValues = $this->getContactTypeAllowableValues();
        if (!in_array($contact_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contact_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contact_type'] = $contact_type;

        return $this;
    }

    /**
     * Gets is_watched
     *
     * @return bool|null
     */
    public function getIsWatched()
    {
        return $this->container['is_watched'];
    }

    /**
     * Sets is_watched
     *
     * @param bool|null $is_watched Whether this contact is being watched
     *
     * @return $this
     */
    public function setIsWatched($is_watched)
    {
        $this->container['is_watched'] = $is_watched;

        return $this;
    }

    /**
     * Gets label_ids
     *
     * @return int[]|null
     */
    public function getLabelIds()
    {
        return $this->container['label_ids'];
    }

    /**
     * Sets label_ids
     *
     * @param int[]|null $label_ids label_ids array
     *
     * @return $this
     */
    public function setLabelIds($label_ids)
    {
        $this->container['label_ids'] = $label_ids;

        return $this;
    }

    /**
     * Gets standing
     *
     * @return float
     */
    public function getStanding()
    {
        return $this->container['standing'];
    }

    /**
     * Sets standing
     *
     * @param float $standing Standing of the contact
     *
     * @return $this
     */
    public function setStanding($standing)
    {
        $this->container['standing'] = $standing;

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


