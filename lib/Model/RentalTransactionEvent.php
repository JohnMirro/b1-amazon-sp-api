<?php
/**
 * RentalTransactionEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace B1\AmazonSPAPI\Model;

use \ArrayAccess;
use \B1\AmazonSPAPI\ObjectSerializer;

/**
 * RentalTransactionEvent Class Doc Comment
 *
 * @category Class
 * @description An event related to a rental transaction.
 * @package  B1\AmazonSPAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RentalTransactionEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RentalTransactionEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amazonOrderId' => 'string',
        'rentalEventType' => 'string',
        'extensionLength' => 'int',
        'postedDate' => '\B1\AmazonSPAPI\Model\\DateTime',
        'rentalChargeList' => '\B1\AmazonSPAPI\Model\ChargeComponentList',
        'rentalFeeList' => '\B1\AmazonSPAPI\Model\FeeComponentList',
        'marketplaceName' => 'string',
        'rentalInitialValue' => '\B1\AmazonSPAPI\Model\Currency',
        'rentalReimbursement' => '\B1\AmazonSPAPI\Model\Currency',
        'rentalTaxWithheldList' => '\B1\AmazonSPAPI\Model\TaxWithheldComponentList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amazonOrderId' => null,
        'rentalEventType' => null,
        'extensionLength' => 'int32',
        'postedDate' => null,
        'rentalChargeList' => null,
        'rentalFeeList' => null,
        'marketplaceName' => null,
        'rentalInitialValue' => null,
        'rentalReimbursement' => null,
        'rentalTaxWithheldList' => null
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
        'amazonOrderId' => 'AmazonOrderId',
        'rentalEventType' => 'RentalEventType',
        'extensionLength' => 'ExtensionLength',
        'postedDate' => 'PostedDate',
        'rentalChargeList' => 'RentalChargeList',
        'rentalFeeList' => 'RentalFeeList',
        'marketplaceName' => 'MarketplaceName',
        'rentalInitialValue' => 'RentalInitialValue',
        'rentalReimbursement' => 'RentalReimbursement',
        'rentalTaxWithheldList' => 'RentalTaxWithheldList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'rentalEventType' => 'setRentalEventType',
        'extensionLength' => 'setExtensionLength',
        'postedDate' => 'setPostedDate',
        'rentalChargeList' => 'setRentalChargeList',
        'rentalFeeList' => 'setRentalFeeList',
        'marketplaceName' => 'setMarketplaceName',
        'rentalInitialValue' => 'setRentalInitialValue',
        'rentalReimbursement' => 'setRentalReimbursement',
        'rentalTaxWithheldList' => 'setRentalTaxWithheldList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'rentalEventType' => 'getRentalEventType',
        'extensionLength' => 'getExtensionLength',
        'postedDate' => 'getPostedDate',
        'rentalChargeList' => 'getRentalChargeList',
        'rentalFeeList' => 'getRentalFeeList',
        'marketplaceName' => 'getMarketplaceName',
        'rentalInitialValue' => 'getRentalInitialValue',
        'rentalReimbursement' => 'getRentalReimbursement',
        'rentalTaxWithheldList' => 'getRentalTaxWithheldList'
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
        $this->container['amazonOrderId'] = isset($data['amazonOrderId']) ? $data['amazonOrderId'] : null;
        $this->container['rentalEventType'] = isset($data['rentalEventType']) ? $data['rentalEventType'] : null;
        $this->container['extensionLength'] = isset($data['extensionLength']) ? $data['extensionLength'] : null;
        $this->container['postedDate'] = isset($data['postedDate']) ? $data['postedDate'] : null;
        $this->container['rentalChargeList'] = isset($data['rentalChargeList']) ? $data['rentalChargeList'] : null;
        $this->container['rentalFeeList'] = isset($data['rentalFeeList']) ? $data['rentalFeeList'] : null;
        $this->container['marketplaceName'] = isset($data['marketplaceName']) ? $data['marketplaceName'] : null;
        $this->container['rentalInitialValue'] = isset($data['rentalInitialValue']) ? $data['rentalInitialValue'] : null;
        $this->container['rentalReimbursement'] = isset($data['rentalReimbursement']) ? $data['rentalReimbursement'] : null;
        $this->container['rentalTaxWithheldList'] = isset($data['rentalTaxWithheldList']) ? $data['rentalTaxWithheldList'] : null;
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
     * Gets amazonOrderId
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string $amazonOrderId An Amazon-defined identifier for an order.
     *
     * @return $this
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets rentalEventType
     *
     * @return string
     */
    public function getRentalEventType()
    {
        return $this->container['rentalEventType'];
    }

    /**
     * Sets rentalEventType
     *
     * @param string $rentalEventType The type of rental event.  Possible values:  * RentalCustomerPayment-Buyout - Transaction type that represents when the customer wants to buy out a rented item.  * RentalCustomerPayment-Extension - Transaction type that represents when the customer wants to extend the rental period.  * RentalCustomerRefund-Buyout - Transaction type that represents when the customer requests a refund for the buyout of the rented item.  * RentalCustomerRefund-Extension - Transaction type that represents when the customer requests a refund over the extension on the rented item.  * RentalHandlingFee - Transaction type that represents the fee that Amazon charges sellers who rent through Amazon.  * RentalChargeFailureReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a failed charge.  * RentalLostItemReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a lost item.
     *
     * @return $this
     */
    public function setRentalEventType($rentalEventType)
    {
        $this->container['rentalEventType'] = $rentalEventType;

        return $this;
    }

    /**
     * Gets extensionLength
     *
     * @return int
     */
    public function getExtensionLength()
    {
        return $this->container['extensionLength'];
    }

    /**
     * Sets extensionLength
     *
     * @param int $extensionLength The number of days that the buyer extended an already rented item. This value is only returned for RentalCustomerPayment-Extension and RentalCustomerRefund-Extension events.
     *
     * @return $this
     */
    public function setExtensionLength($extensionLength)
    {
        $this->container['extensionLength'] = $extensionLength;

        return $this;
    }

    /**
     * Gets postedDate
     *
     * @return \B1\AmazonSPAPI\Model\\DateTime
     */
    public function getPostedDate()
    {
        return $this->container['postedDate'];
    }

    /**
     * Sets postedDate
     *
     * @param \B1\AmazonSPAPI\Model\\DateTime $postedDate The date and time when the financial event was posted.
     *
     * @return $this
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

        return $this;
    }

    /**
     * Gets rentalChargeList
     *
     * @return \B1\AmazonSPAPI\Model\ChargeComponentList
     */
    public function getRentalChargeList()
    {
        return $this->container['rentalChargeList'];
    }

    /**
     * Sets rentalChargeList
     *
     * @param \B1\AmazonSPAPI\Model\ChargeComponentList $rentalChargeList A list of charges associated with the rental event.
     *
     * @return $this
     */
    public function setRentalChargeList($rentalChargeList)
    {
        $this->container['rentalChargeList'] = $rentalChargeList;

        return $this;
    }

    /**
     * Gets rentalFeeList
     *
     * @return \B1\AmazonSPAPI\Model\FeeComponentList
     */
    public function getRentalFeeList()
    {
        return $this->container['rentalFeeList'];
    }

    /**
     * Sets rentalFeeList
     *
     * @param \B1\AmazonSPAPI\Model\FeeComponentList $rentalFeeList A list of fees associated with the rental event.
     *
     * @return $this
     */
    public function setRentalFeeList($rentalFeeList)
    {
        $this->container['rentalFeeList'] = $rentalFeeList;

        return $this;
    }

    /**
     * Gets marketplaceName
     *
     * @return string
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplaceName'];
    }

    /**
     * Sets marketplaceName
     *
     * @param string $marketplaceName The name of the marketplace.
     *
     * @return $this
     */
    public function setMarketplaceName($marketplaceName)
    {
        $this->container['marketplaceName'] = $marketplaceName;

        return $this;
    }

    /**
     * Gets rentalInitialValue
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getRentalInitialValue()
    {
        return $this->container['rentalInitialValue'];
    }

    /**
     * Sets rentalInitialValue
     *
     * @param \B1\AmazonSPAPI\Model\Currency $rentalInitialValue The amount of money the customer originally paid to rent the item. This value is only returned for RentalChargeFailureReimbursement and RentalLostItemReimbursement events.
     *
     * @return $this
     */
    public function setRentalInitialValue($rentalInitialValue)
    {
        $this->container['rentalInitialValue'] = $rentalInitialValue;

        return $this;
    }

    /**
     * Gets rentalReimbursement
     *
     * @return \B1\AmazonSPAPI\Model\Currency
     */
    public function getRentalReimbursement()
    {
        return $this->container['rentalReimbursement'];
    }

    /**
     * Sets rentalReimbursement
     *
     * @param \B1\AmazonSPAPI\Model\Currency $rentalReimbursement The amount of money Amazon sends the seller to compensate for a lost item or a failed charge. This value is only returned for RentalChargeFailureReimbursement and RentalLostItemReimbursement events.
     *
     * @return $this
     */
    public function setRentalReimbursement($rentalReimbursement)
    {
        $this->container['rentalReimbursement'] = $rentalReimbursement;

        return $this;
    }

    /**
     * Gets rentalTaxWithheldList
     *
     * @return \B1\AmazonSPAPI\Model\TaxWithheldComponentList
     */
    public function getRentalTaxWithheldList()
    {
        return $this->container['rentalTaxWithheldList'];
    }

    /**
     * Sets rentalTaxWithheldList
     *
     * @param \B1\AmazonSPAPI\Model\TaxWithheldComponentList $rentalTaxWithheldList A list of taxes withheld information for a rental item.
     *
     * @return $this
     */
    public function setRentalTaxWithheldList($rentalTaxWithheldList)
    {
        $this->container['rentalTaxWithheldList'] = $rentalTaxWithheldList;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

