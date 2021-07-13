<?php
/**
 * LockRequest
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
 * LockRequest Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LockRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lockRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lock_duration_in_seconds' => '?string',
        'locked_by_app' => '?string',
        'lock_type' => '?string',
        'template_password' => '?string',
        'use_scratch_pad' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lock_duration_in_seconds' => null,
        'locked_by_app' => null,
        'lock_type' => null,
        'template_password' => null,
        'use_scratch_pad' => null
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
        'lock_duration_in_seconds' => 'lockDurationInSeconds',
        'locked_by_app' => 'lockedByApp',
        'lock_type' => 'lockType',
        'template_password' => 'templatePassword',
        'use_scratch_pad' => 'useScratchPad'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lock_duration_in_seconds' => 'setLockDurationInSeconds',
        'locked_by_app' => 'setLockedByApp',
        'lock_type' => 'setLockType',
        'template_password' => 'setTemplatePassword',
        'use_scratch_pad' => 'setUseScratchPad'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lock_duration_in_seconds' => 'getLockDurationInSeconds',
        'locked_by_app' => 'getLockedByApp',
        'lock_type' => 'getLockType',
        'template_password' => 'getTemplatePassword',
        'use_scratch_pad' => 'getUseScratchPad'
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
        $this->container['lock_duration_in_seconds'] = isset($data['lock_duration_in_seconds']) ? $data['lock_duration_in_seconds'] : null;
        $this->container['locked_by_app'] = isset($data['locked_by_app']) ? $data['locked_by_app'] : null;
        $this->container['lock_type'] = isset($data['lock_type']) ? $data['lock_type'] : null;
        $this->container['template_password'] = isset($data['template_password']) ? $data['template_password'] : null;
        $this->container['use_scratch_pad'] = isset($data['use_scratch_pad']) ? $data['use_scratch_pad'] : null;
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
     * Gets lock_duration_in_seconds
     *
     * @return ?string
     */
    public function getLockDurationInSeconds()
    {
        return $this->container['lock_duration_in_seconds'];
    }

    /**
     * Sets lock_duration_in_seconds
     *
     * @param ?string $lock_duration_in_seconds The number of seconds to lock the envelope for editing.  Must be greater than 0 seconds.
     *
     * @return $this
     */
    public function setLockDurationInSeconds($lock_duration_in_seconds)
    {
        $this->container['lock_duration_in_seconds'] = $lock_duration_in_seconds;

        return $this;
    }

    /**
     * Gets locked_by_app
     *
     * @return ?string
     */
    public function getLockedByApp()
    {
        return $this->container['locked_by_app'];
    }

    /**
     * Sets locked_by_app
     *
     * @param ?string $locked_by_app A friendly name of the application used to lock the envelope.  Will be used in error messages to the user when lock conflicts occur.
     *
     * @return $this
     */
    public function setLockedByApp($locked_by_app)
    {
        $this->container['locked_by_app'] = $locked_by_app;

        return $this;
    }

    /**
     * Gets lock_type
     *
     * @return ?string
     */
    public function getLockType()
    {
        return $this->container['lock_type'];
    }

    /**
     * Sets lock_type
     *
     * @param ?string $lock_type The type of envelope lock.  Currently \"edit\" is the only supported type.
     *
     * @return $this
     */
    public function setLockType($lock_type)
    {
        $this->container['lock_type'] = $lock_type;

        return $this;
    }

    /**
     * Gets template_password
     *
     * @return ?string
     */
    public function getTemplatePassword()
    {
        return $this->container['template_password'];
    }

    /**
     * Sets template_password
     *
     * @param ?string $template_password 
     *
     * @return $this
     */
    public function setTemplatePassword($template_password)
    {
        $this->container['template_password'] = $template_password;

        return $this;
    }

    /**
     * Gets use_scratch_pad
     *
     * @return ?string
     */
    public function getUseScratchPad()
    {
        return $this->container['use_scratch_pad'];
    }

    /**
     * Sets use_scratch_pad
     *
     * @param ?string $use_scratch_pad Reserved for future use.  Indicates whether a scratchpad is used for editing information.
     *
     * @return $this
     */
    public function setUseScratchPad($use_scratch_pad)
    {
        $this->container['use_scratch_pad'] = $use_scratch_pad;

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

