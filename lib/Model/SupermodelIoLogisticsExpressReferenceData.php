<?php
/**
 * SupermodelIoLogisticsExpressReferenceData
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
 * SupermodelIoLogisticsExpressReferenceData Class Doc Comment
 *
 * @category Class
 * @package  MyDHL\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressReferenceData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressReferenceData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dataset_name' => 'string',
        'data_set_captions' => 'string',
        'data' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressReferenceDataDataInnerInner[][]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dataset_name' => null,
        'data_set_captions' => null,
        'data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dataset_name' => false,
        'data_set_captions' => false,
        'data' => false
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
        'dataset_name' => 'datasetName',
        'data_set_captions' => 'dataSetCaptions',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataset_name' => 'setDatasetName',
        'data_set_captions' => 'setDataSetCaptions',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataset_name' => 'getDatasetName',
        'data_set_captions' => 'getDataSetCaptions',
        'data' => 'getData'
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
        $this->setIfExists('dataset_name', $data ?? [], null);
        $this->setIfExists('data_set_captions', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
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

        if ($this->container['dataset_name'] === null) {
            $invalidProperties[] = "'dataset_name' can't be null";
        }
        if ((mb_strlen($this->container['dataset_name']) > 250)) {
            $invalidProperties[] = "invalid value for 'dataset_name', the character length must be smaller than or equal to 250.";
        }

        if ((mb_strlen($this->container['dataset_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'dataset_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['data_set_captions']) && (mb_strlen($this->container['data_set_captions']) > 250)) {
            $invalidProperties[] = "invalid value for 'data_set_captions', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['data_set_captions']) && (mb_strlen($this->container['data_set_captions']) < 1)) {
            $invalidProperties[] = "invalid value for 'data_set_captions', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['data']) && (count($this->container['data']) > 3000)) {
            $invalidProperties[] = "invalid value for 'data', number of items must be less than or equal to 3000.";
        }

        if (!is_null($this->container['data']) && (count($this->container['data']) < 0)) {
            $invalidProperties[] = "invalid value for 'data', number of items must be greater than or equal to 0.";
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
     * Gets dataset_name
     *
     * @return string
     */
    public function getDatasetName()
    {
        return $this->container['dataset_name'];
    }

    /**
     * Sets dataset_name
     *
     * @param string $dataset_name The reference data dataset name
     *
     * @return self
     */
    public function setDatasetName($dataset_name)
    {
        if (is_null($dataset_name)) {
            throw new \InvalidArgumentException('non-nullable dataset_name cannot be null');
        }
        if ((mb_strlen($dataset_name) > 250)) {
            throw new \InvalidArgumentException('invalid length for $dataset_name when calling SupermodelIoLogisticsExpressReferenceData., must be smaller than or equal to 250.');
        }
        if ((mb_strlen($dataset_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $dataset_name when calling SupermodelIoLogisticsExpressReferenceData., must be bigger than or equal to 1.');
        }

        $this->container['dataset_name'] = $dataset_name;

        return $this;
    }

    /**
     * Gets data_set_captions
     *
     * @return string|null
     */
    public function getDataSetCaptions()
    {
        return $this->container['data_set_captions'];
    }

    /**
     * Sets data_set_captions
     *
     * @param string|null $data_set_captions data_set_captions
     *
     * @return self
     */
    public function setDataSetCaptions($data_set_captions)
    {
        if (is_null($data_set_captions)) {
            throw new \InvalidArgumentException('non-nullable data_set_captions cannot be null');
        }
        if ((mb_strlen($data_set_captions) > 250)) {
            throw new \InvalidArgumentException('invalid length for $data_set_captions when calling SupermodelIoLogisticsExpressReferenceData., must be smaller than or equal to 250.');
        }
        if ((mb_strlen($data_set_captions) < 1)) {
            throw new \InvalidArgumentException('invalid length for $data_set_captions when calling SupermodelIoLogisticsExpressReferenceData., must be bigger than or equal to 1.');
        }

        $this->container['data_set_captions'] = $data_set_captions;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressReferenceDataDataInnerInner[][]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressReferenceDataDataInnerInner[][]|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }

        if ((count($data) > 3000)) {
            throw new \InvalidArgumentException('invalid value for $data when calling SupermodelIoLogisticsExpressReferenceData., number of items must be less than or equal to 3000.');
        }
        if ((count($data) < 0)) {
            throw new \InvalidArgumentException('invalid length for $data when calling SupermodelIoLogisticsExpressReferenceData., number of items must be greater than or equal to 0.');
        }
        $this->container['data'] = $data;

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

