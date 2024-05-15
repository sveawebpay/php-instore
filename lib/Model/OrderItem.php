<?php
/**
 * OrderItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Svea\Instore
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Svea Webpay Instore Api
 *
 * The Instore API's enables cash registers to create Svea orders that the customer can checkout by following a link sent to them by SMS
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.55
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Svea\Instore\Model;

use \ArrayAccess;
use \Svea\Instore\ObjectSerializer;

/**
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @package  Svea\Instore
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'articleNumber' => 'string',
        'name' => 'string',
        'quantity' => 'int',
        'unitPrice' => 'int',
        'discountPercent' => 'int',
        'discountAmount' => 'int',
        'vatPercent' => 'int',
        'unit' => 'string',
        'rowNumber' => 'int',
        'merchantData' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'articleNumber' => null,
        'name' => null,
        'quantity' => 'int64',
        'unitPrice' => 'int64',
        'discountPercent' => 'int64',
        'discountAmount' => 'int64',
        'vatPercent' => 'int64',
        'unit' => null,
        'rowNumber' => 'int32',
        'merchantData' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'articleNumber' => 'articleNumber',
        'name' => 'name',
        'quantity' => 'quantity',
        'unitPrice' => 'unitPrice',
        'discountPercent' => 'discountPercent',
        'discountAmount' => 'discountAmount',
        'vatPercent' => 'vatPercent',
        'unit' => 'unit',
        'rowNumber' => 'rowNumber',
        'merchantData' => 'merchantData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'articleNumber' => 'setArticleNumber',
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'unitPrice' => 'setUnitPrice',
        'discountPercent' => 'setDiscountPercent',
        'discountAmount' => 'setDiscountAmount',
        'vatPercent' => 'setVatPercent',
        'unit' => 'setUnit',
        'rowNumber' => 'setRowNumber',
        'merchantData' => 'setMerchantData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'articleNumber' => 'getArticleNumber',
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'unitPrice' => 'getUnitPrice',
        'discountPercent' => 'getDiscountPercent',
        'discountAmount' => 'getDiscountAmount',
        'vatPercent' => 'getVatPercent',
        'unit' => 'getUnit',
        'rowNumber' => 'getRowNumber',
        'merchantData' => 'getMerchantData'
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
        return self::$swaggerModelName;
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
        $this->container['articleNumber'] = isset($data['articleNumber']) ? $data['articleNumber'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['discountPercent'] = isset($data['discountPercent']) ? $data['discountPercent'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['vatPercent'] = isset($data['vatPercent']) ? $data['vatPercent'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['rowNumber'] = isset($data['rowNumber']) ? $data['rowNumber'] : null;
        $this->container['merchantData'] = isset($data['merchantData']) ? $data['merchantData'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['unitPrice'] === null) {
            $invalidProperties[] = "'unitPrice' can't be null";
        }
        if ($this->container['vatPercent'] === null) {
            $invalidProperties[] = "'vatPercent' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
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
     * Gets articleNumber
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->container['articleNumber'];
    }

    /**
     * Sets articleNumber
     *
     * @param string $articleNumber Article number of the order item.
     *
     * @return $this
     */
    public function setArticleNumber($articleNumber)
    {
        $this->container['articleNumber'] = $articleNumber;

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
     * @param string $name Item name. This will be visible to the end customer on e.g. the invoice.   Max length limit 40 character
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The quantity of units for order item. Note! Minor format used; setting the value 100 equals quantity of 1.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return int
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param int $unitPrice Price per unit including vat. Note! Minor format used; setting the value 100 equals 1 unit
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets discountPercent
     *
     * @return int
     */
    public function getDiscountPercent()
    {
        return $this->container['discountPercent'];
    }

    /**
     * Sets discountPercent
     *
     * @param int $discountPercent The discount percent for the order row. Note! Minor format used; setting the value 1000 equals 10% discount
     *
     * @return $this
     */
    public function setDiscountPercent($discountPercent)
    {
        $this->container['discountPercent'] = $discountPercent;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param int $discountAmount The discount amount for this item including vat. Note! Minor format used; setting the value 100 equals 1 unit
     *
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets vatPercent
     *
     * @return int
     */
    public function getVatPercent()
    {
        return $this->container['vatPercent'];
    }

    /**
     * Sets vatPercent
     *
     * @param int $vatPercent The vat percent for this item. The value must be a valid vat percent for the country code of the request. Note! Minor format used; setting the value 2500 equals 25% vat.
     *
     * @return $this
     */
    public function setVatPercent($vatPercent)
    {
        $this->container['vatPercent'] = $vatPercent;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit The unit to measure the items.
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets rowNumber
     *
     * @return int
     */
    public function getRowNumber()
    {
        return $this->container['rowNumber'];
    }

    /**
     * Sets rowNumber
     *
     * @param int $rowNumber Each row can be assigned a row number for future reference
     *
     * @return $this
     */
    public function setRowNumber($rowNumber)
    {
        $this->container['rowNumber'] = $rowNumber;

        return $this;
    }

    /**
     * Gets merchantData
     *
     * @return string
     */
    public function getMerchantData()
    {
        return $this->container['merchantData'];
    }

    /**
     * Sets merchantData
     *
     * @param string $merchantData Optional data, size for clothes etc.  Max length limit 255 character
     *
     * @return $this
     */
    public function setMerchantData($merchantData)
    {
        $this->container['merchantData'] = $merchantData;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}