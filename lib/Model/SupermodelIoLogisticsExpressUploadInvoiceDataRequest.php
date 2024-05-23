<?php
/**
 * SupermodelIoLogisticsExpressUploadInvoiceDataRequest
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
 * SupermodelIoLogisticsExpressUploadInvoiceDataRequest Class Doc Comment
 *
 * @category Class
 * @description MyDHL API REST UploadInvoiceData request JSON Schema
 * @package  MyDHL\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressUploadInvoiceDataRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressUploadInvoiceDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'planned_ship_date' => 'string',
        'accounts' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressAccount[]',
        'content' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent',
        'output_image_properties' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties',
        'customer_details' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'planned_ship_date' => null,
        'accounts' => null,
        'content' => null,
        'output_image_properties' => null,
        'customer_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'planned_ship_date' => false,
        'accounts' => false,
        'content' => false,
        'output_image_properties' => false,
        'customer_details' => false
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
        'planned_ship_date' => 'plannedShipDate',
        'accounts' => 'accounts',
        'content' => 'content',
        'output_image_properties' => 'outputImageProperties',
        'customer_details' => 'customerDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'planned_ship_date' => 'setPlannedShipDate',
        'accounts' => 'setAccounts',
        'content' => 'setContent',
        'output_image_properties' => 'setOutputImageProperties',
        'customer_details' => 'setCustomerDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'planned_ship_date' => 'getPlannedShipDate',
        'accounts' => 'getAccounts',
        'content' => 'getContent',
        'output_image_properties' => 'getOutputImageProperties',
        'customer_details' => 'getCustomerDetails'
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
        $this->setIfExists('planned_ship_date', $data ?? [], null);
        $this->setIfExists('accounts', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('output_image_properties', $data ?? [], null);
        $this->setIfExists('customer_details', $data ?? [], null);
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

        if (!is_null($this->container['planned_ship_date']) && !preg_match("/^\\d{4}\\-(0[1-9]|1[012])\\-(0[1-9]|[12][0-9]|3[01])$/", $this->container['planned_ship_date'])) {
            $invalidProperties[] = "invalid value for 'planned_ship_date', must be conform to the pattern /^\\d{4}\\-(0[1-9]|1[012])\\-(0[1-9]|[12][0-9]|3[01])$/.";
        }

        if (!is_null($this->container['accounts']) && (count($this->container['accounts']) > 2)) {
            $invalidProperties[] = "invalid value for 'accounts', number of items must be less than or equal to 2.";
        }

        if (!is_null($this->container['accounts']) && (count($this->container['accounts']) < 0)) {
            $invalidProperties[] = "invalid value for 'accounts', number of items must be greater than or equal to 0.";
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
     * Gets planned_ship_date
     *
     * @return string|null
     */
    public function getPlannedShipDate()
    {
        return $this->container['planned_ship_date'];
    }

    /**
     * Sets planned_ship_date
     *
     * @param string|null $planned_ship_date The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD
     *
     * @return self
     */
    public function setPlannedShipDate($planned_ship_date)
    {
        if (is_null($planned_ship_date)) {
            throw new \InvalidArgumentException('non-nullable planned_ship_date cannot be null');
        }

        if ((!preg_match("/^\\d{4}\\-(0[1-9]|1[012])\\-(0[1-9]|[12][0-9]|3[01])$/", ObjectSerializer::toString($planned_ship_date)))) {
            throw new \InvalidArgumentException("invalid value for \$planned_ship_date when calling SupermodelIoLogisticsExpressUploadInvoiceDataRequest., must conform to the pattern /^\\d{4}\\-(0[1-9]|1[012])\\-(0[1-9]|[12][0-9]|3[01])$/.");
        }

        $this->container['planned_ship_date'] = $planned_ship_date;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressAccount[]|null
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressAccount[]|null $accounts Please enter all the DHL Express accounts and types to be used for this shipment.   Note: accounts/0/number with typeCode 'shipper' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @return self
     */
    public function setAccounts($accounts)
    {
        if (is_null($accounts)) {
            throw new \InvalidArgumentException('non-nullable accounts cannot be null');
        }

        if ((count($accounts) > 2)) {
            throw new \InvalidArgumentException('invalid value for $accounts when calling SupermodelIoLogisticsExpressUploadInvoiceDataRequest., number of items must be less than or equal to 2.');
        }
        if ((count($accounts) < 0)) {
            throw new \InvalidArgumentException('invalid length for $accounts when calling SupermodelIoLogisticsExpressUploadInvoiceDataRequest., number of items must be greater than or equal to 0.');
        }
        $this->container['accounts'] = $accounts;

        return $this;
    }

    /**
     * Gets content
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent $content content
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
     * Gets output_image_properties
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties|null
     */
    public function getOutputImageProperties()
    {
        return $this->container['output_image_properties'];
    }

    /**
     * Sets output_image_properties
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties|null $output_image_properties output_image_properties
     *
     * @return self
     */
    public function setOutputImageProperties($output_image_properties)
    {
        if (is_null($output_image_properties)) {
            throw new \InvalidArgumentException('non-nullable output_image_properties cannot be null');
        }
        $this->container['output_image_properties'] = $output_image_properties;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails|null
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails|null $customer_details customer_details
     *
     * @return self
     */
    public function setCustomerDetails($customer_details)
    {
        if (is_null($customer_details)) {
            throw new \InvalidArgumentException('non-nullable customer_details cannot be null');
        }
        $this->container['customer_details'] = $customer_details;

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


