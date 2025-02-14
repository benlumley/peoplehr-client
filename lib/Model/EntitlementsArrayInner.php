<?php
/**
 * EntitlementsArrayInner
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
 * EntitlementsArrayInner Class Doc Comment
 *
 * @category Class
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EntitlementsArrayInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EntitlementsArray_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'entitlement' => 'string',
        'display_as_amount_or_percentage' => 'bool',
        'amount' => 'int',
        'percentage' => 'int',
        'comments' => 'string',
        'include_in_total_salary' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'entitlement' => null,
        'display_as_amount_or_percentage' => null,
        'amount' => null,
        'percentage' => 'decimal',
        'comments' => null,
        'include_in_total_salary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'entitlement' => false,
        'display_as_amount_or_percentage' => false,
        'amount' => false,
        'percentage' => false,
        'comments' => false,
        'include_in_total_salary' => false
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
        'entitlement' => 'Entitlement',
        'display_as_amount_or_percentage' => 'DisplayAsAmountOrPercentage',
        'amount' => 'Amount',
        'percentage' => 'Percentage',
        'comments' => 'Comments',
        'include_in_total_salary' => 'IncludeInTotalSalary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entitlement' => 'setEntitlement',
        'display_as_amount_or_percentage' => 'setDisplayAsAmountOrPercentage',
        'amount' => 'setAmount',
        'percentage' => 'setPercentage',
        'comments' => 'setComments',
        'include_in_total_salary' => 'setIncludeInTotalSalary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entitlement' => 'getEntitlement',
        'display_as_amount_or_percentage' => 'getDisplayAsAmountOrPercentage',
        'amount' => 'getAmount',
        'percentage' => 'getPercentage',
        'comments' => 'getComments',
        'include_in_total_salary' => 'getIncludeInTotalSalary'
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
        $this->setIfExists('entitlement', $data ?? [], null);
        $this->setIfExists('display_as_amount_or_percentage', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('percentage', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('include_in_total_salary', $data ?? [], null);
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

        if ($this->container['entitlement'] === null) {
            $invalidProperties[] = "'entitlement' can't be null";
        }
        if ((mb_strlen($this->container['entitlement']) > 0)) {
            $invalidProperties[] = "invalid value for 'entitlement', the character length must be smaller than or equal to 0.";
        }

        if ($this->container['display_as_amount_or_percentage'] === null) {
            $invalidProperties[] = "'display_as_amount_or_percentage' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 0)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 0.";
        }

        if ($this->container['include_in_total_salary'] === null) {
            $invalidProperties[] = "'include_in_total_salary' can't be null";
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
     * Gets entitlement
     *
     * @return string
     */
    public function getEntitlement()
    {
        return $this->container['entitlement'];
    }

    /**
     * Sets entitlement
     *
     * @param string $entitlement Entitlement value
     *
     * @return self
     */
    public function setEntitlement($entitlement)
    {
        if (is_null($entitlement)) {
            throw new \InvalidArgumentException('non-nullable entitlement cannot be null');
        }
        if ((mb_strlen($entitlement) > 0)) {
            throw new \InvalidArgumentException('invalid length for $entitlement when calling EntitlementsArrayInner., must be smaller than or equal to 0.');
        }

        $this->container['entitlement'] = $entitlement;

        return $this;
    }

    /**
     * Gets display_as_amount_or_percentage
     *
     * @return bool
     */
    public function getDisplayAsAmountOrPercentage()
    {
        return $this->container['display_as_amount_or_percentage'];
    }

    /**
     * Sets display_as_amount_or_percentage
     *
     * @param bool $display_as_amount_or_percentage Display as amount or percentage
     *
     * @return self
     */
    public function setDisplayAsAmountOrPercentage($display_as_amount_or_percentage)
    {
        if (is_null($display_as_amount_or_percentage)) {
            throw new \InvalidArgumentException('non-nullable display_as_amount_or_percentage cannot be null');
        }
        $this->container['display_as_amount_or_percentage'] = $display_as_amount_or_percentage;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount contact last name
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return int|null
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param int|null $percentage Percentage
     *
     * @return self
     */
    public function setPercentage($percentage)
    {
        if (is_null($percentage)) {
            throw new \InvalidArgumentException('non-nullable percentage cannot be null');
        }
        $this->container['percentage'] = $percentage;

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
     * @param string|null $comments Comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        if ((mb_strlen($comments) > 0)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling EntitlementsArrayInner., must be smaller than or equal to 0.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets include_in_total_salary
     *
     * @return bool
     */
    public function getIncludeInTotalSalary()
    {
        return $this->container['include_in_total_salary'];
    }

    /**
     * Sets include_in_total_salary
     *
     * @param bool $include_in_total_salary IncludeInTotalSalary
     *
     * @return self
     */
    public function setIncludeInTotalSalary($include_in_total_salary)
    {
        if (is_null($include_in_total_salary)) {
            throw new \InvalidArgumentException('non-nullable include_in_total_salary cannot be null');
        }
        $this->container['include_in_total_salary'] = $include_in_total_salary;

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


