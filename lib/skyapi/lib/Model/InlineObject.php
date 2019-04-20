<?php
/**
 * InlineObject
 *
 * PHP version 5
 *
 * @category Class
 * @package  Skyapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Skycoin REST API.
 *
 * Skycoin is a next-generation cryptocurrency.
 *
 * OpenAPI spec version: 0.25.1
 * Contact: skycoin.doe@example.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Skyapi\Model;

use \ArrayAccess;
use \Skyapi\ObjectSerializer;

/**
 * InlineObject Class Doc Comment
 *
 * @category Class
 * @package  Skyapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'change_address' => 'string',
        'hours_selection' => '\Skyapi\Model\Apiv1wallettransactionHoursSelection',
        'ignore_unconfirmed' => 'bool',
        'to' => '\Skyapi\Model\Apiv1wallettransactionTo[]',
        'wallet' => '\Skyapi\Model\Apiv1wallettransactionWallet'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'change_address' => null,
        'hours_selection' => null,
        'ignore_unconfirmed' => null,
        'to' => null,
        'wallet' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'change_address' => 'change_address',
        'hours_selection' => 'hours_selection',
        'ignore_unconfirmed' => 'ignore_unconfirmed',
        'to' => 'to',
        'wallet' => 'wallet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'change_address' => 'setChangeAddress',
        'hours_selection' => 'setHoursSelection',
        'ignore_unconfirmed' => 'setIgnoreUnconfirmed',
        'to' => 'setTo',
        'wallet' => 'setWallet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'change_address' => 'getChangeAddress',
        'hours_selection' => 'getHoursSelection',
        'ignore_unconfirmed' => 'getIgnoreUnconfirmed',
        'to' => 'getTo',
        'wallet' => 'getWallet'
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
        $this->container['change_address'] = isset($data['change_address']) ? $data['change_address'] : null;
        $this->container['hours_selection'] = isset($data['hours_selection']) ? $data['hours_selection'] : null;
        $this->container['ignore_unconfirmed'] = isset($data['ignore_unconfirmed']) ? $data['ignore_unconfirmed'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['wallet'] = isset($data['wallet']) ? $data['wallet'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets change_address
     *
     * @return string|null
     */
    public function getChangeAddress()
    {
        return $this->container['change_address'];
    }

    /**
     * Sets change_address
     *
     * @param string|null $change_address change_address
     *
     * @return $this
     */
    public function setChangeAddress($change_address)
    {
        $this->container['change_address'] = $change_address;

        return $this;
    }

    /**
     * Gets hours_selection
     *
     * @return \Skyapi\Model\Apiv1wallettransactionHoursSelection|null
     */
    public function getHoursSelection()
    {
        return $this->container['hours_selection'];
    }

    /**
     * Sets hours_selection
     *
     * @param \Skyapi\Model\Apiv1wallettransactionHoursSelection|null $hours_selection hours_selection
     *
     * @return $this
     */
    public function setHoursSelection($hours_selection)
    {
        $this->container['hours_selection'] = $hours_selection;

        return $this;
    }

    /**
     * Gets ignore_unconfirmed
     *
     * @return bool|null
     */
    public function getIgnoreUnconfirmed()
    {
        return $this->container['ignore_unconfirmed'];
    }

    /**
     * Sets ignore_unconfirmed
     *
     * @param bool|null $ignore_unconfirmed ignore_unconfirmed
     *
     * @return $this
     */
    public function setIgnoreUnconfirmed($ignore_unconfirmed)
    {
        $this->container['ignore_unconfirmed'] = $ignore_unconfirmed;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \Skyapi\Model\Apiv1wallettransactionTo[]|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Skyapi\Model\Apiv1wallettransactionTo[]|null $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets wallet
     *
     * @return \Skyapi\Model\Apiv1wallettransactionWallet|null
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param \Skyapi\Model\Apiv1wallettransactionWallet|null $wallet wallet
     *
     * @return $this
     */
    public function setWallet($wallet)
    {
        $this->container['wallet'] = $wallet;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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
}

