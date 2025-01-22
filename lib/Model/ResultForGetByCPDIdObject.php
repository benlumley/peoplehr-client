<?php
/**
 * ResultForGetByCPDIdObject
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
 * ResultForGetByCPDIdObject Class Doc Comment
 *
 * @category Class
 * @description Result Array
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResultForGetByCPDIdObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResultForGetByCPDIdObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cpdid' => 'int',
        'activity' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'roll_number' => 'string',
        'date_admitted' => '\DateTime',
        'hours_required' => 'int',
        'hours_accredited' => 'int',
        'notes' => 'string',
        'customfields' => '\PeopleHR\Model\CustomFieldsArrayForGetDetailInner[]',
        'files' => '\PeopleHR\Model\FilesArrayForGetDetailInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cpdid' => null,
        'activity' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'roll_number' => null,
        'date_admitted' => 'date',
        'hours_required' => null,
        'hours_accredited' => null,
        'notes' => null,
        'customfields' => null,
        'files' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cpdid' => false,
        'activity' => false,
        'start_date' => false,
        'end_date' => false,
        'roll_number' => false,
        'date_admitted' => false,
        'hours_required' => false,
        'hours_accredited' => false,
        'notes' => false,
        'customfields' => false,
        'files' => false
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
        'cpdid' => 'CPDId',
        'activity' => 'Activity',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'roll_number' => 'RollNumber',
        'date_admitted' => 'DateAdmitted',
        'hours_required' => 'HoursRequired',
        'hours_accredited' => 'HoursAccredited',
        'notes' => 'Notes',
        'customfields' => 'Customfields',
        'files' => 'Files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpdid' => 'setCpdid',
        'activity' => 'setActivity',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'roll_number' => 'setRollNumber',
        'date_admitted' => 'setDateAdmitted',
        'hours_required' => 'setHoursRequired',
        'hours_accredited' => 'setHoursAccredited',
        'notes' => 'setNotes',
        'customfields' => 'setCustomfields',
        'files' => 'setFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpdid' => 'getCpdid',
        'activity' => 'getActivity',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'roll_number' => 'getRollNumber',
        'date_admitted' => 'getDateAdmitted',
        'hours_required' => 'getHoursRequired',
        'hours_accredited' => 'getHoursAccredited',
        'notes' => 'getNotes',
        'customfields' => 'getCustomfields',
        'files' => 'getFiles'
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
        $this->setIfExists('cpdid', $data ?? [], null);
        $this->setIfExists('activity', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('roll_number', $data ?? [], null);
        $this->setIfExists('date_admitted', $data ?? [], null);
        $this->setIfExists('hours_required', $data ?? [], null);
        $this->setIfExists('hours_accredited', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('customfields', $data ?? [], null);
        $this->setIfExists('files', $data ?? [], null);
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
     * Gets cpdid
     *
     * @return int|null
     */
    public function getCpdid()
    {
        return $this->container['cpdid'];
    }

    /**
     * Sets cpdid
     *
     * @param int|null $cpdid CPDId Value
     *
     * @return self
     */
    public function setCpdid($cpdid)
    {
        if (is_null($cpdid)) {
            throw new \InvalidArgumentException('non-nullable cpdid cannot be null');
        }
        $this->container['cpdid'] = $cpdid;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return string|null
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param string|null $activity Activity value
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
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date StartDate value
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
     * @param \DateTime|null $end_date EndDate value
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
     * @param string|null $roll_number RollNumber value
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
     * @param \DateTime|null $date_admitted DateAdmitted value
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
     * @param int|null $hours_required HoursRequired value
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
     * @param int|null $hours_accredited HoursAccredited value
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
     * @param string|null $notes Notes value
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
     * Gets customfields
     *
     * @return \PeopleHR\Model\CustomFieldsArrayForGetDetailInner[]|null
     */
    public function getCustomfields()
    {
        return $this->container['customfields'];
    }

    /**
     * Sets customfields
     *
     * @param \PeopleHR\Model\CustomFieldsArrayForGetDetailInner[]|null $customfields Customfields for get details
     *
     * @return self
     */
    public function setCustomfields($customfields)
    {
        if (is_null($customfields)) {
            throw new \InvalidArgumentException('non-nullable customfields cannot be null');
        }
        $this->container['customfields'] = $customfields;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \PeopleHR\Model\FilesArrayForGetDetailInner[]|null
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \PeopleHR\Model\FilesArrayForGetDetailInner[]|null $files Files for get details
     *
     * @return self
     */
    public function setFiles($files)
    {
        if (is_null($files)) {
            throw new \InvalidArgumentException('non-nullable files cannot be null');
        }
        $this->container['files'] = $files;

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


