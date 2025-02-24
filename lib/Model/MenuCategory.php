<?php
/**
 * MenuCategory
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
 * MenuCategory Class Doc Comment
 *
 * @category Class
 * @package  Grab\GrabfoodApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MenuCategory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MenuCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'name_translation' => 'array<string,string>',
        'available_status' => 'string',
        'selling_time_id' => 'string',
        'sequence' => 'int',
        'items' => '\Grab\GrabfoodApiSdk\Model\MenuItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'name_translation' => null,
        'available_status' => null,
        'selling_time_id' => null,
        'sequence' => null,
        'items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'name_translation' => false,
        'available_status' => false,
        'selling_time_id' => false,
        'sequence' => false,
        'items' => false
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
        'id' => 'id',
        'name' => 'name',
        'name_translation' => 'nameTranslation',
        'available_status' => 'availableStatus',
        'selling_time_id' => 'sellingTimeID',
        'sequence' => 'sequence',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'name_translation' => 'setNameTranslation',
        'available_status' => 'setAvailableStatus',
        'selling_time_id' => 'setSellingTimeId',
        'sequence' => 'setSequence',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'name_translation' => 'getNameTranslation',
        'available_status' => 'getAvailableStatus',
        'selling_time_id' => 'getSellingTimeId',
        'sequence' => 'getSequence',
        'items' => 'getItems'
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

    public const AVAILABLE_STATUS_AVAILABLE = 'AVAILABLE';
    public const AVAILABLE_STATUS_UNAVAILABLE = 'UNAVAILABLE';
    public const AVAILABLE_STATUS_HIDE = 'HIDE';
    public const AVAILABLE_STATUS_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailableStatusAllowableValues()
    {
        return [
            self::AVAILABLE_STATUS_AVAILABLE,
            self::AVAILABLE_STATUS_UNAVAILABLE,
            self::AVAILABLE_STATUS_HIDE,
            self::AVAILABLE_STATUS_UNKNOWN_DEFAULT_OPEN_API,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('name_translation', $data ?? [], null);
        $this->setIfExists('available_status', $data ?? [], null);
        $this->setIfExists('selling_time_id', $data ?? [], null);
        $this->setIfExists('sequence', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 64)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 60)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 60.";
        }

        if ($this->container['available_status'] === null) {
            $invalidProperties[] = "'available_status' can't be null";
        }
        $allowedValues = $this->getAvailableStatusAllowableValues();
        if (!is_null($this->container['available_status']) && !in_array($this->container['available_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'available_status', must be one of '%s'",
                $this->container['available_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['selling_time_id'] === null) {
            $invalidProperties[] = "'selling_time_id' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The category's ID that is on the partner system. This ID should be unique.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        if ((mb_strlen($id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $id when calling MenuCategory., must be smaller than or equal to 64.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the category.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $name when calling MenuCategory., must be smaller than or equal to 60.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_translation
     *
     * @return array<string,string>|null
     */
    public function getNameTranslation()
    {
        return $this->container['name_translation'];
    }

    /**
     * Sets name_translation
     *
     * @param array<string,string>|null $name_translation Translation of the category name. Only support up to 1 translated language. Refer [Menu Translation](#section/Menu-Translation).
     *
     * @return self
     */
    public function setNameTranslation($name_translation)
    {
        if (is_null($name_translation)) {
            throw new \InvalidArgumentException('non-nullable name_translation cannot be null');
        }
        $this->container['name_translation'] = $name_translation;

        return $this;
    }

    /**
     * Gets available_status
     *
     * @return string
     */
    public function getAvailableStatus()
    {
        return $this->container['available_status'];
    }

    /**
     * Sets available_status
     *
     * @param string $available_status The status for the category. Refer to FAQs for more details about [availableStatus](#section/Menu/What-is-availableStatus).
     *
     * @return self
     */
    public function setAvailableStatus($available_status)
    {
        if (is_null($available_status)) {
            throw new \InvalidArgumentException('non-nullable available_status cannot be null');
        }
        $allowedValues = $this->getAvailableStatusAllowableValues();
        if (!in_array($available_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'available_status', must be one of '%s'",
                    $available_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['available_status'] = $available_status;

        return $this;
    }

    /**
     * Gets selling_time_id
     *
     * @return string
     */
    public function getSellingTimeId()
    {
        return $this->container['selling_time_id'];
    }

    /**
     * Sets selling_time_id
     *
     * @param string $selling_time_id The selling time's ID for the category. All items within the category will apply the same selling time unless there is another selling time specified for the item.
     *
     * @return self
     */
    public function setSellingTimeId($selling_time_id)
    {
        if (is_null($selling_time_id)) {
            throw new \InvalidArgumentException('non-nullable selling_time_id cannot be null');
        }
        $this->container['selling_time_id'] = $selling_time_id;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int|null
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int|null $sequence The sort or display order of the category within the menu.
     *
     * @return self
     */
    public function setSequence($sequence)
    {
        if (is_null($sequence)) {
            throw new \InvalidArgumentException('non-nullable sequence cannot be null');
        }
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Grab\GrabfoodApiSdk\Model\MenuItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Grab\GrabfoodApiSdk\Model\MenuItem[] $items An array of item JSON objects. Max 300 allowed per category. Refer to [Items](#items) for more information.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

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


