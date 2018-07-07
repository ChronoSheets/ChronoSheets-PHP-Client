<?php
/**
 * CSOrganisation
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * The ChronoSheets API
 *
 * <div style='font-size: 14px!important;font-family: Open Sans,sans-serif!important;color: #3b4151!important;'><p>      ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 5 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.  Before starting, sign up for a ChronoSheets account at <a target='_BLANK' href='http://tsheets.xyz/signup'>http://tsheets.xyz/signup</a>.  </p></div><div id='cs-extra-info'></div>
 *
 * OpenAPI spec version: v1
 * 
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
 * CSOrganisation Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CSOrganisation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Organisation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'addressLine01' => 'string',
        'addressLine02' => 'string',
        'suburb' => 'string',
        'state' => 'string',
        'postcode' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'emailAddress' => 'string',
        'timezone' => 'string',
        'subscriptionCustomerId' => 'string',
        'subscriptionPlanId' => 'string',
        'signupToken' => 'string',
        'numberSeatsAvailable' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'addressLine01' => null,
        'addressLine02' => null,
        'suburb' => null,
        'state' => null,
        'postcode' => null,
        'country' => null,
        'phone' => null,
        'emailAddress' => null,
        'timezone' => null,
        'subscriptionCustomerId' => null,
        'subscriptionPlanId' => null,
        'signupToken' => null,
        'numberSeatsAvailable' => 'int32'
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
        'id' => 'Id',
        'name' => 'Name',
        'addressLine01' => 'AddressLine01',
        'addressLine02' => 'AddressLine02',
        'suburb' => 'Suburb',
        'state' => 'State',
        'postcode' => 'Postcode',
        'country' => 'Country',
        'phone' => 'Phone',
        'emailAddress' => 'EmailAddress',
        'timezone' => 'Timezone',
        'subscriptionCustomerId' => 'SubscriptionCustomerId',
        'subscriptionPlanId' => 'SubscriptionPlanId',
        'signupToken' => 'SignupToken',
        'numberSeatsAvailable' => 'NumberSeatsAvailable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'addressLine01' => 'setAddressLine01',
        'addressLine02' => 'setAddressLine02',
        'suburb' => 'setSuburb',
        'state' => 'setState',
        'postcode' => 'setPostcode',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'emailAddress' => 'setEmailAddress',
        'timezone' => 'setTimezone',
        'subscriptionCustomerId' => 'setSubscriptionCustomerId',
        'subscriptionPlanId' => 'setSubscriptionPlanId',
        'signupToken' => 'setSignupToken',
        'numberSeatsAvailable' => 'setNumberSeatsAvailable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'addressLine01' => 'getAddressLine01',
        'addressLine02' => 'getAddressLine02',
        'suburb' => 'getSuburb',
        'state' => 'getState',
        'postcode' => 'getPostcode',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'emailAddress' => 'getEmailAddress',
        'timezone' => 'getTimezone',
        'subscriptionCustomerId' => 'getSubscriptionCustomerId',
        'subscriptionPlanId' => 'getSubscriptionPlanId',
        'signupToken' => 'getSignupToken',
        'numberSeatsAvailable' => 'getNumberSeatsAvailable'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['addressLine01'] = isset($data['addressLine01']) ? $data['addressLine01'] : null;
        $this->container['addressLine02'] = isset($data['addressLine02']) ? $data['addressLine02'] : null;
        $this->container['suburb'] = isset($data['suburb']) ? $data['suburb'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['emailAddress'] = isset($data['emailAddress']) ? $data['emailAddress'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['subscriptionCustomerId'] = isset($data['subscriptionCustomerId']) ? $data['subscriptionCustomerId'] : null;
        $this->container['subscriptionPlanId'] = isset($data['subscriptionPlanId']) ? $data['subscriptionPlanId'] : null;
        $this->container['signupToken'] = isset($data['signupToken']) ? $data['signupToken'] : null;
        $this->container['numberSeatsAvailable'] = isset($data['numberSeatsAvailable']) ? $data['numberSeatsAvailable'] : null;
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

        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets addressLine01
     *
     * @return string
     */
    public function getAddressLine01()
    {
        return $this->container['addressLine01'];
    }

    /**
     * Sets addressLine01
     *
     * @param string $addressLine01 addressLine01
     *
     * @return $this
     */
    public function setAddressLine01($addressLine01)
    {
        $this->container['addressLine01'] = $addressLine01;

        return $this;
    }

    /**
     * Gets addressLine02
     *
     * @return string
     */
    public function getAddressLine02()
    {
        return $this->container['addressLine02'];
    }

    /**
     * Sets addressLine02
     *
     * @param string $addressLine02 addressLine02
     *
     * @return $this
     */
    public function setAddressLine02($addressLine02)
    {
        $this->container['addressLine02'] = $addressLine02;

        return $this;
    }

    /**
     * Gets suburb
     *
     * @return string
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string $suburb suburb
     *
     * @return $this
     */
    public function setSuburb($suburb)
    {
        $this->container['suburb'] = $suburb;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string $emailAddress emailAddress
     *
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->container['emailAddress'] = $emailAddress;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets subscriptionCustomerId
     *
     * @return string
     */
    public function getSubscriptionCustomerId()
    {
        return $this->container['subscriptionCustomerId'];
    }

    /**
     * Sets subscriptionCustomerId
     *
     * @param string $subscriptionCustomerId subscriptionCustomerId
     *
     * @return $this
     */
    public function setSubscriptionCustomerId($subscriptionCustomerId)
    {
        $this->container['subscriptionCustomerId'] = $subscriptionCustomerId;

        return $this;
    }

    /**
     * Gets subscriptionPlanId
     *
     * @return string
     */
    public function getSubscriptionPlanId()
    {
        return $this->container['subscriptionPlanId'];
    }

    /**
     * Sets subscriptionPlanId
     *
     * @param string $subscriptionPlanId subscriptionPlanId
     *
     * @return $this
     */
    public function setSubscriptionPlanId($subscriptionPlanId)
    {
        $this->container['subscriptionPlanId'] = $subscriptionPlanId;

        return $this;
    }

    /**
     * Gets signupToken
     *
     * @return string
     */
    public function getSignupToken()
    {
        return $this->container['signupToken'];
    }

    /**
     * Sets signupToken
     *
     * @param string $signupToken signupToken
     *
     * @return $this
     */
    public function setSignupToken($signupToken)
    {
        $this->container['signupToken'] = $signupToken;

        return $this;
    }

    /**
     * Gets numberSeatsAvailable
     *
     * @return int
     */
    public function getNumberSeatsAvailable()
    {
        return $this->container['numberSeatsAvailable'];
    }

    /**
     * Sets numberSeatsAvailable
     *
     * @param int $numberSeatsAvailable numberSeatsAvailable
     *
     * @return $this
     */
    public function setNumberSeatsAvailable($numberSeatsAvailable)
    {
        $this->container['numberSeatsAvailable'] = $numberSeatsAvailable;

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


