<?php
/**
 * GetEmailReputationResponseEntity
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Dojah
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * DOJAH APIs
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
 * GetEmailReputationResponseEntity Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class GetEmailReputationResponseEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetEmailReputationResponse_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'reputation' => 'string',
        'suspicious' => 'bool',
        'references' => 'float',
        'details' => '\Dojah\Model\GetEmailReputationResponseEntityDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'reputation' => null,
        'suspicious' => null,
        'references' => null,
        'details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => false,
		'reputation' => false,
		'suspicious' => false,
		'references' => false,
		'details' => false
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
        'email' => 'email',
        'reputation' => 'reputation',
        'suspicious' => 'suspicious',
        'references' => 'references',
        'details' => 'details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'reputation' => 'setReputation',
        'suspicious' => 'setSuspicious',
        'references' => 'setReferences',
        'details' => 'setDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'reputation' => 'getReputation',
        'suspicious' => 'getSuspicious',
        'references' => 'getReferences',
        'details' => 'getDetails'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('reputation', $data ?? [], null);
        $this->setIfExists('suspicious', $data ?? [], null);
        $this->setIfExists('references', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {

        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets reputation
     *
     * @return string|null
     */
    public function getReputation()
    {
        return $this->container['reputation'];
    }

    /**
     * Sets reputation
     *
     * @param string|null $reputation reputation
     *
     * @return self
     */
    public function setReputation($reputation)
    {

        if (is_null($reputation)) {
            throw new \InvalidArgumentException('non-nullable reputation cannot be null');
        }

        $this->container['reputation'] = $reputation;

        return $this;
    }

    /**
     * Gets suspicious
     *
     * @return bool|null
     */
    public function getSuspicious()
    {
        return $this->container['suspicious'];
    }

    /**
     * Sets suspicious
     *
     * @param bool|null $suspicious suspicious
     *
     * @return self
     */
    public function setSuspicious($suspicious)
    {

        if (is_null($suspicious)) {
            throw new \InvalidArgumentException('non-nullable suspicious cannot be null');
        }

        $this->container['suspicious'] = $suspicious;

        return $this;
    }

    /**
     * Gets references
     *
     * @return float|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param float|null $references references
     *
     * @return self
     */
    public function setReferences($references)
    {

        if (is_null($references)) {
            throw new \InvalidArgumentException('non-nullable references cannot be null');
        }

        $this->container['references'] = $references;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Dojah\Model\GetEmailReputationResponseEntityDetails|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Dojah\Model\GetEmailReputationResponseEntityDetails|null $details details
     *
     * @return self
     */
    public function setDetails($details)
    {

        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }

        $this->container['details'] = $details;

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


