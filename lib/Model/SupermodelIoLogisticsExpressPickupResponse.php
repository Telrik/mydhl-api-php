<?php
/**
 * SupermodelIoLogisticsExpressPickupResponse
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
 * SupermodelIoLogisticsExpressPickupResponse Class Doc Comment
 *
 * @category Class
 * @description Comment describing your JSON Schema
 * @package  MyDHL\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressPickupResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressPickupResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dispatch_confirmation_numbers' => 'string[]',
        'ready_by_time' => 'string',
        'next_pickup_date' => 'string',
        'warnings' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dispatch_confirmation_numbers' => null,
        'ready_by_time' => null,
        'next_pickup_date' => null,
        'warnings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dispatch_confirmation_numbers' => false,
        'ready_by_time' => false,
        'next_pickup_date' => false,
        'warnings' => false
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
        'dispatch_confirmation_numbers' => 'dispatchConfirmationNumbers',
        'ready_by_time' => 'readyByTime',
        'next_pickup_date' => 'nextPickupDate',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dispatch_confirmation_numbers' => 'setDispatchConfirmationNumbers',
        'ready_by_time' => 'setReadyByTime',
        'next_pickup_date' => 'setNextPickupDate',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dispatch_confirmation_numbers' => 'getDispatchConfirmationNumbers',
        'ready_by_time' => 'getReadyByTime',
        'next_pickup_date' => 'getNextPickupDate',
        'warnings' => 'getWarnings'
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
        $this->setIfExists('dispatch_confirmation_numbers', $data ?? [], null);
        $this->setIfExists('ready_by_time', $data ?? [], null);
        $this->setIfExists('next_pickup_date', $data ?? [], null);
        $this->setIfExists('warnings', $data ?? [], null);
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

        if (!is_null($this->container['dispatch_confirmation_numbers']) && (count($this->container['dispatch_confirmation_numbers']) > 999)) {
            $invalidProperties[] = "invalid value for 'dispatch_confirmation_numbers', number of items must be less than or equal to 999.";
        }

        if (!is_null($this->container['dispatch_confirmation_numbers']) && (count($this->container['dispatch_confirmation_numbers']) < 0)) {
            $invalidProperties[] = "invalid value for 'dispatch_confirmation_numbers', number of items must be greater than or equal to 0.";
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
     * Gets dispatch_confirmation_numbers
     *
     * @return string[]|null
     */
    public function getDispatchConfirmationNumbers()
    {
        return $this->container['dispatch_confirmation_numbers'];
    }

    /**
     * Sets dispatch_confirmation_numbers
     *
     * @param string[]|null $dispatch_confirmation_numbers List of Dispatch Confirmation Numbers which identifies the scheduled pickup
     *
     * @return self
     */
    public function setDispatchConfirmationNumbers($dispatch_confirmation_numbers)
    {
        if (is_null($dispatch_confirmation_numbers)) {
            throw new \InvalidArgumentException('non-nullable dispatch_confirmation_numbers cannot be null');
        }

        if ((count($dispatch_confirmation_numbers) > 999)) {
            throw new \InvalidArgumentException('invalid value for $dispatch_confirmation_numbers when calling SupermodelIoLogisticsExpressPickupResponse., number of items must be less than or equal to 999.');
        }
        if ((count($dispatch_confirmation_numbers) < 0)) {
            throw new \InvalidArgumentException('invalid length for $dispatch_confirmation_numbers when calling SupermodelIoLogisticsExpressPickupResponse., number of items must be greater than or equal to 0.');
        }
        $this->container['dispatch_confirmation_numbers'] = $dispatch_confirmation_numbers;

        return $this;
    }

    /**
     * Gets ready_by_time
     *
     * @return string|null
     */
    public function getReadyByTime()
    {
        return $this->container['ready_by_time'];
    }

    /**
     * Sets ready_by_time
     *
     * @param string|null $ready_by_time ready_by_time
     *
     * @return self
     */
    public function setReadyByTime($ready_by_time)
    {
        if (is_null($ready_by_time)) {
            throw new \InvalidArgumentException('non-nullable ready_by_time cannot be null');
        }
        $this->container['ready_by_time'] = $ready_by_time;

        return $this;
    }

    /**
     * Gets next_pickup_date
     *
     * @return string|null
     */
    public function getNextPickupDate()
    {
        return $this->container['next_pickup_date'];
    }

    /**
     * Sets next_pickup_date
     *
     * @param string|null $next_pickup_date next_pickup_date
     *
     * @return self
     */
    public function setNextPickupDate($next_pickup_date)
    {
        if (is_null($next_pickup_date)) {
            throw new \InvalidArgumentException('non-nullable next_pickup_date cannot be null');
        }
        $this->container['next_pickup_date'] = $next_pickup_date;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return string[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param string[]|null $warnings warnings
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        if (is_null($warnings)) {
            throw new \InvalidArgumentException('non-nullable warnings cannot be null');
        }
        $this->container['warnings'] = $warnings;

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

