<?php declare(strict_types=1);
/**
 * TransportHeader.
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
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
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
class TransportHeader implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'TransportHeader';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_id' => 'string',
        'shipment_id' => 'string',
        'is_partnered' => 'bool',
        'shipment_type' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentType',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'seller_id' => null,
        'shipment_id' => null,
        'is_partnered' => null,
        'shipment_type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'seller_id' => 'SellerId',
        'shipment_id' => 'ShipmentId',
        'is_partnered' => 'IsPartnered',
        'shipment_type' => 'ShipmentType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_id' => 'setSellerId',
        'shipment_id' => 'setShipmentId',
        'is_partnered' => 'setIsPartnered',
        'shipment_type' => 'setShipmentType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_id' => 'getSellerId',
        'shipment_id' => 'getShipmentId',
        'is_partnered' => 'getIsPartnered',
        'shipment_type' => 'getShipmentType',
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
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['is_partnered'] = $data['is_partnered'] ?? null;
        $this->container['shipment_type'] = $data['shipment_type'] ?? null;
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['seller_id'] === null) {
            throw new AssertionException("'seller_id' can't be null");
        }

        if ($this->container['shipment_id'] === null) {
            throw new AssertionException("'shipment_id' can't be null");
        }

        if ($this->container['is_partnered'] === null) {
            throw new AssertionException("'is_partnered' can't be null");
        }

        if ($this->container['shipment_type'] === null) {
            throw new AssertionException("'shipment_type' can't be null");
        }
    }

    /**
     * Gets seller_id.
     */
    public function getSellerId() : string
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param string $seller_id the Amazon seller identifier
     */
    public function setSellerId(string $seller_id) : self
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
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
     * Gets is_partnered.
     */
    public function getIsPartnered() : bool
    {
        return $this->container['is_partnered'];
    }

    /**
     * Sets is_partnered.
     *
     * @param bool $is_partnered Indicates whether a putTransportDetails request is for a partnered carrier.  Possible values:  * true – Request is for an Amazon-partnered carrier.  * false – Request is for a non-Amazon-partnered carrier.
     */
    public function setIsPartnered(bool $is_partnered) : self
    {
        $this->container['is_partnered'] = $is_partnered;

        return $this;
    }

    /**
     * Gets shipment_type.
     */
    public function getShipmentType() : ShipmentType
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentType $shipment_type shipment_type
     */
    public function setShipmentType(ShipmentType $shipment_type) : self
    {
        $this->container['shipment_type'] = $shipment_type;

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
