<?php
/**
 * SupermodelIoLogisticsExpressCreateShipmentResponse
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
 * SupermodelIoLogisticsExpressCreateShipmentResponse Class Doc Comment
 *
 * @category Class
 * @description MyDHL API REST /shipments response schema
 * @package  MyDHL\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressCreateShipmentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressCreateShipmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'shipment_tracking_number' => 'string',
        'cancel_pickup_url' => 'string',
        'tracking_url' => 'string',
        'dispatch_confirmation_number' => 'string',
        'packages' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesInner[]',
        'documents' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsInner[]',
        'on_demand_delivery_url' => 'string',
        'shipment_details' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInner[]',
        'shipment_charges' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesInner[]',
        'barcode_info' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo',
        'estimated_delivery_date' => '\MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate',
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
        'url' => null,
        'shipment_tracking_number' => null,
        'cancel_pickup_url' => null,
        'tracking_url' => null,
        'dispatch_confirmation_number' => null,
        'packages' => null,
        'documents' => null,
        'on_demand_delivery_url' => null,
        'shipment_details' => null,
        'shipment_charges' => null,
        'barcode_info' => null,
        'estimated_delivery_date' => null,
        'warnings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url' => false,
        'shipment_tracking_number' => false,
        'cancel_pickup_url' => false,
        'tracking_url' => false,
        'dispatch_confirmation_number' => false,
        'packages' => false,
        'documents' => false,
        'on_demand_delivery_url' => false,
        'shipment_details' => false,
        'shipment_charges' => false,
        'barcode_info' => false,
        'estimated_delivery_date' => false,
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
        'url' => 'url',
        'shipment_tracking_number' => 'shipmentTrackingNumber',
        'cancel_pickup_url' => 'cancelPickupUrl',
        'tracking_url' => 'trackingUrl',
        'dispatch_confirmation_number' => 'dispatchConfirmationNumber',
        'packages' => 'packages',
        'documents' => 'documents',
        'on_demand_delivery_url' => 'onDemandDeliveryURL',
        'shipment_details' => 'shipmentDetails',
        'shipment_charges' => 'shipmentCharges',
        'barcode_info' => 'barcodeInfo',
        'estimated_delivery_date' => 'estimatedDeliveryDate',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'shipment_tracking_number' => 'setShipmentTrackingNumber',
        'cancel_pickup_url' => 'setCancelPickupUrl',
        'tracking_url' => 'setTrackingUrl',
        'dispatch_confirmation_number' => 'setDispatchConfirmationNumber',
        'packages' => 'setPackages',
        'documents' => 'setDocuments',
        'on_demand_delivery_url' => 'setOnDemandDeliveryUrl',
        'shipment_details' => 'setShipmentDetails',
        'shipment_charges' => 'setShipmentCharges',
        'barcode_info' => 'setBarcodeInfo',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'shipment_tracking_number' => 'getShipmentTrackingNumber',
        'cancel_pickup_url' => 'getCancelPickupUrl',
        'tracking_url' => 'getTrackingUrl',
        'dispatch_confirmation_number' => 'getDispatchConfirmationNumber',
        'packages' => 'getPackages',
        'documents' => 'getDocuments',
        'on_demand_delivery_url' => 'getOnDemandDeliveryUrl',
        'shipment_details' => 'getShipmentDetails',
        'shipment_charges' => 'getShipmentCharges',
        'barcode_info' => 'getBarcodeInfo',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
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
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('shipment_tracking_number', $data ?? [], null);
        $this->setIfExists('cancel_pickup_url', $data ?? [], null);
        $this->setIfExists('tracking_url', $data ?? [], null);
        $this->setIfExists('dispatch_confirmation_number', $data ?? [], null);
        $this->setIfExists('packages', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('on_demand_delivery_url', $data ?? [], null);
        $this->setIfExists('shipment_details', $data ?? [], null);
        $this->setIfExists('shipment_charges', $data ?? [], null);
        $this->setIfExists('barcode_info', $data ?? [], null);
        $this->setIfExists('estimated_delivery_date', $data ?? [], null);
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

        if (!is_null($this->container['packages']) && (count($this->container['packages']) > 999)) {
            $invalidProperties[] = "invalid value for 'packages', number of items must be less than or equal to 999.";
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
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL where the request has been sent to
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets shipment_tracking_number
     *
     * @return string|null
     */
    public function getShipmentTrackingNumber()
    {
        return $this->container['shipment_tracking_number'];
    }

    /**
     * Sets shipment_tracking_number
     *
     * @param string|null $shipment_tracking_number Here you will receive Shipment Identification Number of your package
     *
     * @return self
     */
    public function setShipmentTrackingNumber($shipment_tracking_number)
    {
        if (is_null($shipment_tracking_number)) {
            throw new \InvalidArgumentException('non-nullable shipment_tracking_number cannot be null');
        }
        $this->container['shipment_tracking_number'] = $shipment_tracking_number;

        return $this;
    }

    /**
     * Gets cancel_pickup_url
     *
     * @return string|null
     */
    public function getCancelPickupUrl()
    {
        return $this->container['cancel_pickup_url'];
    }

    /**
     * Sets cancel_pickup_url
     *
     * @param string|null $cancel_pickup_url If you requested pickup for your shipment you can use this URL to cancel the pickup
     *
     * @return self
     */
    public function setCancelPickupUrl($cancel_pickup_url)
    {
        if (is_null($cancel_pickup_url)) {
            throw new \InvalidArgumentException('non-nullable cancel_pickup_url cannot be null');
        }
        $this->container['cancel_pickup_url'] = $cancel_pickup_url;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string|null $tracking_url You can use ths URL to track your shipment
     *
     * @return self
     */
    public function setTrackingUrl($tracking_url)
    {
        if (is_null($tracking_url)) {
            throw new \InvalidArgumentException('non-nullable tracking_url cannot be null');
        }
        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }

    /**
     * Gets dispatch_confirmation_number
     *
     * @return string|null
     */
    public function getDispatchConfirmationNumber()
    {
        return $this->container['dispatch_confirmation_number'];
    }

    /**
     * Sets dispatch_confirmation_number
     *
     * @param string|null $dispatch_confirmation_number If you asked for pickup service here you will find Dispach Confirmation Number which identifies your pickup booking
     *
     * @return self
     */
    public function setDispatchConfirmationNumber($dispatch_confirmation_number)
    {
        if (is_null($dispatch_confirmation_number)) {
            throw new \InvalidArgumentException('non-nullable dispatch_confirmation_number cannot be null');
        }
        $this->container['dispatch_confirmation_number'] = $dispatch_confirmation_number;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesInner[]|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesInner[]|null $packages Here you can find information for all pieces your shipment is having like Piece Identification Number
     *
     * @return self
     */
    public function setPackages($packages)
    {
        if (is_null($packages)) {
            throw new \InvalidArgumentException('non-nullable packages cannot be null');
        }

        if ((count($packages) > 999)) {
            throw new \InvalidArgumentException('invalid value for $packages when calling SupermodelIoLogisticsExpressCreateShipmentResponse., number of items must be less than or equal to 999.');
        }
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsInner[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsInner[]|null $documents Here you can find all documents created for the shipment like Transport and WaybillDoc labels, Invoice, Receipt
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets on_demand_delivery_url
     *
     * @return string|null
     */
    public function getOnDemandDeliveryUrl()
    {
        return $this->container['on_demand_delivery_url'];
    }

    /**
     * Sets on_demand_delivery_url
     *
     * @param string|null $on_demand_delivery_url In this field you will find the On Demand Delivery (ODD) URL link if requested
     *
     * @return self
     */
    public function setOnDemandDeliveryUrl($on_demand_delivery_url)
    {
        if (is_null($on_demand_delivery_url)) {
            throw new \InvalidArgumentException('non-nullable on_demand_delivery_url cannot be null');
        }
        $this->container['on_demand_delivery_url'] = $on_demand_delivery_url;

        return $this;
    }

    /**
     * Gets shipment_details
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInner[]|null
     */
    public function getShipmentDetails()
    {
        return $this->container['shipment_details'];
    }

    /**
     * Sets shipment_details
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInner[]|null $shipment_details Here you can find additional information related to your shipment when you ask for it in the request
     *
     * @return self
     */
    public function setShipmentDetails($shipment_details)
    {
        if (is_null($shipment_details)) {
            throw new \InvalidArgumentException('non-nullable shipment_details cannot be null');
        }
        $this->container['shipment_details'] = $shipment_details;

        return $this;
    }

    /**
     * Gets shipment_charges
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesInner[]|null
     */
    public function getShipmentCharges()
    {
        return $this->container['shipment_charges'];
    }

    /**
     * Sets shipment_charges
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesInner[]|null $shipment_charges Here you can find rates related to your shipment
     *
     * @return self
     */
    public function setShipmentCharges($shipment_charges)
    {
        if (is_null($shipment_charges)) {
            throw new \InvalidArgumentException('non-nullable shipment_charges cannot be null');
        }
        $this->container['shipment_charges'] = $shipment_charges;

        return $this;
    }

    /**
     * Gets barcode_info
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo|null
     */
    public function getBarcodeInfo()
    {
        return $this->container['barcode_info'];
    }

    /**
     * Sets barcode_info
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo|null $barcode_info barcode_info
     *
     * @return self
     */
    public function setBarcodeInfo($barcode_info)
    {
        if (is_null($barcode_info)) {
            throw new \InvalidArgumentException('non-nullable barcode_info cannot be null');
        }
        $this->container['barcode_info'] = $barcode_info;

        return $this;
    }

    /**
     * Gets estimated_delivery_date
     *
     * @return \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param \MyDHL\Client\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate|null $estimated_delivery_date estimated_delivery_date
     *
     * @return self
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        if (is_null($estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable estimated_delivery_date cannot be null');
        }
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

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


