<?php
/**
 * AddFilesForEmployeeCustomScreenObjectInner
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
 * AddFilesForEmployeeCustomScreenObjectInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddFilesForEmployeeCustomScreenObjectInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddFilesForEmployeeCustomScreenObject_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_name' => 'string',
        'file' => 'string',
        'description' => 'string',
        'document_category' => 'string',
        'signature_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'document_name' => null,
        'file' => null,
        'description' => null,
        'document_category' => null,
        'signature_required' => 'boolean'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'document_name' => false,
        'file' => false,
        'description' => false,
        'document_category' => false,
        'signature_required' => false
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
        'document_name' => 'DocumentName',
        'file' => 'File',
        'description' => 'Description',
        'document_category' => 'DocumentCategory',
        'signature_required' => 'SignatureRequired'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_name' => 'setDocumentName',
        'file' => 'setFile',
        'description' => 'setDescription',
        'document_category' => 'setDocumentCategory',
        'signature_required' => 'setSignatureRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_name' => 'getDocumentName',
        'file' => 'getFile',
        'description' => 'getDescription',
        'document_category' => 'getDocumentCategory',
        'signature_required' => 'getSignatureRequired'
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
        $this->setIfExists('document_name', $data ?? [], null);
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('document_category', $data ?? [], null);
        $this->setIfExists('signature_required', $data ?? [], null);
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

        if ($this->container['document_name'] === null) {
            $invalidProperties[] = "'document_name' can't be null";
        }
        if ((mb_strlen($this->container['document_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'document_name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
        }

        if ($this->container['document_category'] === null) {
            $invalidProperties[] = "'document_category' can't be null";
        }
        if ((mb_strlen($this->container['document_category']) > 100)) {
            $invalidProperties[] = "invalid value for 'document_category', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['signature_required'] === null) {
            $invalidProperties[] = "'signature_required' can't be null";
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
     * Gets document_name
     *
     * @return string
     */
    public function getDocumentName()
    {
        return $this->container['document_name'];
    }

    /**
     * Sets document_name
     *
     * @param string $document_name DocumentName for employee custom screen
     *
     * @return self
     */
    public function setDocumentName($document_name)
    {
        if (is_null($document_name)) {
            throw new \InvalidArgumentException('non-nullable document_name cannot be null');
        }
        if ((mb_strlen($document_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $document_name when calling AddFilesForEmployeeCustomScreenObjectInner., must be smaller than or equal to 100.');
        }

        $this->container['document_name'] = $document_name;

        return $this;
    }

    /**
     * Gets file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string $file File for employee custom screen
     *
     * @return self
     */
    public function setFile($file)
    {
        if (is_null($file)) {
            throw new \InvalidArgumentException('non-nullable file cannot be null');
        }
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description for employee custom screen
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 256)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AddFilesForEmployeeCustomScreenObjectInner., must be smaller than or equal to 256.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets document_category
     *
     * @return string
     */
    public function getDocumentCategory()
    {
        return $this->container['document_category'];
    }

    /**
     * Sets document_category
     *
     * @param string $document_category DocumentCategory for employee custom screen
     *
     * @return self
     */
    public function setDocumentCategory($document_category)
    {
        if (is_null($document_category)) {
            throw new \InvalidArgumentException('non-nullable document_category cannot be null');
        }
        if ((mb_strlen($document_category) > 100)) {
            throw new \InvalidArgumentException('invalid length for $document_category when calling AddFilesForEmployeeCustomScreenObjectInner., must be smaller than or equal to 100.');
        }

        $this->container['document_category'] = $document_category;

        return $this;
    }

    /**
     * Gets signature_required
     *
     * @return bool
     */
    public function getSignatureRequired()
    {
        return $this->container['signature_required'];
    }

    /**
     * Sets signature_required
     *
     * @param bool $signature_required SignatureRequired for employee custom screen
     *
     * @return self
     */
    public function setSignatureRequired($signature_required)
    {
        if (is_null($signature_required)) {
            throw new \InvalidArgumentException('non-nullable signature_required cannot be null');
        }
        $this->container['signature_required'] = $signature_required;

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


