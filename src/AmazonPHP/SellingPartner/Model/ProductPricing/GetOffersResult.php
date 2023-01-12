<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetOffersResult implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetOffersResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'asin' => 'string',
        'sku' => 'string',
        'item_condition' => '\AmazonPHP\SellingPartner\Model\ProductPricing\ConditionType',
        'status' => 'string',
        'identifier' => '\AmazonPHP\SellingPartner\Model\ProductPricing\ItemIdentifier',
        'summary' => '\AmazonPHP\SellingPartner\Model\ProductPricing\Summary',
        'offers' => '\AmazonPHP\SellingPartner\Model\ProductPricing\OfferDetail[]',
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
        'marketplace_id' => null,
        'asin' => null,
        'sku' => null,
        'item_condition' => null,
        'status' => null,
        'identifier' => null,
        'summary' => null,
        'offers' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'MarketplaceID',
        'asin' => 'ASIN',
        'sku' => 'SKU',
        'item_condition' => 'ItemCondition',
        'status' => 'status',
        'identifier' => 'Identifier',
        'summary' => 'Summary',
        'offers' => 'Offers',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'asin' => 'setAsin',
        'sku' => 'setSku',
        'item_condition' => 'setItemCondition',
        'status' => 'setStatus',
        'identifier' => 'setIdentifier',
        'summary' => 'setSummary',
        'offers' => 'setOffers',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'asin' => 'getAsin',
        'sku' => 'getSku',
        'item_condition' => 'getItemCondition',
        'status' => 'getStatus',
        'identifier' => 'getIdentifier',
        'summary' => 'getSummary',
        'offers' => 'getOffers',
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['offers'] = $data['offers'] ?? null;
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
        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }

        if ($this->container['item_condition'] === null) {
            throw new AssertionException("'item_condition' can't be null");
        }

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ($this->container['identifier'] === null) {
            throw new AssertionException("'identifier' can't be null");
        }

        $this->container['identifier']->validate();

        if ($this->container['summary'] === null) {
            throw new AssertionException("'summary' can't be null");
        }

        $this->container['summary']->validate();

        if ($this->container['offers'] === null) {
            throw new AssertionException("'offers' can't be null");
        }

        if ((\count($this->container['offers']) > 20)) {
            throw new AssertionException("invalid value for 'offers', number of items must be less than or equal to 20.");
        }
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id a marketplace identifier
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets asin.
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number (ASIN) of the item
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets sku.
     */
    public function getSku() : ?string
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku.
     *
     * @param null|string $sku the stock keeping unit (SKU) of the item
     */
    public function setSku(?string $sku) : self
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets item_condition.
     */
    public function getItemCondition() : ConditionType
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\ConditionType $item_condition item_condition
     */
    public function setItemCondition(ConditionType $item_condition) : self
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : string
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status the status of the operation
     */
    public function setStatus(string $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets identifier.
     */
    public function getIdentifier() : ItemIdentifier
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\ItemIdentifier $identifier identifier
     */
    public function setIdentifier(ItemIdentifier $identifier) : self
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets summary.
     */
    public function getSummary() : Summary
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\Summary $summary summary
     */
    public function setSummary(Summary $summary) : self
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets offers.
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\OfferDetail[]
     */
    public function getOffers() : array
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\OfferDetail[] $offers offers
     */
    public function setOffers(array $offers) : self
    {
        $this->container['offers'] = $offers;

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
