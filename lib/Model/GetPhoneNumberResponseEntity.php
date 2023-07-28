<?php
/**
 * GetPhoneNumberResponseEntity
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
 * GetPhoneNumberResponseEntity Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class GetPhoneNumberResponseEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPhoneNumberResponse_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'birth_date' => 'string',
        'birth_lga' => 'string',
        'birth_state' => 'string',
        'educational_level' => 'string',
        'emplyment_status' => 'string',
        'first_name' => 'string',
        'gender' => 'string',
        'height' => 'string',
        'last_name' => 'string',
        'lga' => 'string',
        'marital_status' => 'string',
        'middle_name' => 'string',
        'msisdn' => 'string',
        'nin' => 'string',
        'nspoken_lang' => 'string',
        'ospokenlang' => 'string',
        'picture' => 'string',
        'profession' => 'string',
        'religion' => 'string',
        'residence_address_line1' => 'string',
        'residence_lga' => 'string',
        'residence_state' => 'string',
        'residence_status' => 'string',
        'residence_town' => 'string',
        'self_origin_lga' => 'string',
        'self_origin_place' => 'string',
        'self_origin_state' => 'string',
        'state' => 'string',
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
        'title' => null,
        'birth_date' => null,
        'birth_lga' => null,
        'birth_state' => null,
        'educational_level' => null,
        'emplyment_status' => null,
        'first_name' => null,
        'gender' => null,
        'height' => null,
        'last_name' => null,
        'lga' => null,
        'marital_status' => null,
        'middle_name' => null,
        'msisdn' => null,
        'nin' => null,
        'nspoken_lang' => null,
        'ospokenlang' => null,
        'picture' => null,
        'profession' => null,
        'religion' => null,
        'residence_address_line1' => null,
        'residence_lga' => null,
        'residence_state' => null,
        'residence_status' => null,
        'residence_town' => null,
        'self_origin_lga' => null,
        'self_origin_place' => null,
        'self_origin_state' => null,
        'state' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
		'birth_date' => false,
		'birth_lga' => false,
		'birth_state' => false,
		'educational_level' => false,
		'emplyment_status' => false,
		'first_name' => false,
		'gender' => false,
		'height' => false,
		'last_name' => false,
		'lga' => false,
		'marital_status' => false,
		'middle_name' => false,
		'msisdn' => false,
		'nin' => false,
		'nspoken_lang' => false,
		'ospokenlang' => false,
		'picture' => false,
		'profession' => false,
		'religion' => false,
		'residence_address_line1' => false,
		'residence_lga' => false,
		'residence_state' => false,
		'residence_status' => false,
		'residence_town' => false,
		'self_origin_lga' => false,
		'self_origin_place' => false,
		'self_origin_state' => false,
		'state' => false,
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
        'title' => 'title',
        'birth_date' => 'birthDate',
        'birth_lga' => 'birthLga',
        'birth_state' => 'birthState',
        'educational_level' => 'educationalLevel',
        'emplyment_status' => 'emplymentStatus',
        'first_name' => 'firstName',
        'gender' => 'gender',
        'height' => 'height',
        'last_name' => 'lastName',
        'lga' => 'lga',
        'marital_status' => 'maritalStatus',
        'middle_name' => 'middleName',
        'msisdn' => 'msisdn',
        'nin' => 'nin',
        'nspoken_lang' => 'nspokenLang',
        'ospokenlang' => 'ospokenlang',
        'picture' => 'picture',
        'profession' => 'profession',
        'religion' => 'religion',
        'residence_address_line1' => 'residenceAddressLine1',
        'residence_lga' => 'residenceLga',
        'residence_state' => 'residenceState',
        'residence_status' => 'residenceStatus',
        'residence_town' => 'residenceTown',
        'self_origin_lga' => 'selfOriginLga',
        'self_origin_place' => 'selfOriginPlace',
        'self_origin_state' => 'selfOriginState',
        'state' => 'state',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'birth_date' => 'setBirthDate',
        'birth_lga' => 'setBirthLga',
        'birth_state' => 'setBirthState',
        'educational_level' => 'setEducationalLevel',
        'emplyment_status' => 'setEmplymentStatus',
        'first_name' => 'setFirstName',
        'gender' => 'setGender',
        'height' => 'setHeight',
        'last_name' => 'setLastName',
        'lga' => 'setLga',
        'marital_status' => 'setMaritalStatus',
        'middle_name' => 'setMiddleName',
        'msisdn' => 'setMsisdn',
        'nin' => 'setNin',
        'nspoken_lang' => 'setNspokenLang',
        'ospokenlang' => 'setOspokenlang',
        'picture' => 'setPicture',
        'profession' => 'setProfession',
        'religion' => 'setReligion',
        'residence_address_line1' => 'setResidenceAddressLine1',
        'residence_lga' => 'setResidenceLga',
        'residence_state' => 'setResidenceState',
        'residence_status' => 'setResidenceStatus',
        'residence_town' => 'setResidenceTown',
        'self_origin_lga' => 'setSelfOriginLga',
        'self_origin_place' => 'setSelfOriginPlace',
        'self_origin_state' => 'setSelfOriginState',
        'state' => 'setState',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'birth_date' => 'getBirthDate',
        'birth_lga' => 'getBirthLga',
        'birth_state' => 'getBirthState',
        'educational_level' => 'getEducationalLevel',
        'emplyment_status' => 'getEmplymentStatus',
        'first_name' => 'getFirstName',
        'gender' => 'getGender',
        'height' => 'getHeight',
        'last_name' => 'getLastName',
        'lga' => 'getLga',
        'marital_status' => 'getMaritalStatus',
        'middle_name' => 'getMiddleName',
        'msisdn' => 'getMsisdn',
        'nin' => 'getNin',
        'nspoken_lang' => 'getNspokenLang',
        'ospokenlang' => 'getOspokenlang',
        'picture' => 'getPicture',
        'profession' => 'getProfession',
        'religion' => 'getReligion',
        'residence_address_line1' => 'getResidenceAddressLine1',
        'residence_lga' => 'getResidenceLga',
        'residence_state' => 'getResidenceState',
        'residence_status' => 'getResidenceStatus',
        'residence_town' => 'getResidenceTown',
        'self_origin_lga' => 'getSelfOriginLga',
        'self_origin_place' => 'getSelfOriginPlace',
        'self_origin_state' => 'getSelfOriginState',
        'state' => 'getState',
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('birth_date', $data ?? [], null);
        $this->setIfExists('birth_lga', $data ?? [], null);
        $this->setIfExists('birth_state', $data ?? [], null);
        $this->setIfExists('educational_level', $data ?? [], null);
        $this->setIfExists('emplyment_status', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('lga', $data ?? [], null);
        $this->setIfExists('marital_status', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('msisdn', $data ?? [], null);
        $this->setIfExists('nin', $data ?? [], null);
        $this->setIfExists('nspoken_lang', $data ?? [], null);
        $this->setIfExists('ospokenlang', $data ?? [], null);
        $this->setIfExists('picture', $data ?? [], null);
        $this->setIfExists('profession', $data ?? [], null);
        $this->setIfExists('religion', $data ?? [], null);
        $this->setIfExists('residence_address_line1', $data ?? [], null);
        $this->setIfExists('residence_lga', $data ?? [], null);
        $this->setIfExists('residence_state', $data ?? [], null);
        $this->setIfExists('residence_status', $data ?? [], null);
        $this->setIfExists('residence_town', $data ?? [], null);
        $this->setIfExists('self_origin_lga', $data ?? [], null);
        $this->setIfExists('self_origin_place', $data ?? [], null);
        $this->setIfExists('self_origin_state', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param string|null $birth_date birth_date
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {

        if (is_null($birth_date)) {
            throw new \InvalidArgumentException('non-nullable birth_date cannot be null');
        }

        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets birth_lga
     *
     * @return string|null
     */
    public function getBirthLga()
    {
        return $this->container['birth_lga'];
    }

    /**
     * Sets birth_lga
     *
     * @param string|null $birth_lga birth_lga
     *
     * @return self
     */
    public function setBirthLga($birth_lga)
    {

        if (is_null($birth_lga)) {
            throw new \InvalidArgumentException('non-nullable birth_lga cannot be null');
        }

        $this->container['birth_lga'] = $birth_lga;

        return $this;
    }

    /**
     * Gets birth_state
     *
     * @return string|null
     */
    public function getBirthState()
    {
        return $this->container['birth_state'];
    }

    /**
     * Sets birth_state
     *
     * @param string|null $birth_state birth_state
     *
     * @return self
     */
    public function setBirthState($birth_state)
    {

        if (is_null($birth_state)) {
            throw new \InvalidArgumentException('non-nullable birth_state cannot be null');
        }

        $this->container['birth_state'] = $birth_state;

        return $this;
    }

    /**
     * Gets educational_level
     *
     * @return string|null
     */
    public function getEducationalLevel()
    {
        return $this->container['educational_level'];
    }

    /**
     * Sets educational_level
     *
     * @param string|null $educational_level educational_level
     *
     * @return self
     */
    public function setEducationalLevel($educational_level)
    {

        if (is_null($educational_level)) {
            throw new \InvalidArgumentException('non-nullable educational_level cannot be null');
        }

        $this->container['educational_level'] = $educational_level;

        return $this;
    }

    /**
     * Gets emplyment_status
     *
     * @return string|null
     */
    public function getEmplymentStatus()
    {
        return $this->container['emplyment_status'];
    }

    /**
     * Sets emplyment_status
     *
     * @param string|null $emplyment_status emplyment_status
     *
     * @return self
     */
    public function setEmplymentStatus($emplyment_status)
    {

        if (is_null($emplyment_status)) {
            throw new \InvalidArgumentException('non-nullable emplyment_status cannot be null');
        }

        $this->container['emplyment_status'] = $emplyment_status;

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
     * Gets height
     *
     * @return string|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string|null $height height
     *
     * @return self
     */
    public function setHeight($height)
    {

        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }

        $this->container['height'] = $height;

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
     * Gets lga
     *
     * @return string|null
     */
    public function getLga()
    {
        return $this->container['lga'];
    }

    /**
     * Sets lga
     *
     * @param string|null $lga lga
     *
     * @return self
     */
    public function setLga($lga)
    {

        if (is_null($lga)) {
            throw new \InvalidArgumentException('non-nullable lga cannot be null');
        }

        $this->container['lga'] = $lga;

        return $this;
    }

    /**
     * Gets marital_status
     *
     * @return string|null
     */
    public function getMaritalStatus()
    {
        return $this->container['marital_status'];
    }

    /**
     * Sets marital_status
     *
     * @param string|null $marital_status marital_status
     *
     * @return self
     */
    public function setMaritalStatus($marital_status)
    {

        if (is_null($marital_status)) {
            throw new \InvalidArgumentException('non-nullable marital_status cannot be null');
        }

        $this->container['marital_status'] = $marital_status;

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
     * Gets msisdn
     *
     * @return string|null
     */
    public function getMsisdn()
    {
        return $this->container['msisdn'];
    }

    /**
     * Sets msisdn
     *
     * @param string|null $msisdn msisdn
     *
     * @return self
     */
    public function setMsisdn($msisdn)
    {

        if (is_null($msisdn)) {
            throw new \InvalidArgumentException('non-nullable msisdn cannot be null');
        }

        $this->container['msisdn'] = $msisdn;

        return $this;
    }

    /**
     * Gets nin
     *
     * @return string|null
     */
    public function getNin()
    {
        return $this->container['nin'];
    }

    /**
     * Sets nin
     *
     * @param string|null $nin nin
     *
     * @return self
     */
    public function setNin($nin)
    {

        if (is_null($nin)) {
            throw new \InvalidArgumentException('non-nullable nin cannot be null');
        }

        $this->container['nin'] = $nin;

        return $this;
    }

    /**
     * Gets nspoken_lang
     *
     * @return string|null
     */
    public function getNspokenLang()
    {
        return $this->container['nspoken_lang'];
    }

    /**
     * Sets nspoken_lang
     *
     * @param string|null $nspoken_lang nspoken_lang
     *
     * @return self
     */
    public function setNspokenLang($nspoken_lang)
    {

        if (is_null($nspoken_lang)) {
            throw new \InvalidArgumentException('non-nullable nspoken_lang cannot be null');
        }

        $this->container['nspoken_lang'] = $nspoken_lang;

        return $this;
    }

    /**
     * Gets ospokenlang
     *
     * @return string|null
     */
    public function getOspokenlang()
    {
        return $this->container['ospokenlang'];
    }

    /**
     * Sets ospokenlang
     *
     * @param string|null $ospokenlang ospokenlang
     *
     * @return self
     */
    public function setOspokenlang($ospokenlang)
    {

        if (is_null($ospokenlang)) {
            throw new \InvalidArgumentException('non-nullable ospokenlang cannot be null');
        }

        $this->container['ospokenlang'] = $ospokenlang;

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
     * Gets profession
     *
     * @return string|null
     */
    public function getProfession()
    {
        return $this->container['profession'];
    }

    /**
     * Sets profession
     *
     * @param string|null $profession profession
     *
     * @return self
     */
    public function setProfession($profession)
    {

        if (is_null($profession)) {
            throw new \InvalidArgumentException('non-nullable profession cannot be null');
        }

        $this->container['profession'] = $profession;

        return $this;
    }

    /**
     * Gets religion
     *
     * @return string|null
     */
    public function getReligion()
    {
        return $this->container['religion'];
    }

    /**
     * Sets religion
     *
     * @param string|null $religion religion
     *
     * @return self
     */
    public function setReligion($religion)
    {

        if (is_null($religion)) {
            throw new \InvalidArgumentException('non-nullable religion cannot be null');
        }

        $this->container['religion'] = $religion;

        return $this;
    }

    /**
     * Gets residence_address_line1
     *
     * @return string|null
     */
    public function getResidenceAddressLine1()
    {
        return $this->container['residence_address_line1'];
    }

    /**
     * Sets residence_address_line1
     *
     * @param string|null $residence_address_line1 residence_address_line1
     *
     * @return self
     */
    public function setResidenceAddressLine1($residence_address_line1)
    {

        if (is_null($residence_address_line1)) {
            throw new \InvalidArgumentException('non-nullable residence_address_line1 cannot be null');
        }

        $this->container['residence_address_line1'] = $residence_address_line1;

        return $this;
    }

    /**
     * Gets residence_lga
     *
     * @return string|null
     */
    public function getResidenceLga()
    {
        return $this->container['residence_lga'];
    }

    /**
     * Sets residence_lga
     *
     * @param string|null $residence_lga residence_lga
     *
     * @return self
     */
    public function setResidenceLga($residence_lga)
    {

        if (is_null($residence_lga)) {
            throw new \InvalidArgumentException('non-nullable residence_lga cannot be null');
        }

        $this->container['residence_lga'] = $residence_lga;

        return $this;
    }

    /**
     * Gets residence_state
     *
     * @return string|null
     */
    public function getResidenceState()
    {
        return $this->container['residence_state'];
    }

    /**
     * Sets residence_state
     *
     * @param string|null $residence_state residence_state
     *
     * @return self
     */
    public function setResidenceState($residence_state)
    {

        if (is_null($residence_state)) {
            throw new \InvalidArgumentException('non-nullable residence_state cannot be null');
        }

        $this->container['residence_state'] = $residence_state;

        return $this;
    }

    /**
     * Gets residence_status
     *
     * @return string|null
     */
    public function getResidenceStatus()
    {
        return $this->container['residence_status'];
    }

    /**
     * Sets residence_status
     *
     * @param string|null $residence_status residence_status
     *
     * @return self
     */
    public function setResidenceStatus($residence_status)
    {

        if (is_null($residence_status)) {
            throw new \InvalidArgumentException('non-nullable residence_status cannot be null');
        }

        $this->container['residence_status'] = $residence_status;

        return $this;
    }

    /**
     * Gets residence_town
     *
     * @return string|null
     */
    public function getResidenceTown()
    {
        return $this->container['residence_town'];
    }

    /**
     * Sets residence_town
     *
     * @param string|null $residence_town residence_town
     *
     * @return self
     */
    public function setResidenceTown($residence_town)
    {

        if (is_null($residence_town)) {
            throw new \InvalidArgumentException('non-nullable residence_town cannot be null');
        }

        $this->container['residence_town'] = $residence_town;

        return $this;
    }

    /**
     * Gets self_origin_lga
     *
     * @return string|null
     */
    public function getSelfOriginLga()
    {
        return $this->container['self_origin_lga'];
    }

    /**
     * Sets self_origin_lga
     *
     * @param string|null $self_origin_lga self_origin_lga
     *
     * @return self
     */
    public function setSelfOriginLga($self_origin_lga)
    {

        if (is_null($self_origin_lga)) {
            throw new \InvalidArgumentException('non-nullable self_origin_lga cannot be null');
        }

        $this->container['self_origin_lga'] = $self_origin_lga;

        return $this;
    }

    /**
     * Gets self_origin_place
     *
     * @return string|null
     */
    public function getSelfOriginPlace()
    {
        return $this->container['self_origin_place'];
    }

    /**
     * Sets self_origin_place
     *
     * @param string|null $self_origin_place self_origin_place
     *
     * @return self
     */
    public function setSelfOriginPlace($self_origin_place)
    {

        if (is_null($self_origin_place)) {
            throw new \InvalidArgumentException('non-nullable self_origin_place cannot be null');
        }

        $this->container['self_origin_place'] = $self_origin_place;

        return $this;
    }

    /**
     * Gets self_origin_state
     *
     * @return string|null
     */
    public function getSelfOriginState()
    {
        return $this->container['self_origin_state'];
    }

    /**
     * Sets self_origin_state
     *
     * @param string|null $self_origin_state self_origin_state
     *
     * @return self
     */
    public function setSelfOriginState($self_origin_state)
    {

        if (is_null($self_origin_state)) {
            throw new \InvalidArgumentException('non-nullable self_origin_state cannot be null');
        }

        $this->container['self_origin_state'] = $self_origin_state;

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


