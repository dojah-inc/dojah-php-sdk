<?php
/**
 * GetWebhooksResponseEntityInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Dojah
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * DOJAH Publilc APIs
 *
 * Use Dojah to verify, onboard and manage user identity across Africa!
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Dojah\Model;

use \ArrayAccess;
use \Dojah\ObjectSerializer;

/**
 * GetWebhooksResponseEntityInner Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class GetWebhooksResponseEntityInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetWebhooksResponse_entity_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_id' => 'string',
        'endpoint' => 'string',
        'environment' => 'string',
        'service' => 'string',
        'confirmation_status' => 'string',
        'date_created' => 'string',
        'date_updated' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app_id' => null,
        'endpoint' => null,
        'environment' => null,
        'service' => null,
        'confirmation_status' => null,
        'date_created' => null,
        'date_updated' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app_id' => false,
		'endpoint' => false,
		'environment' => false,
		'service' => false,
		'confirmation_status' => false,
		'date_created' => false,
		'date_updated' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'app_id' => 'app_id',
        'endpoint' => 'endpoint',
        'environment' => 'environment',
        'service' => 'service',
        'confirmation_status' => 'confirmation_status',
        'date_created' => 'date_created',
        'date_updated' => 'date_updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_id' => 'setAppId',
        'endpoint' => 'setEndpoint',
        'environment' => 'setEnvironment',
        'service' => 'setService',
        'confirmation_status' => 'setConfirmationStatus',
        'date_created' => 'setDateCreated',
        'date_updated' => 'setDateUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_id' => 'getAppId',
        'endpoint' => 'getEndpoint',
        'environment' => 'getEnvironment',
        'service' => 'getService',
        'confirmation_status' => 'getConfirmationStatus',
        'date_created' => 'getDateCreated',
        'date_updated' => 'getDateUpdated'
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
        $this->setIfExists('app_id', $data ?? [], null);
        $this->setIfExists('endpoint', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('service', $data ?? [], null);
        $this->setIfExists('confirmation_status', $data ?? [], null);
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets app_id
     *
     * @return string|null
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string|null $app_id app_id
     *
     * @return self
     */
    public function setAppId($app_id)
    {

        if (is_null($app_id)) {
            throw new \InvalidArgumentException('non-nullable app_id cannot be null');
        }

        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets endpoint
     *
     * @return string|null
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     *
     * @param string|null $endpoint endpoint
     *
     * @return self
     */
    public function setEndpoint($endpoint)
    {

        if (is_null($endpoint)) {
            throw new \InvalidArgumentException('non-nullable endpoint cannot be null');
        }

        $this->container['endpoint'] = $endpoint;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return string|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param string|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {

        if (is_null($environment)) {
            throw new \InvalidArgumentException('non-nullable environment cannot be null');
        }

        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets service
     *
     * @return string|null
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param string|null $service service
     *
     * @return self
     */
    public function setService($service)
    {

        if (is_null($service)) {
            throw new \InvalidArgumentException('non-nullable service cannot be null');
        }

        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets confirmation_status
     *
     * @return string|null
     */
    public function getConfirmationStatus()
    {
        return $this->container['confirmation_status'];
    }

    /**
     * Sets confirmation_status
     *
     * @param string|null $confirmation_status confirmation_status
     *
     * @return self
     */
    public function setConfirmationStatus($confirmation_status)
    {

        if (is_null($confirmation_status)) {
            throw new \InvalidArgumentException('non-nullable confirmation_status cannot be null');
        }

        $this->container['confirmation_status'] = $confirmation_status;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return string|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string|null $date_created date_created
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {

        if (is_null($date_created)) {
            throw new \InvalidArgumentException('non-nullable date_created cannot be null');
        }

        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_updated
     *
     * @return string|null
     */
    public function getDateUpdated()
    {
        return $this->container['date_updated'];
    }

    /**
     * Sets date_updated
     *
     * @param string|null $date_updated date_updated
     *
     * @return self
     */
    public function setDateUpdated($date_updated)
    {

        if (is_null($date_updated)) {
            throw new \InvalidArgumentException('non-nullable date_updated cannot be null');
        }

        $this->container['date_updated'] = $date_updated;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


