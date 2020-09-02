<?php
/**
 * DomainCancelation
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
 * DomainCancelation Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainCancelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DomainCancelation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'owner' => '\Domainrobot\Model\BasicUser',
        'updater' => '\Domainrobot\Model\BasicUser',
        'domain' => 'string',
        'registryWhen' => '\DateTime',
        'gainingRegistrar' => 'string',
        'disconnect' => 'bool',
        'notice' => 'string',
        'logId' => 'int',
        'registryStatus' => '\Domainrobot\Model\RegistryStatusConstants',
        'type' => '\Domainrobot\Model\CancelationTypeConstants',
        'execution' => '\Domainrobot\Model\ExecutionTypeConstants'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'owner' => null,
        'updater' => null,
        'domain' => null,
        'registryWhen' => 'date-time',
        'gainingRegistrar' => null,
        'disconnect' => null,
        'notice' => null,
        'logId' => 'int64',
        'registryStatus' => null,
        'type' => null,
        'execution' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'owner' => 'owner',
        'updater' => 'updater',
        'domain' => 'domain',
        'registryWhen' => 'registryWhen',
        'gainingRegistrar' => 'gainingRegistrar',
        'disconnect' => 'disconnect',
        'notice' => 'notice',
        'logId' => 'logId',
        'registryStatus' => 'registryStatus',
        'type' => 'type',
        'execution' => 'execution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'owner' => 'setOwner',
        'updater' => 'setUpdater',
        'domain' => 'setDomain',
        'registryWhen' => 'setRegistryWhen',
        'gainingRegistrar' => 'setGainingRegistrar',
        'disconnect' => 'setDisconnect',
        'notice' => 'setNotice',
        'logId' => 'setLogId',
        'registryStatus' => 'setRegistryStatus',
        'type' => 'setType',
        'execution' => 'setExecution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'owner' => 'getOwner',
        'updater' => 'getUpdater',
        'domain' => 'getDomain',
        'registryWhen' => 'getRegistryWhen',
        'gainingRegistrar' => 'getGainingRegistrar',
        'disconnect' => 'getDisconnect',
        'notice' => 'getNotice',
        'logId' => 'getLogId',
        'registryStatus' => 'getRegistryStatus',
        'type' => 'getType',
        'execution' => 'getExecution'
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
        $this->container['created'] = isset($data['created']) ? $this->createData($data['created'], 'created')  : null;
        $this->container['updated'] = isset($data['updated']) ? $this->createData($data['updated'], 'updated')  : null;
        $this->container['owner'] = isset($data['owner']) ? $this->createData($data['owner'], 'owner')  : null;
        $this->container['updater'] = isset($data['updater']) ? $this->createData($data['updater'], 'updater')  : null;
        $this->container['domain'] = isset($data['domain']) ? $this->createData($data['domain'], 'domain')  : null;
        $this->container['registryWhen'] = isset($data['registryWhen']) ? $this->createData($data['registryWhen'], 'registryWhen')  : null;
        $this->container['gainingRegistrar'] = isset($data['gainingRegistrar']) ? $this->createData($data['gainingRegistrar'], 'gainingRegistrar')  : null;
        $this->container['disconnect'] = isset($data['disconnect']) ? $this->createData($data['disconnect'], 'disconnect')  : null;
        $this->container['notice'] = isset($data['notice']) ? $this->createData($data['notice'], 'notice')  : null;
        $this->container['logId'] = isset($data['logId']) ? $this->createData($data['logId'], 'logId')  : null;
        $this->container['registryStatus'] = isset($data['registryStatus']) ? $this->createData($data['registryStatus'], 'registryStatus')  : null;
        $this->container['type'] = isset($data['type']) ? $this->createData($data['type'], 'type')  : null;
        $this->container['execution'] = isset($data['execution']) ? $this->createData($data['execution'], 'execution')  : null;
    }

    /**
    *
    * @param mixed[] $data
    * @param string $property
    * @return mixed
    */
    public function createData($data = null, $property){
        if($data === null){
            return '';
        }
        $swaggerType = self::$swaggerTypes[$property];

        preg_match("/([\\\\\w\d]+)(\[\])?/", $swaggerType, $matches);

        if(count($matches) > 0 && count($matches) < 3){
            try {
                $reflection = new \ReflectionClass($swaggerType);
                $reflectionInstance = $reflection->newInstance($data);

                return $reflectionInstance;
            }catch(\Exception $ex){
                return $data;
            }
        }else if(count($matches) >= 3){
            $reflectionInstances = [];
            foreach($data as $d){
                try {
                    $reflection = new \ReflectionClass(str_replace("[]", "", $swaggerType) );
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

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['registryWhen'] === null) {
            $invalidProperties[] = "'registryWhen' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['execution'] === null) {
            $invalidProperties[] = "'execution' can't be null";
        }
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
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The created date.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated The updated date.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Domainrobot\Model\BasicUser
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Domainrobot\Model\BasicUser $owner The owner of the object.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets updater
     *
     * @return \Domainrobot\Model\BasicUser
     */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
     * Sets updater
     *
     * @param \Domainrobot\Model\BasicUser $updater The updater of the object.
     *
     * @return $this
     */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets registryWhen
     *
     * @return \DateTime
     */
    public function getRegistryWhen()
    {
        return $this->container['registryWhen'];
    }

    /**
     * Sets registryWhen
     *
     * @param \DateTime $registryWhen The date of the execution. Only necessary when ExecutionType equals DATE.
     *
     * @return $this
     */
    public function setRegistryWhen($registryWhen)
    {
        $this->container['registryWhen'] = $registryWhen;

        return $this;
    }

    /**
     * Gets gainingRegistrar
     *
     * @return string
     */
    public function getGainingRegistrar()
    {
        return $this->container['gainingRegistrar'];
    }

    /**
     * Sets gainingRegistrar
     *
     * @param string $gainingRegistrar gainingRegistrar
     *
     * @return $this
     */
    public function setGainingRegistrar($gainingRegistrar)
    {
        $this->container['gainingRegistrar'] = $gainingRegistrar;

        return $this;
    }

    /**
     * Gets disconnect
     *
     * @return bool
     */
    public function getDisconnect()
    {
        return $this->container['disconnect'];
    }

    /**
     * Sets disconnect
     *
     * @param bool $disconnect disconnect
     *
     * @return $this
     */
    public function setDisconnect($disconnect)
    {
        $this->container['disconnect'] = $disconnect;

        return $this;
    }

    /**
     * Gets notice
     *
     * @return string
     */
    public function getNotice()
    {
        return $this->container['notice'];
    }

    /**
     * Sets notice
     *
     * @param string $notice Some remarks
     *
     * @return $this
     */
    public function setNotice($notice)
    {
        $this->container['notice'] = $notice;

        return $this;
    }

    /**
     * Gets logId
     *
     * @return int
     */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
     * Sets logId
     *
     * @param int $logId logId
     *
     * @return $this
     */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;

        return $this;
    }

    /**
     * Gets registryStatus
     *
     * @return \Domainrobot\Model\RegistryStatusConstants
     */
    public function getRegistryStatus()
    {
        return $this->container['registryStatus'];
    }

    /**
     * Sets registryStatus
     *
     * @param \Domainrobot\Model\RegistryStatusConstants $registryStatus registryStatus
     *
     * @return $this
     */
    public function setRegistryStatus($registryStatus)
    {
        $this->container['registryStatus'] = $registryStatus;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Domainrobot\Model\CancelationTypeConstants
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Domainrobot\Model\CancelationTypeConstants $type The cancelation type. TRANSIT is only possible for certain TLDs.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets execution
     *
     * @return \Domainrobot\Model\ExecutionTypeConstants
     */
    public function getExecution()
    {
        return $this->container['execution'];
    }

    /**
     * Sets execution
     *
     * @param \Domainrobot\Model\ExecutionTypeConstants $execution The execution type.
     *
     * @return $this
     */
    public function setExecution($execution)
    {
        $this->container['execution'] = $execution;

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
            if (!$retrieveAllValues && empty($value)) {
                unset($container[$key]);
                continue;
            }
            
            if (gettype($value) === "object") {
                if(method_exists($value, 'toArray')) {
                    $value = $value->toArray();
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
                        $v = $v->toArray();
                    }
                }
            }
        };
        return $container;
    }
}

