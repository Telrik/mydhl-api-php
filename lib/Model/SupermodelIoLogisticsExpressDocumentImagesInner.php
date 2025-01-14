<?php
/**
 * SupermodelIoLogisticsExpressDocumentImagesInner
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
 * SupermodelIoLogisticsExpressDocumentImagesInner Class Doc Comment
 *
 * @category Class
 * @package  MyDHL\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressDocumentImagesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressDocumentImages_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type_code' => 'string',
        'image_format' => 'string',
        'content' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type_code' => null,
        'image_format' => null,
        'content' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type_code' => false,
        'image_format' => false,
        'content' => false
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
        'type_code' => 'typeCode',
        'image_format' => 'imageFormat',
        'content' => 'content'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_code' => 'setTypeCode',
        'image_format' => 'setImageFormat',
        'content' => 'setContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_code' => 'getTypeCode',
        'image_format' => 'getImageFormat',
        'content' => 'getContent'
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

    public const TYPE_CODE_INV = 'INV';
    public const TYPE_CODE_PNV = 'PNV';
    public const TYPE_CODE_COO = 'COO';
    public const TYPE_CODE_CIN = 'CIN';
    public const TYPE_CODE_DCL = 'DCL';
    public const TYPE_CODE_AWB = 'AWB';
    public const TYPE_CODE_NAF = 'NAF';
    public const IMAGE_FORMAT_PDF = 'PDF';
    public const IMAGE_FORMAT_PNG = 'PNG';
    public const IMAGE_FORMAT_GIF = 'GIF';
    public const IMAGE_FORMAT_TIFF = 'TIFF';
    public const IMAGE_FORMAT_JPEG = 'JPEG';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeCodeAllowableValues()
    {
        return [
            self::TYPE_CODE_INV,
            self::TYPE_CODE_PNV,
            self::TYPE_CODE_COO,
            self::TYPE_CODE_CIN,
            self::TYPE_CODE_DCL,
            self::TYPE_CODE_AWB,
            self::TYPE_CODE_NAF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageFormatAllowableValues()
    {
        return [
            self::IMAGE_FORMAT_PDF,
            self::IMAGE_FORMAT_PNG,
            self::IMAGE_FORMAT_GIF,
            self::IMAGE_FORMAT_TIFF,
            self::IMAGE_FORMAT_JPEG,
        ];
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
        $this->setIfExists('type_code', $data ?? [], 'INV');
        $this->setIfExists('image_format', $data ?? [], 'PDF');
        $this->setIfExists('content', $data ?? [], null);
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

        $allowedValues = $this->getTypeCodeAllowableValues();
        if (!is_null($this->container['type_code']) && !in_array($this->container['type_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type_code', must be one of '%s'",
                $this->container['type_code'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getImageFormatAllowableValues();
        if (!is_null($this->container['image_format']) && !in_array($this->container['image_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'image_format', must be one of '%s'",
                $this->container['image_format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
     * Gets type_code
     *
     * @return string|null
     */
    public function getTypeCode()
    {
        return $this->container['type_code'];
    }

    /**
     * Sets type_code
     *
     * @param string|null $type_code Please provide correct document type you wish to upload<BR>        <BR>        Possible values;<BR>        INV, Invoice<BR>        PNV, Proforma<BR>        COO, Certificate of Origin<BR>        NAF, Nafta Certificate of Origin<BR>        CIN, Commercial Invoice<BR>        DCL, Custom Declaration<BR>        AWB, Air Waybill and Waybill Document
     *
     * @return self
     */
    public function setTypeCode($type_code)
    {
        if (is_null($type_code)) {
            throw new \InvalidArgumentException('non-nullable type_code cannot be null');
        }
        $allowedValues = $this->getTypeCodeAllowableValues();
        if (!in_array($type_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type_code', must be one of '%s'",
                    $type_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_code'] = $type_code;

        return $this;
    }

    /**
     * Gets image_format
     *
     * @return string|null
     */
    public function getImageFormat()
    {
        return $this->container['image_format'];
    }

    /**
     * Sets image_format
     *
     * @param string|null $image_format Please provide the image file format for the document you want to upload
     *
     * @return self
     */
    public function setImageFormat($image_format)
    {
        if (is_null($image_format)) {
            throw new \InvalidArgumentException('non-nullable image_format cannot be null');
        }
        $allowedValues = $this->getImageFormatAllowableValues();
        if (!in_array($image_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'image_format', must be one of '%s'",
                    $image_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['image_format'] = $image_format;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content Please provide the base64 encoded document
     *
     * @return self
     */
    public function setContent($content)
    {
        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }
        $this->container['content'] = $content;

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


