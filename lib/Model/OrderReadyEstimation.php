<?php
/**
 * OrderReadyEstimation
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
 * OrderReadyEstimation Class Doc Comment
 *
 * @category Class
 * @description Information related to the order ready time estimation.
 * @package  Grab\GrabfoodApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderReadyEstimation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderReadyEstimation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_change' => 'bool',
        'estimated_order_ready_time' => '\DateTime',
        'max_order_ready_time' => '\DateTime',
        'new_order_ready_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_change' => null,
        'estimated_order_ready_time' => 'date-time',
        'max_order_ready_time' => 'date-time',
        'new_order_ready_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'allow_change' => false,
        'estimated_order_ready_time' => false,
        'max_order_ready_time' => false,
        'new_order_ready_time' => true
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
        'allow_change' => 'allowChange',
        'estimated_order_ready_time' => 'estimatedOrderReadyTime',
        'max_order_ready_time' => 'maxOrderReadyTime',
        'new_order_ready_time' => 'newOrderReadyTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_change' => 'setAllowChange',
        'estimated_order_ready_time' => 'setEstimatedOrderReadyTime',
        'max_order_ready_time' => 'setMaxOrderReadyTime',
        'new_order_ready_time' => 'setNewOrderReadyTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_change' => 'getAllowChange',
        'estimated_order_ready_time' => 'getEstimatedOrderReadyTime',
        'max_order_ready_time' => 'getMaxOrderReadyTime',
        'new_order_ready_time' => 'getNewOrderReadyTime'
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
        $this->setIfExists('allow_change', $data ?? [], null);
        $this->setIfExists('estimated_order_ready_time', $data ?? [], null);
        $this->setIfExists('max_order_ready_time', $data ?? [], null);
        $this->setIfExists('new_order_ready_time', $data ?? [], null);
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

        if ($this->container['allow_change'] === null) {
            $invalidProperties[] = "'allow_change' can't be null";
        }
        if ($this->container['estimated_order_ready_time'] === null) {
            $invalidProperties[] = "'estimated_order_ready_time' can't be null";
        }
        if ($this->container['max_order_ready_time'] === null) {
            $invalidProperties[] = "'max_order_ready_time' can't be null";
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
     * Gets allow_change
     *
     * @return bool
     */
    public function getAllowChange()
    {
        return $this->container['allow_change'];
    }

    /**
     * Sets allow_change
     *
     * @param bool $allow_change A boolean value indicating if the order ready time can be changed.
     *
     * @return self
     */
    public function setAllowChange($allow_change)
    {
        if (is_null($allow_change)) {
            throw new \InvalidArgumentException('non-nullable allow_change cannot be null');
        }
        $this->container['allow_change'] = $allow_change;

        return $this;
    }

    /**
     * Gets estimated_order_ready_time
     *
     * @return \DateTime
     */
    public function getEstimatedOrderReadyTime()
    {
        return $this->container['estimated_order_ready_time'];
    }

    /**
     * Sets estimated_order_ready_time
     *
     * @param \DateTime $estimated_order_ready_time The order ready time for this order estimated by GrabFood, based on ISO_8601/RFC3339.
     *
     * @return self
     */
    public function setEstimatedOrderReadyTime($estimated_order_ready_time)
    {
        if (is_null($estimated_order_ready_time)) {
            throw new \InvalidArgumentException('non-nullable estimated_order_ready_time cannot be null');
        }
        $this->container['estimated_order_ready_time'] = $estimated_order_ready_time;

        return $this;
    }

    /**
     * Gets max_order_ready_time
     *
     * @return \DateTime
     */
    public function getMaxOrderReadyTime()
    {
        return $this->container['max_order_ready_time'];
    }

    /**
     * Sets max_order_ready_time
     *
     * @param \DateTime $max_order_ready_time The max allowed order ready time for this order, based on ISO_8601/RFC3339.
     *
     * @return self
     */
    public function setMaxOrderReadyTime($max_order_ready_time)
    {
        if (is_null($max_order_ready_time)) {
            throw new \InvalidArgumentException('non-nullable max_order_ready_time cannot be null');
        }
        $this->container['max_order_ready_time'] = $max_order_ready_time;

        return $this;
    }

    /**
     * Gets new_order_ready_time
     *
     * @return \DateTime|null
     */
    public function getNewOrderReadyTime()
    {
        return $this->container['new_order_ready_time'];
    }

    /**
     * Sets new_order_ready_time
     *
     * @param \DateTime|null $new_order_ready_time The new order ready time for this order. Only present after a new order ready time is set (default will be null), based on ISO_8601/RFC3339.
     *
     * @return self
     */
    public function setNewOrderReadyTime($new_order_ready_time)
    {
        if (is_null($new_order_ready_time)) {
            array_push($this->openAPINullablesSetToNull, 'new_order_ready_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('new_order_ready_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['new_order_ready_time'] = $new_order_ready_time;

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


