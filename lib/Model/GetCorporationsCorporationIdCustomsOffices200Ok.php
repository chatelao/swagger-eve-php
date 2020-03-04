<?php
/**
 * GetCorporationsCorporationIdCustomsOffices200Ok
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
 * GetCorporationsCorporationIdCustomsOffices200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCorporationsCorporationIdCustomsOffices200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_customs_offices_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alliance_tax_rate' => 'float',
        'allow_access_with_standings' => 'bool',
        'allow_alliance_access' => 'bool',
        'bad_standing_tax_rate' => 'float',
        'corporation_tax_rate' => 'float',
        'excellent_standing_tax_rate' => 'float',
        'good_standing_tax_rate' => 'float',
        'neutral_standing_tax_rate' => 'float',
        'office_id' => 'int',
        'reinforce_exit_end' => 'int',
        'reinforce_exit_start' => 'int',
        'standing_level' => 'string',
        'system_id' => 'int',
        'terrible_standing_tax_rate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'alliance_tax_rate' => 'float',
        'allow_access_with_standings' => null,
        'allow_alliance_access' => null,
        'bad_standing_tax_rate' => 'float',
        'corporation_tax_rate' => 'float',
        'excellent_standing_tax_rate' => 'float',
        'good_standing_tax_rate' => 'float',
        'neutral_standing_tax_rate' => 'float',
        'office_id' => 'int64',
        'reinforce_exit_end' => 'int32',
        'reinforce_exit_start' => 'int32',
        'standing_level' => null,
        'system_id' => 'int32',
        'terrible_standing_tax_rate' => 'float'
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
        'alliance_tax_rate' => 'alliance_tax_rate',
        'allow_access_with_standings' => 'allow_access_with_standings',
        'allow_alliance_access' => 'allow_alliance_access',
        'bad_standing_tax_rate' => 'bad_standing_tax_rate',
        'corporation_tax_rate' => 'corporation_tax_rate',
        'excellent_standing_tax_rate' => 'excellent_standing_tax_rate',
        'good_standing_tax_rate' => 'good_standing_tax_rate',
        'neutral_standing_tax_rate' => 'neutral_standing_tax_rate',
        'office_id' => 'office_id',
        'reinforce_exit_end' => 'reinforce_exit_end',
        'reinforce_exit_start' => 'reinforce_exit_start',
        'standing_level' => 'standing_level',
        'system_id' => 'system_id',
        'terrible_standing_tax_rate' => 'terrible_standing_tax_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alliance_tax_rate' => 'setAllianceTaxRate',
        'allow_access_with_standings' => 'setAllowAccessWithStandings',
        'allow_alliance_access' => 'setAllowAllianceAccess',
        'bad_standing_tax_rate' => 'setBadStandingTaxRate',
        'corporation_tax_rate' => 'setCorporationTaxRate',
        'excellent_standing_tax_rate' => 'setExcellentStandingTaxRate',
        'good_standing_tax_rate' => 'setGoodStandingTaxRate',
        'neutral_standing_tax_rate' => 'setNeutralStandingTaxRate',
        'office_id' => 'setOfficeId',
        'reinforce_exit_end' => 'setReinforceExitEnd',
        'reinforce_exit_start' => 'setReinforceExitStart',
        'standing_level' => 'setStandingLevel',
        'system_id' => 'setSystemId',
        'terrible_standing_tax_rate' => 'setTerribleStandingTaxRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alliance_tax_rate' => 'getAllianceTaxRate',
        'allow_access_with_standings' => 'getAllowAccessWithStandings',
        'allow_alliance_access' => 'getAllowAllianceAccess',
        'bad_standing_tax_rate' => 'getBadStandingTaxRate',
        'corporation_tax_rate' => 'getCorporationTaxRate',
        'excellent_standing_tax_rate' => 'getExcellentStandingTaxRate',
        'good_standing_tax_rate' => 'getGoodStandingTaxRate',
        'neutral_standing_tax_rate' => 'getNeutralStandingTaxRate',
        'office_id' => 'getOfficeId',
        'reinforce_exit_end' => 'getReinforceExitEnd',
        'reinforce_exit_start' => 'getReinforceExitStart',
        'standing_level' => 'getStandingLevel',
        'system_id' => 'getSystemId',
        'terrible_standing_tax_rate' => 'getTerribleStandingTaxRate'
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

    const STANDING_LEVEL_BAD = 'bad';
    const STANDING_LEVEL_EXCELLENT = 'excellent';
    const STANDING_LEVEL_GOOD = 'good';
    const STANDING_LEVEL_NEUTRAL = 'neutral';
    const STANDING_LEVEL_TERRIBLE = 'terrible';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStandingLevelAllowableValues()
    {
        return [
            self::STANDING_LEVEL_BAD,
            self::STANDING_LEVEL_EXCELLENT,
            self::STANDING_LEVEL_GOOD,
            self::STANDING_LEVEL_NEUTRAL,
            self::STANDING_LEVEL_TERRIBLE,
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
        $this->container['alliance_tax_rate'] = isset($data['alliance_tax_rate']) ? $data['alliance_tax_rate'] : null;
        $this->container['allow_access_with_standings'] = isset($data['allow_access_with_standings']) ? $data['allow_access_with_standings'] : null;
        $this->container['allow_alliance_access'] = isset($data['allow_alliance_access']) ? $data['allow_alliance_access'] : null;
        $this->container['bad_standing_tax_rate'] = isset($data['bad_standing_tax_rate']) ? $data['bad_standing_tax_rate'] : null;
        $this->container['corporation_tax_rate'] = isset($data['corporation_tax_rate']) ? $data['corporation_tax_rate'] : null;
        $this->container['excellent_standing_tax_rate'] = isset($data['excellent_standing_tax_rate']) ? $data['excellent_standing_tax_rate'] : null;
        $this->container['good_standing_tax_rate'] = isset($data['good_standing_tax_rate']) ? $data['good_standing_tax_rate'] : null;
        $this->container['neutral_standing_tax_rate'] = isset($data['neutral_standing_tax_rate']) ? $data['neutral_standing_tax_rate'] : null;
        $this->container['office_id'] = isset($data['office_id']) ? $data['office_id'] : null;
        $this->container['reinforce_exit_end'] = isset($data['reinforce_exit_end']) ? $data['reinforce_exit_end'] : null;
        $this->container['reinforce_exit_start'] = isset($data['reinforce_exit_start']) ? $data['reinforce_exit_start'] : null;
        $this->container['standing_level'] = isset($data['standing_level']) ? $data['standing_level'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['terrible_standing_tax_rate'] = isset($data['terrible_standing_tax_rate']) ? $data['terrible_standing_tax_rate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['allow_access_with_standings'] === null) {
            $invalidProperties[] = "'allow_access_with_standings' can't be null";
        }
        if ($this->container['allow_alliance_access'] === null) {
            $invalidProperties[] = "'allow_alliance_access' can't be null";
        }
        if ($this->container['office_id'] === null) {
            $invalidProperties[] = "'office_id' can't be null";
        }
        if ($this->container['reinforce_exit_end'] === null) {
            $invalidProperties[] = "'reinforce_exit_end' can't be null";
        }
        if (($this->container['reinforce_exit_end'] > 23)) {
            $invalidProperties[] = "invalid value for 'reinforce_exit_end', must be smaller than or equal to 23.";
        }

        if (($this->container['reinforce_exit_end'] < 0)) {
            $invalidProperties[] = "invalid value for 'reinforce_exit_end', must be bigger than or equal to 0.";
        }

        if ($this->container['reinforce_exit_start'] === null) {
            $invalidProperties[] = "'reinforce_exit_start' can't be null";
        }
        if (($this->container['reinforce_exit_start'] > 23)) {
            $invalidProperties[] = "invalid value for 'reinforce_exit_start', must be smaller than or equal to 23.";
        }

        if (($this->container['reinforce_exit_start'] < 0)) {
            $invalidProperties[] = "invalid value for 'reinforce_exit_start', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getStandingLevelAllowableValues();
        if (!is_null($this->container['standing_level']) && !in_array($this->container['standing_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'standing_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
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
     * Gets alliance_tax_rate
     *
     * @return float|null
     */
    public function getAllianceTaxRate()
    {
        return $this->container['alliance_tax_rate'];
    }

    /**
     * Sets alliance_tax_rate
     *
     * @param float|null $alliance_tax_rate Only present if alliance access is allowed
     *
     * @return $this
     */
    public function setAllianceTaxRate($alliance_tax_rate)
    {
        $this->container['alliance_tax_rate'] = $alliance_tax_rate;

        return $this;
    }

    /**
     * Gets allow_access_with_standings
     *
     * @return bool
     */
    public function getAllowAccessWithStandings()
    {
        return $this->container['allow_access_with_standings'];
    }

    /**
     * Sets allow_access_with_standings
     *
     * @param bool $allow_access_with_standings standing_level and any standing related tax rate only present when this is true
     *
     * @return $this
     */
    public function setAllowAccessWithStandings($allow_access_with_standings)
    {
        $this->container['allow_access_with_standings'] = $allow_access_with_standings;

        return $this;
    }

    /**
     * Gets allow_alliance_access
     *
     * @return bool
     */
    public function getAllowAllianceAccess()
    {
        return $this->container['allow_alliance_access'];
    }

    /**
     * Sets allow_alliance_access
     *
     * @param bool $allow_alliance_access allow_alliance_access boolean
     *
     * @return $this
     */
    public function setAllowAllianceAccess($allow_alliance_access)
    {
        $this->container['allow_alliance_access'] = $allow_alliance_access;

        return $this;
    }

    /**
     * Gets bad_standing_tax_rate
     *
     * @return float|null
     */
    public function getBadStandingTaxRate()
    {
        return $this->container['bad_standing_tax_rate'];
    }

    /**
     * Sets bad_standing_tax_rate
     *
     * @param float|null $bad_standing_tax_rate bad_standing_tax_rate number
     *
     * @return $this
     */
    public function setBadStandingTaxRate($bad_standing_tax_rate)
    {
        $this->container['bad_standing_tax_rate'] = $bad_standing_tax_rate;

        return $this;
    }

    /**
     * Gets corporation_tax_rate
     *
     * @return float|null
     */
    public function getCorporationTaxRate()
    {
        return $this->container['corporation_tax_rate'];
    }

    /**
     * Sets corporation_tax_rate
     *
     * @param float|null $corporation_tax_rate corporation_tax_rate number
     *
     * @return $this
     */
    public function setCorporationTaxRate($corporation_tax_rate)
    {
        $this->container['corporation_tax_rate'] = $corporation_tax_rate;

        return $this;
    }

    /**
     * Gets excellent_standing_tax_rate
     *
     * @return float|null
     */
    public function getExcellentStandingTaxRate()
    {
        return $this->container['excellent_standing_tax_rate'];
    }

    /**
     * Sets excellent_standing_tax_rate
     *
     * @param float|null $excellent_standing_tax_rate Tax rate for entities with excellent level of standing, only present if this level is allowed, same for all other standing related tax rates
     *
     * @return $this
     */
    public function setExcellentStandingTaxRate($excellent_standing_tax_rate)
    {
        $this->container['excellent_standing_tax_rate'] = $excellent_standing_tax_rate;

        return $this;
    }

    /**
     * Gets good_standing_tax_rate
     *
     * @return float|null
     */
    public function getGoodStandingTaxRate()
    {
        return $this->container['good_standing_tax_rate'];
    }

    /**
     * Sets good_standing_tax_rate
     *
     * @param float|null $good_standing_tax_rate good_standing_tax_rate number
     *
     * @return $this
     */
    public function setGoodStandingTaxRate($good_standing_tax_rate)
    {
        $this->container['good_standing_tax_rate'] = $good_standing_tax_rate;

        return $this;
    }

    /**
     * Gets neutral_standing_tax_rate
     *
     * @return float|null
     */
    public function getNeutralStandingTaxRate()
    {
        return $this->container['neutral_standing_tax_rate'];
    }

    /**
     * Sets neutral_standing_tax_rate
     *
     * @param float|null $neutral_standing_tax_rate neutral_standing_tax_rate number
     *
     * @return $this
     */
    public function setNeutralStandingTaxRate($neutral_standing_tax_rate)
    {
        $this->container['neutral_standing_tax_rate'] = $neutral_standing_tax_rate;

        return $this;
    }

    /**
     * Gets office_id
     *
     * @return int
     */
    public function getOfficeId()
    {
        return $this->container['office_id'];
    }

    /**
     * Sets office_id
     *
     * @param int $office_id unique ID of this customs office
     *
     * @return $this
     */
    public function setOfficeId($office_id)
    {
        $this->container['office_id'] = $office_id;

        return $this;
    }

    /**
     * Gets reinforce_exit_end
     *
     * @return int
     */
    public function getReinforceExitEnd()
    {
        return $this->container['reinforce_exit_end'];
    }

    /**
     * Sets reinforce_exit_end
     *
     * @param int $reinforce_exit_end reinforce_exit_end integer
     *
     * @return $this
     */
    public function setReinforceExitEnd($reinforce_exit_end)
    {

        if (($reinforce_exit_end > 23)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_exit_end when calling GetCorporationsCorporationIdCustomsOffices200Ok., must be smaller than or equal to 23.');
        }
        if (($reinforce_exit_end < 0)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_exit_end when calling GetCorporationsCorporationIdCustomsOffices200Ok., must be bigger than or equal to 0.');
        }

        $this->container['reinforce_exit_end'] = $reinforce_exit_end;

        return $this;
    }

    /**
     * Gets reinforce_exit_start
     *
     * @return int
     */
    public function getReinforceExitStart()
    {
        return $this->container['reinforce_exit_start'];
    }

    /**
     * Sets reinforce_exit_start
     *
     * @param int $reinforce_exit_start Together with reinforce_exit_end, marks a 2-hour period where this customs office could exit reinforcement mode during the day after initial attack
     *
     * @return $this
     */
    public function setReinforceExitStart($reinforce_exit_start)
    {

        if (($reinforce_exit_start > 23)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_exit_start when calling GetCorporationsCorporationIdCustomsOffices200Ok., must be smaller than or equal to 23.');
        }
        if (($reinforce_exit_start < 0)) {
            throw new \InvalidArgumentException('invalid value for $reinforce_exit_start when calling GetCorporationsCorporationIdCustomsOffices200Ok., must be bigger than or equal to 0.');
        }

        $this->container['reinforce_exit_start'] = $reinforce_exit_start;

        return $this;
    }

    /**
     * Gets standing_level
     *
     * @return string|null
     */
    public function getStandingLevel()
    {
        return $this->container['standing_level'];
    }

    /**
     * Sets standing_level
     *
     * @param string|null $standing_level Access is allowed only for entities with this level of standing or better
     *
     * @return $this
     */
    public function setStandingLevel($standing_level)
    {
        $allowedValues = $this->getStandingLevelAllowableValues();
        if (!is_null($standing_level) && !in_array($standing_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'standing_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['standing_level'] = $standing_level;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id ID of the solar system this customs office is located in
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets terrible_standing_tax_rate
     *
     * @return float|null
     */
    public function getTerribleStandingTaxRate()
    {
        return $this->container['terrible_standing_tax_rate'];
    }

    /**
     * Sets terrible_standing_tax_rate
     *
     * @param float|null $terrible_standing_tax_rate terrible_standing_tax_rate number
     *
     * @return $this
     */
    public function setTerribleStandingTaxRate($terrible_standing_tax_rate)
    {
        $this->container['terrible_standing_tax_rate'] = $terrible_standing_tax_rate;

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


