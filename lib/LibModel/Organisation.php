<?php
/**
 * Organisation
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
 * Organisation Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Organisation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Organisation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
        'signupToken' => 'string',
        'isActive' => 'bool',
        'stripeCouponCode' => 'string',
        'subscriptionSource' => 'string',
        'signUpSource' => 'string',
        'mobileSignUpCode' => 'string',
        'subscriptionCycleStart' => '\DateTime',
        'subscriptionCycleEnd' => '\DateTime',
        'pricingPlans' => '\ChronoSheetsClient\ChronoSheetsClientLibModel\OrganisationPricingPlan[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
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
        'signupToken' => null,
        'isActive' => null,
        'stripeCouponCode' => null,
        'subscriptionSource' => null,
        'signUpSource' => null,
        'mobileSignUpCode' => null,
        'subscriptionCycleStart' => 'date-time',
        'subscriptionCycleEnd' => 'date-time',
        'pricingPlans' => null
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
        'signupToken' => 'SignupToken',
        'isActive' => 'IsActive',
        'stripeCouponCode' => 'StripeCouponCode',
        'subscriptionSource' => 'SubscriptionSource',
        'signUpSource' => 'SignUpSource',
        'mobileSignUpCode' => 'MobileSignUpCode',
        'subscriptionCycleStart' => 'SubscriptionCycleStart',
        'subscriptionCycleEnd' => 'SubscriptionCycleEnd',
        'pricingPlans' => 'PricingPlans'
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
        'signupToken' => 'setSignupToken',
        'isActive' => 'setIsActive',
        'stripeCouponCode' => 'setStripeCouponCode',
        'subscriptionSource' => 'setSubscriptionSource',
        'signUpSource' => 'setSignUpSource',
        'mobileSignUpCode' => 'setMobileSignUpCode',
        'subscriptionCycleStart' => 'setSubscriptionCycleStart',
        'subscriptionCycleEnd' => 'setSubscriptionCycleEnd',
        'pricingPlans' => 'setPricingPlans'
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
        'signupToken' => 'getSignupToken',
        'isActive' => 'getIsActive',
        'stripeCouponCode' => 'getStripeCouponCode',
        'subscriptionSource' => 'getSubscriptionSource',
        'signUpSource' => 'getSignUpSource',
        'mobileSignUpCode' => 'getMobileSignUpCode',
        'subscriptionCycleStart' => 'getSubscriptionCycleStart',
        'subscriptionCycleEnd' => 'getSubscriptionCycleEnd',
        'pricingPlans' => 'getPricingPlans'
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

    const SUBSCRIPTION_SOURCE_NONE = 'None';
    const SUBSCRIPTION_SOURCE_STRIPE = 'Stripe';
    const SUBSCRIPTION_SOURCE_APPLE_IN_APP = 'AppleInApp';
    const SUBSCRIPTION_SOURCE_GOOGLE_IN_APP = 'GoogleInApp';
    const SIGN_UP_SOURCE_DESKTOP = 'Desktop';
    const SIGN_UP_SOURCE_MOBILEI_OS = 'MobileiOS';
    const SIGN_UP_SOURCE_MOBILE_ANDROID = 'MobileAndroid';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubscriptionSourceAllowableValues()
    {
        return [
            self::SUBSCRIPTION_SOURCE_NONE,
            self::SUBSCRIPTION_SOURCE_STRIPE,
            self::SUBSCRIPTION_SOURCE_APPLE_IN_APP,
            self::SUBSCRIPTION_SOURCE_GOOGLE_IN_APP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignUpSourceAllowableValues()
    {
        return [
            self::SIGN_UP_SOURCE_DESKTOP,
            self::SIGN_UP_SOURCE_MOBILEI_OS,
            self::SIGN_UP_SOURCE_MOBILE_ANDROID,
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
        $this->container['signupToken'] = isset($data['signupToken']) ? $data['signupToken'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['stripeCouponCode'] = isset($data['stripeCouponCode']) ? $data['stripeCouponCode'] : null;
        $this->container['subscriptionSource'] = isset($data['subscriptionSource']) ? $data['subscriptionSource'] : null;
        $this->container['signUpSource'] = isset($data['signUpSource']) ? $data['signUpSource'] : null;
        $this->container['mobileSignUpCode'] = isset($data['mobileSignUpCode']) ? $data['mobileSignUpCode'] : null;
        $this->container['subscriptionCycleStart'] = isset($data['subscriptionCycleStart']) ? $data['subscriptionCycleStart'] : null;
        $this->container['subscriptionCycleEnd'] = isset($data['subscriptionCycleEnd']) ? $data['subscriptionCycleEnd'] : null;
        $this->container['pricingPlans'] = isset($data['pricingPlans']) ? $data['pricingPlans'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSubscriptionSourceAllowableValues();
        if (!is_null($this->container['subscriptionSource']) && !in_array($this->container['subscriptionSource'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subscriptionSource', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSignUpSourceAllowableValues();
        if (!is_null($this->container['signUpSource']) && !in_array($this->container['signUpSource'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signUpSource', must be one of '%s'",
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
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
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
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
     * @return string|null
     */
    public function getAddressLine01()
    {
        return $this->container['addressLine01'];
    }

    /**
     * Sets addressLine01
     *
     * @param string|null $addressLine01 addressLine01
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
     * @return string|null
     */
    public function getAddressLine02()
    {
        return $this->container['addressLine02'];
    }

    /**
     * Sets addressLine02
     *
     * @param string|null $addressLine02 addressLine02
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
     * @return string|null
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string|null $suburb suburb
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
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
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
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode postcode
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
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
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
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
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
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string|null $emailAddress emailAddress
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
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone timezone
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
     * @return string|null
     */
    public function getSubscriptionCustomerId()
    {
        return $this->container['subscriptionCustomerId'];
    }

    /**
     * Sets subscriptionCustomerId
     *
     * @param string|null $subscriptionCustomerId subscriptionCustomerId
     *
     * @return $this
     */
    public function setSubscriptionCustomerId($subscriptionCustomerId)
    {
        $this->container['subscriptionCustomerId'] = $subscriptionCustomerId;

        return $this;
    }

    /**
     * Gets signupToken
     *
     * @return string|null
     */
    public function getSignupToken()
    {
        return $this->container['signupToken'];
    }

    /**
     * Sets signupToken
     *
     * @param string|null $signupToken signupToken
     *
     * @return $this
     */
    public function setSignupToken($signupToken)
    {
        $this->container['signupToken'] = $signupToken;

        return $this;
    }

    /**
     * Gets isActive
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool|null $isActive isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets stripeCouponCode
     *
     * @return string|null
     */
    public function getStripeCouponCode()
    {
        return $this->container['stripeCouponCode'];
    }

    /**
     * Sets stripeCouponCode
     *
     * @param string|null $stripeCouponCode stripeCouponCode
     *
     * @return $this
     */
    public function setStripeCouponCode($stripeCouponCode)
    {
        $this->container['stripeCouponCode'] = $stripeCouponCode;

        return $this;
    }

    /**
     * Gets subscriptionSource
     *
     * @return string|null
     */
    public function getSubscriptionSource()
    {
        return $this->container['subscriptionSource'];
    }

    /**
     * Sets subscriptionSource
     *
     * @param string|null $subscriptionSource subscriptionSource
     *
     * @return $this
     */
    public function setSubscriptionSource($subscriptionSource)
    {
        $allowedValues = $this->getSubscriptionSourceAllowableValues();
        if (!is_null($subscriptionSource) && !in_array($subscriptionSource, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subscriptionSource', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subscriptionSource'] = $subscriptionSource;

        return $this;
    }

    /**
     * Gets signUpSource
     *
     * @return string|null
     */
    public function getSignUpSource()
    {
        return $this->container['signUpSource'];
    }

    /**
     * Sets signUpSource
     *
     * @param string|null $signUpSource signUpSource
     *
     * @return $this
     */
    public function setSignUpSource($signUpSource)
    {
        $allowedValues = $this->getSignUpSourceAllowableValues();
        if (!is_null($signUpSource) && !in_array($signUpSource, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signUpSource', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signUpSource'] = $signUpSource;

        return $this;
    }

    /**
     * Gets mobileSignUpCode
     *
     * @return string|null
     */
    public function getMobileSignUpCode()
    {
        return $this->container['mobileSignUpCode'];
    }

    /**
     * Sets mobileSignUpCode
     *
     * @param string|null $mobileSignUpCode mobileSignUpCode
     *
     * @return $this
     */
    public function setMobileSignUpCode($mobileSignUpCode)
    {
        $this->container['mobileSignUpCode'] = $mobileSignUpCode;

        return $this;
    }

    /**
     * Gets subscriptionCycleStart
     *
     * @return \DateTime|null
     */
    public function getSubscriptionCycleStart()
    {
        return $this->container['subscriptionCycleStart'];
    }

    /**
     * Sets subscriptionCycleStart
     *
     * @param \DateTime|null $subscriptionCycleStart subscriptionCycleStart
     *
     * @return $this
     */
    public function setSubscriptionCycleStart($subscriptionCycleStart)
    {
        $this->container['subscriptionCycleStart'] = $subscriptionCycleStart;

        return $this;
    }

    /**
     * Gets subscriptionCycleEnd
     *
     * @return \DateTime|null
     */
    public function getSubscriptionCycleEnd()
    {
        return $this->container['subscriptionCycleEnd'];
    }

    /**
     * Sets subscriptionCycleEnd
     *
     * @param \DateTime|null $subscriptionCycleEnd subscriptionCycleEnd
     *
     * @return $this
     */
    public function setSubscriptionCycleEnd($subscriptionCycleEnd)
    {
        $this->container['subscriptionCycleEnd'] = $subscriptionCycleEnd;

        return $this;
    }

    /**
     * Gets pricingPlans
     *
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\OrganisationPricingPlan[]|null
     */
    public function getPricingPlans()
    {
        return $this->container['pricingPlans'];
    }

    /**
     * Sets pricingPlans
     *
     * @param \ChronoSheetsClient\ChronoSheetsClientLibModel\OrganisationPricingPlan[]|null $pricingPlans pricingPlans
     *
     * @return $this
     */
    public function setPricingPlans($pricingPlans)
    {
        $this->container['pricingPlans'] = $pricingPlans;

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

