<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ListingsItems;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Listings Items.
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API.  For more information, see the [Listings Items API Use Case Guide](doc:listings-items-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Issue implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const SEVERITY_ERROR = 'ERROR';

    final public const SEVERITY_WARNING = 'WARNING';

    final public const SEVERITY_INFO = 'INFO';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Issue';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'code' => 'string',
        'message' => 'string',
        'severity' => 'string',
        'attribute_names' => 'string[]',
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
        'code' => null,
        'message' => null,
        'severity' => null,
        'attribute_names' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'code' => 'code',
        'message' => 'message',
        'severity' => 'severity',
        'attribute_names' => 'attributeNames',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'severity' => 'setSeverity',
        'attribute_names' => 'setAttributeNames',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'severity' => 'getSeverity',
        'attribute_names' => 'getAttributeNames',
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['attribute_names'] = $data['attribute_names'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getSeverityAllowableValues() : array
    {
        return [
            self::SEVERITY_ERROR,
            self::SEVERITY_WARNING,
            self::SEVERITY_INFO,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['code'] === null) {
            throw new AssertionException("'code' can't be null");
        }

        if ($this->container['message'] === null) {
            throw new AssertionException("'message' can't be null");
        }

        if ($this->container['severity'] === null) {
            throw new AssertionException("'severity' can't be null");
        }

        $allowedValues = $this->getSeverityAllowableValues();

        if (null !== $this->container['severity'] && !\in_array($this->container['severity'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'severity', must be one of '%s'",
                    $this->container['severity'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets code.
     */
    public function getCode() : string
    {
        return $this->container['code'];
    }

    /**
     * Sets code.
     *
     * @param string $code an issue code that identifies the type of issue
     */
    public function setCode(string $code) : self
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message.
     */
    public function getMessage() : string
    {
        return $this->container['message'];
    }

    /**
     * Sets message.
     *
     * @param string $message a message that describes the issue
     */
    public function setMessage(string $message) : self
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets severity.
     */
    public function getSeverity() : string
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity.
     *
     * @param string $severity the severity of the issue
     */
    public function setSeverity(string $severity) : self
    {
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets attribute_names.
     *
     * @return null|string[]
     */
    public function getAttributeNames() : ?array
    {
        return $this->container['attribute_names'];
    }

    /**
     * Sets attribute_names.
     *
     * @param null|string[] $attribute_names names of the attributes associated with the issue, if applicable
     */
    public function setAttributeNames(?array $attribute_names) : self
    {
        $this->container['attribute_names'] = $attribute_names;

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
