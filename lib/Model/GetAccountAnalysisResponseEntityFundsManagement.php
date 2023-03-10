<?php
/**
 * GetAccountAnalysisResponseEntityFundsManagement
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
 * GetAccountAnalysisResponseEntityFundsManagement Class Doc Comment
 *
 * @category Class
 * @package  Dojah
 * @implements \ArrayAccess<string, mixed>
 */
class GetAccountAnalysisResponseEntityFundsManagement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetAccountAnalysisResponse_entity_fundsManagement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_activity' => 'float',
        'account_sweep' => 'string',
        'average_monthly_loan_amount' => 'float',
        'average_monthly_loan_repayment_amount' => 'float',
        'gambling_rate' => 'float',
        'gambling_status' => 'string',
        'loan_inflow_amount' => 'string',
        'loan_repayment_to_inflow_amount' => 'float',
        'month_to_month_inflow_to_outflow_amount' => 'string',
        'number_of_credit_loan_transactions' => 'string',
        'number_of_debit_repayment_transactions' => 'string',
        'overall_inflow_to_outflow_amount' => 'string',
        'percent_of_inflow_irregularity' => 'float',
        'total_loan_amount' => 'float',
        'total_loan_repayment_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_activity' => null,
        'account_sweep' => null,
        'average_monthly_loan_amount' => null,
        'average_monthly_loan_repayment_amount' => null,
        'gambling_rate' => null,
        'gambling_status' => null,
        'loan_inflow_amount' => null,
        'loan_repayment_to_inflow_amount' => null,
        'month_to_month_inflow_to_outflow_amount' => null,
        'number_of_credit_loan_transactions' => null,
        'number_of_debit_repayment_transactions' => null,
        'overall_inflow_to_outflow_amount' => null,
        'percent_of_inflow_irregularity' => null,
        'total_loan_amount' => null,
        'total_loan_repayment_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_activity' => false,
		'account_sweep' => false,
		'average_monthly_loan_amount' => false,
		'average_monthly_loan_repayment_amount' => false,
		'gambling_rate' => false,
		'gambling_status' => false,
		'loan_inflow_amount' => true,
		'loan_repayment_to_inflow_amount' => false,
		'month_to_month_inflow_to_outflow_amount' => false,
		'number_of_credit_loan_transactions' => true,
		'number_of_debit_repayment_transactions' => true,
		'overall_inflow_to_outflow_amount' => false,
		'percent_of_inflow_irregularity' => false,
		'total_loan_amount' => false,
		'total_loan_repayment_amount' => false
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
        'account_activity' => 'accountActivity',
        'account_sweep' => 'accountSweep',
        'average_monthly_loan_amount' => 'averageMonthlyLoanAmount',
        'average_monthly_loan_repayment_amount' => 'averageMonthlyLoanRepaymentAmount',
        'gambling_rate' => 'gamblingRate',
        'gambling_status' => 'gamblingStatus',
        'loan_inflow_amount' => 'loanInflowAmount',
        'loan_repayment_to_inflow_amount' => 'loanRepaymentToInflowAmount',
        'month_to_month_inflow_to_outflow_amount' => 'monthToMonthInflowToOutflowAmount',
        'number_of_credit_loan_transactions' => 'numberOfCreditLoanTransactions',
        'number_of_debit_repayment_transactions' => 'numberOfDebitRepaymentTransactions',
        'overall_inflow_to_outflow_amount' => 'overallInflowToOutflowAmount',
        'percent_of_inflow_irregularity' => 'percentOfInflowIrregularity',
        'total_loan_amount' => 'totalLoanAmount',
        'total_loan_repayment_amount' => 'totalLoanRepaymentAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_activity' => 'setAccountActivity',
        'account_sweep' => 'setAccountSweep',
        'average_monthly_loan_amount' => 'setAverageMonthlyLoanAmount',
        'average_monthly_loan_repayment_amount' => 'setAverageMonthlyLoanRepaymentAmount',
        'gambling_rate' => 'setGamblingRate',
        'gambling_status' => 'setGamblingStatus',
        'loan_inflow_amount' => 'setLoanInflowAmount',
        'loan_repayment_to_inflow_amount' => 'setLoanRepaymentToInflowAmount',
        'month_to_month_inflow_to_outflow_amount' => 'setMonthToMonthInflowToOutflowAmount',
        'number_of_credit_loan_transactions' => 'setNumberOfCreditLoanTransactions',
        'number_of_debit_repayment_transactions' => 'setNumberOfDebitRepaymentTransactions',
        'overall_inflow_to_outflow_amount' => 'setOverallInflowToOutflowAmount',
        'percent_of_inflow_irregularity' => 'setPercentOfInflowIrregularity',
        'total_loan_amount' => 'setTotalLoanAmount',
        'total_loan_repayment_amount' => 'setTotalLoanRepaymentAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_activity' => 'getAccountActivity',
        'account_sweep' => 'getAccountSweep',
        'average_monthly_loan_amount' => 'getAverageMonthlyLoanAmount',
        'average_monthly_loan_repayment_amount' => 'getAverageMonthlyLoanRepaymentAmount',
        'gambling_rate' => 'getGamblingRate',
        'gambling_status' => 'getGamblingStatus',
        'loan_inflow_amount' => 'getLoanInflowAmount',
        'loan_repayment_to_inflow_amount' => 'getLoanRepaymentToInflowAmount',
        'month_to_month_inflow_to_outflow_amount' => 'getMonthToMonthInflowToOutflowAmount',
        'number_of_credit_loan_transactions' => 'getNumberOfCreditLoanTransactions',
        'number_of_debit_repayment_transactions' => 'getNumberOfDebitRepaymentTransactions',
        'overall_inflow_to_outflow_amount' => 'getOverallInflowToOutflowAmount',
        'percent_of_inflow_irregularity' => 'getPercentOfInflowIrregularity',
        'total_loan_amount' => 'getTotalLoanAmount',
        'total_loan_repayment_amount' => 'getTotalLoanRepaymentAmount'
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
        $this->setIfExists('account_activity', $data ?? [], null);
        $this->setIfExists('account_sweep', $data ?? [], null);
        $this->setIfExists('average_monthly_loan_amount', $data ?? [], null);
        $this->setIfExists('average_monthly_loan_repayment_amount', $data ?? [], null);
        $this->setIfExists('gambling_rate', $data ?? [], null);
        $this->setIfExists('gambling_status', $data ?? [], null);
        $this->setIfExists('loan_inflow_amount', $data ?? [], null);
        $this->setIfExists('loan_repayment_to_inflow_amount', $data ?? [], null);
        $this->setIfExists('month_to_month_inflow_to_outflow_amount', $data ?? [], null);
        $this->setIfExists('number_of_credit_loan_transactions', $data ?? [], null);
        $this->setIfExists('number_of_debit_repayment_transactions', $data ?? [], null);
        $this->setIfExists('overall_inflow_to_outflow_amount', $data ?? [], null);
        $this->setIfExists('percent_of_inflow_irregularity', $data ?? [], null);
        $this->setIfExists('total_loan_amount', $data ?? [], null);
        $this->setIfExists('total_loan_repayment_amount', $data ?? [], null);
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
     * Gets account_activity
     *
     * @return float|null
     */
    public function getAccountActivity()
    {
        return $this->container['account_activity'];
    }

    /**
     * Sets account_activity
     *
     * @param float|null $account_activity account_activity
     *
     * @return self
     */
    public function setAccountActivity($account_activity)
    {

        if (is_null($account_activity)) {
            throw new \InvalidArgumentException('non-nullable account_activity cannot be null');
        }

        $this->container['account_activity'] = $account_activity;

        return $this;
    }

    /**
     * Gets account_sweep
     *
     * @return string|null
     */
    public function getAccountSweep()
    {
        return $this->container['account_sweep'];
    }

    /**
     * Sets account_sweep
     *
     * @param string|null $account_sweep account_sweep
     *
     * @return self
     */
    public function setAccountSweep($account_sweep)
    {

        if (is_null($account_sweep)) {
            throw new \InvalidArgumentException('non-nullable account_sweep cannot be null');
        }

        $this->container['account_sweep'] = $account_sweep;

        return $this;
    }

    /**
     * Gets average_monthly_loan_amount
     *
     * @return float|null
     */
    public function getAverageMonthlyLoanAmount()
    {
        return $this->container['average_monthly_loan_amount'];
    }

    /**
     * Sets average_monthly_loan_amount
     *
     * @param float|null $average_monthly_loan_amount average_monthly_loan_amount
     *
     * @return self
     */
    public function setAverageMonthlyLoanAmount($average_monthly_loan_amount)
    {

        if (is_null($average_monthly_loan_amount)) {
            throw new \InvalidArgumentException('non-nullable average_monthly_loan_amount cannot be null');
        }

        $this->container['average_monthly_loan_amount'] = $average_monthly_loan_amount;

        return $this;
    }

    /**
     * Gets average_monthly_loan_repayment_amount
     *
     * @return float|null
     */
    public function getAverageMonthlyLoanRepaymentAmount()
    {
        return $this->container['average_monthly_loan_repayment_amount'];
    }

    /**
     * Sets average_monthly_loan_repayment_amount
     *
     * @param float|null $average_monthly_loan_repayment_amount average_monthly_loan_repayment_amount
     *
     * @return self
     */
    public function setAverageMonthlyLoanRepaymentAmount($average_monthly_loan_repayment_amount)
    {

        if (is_null($average_monthly_loan_repayment_amount)) {
            throw new \InvalidArgumentException('non-nullable average_monthly_loan_repayment_amount cannot be null');
        }

        $this->container['average_monthly_loan_repayment_amount'] = $average_monthly_loan_repayment_amount;

        return $this;
    }

    /**
     * Gets gambling_rate
     *
     * @return float|null
     */
    public function getGamblingRate()
    {
        return $this->container['gambling_rate'];
    }

    /**
     * Sets gambling_rate
     *
     * @param float|null $gambling_rate gambling_rate
     *
     * @return self
     */
    public function setGamblingRate($gambling_rate)
    {

        if (is_null($gambling_rate)) {
            throw new \InvalidArgumentException('non-nullable gambling_rate cannot be null');
        }

        $this->container['gambling_rate'] = $gambling_rate;

        return $this;
    }

    /**
     * Gets gambling_status
     *
     * @return string|null
     */
    public function getGamblingStatus()
    {
        return $this->container['gambling_status'];
    }

    /**
     * Sets gambling_status
     *
     * @param string|null $gambling_status gambling_status
     *
     * @return self
     */
    public function setGamblingStatus($gambling_status)
    {

        if (is_null($gambling_status)) {
            throw new \InvalidArgumentException('non-nullable gambling_status cannot be null');
        }

        $this->container['gambling_status'] = $gambling_status;

        return $this;
    }

    /**
     * Gets loan_inflow_amount
     *
     * @return string|null
     */
    public function getLoanInflowAmount()
    {
        return $this->container['loan_inflow_amount'];
    }

    /**
     * Sets loan_inflow_amount
     *
     * @param string|null $loan_inflow_amount loan_inflow_amount
     *
     * @return self
     */
    public function setLoanInflowAmount($loan_inflow_amount)
    {

        if (is_null($loan_inflow_amount)) {
            array_push($this->openAPINullablesSetToNull, 'loan_inflow_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('loan_inflow_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['loan_inflow_amount'] = $loan_inflow_amount;

        return $this;
    }

    /**
     * Gets loan_repayment_to_inflow_amount
     *
     * @return float|null
     */
    public function getLoanRepaymentToInflowAmount()
    {
        return $this->container['loan_repayment_to_inflow_amount'];
    }

    /**
     * Sets loan_repayment_to_inflow_amount
     *
     * @param float|null $loan_repayment_to_inflow_amount loan_repayment_to_inflow_amount
     *
     * @return self
     */
    public function setLoanRepaymentToInflowAmount($loan_repayment_to_inflow_amount)
    {

        if (is_null($loan_repayment_to_inflow_amount)) {
            throw new \InvalidArgumentException('non-nullable loan_repayment_to_inflow_amount cannot be null');
        }

        $this->container['loan_repayment_to_inflow_amount'] = $loan_repayment_to_inflow_amount;

        return $this;
    }

    /**
     * Gets month_to_month_inflow_to_outflow_amount
     *
     * @return string|null
     */
    public function getMonthToMonthInflowToOutflowAmount()
    {
        return $this->container['month_to_month_inflow_to_outflow_amount'];
    }

    /**
     * Sets month_to_month_inflow_to_outflow_amount
     *
     * @param string|null $month_to_month_inflow_to_outflow_amount month_to_month_inflow_to_outflow_amount
     *
     * @return self
     */
    public function setMonthToMonthInflowToOutflowAmount($month_to_month_inflow_to_outflow_amount)
    {

        if (is_null($month_to_month_inflow_to_outflow_amount)) {
            throw new \InvalidArgumentException('non-nullable month_to_month_inflow_to_outflow_amount cannot be null');
        }

        $this->container['month_to_month_inflow_to_outflow_amount'] = $month_to_month_inflow_to_outflow_amount;

        return $this;
    }

    /**
     * Gets number_of_credit_loan_transactions
     *
     * @return string|null
     */
    public function getNumberOfCreditLoanTransactions()
    {
        return $this->container['number_of_credit_loan_transactions'];
    }

    /**
     * Sets number_of_credit_loan_transactions
     *
     * @param string|null $number_of_credit_loan_transactions number_of_credit_loan_transactions
     *
     * @return self
     */
    public function setNumberOfCreditLoanTransactions($number_of_credit_loan_transactions)
    {

        if (is_null($number_of_credit_loan_transactions)) {
            array_push($this->openAPINullablesSetToNull, 'number_of_credit_loan_transactions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_of_credit_loan_transactions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['number_of_credit_loan_transactions'] = $number_of_credit_loan_transactions;

        return $this;
    }

    /**
     * Gets number_of_debit_repayment_transactions
     *
     * @return string|null
     */
    public function getNumberOfDebitRepaymentTransactions()
    {
        return $this->container['number_of_debit_repayment_transactions'];
    }

    /**
     * Sets number_of_debit_repayment_transactions
     *
     * @param string|null $number_of_debit_repayment_transactions number_of_debit_repayment_transactions
     *
     * @return self
     */
    public function setNumberOfDebitRepaymentTransactions($number_of_debit_repayment_transactions)
    {

        if (is_null($number_of_debit_repayment_transactions)) {
            array_push($this->openAPINullablesSetToNull, 'number_of_debit_repayment_transactions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_of_debit_repayment_transactions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['number_of_debit_repayment_transactions'] = $number_of_debit_repayment_transactions;

        return $this;
    }

    /**
     * Gets overall_inflow_to_outflow_amount
     *
     * @return string|null
     */
    public function getOverallInflowToOutflowAmount()
    {
        return $this->container['overall_inflow_to_outflow_amount'];
    }

    /**
     * Sets overall_inflow_to_outflow_amount
     *
     * @param string|null $overall_inflow_to_outflow_amount overall_inflow_to_outflow_amount
     *
     * @return self
     */
    public function setOverallInflowToOutflowAmount($overall_inflow_to_outflow_amount)
    {

        if (is_null($overall_inflow_to_outflow_amount)) {
            throw new \InvalidArgumentException('non-nullable overall_inflow_to_outflow_amount cannot be null');
        }

        $this->container['overall_inflow_to_outflow_amount'] = $overall_inflow_to_outflow_amount;

        return $this;
    }

    /**
     * Gets percent_of_inflow_irregularity
     *
     * @return float|null
     */
    public function getPercentOfInflowIrregularity()
    {
        return $this->container['percent_of_inflow_irregularity'];
    }

    /**
     * Sets percent_of_inflow_irregularity
     *
     * @param float|null $percent_of_inflow_irregularity percent_of_inflow_irregularity
     *
     * @return self
     */
    public function setPercentOfInflowIrregularity($percent_of_inflow_irregularity)
    {

        if (is_null($percent_of_inflow_irregularity)) {
            throw new \InvalidArgumentException('non-nullable percent_of_inflow_irregularity cannot be null');
        }

        $this->container['percent_of_inflow_irregularity'] = $percent_of_inflow_irregularity;

        return $this;
    }

    /**
     * Gets total_loan_amount
     *
     * @return float|null
     */
    public function getTotalLoanAmount()
    {
        return $this->container['total_loan_amount'];
    }

    /**
     * Sets total_loan_amount
     *
     * @param float|null $total_loan_amount total_loan_amount
     *
     * @return self
     */
    public function setTotalLoanAmount($total_loan_amount)
    {

        if (is_null($total_loan_amount)) {
            throw new \InvalidArgumentException('non-nullable total_loan_amount cannot be null');
        }

        $this->container['total_loan_amount'] = $total_loan_amount;

        return $this;
    }

    /**
     * Gets total_loan_repayment_amount
     *
     * @return float|null
     */
    public function getTotalLoanRepaymentAmount()
    {
        return $this->container['total_loan_repayment_amount'];
    }

    /**
     * Sets total_loan_repayment_amount
     *
     * @param float|null $total_loan_repayment_amount total_loan_repayment_amount
     *
     * @return self
     */
    public function setTotalLoanRepaymentAmount($total_loan_repayment_amount)
    {

        if (is_null($total_loan_repayment_amount)) {
            throw new \InvalidArgumentException('non-nullable total_loan_repayment_amount cannot be null');
        }

        $this->container['total_loan_repayment_amount'] = $total_loan_repayment_amount;

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


