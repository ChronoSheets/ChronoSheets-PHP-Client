<?php
/**
 * UpdateGeoFenceRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChronoSheets API
 *
 * <div style='font-size: 14px!important;font-family: Open Sans,sans-serif!important;color: #3b4151!important;'><p>      ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 3 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.  Before starting, sign up for a ChronoSheets account at <a target='_BLANK' href='http://tsheets.xyz/signup'>http://tsheets.xyz/signup</a>.  </p></div><div id='cs-extra-info'></div>
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChronoSheetsClient\ChronoSheetsClientLibModel;

use \ArrayAccess;
use \ChronoSheetsClient\ObjectSerializer;

/**
 * UpdateGeoFenceRequest Class Doc Comment
 *
 * @category Class
 * @description A request object for updating a new geofence
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateGeoFenceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateGeoFenceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'geofenceId' => 'int',
        'name' => 'string',
        'fenceCoordinates' => '\ChronoSheetsClient\ChronoSheetsClientLibModel\BasicCoordinate[]',
        'triggerJobCodeId' => 'int',
        'triggerTaskId' => 'int',
        'sendAlertToOrgGroupId' => 'int',
        'alertSettings' => 'string',
        'triggerSettings' => 'string',
        'startTimeHour' => 'int',
        'startTimeMinute' => 'int',
        'endTimeHour' => 'int',
        'endTimeMinute' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'geofenceId' => 'int32',
        'name' => null,
        'fenceCoordinates' => null,
        'triggerJobCodeId' => 'int32',
        'triggerTaskId' => 'int32',
        'sendAlertToOrgGroupId' => 'int32',
        'alertSettings' => null,
        'triggerSettings' => null,
        'startTimeHour' => 'int32',
        'startTimeMinute' => 'int32',
        'endTimeHour' => 'int32',
        'endTimeMinute' => 'int32'
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
        'geofenceId' => 'GeofenceId',
        'name' => 'Name',
        'fenceCoordinates' => 'FenceCoordinates',
        'triggerJobCodeId' => 'TriggerJobCodeId',
        'triggerTaskId' => 'TriggerTaskId',
        'sendAlertToOrgGroupId' => 'SendAlertToOrgGroupId',
        'alertSettings' => 'AlertSettings',
        'triggerSettings' => 'TriggerSettings',
        'startTimeHour' => 'StartTimeHour',
        'startTimeMinute' => 'StartTimeMinute',
        'endTimeHour' => 'EndTimeHour',
        'endTimeMinute' => 'EndTimeMinute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'geofenceId' => 'setGeofenceId',
        'name' => 'setName',
        'fenceCoordinates' => 'setFenceCoordinates',
        'triggerJobCodeId' => 'setTriggerJobCodeId',
        'triggerTaskId' => 'setTriggerTaskId',
        'sendAlertToOrgGroupId' => 'setSendAlertToOrgGroupId',
        'alertSettings' => 'setAlertSettings',
        'triggerSettings' => 'setTriggerSettings',
        'startTimeHour' => 'setStartTimeHour',
        'startTimeMinute' => 'setStartTimeMinute',
        'endTimeHour' => 'setEndTimeHour',
        'endTimeMinute' => 'setEndTimeMinute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'geofenceId' => 'getGeofenceId',
        'name' => 'getName',
        'fenceCoordinates' => 'getFenceCoordinates',
        'triggerJobCodeId' => 'getTriggerJobCodeId',
        'triggerTaskId' => 'getTriggerTaskId',
        'sendAlertToOrgGroupId' => 'getSendAlertToOrgGroupId',
        'alertSettings' => 'getAlertSettings',
        'triggerSettings' => 'getTriggerSettings',
        'startTimeHour' => 'getStartTimeHour',
        'startTimeMinute' => 'getStartTimeMinute',
        'endTimeHour' => 'getEndTimeHour',
        'endTimeMinute' => 'getEndTimeMinute'
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

    const ALERT_SETTINGS_NONE = 'None';
    const ALERT_SETTINGS_SEND_WHEN_ENTERING = 'SendWhenEntering';
    const ALERT_SETTINGS_SEND_WHEN_EXITING = 'SendWhenExiting';
    const ALERT_SETTINGS_SEND_WHEN_ENTERING_OR_EXITING = 'SendWhenEnteringOrExiting';
    const TRIGGER_SETTINGS_NONE = 'None';
    const TRIGGER_SETTINGS_START_TIMESHEET_WHEN_ENTERING = 'StartTimesheetWhenEntering';
    const TRIGGER_SETTINGS_STOP_TIMESHEET_WHEN_ENTERING = 'StopTimesheetWhenEntering';
    const TRIGGER_SETTINGS_START_ON_ENTER_STOP_ON_LEAVE = 'StartOnEnterStopOnLeave';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlertSettingsAllowableValues()
    {
        return [
            self::ALERT_SETTINGS_NONE,
            self::ALERT_SETTINGS_SEND_WHEN_ENTERING,
            self::ALERT_SETTINGS_SEND_WHEN_EXITING,
            self::ALERT_SETTINGS_SEND_WHEN_ENTERING_OR_EXITING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTriggerSettingsAllowableValues()
    {
        return [
            self::TRIGGER_SETTINGS_NONE,
            self::TRIGGER_SETTINGS_START_TIMESHEET_WHEN_ENTERING,
            self::TRIGGER_SETTINGS_STOP_TIMESHEET_WHEN_ENTERING,
            self::TRIGGER_SETTINGS_START_ON_ENTER_STOP_ON_LEAVE,
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
        $this->container['geofenceId'] = isset($data['geofenceId']) ? $data['geofenceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fenceCoordinates'] = isset($data['fenceCoordinates']) ? $data['fenceCoordinates'] : null;
        $this->container['triggerJobCodeId'] = isset($data['triggerJobCodeId']) ? $data['triggerJobCodeId'] : null;
        $this->container['triggerTaskId'] = isset($data['triggerTaskId']) ? $data['triggerTaskId'] : null;
        $this->container['sendAlertToOrgGroupId'] = isset($data['sendAlertToOrgGroupId']) ? $data['sendAlertToOrgGroupId'] : null;
        $this->container['alertSettings'] = isset($data['alertSettings']) ? $data['alertSettings'] : null;
        $this->container['triggerSettings'] = isset($data['triggerSettings']) ? $data['triggerSettings'] : null;
        $this->container['startTimeHour'] = isset($data['startTimeHour']) ? $data['startTimeHour'] : null;
        $this->container['startTimeMinute'] = isset($data['startTimeMinute']) ? $data['startTimeMinute'] : null;
        $this->container['endTimeHour'] = isset($data['endTimeHour']) ? $data['endTimeHour'] : null;
        $this->container['endTimeMinute'] = isset($data['endTimeMinute']) ? $data['endTimeMinute'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAlertSettingsAllowableValues();
        if (!is_null($this->container['alertSettings']) && !in_array($this->container['alertSettings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alertSettings', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTriggerSettingsAllowableValues();
        if (!is_null($this->container['triggerSettings']) && !in_array($this->container['triggerSettings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'triggerSettings', must be one of '%s'",
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
     * Gets geofenceId
     *
     * @return int|null
     */
    public function getGeofenceId()
    {
        return $this->container['geofenceId'];
    }

    /**
     * Sets geofenceId
     *
     * @param int|null $geofenceId The ID of the geofence you want to update
     *
     * @return $this
     */
    public function setGeofenceId($geofenceId)
    {
        $this->container['geofenceId'] = $geofenceId;

        return $this;
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
     * @param string|null $name The name of the geo fence
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets fenceCoordinates
     *
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\BasicCoordinate[]|null
     */
    public function getFenceCoordinates()
    {
        return $this->container['fenceCoordinates'];
    }

    /**
     * Sets fenceCoordinates
     *
     * @param \ChronoSheetsClient\ChronoSheetsClientLibModel\BasicCoordinate[]|null $fenceCoordinates A list of coordinates specifying the geofence region
     *
     * @return $this
     */
    public function setFenceCoordinates($fenceCoordinates)
    {
        $this->container['fenceCoordinates'] = $fenceCoordinates;

        return $this;
    }

    /**
     * Gets triggerJobCodeId
     *
     * @return int|null
     */
    public function getTriggerJobCodeId()
    {
        return $this->container['triggerJobCodeId'];
    }

    /**
     * Sets triggerJobCodeId
     *
     * @param int|null $triggerJobCodeId The job code to be used when the person enters/leaves the geofence
     *
     * @return $this
     */
    public function setTriggerJobCodeId($triggerJobCodeId)
    {
        $this->container['triggerJobCodeId'] = $triggerJobCodeId;

        return $this;
    }

    /**
     * Gets triggerTaskId
     *
     * @return int|null
     */
    public function getTriggerTaskId()
    {
        return $this->container['triggerTaskId'];
    }

    /**
     * Sets triggerTaskId
     *
     * @param int|null $triggerTaskId The task to be used when the person enters/leaves the geofence
     *
     * @return $this
     */
    public function setTriggerTaskId($triggerTaskId)
    {
        $this->container['triggerTaskId'] = $triggerTaskId;

        return $this;
    }

    /**
     * Gets sendAlertToOrgGroupId
     *
     * @return int|null
     */
    public function getSendAlertToOrgGroupId()
    {
        return $this->container['sendAlertToOrgGroupId'];
    }

    /**
     * Sets sendAlertToOrgGroupId
     *
     * @param int|null $sendAlertToOrgGroupId Send an alert to a user, specified by their user ID
     *
     * @return $this
     */
    public function setSendAlertToOrgGroupId($sendAlertToOrgGroupId)
    {
        $this->container['sendAlertToOrgGroupId'] = $sendAlertToOrgGroupId;

        return $this;
    }

    /**
     * Gets alertSettings
     *
     * @return string|null
     */
    public function getAlertSettings()
    {
        return $this->container['alertSettings'];
    }

    /**
     * Sets alertSettings
     *
     * @param string|null $alertSettings Define when you want the alerts to be setn
     *
     * @return $this
     */
    public function setAlertSettings($alertSettings)
    {
        $allowedValues = $this->getAlertSettingsAllowableValues();
        if (!is_null($alertSettings) && !in_array($alertSettings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'alertSettings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['alertSettings'] = $alertSettings;

        return $this;
    }

    /**
     * Gets triggerSettings
     *
     * @return string|null
     */
    public function getTriggerSettings()
    {
        return $this->container['triggerSettings'];
    }

    /**
     * Sets triggerSettings
     *
     * @param string|null $triggerSettings Define how to you want to trigger the timesheet automation
     *
     * @return $this
     */
    public function setTriggerSettings($triggerSettings)
    {
        $allowedValues = $this->getTriggerSettingsAllowableValues();
        if (!is_null($triggerSettings) && !in_array($triggerSettings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'triggerSettings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['triggerSettings'] = $triggerSettings;

        return $this;
    }

    /**
     * Gets startTimeHour
     *
     * @return int|null
     */
    public function getStartTimeHour()
    {
        return $this->container['startTimeHour'];
    }

    /**
     * Sets startTimeHour
     *
     * @param int|null $startTimeHour The start hour in which this geofence should apply.  After this time, the geofence will be active.
     *
     * @return $this
     */
    public function setStartTimeHour($startTimeHour)
    {
        $this->container['startTimeHour'] = $startTimeHour;

        return $this;
    }

    /**
     * Gets startTimeMinute
     *
     * @return int|null
     */
    public function getStartTimeMinute()
    {
        return $this->container['startTimeMinute'];
    }

    /**
     * Sets startTimeMinute
     *
     * @param int|null $startTimeMinute The start minute in which this geofence should apply.  After this time, the geofence will be active.
     *
     * @return $this
     */
    public function setStartTimeMinute($startTimeMinute)
    {
        $this->container['startTimeMinute'] = $startTimeMinute;

        return $this;
    }

    /**
     * Gets endTimeHour
     *
     * @return int|null
     */
    public function getEndTimeHour()
    {
        return $this->container['endTimeHour'];
    }

    /**
     * Sets endTimeHour
     *
     * @param int|null $endTimeHour The end hour in which this geofence will stop applying.  After this time, the geofence will be inactive.
     *
     * @return $this
     */
    public function setEndTimeHour($endTimeHour)
    {
        $this->container['endTimeHour'] = $endTimeHour;

        return $this;
    }

    /**
     * Gets endTimeMinute
     *
     * @return int|null
     */
    public function getEndTimeMinute()
    {
        return $this->container['endTimeMinute'];
    }

    /**
     * Sets endTimeMinute
     *
     * @param int|null $endTimeMinute The end minute in which this geofence will stop applying.  After this time, the geofence will be inactive.
     *
     * @return $this
     */
    public function setEndTimeMinute($endTimeMinute)
    {
        $this->container['endTimeMinute'] = $endTimeMinute;

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

