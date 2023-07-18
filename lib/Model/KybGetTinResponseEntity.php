<?php
/**
 * KybGetTinResponseEntity
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
 * KybGetTinResponseEntity Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class KybGetTinResponseEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KybGetTinResponse_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'search' => 'string',
        'taxpayer_name' => 'string',
        'cac_reg_no' => 'string',
        'firstin' => 'string',
        'jittin' => 'string',
        'tax_office' => 'string',
        'phone_no' => 'string',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'search' => null,
        'taxpayer_name' => null,
        'cac_reg_no' => null,
        'firstin' => null,
        'jittin' => null,
        'tax_office' => null,
        'phone_no' => null,
        'email' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'search' => false,
		'taxpayer_name' => false,
		'cac_reg_no' => false,
		'firstin' => false,
		'jittin' => false,
		'tax_office' => false,
		'phone_no' => false,
		'email' => false
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
        'search' => 'Search',
        'taxpayer_name' => 'Taxpayer_Name',
        'cac_reg_no' => 'CAC_Reg_No',
        'firstin' => 'FIRSTIN',
        'jittin' => 'JITTIN',
        'tax_office' => 'Tax_Office',
        'phone_no' => 'Phone_No',
        'email' => 'Email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search' => 'setSearch',
        'taxpayer_name' => 'setTaxpayerName',
        'cac_reg_no' => 'setCacRegNo',
        'firstin' => 'setFirstin',
        'jittin' => 'setJittin',
        'tax_office' => 'setTaxOffice',
        'phone_no' => 'setPhoneNo',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search' => 'getSearch',
        'taxpayer_name' => 'getTaxpayerName',
        'cac_reg_no' => 'getCacRegNo',
        'firstin' => 'getFirstin',
        'jittin' => 'getJittin',
        'tax_office' => 'getTaxOffice',
        'phone_no' => 'getPhoneNo',
        'email' => 'getEmail'
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
        $this->setIfExists('search', $data ?? [], null);
        $this->setIfExists('taxpayer_name', $data ?? [], null);
        $this->setIfExists('cac_reg_no', $data ?? [], null);
        $this->setIfExists('firstin', $data ?? [], null);
        $this->setIfExists('jittin', $data ?? [], null);
        $this->setIfExists('tax_office', $data ?? [], null);
        $this->setIfExists('phone_no', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
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
     * Gets search
     *
     * @return string|null
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param string|null $search search
     *
     * @return self
     */
    public function setSearch($search)
    {

        if (is_null($search)) {
            throw new \InvalidArgumentException('non-nullable search cannot be null');
        }

        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets taxpayer_name
     *
     * @return string|null
     */
    public function getTaxpayerName()
    {
        return $this->container['taxpayer_name'];
    }

    /**
     * Sets taxpayer_name
     *
     * @param string|null $taxpayer_name taxpayer_name
     *
     * @return self
     */
    public function setTaxpayerName($taxpayer_name)
    {

        if (is_null($taxpayer_name)) {
            throw new \InvalidArgumentException('non-nullable taxpayer_name cannot be null');
        }

        $this->container['taxpayer_name'] = $taxpayer_name;

        return $this;
    }

    /**
     * Gets cac_reg_no
     *
     * @return string|null
     */
    public function getCacRegNo()
    {
        return $this->container['cac_reg_no'];
    }

    /**
     * Sets cac_reg_no
     *
     * @param string|null $cac_reg_no cac_reg_no
     *
     * @return self
     */
    public function setCacRegNo($cac_reg_no)
    {

        if (is_null($cac_reg_no)) {
            throw new \InvalidArgumentException('non-nullable cac_reg_no cannot be null');
        }

        $this->container['cac_reg_no'] = $cac_reg_no;

        return $this;
    }

    /**
     * Gets firstin
     *
     * @return string|null
     */
    public function getFirstin()
    {
        return $this->container['firstin'];
    }

    /**
     * Sets firstin
     *
     * @param string|null $firstin firstin
     *
     * @return self
     */
    public function setFirstin($firstin)
    {

        if (is_null($firstin)) {
            throw new \InvalidArgumentException('non-nullable firstin cannot be null');
        }

        $this->container['firstin'] = $firstin;

        return $this;
    }

    /**
     * Gets jittin
     *
     * @return string|null
     */
    public function getJittin()
    {
        return $this->container['jittin'];
    }

    /**
     * Sets jittin
     *
     * @param string|null $jittin jittin
     *
     * @return self
     */
    public function setJittin($jittin)
    {

        if (is_null($jittin)) {
            throw new \InvalidArgumentException('non-nullable jittin cannot be null');
        }

        $this->container['jittin'] = $jittin;

        return $this;
    }

    /**
     * Gets tax_office
     *
     * @return string|null
     */
    public function getTaxOffice()
    {
        return $this->container['tax_office'];
    }

    /**
     * Sets tax_office
     *
     * @param string|null $tax_office tax_office
     *
     * @return self
     */
    public function setTaxOffice($tax_office)
    {

        if (is_null($tax_office)) {
            throw new \InvalidArgumentException('non-nullable tax_office cannot be null');
        }

        $this->container['tax_office'] = $tax_office;

        return $this;
    }

    /**
     * Gets phone_no
     *
     * @return string|null
     */
    public function getPhoneNo()
    {
        return $this->container['phone_no'];
    }

    /**
     * Sets phone_no
     *
     * @param string|null $phone_no phone_no
     *
     * @return self
     */
    public function setPhoneNo($phone_no)
    {

        if (is_null($phone_no)) {
            throw new \InvalidArgumentException('non-nullable phone_no cannot be null');
        }

        $this->container['phone_no'] = $phone_no;

        return $this;
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

