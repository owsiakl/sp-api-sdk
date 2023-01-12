<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FBAInventory;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for FBA Inventory.
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UnfulfillableQuantity implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'UnfulfillableQuantity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'total_unfulfillable_quantity' => 'int',
        'customer_damaged_quantity' => 'int',
        'warehouse_damaged_quantity' => 'int',
        'distributor_damaged_quantity' => 'int',
        'carrier_damaged_quantity' => 'int',
        'defective_quantity' => 'int',
        'expired_quantity' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'total_unfulfillable_quantity' => null,
        'customer_damaged_quantity' => null,
        'warehouse_damaged_quantity' => null,
        'distributor_damaged_quantity' => null,
        'carrier_damaged_quantity' => null,
        'defective_quantity' => null,
        'expired_quantity' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'total_unfulfillable_quantity' => 'totalUnfulfillableQuantity',
        'customer_damaged_quantity' => 'customerDamagedQuantity',
        'warehouse_damaged_quantity' => 'warehouseDamagedQuantity',
        'distributor_damaged_quantity' => 'distributorDamagedQuantity',
        'carrier_damaged_quantity' => 'carrierDamagedQuantity',
        'defective_quantity' => 'defectiveQuantity',
        'expired_quantity' => 'expiredQuantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'total_unfulfillable_quantity' => 'setTotalUnfulfillableQuantity',
        'customer_damaged_quantity' => 'setCustomerDamagedQuantity',
        'warehouse_damaged_quantity' => 'setWarehouseDamagedQuantity',
        'distributor_damaged_quantity' => 'setDistributorDamagedQuantity',
        'carrier_damaged_quantity' => 'setCarrierDamagedQuantity',
        'defective_quantity' => 'setDefectiveQuantity',
        'expired_quantity' => 'setExpiredQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'total_unfulfillable_quantity' => 'getTotalUnfulfillableQuantity',
        'customer_damaged_quantity' => 'getCustomerDamagedQuantity',
        'warehouse_damaged_quantity' => 'getWarehouseDamagedQuantity',
        'distributor_damaged_quantity' => 'getDistributorDamagedQuantity',
        'carrier_damaged_quantity' => 'getCarrierDamagedQuantity',
        'defective_quantity' => 'getDefectiveQuantity',
        'expired_quantity' => 'getExpiredQuantity',
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
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['total_unfulfillable_quantity'] = $data['total_unfulfillable_quantity'] ?? null;
        $this->container['customer_damaged_quantity'] = $data['customer_damaged_quantity'] ?? null;
        $this->container['warehouse_damaged_quantity'] = $data['warehouse_damaged_quantity'] ?? null;
        $this->container['distributor_damaged_quantity'] = $data['distributor_damaged_quantity'] ?? null;
        $this->container['carrier_damaged_quantity'] = $data['carrier_damaged_quantity'] ?? null;
        $this->container['defective_quantity'] = $data['defective_quantity'] ?? null;
        $this->container['expired_quantity'] = $data['expired_quantity'] ?? null;
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
    }

    /**
     * Gets total_unfulfillable_quantity.
     */
    public function getTotalUnfulfillableQuantity() : ?int
    {
        return $this->container['total_unfulfillable_quantity'];
    }

    /**
     * Sets total_unfulfillable_quantity.
     *
     * @param null|int $total_unfulfillable_quantity the total number of units in Amazon's fulfillment network in unsellable condition
     */
    public function setTotalUnfulfillableQuantity(?int $total_unfulfillable_quantity) : self
    {
        $this->container['total_unfulfillable_quantity'] = $total_unfulfillable_quantity;

        return $this;
    }

    /**
     * Gets customer_damaged_quantity.
     */
    public function getCustomerDamagedQuantity() : ?int
    {
        return $this->container['customer_damaged_quantity'];
    }

    /**
     * Sets customer_damaged_quantity.
     *
     * @param null|int $customer_damaged_quantity the number of units in customer damaged disposition
     */
    public function setCustomerDamagedQuantity(?int $customer_damaged_quantity) : self
    {
        $this->container['customer_damaged_quantity'] = $customer_damaged_quantity;

        return $this;
    }

    /**
     * Gets warehouse_damaged_quantity.
     */
    public function getWarehouseDamagedQuantity() : ?int
    {
        return $this->container['warehouse_damaged_quantity'];
    }

    /**
     * Sets warehouse_damaged_quantity.
     *
     * @param null|int $warehouse_damaged_quantity the number of units in warehouse damaged disposition
     */
    public function setWarehouseDamagedQuantity(?int $warehouse_damaged_quantity) : self
    {
        $this->container['warehouse_damaged_quantity'] = $warehouse_damaged_quantity;

        return $this;
    }

    /**
     * Gets distributor_damaged_quantity.
     */
    public function getDistributorDamagedQuantity() : ?int
    {
        return $this->container['distributor_damaged_quantity'];
    }

    /**
     * Sets distributor_damaged_quantity.
     *
     * @param null|int $distributor_damaged_quantity the number of units in distributor damaged disposition
     */
    public function setDistributorDamagedQuantity(?int $distributor_damaged_quantity) : self
    {
        $this->container['distributor_damaged_quantity'] = $distributor_damaged_quantity;

        return $this;
    }

    /**
     * Gets carrier_damaged_quantity.
     */
    public function getCarrierDamagedQuantity() : ?int
    {
        return $this->container['carrier_damaged_quantity'];
    }

    /**
     * Sets carrier_damaged_quantity.
     *
     * @param null|int $carrier_damaged_quantity the number of units in carrier damaged disposition
     */
    public function setCarrierDamagedQuantity(?int $carrier_damaged_quantity) : self
    {
        $this->container['carrier_damaged_quantity'] = $carrier_damaged_quantity;

        return $this;
    }

    /**
     * Gets defective_quantity.
     */
    public function getDefectiveQuantity() : ?int
    {
        return $this->container['defective_quantity'];
    }

    /**
     * Sets defective_quantity.
     *
     * @param null|int $defective_quantity the number of units in defective disposition
     */
    public function setDefectiveQuantity(?int $defective_quantity) : self
    {
        $this->container['defective_quantity'] = $defective_quantity;

        return $this;
    }

    /**
     * Gets expired_quantity.
     */
    public function getExpiredQuantity() : ?int
    {
        return $this->container['expired_quantity'];
    }

    /**
     * Sets expired_quantity.
     *
     * @param null|int $expired_quantity the number of units in expired disposition
     */
    public function setExpiredQuantity(?int $expired_quantity) : self
    {
        $this->container['expired_quantity'] = $expired_quantity;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
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
    #[\ReturnTypeWillChange]
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
