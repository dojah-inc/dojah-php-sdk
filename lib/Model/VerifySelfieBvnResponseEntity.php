<?php
/**
 * VerifySelfieBvnResponseEntity
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
 * VerifySelfieBvnResponseEntity Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class VerifySelfieBvnResponseEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VerifySelfieBvnResponse_entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bvn' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'date_of_birth' => 'string',
        'phone_number1' => 'string',
        'phone_number2' => 'string',
        'gender' => 'string',
        'enrollment_bank' => 'string',
        'enrollment_branch' => 'string',
        'email' => 'string',
        'lga_of_origin' => 'string',
        'lga_of_residence' => 'string',
        'marital_status' => 'string',
        'nin' => 'string',
        'name_on_card' => 'string',
        'residential_address' => 'string',
        'state_of_origin' => 'string',
        'state_of_residence' => 'string',
        'watch_listed' => 'string',
        'level_of_account' => 'string',
        'registration_date' => 'string',
        'image' => 'string',
        'selfie_verification' => '\Dojah\Model\VerifySelfieBvnResponseEntitySelfieVerification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bvn' => null,
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'date_of_birth' => null,
        'phone_number1' => null,
        'phone_number2' => null,
        'gender' => null,
        'enrollment_bank' => null,
        'enrollment_branch' => null,
        'email' => null,
        'lga_of_origin' => null,
        'lga_of_residence' => null,
        'marital_status' => null,
        'nin' => null,
        'name_on_card' => null,
        'residential_address' => null,
        'state_of_origin' => null,
        'state_of_residence' => null,
        'watch_listed' => null,
        'level_of_account' => null,
        'registration_date' => null,
        'image' => null,
        'selfie_verification' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bvn' => false,
		'first_name' => false,
		'middle_name' => false,
		'last_name' => false,
		'date_of_birth' => false,
		'phone_number1' => false,
		'phone_number2' => false,
		'gender' => false,
		'enrollment_bank' => false,
		'enrollment_branch' => false,
		'email' => false,
		'lga_of_origin' => false,
		'lga_of_residence' => false,
		'marital_status' => false,
		'nin' => false,
		'name_on_card' => false,
		'residential_address' => false,
		'state_of_origin' => false,
		'state_of_residence' => false,
		'watch_listed' => false,
		'level_of_account' => false,
		'registration_date' => false,
		'image' => false,
		'selfie_verification' => false
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
        'bvn' => 'bvn',
        'first_name' => 'first_name',
        'middle_name' => 'middle_name',
        'last_name' => 'last_name',
        'date_of_birth' => 'date_of_birth',
        'phone_number1' => 'phone_number1',
        'phone_number2' => 'phone_number2',
        'gender' => 'gender',
        'enrollment_bank' => 'enrollment_bank',
        'enrollment_branch' => 'enrollment_branch',
        'email' => 'email',
        'lga_of_origin' => 'lga_of_origin',
        'lga_of_residence' => 'lga_of_residence',
        'marital_status' => 'marital_status',
        'nin' => 'nin',
        'name_on_card' => 'name_on_card',
        'residential_address' => 'residential_address',
        'state_of_origin' => 'state_of_origin',
        'state_of_residence' => 'state_of_residence',
        'watch_listed' => 'watch_listed',
        'level_of_account' => 'level_of_account',
        'registration_date' => 'registration_date',
        'image' => 'image',
        'selfie_verification' => 'selfie_verification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bvn' => 'setBvn',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'date_of_birth' => 'setDateOfBirth',
        'phone_number1' => 'setPhoneNumber1',
        'phone_number2' => 'setPhoneNumber2',
        'gender' => 'setGender',
        'enrollment_bank' => 'setEnrollmentBank',
        'enrollment_branch' => 'setEnrollmentBranch',
        'email' => 'setEmail',
        'lga_of_origin' => 'setLgaOfOrigin',
        'lga_of_residence' => 'setLgaOfResidence',
        'marital_status' => 'setMaritalStatus',
        'nin' => 'setNin',
        'name_on_card' => 'setNameOnCard',
        'residential_address' => 'setResidentialAddress',
        'state_of_origin' => 'setStateOfOrigin',
        'state_of_residence' => 'setStateOfResidence',
        'watch_listed' => 'setWatchListed',
        'level_of_account' => 'setLevelOfAccount',
        'registration_date' => 'setRegistrationDate',
        'image' => 'setImage',
        'selfie_verification' => 'setSelfieVerification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bvn' => 'getBvn',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'date_of_birth' => 'getDateOfBirth',
        'phone_number1' => 'getPhoneNumber1',
        'phone_number2' => 'getPhoneNumber2',
        'gender' => 'getGender',
        'enrollment_bank' => 'getEnrollmentBank',
        'enrollment_branch' => 'getEnrollmentBranch',
        'email' => 'getEmail',
        'lga_of_origin' => 'getLgaOfOrigin',
        'lga_of_residence' => 'getLgaOfResidence',
        'marital_status' => 'getMaritalStatus',
        'nin' => 'getNin',
        'name_on_card' => 'getNameOnCard',
        'residential_address' => 'getResidentialAddress',
        'state_of_origin' => 'getStateOfOrigin',
        'state_of_residence' => 'getStateOfResidence',
        'watch_listed' => 'getWatchListed',
        'level_of_account' => 'getLevelOfAccount',
        'registration_date' => 'getRegistrationDate',
        'image' => 'getImage',
        'selfie_verification' => 'getSelfieVerification'
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
        $this->setIfExists('bvn', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('phone_number1', $data ?? [], null);
        $this->setIfExists('phone_number2', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('enrollment_bank', $data ?? [], null);
        $this->setIfExists('enrollment_branch', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('lga_of_origin', $data ?? [], null);
        $this->setIfExists('lga_of_residence', $data ?? [], null);
        $this->setIfExists('marital_status', $data ?? [], null);
        $this->setIfExists('nin', $data ?? [], null);
        $this->setIfExists('name_on_card', $data ?? [], null);
        $this->setIfExists('residential_address', $data ?? [], null);
        $this->setIfExists('state_of_origin', $data ?? [], null);
        $this->setIfExists('state_of_residence', $data ?? [], null);
        $this->setIfExists('watch_listed', $data ?? [], null);
        $this->setIfExists('level_of_account', $data ?? [], null);
        $this->setIfExists('registration_date', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('selfie_verification', $data ?? [], null);
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
     * Gets bvn
     *
     * @return string|null
     */
    public function getBvn()
    {
        return $this->container['bvn'];
    }

    /**
     * Sets bvn
     *
     * @param string|null $bvn bvn
     *
     * @return self
     */
    public function setBvn($bvn)
    {

        if (is_null($bvn)) {
            throw new \InvalidArgumentException('non-nullable bvn cannot be null');
        }

        $this->container['bvn'] = $bvn;

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
     * Gets phone_number1
     *
     * @return string|null
     */
    public function getPhoneNumber1()
    {
        return $this->container['phone_number1'];
    }

    /**
     * Sets phone_number1
     *
     * @param string|null $phone_number1 phone_number1
     *
     * @return self
     */
    public function setPhoneNumber1($phone_number1)
    {

        if (is_null($phone_number1)) {
            throw new \InvalidArgumentException('non-nullable phone_number1 cannot be null');
        }

        $this->container['phone_number1'] = $phone_number1;

        return $this;
    }

    /**
     * Gets phone_number2
     *
     * @return string|null
     */
    public function getPhoneNumber2()
    {
        return $this->container['phone_number2'];
    }

    /**
     * Sets phone_number2
     *
     * @param string|null $phone_number2 phone_number2
     *
     * @return self
     */
    public function setPhoneNumber2($phone_number2)
    {

        if (is_null($phone_number2)) {
            throw new \InvalidArgumentException('non-nullable phone_number2 cannot be null');
        }

        $this->container['phone_number2'] = $phone_number2;

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
     * Gets enrollment_bank
     *
     * @return string|null
     */
    public function getEnrollmentBank()
    {
        return $this->container['enrollment_bank'];
    }

    /**
     * Sets enrollment_bank
     *
     * @param string|null $enrollment_bank enrollment_bank
     *
     * @return self
     */
    public function setEnrollmentBank($enrollment_bank)
    {

        if (is_null($enrollment_bank)) {
            throw new \InvalidArgumentException('non-nullable enrollment_bank cannot be null');
        }

        $this->container['enrollment_bank'] = $enrollment_bank;

        return $this;
    }

    /**
     * Gets enrollment_branch
     *
     * @return string|null
     */
    public function getEnrollmentBranch()
    {
        return $this->container['enrollment_branch'];
    }

    /**
     * Sets enrollment_branch
     *
     * @param string|null $enrollment_branch enrollment_branch
     *
     * @return self
     */
    public function setEnrollmentBranch($enrollment_branch)
    {

        if (is_null($enrollment_branch)) {
            throw new \InvalidArgumentException('non-nullable enrollment_branch cannot be null');
        }

        $this->container['enrollment_branch'] = $enrollment_branch;

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
     * Gets lga_of_origin
     *
     * @return string|null
     */
    public function getLgaOfOrigin()
    {
        return $this->container['lga_of_origin'];
    }

    /**
     * Sets lga_of_origin
     *
     * @param string|null $lga_of_origin lga_of_origin
     *
     * @return self
     */
    public function setLgaOfOrigin($lga_of_origin)
    {

        if (is_null($lga_of_origin)) {
            throw new \InvalidArgumentException('non-nullable lga_of_origin cannot be null');
        }

        $this->container['lga_of_origin'] = $lga_of_origin;

        return $this;
    }

    /**
     * Gets lga_of_residence
     *
     * @return string|null
     */
    public function getLgaOfResidence()
    {
        return $this->container['lga_of_residence'];
    }

    /**
     * Sets lga_of_residence
     *
     * @param string|null $lga_of_residence lga_of_residence
     *
     * @return self
     */
    public function setLgaOfResidence($lga_of_residence)
    {

        if (is_null($lga_of_residence)) {
            throw new \InvalidArgumentException('non-nullable lga_of_residence cannot be null');
        }

        $this->container['lga_of_residence'] = $lga_of_residence;

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
     * Gets name_on_card
     *
     * @return string|null
     */
    public function getNameOnCard()
    {
        return $this->container['name_on_card'];
    }

    /**
     * Sets name_on_card
     *
     * @param string|null $name_on_card name_on_card
     *
     * @return self
     */
    public function setNameOnCard($name_on_card)
    {

        if (is_null($name_on_card)) {
            throw new \InvalidArgumentException('non-nullable name_on_card cannot be null');
        }

        $this->container['name_on_card'] = $name_on_card;

        return $this;
    }

    /**
     * Gets residential_address
     *
     * @return string|null
     */
    public function getResidentialAddress()
    {
        return $this->container['residential_address'];
    }

    /**
     * Sets residential_address
     *
     * @param string|null $residential_address residential_address
     *
     * @return self
     */
    public function setResidentialAddress($residential_address)
    {

        if (is_null($residential_address)) {
            throw new \InvalidArgumentException('non-nullable residential_address cannot be null');
        }

        $this->container['residential_address'] = $residential_address;

        return $this;
    }

    /**
     * Gets state_of_origin
     *
     * @return string|null
     */
    public function getStateOfOrigin()
    {
        return $this->container['state_of_origin'];
    }

    /**
     * Sets state_of_origin
     *
     * @param string|null $state_of_origin state_of_origin
     *
     * @return self
     */
    public function setStateOfOrigin($state_of_origin)
    {

        if (is_null($state_of_origin)) {
            throw new \InvalidArgumentException('non-nullable state_of_origin cannot be null');
        }

        $this->container['state_of_origin'] = $state_of_origin;

        return $this;
    }

    /**
     * Gets state_of_residence
     *
     * @return string|null
     */
    public function getStateOfResidence()
    {
        return $this->container['state_of_residence'];
    }

    /**
     * Sets state_of_residence
     *
     * @param string|null $state_of_residence state_of_residence
     *
     * @return self
     */
    public function setStateOfResidence($state_of_residence)
    {

        if (is_null($state_of_residence)) {
            throw new \InvalidArgumentException('non-nullable state_of_residence cannot be null');
        }

        $this->container['state_of_residence'] = $state_of_residence;

        return $this;
    }

    /**
     * Gets watch_listed
     *
     * @return string|null
     */
    public function getWatchListed()
    {
        return $this->container['watch_listed'];
    }

    /**
     * Sets watch_listed
     *
     * @param string|null $watch_listed watch_listed
     *
     * @return self
     */
    public function setWatchListed($watch_listed)
    {

        if (is_null($watch_listed)) {
            throw new \InvalidArgumentException('non-nullable watch_listed cannot be null');
        }

        $this->container['watch_listed'] = $watch_listed;

        return $this;
    }

    /**
     * Gets level_of_account
     *
     * @return string|null
     */
    public function getLevelOfAccount()
    {
        return $this->container['level_of_account'];
    }

    /**
     * Sets level_of_account
     *
     * @param string|null $level_of_account level_of_account
     *
     * @return self
     */
    public function setLevelOfAccount($level_of_account)
    {

        if (is_null($level_of_account)) {
            throw new \InvalidArgumentException('non-nullable level_of_account cannot be null');
        }

        $this->container['level_of_account'] = $level_of_account;

        return $this;
    }

    /**
     * Gets registration_date
     *
     * @return string|null
     */
    public function getRegistrationDate()
    {
        return $this->container['registration_date'];
    }

    /**
     * Sets registration_date
     *
     * @param string|null $registration_date registration_date
     *
     * @return self
     */
    public function setRegistrationDate($registration_date)
    {

        if (is_null($registration_date)) {
            throw new \InvalidArgumentException('non-nullable registration_date cannot be null');
        }

        $this->container['registration_date'] = $registration_date;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {

        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }

        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets selfie_verification
     *
     * @return \Dojah\Model\VerifySelfieBvnResponseEntitySelfieVerification|null
     */
    public function getSelfieVerification()
    {
        return $this->container['selfie_verification'];
    }

    /**
     * Sets selfie_verification
     *
     * @param \Dojah\Model\VerifySelfieBvnResponseEntitySelfieVerification|null $selfie_verification selfie_verification
     *
     * @return self
     */
    public function setSelfieVerification($selfie_verification)
    {

        if (is_null($selfie_verification)) {
            throw new \InvalidArgumentException('non-nullable selfie_verification cannot be null');
        }

        $this->container['selfie_verification'] = $selfie_verification;

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


