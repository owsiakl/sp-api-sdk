<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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
class CreateInboundShipmentPlanRequest implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateInboundShipmentPlanRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'ship_from_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address',
        'label_prep_preference' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepPreference',
        'ship_to_country_code' => 'string',
        'ship_to_country_subdivision_code' => 'string',
        'inbound_shipment_plan_request_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentPlanRequestItem[]',
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
        'ship_from_address' => null,
        'label_prep_preference' => null,
        'ship_to_country_code' => null,
        'ship_to_country_subdivision_code' => null,
        'inbound_shipment_plan_request_items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ship_from_address' => 'ShipFromAddress',
        'label_prep_preference' => 'LabelPrepPreference',
        'ship_to_country_code' => 'ShipToCountryCode',
        'ship_to_country_subdivision_code' => 'ShipToCountrySubdivisionCode',
        'inbound_shipment_plan_request_items' => 'InboundShipmentPlanRequestItems',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'ship_from_address' => 'setShipFromAddress',
        'label_prep_preference' => 'setLabelPrepPreference',
        'ship_to_country_code' => 'setShipToCountryCode',
        'ship_to_country_subdivision_code' => 'setShipToCountrySubdivisionCode',
        'inbound_shipment_plan_request_items' => 'setInboundShipmentPlanRequestItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'ship_from_address' => 'getShipFromAddress',
        'label_prep_preference' => 'getLabelPrepPreference',
        'ship_to_country_code' => 'getShipToCountryCode',
        'ship_to_country_subdivision_code' => 'getShipToCountrySubdivisionCode',
        'inbound_shipment_plan_request_items' => 'getInboundShipmentPlanRequestItems',
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
        $this->container['ship_from_address'] = $data['ship_from_address'] ?? null;
        $this->container['label_prep_preference'] = $data['label_prep_preference'] ?? null;
        $this->container['ship_to_country_code'] = $data['ship_to_country_code'] ?? null;
        $this->container['ship_to_country_subdivision_code'] = $data['ship_to_country_subdivision_code'] ?? null;
        $this->container['inbound_shipment_plan_request_items'] = $data['inbound_shipment_plan_request_items'] ?? null;
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
        if ($this->container['ship_from_address'] === null) {
            throw new AssertionException("'ship_from_address' can't be null");
        }

        $this->container['ship_from_address']->validate();

        if ($this->container['label_prep_preference'] === null) {
            throw new AssertionException("'label_prep_preference' can't be null");
        }

        if ($this->container['inbound_shipment_plan_request_items'] === null) {
            throw new AssertionException("'inbound_shipment_plan_request_items' can't be null");
        }
    }

    /**
     * Gets ship_from_address.
     */
    public function getShipFromAddress() : Address
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address $ship_from_address ship_from_address
     */
    public function setShipFromAddress(Address $ship_from_address) : self
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets label_prep_preference.
     */
    public function getLabelPrepPreference() : LabelPrepPreference
    {
        return $this->container['label_prep_preference'];
    }

    /**
     * Sets label_prep_preference.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepPreference $label_prep_preference label_prep_preference
     */
    public function setLabelPrepPreference(LabelPrepPreference $label_prep_preference) : self
    {
        $this->container['label_prep_preference'] = $label_prep_preference;

        return $this;
    }

    /**
     * Gets ship_to_country_code.
     */
    public function getShipToCountryCode() : ?string
    {
        return $this->container['ship_to_country_code'];
    }

    /**
     * Sets ship_to_country_code.
     *
     * @param null|string $ship_to_country_code The two-character country code for the country where the inbound shipment is to be sent.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.   Values:   ShipToCountryCode values for North America:  * CA – Canada  * MX - Mexico  * US - United States  ShipToCountryCode values for MCI sellers in Europe:  * DE – Germany  * ES – Spain  * FR – France  * GB – United Kingdom  * IT – Italy  Default: The country code for the seller's home marketplace.
     */
    public function setShipToCountryCode(?string $ship_to_country_code) : self
    {
        $this->container['ship_to_country_code'] = $ship_to_country_code;

        return $this;
    }

    /**
     * Gets ship_to_country_subdivision_code.
     */
    public function getShipToCountrySubdivisionCode() : ?string
    {
        return $this->container['ship_to_country_subdivision_code'];
    }

    /**
     * Sets ship_to_country_subdivision_code.
     *
     * @param null|string $ship_to_country_subdivision_code The two-character country code, followed by a dash and then up to three characters that represent the subdivision of the country where the inbound shipment is to be sent. For example, \"IN-MH\". In full ISO 3166-2 format.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.
     */
    public function setShipToCountrySubdivisionCode(?string $ship_to_country_subdivision_code) : self
    {
        $this->container['ship_to_country_subdivision_code'] = $ship_to_country_subdivision_code;

        return $this;
    }

    /**
     * Gets inbound_shipment_plan_request_items.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentPlanRequestItem[]
     */
    public function getInboundShipmentPlanRequestItems() : array
    {
        return $this->container['inbound_shipment_plan_request_items'];
    }

    /**
     * Sets inbound_shipment_plan_request_items.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentPlanRequestItem[] $inbound_shipment_plan_request_items inbound_shipment_plan_request_items
     */
    public function setInboundShipmentPlanRequestItems(array $inbound_shipment_plan_request_items) : self
    {
        $this->container['inbound_shipment_plan_request_items'] = $inbound_shipment_plan_request_items;

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
