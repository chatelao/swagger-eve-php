<?php
/**
 * PostUniverseIdsOk
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
 * PostUniverseIdsOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PostUniverseIdsOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_universe_ids_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'characters' => '\Swagger\Client\Eve\Model\PostUniverseIdsCharacter[]',
        'regions' => '\Swagger\Client\Eve\Model\PostUniverseIdsRegion[]',
        'systems' => '\Swagger\Client\Eve\Model\PostUniverseIdsSystem[]',
        'constellations' => '\Swagger\Client\Eve\Model\PostUniverseIdsConstellation[]',
        'inventory_types' => '\Swagger\Client\Eve\Model\PostUniverseIdsInventoryType[]',
        'alliances' => '\Swagger\Client\Eve\Model\PostUniverseIdsAlliance[]',
        'stations' => '\Swagger\Client\Eve\Model\PostUniverseIdsStation[]',
        'agents' => '\Swagger\Client\Eve\Model\PostUniverseIdsAgent[]',
        'corporations' => '\Swagger\Client\Eve\Model\PostUniverseIdsCorporation[]',
        'factions' => '\Swagger\Client\Eve\Model\PostUniverseIdsFaction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'characters' => null,
        'regions' => null,
        'systems' => null,
        'constellations' => null,
        'inventory_types' => null,
        'alliances' => null,
        'stations' => null,
        'agents' => null,
        'corporations' => null,
        'factions' => null
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
        'characters' => 'characters',
        'regions' => 'regions',
        'systems' => 'systems',
        'constellations' => 'constellations',
        'inventory_types' => 'inventory_types',
        'alliances' => 'alliances',
        'stations' => 'stations',
        'agents' => 'agents',
        'corporations' => 'corporations',
        'factions' => 'factions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'characters' => 'setCharacters',
        'regions' => 'setRegions',
        'systems' => 'setSystems',
        'constellations' => 'setConstellations',
        'inventory_types' => 'setInventoryTypes',
        'alliances' => 'setAlliances',
        'stations' => 'setStations',
        'agents' => 'setAgents',
        'corporations' => 'setCorporations',
        'factions' => 'setFactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'characters' => 'getCharacters',
        'regions' => 'getRegions',
        'systems' => 'getSystems',
        'constellations' => 'getConstellations',
        'inventory_types' => 'getInventoryTypes',
        'alliances' => 'getAlliances',
        'stations' => 'getStations',
        'agents' => 'getAgents',
        'corporations' => 'getCorporations',
        'factions' => 'getFactions'
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
        $this->container['characters'] = isset($data['characters']) ? $data['characters'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['systems'] = isset($data['systems']) ? $data['systems'] : null;
        $this->container['constellations'] = isset($data['constellations']) ? $data['constellations'] : null;
        $this->container['inventory_types'] = isset($data['inventory_types']) ? $data['inventory_types'] : null;
        $this->container['alliances'] = isset($data['alliances']) ? $data['alliances'] : null;
        $this->container['stations'] = isset($data['stations']) ? $data['stations'] : null;
        $this->container['agents'] = isset($data['agents']) ? $data['agents'] : null;
        $this->container['corporations'] = isset($data['corporations']) ? $data['corporations'] : null;
        $this->container['factions'] = isset($data['factions']) ? $data['factions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets characters
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsCharacter[]|null
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsCharacter[]|null $characters characters array
     *
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsRegion[]|null
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsRegion[]|null $regions regions array
     *
     * @return $this
     */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets systems
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsSystem[]|null
     */
    public function getSystems()
    {
        return $this->container['systems'];
    }

    /**
     * Sets systems
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsSystem[]|null $systems systems array
     *
     * @return $this
     */
    public function setSystems($systems)
    {
        $this->container['systems'] = $systems;

        return $this;
    }

    /**
     * Gets constellations
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsConstellation[]|null
     */
    public function getConstellations()
    {
        return $this->container['constellations'];
    }

    /**
     * Sets constellations
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsConstellation[]|null $constellations constellations array
     *
     * @return $this
     */
    public function setConstellations($constellations)
    {
        $this->container['constellations'] = $constellations;

        return $this;
    }

    /**
     * Gets inventory_types
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsInventoryType[]|null
     */
    public function getInventoryTypes()
    {
        return $this->container['inventory_types'];
    }

    /**
     * Sets inventory_types
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsInventoryType[]|null $inventory_types inventory_types array
     *
     * @return $this
     */
    public function setInventoryTypes($inventory_types)
    {
        $this->container['inventory_types'] = $inventory_types;

        return $this;
    }

    /**
     * Gets alliances
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsAlliance[]|null
     */
    public function getAlliances()
    {
        return $this->container['alliances'];
    }

    /**
     * Sets alliances
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsAlliance[]|null $alliances alliances array
     *
     * @return $this
     */
    public function setAlliances($alliances)
    {
        $this->container['alliances'] = $alliances;

        return $this;
    }

    /**
     * Gets stations
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsStation[]|null
     */
    public function getStations()
    {
        return $this->container['stations'];
    }

    /**
     * Sets stations
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsStation[]|null $stations stations array
     *
     * @return $this
     */
    public function setStations($stations)
    {
        $this->container['stations'] = $stations;

        return $this;
    }

    /**
     * Gets agents
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsAgent[]|null
     */
    public function getAgents()
    {
        return $this->container['agents'];
    }

    /**
     * Sets agents
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsAgent[]|null $agents agents array
     *
     * @return $this
     */
    public function setAgents($agents)
    {
        $this->container['agents'] = $agents;

        return $this;
    }

    /**
     * Gets corporations
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsCorporation[]|null
     */
    public function getCorporations()
    {
        return $this->container['corporations'];
    }

    /**
     * Sets corporations
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsCorporation[]|null $corporations corporations array
     *
     * @return $this
     */
    public function setCorporations($corporations)
    {
        $this->container['corporations'] = $corporations;

        return $this;
    }

    /**
     * Gets factions
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsFaction[]|null
     */
    public function getFactions()
    {
        return $this->container['factions'];
    }

    /**
     * Sets factions
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsFaction[]|null $factions factions array
     *
     * @return $this
     */
    public function setFactions($factions)
    {
        $this->container['factions'] = $factions;

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


