<?php
/**
 * ResultForGetAllProjectTaskDetailInner
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
 * ResultForGetAllProjectTaskDetailInner Class Doc Comment
 *
 * @category Class
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResultForGetAllProjectTaskDetailInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResultForGetAllProjectTaskDetail_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'project_task_detail_id' => 'int',
        'project_task_detail_name' => 'string',
        'status' => 'bool',
        'project_task_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'project_task_detail_id' => null,
        'project_task_detail_name' => null,
        'status' => null,
        'project_task_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'project_task_detail_id' => false,
        'project_task_detail_name' => false,
        'status' => false,
        'project_task_name' => false
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
        'project_task_detail_id' => 'ProjectTaskDetailId',
        'project_task_detail_name' => 'ProjectTaskDetailName',
        'status' => 'Status',
        'project_task_name' => 'ProjectTaskName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_task_detail_id' => 'setProjectTaskDetailId',
        'project_task_detail_name' => 'setProjectTaskDetailName',
        'status' => 'setStatus',
        'project_task_name' => 'setProjectTaskName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_task_detail_id' => 'getProjectTaskDetailId',
        'project_task_detail_name' => 'getProjectTaskDetailName',
        'status' => 'getStatus',
        'project_task_name' => 'getProjectTaskName'
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
        $this->setIfExists('project_task_detail_id', $data ?? [], null);
        $this->setIfExists('project_task_detail_name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('project_task_name', $data ?? [], null);
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
     * Gets project_task_detail_id
     *
     * @return int|null
     */
    public function getProjectTaskDetailId()
    {
        return $this->container['project_task_detail_id'];
    }

    /**
     * Sets project_task_detail_id
     *
     * @param int|null $project_task_detail_id ProjectTaskDetailId Value
     *
     * @return self
     */
    public function setProjectTaskDetailId($project_task_detail_id)
    {
        if (is_null($project_task_detail_id)) {
            throw new \InvalidArgumentException('non-nullable project_task_detail_id cannot be null');
        }
        $this->container['project_task_detail_id'] = $project_task_detail_id;

        return $this;
    }

    /**
     * Gets project_task_detail_name
     *
     * @return string|null
     */
    public function getProjectTaskDetailName()
    {
        return $this->container['project_task_detail_name'];
    }

    /**
     * Sets project_task_detail_name
     *
     * @param string|null $project_task_detail_name ProjectTaskDetailName value
     *
     * @return self
     */
    public function setProjectTaskDetailName($project_task_detail_name)
    {
        if (is_null($project_task_detail_name)) {
            throw new \InvalidArgumentException('non-nullable project_task_detail_name cannot be null');
        }
        $this->container['project_task_detail_name'] = $project_task_detail_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return bool|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param bool|null $status Status value
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
     * Gets project_task_name
     *
     * @return string|null
     */
    public function getProjectTaskName()
    {
        return $this->container['project_task_name'];
    }

    /**
     * Sets project_task_name
     *
     * @param string|null $project_task_name ProjectTaskName value
     *
     * @return self
     */
    public function setProjectTaskName($project_task_name)
    {
        if (is_null($project_task_name)) {
            throw new \InvalidArgumentException('non-nullable project_task_name cannot be null');
        }
        $this->container['project_task_name'] = $project_task_name;

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


