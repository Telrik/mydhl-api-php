<?php
/**
 * DateTimeField
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MyDHL\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DHL Express APIs (MyDHL API)
 *
 * Welcome to the official DHL Express APIs (MyDHL API) below are the published API Documentation to fulfill your shipping needs with DHL Express.       Please follow the process described [here](https://developer.dhl.com/api-reference/dhl-express-mydhl-api#get-started-section/user-guide--get-access) to request access to the DHL Express - MyDHL API services   In case you already have DHL Express - MyDHL API Service credentials please ensure to use the endpoints/environments listed  [here](https://developer.dhl.com/api-reference/dhl-express-mydhl-api#get-started-section/user-guide--environments)
 *
 * The version of the OpenAPI document: 2.11.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDHL\Client\Model;

use \ArrayAccess;
use \MyDHL\Client\ObjectSerializer;

/**
 * DateTimeField Class Doc Comment
 *
 * @category Class
 * @package  MyDHL\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DateTimeField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DateTimeField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'type' => '\MyDHL\Client\Model\DateTimeFieldType',
        'supported' => 'bool',
        'lenient' => 'bool',
        'minimum_value' => 'int',
        'maximum_value' => 'int',
        'duration_field' => '\MyDHL\Client\Model\DurationField',
        'range_duration_field' => '\MyDHL\Client\Model\DurationField',
        'leap_duration_field' => '\MyDHL\Client\Model\DurationField'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'supported' => null,
        'lenient' => null,
        'minimum_value' => 'int32',
        'maximum_value' => 'int32',
        'duration_field' => null,
        'range_duration_field' => null,
        'leap_duration_field' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'type' => false,
        'supported' => false,
        'lenient' => false,
        'minimum_value' => false,
        'maximum_value' => false,
        'duration_field' => false,
        'range_duration_field' => false,
        'leap_duration_field' => false
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
        'name' => 'name',
        'type' => 'type',
        'supported' => 'supported',
        'lenient' => 'lenient',
        'minimum_value' => 'minimumValue',
        'maximum_value' => 'maximumValue',
        'duration_field' => 'durationField',
        'range_duration_field' => 'rangeDurationField',
        'leap_duration_field' => 'leapDurationField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'supported' => 'setSupported',
        'lenient' => 'setLenient',
        'minimum_value' => 'setMinimumValue',
        'maximum_value' => 'setMaximumValue',
        'duration_field' => 'setDurationField',
        'range_duration_field' => 'setRangeDurationField',
        'leap_duration_field' => 'setLeapDurationField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'supported' => 'getSupported',
        'lenient' => 'getLenient',
        'minimum_value' => 'getMinimumValue',
        'maximum_value' => 'getMaximumValue',
        'duration_field' => 'getDurationField',
        'range_duration_field' => 'getRangeDurationField',
        'leap_duration_field' => 'getLeapDurationField'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('supported', $data ?? [], null);
        $this->setIfExists('lenient', $data ?? [], null);
        $this->setIfExists('minimum_value', $data ?? [], null);
        $this->setIfExists('maximum_value', $data ?? [], null);
        $this->setIfExists('duration_field', $data ?? [], null);
        $this->setIfExists('range_duration_field', $data ?? [], null);
        $this->setIfExists('leap_duration_field', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \MyDHL\Client\Model\DateTimeFieldType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \MyDHL\Client\Model\DateTimeFieldType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets supported
     *
     * @return bool|null
     */
    public function getSupported()
    {
        return $this->container['supported'];
    }

    /**
     * Sets supported
     *
     * @param bool|null $supported supported
     *
     * @return self
     */
    public function setSupported($supported)
    {
        if (is_null($supported)) {
            throw new \InvalidArgumentException('non-nullable supported cannot be null');
        }
        $this->container['supported'] = $supported;

        return $this;
    }

    /**
     * Gets lenient
     *
     * @return bool|null
     */
    public function getLenient()
    {
        return $this->container['lenient'];
    }

    /**
     * Sets lenient
     *
     * @param bool|null $lenient lenient
     *
     * @return self
     */
    public function setLenient($lenient)
    {
        if (is_null($lenient)) {
            throw new \InvalidArgumentException('non-nullable lenient cannot be null');
        }
        $this->container['lenient'] = $lenient;

        return $this;
    }

    /**
     * Gets minimum_value
     *
     * @return int|null
     */
    public function getMinimumValue()
    {
        return $this->container['minimum_value'];
    }

    /**
     * Sets minimum_value
     *
     * @param int|null $minimum_value minimum_value
     *
     * @return self
     */
    public function setMinimumValue($minimum_value)
    {
        if (is_null($minimum_value)) {
            throw new \InvalidArgumentException('non-nullable minimum_value cannot be null');
        }
        $this->container['minimum_value'] = $minimum_value;

        return $this;
    }

    /**
     * Gets maximum_value
     *
     * @return int|null
     */
    public function getMaximumValue()
    {
        return $this->container['maximum_value'];
    }

    /**
     * Sets maximum_value
     *
     * @param int|null $maximum_value maximum_value
     *
     * @return self
     */
    public function setMaximumValue($maximum_value)
    {
        if (is_null($maximum_value)) {
            throw new \InvalidArgumentException('non-nullable maximum_value cannot be null');
        }
        $this->container['maximum_value'] = $maximum_value;

        return $this;
    }

    /**
     * Gets duration_field
     *
     * @return \MyDHL\Client\Model\DurationField|null
     */
    public function getDurationField()
    {
        return $this->container['duration_field'];
    }

    /**
     * Sets duration_field
     *
     * @param \MyDHL\Client\Model\DurationField|null $duration_field duration_field
     *
     * @return self
     */
    public function setDurationField($duration_field)
    {
        if (is_null($duration_field)) {
            throw new \InvalidArgumentException('non-nullable duration_field cannot be null');
        }
        $this->container['duration_field'] = $duration_field;

        return $this;
    }

    /**
     * Gets range_duration_field
     *
     * @return \MyDHL\Client\Model\DurationField|null
     */
    public function getRangeDurationField()
    {
        return $this->container['range_duration_field'];
    }

    /**
     * Sets range_duration_field
     *
     * @param \MyDHL\Client\Model\DurationField|null $range_duration_field range_duration_field
     *
     * @return self
     */
    public function setRangeDurationField($range_duration_field)
    {
        if (is_null($range_duration_field)) {
            throw new \InvalidArgumentException('non-nullable range_duration_field cannot be null');
        }
        $this->container['range_duration_field'] = $range_duration_field;

        return $this;
    }

    /**
     * Gets leap_duration_field
     *
     * @return \MyDHL\Client\Model\DurationField|null
     */
    public function getLeapDurationField()
    {
        return $this->container['leap_duration_field'];
    }

    /**
     * Sets leap_duration_field
     *
     * @param \MyDHL\Client\Model\DurationField|null $leap_duration_field leap_duration_field
     *
     * @return self
     */
    public function setLeapDurationField($leap_duration_field)
    {
        if (is_null($leap_duration_field)) {
            throw new \InvalidArgumentException('non-nullable leap_duration_field cannot be null');
        }
        $this->container['leap_duration_field'] = $leap_duration_field;

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


