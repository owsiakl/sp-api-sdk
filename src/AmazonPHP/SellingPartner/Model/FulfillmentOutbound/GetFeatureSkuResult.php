<?php declare(strict_types=1);
/**
 * GetFeatureSkuResult.
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
class GetFeatureSkuResult implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetFeatureSkuResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'feature_name' => 'string',
        'is_eligible' => 'bool',
        'ineligible_reasons' => 'string[]',
        'sku_info' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSku',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'marketplace_id' => null,
        'feature_name' => null,
        'is_eligible' => null,
        'ineligible_reasons' => null,
        'sku_info' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'feature_name' => 'featureName',
        'is_eligible' => 'isEligible',
        'ineligible_reasons' => 'ineligibleReasons',
        'sku_info' => 'skuInfo',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'feature_name' => 'setFeatureName',
        'is_eligible' => 'setIsEligible',
        'ineligible_reasons' => 'setIneligibleReasons',
        'sku_info' => 'setSkuInfo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'feature_name' => 'getFeatureName',
        'is_eligible' => 'getIsEligible',
        'ineligible_reasons' => 'getIneligibleReasons',
        'sku_info' => 'getSkuInfo',
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['feature_name'] = $data['feature_name'] ?? null;
        $this->container['is_eligible'] = $data['is_eligible'] ?? null;
        $this->container['ineligible_reasons'] = $data['ineligible_reasons'] ?? null;
        $this->container['sku_info'] = $data['sku_info'] ?? null;
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

        if ($this->container['feature_name'] === null) {
            throw new AssertionException("'feature_name' can't be null");
        }

        if ($this->container['is_eligible'] === null) {
            throw new AssertionException("'is_eligible' can't be null");
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
     * @param string $marketplace_id the requested marketplace
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets feature_name.
     */
    public function getFeatureName() : string
    {
        return $this->container['feature_name'];
    }

    /**
     * Sets feature_name.
     *
     * @param string $feature_name the name of the feature
     */
    public function setFeatureName(string $feature_name) : self
    {
        $this->container['feature_name'] = $feature_name;

        return $this;
    }

    /**
     * Gets is_eligible.
     */
    public function getIsEligible() : bool
    {
        return $this->container['is_eligible'];
    }

    /**
     * Sets is_eligible.
     *
     * @param bool $is_eligible when true, the seller SKU is eligible for the requested feature
     */
    public function setIsEligible(bool $is_eligible) : self
    {
        $this->container['is_eligible'] = $is_eligible;

        return $this;
    }

    /**
     * Gets ineligible_reasons.
     *
     * @return null|string[]
     */
    public function getIneligibleReasons() : ?array
    {
        return $this->container['ineligible_reasons'];
    }

    /**
     * Sets ineligible_reasons.
     *
     * @param null|string[] $ineligible_reasons A list of one or more reasons that the seller SKU is ineligibile for the feature.  Possible values: * MERCHANT_NOT_ENROLLED - The merchant isn't enrolled for the feature. * SKU_NOT_ELIGIBLE - The SKU doesn't reside in a warehouse that supports the feature. * INVALID_SKU - There is an issue with the SKU provided.
     */
    public function setIneligibleReasons(?array $ineligible_reasons) : self
    {
        $this->container['ineligible_reasons'] = $ineligible_reasons;

        return $this;
    }

    /**
     * Gets sku_info.
     */
    public function getSkuInfo() : ?FeatureSku
    {
        return $this->container['sku_info'];
    }

    /**
     * Sets sku_info.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSku $sku_info sku_info
     */
    public function setSkuInfo(?FeatureSku $sku_info) : self
    {
        $this->container['sku_info'] = $sku_info;

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
