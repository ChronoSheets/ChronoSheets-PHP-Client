<?php
/**
 * UserProfile
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
 * UserProfile Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'organisationId' => 'int',
        'userName' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'emailAddress' => 'string',
        'isSubscribedToNewsletter' => 'bool',
        'roles' => 'int',
        'alertSettings' => 'int',
        'organisationName' => 'string',
        'organisationSuburb' => 'string',
        'organisationCountry' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'organisationId' => 'int32',
        'userName' => null,
        'firstName' => null,
        'lastName' => null,
        'emailAddress' => null,
        'isSubscribedToNewsletter' => null,
        'roles' => 'int64',
        'alertSettings' => 'int64',
        'organisationName' => null,
        'organisationSuburb' => null,
        'organisationCountry' => null
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
        'organisationId' => 'OrganisationId',
        'userName' => 'UserName',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'emailAddress' => 'EmailAddress',
        'isSubscribedToNewsletter' => 'IsSubscribedToNewsletter',
        'roles' => 'Roles',
        'alertSettings' => 'AlertSettings',
        'organisationName' => 'OrganisationName',
        'organisationSuburb' => 'OrganisationSuburb',
        'organisationCountry' => 'OrganisationCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'organisationId' => 'setOrganisationId',
        'userName' => 'setUserName',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'emailAddress' => 'setEmailAddress',
        'isSubscribedToNewsletter' => 'setIsSubscribedToNewsletter',
        'roles' => 'setRoles',
        'alertSettings' => 'setAlertSettings',
        'organisationName' => 'setOrganisationName',
        'organisationSuburb' => 'setOrganisationSuburb',
        'organisationCountry' => 'setOrganisationCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'organisationId' => 'getOrganisationId',
        'userName' => 'getUserName',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'emailAddress' => 'getEmailAddress',
        'isSubscribedToNewsletter' => 'getIsSubscribedToNewsletter',
        'roles' => 'getRoles',
        'alertSettings' => 'getAlertSettings',
        'organisationName' => 'getOrganisationName',
        'organisationSuburb' => 'getOrganisationSuburb',
        'organisationCountry' => 'getOrganisationCountry'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['organisationId'] = isset($data['organisationId']) ? $data['organisationId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['emailAddress'] = isset($data['emailAddress']) ? $data['emailAddress'] : null;
        $this->container['isSubscribedToNewsletter'] = isset($data['isSubscribedToNewsletter']) ? $data['isSubscribedToNewsletter'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['alertSettings'] = isset($data['alertSettings']) ? $data['alertSettings'] : null;
        $this->container['organisationName'] = isset($data['organisationName']) ? $data['organisationName'] : null;
        $this->container['organisationSuburb'] = isset($data['organisationSuburb']) ? $data['organisationSuburb'] : null;
        $this->container['organisationCountry'] = isset($data['organisationCountry']) ? $data['organisationCountry'] : null;
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
     * Gets organisationId
     *
     * @return int|null
     */
    public function getOrganisationId()
    {
        return $this->container['organisationId'];
    }

    /**
     * Sets organisationId
     *
     * @param int|null $organisationId organisationId
     *
     * @return $this
     */
    public function setOrganisationId($organisationId)
    {
        $this->container['organisationId'] = $organisationId;

        return $this;
    }

    /**
     * Gets userName
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     *
     * @param string|null $userName userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

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
     * Gets isSubscribedToNewsletter
     *
     * @return bool|null
     */
    public function getIsSubscribedToNewsletter()
    {
        return $this->container['isSubscribedToNewsletter'];
    }

    /**
     * Sets isSubscribedToNewsletter
     *
     * @param bool|null $isSubscribedToNewsletter isSubscribedToNewsletter
     *
     * @return $this
     */
    public function setIsSubscribedToNewsletter($isSubscribedToNewsletter)
    {
        $this->container['isSubscribedToNewsletter'] = $isSubscribedToNewsletter;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return int|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param int|null $roles roles
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets alertSettings
     *
     * @return int|null
     */
    public function getAlertSettings()
    {
        return $this->container['alertSettings'];
    }

    /**
     * Sets alertSettings
     *
     * @param int|null $alertSettings alertSettings
     *
     * @return $this
     */
    public function setAlertSettings($alertSettings)
    {
        $this->container['alertSettings'] = $alertSettings;

        return $this;
    }

    /**
     * Gets organisationName
     *
     * @return string|null
     */
    public function getOrganisationName()
    {
        return $this->container['organisationName'];
    }

    /**
     * Sets organisationName
     *
     * @param string|null $organisationName organisationName
     *
     * @return $this
     */
    public function setOrganisationName($organisationName)
    {
        $this->container['organisationName'] = $organisationName;

        return $this;
    }

    /**
     * Gets organisationSuburb
     *
     * @return string|null
     */
    public function getOrganisationSuburb()
    {
        return $this->container['organisationSuburb'];
    }

    /**
     * Sets organisationSuburb
     *
     * @param string|null $organisationSuburb organisationSuburb
     *
     * @return $this
     */
    public function setOrganisationSuburb($organisationSuburb)
    {
        $this->container['organisationSuburb'] = $organisationSuburb;

        return $this;
    }

    /**
     * Gets organisationCountry
     *
     * @return string|null
     */
    public function getOrganisationCountry()
    {
        return $this->container['organisationCountry'];
    }

    /**
     * Sets organisationCountry
     *
     * @param string|null $organisationCountry organisationCountry
     *
     * @return $this
     */
    public function setOrganisationCountry($organisationCountry)
    {
        $this->container['organisationCountry'] = $organisationCountry;

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

