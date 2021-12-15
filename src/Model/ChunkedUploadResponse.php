<?php
/**
 * ChunkedUploadResponse
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
 * ChunkedUploadResponse Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChunkedUploadResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'chunkedUploadResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'checksum' => '?string',
        'chunked_upload_id' => '?string',
        'chunked_upload_parts' => '\DocuSign\eSign\Model\ChunkedUploadPart[]',
        'chunked_upload_uri' => '?string',
        'committed' => '?string',
        'expiration_date_time' => '?string',
        'max_chunked_upload_parts' => '?string',
        'max_total_size' => '?string',
        'total_size' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'checksum' => null,
        'chunked_upload_id' => null,
        'chunked_upload_parts' => null,
        'chunked_upload_uri' => null,
        'committed' => null,
        'expiration_date_time' => null,
        'max_chunked_upload_parts' => null,
        'max_total_size' => null,
        'total_size' => null
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
        'checksum' => 'checksum',
        'chunked_upload_id' => 'chunkedUploadId',
        'chunked_upload_parts' => 'chunkedUploadParts',
        'chunked_upload_uri' => 'chunkedUploadUri',
        'committed' => 'committed',
        'expiration_date_time' => 'expirationDateTime',
        'max_chunked_upload_parts' => 'maxChunkedUploadParts',
        'max_total_size' => 'maxTotalSize',
        'total_size' => 'totalSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checksum' => 'setChecksum',
        'chunked_upload_id' => 'setChunkedUploadId',
        'chunked_upload_parts' => 'setChunkedUploadParts',
        'chunked_upload_uri' => 'setChunkedUploadUri',
        'committed' => 'setCommitted',
        'expiration_date_time' => 'setExpirationDateTime',
        'max_chunked_upload_parts' => 'setMaxChunkedUploadParts',
        'max_total_size' => 'setMaxTotalSize',
        'total_size' => 'setTotalSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checksum' => 'getChecksum',
        'chunked_upload_id' => 'getChunkedUploadId',
        'chunked_upload_parts' => 'getChunkedUploadParts',
        'chunked_upload_uri' => 'getChunkedUploadUri',
        'committed' => 'getCommitted',
        'expiration_date_time' => 'getExpirationDateTime',
        'max_chunked_upload_parts' => 'getMaxChunkedUploadParts',
        'max_total_size' => 'getMaxTotalSize',
        'total_size' => 'getTotalSize'
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
        $this->container['checksum'] = isset($data['checksum']) ? $data['checksum'] : null;
        $this->container['chunked_upload_id'] = isset($data['chunked_upload_id']) ? $data['chunked_upload_id'] : null;
        $this->container['chunked_upload_parts'] = isset($data['chunked_upload_parts']) ? $data['chunked_upload_parts'] : null;
        $this->container['chunked_upload_uri'] = isset($data['chunked_upload_uri']) ? $data['chunked_upload_uri'] : null;
        $this->container['committed'] = isset($data['committed']) ? $data['committed'] : null;
        $this->container['expiration_date_time'] = isset($data['expiration_date_time']) ? $data['expiration_date_time'] : null;
        $this->container['max_chunked_upload_parts'] = isset($data['max_chunked_upload_parts']) ? $data['max_chunked_upload_parts'] : null;
        $this->container['max_total_size'] = isset($data['max_total_size']) ? $data['max_total_size'] : null;
        $this->container['total_size'] = isset($data['total_size']) ? $data['total_size'] : null;
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
     * Gets checksum
     *
     * @return ?string
     */
    public function getChecksum()
    {
        return $this->container['checksum'];
    }

    /**
     * Sets checksum
     *
     * @param ?string $checksum 
     *
     * @return $this
     */
    public function setChecksum($checksum)
    {
        $this->container['checksum'] = $checksum;

        return $this;
    }

    /**
     * Gets chunked_upload_id
     *
     * @return ?string
     */
    public function getChunkedUploadId()
    {
        return $this->container['chunked_upload_id'];
    }

    /**
     * Sets chunked_upload_id
     *
     * @param ?string $chunked_upload_id 
     *
     * @return $this
     */
    public function setChunkedUploadId($chunked_upload_id)
    {
        $this->container['chunked_upload_id'] = $chunked_upload_id;

        return $this;
    }

    /**
     * Gets chunked_upload_parts
     *
     * @return \DocuSign\eSign\Model\ChunkedUploadPart[]
     */
    public function getChunkedUploadParts()
    {
        return $this->container['chunked_upload_parts'];
    }

    /**
     * Sets chunked_upload_parts
     *
     * @param \DocuSign\eSign\Model\ChunkedUploadPart[] $chunked_upload_parts 
     *
     * @return $this
     */
    public function setChunkedUploadParts($chunked_upload_parts)
    {
        $this->container['chunked_upload_parts'] = $chunked_upload_parts;

        return $this;
    }

    /**
     * Gets chunked_upload_uri
     *
     * @return ?string
     */
    public function getChunkedUploadUri()
    {
        return $this->container['chunked_upload_uri'];
    }

    /**
     * Sets chunked_upload_uri
     *
     * @param ?string $chunked_upload_uri 
     *
     * @return $this
     */
    public function setChunkedUploadUri($chunked_upload_uri)
    {
        $this->container['chunked_upload_uri'] = $chunked_upload_uri;

        return $this;
    }

    /**
     * Gets committed
     *
     * @return ?string
     */
    public function getCommitted()
    {
        return $this->container['committed'];
    }

    /**
     * Sets committed
     *
     * @param ?string $committed 
     *
     * @return $this
     */
    public function setCommitted($committed)
    {
        $this->container['committed'] = $committed;

        return $this;
    }

    /**
     * Gets expiration_date_time
     *
     * @return ?string
     */
    public function getExpirationDateTime()
    {
        return $this->container['expiration_date_time'];
    }

    /**
     * Sets expiration_date_time
     *
     * @param ?string $expiration_date_time 
     *
     * @return $this
     */
    public function setExpirationDateTime($expiration_date_time)
    {
        $this->container['expiration_date_time'] = $expiration_date_time;

        return $this;
    }

    /**
     * Gets max_chunked_upload_parts
     *
     * @return ?string
     */
    public function getMaxChunkedUploadParts()
    {
        return $this->container['max_chunked_upload_parts'];
    }

    /**
     * Sets max_chunked_upload_parts
     *
     * @param ?string $max_chunked_upload_parts 
     *
     * @return $this
     */
    public function setMaxChunkedUploadParts($max_chunked_upload_parts)
    {
        $this->container['max_chunked_upload_parts'] = $max_chunked_upload_parts;

        return $this;
    }

    /**
     * Gets max_total_size
     *
     * @return ?string
     */
    public function getMaxTotalSize()
    {
        return $this->container['max_total_size'];
    }

    /**
     * Sets max_total_size
     *
     * @param ?string $max_total_size 
     *
     * @return $this
     */
    public function setMaxTotalSize($max_total_size)
    {
        $this->container['max_total_size'] = $max_total_size;

        return $this;
    }

    /**
     * Gets total_size
     *
     * @return ?string
     */
    public function getTotalSize()
    {
        return $this->container['total_size'];
    }

    /**
     * Sets total_size
     *
     * @param ?string $total_size 
     *
     * @return $this
     */
    public function setTotalSize($total_size)
    {
        $this->container['total_size'] = $total_size;

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

