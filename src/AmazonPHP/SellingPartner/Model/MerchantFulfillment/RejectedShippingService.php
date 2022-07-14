<?php declare(strict_types=1);
/**
 * RejectedShippingService.
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
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class RejectedShippingService implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RejectedShippingService';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'carrier_name' => 'string',
        'shipping_service_name' => 'string',
        'shipping_service_id' => 'string',
        'rejection_reason_code' => 'string',
        'rejection_reason_message' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'carrier_name' => null,
        'shipping_service_name' => null,
        'shipping_service_id' => null,
        'rejection_reason_code' => null,
        'rejection_reason_message' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'carrier_name' => 'CarrierName',
        'shipping_service_name' => 'ShippingServiceName',
        'shipping_service_id' => 'ShippingServiceId',
        'rejection_reason_code' => 'RejectionReasonCode',
        'rejection_reason_message' => 'RejectionReasonMessage',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'carrier_name' => 'setCarrierName',
        'shipping_service_name' => 'setShippingServiceName',
        'shipping_service_id' => 'setShippingServiceId',
        'rejection_reason_code' => 'setRejectionReasonCode',
        'rejection_reason_message' => 'setRejectionReasonMessage',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'carrier_name' => 'getCarrierName',
        'shipping_service_name' => 'getShippingServiceName',
        'shipping_service_id' => 'getShippingServiceId',
        'rejection_reason_code' => 'getRejectionReasonCode',
        'rejection_reason_message' => 'getRejectionReasonMessage',
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
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['shipping_service_name'] = $data['shipping_service_name'] ?? null;
        $this->container['shipping_service_id'] = $data['shipping_service_id'] ?? null;
        $this->container['rejection_reason_code'] = $data['rejection_reason_code'] ?? null;
        $this->container['rejection_reason_message'] = $data['rejection_reason_message'] ?? null;
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
        if ($this->container['carrier_name'] === null) {
            throw new AssertionException("'carrier_name' can't be null");
        }

        if ($this->container['shipping_service_name'] === null) {
            throw new AssertionException("'shipping_service_name' can't be null");
        }

        if ($this->container['shipping_service_id'] === null) {
            throw new AssertionException("'shipping_service_id' can't be null");
        }

        if ($this->container['rejection_reason_code'] === null) {
            throw new AssertionException("'rejection_reason_code' can't be null");
        }
    }

    /**
     * Gets carrier_name.
     */
    public function getCarrierName() : string
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name.
     *
     * @param string $carrier_name The rejected shipping carrier name. e.g. USPS
     */
    public function setCarrierName(string $carrier_name) : self
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets shipping_service_name.
     */
    public function getShippingServiceName() : string
    {
        return $this->container['shipping_service_name'];
    }

    /**
     * Sets shipping_service_name.
     *
     * @param string $shipping_service_name The rejected shipping service localized name. e.g. FedEx Standard Overnight
     */
    public function setShippingServiceName(string $shipping_service_name) : self
    {
        $this->container['shipping_service_name'] = $shipping_service_name;

        return $this;
    }

    /**
     * Gets shipping_service_id.
     */
    public function getShippingServiceId() : string
    {
        return $this->container['shipping_service_id'];
    }

    /**
     * Sets shipping_service_id.
     *
     * @param string $shipping_service_id an Amazon-defined shipping service identifier
     */
    public function setShippingServiceId(string $shipping_service_id) : self
    {
        $this->container['shipping_service_id'] = $shipping_service_id;

        return $this;
    }

    /**
     * Gets rejection_reason_code.
     */
    public function getRejectionReasonCode() : string
    {
        return $this->container['rejection_reason_code'];
    }

    /**
     * Sets rejection_reason_code.
     *
     * @param string $rejection_reason_code A reason code meant to be consumed programatically. e.g. CARRIER_CANNOT_SHIP_TO_POBOX
     */
    public function setRejectionReasonCode(string $rejection_reason_code) : self
    {
        $this->container['rejection_reason_code'] = $rejection_reason_code;

        return $this;
    }

    /**
     * Gets rejection_reason_message.
     */
    public function getRejectionReasonMessage() : ?string
    {
        return $this->container['rejection_reason_message'];
    }

    /**
     * Sets rejection_reason_message.
     *
     * @param null|string $rejection_reason_message a localized human readable description of the rejected reason
     */
    public function setRejectionReasonMessage(?string $rejection_reason_message) : self
    {
        $this->container['rejection_reason_message'] = $rejection_reason_message;

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
