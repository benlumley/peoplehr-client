<?php
/**
 * AddNewDrivingLicenseParameter
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
 * AddNewDrivingLicenseParameter Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddNewDrivingLicenseParameter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddNewDrivingLicenseParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key' => 'string',
        'action' => 'string',
        'employee_id' => 'string',
        'license_number' => 'string',
        'license_type' => 'string',
        'expiry_date' => '\DateTime',
        'comments' => 'string',
        'custom_columns' => '\OpenAPI\Client\Model\CustomColumnsForEmployeeDrivingInner[]',
        'add_files' => '\OpenAPI\Client\Model\AddFilesForEmployeeDrivingInner[]'
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
        'license_number' => null,
        'license_type' => null,
        'expiry_date' => 'date',
        'comments' => null,
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
        'license_number' => false,
        'license_type' => false,
        'expiry_date' => false,
        'comments' => false,
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
        'license_number' => 'LicenseNumber',
        'license_type' => 'LicenseType',
        'expiry_date' => 'ExpiryDate',
        'comments' => 'Comments',
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
        'license_number' => 'setLicenseNumber',
        'license_type' => 'setLicenseType',
        'expiry_date' => 'setExpiryDate',
        'comments' => 'setComments',
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
        'license_number' => 'getLicenseNumber',
        'license_type' => 'getLicenseType',
        'expiry_date' => 'getExpiryDate',
        'comments' => 'getComments',
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
        $this->setIfExists('license_number', $data ?? [], null);
        $this->setIfExists('license_type', $data ?? [], null);
        $this->setIfExists('expiry_date', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
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

        if ($this->container['license_number'] === null) {
            $invalidProperties[] = "'license_number' can't be null";
        }
        if ((mb_strlen($this->container['license_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'license_number', the character length must be smaller than or equal to 50.";
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
     * @param string $api_key APIKey for add new driving license
     *
     * @return self
     */
    public function setApiKey($api_key)
    {
        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }
        if ((mb_strlen($api_key) > 50)) {
            throw new \InvalidArgumentException('invalid length for $api_key when calling AddNewDrivingLicenseParameter., must be smaller than or equal to 50.');
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
     * @param string $action Action name = AddNewDrivingLicense
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
     * @param string $employee_id EmployeeId for add new driving license
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        if ((mb_strlen($employee_id) > 15)) {
            throw new \InvalidArgumentException('invalid length for $employee_id when calling AddNewDrivingLicenseParameter., must be smaller than or equal to 15.');
        }

        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets license_number
     *
     * @return string
     */
    public function getLicenseNumber()
    {
        return $this->container['license_number'];
    }

    /**
     * Sets license_number
     *
     * @param string $license_number License number for add new driving license
     *
     * @return self
     */
    public function setLicenseNumber($license_number)
    {
        if (is_null($license_number)) {
            throw new \InvalidArgumentException('non-nullable license_number cannot be null');
        }
        if ((mb_strlen($license_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $license_number when calling AddNewDrivingLicenseParameter., must be smaller than or equal to 50.');
        }

        $this->container['license_number'] = $license_number;

        return $this;
    }

    /**
     * Gets license_type
     *
     * @return string|null
     */
    public function getLicenseType()
    {
        return $this->container['license_type'];
    }

    /**
     * Sets license_type
     *
     * @param string|null $license_type License type for add new driving license
     *
     * @return self
     */
    public function setLicenseType($license_type)
    {
        if (is_null($license_type)) {
            throw new \InvalidArgumentException('non-nullable license_type cannot be null');
        }
        $this->container['license_type'] = $license_type;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime|null $expiry_date Expirydate for add new driving license
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {
        if (is_null($expiry_date)) {
            throw new \InvalidArgumentException('non-nullable expiry_date cannot be null');
        }
        $this->container['expiry_date'] = $expiry_date;

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
     * @param string|null $comments Comments for add new driving license
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
     * Gets custom_columns
     *
     * @return \OpenAPI\Client\Model\CustomColumnsForEmployeeDrivingInner[]|null
     */
    public function getCustomColumns()
    {
        return $this->container['custom_columns'];
    }

    /**
     * Sets custom_columns
     *
     * @param \OpenAPI\Client\Model\CustomColumnsForEmployeeDrivingInner[]|null $custom_columns Custom columns for add new driving license
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
     * @return \OpenAPI\Client\Model\AddFilesForEmployeeDrivingInner[]|null
     */
    public function getAddFiles()
    {
        return $this->container['add_files'];
    }

    /**
     * Sets add_files
     *
     * @param \OpenAPI\Client\Model\AddFilesForEmployeeDrivingInner[]|null $add_files Add files for add new driving license
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


