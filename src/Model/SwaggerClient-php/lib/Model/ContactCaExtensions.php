<?php
/**
 * ContactCaExtensions
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ContactCaExtensions Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactCaExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactCaExtensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cpr' => '\Swagger\Client\Model\CiraCprConstants',
        'agreement_version' => 'double',
        'originating_ip' => 'string',
        'official_representative' => 'string',
        'trustee_percentage' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cpr' => null,
        'agreement_version' => 'double',
        'originating_ip' => null,
        'official_representative' => null,
        'trustee_percentage' => 'double'
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
        'cpr' => 'cpr',
        'agreement_version' => 'agreementVersion',
        'originating_ip' => 'originatingIp',
        'official_representative' => 'officialRepresentative',
        'trustee_percentage' => 'trusteePercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpr' => 'setCpr',
        'agreement_version' => 'setAgreementVersion',
        'originating_ip' => 'setOriginatingIp',
        'official_representative' => 'setOfficialRepresentative',
        'trustee_percentage' => 'setTrusteePercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpr' => 'getCpr',
        'agreement_version' => 'getAgreementVersion',
        'originating_ip' => 'getOriginatingIp',
        'official_representative' => 'getOfficialRepresentative',
        'trustee_percentage' => 'getTrusteePercentage'
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
        $this->container['cpr'] = isset($data['cpr']) ? $data['cpr'] : null;
        $this->container['agreement_version'] = isset($data['agreement_version']) ? $data['agreement_version'] : null;
        $this->container['originating_ip'] = isset($data['originating_ip']) ? $data['originating_ip'] : null;
        $this->container['official_representative'] = isset($data['official_representative']) ? $data['official_representative'] : null;
        $this->container['trustee_percentage'] = isset($data['trustee_percentage']) ? $data['trustee_percentage'] : null;
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
     * Gets cpr
     *
     * @return \Swagger\Client\Model\CiraCprConstants
     */
    public function getCpr()
    {
        return $this->container['cpr'];
    }

    /**
     * Sets cpr
     *
     * @param \Swagger\Client\Model\CiraCprConstants $cpr The cira cpr.
     *
     * @return $this
     */
    public function setCpr($cpr)
    {
        $this->container['cpr'] = $cpr;

        return $this;
    }

    /**
     * Gets agreement_version
     *
     * @return double
     */
    public function getAgreementVersion()
    {
        return $this->container['agreement_version'];
    }

    /**
     * Sets agreement_version
     *
     * @param double $agreement_version The agreement version.
     *
     * @return $this
     */
    public function setAgreementVersion($agreement_version)
    {
        $this->container['agreement_version'] = $agreement_version;

        return $this;
    }

    /**
     * Gets originating_ip
     *
     * @return string
     */
    public function getOriginatingIp()
    {
        return $this->container['originating_ip'];
    }

    /**
     * Sets originating_ip
     *
     * @param string $originating_ip The originating ip.
     *
     * @return $this
     */
    public function setOriginatingIp($originating_ip)
    {
        $this->container['originating_ip'] = $originating_ip;

        return $this;
    }

    /**
     * Gets official_representative
     *
     * @return string
     */
    public function getOfficialRepresentative()
    {
        return $this->container['official_representative'];
    }

    /**
     * Sets official_representative
     *
     * @param string $official_representative The official representative.
     *
     * @return $this
     */
    public function setOfficialRepresentative($official_representative)
    {
        $this->container['official_representative'] = $official_representative;

        return $this;
    }

    /**
     * Gets trustee_percentage
     *
     * @return double
     */
    public function getTrusteePercentage()
    {
        return $this->container['trustee_percentage'];
    }

    /**
     * Sets trustee_percentage
     *
     * @param double $trustee_percentage The trustee percentage.
     *
     * @return $this
     */
    public function setTrusteePercentage($trustee_percentage)
    {
        $this->container['trustee_percentage'] = $trustee_percentage;

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
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns all values
     * toArray(true) => returns only non empty values
     * toArray(true, ["key"]) => returns all non empty values and "key" even if empty
     * toArray(true, ["key:no_empty_value"]) => returns all non empty values and "key" if not empty
     */
    public function toArray($removeEmptyValues = false, $retrieveKeys = []){
        $container = $this->container;
        foreach($container as $key => &$value){
            if(!in_array($key, $retrieveKeys) && $removeEmptyValues && empty($value)){
                unset($container[$key]);
                continue;
            }
            if(in_array($key.":no_empty_value", $retrieveKeys)){
                unset($container[$key]);
                continue;
            }
            if(gettype($value) === "object"){
                $value = $value->toArray();
            }
        };
        return $container;
    }
}

