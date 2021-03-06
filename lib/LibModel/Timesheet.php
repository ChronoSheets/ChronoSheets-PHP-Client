<?php
/**
 * Timesheet
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.0.0
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
 * Timesheet Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Timesheet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Timesheet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timesheetId' => 'int',
        'userId' => 'int',
        'jobId' => 'int',
        'taskId' => 'int',
        'startDateTime' => '\DateTime',
        'endDateTime' => '\DateTime',
        'description' => 'string',
        'tripId' => 'int',
        'fileAttachmentCount' => 'int',
        'payAmount' => 'double',
        'overtimePayAmount' => 'double',
        'includesOvertime' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'timesheetId' => 'int32',
        'userId' => 'int32',
        'jobId' => 'int32',
        'taskId' => 'int32',
        'startDateTime' => 'date-time',
        'endDateTime' => 'date-time',
        'description' => null,
        'tripId' => 'int32',
        'fileAttachmentCount' => 'int32',
        'payAmount' => 'double',
        'overtimePayAmount' => 'double',
        'includesOvertime' => null
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
        'timesheetId' => 'TimesheetId',
        'userId' => 'UserId',
        'jobId' => 'JobId',
        'taskId' => 'TaskId',
        'startDateTime' => 'StartDateTime',
        'endDateTime' => 'EndDateTime',
        'description' => 'Description',
        'tripId' => 'TripId',
        'fileAttachmentCount' => 'FileAttachmentCount',
        'payAmount' => 'PayAmount',
        'overtimePayAmount' => 'OvertimePayAmount',
        'includesOvertime' => 'IncludesOvertime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timesheetId' => 'setTimesheetId',
        'userId' => 'setUserId',
        'jobId' => 'setJobId',
        'taskId' => 'setTaskId',
        'startDateTime' => 'setStartDateTime',
        'endDateTime' => 'setEndDateTime',
        'description' => 'setDescription',
        'tripId' => 'setTripId',
        'fileAttachmentCount' => 'setFileAttachmentCount',
        'payAmount' => 'setPayAmount',
        'overtimePayAmount' => 'setOvertimePayAmount',
        'includesOvertime' => 'setIncludesOvertime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timesheetId' => 'getTimesheetId',
        'userId' => 'getUserId',
        'jobId' => 'getJobId',
        'taskId' => 'getTaskId',
        'startDateTime' => 'getStartDateTime',
        'endDateTime' => 'getEndDateTime',
        'description' => 'getDescription',
        'tripId' => 'getTripId',
        'fileAttachmentCount' => 'getFileAttachmentCount',
        'payAmount' => 'getPayAmount',
        'overtimePayAmount' => 'getOvertimePayAmount',
        'includesOvertime' => 'getIncludesOvertime'
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
        $this->container['timesheetId'] = $data['timesheetId'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
        $this->container['jobId'] = $data['jobId'] ?? null;
        $this->container['taskId'] = $data['taskId'] ?? null;
        $this->container['startDateTime'] = $data['startDateTime'] ?? null;
        $this->container['endDateTime'] = $data['endDateTime'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['tripId'] = $data['tripId'] ?? null;
        $this->container['fileAttachmentCount'] = $data['fileAttachmentCount'] ?? null;
        $this->container['payAmount'] = $data['payAmount'] ?? null;
        $this->container['overtimePayAmount'] = $data['overtimePayAmount'] ?? null;
        $this->container['includesOvertime'] = $data['includesOvertime'] ?? null;
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
     * Gets timesheetId
     *
     * @return int|null
     */
    public function getTimesheetId()
    {
        return $this->container['timesheetId'];
    }

    /**
     * Sets timesheetId
     *
     * @param int|null $timesheetId timesheetId
     *
     * @return self
     */
    public function setTimesheetId($timesheetId)
    {
        $this->container['timesheetId'] = $timesheetId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int|null $userId userId
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return int|null
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param int|null $jobId jobId
     *
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets taskId
     *
     * @return int|null
     */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
     * Sets taskId
     *
     * @param int|null $taskId taskId
     *
     * @return self
     */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;

        return $this;
    }

    /**
     * Gets startDateTime
     *
     * @return \DateTime|null
     */
    public function getStartDateTime()
    {
        return $this->container['startDateTime'];
    }

    /**
     * Sets startDateTime
     *
     * @param \DateTime|null $startDateTime startDateTime
     *
     * @return self
     */
    public function setStartDateTime($startDateTime)
    {
        $this->container['startDateTime'] = $startDateTime;

        return $this;
    }

    /**
     * Gets endDateTime
     *
     * @return \DateTime|null
     */
    public function getEndDateTime()
    {
        return $this->container['endDateTime'];
    }

    /**
     * Sets endDateTime
     *
     * @param \DateTime|null $endDateTime endDateTime
     *
     * @return self
     */
    public function setEndDateTime($endDateTime)
    {
        $this->container['endDateTime'] = $endDateTime;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets tripId
     *
     * @return int|null
     */
    public function getTripId()
    {
        return $this->container['tripId'];
    }

    /**
     * Sets tripId
     *
     * @param int|null $tripId tripId
     *
     * @return self
     */
    public function setTripId($tripId)
    {
        $this->container['tripId'] = $tripId;

        return $this;
    }

    /**
     * Gets fileAttachmentCount
     *
     * @return int|null
     */
    public function getFileAttachmentCount()
    {
        return $this->container['fileAttachmentCount'];
    }

    /**
     * Sets fileAttachmentCount
     *
     * @param int|null $fileAttachmentCount fileAttachmentCount
     *
     * @return self
     */
    public function setFileAttachmentCount($fileAttachmentCount)
    {
        $this->container['fileAttachmentCount'] = $fileAttachmentCount;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return double|null
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param double|null $payAmount payAmount
     *
     * @return self
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets overtimePayAmount
     *
     * @return double|null
     */
    public function getOvertimePayAmount()
    {
        return $this->container['overtimePayAmount'];
    }

    /**
     * Sets overtimePayAmount
     *
     * @param double|null $overtimePayAmount overtimePayAmount
     *
     * @return self
     */
    public function setOvertimePayAmount($overtimePayAmount)
    {
        $this->container['overtimePayAmount'] = $overtimePayAmount;

        return $this;
    }

    /**
     * Gets includesOvertime
     *
     * @return bool|null
     */
    public function getIncludesOvertime()
    {
        return $this->container['includesOvertime'];
    }

    /**
     * Sets includesOvertime
     *
     * @param bool|null $includesOvertime includesOvertime
     *
     * @return self
     */
    public function setIncludesOvertime($includesOvertime)
    {
        $this->container['includesOvertime'] = $includesOvertime;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


