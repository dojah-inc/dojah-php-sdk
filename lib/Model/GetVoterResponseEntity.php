<?php
/**
 * GetVoterResponseEntity
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
 * GetVoterResponseEntity Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class GetVoterResponseEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetVoterResponse_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'voter_number' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'village' => 'string',
        'district' => 'string',
        'constituency' => 'string',
        'sub_county' => 'string',
        'parish' => 'string',
        'polling_station' => 'string',
        'is_first_name_match' => 'bool',
        'is_last_name_match' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'voter_number' => null,
        'first_name' => null,
        'last_name' => null,
        'gender' => null,
        'village' => null,
        'district' => null,
        'constituency' => null,
        'sub_county' => null,
        'parish' => null,
        'polling_station' => null,
        'is_first_name_match' => null,
        'is_last_name_match' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'voter_number' => false,
		'first_name' => false,
		'last_name' => false,
		'gender' => false,
		'village' => false,
		'district' => false,
		'constituency' => false,
		'sub_county' => false,
		'parish' => false,
		'polling_station' => false,
		'is_first_name_match' => false,
		'is_last_name_match' => false
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
        'voter_number' => 'voter_number',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'gender' => 'gender',
        'village' => 'village',
        'district' => 'district',
        'constituency' => 'constituency',
        'sub_county' => 'sub_county',
        'parish' => 'parish',
        'polling_station' => 'polling_station',
        'is_first_name_match' => 'is_first_name_match',
        'is_last_name_match' => 'is_last_name_match'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voter_number' => 'setVoterNumber',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'gender' => 'setGender',
        'village' => 'setVillage',
        'district' => 'setDistrict',
        'constituency' => 'setConstituency',
        'sub_county' => 'setSubCounty',
        'parish' => 'setParish',
        'polling_station' => 'setPollingStation',
        'is_first_name_match' => 'setIsFirstNameMatch',
        'is_last_name_match' => 'setIsLastNameMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voter_number' => 'getVoterNumber',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'gender' => 'getGender',
        'village' => 'getVillage',
        'district' => 'getDistrict',
        'constituency' => 'getConstituency',
        'sub_county' => 'getSubCounty',
        'parish' => 'getParish',
        'polling_station' => 'getPollingStation',
        'is_first_name_match' => 'getIsFirstNameMatch',
        'is_last_name_match' => 'getIsLastNameMatch'
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
        $this->setIfExists('voter_number', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('village', $data ?? [], null);
        $this->setIfExists('district', $data ?? [], null);
        $this->setIfExists('constituency', $data ?? [], null);
        $this->setIfExists('sub_county', $data ?? [], null);
        $this->setIfExists('parish', $data ?? [], null);
        $this->setIfExists('polling_station', $data ?? [], null);
        $this->setIfExists('is_first_name_match', $data ?? [], null);
        $this->setIfExists('is_last_name_match', $data ?? [], null);
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

        if ($this->container['voter_number'] === null) {
            $invalidProperties[] = "'voter_number' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
        if ($this->container['village'] === null) {
            $invalidProperties[] = "'village' can't be null";
        }
        if ($this->container['district'] === null) {
            $invalidProperties[] = "'district' can't be null";
        }
        if ($this->container['constituency'] === null) {
            $invalidProperties[] = "'constituency' can't be null";
        }
        if ($this->container['sub_county'] === null) {
            $invalidProperties[] = "'sub_county' can't be null";
        }
        if ($this->container['parish'] === null) {
            $invalidProperties[] = "'parish' can't be null";
        }
        if ($this->container['polling_station'] === null) {
            $invalidProperties[] = "'polling_station' can't be null";
        }
        if ($this->container['is_first_name_match'] === null) {
            $invalidProperties[] = "'is_first_name_match' can't be null";
        }
        if ($this->container['is_last_name_match'] === null) {
            $invalidProperties[] = "'is_last_name_match' can't be null";
        }
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
     * Gets voter_number
     *
     * @return string
     */
    public function getVoterNumber()
    {
        return $this->container['voter_number'];
    }

    /**
     * Sets voter_number
     *
     * @param string $voter_number voter_number
     *
     * @return self
     */
    public function setVoterNumber($voter_number)
    {

        if (is_null($voter_number)) {
            throw new \InvalidArgumentException('non-nullable voter_number cannot be null');
        }

        $this->container['voter_number'] = $voter_number;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
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
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
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
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
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
     * Gets village
     *
     * @return string
     */
    public function getVillage()
    {
        return $this->container['village'];
    }

    /**
     * Sets village
     *
     * @param string $village village
     *
     * @return self
     */
    public function setVillage($village)
    {

        if (is_null($village)) {
            throw new \InvalidArgumentException('non-nullable village cannot be null');
        }

        $this->container['village'] = $village;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district district
     *
     * @return self
     */
    public function setDistrict($district)
    {

        if (is_null($district)) {
            throw new \InvalidArgumentException('non-nullable district cannot be null');
        }

        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets constituency
     *
     * @return string
     */
    public function getConstituency()
    {
        return $this->container['constituency'];
    }

    /**
     * Sets constituency
     *
     * @param string $constituency constituency
     *
     * @return self
     */
    public function setConstituency($constituency)
    {

        if (is_null($constituency)) {
            throw new \InvalidArgumentException('non-nullable constituency cannot be null');
        }

        $this->container['constituency'] = $constituency;

        return $this;
    }

    /**
     * Gets sub_county
     *
     * @return string
     */
    public function getSubCounty()
    {
        return $this->container['sub_county'];
    }

    /**
     * Sets sub_county
     *
     * @param string $sub_county sub_county
     *
     * @return self
     */
    public function setSubCounty($sub_county)
    {

        if (is_null($sub_county)) {
            throw new \InvalidArgumentException('non-nullable sub_county cannot be null');
        }

        $this->container['sub_county'] = $sub_county;

        return $this;
    }

    /**
     * Gets parish
     *
     * @return string
     */
    public function getParish()
    {
        return $this->container['parish'];
    }

    /**
     * Sets parish
     *
     * @param string $parish parish
     *
     * @return self
     */
    public function setParish($parish)
    {

        if (is_null($parish)) {
            throw new \InvalidArgumentException('non-nullable parish cannot be null');
        }

        $this->container['parish'] = $parish;

        return $this;
    }

    /**
     * Gets polling_station
     *
     * @return string
     */
    public function getPollingStation()
    {
        return $this->container['polling_station'];
    }

    /**
     * Sets polling_station
     *
     * @param string $polling_station polling_station
     *
     * @return self
     */
    public function setPollingStation($polling_station)
    {

        if (is_null($polling_station)) {
            throw new \InvalidArgumentException('non-nullable polling_station cannot be null');
        }

        $this->container['polling_station'] = $polling_station;

        return $this;
    }

    /**
     * Gets is_first_name_match
     *
     * @return bool
     */
    public function getIsFirstNameMatch()
    {
        return $this->container['is_first_name_match'];
    }

    /**
     * Sets is_first_name_match
     *
     * @param bool $is_first_name_match is_first_name_match
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
     * Gets is_last_name_match
     *
     * @return bool
     */
    public function getIsLastNameMatch()
    {
        return $this->container['is_last_name_match'];
    }

    /**
     * Sets is_last_name_match
     *
     * @param bool $is_last_name_match is_last_name_match
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


