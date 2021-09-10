<?php declare(strict_types=1);
/**
 * InboundShipmentPlan.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InboundShipmentPlan implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'InboundShipmentPlan';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipment_id' => 'string',
        'destination_fulfillment_center_id' => 'string',
        'ship_to_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address',
        'label_prep_type' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepType',
        'items' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentPlanItem[]',
        'estimated_box_contents_fee' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentsFeeDetails',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipment_id' => null,
        'destination_fulfillment_center_id' => null,
        'ship_to_address' => null,
        'label_prep_type' => null,
        'items' => null,
        'estimated_box_contents_fee' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipment_id' => 'ShipmentId',
        'destination_fulfillment_center_id' => 'DestinationFulfillmentCenterId',
        'ship_to_address' => 'ShipToAddress',
        'label_prep_type' => 'LabelPrepType',
        'items' => 'Items',
        'estimated_box_contents_fee' => 'EstimatedBoxContentsFee',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_id' => 'setShipmentId',
        'destination_fulfillment_center_id' => 'setDestinationFulfillmentCenterId',
        'ship_to_address' => 'setShipToAddress',
        'label_prep_type' => 'setLabelPrepType',
        'items' => 'setItems',
        'estimated_box_contents_fee' => 'setEstimatedBoxContentsFee',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_id' => 'getShipmentId',
        'destination_fulfillment_center_id' => 'getDestinationFulfillmentCenterId',
        'ship_to_address' => 'getShipToAddress',
        'label_prep_type' => 'getLabelPrepType',
        'items' => 'getItems',
        'estimated_box_contents_fee' => 'getEstimatedBoxContentsFee',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['destination_fulfillment_center_id'] = $data['destination_fulfillment_center_id'] ?? null;
        $this->container['ship_to_address'] = $data['ship_to_address'] ?? null;
        $this->container['label_prep_type'] = $data['label_prep_type'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['estimated_box_contents_fee'] = $data['estimated_box_contents_fee'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }

        if ($this->container['destination_fulfillment_center_id'] === null) {
            $invalidProperties[] = "'destination_fulfillment_center_id' can't be null";
        }

        if ($this->container['ship_to_address'] === null) {
            $invalidProperties[] = "'ship_to_address' can't be null";
        }

        if ($this->container['label_prep_type'] === null) {
            $invalidProperties[] = "'label_prep_type' can't be null";
        }

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets shipment_id.
     */
    public function getShipmentId() : string
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param string $shipment_id a shipment identifier originally returned by the createInboundShipmentPlan operation
     */
    public function setShipmentId(string $shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets destination_fulfillment_center_id.
     */
    public function getDestinationFulfillmentCenterId() : string
    {
        return $this->container['destination_fulfillment_center_id'];
    }

    /**
     * Sets destination_fulfillment_center_id.
     *
     * @param string $destination_fulfillment_center_id an Amazon fulfillment center identifier created by Amazon
     */
    public function setDestinationFulfillmentCenterId(string $destination_fulfillment_center_id) : self
    {
        $this->container['destination_fulfillment_center_id'] = $destination_fulfillment_center_id;

        return $this;
    }

    /**
     * Gets ship_to_address.
     */
    public function getShipToAddress() : Address
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address $ship_to_address ship_to_address
     */
    public function setShipToAddress(Address $ship_to_address) : self
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets label_prep_type.
     */
    public function getLabelPrepType() : LabelPrepType
    {
        return $this->container['label_prep_type'];
    }

    /**
     * Sets label_prep_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepType $label_prep_type label_prep_type
     */
    public function setLabelPrepType(LabelPrepType $label_prep_type) : self
    {
        $this->container['label_prep_type'] = $label_prep_type;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentPlanItem[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentPlanItem[] $items a list of inbound shipment plan item information
     */
    public function setItems(array $items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets estimated_box_contents_fee.
     */
    public function getEstimatedBoxContentsFee() : ?BoxContentsFeeDetails
    {
        return $this->container['estimated_box_contents_fee'];
    }

    /**
     * Sets estimated_box_contents_fee.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentsFeeDetails $estimated_box_contents_fee estimated_box_contents_fee
     */
    public function setEstimatedBoxContentsFee(?BoxContentsFeeDetails $estimated_box_contents_fee) : self
    {
        $this->container['estimated_box_contents_fee'] = $estimated_box_contents_fee;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
