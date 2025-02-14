<?php
/**
 * EmploymentDetailObject
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
 * EmploymentDetailObject Class Doc Comment
 *
 * @category Class
 * @description Employment detail contain displayValue and FieldHistory array values
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmploymentDetailObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmploymentDetailObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payroll_company' => '\PeopleHR\Model\PayrollCompanyObject',
        'payroll_id' => '\PeopleHR\Model\PayrollIDObject',
        'time_and_attendance_id' => '\PeopleHR\Model\TimeAndAttendanceIDObject',
        'rota_id' => '\PeopleHR\Model\RotaIDObject',
        'crmid' => '\PeopleHR\Model\CRMIDObject',
        'atsid' => '\PeopleHR\Model\ATSIDObject',
        'performance_id' => '\PeopleHR\Model\PerformanceIDObject',
        'benefits_id' => '\PeopleHR\Model\BenefitsIDObject',
        'system1_id' => '\PeopleHR\Model\System1IDObject',
        'system2_id' => '\PeopleHR\Model\System2IDObject',
        'system3_id' => '\PeopleHR\Model\System3IDObject',
        'method_of_recruitment' => '\PeopleHR\Model\MethodOfRecruitmentObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payroll_company' => null,
        'payroll_id' => null,
        'time_and_attendance_id' => null,
        'rota_id' => null,
        'crmid' => null,
        'atsid' => null,
        'performance_id' => null,
        'benefits_id' => null,
        'system1_id' => null,
        'system2_id' => null,
        'system3_id' => null,
        'method_of_recruitment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payroll_company' => false,
        'payroll_id' => false,
        'time_and_attendance_id' => false,
        'rota_id' => false,
        'crmid' => false,
        'atsid' => false,
        'performance_id' => false,
        'benefits_id' => false,
        'system1_id' => false,
        'system2_id' => false,
        'system3_id' => false,
        'method_of_recruitment' => false
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
        'payroll_company' => 'PayrollCompany',
        'payroll_id' => 'PayrollID',
        'time_and_attendance_id' => 'TimeAndAttendanceID',
        'rota_id' => 'RotaID',
        'crmid' => 'CRMID',
        'atsid' => 'ATSID',
        'performance_id' => 'PerformanceID',
        'benefits_id' => 'BenefitsID',
        'system1_id' => 'System1ID',
        'system2_id' => 'System2ID',
        'system3_id' => 'System3ID',
        'method_of_recruitment' => 'MethodOfRecruitment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payroll_company' => 'setPayrollCompany',
        'payroll_id' => 'setPayrollId',
        'time_and_attendance_id' => 'setTimeAndAttendanceId',
        'rota_id' => 'setRotaId',
        'crmid' => 'setCrmid',
        'atsid' => 'setAtsid',
        'performance_id' => 'setPerformanceId',
        'benefits_id' => 'setBenefitsId',
        'system1_id' => 'setSystem1Id',
        'system2_id' => 'setSystem2Id',
        'system3_id' => 'setSystem3Id',
        'method_of_recruitment' => 'setMethodOfRecruitment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payroll_company' => 'getPayrollCompany',
        'payroll_id' => 'getPayrollId',
        'time_and_attendance_id' => 'getTimeAndAttendanceId',
        'rota_id' => 'getRotaId',
        'crmid' => 'getCrmid',
        'atsid' => 'getAtsid',
        'performance_id' => 'getPerformanceId',
        'benefits_id' => 'getBenefitsId',
        'system1_id' => 'getSystem1Id',
        'system2_id' => 'getSystem2Id',
        'system3_id' => 'getSystem3Id',
        'method_of_recruitment' => 'getMethodOfRecruitment'
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
        $this->setIfExists('payroll_company', $data ?? [], null);
        $this->setIfExists('payroll_id', $data ?? [], null);
        $this->setIfExists('time_and_attendance_id', $data ?? [], null);
        $this->setIfExists('rota_id', $data ?? [], null);
        $this->setIfExists('crmid', $data ?? [], null);
        $this->setIfExists('atsid', $data ?? [], null);
        $this->setIfExists('performance_id', $data ?? [], null);
        $this->setIfExists('benefits_id', $data ?? [], null);
        $this->setIfExists('system1_id', $data ?? [], null);
        $this->setIfExists('system2_id', $data ?? [], null);
        $this->setIfExists('system3_id', $data ?? [], null);
        $this->setIfExists('method_of_recruitment', $data ?? [], null);
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
     * Gets payroll_company
     *
     * @return \PeopleHR\Model\PayrollCompanyObject|null
     */
    public function getPayrollCompany()
    {
        return $this->container['payroll_company'];
    }

    /**
     * Sets payroll_company
     *
     * @param \PeopleHR\Model\PayrollCompanyObject|null $payroll_company PayrollCompany contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setPayrollCompany($payroll_company)
    {
        if (is_null($payroll_company)) {
            throw new \InvalidArgumentException('non-nullable payroll_company cannot be null');
        }
        $this->container['payroll_company'] = $payroll_company;

        return $this;
    }

    /**
     * Gets payroll_id
     *
     * @return \PeopleHR\Model\PayrollIDObject|null
     */
    public function getPayrollId()
    {
        return $this->container['payroll_id'];
    }

    /**
     * Sets payroll_id
     *
     * @param \PeopleHR\Model\PayrollIDObject|null $payroll_id PayrollID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setPayrollId($payroll_id)
    {
        if (is_null($payroll_id)) {
            throw new \InvalidArgumentException('non-nullable payroll_id cannot be null');
        }
        $this->container['payroll_id'] = $payroll_id;

        return $this;
    }

    /**
     * Gets time_and_attendance_id
     *
     * @return \PeopleHR\Model\TimeAndAttendanceIDObject|null
     */
    public function getTimeAndAttendanceId()
    {
        return $this->container['time_and_attendance_id'];
    }

    /**
     * Sets time_and_attendance_id
     *
     * @param \PeopleHR\Model\TimeAndAttendanceIDObject|null $time_and_attendance_id TimeAndAttendanceID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setTimeAndAttendanceId($time_and_attendance_id)
    {
        if (is_null($time_and_attendance_id)) {
            throw new \InvalidArgumentException('non-nullable time_and_attendance_id cannot be null');
        }
        $this->container['time_and_attendance_id'] = $time_and_attendance_id;

        return $this;
    }

    /**
     * Gets rota_id
     *
     * @return \PeopleHR\Model\RotaIDObject|null
     */
    public function getRotaId()
    {
        return $this->container['rota_id'];
    }

    /**
     * Sets rota_id
     *
     * @param \PeopleHR\Model\RotaIDObject|null $rota_id RotaID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setRotaId($rota_id)
    {
        if (is_null($rota_id)) {
            throw new \InvalidArgumentException('non-nullable rota_id cannot be null');
        }
        $this->container['rota_id'] = $rota_id;

        return $this;
    }

    /**
     * Gets crmid
     *
     * @return \PeopleHR\Model\CRMIDObject|null
     */
    public function getCrmid()
    {
        return $this->container['crmid'];
    }

    /**
     * Sets crmid
     *
     * @param \PeopleHR\Model\CRMIDObject|null $crmid CRMID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setCrmid($crmid)
    {
        if (is_null($crmid)) {
            throw new \InvalidArgumentException('non-nullable crmid cannot be null');
        }
        $this->container['crmid'] = $crmid;

        return $this;
    }

    /**
     * Gets atsid
     *
     * @return \PeopleHR\Model\ATSIDObject|null
     */
    public function getAtsid()
    {
        return $this->container['atsid'];
    }

    /**
     * Sets atsid
     *
     * @param \PeopleHR\Model\ATSIDObject|null $atsid ATSID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setAtsid($atsid)
    {
        if (is_null($atsid)) {
            throw new \InvalidArgumentException('non-nullable atsid cannot be null');
        }
        $this->container['atsid'] = $atsid;

        return $this;
    }

    /**
     * Gets performance_id
     *
     * @return \PeopleHR\Model\PerformanceIDObject|null
     */
    public function getPerformanceId()
    {
        return $this->container['performance_id'];
    }

    /**
     * Sets performance_id
     *
     * @param \PeopleHR\Model\PerformanceIDObject|null $performance_id PerformanceID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setPerformanceId($performance_id)
    {
        if (is_null($performance_id)) {
            throw new \InvalidArgumentException('non-nullable performance_id cannot be null');
        }
        $this->container['performance_id'] = $performance_id;

        return $this;
    }

    /**
     * Gets benefits_id
     *
     * @return \PeopleHR\Model\BenefitsIDObject|null
     */
    public function getBenefitsId()
    {
        return $this->container['benefits_id'];
    }

    /**
     * Sets benefits_id
     *
     * @param \PeopleHR\Model\BenefitsIDObject|null $benefits_id BenefitsID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setBenefitsId($benefits_id)
    {
        if (is_null($benefits_id)) {
            throw new \InvalidArgumentException('non-nullable benefits_id cannot be null');
        }
        $this->container['benefits_id'] = $benefits_id;

        return $this;
    }

    /**
     * Gets system1_id
     *
     * @return \PeopleHR\Model\System1IDObject|null
     */
    public function getSystem1Id()
    {
        return $this->container['system1_id'];
    }

    /**
     * Sets system1_id
     *
     * @param \PeopleHR\Model\System1IDObject|null $system1_id System1ID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setSystem1Id($system1_id)
    {
        if (is_null($system1_id)) {
            throw new \InvalidArgumentException('non-nullable system1_id cannot be null');
        }
        $this->container['system1_id'] = $system1_id;

        return $this;
    }

    /**
     * Gets system2_id
     *
     * @return \PeopleHR\Model\System2IDObject|null
     */
    public function getSystem2Id()
    {
        return $this->container['system2_id'];
    }

    /**
     * Sets system2_id
     *
     * @param \PeopleHR\Model\System2IDObject|null $system2_id System2ID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setSystem2Id($system2_id)
    {
        if (is_null($system2_id)) {
            throw new \InvalidArgumentException('non-nullable system2_id cannot be null');
        }
        $this->container['system2_id'] = $system2_id;

        return $this;
    }

    /**
     * Gets system3_id
     *
     * @return \PeopleHR\Model\System3IDObject|null
     */
    public function getSystem3Id()
    {
        return $this->container['system3_id'];
    }

    /**
     * Sets system3_id
     *
     * @param \PeopleHR\Model\System3IDObject|null $system3_id System3ID contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setSystem3Id($system3_id)
    {
        if (is_null($system3_id)) {
            throw new \InvalidArgumentException('non-nullable system3_id cannot be null');
        }
        $this->container['system3_id'] = $system3_id;

        return $this;
    }

    /**
     * Gets method_of_recruitment
     *
     * @return \PeopleHR\Model\MethodOfRecruitmentObject|null
     */
    public function getMethodOfRecruitment()
    {
        return $this->container['method_of_recruitment'];
    }

    /**
     * Sets method_of_recruitment
     *
     * @param \PeopleHR\Model\MethodOfRecruitmentObject|null $method_of_recruitment MethodOfRecruitment contain displayValue and FieldHistory array values
     *
     * @return self
     */
    public function setMethodOfRecruitment($method_of_recruitment)
    {
        if (is_null($method_of_recruitment)) {
            throw new \InvalidArgumentException('non-nullable method_of_recruitment cannot be null');
        }
        $this->container['method_of_recruitment'] = $method_of_recruitment;

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


