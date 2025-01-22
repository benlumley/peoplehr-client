<?php
/**
 * UpdateHolidayParameter
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
 * UpdateHolidayParameter Class Doc Comment
 *
 * @category Class
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateHolidayParameter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateHolidayParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key' => 'string',
        'action' => 'string',
        'employee_id' => 'string',
        'old_start_date' => '\DateTime',
        'old_end_date' => '\DateTime',
        'duration_type' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'duration_in_days' => 'int',
        'duration_in_minutes' => 'int',
        'part_of_day' => '\PeopleHR\Model\PartOfDay',
        'comments' => 'string'
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
        'old_start_date' => 'date',
        'old_end_date' => 'date',
        'duration_type' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'duration_in_days' => 'decimal',
        'duration_in_minutes' => null,
        'part_of_day' => null,
        'comments' => null
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
        'old_start_date' => false,
        'old_end_date' => false,
        'duration_type' => false,
        'start_date' => false,
        'end_date' => false,
        'duration_in_days' => false,
        'duration_in_minutes' => false,
        'part_of_day' => false,
        'comments' => false
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
        'old_start_date' => 'OldStartDate',
        'old_end_date' => 'OldEndDate',
        'duration_type' => 'DurationType',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'duration_in_days' => 'DurationInDays',
        'duration_in_minutes' => 'DurationInMinutes',
        'part_of_day' => 'PartOfDay',
        'comments' => 'Comments'
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
        'old_start_date' => 'setOldStartDate',
        'old_end_date' => 'setOldEndDate',
        'duration_type' => 'setDurationType',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'duration_in_days' => 'setDurationInDays',
        'duration_in_minutes' => 'setDurationInMinutes',
        'part_of_day' => 'setPartOfDay',
        'comments' => 'setComments'
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
        'old_start_date' => 'getOldStartDate',
        'old_end_date' => 'getOldEndDate',
        'duration_type' => 'getDurationType',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'duration_in_days' => 'getDurationInDays',
        'duration_in_minutes' => 'getDurationInMinutes',
        'part_of_day' => 'getPartOfDay',
        'comments' => 'getComments'
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
        $this->setIfExists('old_start_date', $data ?? [], null);
        $this->setIfExists('old_end_date', $data ?? [], null);
        $this->setIfExists('duration_type', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('duration_in_days', $data ?? [], null);
        $this->setIfExists('duration_in_minutes', $data ?? [], null);
        $this->setIfExists('part_of_day', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
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

        if ($this->container['old_start_date'] === null) {
            $invalidProperties[] = "'old_start_date' can't be null";
        }
        if ($this->container['old_end_date'] === null) {
            $invalidProperties[] = "'old_end_date' can't be null";
        }
        if ($this->container['duration_type'] === null) {
            $invalidProperties[] = "'duration_type' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['duration_in_days'] === null) {
            $invalidProperties[] = "'duration_in_days' can't be null";
        }
        if ($this->container['duration_in_minutes'] === null) {
            $invalidProperties[] = "'duration_in_minutes' can't be null";
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
     * @param string $api_key APIKey for UpdateHoliday
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }
        if ((mb_strlen($api_key) > 50)) {
            throw new \InvalidArgumentException('invalid length for $api_key when calling UpdateHolidayParameter., must be smaller than or equal to 50.');
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
     * @param string $action Action name = UpdateHoliday
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
     * @param string $employee_id Employee id for update holiday
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        if ((mb_strlen($employee_id) > 15)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling UpdateHolidayParameter., must be smaller than or equal to 15.');
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets old_start_date
     *
     * @return \DateTime
     */
    public function getOldStartDate()
    {
        return $this->container['old_start_date'];
    }

    /**
     * Sets old_start_date
     *
     * @param \DateTime $old_start_date OldStartDate for update holiday
     *
     * @return self
     */
    public function setOldStartDate($old_start_date)
    {
        if (is_null($old_start_date)) {
            throw new \InvalidArgumentException('non-nullable old_start_date cannot be null');
        }
        $this->container['old_start_date'] = $old_start_date;

        return $this;
    }

    /**
     * Gets old_end_date
     *
     * @return \DateTime
     */
    public function getOldEndDate()
    {
        return $this->container['old_end_date'];
    }

    /**
     * Sets old_end_date
     *
     * @param \DateTime $old_end_date OldEndDate for update holiday
     *
     * @return self
     */
    public function setOldEndDate($old_end_date)
    {
        if (is_null($old_end_date)) {
            throw new \InvalidArgumentException('non-nullable old_end_date cannot be null');
        }
        $this->container['old_end_date'] = $old_end_date;

        return $this;
    }

    /**
     * Gets duration_type
     *
     * @return string
     */
    public function getDurationType()
    {
        return $this->container['duration_type'];
    }

    /**
     * Sets duration_type
     *
     * @param string $duration_type Duration type for update holiday
     *
     * @return self
     */
    public function setDurationType($duration_type)
    {
        if (is_null($duration_type)) {
            throw new \InvalidArgumentException('non-nullable duration_type cannot be null');
        }
        $this->container['duration_type'] = $duration_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date StartDate for update holiday
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date End date for update holiday
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets duration_in_days
     *
     * @return int
     */
    public function getDurationInDays()
    {
        return $this->container['duration_in_days'];
    }

    /**
     * Sets duration_in_days
     *
     * @param int $duration_in_days Duration in days for update holiday
     *
     * @return self
     */
    public function setDurationInDays($duration_in_days)
    {
        if (is_null($duration_in_days)) {
            throw new \InvalidArgumentException('non-nullable duration_in_days cannot be null');
        }
        $this->container['duration_in_days'] = $duration_in_days;

        return $this;
    }

    /**
     * Gets duration_in_minutes
     *
     * @return int
     */
    public function getDurationInMinutes()
    {
        return $this->container['duration_in_minutes'];
    }

    /**
     * Sets duration_in_minutes
     *
     * @param int $duration_in_minutes Duration in minutes for update holiday
     *
     * @return self
     */
    public function setDurationInMinutes($duration_in_minutes)
    {
        if (is_null($duration_in_minutes)) {
            throw new \InvalidArgumentException('non-nullable duration_in_minutes cannot be null');
        }
        $this->container['duration_in_minutes'] = $duration_in_minutes;

        return $this;
    }

    /**
     * Gets part_of_day
     *
     * @return \PeopleHR\Model\PartOfDay|null
     */
    public function getPartOfDay()
    {
        return $this->container['part_of_day'];
    }

    /**
     * Sets part_of_day
     *
     * @param \PeopleHR\Model\PartOfDay|null $part_of_day Part of day for update holiday
     *
     * @return self
     */
    public function setPartOfDay($part_of_day)
    {
        if (is_null($part_of_day)) {
            throw new \InvalidArgumentException('non-nullable part_of_day cannot be null');
        }
        $this->container['part_of_day'] = $part_of_day;

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
     * @param string|null $comments Comments for update holiday
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


