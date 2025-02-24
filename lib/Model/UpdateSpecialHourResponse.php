<?php
/**
 * UpdateSpecialHourResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Grab\GrabfoodApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

// Copyright 2024 Grabtaxi Holdings PTE LTE (GRAB), All rights reserved.
// Use of this source code is governed by an MIT-style license that can be found in the LICENSE file

/*
GrabFood

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

API version: 1.1.3
*/

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Grab\GrabfoodApiSdk\Model;

use \ArrayAccess;
use \Grab\GrabfoodApiSdk\ObjectSerializer;

/**
 * UpdateSpecialHourResponse Class Doc Comment
 *
 * @category Class
 * @description Object contain update store special hour response
 * @package  Grab\GrabfoodApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateSpecialHourResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateSpecialHourResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_reasons' => 'string[]',
        'order_count' => 'int',
        'scheduled_order_count' => 'int',
        'close_immediately' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_reasons' => null,
        'order_count' => 'int64',
        'scheduled_order_count' => 'int64',
        'close_immediately' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'error_reasons' => true,
        'order_count' => false,
        'scheduled_order_count' => false,
        'close_immediately' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'error_reasons' => 'errorReasons',
        'order_count' => 'orderCount',
        'scheduled_order_count' => 'scheduledOrderCount',
        'close_immediately' => 'closeImmediately'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_reasons' => 'setErrorReasons',
        'order_count' => 'setOrderCount',
        'scheduled_order_count' => 'setScheduledOrderCount',
        'close_immediately' => 'setCloseImmediately'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_reasons' => 'getErrorReasons',
        'order_count' => 'getOrderCount',
        'scheduled_order_count' => 'getScheduledOrderCount',
        'close_immediately' => 'getCloseImmediately'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const ERROR_REASONS_PENDING_ORDERS = 'PendingOrders';
    public const ERROR_REASONS_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorReasonsAllowableValues()
    {
        return [
            self::ERROR_REASONS_PENDING_ORDERS,
            self::ERROR_REASONS_UNKNOWN_DEFAULT_OPEN_API,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('error_reasons', $data ?? [], null);
        $this->setIfExists('order_count', $data ?? [], null);
        $this->setIfExists('scheduled_order_count', $data ?? [], null);
        $this->setIfExists('close_immediately', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_count'] === null) {
            $invalidProperties[] = "'order_count' can't be null";
        }
        if ($this->container['scheduled_order_count'] === null) {
            $invalidProperties[] = "'scheduled_order_count' can't be null";
        }
        if ($this->container['close_immediately'] === null) {
            $invalidProperties[] = "'close_immediately' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets error_reasons
     *
     * @return string[]|null
     */
    public function getErrorReasons()
    {
        return $this->container['error_reasons'];
    }

    /**
     * Sets error_reasons
     *
     * @param string[]|null $error_reasons Error message when updating store delivery hour. `null` indicates no error.
     *
     * @return self
     */
    public function setErrorReasons($error_reasons)
    {
        if (is_null($error_reasons)) {
            array_push($this->openAPINullablesSetToNull, 'error_reasons');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('error_reasons', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getErrorReasonsAllowableValues();
        if (!is_null($error_reasons) && array_diff($error_reasons, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'error_reasons', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_reasons'] = $error_reasons;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count Total active order for the day.
     *
     * @return self
     */
    public function setOrderCount($order_count)
    {
        if (is_null($order_count)) {
            throw new \InvalidArgumentException('non-nullable order_count cannot be null');
        }
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets scheduled_order_count
     *
     * @return int
     */
    public function getScheduledOrderCount()
    {
        return $this->container['scheduled_order_count'];
    }

    /**
     * Sets scheduled_order_count
     *
     * @param int $scheduled_order_count Total scheduled order during store close period.
     *
     * @return self
     */
    public function setScheduledOrderCount($scheduled_order_count)
    {
        if (is_null($scheduled_order_count)) {
            throw new \InvalidArgumentException('non-nullable scheduled_order_count cannot be null');
        }
        $this->container['scheduled_order_count'] = $scheduled_order_count;

        return $this;
    }

    /**
     * Gets close_immediately
     *
     * @return bool
     */
    public function getCloseImmediately()
    {
        return $this->container['close_immediately'];
    }

    /**
     * Sets close_immediately
     *
     * @param bool $close_immediately Indicate the store status after updating special hours.
     *
     * @return self
     */
    public function setCloseImmediately($close_immediately)
    {
        if (is_null($close_immediately)) {
            throw new \InvalidArgumentException('non-nullable close_immediately cannot be null');
        }
        $this->container['close_immediately'] = $close_immediately;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


