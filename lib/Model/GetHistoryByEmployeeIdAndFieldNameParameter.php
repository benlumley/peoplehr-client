<?php
/**
 * GetHistoryByEmployeeIdAndFieldNameParameter
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
 * GetHistoryByEmployeeIdAndFieldNameParameter Class Doc Comment
 *
 * @category Class
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetHistoryByEmployeeIdAndFieldNameParameter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetHistoryByEmployeeIdAndFieldNameParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key' => 'string',
        'action' => 'string',
        'employee_id' => 'string',
        'field_name' => 'string'
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
        'field_name' => null
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
        'field_name' => false
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
        'field_name' => 'FieldName'
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
        'field_name' => 'setFieldName'
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
        'field_name' => 'getFieldName'
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
        $this->setIfExists('field_name', $data ?? [], null);
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

        if ($this->container['field_name'] === null) {
            $invalidProperties[] = "'field_name' can't be null";
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
     * @param string $api_key APIKey for History to GetHistoryByEmployeeIdAndFieldName
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }
        if ((mb_strlen($api_key) > 50)) {
            throw new \InvalidArgumentException('invalid length for $api_key when calling GetHistoryByEmployeeIdAndFieldNameParameter., must be smaller than or equal to 50.');
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
     * @param string $action Action name = GetHistoryByEmployeeIdAndFieldName
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
     * @param string $employee_id EmployeeId for get history by employeeId and fieldName
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        if ((mb_strlen($employee_id) > 15)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling GetHistoryByEmployeeIdAndFieldNameParameter., must be smaller than or equal to 15.');
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name Field Name for get history by employeeId and fieldName As Follows:<br />1] EMPLOYEE_PERSONAL_TITLE<br />2] EMPLOYEE_PERSONAL_FIRST_NAME<br />3] EMPLOYEE_PERSONAL_LAST_NAME<br />4] EMPLOYEE_PERSONAL_OTHER_NAME<br />5] EMPLOYEE_PERSONAL_KNOWN_AS<br />6] EMPLOYEE_PERSONAL_EMAIL<br />7] EMPLOYEE_PERSONAL_GENDER<br />8] EMPLOYEE_PERSONAL_DATE_OF_BIRTH<br />9] EMPLOYEE_PERSONAL_START_DATE<br />10] EMPLOYEE_PERSONAL_REPORTS_TO<br />11] EMPLOYEE_PERSONAL_JOB_ROLE<br />12] EMPLOYEE_PERSONAL_LOCATION<br />13] EMPLOYEE_PERSONAL_DEPARTMENT<br />14] EMPLOYEE_PERSONAL_UNIQUE_ID<br />15] EMPLOYEE_PERSONAL_NATIONAL_INSURANCE_NUMBER<br />16] EMPLOYEE_PERSONAL_NATIONALITY<br />17] EMPLOYEE_PERSONAL_EMPLOYMENT_TYPE<br />18] EMPLOYEE_EMPLOYMENT_PROBATION_END_DATE<br />19] EMPLOYEE_EMPLOYMENT_NOTICE_PERIOD<br />20] EMPLOYEE_EMPLOYMENT_METHOD_OF_RECRUITMENT<br />21] EMPLOYEE_EMPLOYMENT_RECRUITMENT_COST<br />22] EMPLOYEE_CONTACT_INFORMATION_POST_CODE<br />23] EMPLOYEE_CONTACT_INFORMATION_ADDRESS<br />24] EMPLOYEE_CONTACT_INFORMATION_WORK_PHONE<br />25] EMPLOYEE_CONTACT_INFORMATION_PERSONAL_PHONE<br />26] EMPLOYEE_CONTACT_INFORMATION_BANK_NAME<br />27] EMPLOYEE_CONTACT_INFORMATION_BANK_CODE<br />28] EMPLOYEE_CONTACT_INFORMATION_ACCOUNT_NUMBER<br />  29]EMPLOYEE_CONTACT_INFORMATION_OTHER_ACCOUNT_INFORMATION<br />30] EMPLOYEE_CONTACT_INFORMATION_ACCOUNT_NAME<br />31] EMPLOYEE_CONTACT_INFORMATION_BANK_ADDRESS
     *
     * @return self
     */
    public function setFieldName($field_name)
    {
        if (is_null($field_name)) {
            throw new \InvalidArgumentException('non-nullable field_name cannot be null');
        }
        $this->container['field_name'] = $field_name;

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


