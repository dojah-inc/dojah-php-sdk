<?php
/**
 * GetDriversLicenseResponseEntity
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
 * GetDriversLicenseResponseEntity Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class GetDriversLicenseResponseEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetDriversLicenseResponse_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'certificate_date' => 'string',
        'date_of_birth' => 'string',
        'expiry_date' => 'string',
        'full_name' => 'string',
        'id' => 'string',
        'is_date_of_birth_match' => 'bool',
        'is_full_name_match' => 'bool',
        'issue_date' => 'string',
        'picture' => 'string',
        'pin' => 'string',
        'processing_center' => 'string',
        'status' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'certificate_date' => null,
        'date_of_birth' => null,
        'expiry_date' => null,
        'full_name' => null,
        'id' => null,
        'is_date_of_birth_match' => null,
        'is_full_name_match' => null,
        'issue_date' => null,
        'picture' => null,
        'pin' => null,
        'processing_center' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'certificate_date' => false,
		'date_of_birth' => false,
		'expiry_date' => false,
		'full_name' => false,
		'id' => false,
		'is_date_of_birth_match' => false,
		'is_full_name_match' => false,
		'issue_date' => false,
		'picture' => false,
		'pin' => false,
		'processing_center' => false,
		'status' => false
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
        'certificate_date' => 'certificate_date',
        'date_of_birth' => 'date_of_birth',
        'expiry_date' => 'expiry_date',
        'full_name' => 'full_name',
        'id' => 'id',
        'is_date_of_birth_match' => 'is_date_of_birth_match',
        'is_full_name_match' => 'is_full_name_match',
        'issue_date' => 'issue_date',
        'picture' => 'picture',
        'pin' => 'pin',
        'processing_center' => 'processing_center',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificate_date' => 'setCertificateDate',
        'date_of_birth' => 'setDateOfBirth',
        'expiry_date' => 'setExpiryDate',
        'full_name' => 'setFullName',
        'id' => 'setId',
        'is_date_of_birth_match' => 'setIsDateOfBirthMatch',
        'is_full_name_match' => 'setIsFullNameMatch',
        'issue_date' => 'setIssueDate',
        'picture' => 'setPicture',
        'pin' => 'setPin',
        'processing_center' => 'setProcessingCenter',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificate_date' => 'getCertificateDate',
        'date_of_birth' => 'getDateOfBirth',
        'expiry_date' => 'getExpiryDate',
        'full_name' => 'getFullName',
        'id' => 'getId',
        'is_date_of_birth_match' => 'getIsDateOfBirthMatch',
        'is_full_name_match' => 'getIsFullNameMatch',
        'issue_date' => 'getIssueDate',
        'picture' => 'getPicture',
        'pin' => 'getPin',
        'processing_center' => 'getProcessingCenter',
        'status' => 'getStatus'
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
        $this->setIfExists('certificate_date', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('expiry_date', $data ?? [], null);
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_date_of_birth_match', $data ?? [], null);
        $this->setIfExists('is_full_name_match', $data ?? [], null);
        $this->setIfExists('issue_date', $data ?? [], null);
        $this->setIfExists('picture', $data ?? [], null);
        $this->setIfExists('pin', $data ?? [], null);
        $this->setIfExists('processing_center', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * Gets certificate_date
     *
     * @return string|null
     */
    public function getCertificateDate()
    {
        return $this->container['certificate_date'];
    }

    /**
     * Sets certificate_date
     *
     * @param string|null $certificate_date certificate_date
     *
     * @return self
     */
    public function setCertificateDate($certificate_date)
    {

        if (is_null($certificate_date)) {
            throw new \InvalidArgumentException('non-nullable certificate_date cannot be null');
        }

        $this->container['certificate_date'] = $certificate_date;

        return $this;
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
     * Gets expiry_date
     *
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string|null $expiry_date expiry_date
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {

        if (is_null($expiry_date)) {
            throw new \InvalidArgumentException('non-nullable expiry_date cannot be null');
        }

        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string|null $full_name full_name
     *
     * @return self
     */
    public function setFullName($full_name)
    {

        if (is_null($full_name)) {
            throw new \InvalidArgumentException('non-nullable full_name cannot be null');
        }

        $this->container['full_name'] = $full_name;

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
     * Gets is_full_name_match
     *
     * @return bool|null
     */
    public function getIsFullNameMatch()
    {
        return $this->container['is_full_name_match'];
    }

    /**
     * Sets is_full_name_match
     *
     * @param bool|null $is_full_name_match is_full_name_match
     *
     * @return self
     */
    public function setIsFullNameMatch($is_full_name_match)
    {

        if (is_null($is_full_name_match)) {
            throw new \InvalidArgumentException('non-nullable is_full_name_match cannot be null');
        }

        $this->container['is_full_name_match'] = $is_full_name_match;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string|null $issue_date issue_date
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {

        if (is_null($issue_date)) {
            throw new \InvalidArgumentException('non-nullable issue_date cannot be null');
        }

        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets picture
     *
     * @return string|null
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     *
     * @param string|null $picture picture
     *
     * @return self
     */
    public function setPicture($picture)
    {

        if (is_null($picture)) {
            throw new \InvalidArgumentException('non-nullable picture cannot be null');
        }

        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets pin
     *
     * @return string|null
     */
    public function getPin()
    {
        return $this->container['pin'];
    }

    /**
     * Sets pin
     *
     * @param string|null $pin pin
     *
     * @return self
     */
    public function setPin($pin)
    {

        if (is_null($pin)) {
            throw new \InvalidArgumentException('non-nullable pin cannot be null');
        }

        $this->container['pin'] = $pin;

        return $this;
    }

    /**
     * Gets processing_center
     *
     * @return string|null
     */
    public function getProcessingCenter()
    {
        return $this->container['processing_center'];
    }

    /**
     * Sets processing_center
     *
     * @param string|null $processing_center processing_center
     *
     * @return self
     */
    public function setProcessingCenter($processing_center)
    {

        if (is_null($processing_center)) {
            throw new \InvalidArgumentException('non-nullable processing_center cannot be null');
        }

        $this->container['processing_center'] = $processing_center;

        return $this;
    }

    /**
     * Gets status
     *
     * @return float|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param float|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

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

