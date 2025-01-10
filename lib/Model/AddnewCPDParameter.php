<?php
/**
 * AddnewCPDParameter
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
 * AddnewCPDParameter Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddnewCPDParameter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddnewCPDParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key' => 'string',
        'action' => 'string',
        'employee_id' => 'string',
        'activity' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'roll_number' => 'string',
        'date_admitted' => '\DateTime',
        'hours_required' => 'int',
        'hours_accredited' => 'int',
        'notes' => 'string',
        'custom_columns' => '\OpenAPI\Client\Model\CustomColumnsArrayForEmployeeCPDInner[]',
        'add_files' => '\OpenAPI\Client\Model\AddFilesArrayForEmployeeCPDInner[]'
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
        'activity' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'roll_number' => null,
        'date_admitted' => 'date',
        'hours_required' => null,
        'hours_accredited' => null,
        'notes' => null,
        'custom_columns' => null,
        'add_files' => null
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
        'activity' => false,
        'start_date' => false,
        'end_date' => false,
        'roll_number' => false,
        'date_admitted' => false,
        'hours_required' => false,
        'hours_accredited' => false,
        'notes' => false,
        'custom_columns' => false,
        'add_files' => false
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
        'activity' => 'Activity',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'roll_number' => 'RollNumber',
        'date_admitted' => 'DateAdmitted',
        'hours_required' => 'HoursRequired',
        'hours_accredited' => 'HoursAccredited',
        'notes' => 'Notes',
        'custom_columns' => 'CustomColumns',
        'add_files' => 'AddFiles'
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
        'activity' => 'setActivity',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'roll_number' => 'setRollNumber',
        'date_admitted' => 'setDateAdmitted',
        'hours_required' => 'setHoursRequired',
        'hours_accredited' => 'setHoursAccredited',
        'notes' => 'setNotes',
        'custom_columns' => 'setCustomColumns',
        'add_files' => 'setAddFiles'
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
        'activity' => 'getActivity',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'roll_number' => 'getRollNumber',
        'date_admitted' => 'getDateAdmitted',
        'hours_required' => 'getHoursRequired',
        'hours_accredited' => 'getHoursAccredited',
        'notes' => 'getNotes',
        'custom_columns' => 'getCustomColumns',
        'add_files' => 'getAddFiles'
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
        $this->setIfExists('activity', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('roll_number', $data ?? [], null);
        $this->setIfExists('date_admitted', $data ?? [], null);
        $this->setIfExists('hours_required', $data ?? [], null);
        $this->setIfExists('hours_accredited', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('custom_columns', $data ?? [], null);
        $this->setIfExists('add_files', $data ?? [], null);
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

        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['custom_columns'] === null) {
            $invalidProperties[] = "'custom_columns' can't be null";
        }
        if ($this->container['add_files'] === null) {
            $invalidProperties[] = "'add_files' can't be null";
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
     * @param string $api_key APIKey for employee api to add CPD detail
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }
        if ((mb_strlen($api_key) > 50)) {
            throw new \InvalidArgumentException('invalid length for $api_key when calling AddnewCPDParameter., must be smaller than or equal to 50.');
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
     * @param string $action Action name = AddNewCPD
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
     * @param string $employee_id Employeeid for add new CPD
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        if ((mb_strlen($employee_id) > 15)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling AddnewCPDParameter., must be smaller than or equal to 15.');
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param string $activity Activity for add new CPD
     *
     * @return self
     */
    public function setActivity($activity)
    {
        if (is_null($activity)) {
            throw new \InvalidArgumentException('non-nullable activity cannot be null');
        }
        $this->container['activity'] = $activity;

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
     * @param \DateTime $start_date StartDate for add new CPD
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
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date EndDate for add new CPD
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
     * Gets roll_number
     *
     * @return string|null
     */
    public function getRollNumber()
    {
        return $this->container['roll_number'];
    }

    /**
     * Sets roll_number
     *
     * @param string|null $roll_number RollNumber for add new CPD
     *
     * @return self
     */
    public function setRollNumber($roll_number)
    {
        if (is_null($roll_number)) {
            throw new \InvalidArgumentException('non-nullable roll_number cannot be null');
        }
        $this->container['roll_number'] = $roll_number;

        return $this;
    }

    /**
     * Gets date_admitted
     *
     * @return \DateTime|null
     */
    public function getDateAdmitted()
    {
        return $this->container['date_admitted'];
    }

    /**
     * Sets date_admitted
     *
     * @param \DateTime|null $date_admitted DateAdmitted for add new CPD
     *
     * @return self
     */
    public function setDateAdmitted($date_admitted)
    {
        if (is_null($date_admitted)) {
            throw new \InvalidArgumentException('non-nullable date_admitted cannot be null');
        }
        $this->container['date_admitted'] = $date_admitted;

        return $this;
    }

    /**
     * Gets hours_required
     *
     * @return int|null
     */
    public function getHoursRequired()
    {
        return $this->container['hours_required'];
    }

    /**
     * Sets hours_required
     *
     * @param int|null $hours_required HoursRequired for add new CPD
     *
     * @return self
     */
    public function setHoursRequired($hours_required)
    {
        if (is_null($hours_required)) {
            throw new \InvalidArgumentException('non-nullable hours_required cannot be null');
        }
        $this->container['hours_required'] = $hours_required;

        return $this;
    }

    /**
     * Gets hours_accredited
     *
     * @return int|null
     */
    public function getHoursAccredited()
    {
        return $this->container['hours_accredited'];
    }

    /**
     * Sets hours_accredited
     *
     * @param int|null $hours_accredited HoursAccredited for add new CPD
     *
     * @return self
     */
    public function setHoursAccredited($hours_accredited)
    {
        if (is_null($hours_accredited)) {
            throw new \InvalidArgumentException('non-nullable hours_accredited cannot be null');
        }
        $this->container['hours_accredited'] = $hours_accredited;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Notes for add new CPD
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets custom_columns
     *
     * @return \OpenAPI\Client\Model\CustomColumnsArrayForEmployeeCPDInner[]
     */
    public function getCustomColumns()
    {
        return $this->container['custom_columns'];
    }

    /**
     * Sets custom_columns
     *
     * @param \OpenAPI\Client\Model\CustomColumnsArrayForEmployeeCPDInner[] $custom_columns CustomColumns for add new cpd
     *
     * @return self
     */
    public function setCustomColumns($custom_columns)
    {
        if (is_null($custom_columns)) {
            throw new \InvalidArgumentException('non-nullable custom_columns cannot be null');
        }
        $this->container['custom_columns'] = $custom_columns;

        return $this;
    }

    /**
     * Gets add_files
     *
     * @return \OpenAPI\Client\Model\AddFilesArrayForEmployeeCPDInner[]
     */
    public function getAddFiles()
    {
        return $this->container['add_files'];
    }

    /**
     * Sets add_files
     *
     * @param \OpenAPI\Client\Model\AddFilesArrayForEmployeeCPDInner[] $add_files AddFiles for add new cpd
     *
     * @return self
     */
    public function setAddFiles($add_files)
    {
        if (is_null($add_files)) {
            throw new \InvalidArgumentException('non-nullable add_files cannot be null');
        }
        $this->container['add_files'] = $add_files;

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


