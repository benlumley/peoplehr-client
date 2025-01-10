<?php
/**
 * CreateNewSalaryParameter
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PeopleHR API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 3.1
 * Contact: customerservices@peoplehr.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CreateNewSalaryParameter Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateNewSalaryParameter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateNewSalaryParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key' => 'string',
        'action' => 'string',
        'employee_id' => 'string',
        'effective_from' => '\DateTime',
        'salary_type' => '\OpenAPI\Client\Model\SalaryType',
        'payment_frequency' => '\OpenAPI\Client\Model\PaymentFrequency',
        'salary_amount' => 'int',
        'currency_code' => 'string',
        'change_reason' => 'string',
        'comments' => 'string',
        'deductions' => '\OpenAPI\Client\Model\DeductionsArrayInner[]',
        'entitlements' => '\OpenAPI\Client\Model\EntitlementsArrayInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'api_key' => null,
        'action' => null,
        'employee_id' => null,
        'effective_from' => 'date',
        'salary_type' => null,
        'payment_frequency' => null,
        'salary_amount' => null,
        'currency_code' => null,
        'change_reason' => null,
        'comments' => null,
        'deductions' => null,
        'entitlements' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'api_key' => false,
        'action' => false,
        'employee_id' => false,
        'effective_from' => false,
        'salary_type' => false,
        'payment_frequency' => false,
        'salary_amount' => false,
        'currency_code' => false,
        'change_reason' => false,
        'comments' => false,
        'deductions' => false,
        'entitlements' => false
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
        'api_key' => 'APIKey',
        'action' => 'Action',
        'employee_id' => 'EmployeeId',
        'effective_from' => 'EffectiveFrom',
        'salary_type' => 'SalaryType',
        'payment_frequency' => 'PaymentFrequency',
        'salary_amount' => 'SalaryAmount',
        'currency_code' => 'CurrencyCode',
        'change_reason' => 'ChangeReason',
        'comments' => 'Comments',
        'deductions' => 'Deductions',
        'entitlements' => 'Entitlements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_key' => 'setApiKey',
        'action' => 'setAction',
        'employee_id' => 'setEmployeeId',
        'effective_from' => 'setEffectiveFrom',
        'salary_type' => 'setSalaryType',
        'payment_frequency' => 'setPaymentFrequency',
        'salary_amount' => 'setSalaryAmount',
        'currency_code' => 'setCurrencyCode',
        'change_reason' => 'setChangeReason',
        'comments' => 'setComments',
        'deductions' => 'setDeductions',
        'entitlements' => 'setEntitlements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_key' => 'getApiKey',
        'action' => 'getAction',
        'employee_id' => 'getEmployeeId',
        'effective_from' => 'getEffectiveFrom',
        'salary_type' => 'getSalaryType',
        'payment_frequency' => 'getPaymentFrequency',
        'salary_amount' => 'getSalaryAmount',
        'currency_code' => 'getCurrencyCode',
        'change_reason' => 'getChangeReason',
        'comments' => 'getComments',
        'deductions' => 'getDeductions',
        'entitlements' => 'getEntitlements'
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
        $this->setIfExists('api_key', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('effective_from', $data ?? [], null);
        $this->setIfExists('salary_type', $data ?? [], null);
        $this->setIfExists('payment_frequency', $data ?? [], null);
        $this->setIfExists('salary_amount', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('change_reason', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('deductions', $data ?? [], null);
        $this->setIfExists('entitlements', $data ?? [], null);
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

        if ($this->container['api_key'] === null) {
            $invalidProperties[] = "'api_key' can't be null";
        }
        if ((mb_strlen($this->container['api_key']) > 50)) {
            $invalidProperties[] = "invalid value for 'api_key', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
        }
        if ((mb_strlen($this->container['employee_id']) > 15)) {
            $invalidProperties[] = "invalid value for 'employee_id', the character length must be smaller than or equal to 15.";
        }

        if ($this->container['effective_from'] === null) {
            $invalidProperties[] = "'effective_from' can't be null";
        }
        if ($this->container['salary_type'] === null) {
            $invalidProperties[] = "'salary_type' can't be null";
        }
        if ($this->container['payment_frequency'] === null) {
            $invalidProperties[] = "'payment_frequency' can't be null";
        }
        if ($this->container['salary_amount'] === null) {
            $invalidProperties[] = "'salary_amount' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['change_reason'] === null) {
            $invalidProperties[] = "'change_reason' can't be null";
        }
        if ($this->container['deductions'] === null) {
            $invalidProperties[] = "'deductions' can't be null";
        }
        if ($this->container['entitlements'] === null) {
            $invalidProperties[] = "'entitlements' can't be null";
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
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key APIKey for Create New Salary of employee
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }
        if ((mb_strlen($api_key) > 50)) {
            throw new \InvalidArgumentException('invalid length for $api_key when calling CreateNewSalaryParameter., must be smaller than or equal to 50.');
        }

        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action Action name = CreateNewSalary
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id Employee Id for create new salary
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        if ((mb_strlen($employee_id) > 15)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling CreateNewSalaryParameter., must be smaller than or equal to 15.');
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets effective_from
     *
     * @return \DateTime
     */
    public function getEffectiveFrom()
    {
        return $this->container['effective_from'];
    }

    /**
     * Sets effective_from
     *
     * @param \DateTime $effective_from EffectiveFrom for create new salary
     *
     * @return self
     */
    public function setEffectiveFrom($effective_from)
    {
        if (is_null($effective_from)) {
            throw new \InvalidArgumentException('non-nullable effective_from cannot be null');
        }
        $this->container['effective_from'] = $effective_from;

        return $this;
    }

    /**
     * Gets salary_type
     *
     * @return \OpenAPI\Client\Model\SalaryType
     */
    public function getSalaryType()
    {
        return $this->container['salary_type'];
    }

    /**
     * Sets salary_type
     *
     * @param \OpenAPI\Client\Model\SalaryType $salary_type SalaryType for create new salary
     *
     * @return self
     */
    public function setSalaryType($salary_type)
    {
        if (is_null($salary_type)) {
            throw new \InvalidArgumentException('non-nullable salary_type cannot be null');
        }
        $this->container['salary_type'] = $salary_type;

        return $this;
    }

    /**
     * Gets payment_frequency
     *
     * @return \OpenAPI\Client\Model\PaymentFrequency
     */
    public function getPaymentFrequency()
    {
        return $this->container['payment_frequency'];
    }

    /**
     * Sets payment_frequency
     *
     * @param \OpenAPI\Client\Model\PaymentFrequency $payment_frequency PaymentFrequency for create new salary
     *
     * @return self
     */
    public function setPaymentFrequency($payment_frequency)
    {
        if (is_null($payment_frequency)) {
            throw new \InvalidArgumentException('non-nullable payment_frequency cannot be null');
        }
        $this->container['payment_frequency'] = $payment_frequency;

        return $this;
    }

    /**
     * Gets salary_amount
     *
     * @return int
     */
    public function getSalaryAmount()
    {
        return $this->container['salary_amount'];
    }

    /**
     * Sets salary_amount
     *
     * @param int $salary_amount SalaryAmount for create new salary
     *
     * @return self
     */
    public function setSalaryAmount($salary_amount)
    {
        if (is_null($salary_amount)) {
            throw new \InvalidArgumentException('non-nullable salary_amount cannot be null');
        }
        $this->container['salary_amount'] = $salary_amount;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code CurrencyCode for create new salary
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets change_reason
     *
     * @return string
     */
    public function getChangeReason()
    {
        return $this->container['change_reason'];
    }

    /**
     * Sets change_reason
     *
     * @param string $change_reason ChangeReason for create new salary
     *
     * @return self
     */
    public function setChangeReason($change_reason)
    {
        if (is_null($change_reason)) {
            throw new \InvalidArgumentException('non-nullable change_reason cannot be null');
        }
        $this->container['change_reason'] = $change_reason;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments Comments for create new salary
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets deductions
     *
     * @return \OpenAPI\Client\Model\DeductionsArrayInner[]
     */
    public function getDeductions()
    {
        return $this->container['deductions'];
    }

    /**
     * Sets deductions
     *
     * @param \OpenAPI\Client\Model\DeductionsArrayInner[] $deductions Deductions of user Array
     *
     * @return self
     */
    public function setDeductions($deductions)
    {
        if (is_null($deductions)) {
            throw new \InvalidArgumentException('non-nullable deductions cannot be null');
        }
        $this->container['deductions'] = $deductions;

        return $this;
    }

    /**
     * Gets entitlements
     *
     * @return \OpenAPI\Client\Model\EntitlementsArrayInner[]
     */
    public function getEntitlements()
    {
        return $this->container['entitlements'];
    }

    /**
     * Sets entitlements
     *
     * @param \OpenAPI\Client\Model\EntitlementsArrayInner[] $entitlements Entitlements of user
     *
     * @return self
     */
    public function setEntitlements($entitlements)
    {
        if (is_null($entitlements)) {
            throw new \InvalidArgumentException('non-nullable entitlements cannot be null');
        }
        $this->container['entitlements'] = $entitlements;

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


