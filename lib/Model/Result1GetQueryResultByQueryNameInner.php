<?php
/**
 * Result1GetQueryResultByQueryNameInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  PeopleHR
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

namespace PeopleHR\Model;

use \ArrayAccess;
use \PeopleHR\ObjectSerializer;

/**
 * Result1GetQueryResultByQueryNameInner Class Doc Comment
 *
 * @category Class
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Result1GetQueryResultByQueryNameInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Result1GetQueryResultByQueryName_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'annual_leave_start_date' => '\DateTime',
        'annual_leave_end_date' => '\DateTime',
        'allowance_type' => 'string',
        'allowance__days' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employee_id' => null,
        'first_name' => null,
        'last_name' => null,
        'annual_leave_start_date' => 'date',
        'annual_leave_end_date' => 'date',
        'allowance_type' => null,
        'allowance__days' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'employee_id' => false,
        'first_name' => false,
        'last_name' => false,
        'annual_leave_start_date' => false,
        'annual_leave_end_date' => false,
        'allowance_type' => false,
        'allowance__days' => false
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
        'employee_id' => 'Employee Id',
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'annual_leave_start_date' => 'Annual Leave Start Date',
        'annual_leave_end_date' => 'Annual Leave End Date',
        'allowance_type' => 'Allowance Type',
        'allowance__days' => 'Allowance (Days)'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'annual_leave_start_date' => 'setAnnualLeaveStartDate',
        'annual_leave_end_date' => 'setAnnualLeaveEndDate',
        'allowance_type' => 'setAllowanceType',
        'allowance__days' => 'setAllowanceDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'annual_leave_start_date' => 'getAnnualLeaveStartDate',
        'annual_leave_end_date' => 'getAnnualLeaveEndDate',
        'allowance_type' => 'getAllowanceType',
        'allowance__days' => 'getAllowanceDays'
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
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('annual_leave_start_date', $data ?? [], null);
        $this->setIfExists('annual_leave_end_date', $data ?? [], null);
        $this->setIfExists('allowance_type', $data ?? [], null);
        $this->setIfExists('allowance__days', $data ?? [], null);
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
     * Gets employee_id
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string|null $employee_id Employee id value
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        $this->container['employee_id'] = $employee_id;

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
     * @param string|null $first_name First name value
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
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name value
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
     * Gets annual_leave_start_date
     *
     * @return \DateTime|null
     */
    public function getAnnualLeaveStartDate()
    {
        return $this->container['annual_leave_start_date'];
    }

    /**
     * Sets annual_leave_start_date
     *
     * @param \DateTime|null $annual_leave_start_date Annual leave start date value
     *
     * @return self
     */
    public function setAnnualLeaveStartDate($annual_leave_start_date)
    {
        if (is_null($annual_leave_start_date)) {
            throw new \InvalidArgumentException('non-nullable annual_leave_start_date cannot be null');
        }
        $this->container['annual_leave_start_date'] = $annual_leave_start_date;

        return $this;
    }

    /**
     * Gets annual_leave_end_date
     *
     * @return \DateTime|null
     */
    public function getAnnualLeaveEndDate()
    {
        return $this->container['annual_leave_end_date'];
    }

    /**
     * Sets annual_leave_end_date
     *
     * @param \DateTime|null $annual_leave_end_date Annual leave end date value
     *
     * @return self
     */
    public function setAnnualLeaveEndDate($annual_leave_end_date)
    {
        if (is_null($annual_leave_end_date)) {
            throw new \InvalidArgumentException('non-nullable annual_leave_end_date cannot be null');
        }
        $this->container['annual_leave_end_date'] = $annual_leave_end_date;

        return $this;
    }

    /**
     * Gets allowance_type
     *
     * @return string|null
     */
    public function getAllowanceType()
    {
        return $this->container['allowance_type'];
    }

    /**
     * Sets allowance_type
     *
     * @param string|null $allowance_type Allowance type value
     *
     * @return self
     */
    public function setAllowanceType($allowance_type)
    {
        if (is_null($allowance_type)) {
            throw new \InvalidArgumentException('non-nullable allowance_type cannot be null');
        }
        $this->container['allowance_type'] = $allowance_type;

        return $this;
    }

    /**
     * Gets allowance__days
     *
     * @return float|null
     */
    public function getAllowanceDays()
    {
        return $this->container['allowance__days'];
    }

    /**
     * Sets allowance__days
     *
     * @param float|null $allowance__days Allowance (days) value
     *
     * @return self
     */
    public function setAllowanceDays($allowance__days)
    {
        if (is_null($allowance__days)) {
            throw new \InvalidArgumentException('non-nullable allowance__days cannot be null');
        }
        $this->container['allowance__days'] = $allowance__days;

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


