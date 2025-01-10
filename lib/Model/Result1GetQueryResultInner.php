<?php
/**
 * Result1GetQueryResultInner
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
 * Result1GetQueryResultInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Result1GetQueryResultInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Result1GetQueryResult_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'holiday_start_date' => '\DateTime',
        'holiday_end_date' => '\DateTime',
        'holiday_type' => 'string',
        'holiday_duration_type' => 'string',
        'part_of_the_day' => 'string',
        'holiday_duration__days' => 'float',
        'holiday_duration__hrs' => 'string',
        'holiday_comments' => 'string',
        'holiday_status' => 'string'
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
        'holiday_start_date' => 'date',
        'holiday_end_date' => 'date',
        'holiday_type' => null,
        'holiday_duration_type' => null,
        'part_of_the_day' => null,
        'holiday_duration__days' => 'decimal',
        'holiday_duration__hrs' => null,
        'holiday_comments' => null,
        'holiday_status' => null
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
        'holiday_start_date' => false,
        'holiday_end_date' => false,
        'holiday_type' => false,
        'holiday_duration_type' => false,
        'part_of_the_day' => false,
        'holiday_duration__days' => false,
        'holiday_duration__hrs' => false,
        'holiday_comments' => false,
        'holiday_status' => false
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
        'holiday_start_date' => 'Holiday Start Date',
        'holiday_end_date' => 'Holiday End Date',
        'holiday_type' => 'Holiday Type',
        'holiday_duration_type' => 'Holiday Duration Type',
        'part_of_the_day' => 'Part of the Day',
        'holiday_duration__days' => 'Holiday Duration (Days)',
        'holiday_duration__hrs' => 'Holiday Duration (Hrs)',
        'holiday_comments' => 'Holiday Comments',
        'holiday_status' => 'Holiday Status'
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
        'holiday_start_date' => 'setHolidayStartDate',
        'holiday_end_date' => 'setHolidayEndDate',
        'holiday_type' => 'setHolidayType',
        'holiday_duration_type' => 'setHolidayDurationType',
        'part_of_the_day' => 'setPartOfTheDay',
        'holiday_duration__days' => 'setHolidayDurationDays',
        'holiday_duration__hrs' => 'setHolidayDurationHrs',
        'holiday_comments' => 'setHolidayComments',
        'holiday_status' => 'setHolidayStatus'
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
        'holiday_start_date' => 'getHolidayStartDate',
        'holiday_end_date' => 'getHolidayEndDate',
        'holiday_type' => 'getHolidayType',
        'holiday_duration_type' => 'getHolidayDurationType',
        'part_of_the_day' => 'getPartOfTheDay',
        'holiday_duration__days' => 'getHolidayDurationDays',
        'holiday_duration__hrs' => 'getHolidayDurationHrs',
        'holiday_comments' => 'getHolidayComments',
        'holiday_status' => 'getHolidayStatus'
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
        $this->setIfExists('holiday_start_date', $data ?? [], null);
        $this->setIfExists('holiday_end_date', $data ?? [], null);
        $this->setIfExists('holiday_type', $data ?? [], null);
        $this->setIfExists('holiday_duration_type', $data ?? [], null);
        $this->setIfExists('part_of_the_day', $data ?? [], null);
        $this->setIfExists('holiday_duration__days', $data ?? [], null);
        $this->setIfExists('holiday_duration__hrs', $data ?? [], null);
        $this->setIfExists('holiday_comments', $data ?? [], null);
        $this->setIfExists('holiday_status', $data ?? [], null);
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
     * @param string|null $employee_id EmployeeId value
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
     * Gets holiday_start_date
     *
     * @return \DateTime|null
     */
    public function getHolidayStartDate()
    {
        return $this->container['holiday_start_date'];
    }

    /**
     * Sets holiday_start_date
     *
     * @param \DateTime|null $holiday_start_date Holiday start date value
     *
     * @return self
     */
    public function setHolidayStartDate($holiday_start_date)
    {
        if (is_null($holiday_start_date)) {
            throw new \InvalidArgumentException('non-nullable holiday_start_date cannot be null');
        }
        $this->container['holiday_start_date'] = $holiday_start_date;

        return $this;
    }

    /**
     * Gets holiday_end_date
     *
     * @return \DateTime|null
     */
    public function getHolidayEndDate()
    {
        return $this->container['holiday_end_date'];
    }

    /**
     * Sets holiday_end_date
     *
     * @param \DateTime|null $holiday_end_date Holiday end date value
     *
     * @return self
     */
    public function setHolidayEndDate($holiday_end_date)
    {
        if (is_null($holiday_end_date)) {
            throw new \InvalidArgumentException('non-nullable holiday_end_date cannot be null');
        }
        $this->container['holiday_end_date'] = $holiday_end_date;

        return $this;
    }

    /**
     * Gets holiday_type
     *
     * @return string|null
     */
    public function getHolidayType()
    {
        return $this->container['holiday_type'];
    }

    /**
     * Sets holiday_type
     *
     * @param string|null $holiday_type Holiday type value
     *
     * @return self
     */
    public function setHolidayType($holiday_type)
    {
        if (is_null($holiday_type)) {
            throw new \InvalidArgumentException('non-nullable holiday_type cannot be null');
        }
        $this->container['holiday_type'] = $holiday_type;

        return $this;
    }

    /**
     * Gets holiday_duration_type
     *
     * @return string|null
     */
    public function getHolidayDurationType()
    {
        return $this->container['holiday_duration_type'];
    }

    /**
     * Sets holiday_duration_type
     *
     * @param string|null $holiday_duration_type Holiday duration type value
     *
     * @return self
     */
    public function setHolidayDurationType($holiday_duration_type)
    {
        if (is_null($holiday_duration_type)) {
            throw new \InvalidArgumentException('non-nullable holiday_duration_type cannot be null');
        }
        $this->container['holiday_duration_type'] = $holiday_duration_type;

        return $this;
    }

    /**
     * Gets part_of_the_day
     *
     * @return string|null
     */
    public function getPartOfTheDay()
    {
        return $this->container['part_of_the_day'];
    }

    /**
     * Sets part_of_the_day
     *
     * @param string|null $part_of_the_day Part of the day value
     *
     * @return self
     */
    public function setPartOfTheDay($part_of_the_day)
    {
        if (is_null($part_of_the_day)) {
            throw new \InvalidArgumentException('non-nullable part_of_the_day cannot be null');
        }
        $this->container['part_of_the_day'] = $part_of_the_day;

        return $this;
    }

    /**
     * Gets holiday_duration__days
     *
     * @return float|null
     */
    public function getHolidayDurationDays()
    {
        return $this->container['holiday_duration__days'];
    }

    /**
     * Sets holiday_duration__days
     *
     * @param float|null $holiday_duration__days Holiday duration (days) value
     *
     * @return self
     */
    public function setHolidayDurationDays($holiday_duration__days)
    {
        if (is_null($holiday_duration__days)) {
            throw new \InvalidArgumentException('non-nullable holiday_duration__days cannot be null');
        }
        $this->container['holiday_duration__days'] = $holiday_duration__days;

        return $this;
    }

    /**
     * Gets holiday_duration__hrs
     *
     * @return string|null
     */
    public function getHolidayDurationHrs()
    {
        return $this->container['holiday_duration__hrs'];
    }

    /**
     * Sets holiday_duration__hrs
     *
     * @param string|null $holiday_duration__hrs Holiday duration (hrs) value
     *
     * @return self
     */
    public function setHolidayDurationHrs($holiday_duration__hrs)
    {
        if (is_null($holiday_duration__hrs)) {
            throw new \InvalidArgumentException('non-nullable holiday_duration__hrs cannot be null');
        }
        $this->container['holiday_duration__hrs'] = $holiday_duration__hrs;

        return $this;
    }

    /**
     * Gets holiday_comments
     *
     * @return string|null
     */
    public function getHolidayComments()
    {
        return $this->container['holiday_comments'];
    }

    /**
     * Sets holiday_comments
     *
     * @param string|null $holiday_comments Holiday comments value
     *
     * @return self
     */
    public function setHolidayComments($holiday_comments)
    {
        if (is_null($holiday_comments)) {
            throw new \InvalidArgumentException('non-nullable holiday_comments cannot be null');
        }
        $this->container['holiday_comments'] = $holiday_comments;

        return $this;
    }

    /**
     * Gets holiday_status
     *
     * @return string|null
     */
    public function getHolidayStatus()
    {
        return $this->container['holiday_status'];
    }

    /**
     * Sets holiday_status
     *
     * @param string|null $holiday_status Holiday status value
     *
     * @return self
     */
    public function setHolidayStatus($holiday_status)
    {
        if (is_null($holiday_status)) {
            throw new \InvalidArgumentException('non-nullable holiday_status cannot be null');
        }
        $this->container['holiday_status'] = $holiday_status;

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


