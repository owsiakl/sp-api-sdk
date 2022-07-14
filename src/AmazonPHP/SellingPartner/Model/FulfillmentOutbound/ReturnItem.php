<?php declare(strict_types=1);
/**
 * ReturnItem.
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
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class ReturnItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ReturnItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_return_item_id' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'amazon_shipment_id' => 'string',
        'seller_return_reason_code' => 'string',
        'return_comment' => 'string',
        'amazon_return_reason_code' => 'string',
        'status' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentReturnItemStatus',
        'status_changed_date' => '\DateTime',
        'return_authorization_id' => 'string',
        'return_received_condition' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItemDisposition',
        'fulfillment_center_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'seller_return_item_id' => null,
        'seller_fulfillment_order_item_id' => null,
        'amazon_shipment_id' => null,
        'seller_return_reason_code' => null,
        'return_comment' => null,
        'amazon_return_reason_code' => null,
        'status' => null,
        'status_changed_date' => 'date-time',
        'return_authorization_id' => null,
        'return_received_condition' => null,
        'fulfillment_center_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'seller_return_item_id' => 'sellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'amazonShipmentId',
        'seller_return_reason_code' => 'sellerReturnReasonCode',
        'return_comment' => 'returnComment',
        'amazon_return_reason_code' => 'amazonReturnReasonCode',
        'status' => 'status',
        'status_changed_date' => 'statusChangedDate',
        'return_authorization_id' => 'returnAuthorizationId',
        'return_received_condition' => 'returnReceivedCondition',
        'fulfillment_center_id' => 'fulfillmentCenterId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_return_item_id' => 'setSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'seller_return_reason_code' => 'setSellerReturnReasonCode',
        'return_comment' => 'setReturnComment',
        'amazon_return_reason_code' => 'setAmazonReturnReasonCode',
        'status' => 'setStatus',
        'status_changed_date' => 'setStatusChangedDate',
        'return_authorization_id' => 'setReturnAuthorizationId',
        'return_received_condition' => 'setReturnReceivedCondition',
        'fulfillment_center_id' => 'setFulfillmentCenterId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_return_item_id' => 'getSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'seller_return_reason_code' => 'getSellerReturnReasonCode',
        'return_comment' => 'getReturnComment',
        'amazon_return_reason_code' => 'getAmazonReturnReasonCode',
        'status' => 'getStatus',
        'status_changed_date' => 'getStatusChangedDate',
        'return_authorization_id' => 'getReturnAuthorizationId',
        'return_received_condition' => 'getReturnReceivedCondition',
        'fulfillment_center_id' => 'getFulfillmentCenterId',
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
        $this->container['seller_return_item_id'] = $data['seller_return_item_id'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['seller_return_reason_code'] = $data['seller_return_reason_code'] ?? null;
        $this->container['return_comment'] = $data['return_comment'] ?? null;
        $this->container['amazon_return_reason_code'] = $data['amazon_return_reason_code'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['status_changed_date'] = $data['status_changed_date'] ?? null;
        $this->container['return_authorization_id'] = $data['return_authorization_id'] ?? null;
        $this->container['return_received_condition'] = $data['return_received_condition'] ?? null;
        $this->container['fulfillment_center_id'] = $data['fulfillment_center_id'] ?? null;
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
        if ($this->container['seller_return_item_id'] === null) {
            throw new AssertionException("'seller_return_item_id' can't be null");
        }

        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            throw new AssertionException("'seller_fulfillment_order_item_id' can't be null");
        }

        if ($this->container['amazon_shipment_id'] === null) {
            throw new AssertionException("'amazon_shipment_id' can't be null");
        }

        if ($this->container['seller_return_reason_code'] === null) {
            throw new AssertionException("'seller_return_reason_code' can't be null");
        }

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ($this->container['status_changed_date'] === null) {
            throw new AssertionException("'status_changed_date' can't be null");
        }
    }

    /**
     * Gets seller_return_item_id.
     */
    public function getSellerReturnItemId() : string
    {
        return $this->container['seller_return_item_id'];
    }

    /**
     * Sets seller_return_item_id.
     *
     * @param string $seller_return_item_id an identifier assigned by the seller to the return item
     */
    public function setSellerReturnItemId(string $seller_return_item_id) : self
    {
        $this->container['seller_return_item_id'] = $seller_return_item_id;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     */
    public function getSellerFulfillmentOrderItemId() : string
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id the identifier assigned to the item by the seller when the fulfillment order was created
     */
    public function setSellerFulfillmentOrderItemId(string $seller_fulfillment_order_item_id) : self
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets amazon_shipment_id.
     */
    public function getAmazonShipmentId() : string
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id.
     *
     * @param string $amazon_shipment_id the identifier for the shipment that is associated with the return item
     */
    public function setAmazonShipmentId(string $amazon_shipment_id) : self
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets seller_return_reason_code.
     */
    public function getSellerReturnReasonCode() : string
    {
        return $this->container['seller_return_reason_code'];
    }

    /**
     * Sets seller_return_reason_code.
     *
     * @param string $seller_return_reason_code the return reason code assigned to the return item by the seller
     */
    public function setSellerReturnReasonCode(string $seller_return_reason_code) : self
    {
        $this->container['seller_return_reason_code'] = $seller_return_reason_code;

        return $this;
    }

    /**
     * Gets return_comment.
     */
    public function getReturnComment() : ?string
    {
        return $this->container['return_comment'];
    }

    /**
     * Sets return_comment.
     *
     * @param null|string $return_comment an optional comment about the return item
     */
    public function setReturnComment(?string $return_comment) : self
    {
        $this->container['return_comment'] = $return_comment;

        return $this;
    }

    /**
     * Gets amazon_return_reason_code.
     */
    public function getAmazonReturnReasonCode() : ?string
    {
        return $this->container['amazon_return_reason_code'];
    }

    /**
     * Sets amazon_return_reason_code.
     *
     * @param null|string $amazon_return_reason_code the return reason code that the Amazon fulfillment center assigned to the return item
     */
    public function setAmazonReturnReasonCode(?string $amazon_return_reason_code) : self
    {
        $this->container['amazon_return_reason_code'] = $amazon_return_reason_code;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : FulfillmentReturnItemStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentReturnItemStatus $status status
     */
    public function setStatus(FulfillmentReturnItemStatus $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_changed_date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getStatusChangedDate() : \DateTimeInterface
    {
        return $this->container['status_changed_date'];
    }

    /**
     * Sets status_changed_date.
     *
     * @param \DateTime $status_changed_date status_changed_date
     */
    public function setStatusChangedDate(\DateTimeInterface $status_changed_date) : self
    {
        $this->container['status_changed_date'] = $status_changed_date;

        return $this;
    }

    /**
     * Gets return_authorization_id.
     */
    public function getReturnAuthorizationId() : ?string
    {
        return $this->container['return_authorization_id'];
    }

    /**
     * Sets return_authorization_id.
     *
     * @param null|string $return_authorization_id Identifies the return authorization used to return this item. See ReturnAuthorization.
     */
    public function setReturnAuthorizationId(?string $return_authorization_id) : self
    {
        $this->container['return_authorization_id'] = $return_authorization_id;

        return $this;
    }

    /**
     * Gets return_received_condition.
     */
    public function getReturnReceivedCondition() : ?ReturnItemDisposition
    {
        return $this->container['return_received_condition'];
    }

    /**
     * Sets return_received_condition.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItemDisposition $return_received_condition return_received_condition
     */
    public function setReturnReceivedCondition(?ReturnItemDisposition $return_received_condition) : self
    {
        $this->container['return_received_condition'] = $return_received_condition;

        return $this;
    }

    /**
     * Gets fulfillment_center_id.
     */
    public function getFulfillmentCenterId() : ?string
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id.
     *
     * @param null|string $fulfillment_center_id the identifier for the Amazon fulfillment center that processed the return item
     */
    public function setFulfillmentCenterId(?string $fulfillment_center_id) : self
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

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
