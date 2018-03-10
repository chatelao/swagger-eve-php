<?php
/**
 * GetCharactersCharacterIdAttributesOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.7.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Model;

use \ArrayAccess;
use \Swagger\Client\Eve\ObjectSerializer;

/**
 * GetCharactersCharacterIdAttributesOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdAttributesOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_attributes_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charisma' => 'int',
        'intelligence' => 'int',
        'memory' => 'int',
        'perception' => 'int',
        'willpower' => 'int',
        'bonus_remaps' => 'int',
        'last_remap_date' => '\DateTime',
        'accrued_remap_cooldown_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'charisma' => 'int32',
        'intelligence' => 'int32',
        'memory' => 'int32',
        'perception' => 'int32',
        'willpower' => 'int32',
        'bonus_remaps' => 'int32',
        'last_remap_date' => 'date-time',
        'accrued_remap_cooldown_date' => 'date-time'
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
        'charisma' => 'charisma',
        'intelligence' => 'intelligence',
        'memory' => 'memory',
        'perception' => 'perception',
        'willpower' => 'willpower',
        'bonus_remaps' => 'bonus_remaps',
        'last_remap_date' => 'last_remap_date',
        'accrued_remap_cooldown_date' => 'accrued_remap_cooldown_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charisma' => 'setCharisma',
        'intelligence' => 'setIntelligence',
        'memory' => 'setMemory',
        'perception' => 'setPerception',
        'willpower' => 'setWillpower',
        'bonus_remaps' => 'setBonusRemaps',
        'last_remap_date' => 'setLastRemapDate',
        'accrued_remap_cooldown_date' => 'setAccruedRemapCooldownDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charisma' => 'getCharisma',
        'intelligence' => 'getIntelligence',
        'memory' => 'getMemory',
        'perception' => 'getPerception',
        'willpower' => 'getWillpower',
        'bonus_remaps' => 'getBonusRemaps',
        'last_remap_date' => 'getLastRemapDate',
        'accrued_remap_cooldown_date' => 'getAccruedRemapCooldownDate'
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
        $this->container['charisma'] = isset($data['charisma']) ? $data['charisma'] : null;
        $this->container['intelligence'] = isset($data['intelligence']) ? $data['intelligence'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['perception'] = isset($data['perception']) ? $data['perception'] : null;
        $this->container['willpower'] = isset($data['willpower']) ? $data['willpower'] : null;
        $this->container['bonus_remaps'] = isset($data['bonus_remaps']) ? $data['bonus_remaps'] : null;
        $this->container['last_remap_date'] = isset($data['last_remap_date']) ? $data['last_remap_date'] : null;
        $this->container['accrued_remap_cooldown_date'] = isset($data['accrued_remap_cooldown_date']) ? $data['accrued_remap_cooldown_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['charisma'] === null) {
            $invalidProperties[] = "'charisma' can't be null";
        }
        if ($this->container['intelligence'] === null) {
            $invalidProperties[] = "'intelligence' can't be null";
        }
        if ($this->container['memory'] === null) {
            $invalidProperties[] = "'memory' can't be null";
        }
        if ($this->container['perception'] === null) {
            $invalidProperties[] = "'perception' can't be null";
        }
        if ($this->container['willpower'] === null) {
            $invalidProperties[] = "'willpower' can't be null";
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

        if ($this->container['charisma'] === null) {
            return false;
        }
        if ($this->container['intelligence'] === null) {
            return false;
        }
        if ($this->container['memory'] === null) {
            return false;
        }
        if ($this->container['perception'] === null) {
            return false;
        }
        if ($this->container['willpower'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets charisma
     *
     * @return int
     */
    public function getCharisma()
    {
        return $this->container['charisma'];
    }

    /**
     * Sets charisma
     *
     * @param int $charisma charisma integer
     *
     * @return $this
     */
    public function setCharisma($charisma)
    {
        $this->container['charisma'] = $charisma;

        return $this;
    }

    /**
     * Gets intelligence
     *
     * @return int
     */
    public function getIntelligence()
    {
        return $this->container['intelligence'];
    }

    /**
     * Sets intelligence
     *
     * @param int $intelligence intelligence integer
     *
     * @return $this
     */
    public function setIntelligence($intelligence)
    {
        $this->container['intelligence'] = $intelligence;

        return $this;
    }

    /**
     * Gets memory
     *
     * @return int
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param int $memory memory integer
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets perception
     *
     * @return int
     */
    public function getPerception()
    {
        return $this->container['perception'];
    }

    /**
     * Sets perception
     *
     * @param int $perception perception integer
     *
     * @return $this
     */
    public function setPerception($perception)
    {
        $this->container['perception'] = $perception;

        return $this;
    }

    /**
     * Gets willpower
     *
     * @return int
     */
    public function getWillpower()
    {
        return $this->container['willpower'];
    }

    /**
     * Sets willpower
     *
     * @param int $willpower willpower integer
     *
     * @return $this
     */
    public function setWillpower($willpower)
    {
        $this->container['willpower'] = $willpower;

        return $this;
    }

    /**
     * Gets bonus_remaps
     *
     * @return int
     */
    public function getBonusRemaps()
    {
        return $this->container['bonus_remaps'];
    }

    /**
     * Sets bonus_remaps
     *
     * @param int $bonus_remaps Number of available bonus character neural remaps
     *
     * @return $this
     */
    public function setBonusRemaps($bonus_remaps)
    {
        $this->container['bonus_remaps'] = $bonus_remaps;

        return $this;
    }

    /**
     * Gets last_remap_date
     *
     * @return \DateTime
     */
    public function getLastRemapDate()
    {
        return $this->container['last_remap_date'];
    }

    /**
     * Sets last_remap_date
     *
     * @param \DateTime $last_remap_date Datetime of last neural remap, including usage of bonus remaps
     *
     * @return $this
     */
    public function setLastRemapDate($last_remap_date)
    {
        $this->container['last_remap_date'] = $last_remap_date;

        return $this;
    }

    /**
     * Gets accrued_remap_cooldown_date
     *
     * @return \DateTime
     */
    public function getAccruedRemapCooldownDate()
    {
        return $this->container['accrued_remap_cooldown_date'];
    }

    /**
     * Sets accrued_remap_cooldown_date
     *
     * @param \DateTime $accrued_remap_cooldown_date Neural remapping cooldown after a character uses remap accrued over time
     *
     * @return $this
     */
    public function setAccruedRemapCooldownDate($accrued_remap_cooldown_date)
    {
        $this->container['accrued_remap_cooldown_date'] = $accrued_remap_cooldown_date;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


