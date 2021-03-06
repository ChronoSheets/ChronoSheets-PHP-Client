<?php
/**
 * CSTimeSlot
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChronoSheets API
 *
 * <div style='font-size: 14px!important;font-family: Open Sans,sans-serif!important;color: #3b4151!important;'><p>      ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 3 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.  Before starting, sign up for a ChronoSheets account at <a target='_BLANK' href='http://tsheets.xyz/signup'>http://tsheets.xyz/signup</a>.  </p></div><div id='cs-extra-info'></div>
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChronoSheetsClient\ChronoSheetsClientLibModel;

use \ArrayAccess;
use \ChronoSheetsClient\ObjectSerializer;

/**
 * CSTimeSlot Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CSTimeSlot implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimeSlot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dayType' => 'string',
        'usualHourId' => 'int',
        'startHour' => 'int',
        'startMinute' => 'int',
        'endHour' => 'int',
        'endMinute' => 'int',
        'isValid' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dayType' => null,
        'usualHourId' => 'int32',
        'startHour' => 'int32',
        'startMinute' => 'int32',
        'endHour' => 'int32',
        'endMinute' => 'int32',
        'isValid' => null
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
        'dayType' => 'DayType',
        'usualHourId' => 'UsualHourId',
        'startHour' => 'StartHour',
        'startMinute' => 'StartMinute',
        'endHour' => 'EndHour',
        'endMinute' => 'EndMinute',
        'isValid' => 'IsValid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dayType' => 'setDayType',
        'usualHourId' => 'setUsualHourId',
        'startHour' => 'setStartHour',
        'startMinute' => 'setStartMinute',
        'endHour' => 'setEndHour',
        'endMinute' => 'setEndMinute',
        'isValid' => 'setIsValid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dayType' => 'getDayType',
        'usualHourId' => 'getUsualHourId',
        'startHour' => 'getStartHour',
        'startMinute' => 'getStartMinute',
        'endHour' => 'getEndHour',
        'endMinute' => 'getEndMinute',
        'isValid' => 'getIsValid'
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

    const CS_DAY_TYPE_MONDAY = 'Monday';
    const CS_DAY_TYPE_TUESDAY = 'Tuesday';
    const CS_DAY_TYPE_WEDNESDAY = 'Wednesday';
    const CS_DAY_TYPE_THURSDAY = 'Thursday';
    const CS_DAY_TYPE_FRIDAY = 'Friday';
    const CS_DAY_TYPE_SATURDAY = 'Saturday';
    const CS_DAY_TYPE_SUNDAY = 'Sunday';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDayTypeAllowableValues()
    {
        return [
            self::CS_DAY_TYPE_MONDAY,
            self::CS_DAY_TYPE_TUESDAY,
            self::CS_DAY_TYPE_WEDNESDAY,
            self::CS_DAY_TYPE_THURSDAY,
            self::CS_DAY_TYPE_FRIDAY,
            self::CS_DAY_TYPE_SATURDAY,
            self::CS_DAY_TYPE_SUNDAY,
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
        $this->container['dayType'] = isset($data['dayType']) ? $data['dayType'] : null;
        $this->container['usualHourId'] = isset($data['usualHourId']) ? $data['usualHourId'] : null;
        $this->container['startHour'] = isset($data['startHour']) ? $data['startHour'] : null;
        $this->container['startMinute'] = isset($data['startMinute']) ? $data['startMinute'] : null;
        $this->container['endHour'] = isset($data['endHour']) ? $data['endHour'] : null;
        $this->container['endMinute'] = isset($data['endMinute']) ? $data['endMinute'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDayTypeAllowableValues();
        if (!is_null($this->container['dayType']) && !in_array($this->container['dayType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dayType', must be one of '%s'",
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
     * Gets dayType
     *
     * @return string
     */
    public function getDayType()
    {
        return $this->container['dayType'];
    }

    /**
     * Sets dayType
     *
     * @param string $dayType dayType
     *
     * @return $this
     */
    public function setDayType($dayType)
    {
        $allowedValues = $this->getDayTypeAllowableValues();
        if (!is_null($dayType) && !in_array($dayType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dayType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dayType'] = $dayType;

        return $this;
    }

    /**
     * Gets usualHourId
     *
     * @return int
     */
    public function getUsualHourId()
    {
        return $this->container['usualHourId'];
    }

    /**
     * Sets usualHourId
     *
     * @param int $usualHourId usualHourId
     *
     * @return $this
     */
    public function setUsualHourId($usualHourId)
    {
        $this->container['usualHourId'] = $usualHourId;

        return $this;
    }

    /**
     * Gets startHour
     *
     * @return int
     */
    public function getStartHour()
    {
        return $this->container['startHour'];
    }

    /**
     * Sets startHour
     *
     * @param int $startHour startHour
     *
     * @return $this
     */
    public function setStartHour($startHour)
    {
        $this->container['startHour'] = $startHour;

        return $this;
    }

    /**
     * Gets startMinute
     *
     * @return int
     */
    public function getStartMinute()
    {
        return $this->container['startMinute'];
    }

    /**
     * Sets startMinute
     *
     * @param int $startMinute startMinute
     *
     * @return $this
     */
    public function setStartMinute($startMinute)
    {
        $this->container['startMinute'] = $startMinute;

        return $this;
    }

    /**
     * Gets endHour
     *
     * @return int
     */
    public function getEndHour()
    {
        return $this->container['endHour'];
    }

    /**
     * Sets endHour
     *
     * @param int $endHour endHour
     *
     * @return $this
     */
    public function setEndHour($endHour)
    {
        $this->container['endHour'] = $endHour;

        return $this;
    }

    /**
     * Gets endMinute
     *
     * @return int
     */
    public function getEndMinute()
    {
        return $this->container['endMinute'];
    }

    /**
     * Sets endMinute
     *
     * @param int $endMinute endMinute
     *
     * @return $this
     */
    public function setEndMinute($endMinute)
    {
        $this->container['endMinute'] = $endMinute;

        return $this;
    }

    /**
     * Gets isValid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
     * Sets isValid
     *
     * @param bool $isValid isValid
     *
     * @return $this
     */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;

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


