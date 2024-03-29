<?php
/**
 * GetNationalIdResponseEntity
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
 * GetNationalIdResponseEntity Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class GetNationalIdResponseEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetNationalIdResponse_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_of_birth' => 'string',
        'first_name' => 'string',
        'gender' => 'string',
        'id' => 'string',
        'is_date_of_birth_match' => 'bool',
        'is_first_name_match' => 'bool',
        'is_gender_match' => 'bool',
        'is_last_name_match' => 'bool',
        'is_middle_name_match' => 'bool',
        'last_name' => 'string',
        'middle_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_of_birth' => null,
        'first_name' => null,
        'gender' => null,
        'id' => null,
        'is_date_of_birth_match' => null,
        'is_first_name_match' => null,
        'is_gender_match' => null,
        'is_last_name_match' => null,
        'is_middle_name_match' => null,
        'last_name' => null,
        'middle_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date_of_birth' => false,
		'first_name' => false,
		'gender' => false,
		'id' => false,
		'is_date_of_birth_match' => false,
		'is_first_name_match' => false,
		'is_gender_match' => false,
		'is_last_name_match' => false,
		'is_middle_name_match' => false,
		'last_name' => false,
		'middle_name' => false
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
        'date_of_birth' => 'date_of_birth',
        'first_name' => 'first_name',
        'gender' => 'gender',
        'id' => 'id',
        'is_date_of_birth_match' => 'is_date_of_birth_match',
        'is_first_name_match' => 'is_first_name_match',
        'is_gender_match' => 'is_gender_match',
        'is_last_name_match' => 'is_last_name_match',
        'is_middle_name_match' => 'is_middle_name_match',
        'last_name' => 'last_name',
        'middle_name' => 'middle_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_of_birth' => 'setDateOfBirth',
        'first_name' => 'setFirstName',
        'gender' => 'setGender',
        'id' => 'setId',
        'is_date_of_birth_match' => 'setIsDateOfBirthMatch',
        'is_first_name_match' => 'setIsFirstNameMatch',
        'is_gender_match' => 'setIsGenderMatch',
        'is_last_name_match' => 'setIsLastNameMatch',
        'is_middle_name_match' => 'setIsMiddleNameMatch',
        'last_name' => 'setLastName',
        'middle_name' => 'setMiddleName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_of_birth' => 'getDateOfBirth',
        'first_name' => 'getFirstName',
        'gender' => 'getGender',
        'id' => 'getId',
        'is_date_of_birth_match' => 'getIsDateOfBirthMatch',
        'is_first_name_match' => 'getIsFirstNameMatch',
        'is_gender_match' => 'getIsGenderMatch',
        'is_last_name_match' => 'getIsLastNameMatch',
        'is_middle_name_match' => 'getIsMiddleNameMatch',
        'last_name' => 'getLastName',
        'middle_name' => 'getMiddleName'
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
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_date_of_birth_match', $data ?? [], null);
        $this->setIfExists('is_first_name_match', $data ?? [], null);
        $this->setIfExists('is_gender_match', $data ?? [], null);
        $this->setIfExists('is_last_name_match', $data ?? [], null);
        $this->setIfExists('is_middle_name_match', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
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
     * Gets date_of_birth
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {

        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }

        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {

        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {

        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }

        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_date_of_birth_match
     *
     * @return bool|null
     */
    public function getIsDateOfBirthMatch()
    {
        return $this->container['is_date_of_birth_match'];
    }

    /**
     * Sets is_date_of_birth_match
     *
     * @param bool|null $is_date_of_birth_match is_date_of_birth_match
     *
     * @return self
     */
    public function setIsDateOfBirthMatch($is_date_of_birth_match)
    {

        if (is_null($is_date_of_birth_match)) {
            throw new \InvalidArgumentException('non-nullable is_date_of_birth_match cannot be null');
        }

        $this->container['is_date_of_birth_match'] = $is_date_of_birth_match;

        return $this;
    }

    /**
     * Gets is_first_name_match
     *
     * @return bool|null
     */
    public function getIsFirstNameMatch()
    {
        return $this->container['is_first_name_match'];
    }

    /**
     * Sets is_first_name_match
     *
     * @param bool|null $is_first_name_match is_first_name_match
     *
     * @return self
     */
    public function setIsFirstNameMatch($is_first_name_match)
    {

        if (is_null($is_first_name_match)) {
            throw new \InvalidArgumentException('non-nullable is_first_name_match cannot be null');
        }

        $this->container['is_first_name_match'] = $is_first_name_match;

        return $this;
    }

    /**
     * Gets is_gender_match
     *
     * @return bool|null
     */
    public function getIsGenderMatch()
    {
        return $this->container['is_gender_match'];
    }

    /**
     * Sets is_gender_match
     *
     * @param bool|null $is_gender_match is_gender_match
     *
     * @return self
     */
    public function setIsGenderMatch($is_gender_match)
    {

        if (is_null($is_gender_match)) {
            throw new \InvalidArgumentException('non-nullable is_gender_match cannot be null');
        }

        $this->container['is_gender_match'] = $is_gender_match;

        return $this;
    }

    /**
     * Gets is_last_name_match
     *
     * @return bool|null
     */
    public function getIsLastNameMatch()
    {
        return $this->container['is_last_name_match'];
    }

    /**
     * Sets is_last_name_match
     *
     * @param bool|null $is_last_name_match is_last_name_match
     *
     * @return self
     */
    public function setIsLastNameMatch($is_last_name_match)
    {

        if (is_null($is_last_name_match)) {
            throw new \InvalidArgumentException('non-nullable is_last_name_match cannot be null');
        }

        $this->container['is_last_name_match'] = $is_last_name_match;

        return $this;
    }

    /**
     * Gets is_middle_name_match
     *
     * @return bool|null
     */
    public function getIsMiddleNameMatch()
    {
        return $this->container['is_middle_name_match'];
    }

    /**
     * Sets is_middle_name_match
     *
     * @param bool|null $is_middle_name_match is_middle_name_match
     *
     * @return self
     */
    public function setIsMiddleNameMatch($is_middle_name_match)
    {

        if (is_null($is_middle_name_match)) {
            throw new \InvalidArgumentException('non-nullable is_middle_name_match cannot be null');
        }

        $this->container['is_middle_name_match'] = $is_middle_name_match;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {

        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name middle_name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {

        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }

        $this->container['middle_name'] = $middle_name;

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


