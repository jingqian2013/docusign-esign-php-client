<?php
/**
 * RecipientSignatureProviderOptions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
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
 * RecipientSignatureProviderOptions Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecipientSignatureProviderOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recipientSignatureProviderOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cpf_number' => '?string',
        'cpf_number_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'one_time_password' => '?string',
        'one_time_password_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'signer_role' => '?string',
        'signer_role_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'sms' => '?string',
        'sms_metadata' => '\DocuSign\eSign\Model\PropertyMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cpf_number' => null,
        'cpf_number_metadata' => null,
        'one_time_password' => null,
        'one_time_password_metadata' => null,
        'signer_role' => null,
        'signer_role_metadata' => null,
        'sms' => null,
        'sms_metadata' => null
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
        'cpf_number' => 'cpfNumber',
        'cpf_number_metadata' => 'cpfNumberMetadata',
        'one_time_password' => 'oneTimePassword',
        'one_time_password_metadata' => 'oneTimePasswordMetadata',
        'signer_role' => 'signerRole',
        'signer_role_metadata' => 'signerRoleMetadata',
        'sms' => 'sms',
        'sms_metadata' => 'smsMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpf_number' => 'setCpfNumber',
        'cpf_number_metadata' => 'setCpfNumberMetadata',
        'one_time_password' => 'setOneTimePassword',
        'one_time_password_metadata' => 'setOneTimePasswordMetadata',
        'signer_role' => 'setSignerRole',
        'signer_role_metadata' => 'setSignerRoleMetadata',
        'sms' => 'setSms',
        'sms_metadata' => 'setSmsMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpf_number' => 'getCpfNumber',
        'cpf_number_metadata' => 'getCpfNumberMetadata',
        'one_time_password' => 'getOneTimePassword',
        'one_time_password_metadata' => 'getOneTimePasswordMetadata',
        'signer_role' => 'getSignerRole',
        'signer_role_metadata' => 'getSignerRoleMetadata',
        'sms' => 'getSms',
        'sms_metadata' => 'getSmsMetadata'
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
        $this->container['cpf_number'] = isset($data['cpf_number']) ? $data['cpf_number'] : null;
        $this->container['cpf_number_metadata'] = isset($data['cpf_number_metadata']) ? $data['cpf_number_metadata'] : null;
        $this->container['one_time_password'] = isset($data['one_time_password']) ? $data['one_time_password'] : null;
        $this->container['one_time_password_metadata'] = isset($data['one_time_password_metadata']) ? $data['one_time_password_metadata'] : null;
        $this->container['signer_role'] = isset($data['signer_role']) ? $data['signer_role'] : null;
        $this->container['signer_role_metadata'] = isset($data['signer_role_metadata']) ? $data['signer_role_metadata'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['sms_metadata'] = isset($data['sms_metadata']) ? $data['sms_metadata'] : null;
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
     * Gets cpf_number
     *
     * @return ?string
     */
    public function getCpfNumber()
    {
        return $this->container['cpf_number'];
    }

    /**
     * Sets cpf_number
     *
     * @param ?string $cpf_number 
     *
     * @return $this
     */
    public function setCpfNumber($cpf_number)
    {
        $this->container['cpf_number'] = $cpf_number;

        return $this;
    }

    /**
     * Gets cpf_number_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getCpfNumberMetadata()
    {
        return $this->container['cpf_number_metadata'];
    }

    /**
     * Sets cpf_number_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $cpf_number_metadata cpf_number_metadata
     *
     * @return $this
     */
    public function setCpfNumberMetadata($cpf_number_metadata)
    {
        $this->container['cpf_number_metadata'] = $cpf_number_metadata;

        return $this;
    }

    /**
     * Gets one_time_password
     *
     * @return ?string
     */
    public function getOneTimePassword()
    {
        return $this->container['one_time_password'];
    }

    /**
     * Sets one_time_password
     *
     * @param ?string $one_time_password 
     *
     * @return $this
     */
    public function setOneTimePassword($one_time_password)
    {
        $this->container['one_time_password'] = $one_time_password;

        return $this;
    }

    /**
     * Gets one_time_password_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getOneTimePasswordMetadata()
    {
        return $this->container['one_time_password_metadata'];
    }

    /**
     * Sets one_time_password_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $one_time_password_metadata one_time_password_metadata
     *
     * @return $this
     */
    public function setOneTimePasswordMetadata($one_time_password_metadata)
    {
        $this->container['one_time_password_metadata'] = $one_time_password_metadata;

        return $this;
    }

    /**
     * Gets signer_role
     *
     * @return ?string
     */
    public function getSignerRole()
    {
        return $this->container['signer_role'];
    }

    /**
     * Sets signer_role
     *
     * @param ?string $signer_role 
     *
     * @return $this
     */
    public function setSignerRole($signer_role)
    {
        $this->container['signer_role'] = $signer_role;

        return $this;
    }

    /**
     * Gets signer_role_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getSignerRoleMetadata()
    {
        return $this->container['signer_role_metadata'];
    }

    /**
     * Sets signer_role_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $signer_role_metadata signer_role_metadata
     *
     * @return $this
     */
    public function setSignerRoleMetadata($signer_role_metadata)
    {
        $this->container['signer_role_metadata'] = $signer_role_metadata;

        return $this;
    }

    /**
     * Gets sms
     *
     * @return ?string
     */
    public function getSms()
    {
        return $this->container['sms'];
    }

    /**
     * Sets sms
     *
     * @param ?string $sms 
     *
     * @return $this
     */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;

        return $this;
    }

    /**
     * Gets sms_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getSmsMetadata()
    {
        return $this->container['sms_metadata'];
    }

    /**
     * Sets sms_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $sms_metadata sms_metadata
     *
     * @return $this
     */
    public function setSmsMetadata($sms_metadata)
    {
        $this->container['sms_metadata'] = $sms_metadata;

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

