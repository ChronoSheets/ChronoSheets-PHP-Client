<?php
/**
 * CSTrip
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
 * ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 5 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.
 *
 * OpenAPI spec version: v1
 * Contact: lachlan@chronosheets.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * CSTrip Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CSTrip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Trip';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tripId' => 'int',
        'timesheetId' => 'int',
        'vehicleId' => 'int',
        'userId' => 'int',
        'orgId' => 'int',
        'mobilePlatform' => 'string',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'vehicleName' => 'string',
        'vehicleMake' => 'string',
        'vehicleModel' => 'string',
        'vehicleYear' => 'string',
        'costPerKilometer' => 'double',
        'tripTotalCost' => 'double',
        'totalTripDistanceMeters' => 'double',
        'startAddress' => 'string',
        'endAddress' => 'string',
        'pathCoordinates' => '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSTripCoordinate[]',
        'cacheExpiryDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tripId' => 'int32',
        'timesheetId' => 'int32',
        'vehicleId' => 'int32',
        'userId' => 'int32',
        'orgId' => 'int32',
        'mobilePlatform' => null,
        'startDate' => 'date-time',
        'endDate' => 'date-time',
        'vehicleName' => null,
        'vehicleMake' => null,
        'vehicleModel' => null,
        'vehicleYear' => null,
        'costPerKilometer' => 'double',
        'tripTotalCost' => 'double',
        'totalTripDistanceMeters' => 'double',
        'startAddress' => null,
        'endAddress' => null,
        'pathCoordinates' => null,
        'cacheExpiryDate' => 'date-time'
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
        'tripId' => 'TripId',
        'timesheetId' => 'TimesheetId',
        'vehicleId' => 'VehicleId',
        'userId' => 'UserId',
        'orgId' => 'OrgId',
        'mobilePlatform' => 'MobilePlatform',
        'startDate' => 'StartDate',
        'endDate' => 'EndDate',
        'vehicleName' => 'VehicleName',
        'vehicleMake' => 'VehicleMake',
        'vehicleModel' => 'VehicleModel',
        'vehicleYear' => 'VehicleYear',
        'costPerKilometer' => 'CostPerKilometer',
        'tripTotalCost' => 'TripTotalCost',
        'totalTripDistanceMeters' => 'TotalTripDistanceMeters',
        'startAddress' => 'StartAddress',
        'endAddress' => 'EndAddress',
        'pathCoordinates' => 'PathCoordinates',
        'cacheExpiryDate' => 'CacheExpiryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tripId' => 'setTripId',
        'timesheetId' => 'setTimesheetId',
        'vehicleId' => 'setVehicleId',
        'userId' => 'setUserId',
        'orgId' => 'setOrgId',
        'mobilePlatform' => 'setMobilePlatform',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'vehicleName' => 'setVehicleName',
        'vehicleMake' => 'setVehicleMake',
        'vehicleModel' => 'setVehicleModel',
        'vehicleYear' => 'setVehicleYear',
        'costPerKilometer' => 'setCostPerKilometer',
        'tripTotalCost' => 'setTripTotalCost',
        'totalTripDistanceMeters' => 'setTotalTripDistanceMeters',
        'startAddress' => 'setStartAddress',
        'endAddress' => 'setEndAddress',
        'pathCoordinates' => 'setPathCoordinates',
        'cacheExpiryDate' => 'setCacheExpiryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tripId' => 'getTripId',
        'timesheetId' => 'getTimesheetId',
        'vehicleId' => 'getVehicleId',
        'userId' => 'getUserId',
        'orgId' => 'getOrgId',
        'mobilePlatform' => 'getMobilePlatform',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'vehicleName' => 'getVehicleName',
        'vehicleMake' => 'getVehicleMake',
        'vehicleModel' => 'getVehicleModel',
        'vehicleYear' => 'getVehicleYear',
        'costPerKilometer' => 'getCostPerKilometer',
        'tripTotalCost' => 'getTripTotalCost',
        'totalTripDistanceMeters' => 'getTotalTripDistanceMeters',
        'startAddress' => 'getStartAddress',
        'endAddress' => 'getEndAddress',
        'pathCoordinates' => 'getPathCoordinates',
        'cacheExpiryDate' => 'getCacheExpiryDate'
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

    const CS_MOBILE_PLATFORM_UNKNOWN = 'Unknown';
    const CS_MOBILE_PLATFORM_I_OS = 'iOS';
    const CS_MOBILE_PLATFORM_ANDROID = 'Android';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMobilePlatformAllowableValues()
    {
        return [
            self::CS_MOBILE_PLATFORM_UNKNOWN,
            self::CS_MOBILE_PLATFORM_I_OS,
            self::CS_MOBILE_PLATFORM_ANDROID,
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
        $this->container['tripId'] = isset($data['tripId']) ? $data['tripId'] : null;
        $this->container['timesheetId'] = isset($data['timesheetId']) ? $data['timesheetId'] : null;
        $this->container['vehicleId'] = isset($data['vehicleId']) ? $data['vehicleId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['mobilePlatform'] = isset($data['mobilePlatform']) ? $data['mobilePlatform'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['vehicleName'] = isset($data['vehicleName']) ? $data['vehicleName'] : null;
        $this->container['vehicleMake'] = isset($data['vehicleMake']) ? $data['vehicleMake'] : null;
        $this->container['vehicleModel'] = isset($data['vehicleModel']) ? $data['vehicleModel'] : null;
        $this->container['vehicleYear'] = isset($data['vehicleYear']) ? $data['vehicleYear'] : null;
        $this->container['costPerKilometer'] = isset($data['costPerKilometer']) ? $data['costPerKilometer'] : null;
        $this->container['tripTotalCost'] = isset($data['tripTotalCost']) ? $data['tripTotalCost'] : null;
        $this->container['totalTripDistanceMeters'] = isset($data['totalTripDistanceMeters']) ? $data['totalTripDistanceMeters'] : null;
        $this->container['startAddress'] = isset($data['startAddress']) ? $data['startAddress'] : null;
        $this->container['endAddress'] = isset($data['endAddress']) ? $data['endAddress'] : null;
        $this->container['pathCoordinates'] = isset($data['pathCoordinates']) ? $data['pathCoordinates'] : null;
        $this->container['cacheExpiryDate'] = isset($data['cacheExpiryDate']) ? $data['cacheExpiryDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMobilePlatformAllowableValues();
        if (!in_array($this->container['mobilePlatform'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mobilePlatform', must be one of '%s'",
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

        $allowedValues = $this->getMobilePlatformAllowableValues();
        if (!in_array($this->container['mobilePlatform'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets tripId
     *
     * @return int
     */
    public function getTripId()
    {
        return $this->container['tripId'];
    }

    /**
     * Sets tripId
     *
     * @param int $tripId tripId
     *
     * @return $this
     */
    public function setTripId($tripId)
    {
        $this->container['tripId'] = $tripId;

        return $this;
    }

    /**
     * Gets timesheetId
     *
     * @return int
     */
    public function getTimesheetId()
    {
        return $this->container['timesheetId'];
    }

    /**
     * Sets timesheetId
     *
     * @param int $timesheetId timesheetId
     *
     * @return $this
     */
    public function setTimesheetId($timesheetId)
    {
        $this->container['timesheetId'] = $timesheetId;

        return $this;
    }

    /**
     * Gets vehicleId
     *
     * @return int
     */
    public function getVehicleId()
    {
        return $this->container['vehicleId'];
    }

    /**
     * Sets vehicleId
     *
     * @param int $vehicleId vehicleId
     *
     * @return $this
     */
    public function setVehicleId($vehicleId)
    {
        $this->container['vehicleId'] = $vehicleId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int $userId userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets orgId
     *
     * @return int
     */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
     * Sets orgId
     *
     * @param int $orgId orgId
     *
     * @return $this
     */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;

        return $this;
    }

    /**
     * Gets mobilePlatform
     *
     * @return string
     */
    public function getMobilePlatform()
    {
        return $this->container['mobilePlatform'];
    }

    /**
     * Sets mobilePlatform
     *
     * @param string $mobilePlatform mobilePlatform
     *
     * @return $this
     */
    public function setMobilePlatform($mobilePlatform)
    {
        $allowedValues = $this->getMobilePlatformAllowableValues();
        if (!is_null($mobilePlatform) && !in_array($mobilePlatform, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mobilePlatform', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mobilePlatform'] = $mobilePlatform;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets vehicleName
     *
     * @return string
     */
    public function getVehicleName()
    {
        return $this->container['vehicleName'];
    }

    /**
     * Sets vehicleName
     *
     * @param string $vehicleName vehicleName
     *
     * @return $this
     */
    public function setVehicleName($vehicleName)
    {
        $this->container['vehicleName'] = $vehicleName;

        return $this;
    }

    /**
     * Gets vehicleMake
     *
     * @return string
     */
    public function getVehicleMake()
    {
        return $this->container['vehicleMake'];
    }

    /**
     * Sets vehicleMake
     *
     * @param string $vehicleMake vehicleMake
     *
     * @return $this
     */
    public function setVehicleMake($vehicleMake)
    {
        $this->container['vehicleMake'] = $vehicleMake;

        return $this;
    }

    /**
     * Gets vehicleModel
     *
     * @return string
     */
    public function getVehicleModel()
    {
        return $this->container['vehicleModel'];
    }

    /**
     * Sets vehicleModel
     *
     * @param string $vehicleModel vehicleModel
     *
     * @return $this
     */
    public function setVehicleModel($vehicleModel)
    {
        $this->container['vehicleModel'] = $vehicleModel;

        return $this;
    }

    /**
     * Gets vehicleYear
     *
     * @return string
     */
    public function getVehicleYear()
    {
        return $this->container['vehicleYear'];
    }

    /**
     * Sets vehicleYear
     *
     * @param string $vehicleYear vehicleYear
     *
     * @return $this
     */
    public function setVehicleYear($vehicleYear)
    {
        $this->container['vehicleYear'] = $vehicleYear;

        return $this;
    }

    /**
     * Gets costPerKilometer
     *
     * @return double
     */
    public function getCostPerKilometer()
    {
        return $this->container['costPerKilometer'];
    }

    /**
     * Sets costPerKilometer
     *
     * @param double $costPerKilometer costPerKilometer
     *
     * @return $this
     */
    public function setCostPerKilometer($costPerKilometer)
    {
        $this->container['costPerKilometer'] = $costPerKilometer;

        return $this;
    }

    /**
     * Gets tripTotalCost
     *
     * @return double
     */
    public function getTripTotalCost()
    {
        return $this->container['tripTotalCost'];
    }

    /**
     * Sets tripTotalCost
     *
     * @param double $tripTotalCost tripTotalCost
     *
     * @return $this
     */
    public function setTripTotalCost($tripTotalCost)
    {
        $this->container['tripTotalCost'] = $tripTotalCost;

        return $this;
    }

    /**
     * Gets totalTripDistanceMeters
     *
     * @return double
     */
    public function getTotalTripDistanceMeters()
    {
        return $this->container['totalTripDistanceMeters'];
    }

    /**
     * Sets totalTripDistanceMeters
     *
     * @param double $totalTripDistanceMeters totalTripDistanceMeters
     *
     * @return $this
     */
    public function setTotalTripDistanceMeters($totalTripDistanceMeters)
    {
        $this->container['totalTripDistanceMeters'] = $totalTripDistanceMeters;

        return $this;
    }

    /**
     * Gets startAddress
     *
     * @return string
     */
    public function getStartAddress()
    {
        return $this->container['startAddress'];
    }

    /**
     * Sets startAddress
     *
     * @param string $startAddress startAddress
     *
     * @return $this
     */
    public function setStartAddress($startAddress)
    {
        $this->container['startAddress'] = $startAddress;

        return $this;
    }

    /**
     * Gets endAddress
     *
     * @return string
     */
    public function getEndAddress()
    {
        return $this->container['endAddress'];
    }

    /**
     * Sets endAddress
     *
     * @param string $endAddress endAddress
     *
     * @return $this
     */
    public function setEndAddress($endAddress)
    {
        $this->container['endAddress'] = $endAddress;

        return $this;
    }

    /**
     * Gets pathCoordinates
     *
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\CSTripCoordinate[]
     */
    public function getPathCoordinates()
    {
        return $this->container['pathCoordinates'];
    }

    /**
     * Sets pathCoordinates
     *
     * @param \ChronoSheetsClient\ChronoSheetsClientLibModel\CSTripCoordinate[] $pathCoordinates pathCoordinates
     *
     * @return $this
     */
    public function setPathCoordinates($pathCoordinates)
    {
        $this->container['pathCoordinates'] = $pathCoordinates;

        return $this;
    }

    /**
     * Gets cacheExpiryDate
     *
     * @return \DateTime
     */
    public function getCacheExpiryDate()
    {
        return $this->container['cacheExpiryDate'];
    }

    /**
     * Sets cacheExpiryDate
     *
     * @param \DateTime $cacheExpiryDate cacheExpiryDate
     *
     * @return $this
     */
    public function setCacheExpiryDate($cacheExpiryDate)
    {
        $this->container['cacheExpiryDate'] = $cacheExpiryDate;

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


