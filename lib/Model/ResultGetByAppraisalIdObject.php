<?php
/**
 * ResultGetByAppraisalIdObject
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
 * ResultGetByAppraisalIdObject Class Doc Comment
 *
 * @category Class
 * @description Result Array
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResultGetByAppraisalIdObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResultGetByAppraisalIdObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appraisal_id' => 'float',
        'appraisal_review_date' => '\DateTime',
        'reviewer' => 'string',
        'note' => 'string',
        'action_plan' => 'string',
        'objectives' => 'string',
        'customfields' => '\PeopleHR\Model\ArrayForGetByAppraisalIdArrayInner[]',
        'files' => '\PeopleHR\Model\ArrayForGetAppraisalByIdFileInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appraisal_id' => 'integer',
        'appraisal_review_date' => 'date',
        'reviewer' => null,
        'note' => null,
        'action_plan' => null,
        'objectives' => null,
        'customfields' => null,
        'files' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'appraisal_id' => false,
        'appraisal_review_date' => false,
        'reviewer' => false,
        'note' => false,
        'action_plan' => false,
        'objectives' => false,
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
        'appraisal_id' => 'AppraisalId',
        'appraisal_review_date' => 'AppraisalReviewDate',
        'reviewer' => 'Reviewer',
        'note' => 'Note',
        'action_plan' => 'ActionPlan',
        'objectives' => 'Objectives',
        'customfields' => 'Customfields',
        'files' => 'Files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appraisal_id' => 'setAppraisalId',
        'appraisal_review_date' => 'setAppraisalReviewDate',
        'reviewer' => 'setReviewer',
        'note' => 'setNote',
        'action_plan' => 'setActionPlan',
        'objectives' => 'setObjectives',
        'customfields' => 'setCustomfields',
        'files' => 'setFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appraisal_id' => 'getAppraisalId',
        'appraisal_review_date' => 'getAppraisalReviewDate',
        'reviewer' => 'getReviewer',
        'note' => 'getNote',
        'action_plan' => 'getActionPlan',
        'objectives' => 'getObjectives',
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
        $this->setIfExists('appraisal_id', $data ?? [], null);
        $this->setIfExists('appraisal_review_date', $data ?? [], null);
        $this->setIfExists('reviewer', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('action_plan', $data ?? [], null);
        $this->setIfExists('objectives', $data ?? [], null);
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
     * Gets appraisal_id
     *
     * @return float|null
     */
    public function getAppraisalId()
    {
        return $this->container['appraisal_id'];
    }

    /**
     * Sets appraisal_id
     *
     * @param float|null $appraisal_id appraisal id value
     *
     * @return self
     */
    public function setAppraisalId($appraisal_id)
    {
        if (is_null($appraisal_id)) {
            throw new \InvalidArgumentException('non-nullable appraisal_id cannot be null');
        }
        $this->container['appraisal_id'] = $appraisal_id;

        return $this;
    }

    /**
     * Gets appraisal_review_date
     *
     * @return \DateTime|null
     */
    public function getAppraisalReviewDate()
    {
        return $this->container['appraisal_review_date'];
    }

    /**
     * Sets appraisal_review_date
     *
     * @param \DateTime|null $appraisal_review_date appraisal review date value
     *
     * @return self
     */
    public function setAppraisalReviewDate($appraisal_review_date)
    {
        if (is_null($appraisal_review_date)) {
            throw new \InvalidArgumentException('non-nullable appraisal_review_date cannot be null');
        }
        $this->container['appraisal_review_date'] = $appraisal_review_date;

        return $this;
    }

    /**
     * Gets reviewer
     *
     * @return string|null
     */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
     * Sets reviewer
     *
     * @param string|null $reviewer Reviewer value
     *
     * @return self
     */
    public function setReviewer($reviewer)
    {
        if (is_null($reviewer)) {
            throw new \InvalidArgumentException('non-nullable reviewer cannot be null');
        }
        $this->container['reviewer'] = $reviewer;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note value
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets action_plan
     *
     * @return string|null
     */
    public function getActionPlan()
    {
        return $this->container['action_plan'];
    }

    /**
     * Sets action_plan
     *
     * @param string|null $action_plan action plan value
     *
     * @return self
     */
    public function setActionPlan($action_plan)
    {
        if (is_null($action_plan)) {
            throw new \InvalidArgumentException('non-nullable action_plan cannot be null');
        }
        $this->container['action_plan'] = $action_plan;

        return $this;
    }

    /**
     * Gets objectives
     *
     * @return string|null
     */
    public function getObjectives()
    {
        return $this->container['objectives'];
    }

    /**
     * Sets objectives
     *
     * @param string|null $objectives Objectives value
     *
     * @return self
     */
    public function setObjectives($objectives)
    {
        if (is_null($objectives)) {
            throw new \InvalidArgumentException('non-nullable objectives cannot be null');
        }
        $this->container['objectives'] = $objectives;

        return $this;
    }

    /**
     * Gets customfields
     *
     * @return \PeopleHR\Model\ArrayForGetByAppraisalIdArrayInner[]|null
     */
    public function getCustomfields()
    {
        return $this->container['customfields'];
    }

    /**
     * Sets customfields
     *
     * @param \PeopleHR\Model\ArrayForGetByAppraisalIdArrayInner[]|null $customfields Custom fields value
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
     * @return \PeopleHR\Model\ArrayForGetAppraisalByIdFileInner[]|null
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \PeopleHR\Model\ArrayForGetAppraisalByIdFileInner[]|null $files Files
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


