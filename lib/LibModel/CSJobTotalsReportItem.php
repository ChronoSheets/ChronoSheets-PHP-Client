<?php
/**
 * CSJobTotalsReportItem
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
 * CSJobTotalsReportItem Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CSJobTotalsReportItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JobTotalsReportItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organisationId' => 'int',
        'jobId' => 'int',
        'jobCode' => 'string',
        'clientId' => 'int',
        'clientName' => 'string',
        'projectId' => 'int',
        'projectName' => 'string',
        'spanSeconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organisationId' => 'int32',
        'jobId' => 'int32',
        'jobCode' => null,
        'clientId' => 'int32',
        'clientName' => null,
        'projectId' => 'int32',
        'projectName' => null,
        'spanSeconds' => 'int32'
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
        'organisationId' => 'OrganisationId',
        'jobId' => 'JobId',
        'jobCode' => 'JobCode',
        'clientId' => 'ClientId',
        'clientName' => 'ClientName',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'spanSeconds' => 'SpanSeconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organisationId' => 'setOrganisationId',
        'jobId' => 'setJobId',
        'jobCode' => 'setJobCode',
        'clientId' => 'setClientId',
        'clientName' => 'setClientName',
        'projectId' => 'setProjectId',
        'projectName' => 'setProjectName',
        'spanSeconds' => 'setSpanSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organisationId' => 'getOrganisationId',
        'jobId' => 'getJobId',
        'jobCode' => 'getJobCode',
        'clientId' => 'getClientId',
        'clientName' => 'getClientName',
        'projectId' => 'getProjectId',
        'projectName' => 'getProjectName',
        'spanSeconds' => 'getSpanSeconds'
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
        $this->container['organisationId'] = isset($data['organisationId']) ? $data['organisationId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobCode'] = isset($data['jobCode']) ? $data['jobCode'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientName'] = isset($data['clientName']) ? $data['clientName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['spanSeconds'] = isset($data['spanSeconds']) ? $data['spanSeconds'] : null;
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
     * Gets organisationId
     *
     * @return int
     */
    public function getOrganisationId()
    {
        return $this->container['organisationId'];
    }

    /**
     * Sets organisationId
     *
     * @param int $organisationId organisationId
     *
     * @return $this
     */
    public function setOrganisationId($organisationId)
    {
        $this->container['organisationId'] = $organisationId;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param int $jobId jobId
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets jobCode
     *
     * @return string
     */
    public function getJobCode()
    {
        return $this->container['jobCode'];
    }

    /**
     * Sets jobCode
     *
     * @param string $jobCode jobCode
     *
     * @return $this
     */
    public function setJobCode($jobCode)
    {
        $this->container['jobCode'] = $jobCode;

        return $this;
    }

    /**
     * Gets clientId
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param int $clientId clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }

    /**
     * Gets clientName
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->container['clientName'];
    }

    /**
     * Sets clientName
     *
     * @param string $clientName clientName
     *
     * @return $this
     */
    public function setClientName($clientName)
    {
        $this->container['clientName'] = $clientName;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param int $projectId projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets projectName
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
     * Sets projectName
     *
     * @param string $projectName projectName
     *
     * @return $this
     */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;

        return $this;
    }

    /**
     * Gets spanSeconds
     *
     * @return int
     */
    public function getSpanSeconds()
    {
        return $this->container['spanSeconds'];
    }

    /**
     * Sets spanSeconds
     *
     * @param int $spanSeconds spanSeconds
     *
     * @return $this
     */
    public function setSpanSeconds($spanSeconds)
    {
        $this->container['spanSeconds'] = $spanSeconds;

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


