<?php
/**
 * GetVinResponseEntity
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
 * GetVinResponseEntity Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class GetVinResponseEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetVinResponse_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'full_name' => 'string',
        'voter_identification_number' => 'string',
        'gender' => 'string',
        'occupation' => 'string',
        'time_of_registration' => 'string',
        'state' => 'string',
        'local_government' => 'string',
        'registration_area_ward' => 'string',
        'polling_unit' => 'string',
        'polling_unit_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'full_name' => null,
        'voter_identification_number' => null,
        'gender' => null,
        'occupation' => null,
        'time_of_registration' => null,
        'state' => null,
        'local_government' => null,
        'registration_area_ward' => null,
        'polling_unit' => null,
        'polling_unit_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'full_name' => false,
		'voter_identification_number' => false,
		'gender' => false,
		'occupation' => false,
		'time_of_registration' => false,
		'state' => false,
		'local_government' => false,
		'registration_area_ward' => false,
		'polling_unit' => false,
		'polling_unit_code' => false
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
        'full_name' => 'full_name',
        'voter_identification_number' => 'voter_identification_number:',
        'gender' => 'gender:',
        'occupation' => 'occupation:',
        'time_of_registration' => 'time_of_registration:',
        'state' => 'state:',
        'local_government' => 'local_government:',
        'registration_area_ward' => 'registration_area_ward:',
        'polling_unit' => 'polling_unit:',
        'polling_unit_code' => 'polling_unit_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'full_name' => 'setFullName',
        'voter_identification_number' => 'setVoterIdentificationNumber',
        'gender' => 'setGender',
        'occupation' => 'setOccupation',
        'time_of_registration' => 'setTimeOfRegistration',
        'state' => 'setState',
        'local_government' => 'setLocalGovernment',
        'registration_area_ward' => 'setRegistrationAreaWard',
        'polling_unit' => 'setPollingUnit',
        'polling_unit_code' => 'setPollingUnitCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'full_name' => 'getFullName',
        'voter_identification_number' => 'getVoterIdentificationNumber',
        'gender' => 'getGender',
        'occupation' => 'getOccupation',
        'time_of_registration' => 'getTimeOfRegistration',
        'state' => 'getState',
        'local_government' => 'getLocalGovernment',
        'registration_area_ward' => 'getRegistrationAreaWard',
        'polling_unit' => 'getPollingUnit',
        'polling_unit_code' => 'getPollingUnitCode'
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
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('voter_identification_number', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('occupation', $data ?? [], null);
        $this->setIfExists('time_of_registration', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('local_government', $data ?? [], null);
        $this->setIfExists('registration_area_ward', $data ?? [], null);
        $this->setIfExists('polling_unit', $data ?? [], null);
        $this->setIfExists('polling_unit_code', $data ?? [], null);
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
     * Gets voter_identification_number
     *
     * @return string|null
     */
    public function getVoterIdentificationNumber()
    {
        return $this->container['voter_identification_number'];
    }

    /**
     * Sets voter_identification_number
     *
     * @param string|null $voter_identification_number voter_identification_number
     *
     * @return self
     */
    public function setVoterIdentificationNumber($voter_identification_number)
    {

        if (is_null($voter_identification_number)) {
            throw new \InvalidArgumentException('non-nullable voter_identification_number cannot be null');
        }

        $this->container['voter_identification_number'] = $voter_identification_number;

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
     * Gets occupation
     *
     * @return string|null
     */
    public function getOccupation()
    {
        return $this->container['occupation'];
    }

    /**
     * Sets occupation
     *
     * @param string|null $occupation occupation
     *
     * @return self
     */
    public function setOccupation($occupation)
    {

        if (is_null($occupation)) {
            throw new \InvalidArgumentException('non-nullable occupation cannot be null');
        }

        $this->container['occupation'] = $occupation;

        return $this;
    }

    /**
     * Gets time_of_registration
     *
     * @return string|null
     */
    public function getTimeOfRegistration()
    {
        return $this->container['time_of_registration'];
    }

    /**
     * Sets time_of_registration
     *
     * @param string|null $time_of_registration time_of_registration
     *
     * @return self
     */
    public function setTimeOfRegistration($time_of_registration)
    {

        if (is_null($time_of_registration)) {
            throw new \InvalidArgumentException('non-nullable time_of_registration cannot be null');
        }

        $this->container['time_of_registration'] = $time_of_registration;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {

        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets local_government
     *
     * @return string|null
     */
    public function getLocalGovernment()
    {
        return $this->container['local_government'];
    }

    /**
     * Sets local_government
     *
     * @param string|null $local_government local_government
     *
     * @return self
     */
    public function setLocalGovernment($local_government)
    {

        if (is_null($local_government)) {
            throw new \InvalidArgumentException('non-nullable local_government cannot be null');
        }

        $this->container['local_government'] = $local_government;

        return $this;
    }

    /**
     * Gets registration_area_ward
     *
     * @return string|null
     */
    public function getRegistrationAreaWard()
    {
        return $this->container['registration_area_ward'];
    }

    /**
     * Sets registration_area_ward
     *
     * @param string|null $registration_area_ward registration_area_ward
     *
     * @return self
     */
    public function setRegistrationAreaWard($registration_area_ward)
    {

        if (is_null($registration_area_ward)) {
            throw new \InvalidArgumentException('non-nullable registration_area_ward cannot be null');
        }

        $this->container['registration_area_ward'] = $registration_area_ward;

        return $this;
    }

    /**
     * Gets polling_unit
     *
     * @return string|null
     */
    public function getPollingUnit()
    {
        return $this->container['polling_unit'];
    }

    /**
     * Sets polling_unit
     *
     * @param string|null $polling_unit polling_unit
     *
     * @return self
     */
    public function setPollingUnit($polling_unit)
    {

        if (is_null($polling_unit)) {
            throw new \InvalidArgumentException('non-nullable polling_unit cannot be null');
        }

        $this->container['polling_unit'] = $polling_unit;

        return $this;
    }

    /**
     * Gets polling_unit_code
     *
     * @return string|null
     */
    public function getPollingUnitCode()
    {
        return $this->container['polling_unit_code'];
    }

    /**
     * Sets polling_unit_code
     *
     * @param string|null $polling_unit_code polling_unit_code
     *
     * @return self
     */
    public function setPollingUnitCode($polling_unit_code)
    {

        if (is_null($polling_unit_code)) {
            throw new \InvalidArgumentException('non-nullable polling_unit_code cannot be null');
        }

        $this->container['polling_unit_code'] = $polling_unit_code;

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


