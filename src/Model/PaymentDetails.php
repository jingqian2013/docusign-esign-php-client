<?php
/**
 * PaymentDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * PaymentDetails Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'paymentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed_payment_methods' => '?string[]',
        'charge_id' => '?string',
        'currency_code' => '?string',
        'customer_id' => '?string',
        'custom_metadata' => '?string',
        'custom_metadata_required' => '?bool',
        'gateway_account_id' => '?string',
        'gateway_display_name' => '?string',
        'gateway_name' => '?string',
        'line_items' => '\DocuSign\eSign\Model\PaymentLineItem[]',
        'payment_option' => '?string',
        'payment_source_id' => '?string',
        'signer_values' => '\DocuSign\eSign\Model\PaymentSignerValues',
        'status' => '?string',
        'total' => '\DocuSign\eSign\Model\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed_payment_methods' => null,
        'charge_id' => null,
        'currency_code' => null,
        'customer_id' => null,
        'custom_metadata' => null,
        'custom_metadata_required' => null,
        'gateway_account_id' => null,
        'gateway_display_name' => null,
        'gateway_name' => null,
        'line_items' => null,
        'payment_option' => null,
        'payment_source_id' => null,
        'signer_values' => null,
        'status' => null,
        'total' => null
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
        'allowed_payment_methods' => 'allowedPaymentMethods',
        'charge_id' => 'chargeId',
        'currency_code' => 'currencyCode',
        'customer_id' => 'customerId',
        'custom_metadata' => 'customMetadata',
        'custom_metadata_required' => 'customMetadataRequired',
        'gateway_account_id' => 'gatewayAccountId',
        'gateway_display_name' => 'gatewayDisplayName',
        'gateway_name' => 'gatewayName',
        'line_items' => 'lineItems',
        'payment_option' => 'paymentOption',
        'payment_source_id' => 'paymentSourceId',
        'signer_values' => 'signerValues',
        'status' => 'status',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_payment_methods' => 'setAllowedPaymentMethods',
        'charge_id' => 'setChargeId',
        'currency_code' => 'setCurrencyCode',
        'customer_id' => 'setCustomerId',
        'custom_metadata' => 'setCustomMetadata',
        'custom_metadata_required' => 'setCustomMetadataRequired',
        'gateway_account_id' => 'setGatewayAccountId',
        'gateway_display_name' => 'setGatewayDisplayName',
        'gateway_name' => 'setGatewayName',
        'line_items' => 'setLineItems',
        'payment_option' => 'setPaymentOption',
        'payment_source_id' => 'setPaymentSourceId',
        'signer_values' => 'setSignerValues',
        'status' => 'setStatus',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_payment_methods' => 'getAllowedPaymentMethods',
        'charge_id' => 'getChargeId',
        'currency_code' => 'getCurrencyCode',
        'customer_id' => 'getCustomerId',
        'custom_metadata' => 'getCustomMetadata',
        'custom_metadata_required' => 'getCustomMetadataRequired',
        'gateway_account_id' => 'getGatewayAccountId',
        'gateway_display_name' => 'getGatewayDisplayName',
        'gateway_name' => 'getGatewayName',
        'line_items' => 'getLineItems',
        'payment_option' => 'getPaymentOption',
        'payment_source_id' => 'getPaymentSourceId',
        'signer_values' => 'getSignerValues',
        'status' => 'getStatus',
        'total' => 'getTotal'
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
        $this->container['allowed_payment_methods'] = isset($data['allowed_payment_methods']) ? $data['allowed_payment_methods'] : null;
        $this->container['charge_id'] = isset($data['charge_id']) ? $data['charge_id'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['custom_metadata'] = isset($data['custom_metadata']) ? $data['custom_metadata'] : null;
        $this->container['custom_metadata_required'] = isset($data['custom_metadata_required']) ? $data['custom_metadata_required'] : null;
        $this->container['gateway_account_id'] = isset($data['gateway_account_id']) ? $data['gateway_account_id'] : null;
        $this->container['gateway_display_name'] = isset($data['gateway_display_name']) ? $data['gateway_display_name'] : null;
        $this->container['gateway_name'] = isset($data['gateway_name']) ? $data['gateway_name'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['payment_option'] = isset($data['payment_option']) ? $data['payment_option'] : null;
        $this->container['payment_source_id'] = isset($data['payment_source_id']) ? $data['payment_source_id'] : null;
        $this->container['signer_values'] = isset($data['signer_values']) ? $data['signer_values'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
     * Gets allowed_payment_methods
     *
     * @return ?string[]
     */
    public function getAllowedPaymentMethods()
    {
        return $this->container['allowed_payment_methods'];
    }

    /**
     * Sets allowed_payment_methods
     *
     * @param ?string[] $allowed_payment_methods 
     *
     * @return $this
     */
    public function setAllowedPaymentMethods($allowed_payment_methods)
    {
        $this->container['allowed_payment_methods'] = $allowed_payment_methods;

        return $this;
    }

    /**
     * Gets charge_id
     *
     * @return ?string
     */
    public function getChargeId()
    {
        return $this->container['charge_id'];
    }

    /**
     * Sets charge_id
     *
     * @param ?string $charge_id 
     *
     * @return $this
     */
    public function setChargeId($charge_id)
    {
        $this->container['charge_id'] = $charge_id;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return ?string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param ?string $currency_code 
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return ?string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param ?string $customer_id 
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets custom_metadata
     *
     * @return ?string
     */
    public function getCustomMetadata()
    {
        return $this->container['custom_metadata'];
    }

    /**
     * Sets custom_metadata
     *
     * @param ?string $custom_metadata 
     *
     * @return $this
     */
    public function setCustomMetadata($custom_metadata)
    {
        $this->container['custom_metadata'] = $custom_metadata;

        return $this;
    }

    /**
     * Gets custom_metadata_required
     *
     * @return ?bool
     */
    public function getCustomMetadataRequired()
    {
        return $this->container['custom_metadata_required'];
    }

    /**
     * Sets custom_metadata_required
     *
     * @param ?bool $custom_metadata_required 
     *
     * @return $this
     */
    public function setCustomMetadataRequired($custom_metadata_required)
    {
        $this->container['custom_metadata_required'] = $custom_metadata_required;

        return $this;
    }

    /**
     * Gets gateway_account_id
     *
     * @return ?string
     */
    public function getGatewayAccountId()
    {
        return $this->container['gateway_account_id'];
    }

    /**
     * Sets gateway_account_id
     *
     * @param ?string $gateway_account_id 
     *
     * @return $this
     */
    public function setGatewayAccountId($gateway_account_id)
    {
        $this->container['gateway_account_id'] = $gateway_account_id;

        return $this;
    }

    /**
     * Gets gateway_display_name
     *
     * @return ?string
     */
    public function getGatewayDisplayName()
    {
        return $this->container['gateway_display_name'];
    }

    /**
     * Sets gateway_display_name
     *
     * @param ?string $gateway_display_name 
     *
     * @return $this
     */
    public function setGatewayDisplayName($gateway_display_name)
    {
        $this->container['gateway_display_name'] = $gateway_display_name;

        return $this;
    }

    /**
     * Gets gateway_name
     *
     * @return ?string
     */
    public function getGatewayName()
    {
        return $this->container['gateway_name'];
    }

    /**
     * Sets gateway_name
     *
     * @param ?string $gateway_name 
     *
     * @return $this
     */
    public function setGatewayName($gateway_name)
    {
        $this->container['gateway_name'] = $gateway_name;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \DocuSign\eSign\Model\PaymentLineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \DocuSign\eSign\Model\PaymentLineItem[] $line_items 
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets payment_option
     *
     * @return ?string
     */
    public function getPaymentOption()
    {
        return $this->container['payment_option'];
    }

    /**
     * Sets payment_option
     *
     * @param ?string $payment_option 
     *
     * @return $this
     */
    public function setPaymentOption($payment_option)
    {
        $this->container['payment_option'] = $payment_option;

        return $this;
    }

    /**
     * Gets payment_source_id
     *
     * @return ?string
     */
    public function getPaymentSourceId()
    {
        return $this->container['payment_source_id'];
    }

    /**
     * Sets payment_source_id
     *
     * @param ?string $payment_source_id 
     *
     * @return $this
     */
    public function setPaymentSourceId($payment_source_id)
    {
        $this->container['payment_source_id'] = $payment_source_id;

        return $this;
    }

    /**
     * Gets signer_values
     *
     * @return \DocuSign\eSign\Model\PaymentSignerValues
     */
    public function getSignerValues()
    {
        return $this->container['signer_values'];
    }

    /**
     * Sets signer_values
     *
     * @param \DocuSign\eSign\Model\PaymentSignerValues $signer_values signer_values
     *
     * @return $this
     */
    public function setSignerValues($signer_values)
    {
        $this->container['signer_values'] = $signer_values;

        return $this;
    }

    /**
     * Gets status
     *
     * @return ?string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param ?string $status Indicates the envelope status. Valid values are:  * sent - The envelope is sent to the recipients.  * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \DocuSign\eSign\Model\Money
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \DocuSign\eSign\Model\Money $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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

