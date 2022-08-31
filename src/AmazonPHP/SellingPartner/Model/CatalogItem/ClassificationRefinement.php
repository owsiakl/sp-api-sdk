<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\CatalogItem;

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
class ClassificationRefinement implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ClassificationRefinement';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'number_of_results' => 'int',
        'display_name' => 'string',
        'classification_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'number_of_results' => null,
        'display_name' => null,
        'classification_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'number_of_results' => 'numberOfResults',
        'display_name' => 'displayName',
        'classification_id' => 'classificationId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'number_of_results' => 'setNumberOfResults',
        'display_name' => 'setDisplayName',
        'classification_id' => 'setClassificationId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'number_of_results' => 'getNumberOfResults',
        'display_name' => 'getDisplayName',
        'classification_id' => 'getClassificationId',
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
        $this->container['number_of_results'] = $data['number_of_results'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['classification_id'] = $data['classification_id'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
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
     *
     * @return string
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
        if ($this->container['number_of_results'] === null) {
            throw new AssertionException("'number_of_results' can't be null");
        }

        if ($this->container['display_name'] === null) {
            throw new AssertionException("'display_name' can't be null");
        }

        if ($this->container['classification_id'] === null) {
            throw new AssertionException("'classification_id' can't be null");
        }
    }

    /**
     * Gets number_of_results.
     */
    public function getNumberOfResults() : int
    {
        return $this->container['number_of_results'];
    }

    /**
     * Sets number_of_results.
     *
     * @param int $number_of_results the estimated number of results that would still be returned if refinement key applied
     *
     * @return self
     */
    public function setNumberOfResults(int $number_of_results) : self
    {
        $this->container['number_of_results'] = $number_of_results;

        return $this;
    }

    /**
     * Gets display_name.
     */
    public function getDisplayName() : string
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name.
     *
     * @param string $display_name display name for the classification
     *
     * @return self
     */
    public function setDisplayName(string $display_name) : self
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets classification_id.
     */
    public function getClassificationId() : string
    {
        return $this->container['classification_id'];
    }

    /**
     * Sets classification_id.
     *
     * @param string $classification_id identifier for the classification that can be used for search refinement purposes
     *
     * @return self
     */
    public function setClassificationId(string $classification_id) : self
    {
        $this->container['classification_id'] = $classification_id;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return bool
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
    public function offsetGet($offset)
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
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
