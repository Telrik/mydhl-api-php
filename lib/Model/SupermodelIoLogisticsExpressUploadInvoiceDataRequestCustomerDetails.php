<?php
/**
 * SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails
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
 * SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails Class Doc Comment
 *
 * @category Class
 * @description Here you need to define all the parties needed to ship the package
 * @package  MyDHL\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressUploadInvoiceDataRequest_customerDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_details' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails',
        'buyer_details' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails',
        'importer_details' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails',
        'exporter_details' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails',
        'ultimate_consignee_details' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails',
        'broker_details' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_details' => null,
        'buyer_details' => null,
        'importer_details' => null,
        'exporter_details' => null,
        'ultimate_consignee_details' => null,
        'broker_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'seller_details' => false,
        'buyer_details' => false,
        'importer_details' => false,
        'exporter_details' => false,
        'ultimate_consignee_details' => false,
        'broker_details' => false
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
        'seller_details' => 'sellerDetails',
        'buyer_details' => 'buyerDetails',
        'importer_details' => 'importerDetails',
        'exporter_details' => 'exporterDetails',
        'ultimate_consignee_details' => 'ultimateConsigneeDetails',
        'broker_details' => 'brokerDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_details' => 'setSellerDetails',
        'buyer_details' => 'setBuyerDetails',
        'importer_details' => 'setImporterDetails',
        'exporter_details' => 'setExporterDetails',
        'ultimate_consignee_details' => 'setUltimateConsigneeDetails',
        'broker_details' => 'setBrokerDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_details' => 'getSellerDetails',
        'buyer_details' => 'getBuyerDetails',
        'importer_details' => 'getImporterDetails',
        'exporter_details' => 'getExporterDetails',
        'ultimate_consignee_details' => 'getUltimateConsigneeDetails',
        'broker_details' => 'getBrokerDetails'
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
        $this->setIfExists('seller_details', $data ?? [], null);
        $this->setIfExists('buyer_details', $data ?? [], null);
        $this->setIfExists('importer_details', $data ?? [], null);
        $this->setIfExists('exporter_details', $data ?? [], null);
        $this->setIfExists('ultimate_consignee_details', $data ?? [], null);
        $this->setIfExists('broker_details', $data ?? [], null);
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
     * Gets seller_details
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails|null
     */
    public function getSellerDetails()
    {
        return $this->container['seller_details'];
    }

    /**
     * Sets seller_details
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails|null $seller_details seller_details
     *
     * @return self
     */
    public function setSellerDetails($seller_details)
    {
        if (is_null($seller_details)) {
            throw new \InvalidArgumentException('non-nullable seller_details cannot be null');
        }
        $this->container['seller_details'] = $seller_details;

        return $this;
    }

    /**
     * Gets buyer_details
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails|null
     */
    public function getBuyerDetails()
    {
        return $this->container['buyer_details'];
    }

    /**
     * Sets buyer_details
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails|null $buyer_details buyer_details
     *
     * @return self
     */
    public function setBuyerDetails($buyer_details)
    {
        if (is_null($buyer_details)) {
            throw new \InvalidArgumentException('non-nullable buyer_details cannot be null');
        }
        $this->container['buyer_details'] = $buyer_details;

        return $this;
    }

    /**
     * Gets importer_details
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails|null
     */
    public function getImporterDetails()
    {
        return $this->container['importer_details'];
    }

    /**
     * Sets importer_details
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails|null $importer_details importer_details
     *
     * @return self
     */
    public function setImporterDetails($importer_details)
    {
        if (is_null($importer_details)) {
            throw new \InvalidArgumentException('non-nullable importer_details cannot be null');
        }
        $this->container['importer_details'] = $importer_details;

        return $this;
    }

    /**
     * Gets exporter_details
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails|null
     */
    public function getExporterDetails()
    {
        return $this->container['exporter_details'];
    }

    /**
     * Sets exporter_details
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails|null $exporter_details exporter_details
     *
     * @return self
     */
    public function setExporterDetails($exporter_details)
    {
        if (is_null($exporter_details)) {
            throw new \InvalidArgumentException('non-nullable exporter_details cannot be null');
        }
        $this->container['exporter_details'] = $exporter_details;

        return $this;
    }

    /**
     * Gets ultimate_consignee_details
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails|null
     */
    public function getUltimateConsigneeDetails()
    {
        return $this->container['ultimate_consignee_details'];
    }

    /**
     * Sets ultimate_consignee_details
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails|null $ultimate_consignee_details ultimate_consignee_details
     *
     * @return self
     */
    public function setUltimateConsigneeDetails($ultimate_consignee_details)
    {
        if (is_null($ultimate_consignee_details)) {
            throw new \InvalidArgumentException('non-nullable ultimate_consignee_details cannot be null');
        }
        $this->container['ultimate_consignee_details'] = $ultimate_consignee_details;

        return $this;
    }

    /**
     * Gets broker_details
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails|null
     */
    public function getBrokerDetails()
    {
        return $this->container['broker_details'];
    }

    /**
     * Sets broker_details
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails|null $broker_details broker_details
     *
     * @return self
     */
    public function setBrokerDetails($broker_details)
    {
        if (is_null($broker_details)) {
            throw new \InvalidArgumentException('non-nullable broker_details cannot be null');
        }
        $this->container['broker_details'] = $broker_details;

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


