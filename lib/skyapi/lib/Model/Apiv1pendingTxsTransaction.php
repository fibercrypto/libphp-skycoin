<?php
/**
 * Apiv1pendingTxsTransaction
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
 * Apiv1pendingTxsTransaction Class Doc Comment
 *
 * @category Class
 * @description BlockTransactionVerbose has readable transaction data for transactions inside a block. It differs from Transaction in that it includes metadata for transaction inputs and the calculated coinhour fee spent by the block
 * @package  Skyapi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Apiv1pendingTxsTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'apiv1pendingTxs_transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'outputs' => '\Skyapi\Model\Apiv1exploreraddressOutputs[]',
        'inner_hash' => 'string',
        'inputs' => 'string[]',
        'sigs' => 'string[]',
        'length' => 'int',
        'txid' => 'string',
        'type' => 'int',
        'timestamp' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'outputs' => null,
        'inner_hash' => null,
        'inputs' => null,
        'sigs' => null,
        'length' => 'int32',
        'txid' => null,
        'type' => 'int32',
        'timestamp' => 'int32'
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
        'outputs' => 'outputs',
        'inner_hash' => 'inner_hash',
        'inputs' => 'inputs',
        'sigs' => 'sigs',
        'length' => 'length',
        'txid' => 'txid',
        'type' => 'type',
        'timestamp' => 'timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'outputs' => 'setOutputs',
        'inner_hash' => 'setInnerHash',
        'inputs' => 'setInputs',
        'sigs' => 'setSigs',
        'length' => 'setLength',
        'txid' => 'setTxid',
        'type' => 'setType',
        'timestamp' => 'setTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'outputs' => 'getOutputs',
        'inner_hash' => 'getInnerHash',
        'inputs' => 'getInputs',
        'sigs' => 'getSigs',
        'length' => 'getLength',
        'txid' => 'getTxid',
        'type' => 'getType',
        'timestamp' => 'getTimestamp'
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
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['inner_hash'] = isset($data['inner_hash']) ? $data['inner_hash'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['sigs'] = isset($data['sigs']) ? $data['sigs'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
     * Gets outputs
     *
     * @return \Skyapi\Model\Apiv1exploreraddressOutputs[]|null
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param \Skyapi\Model\Apiv1exploreraddressOutputs[]|null $outputs outputs
     *
     * @return $this
     */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;

        return $this;
    }

    /**
     * Gets inner_hash
     *
     * @return string|null
     */
    public function getInnerHash()
    {
        return $this->container['inner_hash'];
    }

    /**
     * Sets inner_hash
     *
     * @param string|null $inner_hash inner_hash
     *
     * @return $this
     */
    public function setInnerHash($inner_hash)
    {
        $this->container['inner_hash'] = $inner_hash;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return string[]|null
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param string[]|null $inputs inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets sigs
     *
     * @return string[]|null
     */
    public function getSigs()
    {
        return $this->container['sigs'];
    }

    /**
     * Sets sigs
     *
     * @param string[]|null $sigs sigs
     *
     * @return $this
     */
    public function setSigs($sigs)
    {
        $this->container['sigs'] = $sigs;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets txid
     *
     * @return string|null
     */
    public function getTxid()
    {
        return $this->container['txid'];
    }

    /**
     * Sets txid
     *
     * @param string|null $txid txid
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int|null $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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

