<?php
/**
 * Result1ForGetBackgroundCheckDetailByEmployeeIdInner
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
 * Result1ForGetBackgroundCheckDetailByEmployeeIdInner Class Doc Comment
 *
 * @category Class
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Result1ForGetBackgroundCheckDetailByEmployeeIdInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Result1ForGetBackgroundCheckDetailByEmployeeId_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'background_check_detail_id' => 'int',
        'type_of_check' => 'string',
        'date_completed' => '\DateTime',
        'expiry_date' => '\DateTime',
        'document_name' => 'string',
        'document_url' => 'string',
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
        'background_check_detail_id' => null,
        'type_of_check' => null,
        'date_completed' => 'date',
        'expiry_date' => 'date',
        'document_name' => null,
        'document_url' => 'URL',
        'comments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'background_check_detail_id' => false,
        'type_of_check' => false,
        'date_completed' => false,
        'expiry_date' => false,
        'document_name' => false,
        'document_url' => false,
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
        'background_check_detail_id' => 'BackgroundCheckDetailId',
        'type_of_check' => 'TypeOfCheck',
        'date_completed' => 'DateCompleted',
        'expiry_date' => 'ExpiryDate',
        'document_name' => 'DocumentName',
        'document_url' => 'DocumentURL',
        'comments' => 'Comments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background_check_detail_id' => 'setBackgroundCheckDetailId',
        'type_of_check' => 'setTypeOfCheck',
        'date_completed' => 'setDateCompleted',
        'expiry_date' => 'setExpiryDate',
        'document_name' => 'setDocumentName',
        'document_url' => 'setDocumentUrl',
        'comments' => 'setComments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background_check_detail_id' => 'getBackgroundCheckDetailId',
        'type_of_check' => 'getTypeOfCheck',
        'date_completed' => 'getDateCompleted',
        'expiry_date' => 'getExpiryDate',
        'document_name' => 'getDocumentName',
        'document_url' => 'getDocumentUrl',
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
        $this->setIfExists('background_check_detail_id', $data ?? [], null);
        $this->setIfExists('type_of_check', $data ?? [], null);
        $this->setIfExists('date_completed', $data ?? [], null);
        $this->setIfExists('expiry_date', $data ?? [], null);
        $this->setIfExists('document_name', $data ?? [], null);
        $this->setIfExists('document_url', $data ?? [], null);
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
     * Gets background_check_detail_id
     *
     * @return int|null
     */
    public function getBackgroundCheckDetailId()
    {
        return $this->container['background_check_detail_id'];
    }

    /**
     * Sets background_check_detail_id
     *
     * @param int|null $background_check_detail_id Background Check Detail Id Value
     *
     * @return self
     */
    public function setBackgroundCheckDetailId($background_check_detail_id)
    {
        if (is_null($background_check_detail_id)) {
            throw new \InvalidArgumentException('non-nullable background_check_detail_id cannot be null');
        }
        $this->container['background_check_detail_id'] = $background_check_detail_id;

        return $this;
    }

    /**
     * Gets type_of_check
     *
     * @return string|null
     */
    public function getTypeOfCheck()
    {
        return $this->container['type_of_check'];
    }

    /**
     * Sets type_of_check
     *
     * @param string|null $type_of_check Type Of Check value
     *
     * @return self
     */
    public function setTypeOfCheck($type_of_check)
    {
        if (is_null($type_of_check)) {
            throw new \InvalidArgumentException('non-nullable type_of_check cannot be null');
        }
        $this->container['type_of_check'] = $type_of_check;

        return $this;
    }

    /**
     * Gets date_completed
     *
     * @return \DateTime|null
     */
    public function getDateCompleted()
    {
        return $this->container['date_completed'];
    }

    /**
     * Sets date_completed
     *
     * @param \DateTime|null $date_completed Date Completed value
     *
     * @return self
     */
    public function setDateCompleted($date_completed)
    {
        if (is_null($date_completed)) {
            throw new \InvalidArgumentException('non-nullable date_completed cannot be null');
        }
        $this->container['date_completed'] = $date_completed;

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
     * @param \DateTime|null $expiry_date Expiry Date value
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
     * Gets document_name
     *
     * @return string|null
     */
    public function getDocumentName()
    {
        return $this->container['document_name'];
    }

    /**
     * Sets document_name
     *
     * @param string|null $document_name Document Name value
     *
     * @return self
     */
    public function setDocumentName($document_name)
    {
        if (is_null($document_name)) {
            throw new \InvalidArgumentException('non-nullable document_name cannot be null');
        }
        $this->container['document_name'] = $document_name;

        return $this;
    }

    /**
     * Gets document_url
     *
     * @return string|null
     */
    public function getDocumentUrl()
    {
        return $this->container['document_url'];
    }

    /**
     * Sets document_url
     *
     * @param string|null $document_url Document URL value
     *
     * @return self
     */
    public function setDocumentUrl($document_url)
    {
        if (is_null($document_url)) {
            throw new \InvalidArgumentException('non-nullable document_url cannot be null');
        }
        $this->container['document_url'] = $document_url;

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
     * @param string|null $comments Comments value
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


