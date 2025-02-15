<?php declare(strict_types=1);
/**
 * ShipmentStatus.
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
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
class ShipmentStatus
{
    /**
     * Possible values of this enum.
     */
    public const WORKING = 'WORKING';

    public const SHIPPED = 'SHIPPED';

    public const RECEIVING = 'RECEIVING';

    public const CANCELLED = 'CANCELLED';

    public const DELETED = 'DELETED';

    public const CLOSED = 'CLOSED';

    public const ERROR = 'ERROR';

    public const IN_TRANSIT = 'IN_TRANSIT';

    public const DELIVERED = 'DELIVERED';

    public const CHECKED_IN = 'CHECKED_IN';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::WORKING,
            self::SHIPPED,
            self::RECEIVING,
            self::CANCELLED,
            self::DELETED,
            self::CLOSED,
            self::ERROR,
            self::IN_TRANSIT,
            self::DELIVERED,
            self::CHECKED_IN,
        ];
    }
}
