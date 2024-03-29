<?php
/**
 * FraudScreenUserResponseEntityIpCheckResultIpDetails
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
 * FraudScreenUserResponseEntityIpCheckResultIpDetails Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class FraudScreenUserResponseEntityIpCheckResultIpDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FraudScreenUserResponse_entity_ip_check_result_ip_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reverse_dns' => 'string',
        'continent_code' => 'string',
        'continent_name' => 'string',
        'country_code' => 'string',
        'country_name' => 'string',
        'country_currency' => 'string',
        'country_calling_code' => 'string',
        'region_name' => 'string',
        'city_name' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'isp' => 'string',
        'asn' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reverse_dns' => null,
        'continent_code' => null,
        'continent_name' => null,
        'country_code' => null,
        'country_name' => null,
        'country_currency' => null,
        'country_calling_code' => null,
        'region_name' => null,
        'city_name' => null,
        'latitude' => null,
        'longitude' => null,
        'isp' => null,
        'asn' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reverse_dns' => false,
		'continent_code' => false,
		'continent_name' => false,
		'country_code' => false,
		'country_name' => false,
		'country_currency' => false,
		'country_calling_code' => false,
		'region_name' => false,
		'city_name' => false,
		'latitude' => false,
		'longitude' => false,
		'isp' => false,
		'asn' => false
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
        'reverse_dns' => 'reverse_dns',
        'continent_code' => 'continent_code',
        'continent_name' => 'continent_name',
        'country_code' => 'country_code',
        'country_name' => 'country_name',
        'country_currency' => 'country_currency',
        'country_calling_code' => 'country_calling_code',
        'region_name' => 'region_name',
        'city_name' => 'city_name',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'isp' => 'isp',
        'asn' => 'asn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reverse_dns' => 'setReverseDns',
        'continent_code' => 'setContinentCode',
        'continent_name' => 'setContinentName',
        'country_code' => 'setCountryCode',
        'country_name' => 'setCountryName',
        'country_currency' => 'setCountryCurrency',
        'country_calling_code' => 'setCountryCallingCode',
        'region_name' => 'setRegionName',
        'city_name' => 'setCityName',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'isp' => 'setIsp',
        'asn' => 'setAsn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reverse_dns' => 'getReverseDns',
        'continent_code' => 'getContinentCode',
        'continent_name' => 'getContinentName',
        'country_code' => 'getCountryCode',
        'country_name' => 'getCountryName',
        'country_currency' => 'getCountryCurrency',
        'country_calling_code' => 'getCountryCallingCode',
        'region_name' => 'getRegionName',
        'city_name' => 'getCityName',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'isp' => 'getIsp',
        'asn' => 'getAsn'
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
        $this->setIfExists('reverse_dns', $data ?? [], null);
        $this->setIfExists('continent_code', $data ?? [], null);
        $this->setIfExists('continent_name', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('country_name', $data ?? [], null);
        $this->setIfExists('country_currency', $data ?? [], null);
        $this->setIfExists('country_calling_code', $data ?? [], null);
        $this->setIfExists('region_name', $data ?? [], null);
        $this->setIfExists('city_name', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('isp', $data ?? [], null);
        $this->setIfExists('asn', $data ?? [], null);
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
     * Gets reverse_dns
     *
     * @return string|null
     */
    public function getReverseDns()
    {
        return $this->container['reverse_dns'];
    }

    /**
     * Sets reverse_dns
     *
     * @param string|null $reverse_dns reverse_dns
     *
     * @return self
     */
    public function setReverseDns($reverse_dns)
    {

        if (is_null($reverse_dns)) {
            throw new \InvalidArgumentException('non-nullable reverse_dns cannot be null');
        }

        $this->container['reverse_dns'] = $reverse_dns;

        return $this;
    }

    /**
     * Gets continent_code
     *
     * @return string|null
     */
    public function getContinentCode()
    {
        return $this->container['continent_code'];
    }

    /**
     * Sets continent_code
     *
     * @param string|null $continent_code continent_code
     *
     * @return self
     */
    public function setContinentCode($continent_code)
    {

        if (is_null($continent_code)) {
            throw new \InvalidArgumentException('non-nullable continent_code cannot be null');
        }

        $this->container['continent_code'] = $continent_code;

        return $this;
    }

    /**
     * Gets continent_name
     *
     * @return string|null
     */
    public function getContinentName()
    {
        return $this->container['continent_name'];
    }

    /**
     * Sets continent_name
     *
     * @param string|null $continent_name continent_name
     *
     * @return self
     */
    public function setContinentName($continent_name)
    {

        if (is_null($continent_name)) {
            throw new \InvalidArgumentException('non-nullable continent_name cannot be null');
        }

        $this->container['continent_name'] = $continent_name;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {

        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string|null $country_name country_name
     *
     * @return self
     */
    public function setCountryName($country_name)
    {

        if (is_null($country_name)) {
            throw new \InvalidArgumentException('non-nullable country_name cannot be null');
        }

        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets country_currency
     *
     * @return string|null
     */
    public function getCountryCurrency()
    {
        return $this->container['country_currency'];
    }

    /**
     * Sets country_currency
     *
     * @param string|null $country_currency country_currency
     *
     * @return self
     */
    public function setCountryCurrency($country_currency)
    {

        if (is_null($country_currency)) {
            throw new \InvalidArgumentException('non-nullable country_currency cannot be null');
        }

        $this->container['country_currency'] = $country_currency;

        return $this;
    }

    /**
     * Gets country_calling_code
     *
     * @return string|null
     */
    public function getCountryCallingCode()
    {
        return $this->container['country_calling_code'];
    }

    /**
     * Sets country_calling_code
     *
     * @param string|null $country_calling_code country_calling_code
     *
     * @return self
     */
    public function setCountryCallingCode($country_calling_code)
    {

        if (is_null($country_calling_code)) {
            throw new \InvalidArgumentException('non-nullable country_calling_code cannot be null');
        }

        $this->container['country_calling_code'] = $country_calling_code;

        return $this;
    }

    /**
     * Gets region_name
     *
     * @return string|null
     */
    public function getRegionName()
    {
        return $this->container['region_name'];
    }

    /**
     * Sets region_name
     *
     * @param string|null $region_name region_name
     *
     * @return self
     */
    public function setRegionName($region_name)
    {

        if (is_null($region_name)) {
            throw new \InvalidArgumentException('non-nullable region_name cannot be null');
        }

        $this->container['region_name'] = $region_name;

        return $this;
    }

    /**
     * Gets city_name
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name
     *
     * @param string|null $city_name city_name
     *
     * @return self
     */
    public function setCityName($city_name)
    {

        if (is_null($city_name)) {
            throw new \InvalidArgumentException('non-nullable city_name cannot be null');
        }

        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {

        if (is_null($latitude)) {
            throw new \InvalidArgumentException('non-nullable latitude cannot be null');
        }

        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {

        if (is_null($longitude)) {
            throw new \InvalidArgumentException('non-nullable longitude cannot be null');
        }

        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets isp
     *
     * @return string|null
     */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
     * Sets isp
     *
     * @param string|null $isp isp
     *
     * @return self
     */
    public function setIsp($isp)
    {

        if (is_null($isp)) {
            throw new \InvalidArgumentException('non-nullable isp cannot be null');
        }

        $this->container['isp'] = $isp;

        return $this;
    }

    /**
     * Gets asn
     *
     * @return string|null
     */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
     * Sets asn
     *
     * @param string|null $asn asn
     *
     * @return self
     */
    public function setAsn($asn)
    {

        if (is_null($asn)) {
            throw new \InvalidArgumentException('non-nullable asn cannot be null');
        }

        $this->container['asn'] = $asn;

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


