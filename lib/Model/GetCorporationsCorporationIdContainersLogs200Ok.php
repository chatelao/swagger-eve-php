<?php
/**
 * GetCorporationsCorporationIdContainersLogs200Ok
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
 * GetCorporationsCorporationIdContainersLogs200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCorporationsCorporationIdContainersLogs200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_containers_logs_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'old_config_bitmask' => 'int',
        'quantity' => 'int',
        'logged_at' => '\DateTime',
        'password_type' => 'string',
        'container_type_id' => 'int',
        'location_flag' => 'string',
        'type_id' => 'int',
        'action' => 'string',
        'character_id' => 'int',
        'container_id' => 'int',
        'location_id' => 'int',
        'new_config_bitmask' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'old_config_bitmask' => 'int32',
        'quantity' => 'int32',
        'logged_at' => 'date-time',
        'password_type' => null,
        'container_type_id' => 'int32',
        'location_flag' => null,
        'type_id' => 'int32',
        'action' => null,
        'character_id' => 'int32',
        'container_id' => 'int64',
        'location_id' => 'int64',
        'new_config_bitmask' => 'int32'
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
        'old_config_bitmask' => 'old_config_bitmask',
        'quantity' => 'quantity',
        'logged_at' => 'logged_at',
        'password_type' => 'password_type',
        'container_type_id' => 'container_type_id',
        'location_flag' => 'location_flag',
        'type_id' => 'type_id',
        'action' => 'action',
        'character_id' => 'character_id',
        'container_id' => 'container_id',
        'location_id' => 'location_id',
        'new_config_bitmask' => 'new_config_bitmask'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'old_config_bitmask' => 'setOldConfigBitmask',
        'quantity' => 'setQuantity',
        'logged_at' => 'setLoggedAt',
        'password_type' => 'setPasswordType',
        'container_type_id' => 'setContainerTypeId',
        'location_flag' => 'setLocationFlag',
        'type_id' => 'setTypeId',
        'action' => 'setAction',
        'character_id' => 'setCharacterId',
        'container_id' => 'setContainerId',
        'location_id' => 'setLocationId',
        'new_config_bitmask' => 'setNewConfigBitmask'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'old_config_bitmask' => 'getOldConfigBitmask',
        'quantity' => 'getQuantity',
        'logged_at' => 'getLoggedAt',
        'password_type' => 'getPasswordType',
        'container_type_id' => 'getContainerTypeId',
        'location_flag' => 'getLocationFlag',
        'type_id' => 'getTypeId',
        'action' => 'getAction',
        'character_id' => 'getCharacterId',
        'container_id' => 'getContainerId',
        'location_id' => 'getLocationId',
        'new_config_bitmask' => 'getNewConfigBitmask'
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

    const PASSWORD_TYPE_CONFIG = 'config';
    const PASSWORD_TYPE_GENERAL = 'general';
    const LOCATION_FLAG_ASSET_SAFETY = 'AssetSafety';
    const LOCATION_FLAG_AUTO_FIT = 'AutoFit';
    const LOCATION_FLAG_BONUS = 'Bonus';
    const LOCATION_FLAG_BOOSTER = 'Booster';
    const LOCATION_FLAG_BOOSTER_BAY = 'BoosterBay';
    const LOCATION_FLAG_CAPSULE = 'Capsule';
    const LOCATION_FLAG_CARGO = 'Cargo';
    const LOCATION_FLAG_CORP_DELIVERIES = 'CorpDeliveries';
    const LOCATION_FLAG_CORP_SAG1 = 'CorpSAG1';
    const LOCATION_FLAG_CORP_SAG2 = 'CorpSAG2';
    const LOCATION_FLAG_CORP_SAG3 = 'CorpSAG3';
    const LOCATION_FLAG_CORP_SAG4 = 'CorpSAG4';
    const LOCATION_FLAG_CORP_SAG5 = 'CorpSAG5';
    const LOCATION_FLAG_CORP_SAG6 = 'CorpSAG6';
    const LOCATION_FLAG_CORP_SAG7 = 'CorpSAG7';
    const LOCATION_FLAG_CRATE_LOOT = 'CrateLoot';
    const LOCATION_FLAG_DELIVERIES = 'Deliveries';
    const LOCATION_FLAG_DRONE_BAY = 'DroneBay';
    const LOCATION_FLAG_DUST_BATTLE = 'DustBattle';
    const LOCATION_FLAG_DUST_DATABANK = 'DustDatabank';
    const LOCATION_FLAG_FIGHTER_BAY = 'FighterBay';
    const LOCATION_FLAG_FIGHTER_TUBE0 = 'FighterTube0';
    const LOCATION_FLAG_FIGHTER_TUBE1 = 'FighterTube1';
    const LOCATION_FLAG_FIGHTER_TUBE2 = 'FighterTube2';
    const LOCATION_FLAG_FIGHTER_TUBE3 = 'FighterTube3';
    const LOCATION_FLAG_FIGHTER_TUBE4 = 'FighterTube4';
    const LOCATION_FLAG_FLEET_HANGAR = 'FleetHangar';
    const LOCATION_FLAG_HANGAR = 'Hangar';
    const LOCATION_FLAG_HANGAR_ALL = 'HangarAll';
    const LOCATION_FLAG_HI_SLOT0 = 'HiSlot0';
    const LOCATION_FLAG_HI_SLOT1 = 'HiSlot1';
    const LOCATION_FLAG_HI_SLOT2 = 'HiSlot2';
    const LOCATION_FLAG_HI_SLOT3 = 'HiSlot3';
    const LOCATION_FLAG_HI_SLOT4 = 'HiSlot4';
    const LOCATION_FLAG_HI_SLOT5 = 'HiSlot5';
    const LOCATION_FLAG_HI_SLOT6 = 'HiSlot6';
    const LOCATION_FLAG_HI_SLOT7 = 'HiSlot7';
    const LOCATION_FLAG_HIDDEN_MODIFIERS = 'HiddenModifiers';
    const LOCATION_FLAG_IMPLANT = 'Implant';
    const LOCATION_FLAG_IMPOUNDED = 'Impounded';
    const LOCATION_FLAG_JUNKYARD_REPROCESSED = 'JunkyardReprocessed';
    const LOCATION_FLAG_JUNKYARD_TRASHED = 'JunkyardTrashed';
    const LOCATION_FLAG_LO_SLOT0 = 'LoSlot0';
    const LOCATION_FLAG_LO_SLOT1 = 'LoSlot1';
    const LOCATION_FLAG_LO_SLOT2 = 'LoSlot2';
    const LOCATION_FLAG_LO_SLOT3 = 'LoSlot3';
    const LOCATION_FLAG_LO_SLOT4 = 'LoSlot4';
    const LOCATION_FLAG_LO_SLOT5 = 'LoSlot5';
    const LOCATION_FLAG_LO_SLOT6 = 'LoSlot6';
    const LOCATION_FLAG_LO_SLOT7 = 'LoSlot7';
    const LOCATION_FLAG_LOCKED = 'Locked';
    const LOCATION_FLAG_MED_SLOT0 = 'MedSlot0';
    const LOCATION_FLAG_MED_SLOT1 = 'MedSlot1';
    const LOCATION_FLAG_MED_SLOT2 = 'MedSlot2';
    const LOCATION_FLAG_MED_SLOT3 = 'MedSlot3';
    const LOCATION_FLAG_MED_SLOT4 = 'MedSlot4';
    const LOCATION_FLAG_MED_SLOT5 = 'MedSlot5';
    const LOCATION_FLAG_MED_SLOT6 = 'MedSlot6';
    const LOCATION_FLAG_MED_SLOT7 = 'MedSlot7';
    const LOCATION_FLAG_OFFICE_FOLDER = 'OfficeFolder';
    const LOCATION_FLAG_PILOT = 'Pilot';
    const LOCATION_FLAG_PLANET_SURFACE = 'PlanetSurface';
    const LOCATION_FLAG_QUAFE_BAY = 'QuafeBay';
    const LOCATION_FLAG_REWARD = 'Reward';
    const LOCATION_FLAG_RIG_SLOT0 = 'RigSlot0';
    const LOCATION_FLAG_RIG_SLOT1 = 'RigSlot1';
    const LOCATION_FLAG_RIG_SLOT2 = 'RigSlot2';
    const LOCATION_FLAG_RIG_SLOT3 = 'RigSlot3';
    const LOCATION_FLAG_RIG_SLOT4 = 'RigSlot4';
    const LOCATION_FLAG_RIG_SLOT5 = 'RigSlot5';
    const LOCATION_FLAG_RIG_SLOT6 = 'RigSlot6';
    const LOCATION_FLAG_RIG_SLOT7 = 'RigSlot7';
    const LOCATION_FLAG_SECONDARY_STORAGE = 'SecondaryStorage';
    const LOCATION_FLAG_SERVICE_SLOT0 = 'ServiceSlot0';
    const LOCATION_FLAG_SERVICE_SLOT1 = 'ServiceSlot1';
    const LOCATION_FLAG_SERVICE_SLOT2 = 'ServiceSlot2';
    const LOCATION_FLAG_SERVICE_SLOT3 = 'ServiceSlot3';
    const LOCATION_FLAG_SERVICE_SLOT4 = 'ServiceSlot4';
    const LOCATION_FLAG_SERVICE_SLOT5 = 'ServiceSlot5';
    const LOCATION_FLAG_SERVICE_SLOT6 = 'ServiceSlot6';
    const LOCATION_FLAG_SERVICE_SLOT7 = 'ServiceSlot7';
    const LOCATION_FLAG_SHIP_HANGAR = 'ShipHangar';
    const LOCATION_FLAG_SHIP_OFFLINE = 'ShipOffline';
    const LOCATION_FLAG_SKILL = 'Skill';
    const LOCATION_FLAG_SKILL_IN_TRAINING = 'SkillInTraining';
    const LOCATION_FLAG_SPECIALIZED_AMMO_HOLD = 'SpecializedAmmoHold';
    const LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD = 'SpecializedCommandCenterHold';
    const LOCATION_FLAG_SPECIALIZED_FUEL_BAY = 'SpecializedFuelBay';
    const LOCATION_FLAG_SPECIALIZED_GAS_HOLD = 'SpecializedGasHold';
    const LOCATION_FLAG_SPECIALIZED_INDUSTRIAL_SHIP_HOLD = 'SpecializedIndustrialShipHold';
    const LOCATION_FLAG_SPECIALIZED_LARGE_SHIP_HOLD = 'SpecializedLargeShipHold';
    const LOCATION_FLAG_SPECIALIZED_MATERIAL_BAY = 'SpecializedMaterialBay';
    const LOCATION_FLAG_SPECIALIZED_MEDIUM_SHIP_HOLD = 'SpecializedMediumShipHold';
    const LOCATION_FLAG_SPECIALIZED_MINERAL_HOLD = 'SpecializedMineralHold';
    const LOCATION_FLAG_SPECIALIZED_ORE_HOLD = 'SpecializedOreHold';
    const LOCATION_FLAG_SPECIALIZED_PLANETARY_COMMODITIES_HOLD = 'SpecializedPlanetaryCommoditiesHold';
    const LOCATION_FLAG_SPECIALIZED_SALVAGE_HOLD = 'SpecializedSalvageHold';
    const LOCATION_FLAG_SPECIALIZED_SHIP_HOLD = 'SpecializedShipHold';
    const LOCATION_FLAG_SPECIALIZED_SMALL_SHIP_HOLD = 'SpecializedSmallShipHold';
    const LOCATION_FLAG_STRUCTURE_ACTIVE = 'StructureActive';
    const LOCATION_FLAG_STRUCTURE_FUEL = 'StructureFuel';
    const LOCATION_FLAG_STRUCTURE_INACTIVE = 'StructureInactive';
    const LOCATION_FLAG_STRUCTURE_OFFLINE = 'StructureOffline';
    const LOCATION_FLAG_SUB_SYSTEM_BAY = 'SubSystemBay';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT0 = 'SubSystemSlot0';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT1 = 'SubSystemSlot1';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT2 = 'SubSystemSlot2';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT3 = 'SubSystemSlot3';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT4 = 'SubSystemSlot4';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT5 = 'SubSystemSlot5';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT6 = 'SubSystemSlot6';
    const LOCATION_FLAG_SUB_SYSTEM_SLOT7 = 'SubSystemSlot7';
    const LOCATION_FLAG_UNLOCKED = 'Unlocked';
    const LOCATION_FLAG_WALLET = 'Wallet';
    const LOCATION_FLAG_WARDROBE = 'Wardrobe';
    const ACTION_ADD = 'add';
    const ACTION_ASSEMBLE = 'assemble';
    const ACTION_CONFIGURE = 'configure';
    const ACTION_ENTER_PASSWORD = 'enter_password';
    const ACTION_LOCK = 'lock';
    const ACTION_MOVE = 'move';
    const ACTION_REPACKAGE = 'repackage';
    const ACTION_SET_NAME = 'set_name';
    const ACTION_SET_PASSWORD = 'set_password';
    const ACTION_UNLOCK = 'unlock';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPasswordTypeAllowableValues()
    {
        return [
            self::PASSWORD_TYPE_CONFIG,
            self::PASSWORD_TYPE_GENERAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocationFlagAllowableValues()
    {
        return [
            self::LOCATION_FLAG_ASSET_SAFETY,
            self::LOCATION_FLAG_AUTO_FIT,
            self::LOCATION_FLAG_BONUS,
            self::LOCATION_FLAG_BOOSTER,
            self::LOCATION_FLAG_BOOSTER_BAY,
            self::LOCATION_FLAG_CAPSULE,
            self::LOCATION_FLAG_CARGO,
            self::LOCATION_FLAG_CORP_DELIVERIES,
            self::LOCATION_FLAG_CORP_SAG1,
            self::LOCATION_FLAG_CORP_SAG2,
            self::LOCATION_FLAG_CORP_SAG3,
            self::LOCATION_FLAG_CORP_SAG4,
            self::LOCATION_FLAG_CORP_SAG5,
            self::LOCATION_FLAG_CORP_SAG6,
            self::LOCATION_FLAG_CORP_SAG7,
            self::LOCATION_FLAG_CRATE_LOOT,
            self::LOCATION_FLAG_DELIVERIES,
            self::LOCATION_FLAG_DRONE_BAY,
            self::LOCATION_FLAG_DUST_BATTLE,
            self::LOCATION_FLAG_DUST_DATABANK,
            self::LOCATION_FLAG_FIGHTER_BAY,
            self::LOCATION_FLAG_FIGHTER_TUBE0,
            self::LOCATION_FLAG_FIGHTER_TUBE1,
            self::LOCATION_FLAG_FIGHTER_TUBE2,
            self::LOCATION_FLAG_FIGHTER_TUBE3,
            self::LOCATION_FLAG_FIGHTER_TUBE4,
            self::LOCATION_FLAG_FLEET_HANGAR,
            self::LOCATION_FLAG_HANGAR,
            self::LOCATION_FLAG_HANGAR_ALL,
            self::LOCATION_FLAG_HI_SLOT0,
            self::LOCATION_FLAG_HI_SLOT1,
            self::LOCATION_FLAG_HI_SLOT2,
            self::LOCATION_FLAG_HI_SLOT3,
            self::LOCATION_FLAG_HI_SLOT4,
            self::LOCATION_FLAG_HI_SLOT5,
            self::LOCATION_FLAG_HI_SLOT6,
            self::LOCATION_FLAG_HI_SLOT7,
            self::LOCATION_FLAG_HIDDEN_MODIFIERS,
            self::LOCATION_FLAG_IMPLANT,
            self::LOCATION_FLAG_IMPOUNDED,
            self::LOCATION_FLAG_JUNKYARD_REPROCESSED,
            self::LOCATION_FLAG_JUNKYARD_TRASHED,
            self::LOCATION_FLAG_LO_SLOT0,
            self::LOCATION_FLAG_LO_SLOT1,
            self::LOCATION_FLAG_LO_SLOT2,
            self::LOCATION_FLAG_LO_SLOT3,
            self::LOCATION_FLAG_LO_SLOT4,
            self::LOCATION_FLAG_LO_SLOT5,
            self::LOCATION_FLAG_LO_SLOT6,
            self::LOCATION_FLAG_LO_SLOT7,
            self::LOCATION_FLAG_LOCKED,
            self::LOCATION_FLAG_MED_SLOT0,
            self::LOCATION_FLAG_MED_SLOT1,
            self::LOCATION_FLAG_MED_SLOT2,
            self::LOCATION_FLAG_MED_SLOT3,
            self::LOCATION_FLAG_MED_SLOT4,
            self::LOCATION_FLAG_MED_SLOT5,
            self::LOCATION_FLAG_MED_SLOT6,
            self::LOCATION_FLAG_MED_SLOT7,
            self::LOCATION_FLAG_OFFICE_FOLDER,
            self::LOCATION_FLAG_PILOT,
            self::LOCATION_FLAG_PLANET_SURFACE,
            self::LOCATION_FLAG_QUAFE_BAY,
            self::LOCATION_FLAG_REWARD,
            self::LOCATION_FLAG_RIG_SLOT0,
            self::LOCATION_FLAG_RIG_SLOT1,
            self::LOCATION_FLAG_RIG_SLOT2,
            self::LOCATION_FLAG_RIG_SLOT3,
            self::LOCATION_FLAG_RIG_SLOT4,
            self::LOCATION_FLAG_RIG_SLOT5,
            self::LOCATION_FLAG_RIG_SLOT6,
            self::LOCATION_FLAG_RIG_SLOT7,
            self::LOCATION_FLAG_SECONDARY_STORAGE,
            self::LOCATION_FLAG_SERVICE_SLOT0,
            self::LOCATION_FLAG_SERVICE_SLOT1,
            self::LOCATION_FLAG_SERVICE_SLOT2,
            self::LOCATION_FLAG_SERVICE_SLOT3,
            self::LOCATION_FLAG_SERVICE_SLOT4,
            self::LOCATION_FLAG_SERVICE_SLOT5,
            self::LOCATION_FLAG_SERVICE_SLOT6,
            self::LOCATION_FLAG_SERVICE_SLOT7,
            self::LOCATION_FLAG_SHIP_HANGAR,
            self::LOCATION_FLAG_SHIP_OFFLINE,
            self::LOCATION_FLAG_SKILL,
            self::LOCATION_FLAG_SKILL_IN_TRAINING,
            self::LOCATION_FLAG_SPECIALIZED_AMMO_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_FUEL_BAY,
            self::LOCATION_FLAG_SPECIALIZED_GAS_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_INDUSTRIAL_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_LARGE_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_MATERIAL_BAY,
            self::LOCATION_FLAG_SPECIALIZED_MEDIUM_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_MINERAL_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_ORE_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_PLANETARY_COMMODITIES_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SALVAGE_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SMALL_SHIP_HOLD,
            self::LOCATION_FLAG_STRUCTURE_ACTIVE,
            self::LOCATION_FLAG_STRUCTURE_FUEL,
            self::LOCATION_FLAG_STRUCTURE_INACTIVE,
            self::LOCATION_FLAG_STRUCTURE_OFFLINE,
            self::LOCATION_FLAG_SUB_SYSTEM_BAY,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT0,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT1,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT2,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT3,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT4,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT5,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT6,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT7,
            self::LOCATION_FLAG_UNLOCKED,
            self::LOCATION_FLAG_WALLET,
            self::LOCATION_FLAG_WARDROBE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ADD,
            self::ACTION_ASSEMBLE,
            self::ACTION_CONFIGURE,
            self::ACTION_ENTER_PASSWORD,
            self::ACTION_LOCK,
            self::ACTION_MOVE,
            self::ACTION_REPACKAGE,
            self::ACTION_SET_NAME,
            self::ACTION_SET_PASSWORD,
            self::ACTION_UNLOCK,
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
        $this->container['old_config_bitmask'] = isset($data['old_config_bitmask']) ? $data['old_config_bitmask'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['logged_at'] = isset($data['logged_at']) ? $data['logged_at'] : null;
        $this->container['password_type'] = isset($data['password_type']) ? $data['password_type'] : null;
        $this->container['container_type_id'] = isset($data['container_type_id']) ? $data['container_type_id'] : null;
        $this->container['location_flag'] = isset($data['location_flag']) ? $data['location_flag'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['container_id'] = isset($data['container_id']) ? $data['container_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['new_config_bitmask'] = isset($data['new_config_bitmask']) ? $data['new_config_bitmask'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['logged_at'] === null) {
            $invalidProperties[] = "'logged_at' can't be null";
        }
        $allowedValues = $this->getPasswordTypeAllowableValues();
        if (!is_null($this->container['password_type']) && !in_array($this->container['password_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'password_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_type_id'] === null) {
            $invalidProperties[] = "'container_type_id' can't be null";
        }
        if ($this->container['location_flag'] === null) {
            $invalidProperties[] = "'location_flag' can't be null";
        }
        $allowedValues = $this->getLocationFlagAllowableValues();
        if (!is_null($this->container['location_flag']) && !in_array($this->container['location_flag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'location_flag', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['character_id'] === null) {
            $invalidProperties[] = "'character_id' can't be null";
        }
        if ($this->container['container_id'] === null) {
            $invalidProperties[] = "'container_id' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
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
     * Gets old_config_bitmask
     *
     * @return int|null
     */
    public function getOldConfigBitmask()
    {
        return $this->container['old_config_bitmask'];
    }

    /**
     * Sets old_config_bitmask
     *
     * @param int|null $old_config_bitmask old_config_bitmask integer
     *
     * @return $this
     */
    public function setOldConfigBitmask($old_config_bitmask)
    {
        $this->container['old_config_bitmask'] = $old_config_bitmask;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Quantity of the item being acted upon
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets logged_at
     *
     * @return \DateTime
     */
    public function getLoggedAt()
    {
        return $this->container['logged_at'];
    }

    /**
     * Sets logged_at
     *
     * @param \DateTime $logged_at Timestamp when this log was created
     *
     * @return $this
     */
    public function setLoggedAt($logged_at)
    {
        $this->container['logged_at'] = $logged_at;

        return $this;
    }

    /**
     * Gets password_type
     *
     * @return string|null
     */
    public function getPasswordType()
    {
        return $this->container['password_type'];
    }

    /**
     * Sets password_type
     *
     * @param string|null $password_type Type of password set if action is of type SetPassword or EnterPassword
     *
     * @return $this
     */
    public function setPasswordType($password_type)
    {
        $allowedValues = $this->getPasswordTypeAllowableValues();
        if (!is_null($password_type) && !in_array($password_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'password_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['password_type'] = $password_type;

        return $this;
    }

    /**
     * Gets container_type_id
     *
     * @return int
     */
    public function getContainerTypeId()
    {
        return $this->container['container_type_id'];
    }

    /**
     * Sets container_type_id
     *
     * @param int $container_type_id Type ID of the container
     *
     * @return $this
     */
    public function setContainerTypeId($container_type_id)
    {
        $this->container['container_type_id'] = $container_type_id;

        return $this;
    }

    /**
     * Gets location_flag
     *
     * @return string
     */
    public function getLocationFlag()
    {
        return $this->container['location_flag'];
    }

    /**
     * Sets location_flag
     *
     * @param string $location_flag location_flag string
     *
     * @return $this
     */
    public function setLocationFlag($location_flag)
    {
        $allowedValues = $this->getLocationFlagAllowableValues();
        if (!in_array($location_flag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'location_flag', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['location_flag'] = $location_flag;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int|null $type_id Type ID of the item being acted upon
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action string
     *
     * @return $this
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets character_id
     *
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int $character_id ID of the character who performed the action.
     *
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets container_id
     *
     * @return int
     */
    public function getContainerId()
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     *
     * @param int $container_id ID of the container
     *
     * @return $this
     */
    public function setContainerId($container_id)
    {
        $this->container['container_id'] = $container_id;

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
     * Gets new_config_bitmask
     *
     * @return int|null
     */
    public function getNewConfigBitmask()
    {
        return $this->container['new_config_bitmask'];
    }

    /**
     * Sets new_config_bitmask
     *
     * @param int|null $new_config_bitmask new_config_bitmask integer
     *
     * @return $this
     */
    public function setNewConfigBitmask($new_config_bitmask)
    {
        $this->container['new_config_bitmask'] = $new_config_bitmask;

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


