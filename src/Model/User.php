<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'context' => 'int',
        'password' => 'string',
        'defaultEmail' => 'string',
        'status' => 'int',
        'substatus' => 'int',
        'authType' => '\Domainrobot\Model\AuthType',
        'details' => '\Domainrobot\Model\UserDetails',
        'lock' => '\Domainrobot\Model\UserLock',
        'acls' => '\Domainrobot\Model\UserAcls',
        'profiles' => '\Domainrobot\Model\UserProfileViews',
        'serviceProfiles' => '\Domainrobot\Model\ServiceProfiles',
        'ancestors' => '\Domainrobot\Model\BasicUser[]',
        'customer' => '\Domainrobot\Model\BasicCustomer',
        'nameServerGroups' => '\Domainrobot\Model\VirtualNameServerGroup[]',
        'subscriptions' => '\Domainrobot\Model\Subscription[]',
        'applications' => '\Domainrobot\Model\TrustedApplication[]',
        'restrictions' => '\Domainrobot\Model\IpRestrictions',
        'user' => 'string',
        'language' => 'string',
        'parent' => '\Domainrobot\Model\User',
        'directCustomer' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'context' => 'int32',
        'password' => null,
        'defaultEmail' => null,
        'status' => 'int32',
        'substatus' => 'int32',
        'authType' => null,
        'details' => null,
        'lock' => null,
        'acls' => null,
        'profiles' => null,
        'serviceProfiles' => null,
        'ancestors' => null,
        'customer' => null,
        'nameServerGroups' => null,
        'subscriptions' => null,
        'applications' => null,
        'restrictions' => null,
        'user' => null,
        'language' => null,
        'parent' => null,
        'directCustomer' => null
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
        'context' => 'context',
        'password' => 'password',
        'defaultEmail' => 'defaultEmail',
        'status' => 'status',
        'substatus' => 'substatus',
        'authType' => 'authType',
        'details' => 'details',
        'lock' => 'lock',
        'acls' => 'acls',
        'profiles' => 'profiles',
        'serviceProfiles' => 'serviceProfiles',
        'ancestors' => 'ancestors',
        'customer' => 'customer',
        'nameServerGroups' => 'nameServerGroups',
        'subscriptions' => 'subscriptions',
        'applications' => 'applications',
        'restrictions' => 'restrictions',
        'user' => 'user',
        'language' => 'language',
        'parent' => 'parent',
        'directCustomer' => 'directCustomer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'context' => 'setContext',
        'password' => 'setPassword',
        'defaultEmail' => 'setDefaultEmail',
        'status' => 'setStatus',
        'substatus' => 'setSubstatus',
        'authType' => 'setAuthType',
        'details' => 'setDetails',
        'lock' => 'setLock',
        'acls' => 'setAcls',
        'profiles' => 'setProfiles',
        'serviceProfiles' => 'setServiceProfiles',
        'ancestors' => 'setAncestors',
        'customer' => 'setCustomer',
        'nameServerGroups' => 'setNameServerGroups',
        'subscriptions' => 'setSubscriptions',
        'applications' => 'setApplications',
        'restrictions' => 'setRestrictions',
        'user' => 'setUser',
        'language' => 'setLanguage',
        'parent' => 'setParent',
        'directCustomer' => 'setDirectCustomer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'context' => 'getContext',
        'password' => 'getPassword',
        'defaultEmail' => 'getDefaultEmail',
        'status' => 'getStatus',
        'substatus' => 'getSubstatus',
        'authType' => 'getAuthType',
        'details' => 'getDetails',
        'lock' => 'getLock',
        'acls' => 'getAcls',
        'profiles' => 'getProfiles',
        'serviceProfiles' => 'getServiceProfiles',
        'ancestors' => 'getAncestors',
        'customer' => 'getCustomer',
        'nameServerGroups' => 'getNameServerGroups',
        'subscriptions' => 'getSubscriptions',
        'applications' => 'getApplications',
        'restrictions' => 'getRestrictions',
        'user' => 'getUser',
        'language' => 'getLanguage',
        'parent' => 'getParent',
        'directCustomer' => 'getDirectCustomer'
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
        $this->container['context'] = isset($data['context']) ? $this->createData($data['context'], 'context')  : null;
        $this->container['password'] = isset($data['password']) ? $this->createData($data['password'], 'password')  : null;
        $this->container['defaultEmail'] = isset($data['defaultEmail']) ? $this->createData($data['defaultEmail'], 'defaultEmail')  : null;
        $this->container['status'] = isset($data['status']) ? $this->createData($data['status'], 'status')  : null;
        $this->container['substatus'] = isset($data['substatus']) ? $this->createData($data['substatus'], 'substatus')  : null;
        $this->container['authType'] = isset($data['authType']) ? $this->createData($data['authType'], 'authType')  : null;
        $this->container['details'] = isset($data['details']) ? $this->createData($data['details'], 'details')  : null;
        $this->container['lock'] = isset($data['lock']) ? $this->createData($data['lock'], 'lock')  : null;
        $this->container['acls'] = isset($data['acls']) ? $this->createData($data['acls'], 'acls')  : null;
        $this->container['profiles'] = isset($data['profiles']) ? $this->createData($data['profiles'], 'profiles')  : null;
        $this->container['serviceProfiles'] = isset($data['serviceProfiles']) ? $this->createData($data['serviceProfiles'], 'serviceProfiles')  : null;
        $this->container['ancestors'] = isset($data['ancestors']) ? $this->createData($data['ancestors'], 'ancestors')  : null;
        $this->container['customer'] = isset($data['customer']) ? $this->createData($data['customer'], 'customer')  : null;
        $this->container['nameServerGroups'] = isset($data['nameServerGroups']) ? $this->createData($data['nameServerGroups'], 'nameServerGroups')  : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $this->createData($data['subscriptions'], 'subscriptions')  : null;
        $this->container['applications'] = isset($data['applications']) ? $this->createData($data['applications'], 'applications')  : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $this->createData($data['restrictions'], 'restrictions')  : null;
        $this->container['user'] = isset($data['user']) ? $this->createData($data['user'], 'user')  : null;
        $this->container['language'] = isset($data['language']) ? $this->createData($data['language'], 'language')  : null;
        $this->container['parent'] = isset($data['parent']) ? $this->createData($data['parent'], 'parent')  : null;
        $this->container['directCustomer'] = isset($data['directCustomer']) ? $this->createData($data['directCustomer'], 'directCustomer')  : null;
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

        if ($this->container['context'] === null) {
            $invalidProperties[] = "'context' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if (!preg_match("/^[^_].*/", $this->container['user'])) {
            $invalidProperties[] = "invalid value for 'user', must be conform to the pattern /^[^_].*/.";
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
     * @param \DateTime $created The user created date.
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
     * @param \DateTime $updated The user updated date.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets context
     *
     * @return int
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param int $context The context.
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password The password.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets defaultEmail
     *
     * @return string
     */
    public function getDefaultEmail()
    {
        return $this->container['defaultEmail'];
    }

    /**
     * Sets defaultEmail
     *
     * @param string $defaultEmail The default email.
     *
     * @return $this
     */
    public function setDefaultEmail($defaultEmail)
    {
        $this->container['defaultEmail'] = $defaultEmail;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status The status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets substatus
     *
     * @return int
     */
    public function getSubstatus()
    {
        return $this->container['substatus'];
    }

    /**
     * Sets substatus
     *
     * @param int $substatus The substatus.
     *
     * @return $this
     */
    public function setSubstatus($substatus)
    {
        $this->container['substatus'] = $substatus;

        return $this;
    }

    /**
     * Gets authType
     *
     * @return \Domainrobot\Model\AuthType
     */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
     * Sets authType
     *
     * @param \Domainrobot\Model\AuthType $authType The users authorization method.
     *
     * @return $this
     */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Domainrobot\Model\UserDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Domainrobot\Model\UserDetails $details The user details.
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets lock
     *
     * @return \Domainrobot\Model\UserLock
     */
    public function getLock()
    {
        return $this->container['lock'];
    }

    /**
     * Sets lock
     *
     * @param \Domainrobot\Model\UserLock $lock The lock status of the user.
     *
     * @return $this
     */
    public function setLock($lock)
    {
        $this->container['lock'] = $lock;

        return $this;
    }

    /**
     * Gets acls
     *
     * @return \Domainrobot\Model\UserAcls
     */
    public function getAcls()
    {
        return $this->container['acls'];
    }

    /**
     * Sets acls
     *
     * @param \Domainrobot\Model\UserAcls $acls Wrapper for the user acls.
     *
     * @return $this
     */
    public function setAcls($acls)
    {
        $this->container['acls'] = $acls;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return \Domainrobot\Model\UserProfileViews
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param \Domainrobot\Model\UserProfileViews $profiles Wrapper for the user profiles.
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets serviceProfiles
     *
     * @return \Domainrobot\Model\ServiceProfiles
     */
    public function getServiceProfiles()
    {
        return $this->container['serviceProfiles'];
    }

    /**
     * Sets serviceProfiles
     *
     * @param \Domainrobot\Model\ServiceProfiles $serviceProfiles Wrapper for the service user profiles.
     *
     * @return $this
     */
    public function setServiceProfiles($serviceProfiles)
    {
        $this->container['serviceProfiles'] = $serviceProfiles;

        return $this;
    }

    /**
     * Gets ancestors
     *
     * @return \Domainrobot\Model\BasicUser[]
     */
    public function getAncestors()
    {
        return $this->container['ancestors'];
    }

    /**
     * Sets ancestors
     *
     * @param \Domainrobot\Model\BasicUser[] $ancestors The ancestors of the user.
     *
     * @return $this
     */
    public function setAncestors($ancestors)
    {
        $this->container['ancestors'] = $ancestors;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Domainrobot\Model\BasicCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Domainrobot\Model\BasicCustomer $customer The customer belonging to the user.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets nameServerGroups
     *
     * @return \Domainrobot\Model\VirtualNameServerGroup[]
     */
    public function getNameServerGroups()
    {
        return $this->container['nameServerGroups'];
    }

    /**
     * Sets nameServerGroups
     *
     * @param \Domainrobot\Model\VirtualNameServerGroup[] $nameServerGroups The available name server groups
     *
     * @return $this
     */
    public function setNameServerGroups($nameServerGroups)
    {
        $this->container['nameServerGroups'] = $nameServerGroups;

        return $this;
    }

    /**
     * Gets subscriptions
     *
     * @return \Domainrobot\Model\Subscription[]
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     *
     * @param \Domainrobot\Model\Subscription[] $subscriptions Wrapper for the subscriptions.
     *
     * @return $this
     */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;

        return $this;
    }

    /**
     * Gets applications
     *
     * @return \Domainrobot\Model\TrustedApplication[]
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     *
     * @param \Domainrobot\Model\TrustedApplication[] $applications Holds the used applications.
     *
     * @return $this
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return \Domainrobot\Model\IpRestrictions
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param \Domainrobot\Model\IpRestrictions $restrictions The wrapper of the ip restrictions for the user.
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user The user name.
     *
     * @return $this
     */
    public function setUser($user)
    {

        if ((!preg_match("/^[^_].*/", $user))) {
            throw new \InvalidArgumentException("invalid value for $user when calling User., must conform to the pattern /^[^_].*/.");
        }

        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Domainrobot\Model\User
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Domainrobot\Model\User $parent The parent.
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets directCustomer
     *
     * @return bool
     */
    public function getDirectCustomer()
    {
        return $this->container['directCustomer'];
    }

    /**
     * Sets directCustomer
     *
     * @param bool $directCustomer directCustomer
     *
     * @return $this
     */
    public function setDirectCustomer($directCustomer)
    {
        $this->container['directCustomer'] = $directCustomer;

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


