<?php
/**
 * MailProxy
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
 * MailProxy Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MailProxy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MailProxy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'domain' => 'string',
        'idn' => 'string',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'owner' => '\Domainrobot\Model\BasicUser',
        'updater' => '\Domainrobot\Model\BasicUser',
        'target' => 'string',
        'admin' => 'string',
        'protection' => '\Domainrobot\Model\ProtectionConstants',
        'greylisting' => 'bool',
        'virus' => 'string',
        'bannedFiles' => 'string',
        'header' => 'string',
        'spam' => '\Domainrobot\Model\SpamPolicy',
        'whitelist' => '\Domainrobot\Model\MailList',
        'blacklist' => '\Domainrobot\Model\MailList',
        'excludelist' => '\Domainrobot\Model\MailList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'domain' => null,
        'idn' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'owner' => null,
        'updater' => null,
        'target' => null,
        'admin' => null,
        'protection' => null,
        'greylisting' => null,
        'virus' => null,
        'bannedFiles' => null,
        'header' => null,
        'spam' => null,
        'whitelist' => null,
        'blacklist' => null,
        'excludelist' => null
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
        'domain' => 'domain',
        'idn' => 'idn',
        'created' => 'created',
        'updated' => 'updated',
        'owner' => 'owner',
        'updater' => 'updater',
        'target' => 'target',
        'admin' => 'admin',
        'protection' => 'protection',
        'greylisting' => 'greylisting',
        'virus' => 'virus',
        'bannedFiles' => 'bannedFiles',
        'header' => 'header',
        'spam' => 'spam',
        'whitelist' => 'whitelist',
        'blacklist' => 'blacklist',
        'excludelist' => 'excludelist'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'idn' => 'setIdn',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'owner' => 'setOwner',
        'updater' => 'setUpdater',
        'target' => 'setTarget',
        'admin' => 'setAdmin',
        'protection' => 'setProtection',
        'greylisting' => 'setGreylisting',
        'virus' => 'setVirus',
        'bannedFiles' => 'setBannedFiles',
        'header' => 'setHeader',
        'spam' => 'setSpam',
        'whitelist' => 'setWhitelist',
        'blacklist' => 'setBlacklist',
        'excludelist' => 'setExcludelist'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'idn' => 'getIdn',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'owner' => 'getOwner',
        'updater' => 'getUpdater',
        'target' => 'getTarget',
        'admin' => 'getAdmin',
        'protection' => 'getProtection',
        'greylisting' => 'getGreylisting',
        'virus' => 'getVirus',
        'bannedFiles' => 'getBannedFiles',
        'header' => 'getHeader',
        'spam' => 'getSpam',
        'whitelist' => 'getWhitelist',
        'blacklist' => 'getBlacklist',
        'excludelist' => 'getExcludelist'
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

    const VIRUS_DISABLED = 'DISABLED';
    const VIRUS_QUARANTINE = 'QUARANTINE';
    const VIRUS_DISCARD = 'DISCARD';
    const VIRUS_ACCEPT = 'ACCEPT';
    const BANNED_FILES_DISABLED = 'DISABLED';
    const BANNED_FILES_QUARANTINE = 'QUARANTINE';
    const BANNED_FILES_DISCARD = 'DISCARD';
    const BANNED_FILES_ACCEPT = 'ACCEPT';
    const HEADER_DISABLED = 'DISABLED';
    const HEADER_QUARANTINE = 'QUARANTINE';
    const HEADER_DISCARD = 'DISCARD';
    const HEADER_ACCEPT = 'ACCEPT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVirusAllowableValues()
    {
        return [
            self::VIRUS_DISABLED,
            self::VIRUS_QUARANTINE,
            self::VIRUS_DISCARD,
            self::VIRUS_ACCEPT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBannedFilesAllowableValues()
    {
        return [
            self::BANNED_FILES_DISABLED,
            self::BANNED_FILES_QUARANTINE,
            self::BANNED_FILES_DISCARD,
            self::BANNED_FILES_ACCEPT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHeaderAllowableValues()
    {
        return [
            self::HEADER_DISABLED,
            self::HEADER_QUARANTINE,
            self::HEADER_DISCARD,
            self::HEADER_ACCEPT,
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
        $this->container['domain'] = isset($data['domain']) ? $this->createData($data['domain'], 'domain')  : null;
        $this->container['idn'] = isset($data['idn']) ? $this->createData($data['idn'], 'idn')  : null;
        $this->container['created'] = isset($data['created']) ? $this->createData($data['created'], 'created')  : null;
        $this->container['updated'] = isset($data['updated']) ? $this->createData($data['updated'], 'updated')  : null;
        $this->container['owner'] = isset($data['owner']) ? $this->createData($data['owner'], 'owner')  : null;
        $this->container['updater'] = isset($data['updater']) ? $this->createData($data['updater'], 'updater')  : null;
        $this->container['target'] = isset($data['target']) ? $this->createData($data['target'], 'target')  : null;
        $this->container['admin'] = isset($data['admin']) ? $this->createData($data['admin'], 'admin')  : null;
        $this->container['protection'] = isset($data['protection']) ? $this->createData($data['protection'], 'protection')  : null;
        $this->container['greylisting'] = isset($data['greylisting']) ? $this->createData($data['greylisting'], 'greylisting')  : null;
        $this->container['virus'] = isset($data['virus']) ? $this->createData($data['virus'], 'virus')  : null;
        $this->container['bannedFiles'] = isset($data['bannedFiles']) ? $this->createData($data['bannedFiles'], 'bannedFiles')  : null;
        $this->container['header'] = isset($data['header']) ? $this->createData($data['header'], 'header')  : null;
        $this->container['spam'] = isset($data['spam']) ? $this->createData($data['spam'], 'spam')  : null;
        $this->container['whitelist'] = isset($data['whitelist']) ? $this->createData($data['whitelist'], 'whitelist')  : null;
        $this->container['blacklist'] = isset($data['blacklist']) ? $this->createData($data['blacklist'], 'blacklist')  : null;
        $this->container['excludelist'] = isset($data['excludelist']) ? $this->createData($data['excludelist'], 'excludelist')  : null;
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

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        $allowedValues = $this->getVirusAllowableValues();
        if (!is_null($this->container['virus']) && !in_array($this->container['virus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'virus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBannedFilesAllowableValues();
        if (!is_null($this->container['bannedFiles']) && !in_array($this->container['bannedFiles'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bannedFiles', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHeaderAllowableValues();
        if (!is_null($this->container['header']) && !in_array($this->container['header'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'header', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param string $domain The domain of the mail exchange to backup
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets idn
     *
     * @return string
     */
    public function getIdn()
    {
        return $this->container['idn'];
    }

    /**
     * Sets idn
     *
     * @param string $idn The idn version of the domain.
     *
     * @return $this
     */
    public function setIdn($idn)
    {
        $this->container['idn'] = $idn;

        return $this;
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
     * @param \DateTime $created The date of the creation
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
     * @param \DateTime $updated The date of the last updated
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
     * @param \Domainrobot\Model\BasicUser $owner The owner of the entry
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
     * @param \Domainrobot\Model\BasicUser $updater The last updater of the entry
     *
     * @return $this
     */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string $target The hostname of the target mailserver
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return string
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param string $admin email address of the administrator
     *
     * @return $this
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets protection
     *
     * @return \Domainrobot\Model\ProtectionConstants
     */
    public function getProtection()
    {
        return $this->container['protection'];
    }

    /**
     * Sets protection
     *
     * @param \Domainrobot\Model\ProtectionConstants $protection The protection level
     *
     * @return $this
     */
    public function setProtection($protection)
    {
        $this->container['protection'] = $protection;

        return $this;
    }

    /**
     * Gets greylisting
     *
     * @return bool
     */
    public function getGreylisting()
    {
        return $this->container['greylisting'];
    }

    /**
     * Sets greylisting
     *
     * @param bool $greylisting The grey listing policy
     *
     * @return $this
     */
    public function setGreylisting($greylisting)
    {
        $this->container['greylisting'] = $greylisting;

        return $this;
    }

    /**
     * Gets virus
     *
     * @return string
     */
    public function getVirus()
    {
        return $this->container['virus'];
    }

    /**
     * Sets virus
     *
     * @param string $virus The virus options to use
     *
     * @return $this
     */
    public function setVirus($virus)
    {
        $allowedValues = $this->getVirusAllowableValues();
        if (!is_null($virus) && !in_array($virus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'virus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['virus'] = $virus;

        return $this;
    }

    /**
     * Gets bannedFiles
     *
     * @return string
     */
    public function getBannedFiles()
    {
        return $this->container['bannedFiles'];
    }

    /**
     * Sets bannedFiles
     *
     * @param string $bannedFiles The banned files options to use
     *
     * @return $this
     */
    public function setBannedFiles($bannedFiles)
    {
        $allowedValues = $this->getBannedFilesAllowableValues();
        if (!is_null($bannedFiles) && !in_array($bannedFiles, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bannedFiles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bannedFiles'] = $bannedFiles;

        return $this;
    }

    /**
     * Gets header
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param string $header The mail header options to use
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $allowedValues = $this->getHeaderAllowableValues();
        if (!is_null($header) && !in_array($header, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'header', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets spam
     *
     * @return \Domainrobot\Model\SpamPolicy
     */
    public function getSpam()
    {
        return $this->container['spam'];
    }

    /**
     * Sets spam
     *
     * @param \Domainrobot\Model\SpamPolicy $spam The spam policy options
     *
     * @return $this
     */
    public function setSpam($spam)
    {
        $this->container['spam'] = $spam;

        return $this;
    }

    /**
     * Gets whitelist
     *
     * @return \Domainrobot\Model\MailList
     */
    public function getWhitelist()
    {
        return $this->container['whitelist'];
    }

    /**
     * Sets whitelist
     *
     * @param \Domainrobot\Model\MailList $whitelist The white listed email addresses
     *
     * @return $this
     */
    public function setWhitelist($whitelist)
    {
        $this->container['whitelist'] = $whitelist;

        return $this;
    }

    /**
     * Gets blacklist
     *
     * @return \Domainrobot\Model\MailList
     */
    public function getBlacklist()
    {
        return $this->container['blacklist'];
    }

    /**
     * Sets blacklist
     *
     * @param \Domainrobot\Model\MailList $blacklist The black listed email addresses
     *
     * @return $this
     */
    public function setBlacklist($blacklist)
    {
        $this->container['blacklist'] = $blacklist;

        return $this;
    }

    /**
     * Gets excludelist
     *
     * @return \Domainrobot\Model\MailList
     */
    public function getExcludelist()
    {
        return $this->container['excludelist'];
    }

    /**
     * Sets excludelist
     *
     * @param \Domainrobot\Model\MailList $excludelist The exculded listed email addresses
     *
     * @return $this
     */
    public function setExcludelist($excludelist)
    {
        $this->container['excludelist'] = $excludelist;

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


