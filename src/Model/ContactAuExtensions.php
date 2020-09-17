<?php
/**
 * ContactAuExtensions
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
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
 * Swagger Codegen version: 2.4.16-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;

use \ArrayAccess;
use \Domainrobot\ObjectSerializer;

/**
 * ContactAuExtensions Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactAuExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactAuExtensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'eligibilityId' => 'string',
        'eligibilityIdType' => '\Domainrobot\Model\AuEligibilityIdTypeConstants',
        'eligibilityName' => 'string',
        'eligibilityType' => '\Domainrobot\Model\AuEligibilityTypeConstants',
        'policyReason' => 'int',
        'registrantId' => 'string',
        'registrantIdType' => '\Domainrobot\Model\AuRegistrantIdTypeConstants',
        'registrantName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'eligibilityId' => null,
        'eligibilityIdType' => null,
        'eligibilityName' => null,
        'eligibilityType' => null,
        'policyReason' => 'int32',
        'registrantId' => null,
        'registrantIdType' => null,
        'registrantName' => null
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
        'eligibilityId' => 'eligibilityId',
        'eligibilityIdType' => 'eligibilityIdType',
        'eligibilityName' => 'eligibilityName',
        'eligibilityType' => 'eligibilityType',
        'policyReason' => 'policyReason',
        'registrantId' => 'registrantId',
        'registrantIdType' => 'registrantIdType',
        'registrantName' => 'registrantName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eligibilityId' => 'setEligibilityId',
        'eligibilityIdType' => 'setEligibilityIdType',
        'eligibilityName' => 'setEligibilityName',
        'eligibilityType' => 'setEligibilityType',
        'policyReason' => 'setPolicyReason',
        'registrantId' => 'setRegistrantId',
        'registrantIdType' => 'setRegistrantIdType',
        'registrantName' => 'setRegistrantName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eligibilityId' => 'getEligibilityId',
        'eligibilityIdType' => 'getEligibilityIdType',
        'eligibilityName' => 'getEligibilityName',
        'eligibilityType' => 'getEligibilityType',
        'policyReason' => 'getPolicyReason',
        'registrantId' => 'getRegistrantId',
        'registrantIdType' => 'getRegistrantIdType',
        'registrantName' => 'getRegistrantName'
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
        $this->container['eligibilityId'] = isset($data['eligibilityId']) ? $this->createData($data['eligibilityId'], 'eligibilityId')  : null;
        $this->container['eligibilityIdType'] = isset($data['eligibilityIdType']) ? $this->createData($data['eligibilityIdType'], 'eligibilityIdType')  : null;
        $this->container['eligibilityName'] = isset($data['eligibilityName']) ? $this->createData($data['eligibilityName'], 'eligibilityName')  : null;
        $this->container['eligibilityType'] = isset($data['eligibilityType']) ? $this->createData($data['eligibilityType'], 'eligibilityType')  : null;
        $this->container['policyReason'] = isset($data['policyReason']) ? $this->createData($data['policyReason'], 'policyReason')  : null;
        $this->container['registrantId'] = isset($data['registrantId']) ? $this->createData($data['registrantId'], 'registrantId')  : null;
        $this->container['registrantIdType'] = isset($data['registrantIdType']) ? $this->createData($data['registrantIdType'], 'registrantIdType')  : null;
        $this->container['registrantName'] = isset($data['registrantName']) ? $this->createData($data['registrantName'], 'registrantName')  : null;
    }

    /**
     * create data according to types;
     * non object types will just be returend as is:
     * object types will return an instance of themselves or and array of instances
     *
     * @param mixed[] $data
     * @param string $property
     * @return mixed
     */
    public function createData($data = null, $property)
    {
        if ($data === null) {
            return '';
        }
        $swaggerType = self::$swaggerTypes[$property];

        preg_match("/([\\\\\w\d]+)(\[\])?/", $swaggerType, $matches);

        // handle object types
        if (count($matches) > 0 && count($matches) < 3) {
            try {
                $reflection = new \ReflectionClass($swaggerType);
                $reflectionInstance = $reflection->newInstance($data);

                return $reflectionInstance;
            } catch (\Exception $ex) {
                return $data;
            }
        } elseif (count($matches) >= 3) {
            // Object[]
            // arrays of objects have to be handled differently
            $reflectionInstances = [];
            foreach ($data as $d) {
                try {
                    $reflection = new \ReflectionClass(str_replace("[]", "", $swaggerType));
                    $reflectionInstances[] = $reflection->newInstance($d);

                    return $reflectionInstances;
                } catch (\Exception $ex) {
                    return $data;
                }
            }
        }

        return $data;
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
     * Validate all the properties in the 
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets eligibilityId
     *
     * @return string
     */
    public function getEligibilityId()
    {
        return $this->container['eligibilityId'];
    }

    /**
     * Sets eligibilityId
     *
     * @param string $eligibilityId The corresponding ID number for the eligibility name if applicable, if in doubt just use the same details as your Registrant ID.
     *
     * @return $this
     */
    public function setEligibilityId($eligibilityId)
    {
        $this->container['eligibilityId'] = $eligibilityId;

        return $this;
    }

    /**
     * Gets eligibilityIdType
     *
     * @return \Domainrobot\Model\AuEligibilityIdTypeConstants
     */
    public function getEligibilityIdType()
    {
        return $this->container['eligibilityIdType'];
    }

    /**
     * Sets eligibilityIdType
     *
     * @param \Domainrobot\Model\AuEligibilityIdTypeConstants $eligibilityIdType The type of Eligibility ID.
     *
     * @return $this
     */
    public function setEligibilityIdType($eligibilityIdType)
    {
        $this->container['eligibilityIdType'] = $eligibilityIdType;

        return $this;
    }

    /**
     * Gets eligibilityName
     *
     * @return string
     */
    public function getEligibilityName()
    {
        return $this->container['eligibilityName'];
    }

    /**
     * Sets eligibilityName
     *
     * @param string $eligibilityName This field is usually optional and whether it is required is determined by your policy reason for the domain registration, if in doubt just use the same details as your Registrant Name.
     *
     * @return $this
     */
    public function setEligibilityName($eligibilityName)
    {
        $this->container['eligibilityName'] = $eligibilityName;

        return $this;
    }

    /**
     * Gets eligibilityType
     *
     * @return \Domainrobot\Model\AuEligibilityTypeConstants
     */
    public function getEligibilityType()
    {
        return $this->container['eligibilityType'];
    }

    /**
     * Sets eligibilityType
     *
     * @param \Domainrobot\Model\AuEligibilityTypeConstants $eligibilityType The type of entity that the registrant is.
     *
     * @return $this
     */
    public function setEligibilityType($eligibilityType)
    {
        $this->container['eligibilityType'] = $eligibilityType;

        return $this;
    }

    /**
     * Gets policyReason
     *
     * @return int
     */
    public function getPolicyReason()
    {
        return $this->container['policyReason'];
    }

    /**
     * Sets policyReason
     *
     * @param int $policyReason Reason for eligibility.
     *
     * @return $this
     */
    public function setPolicyReason($policyReason)
    {
        $this->container['policyReason'] = $policyReason;

        return $this;
    }

    /**
     * Gets registrantId
     *
     * @return string
     */
    public function getRegistrantId()
    {
        return $this->container['registrantId'];
    }

    /**
     * Sets registrantId
     *
     * @param string $registrantId Australian Business Number or Registered Business Number.
     *
     * @return $this
     */
    public function setRegistrantId($registrantId)
    {
        $this->container['registrantId'] = $registrantId;

        return $this;
    }

    /**
     * Gets registrantIdType
     *
     * @return \Domainrobot\Model\AuRegistrantIdTypeConstants
     */
    public function getRegistrantIdType()
    {
        return $this->container['registrantIdType'];
    }

    /**
     * Sets registrantIdType
     *
     * @param \Domainrobot\Model\AuRegistrantIdTypeConstants $registrantIdType Concerns the Registrant ID which you have selected in the Registrant ID form field.
     *
     * @return $this
     */
    public function setRegistrantIdType($registrantIdType)
    {
        $this->container['registrantIdType'] = $registrantIdType;

        return $this;
    }

    /**
     * Gets registrantName
     *
     * @return string
     */
    public function getRegistrantName()
    {
        return $this->container['registrantName'];
    }

    /**
     * Sets registrantName
     *
     * @param string $registrantName The registrants name.
     *
     * @return $this
     */
    public function setRegistrantName($registrantName)
    {
        $this->container['registrantName'] = $registrantName;

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
     * toArray() => returns only non empty values
     * toArray(true) => returns all values
     */
    public function toArray($retrieveAllValues = false){
        $container = $this->container;
        foreach ($container as $key => &$value) {
            if (!$retrieveAllValues && $value !== FALSE && $value !== '') {
                unset($container[$key]);
                continue;
            }
            
            if (gettype($value) === "object") {
                if(method_exists($value, 'toArray')) {
                    $value = $value->toArray($retrieveAllValues);
                }else{
                    if(get_class($value) === "DateTime"){
                        $value = $value->format("Y-m-d\TH:i:s");
                    }else{
                        $value = (array) $value;
                    }
                }
            }
            if (is_array($value)) {
                foreach ($value as &$v) {
                    if (gettype($v) === "object") {
                        $v = $v->toArray($retrieveAllValues);
                    }
                }
            }
        };
        return $container;
    }
}


