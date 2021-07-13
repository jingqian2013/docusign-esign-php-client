<?php
/**
 * BulkEnvelopeStatus
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
 * BulkEnvelopeStatus Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkEnvelopeStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bulkEnvelopeStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batch_id' => '?string',
        'batch_size' => '?string',
        'bulk_envelopes' => '\DocuSign\eSign\Model\BulkEnvelope[]',
        'bulk_envelopes_batch_uri' => '?string',
        'end_position' => '?string',
        'failed' => '?string',
        'next_uri' => '?string',
        'previous_uri' => '?string',
        'queued' => '?string',
        'result_set_size' => '?string',
        'sent' => '?string',
        'start_position' => '?string',
        'submitted_date' => '?string',
        'total_set_size' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'batch_id' => null,
        'batch_size' => null,
        'bulk_envelopes' => null,
        'bulk_envelopes_batch_uri' => null,
        'end_position' => null,
        'failed' => null,
        'next_uri' => null,
        'previous_uri' => null,
        'queued' => null,
        'result_set_size' => null,
        'sent' => null,
        'start_position' => null,
        'submitted_date' => null,
        'total_set_size' => null
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
        'batch_id' => 'batchId',
        'batch_size' => 'batchSize',
        'bulk_envelopes' => 'bulkEnvelopes',
        'bulk_envelopes_batch_uri' => 'bulkEnvelopesBatchUri',
        'end_position' => 'endPosition',
        'failed' => 'failed',
        'next_uri' => 'nextUri',
        'previous_uri' => 'previousUri',
        'queued' => 'queued',
        'result_set_size' => 'resultSetSize',
        'sent' => 'sent',
        'start_position' => 'startPosition',
        'submitted_date' => 'submittedDate',
        'total_set_size' => 'totalSetSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batch_id' => 'setBatchId',
        'batch_size' => 'setBatchSize',
        'bulk_envelopes' => 'setBulkEnvelopes',
        'bulk_envelopes_batch_uri' => 'setBulkEnvelopesBatchUri',
        'end_position' => 'setEndPosition',
        'failed' => 'setFailed',
        'next_uri' => 'setNextUri',
        'previous_uri' => 'setPreviousUri',
        'queued' => 'setQueued',
        'result_set_size' => 'setResultSetSize',
        'sent' => 'setSent',
        'start_position' => 'setStartPosition',
        'submitted_date' => 'setSubmittedDate',
        'total_set_size' => 'setTotalSetSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batch_id' => 'getBatchId',
        'batch_size' => 'getBatchSize',
        'bulk_envelopes' => 'getBulkEnvelopes',
        'bulk_envelopes_batch_uri' => 'getBulkEnvelopesBatchUri',
        'end_position' => 'getEndPosition',
        'failed' => 'getFailed',
        'next_uri' => 'getNextUri',
        'previous_uri' => 'getPreviousUri',
        'queued' => 'getQueued',
        'result_set_size' => 'getResultSetSize',
        'sent' => 'getSent',
        'start_position' => 'getStartPosition',
        'submitted_date' => 'getSubmittedDate',
        'total_set_size' => 'getTotalSetSize'
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
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['batch_size'] = isset($data['batch_size']) ? $data['batch_size'] : null;
        $this->container['bulk_envelopes'] = isset($data['bulk_envelopes']) ? $data['bulk_envelopes'] : null;
        $this->container['bulk_envelopes_batch_uri'] = isset($data['bulk_envelopes_batch_uri']) ? $data['bulk_envelopes_batch_uri'] : null;
        $this->container['end_position'] = isset($data['end_position']) ? $data['end_position'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['next_uri'] = isset($data['next_uri']) ? $data['next_uri'] : null;
        $this->container['previous_uri'] = isset($data['previous_uri']) ? $data['previous_uri'] : null;
        $this->container['queued'] = isset($data['queued']) ? $data['queued'] : null;
        $this->container['result_set_size'] = isset($data['result_set_size']) ? $data['result_set_size'] : null;
        $this->container['sent'] = isset($data['sent']) ? $data['sent'] : null;
        $this->container['start_position'] = isset($data['start_position']) ? $data['start_position'] : null;
        $this->container['submitted_date'] = isset($data['submitted_date']) ? $data['submitted_date'] : null;
        $this->container['total_set_size'] = isset($data['total_set_size']) ? $data['total_set_size'] : null;
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
     * Gets batch_id
     *
     * @return ?string
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param ?string $batch_id Specifies an identifier which can be used to retrieve a more detailed status of individual bulk recipient batches.
     *
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets batch_size
     *
     * @return ?string
     */
    public function getBatchSize()
    {
        return $this->container['batch_size'];
    }

    /**
     * Sets batch_size
     *
     * @param ?string $batch_size The number of items returned in this response.
     *
     * @return $this
     */
    public function setBatchSize($batch_size)
    {
        $this->container['batch_size'] = $batch_size;

        return $this;
    }

    /**
     * Gets bulk_envelopes
     *
     * @return \DocuSign\eSign\Model\BulkEnvelope[]
     */
    public function getBulkEnvelopes()
    {
        return $this->container['bulk_envelopes'];
    }

    /**
     * Sets bulk_envelopes
     *
     * @param \DocuSign\eSign\Model\BulkEnvelope[] $bulk_envelopes Reserved: TBD
     *
     * @return $this
     */
    public function setBulkEnvelopes($bulk_envelopes)
    {
        $this->container['bulk_envelopes'] = $bulk_envelopes;

        return $this;
    }

    /**
     * Gets bulk_envelopes_batch_uri
     *
     * @return ?string
     */
    public function getBulkEnvelopesBatchUri()
    {
        return $this->container['bulk_envelopes_batch_uri'];
    }

    /**
     * Sets bulk_envelopes_batch_uri
     *
     * @param ?string $bulk_envelopes_batch_uri Reserved: TBD
     *
     * @return $this
     */
    public function setBulkEnvelopesBatchUri($bulk_envelopes_batch_uri)
    {
        $this->container['bulk_envelopes_batch_uri'] = $bulk_envelopes_batch_uri;

        return $this;
    }

    /**
     * Gets end_position
     *
     * @return ?string
     */
    public function getEndPosition()
    {
        return $this->container['end_position'];
    }

    /**
     * Sets end_position
     *
     * @param ?string $end_position The last position in the result set.
     *
     * @return $this
     */
    public function setEndPosition($end_position)
    {
        $this->container['end_position'] = $end_position;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return ?string
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param ?string $failed The number of entries with a status of failed.
     *
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets next_uri
     *
     * @return ?string
     */
    public function getNextUri()
    {
        return $this->container['next_uri'];
    }

    /**
     * Sets next_uri
     *
     * @param ?string $next_uri The URI to the next chunk of records based on the search request. If the endPosition is the entire results of the search, this is null.
     *
     * @return $this
     */
    public function setNextUri($next_uri)
    {
        $this->container['next_uri'] = $next_uri;

        return $this;
    }

    /**
     * Gets previous_uri
     *
     * @return ?string
     */
    public function getPreviousUri()
    {
        return $this->container['previous_uri'];
    }

    /**
     * Sets previous_uri
     *
     * @param ?string $previous_uri The postal code for the billing address.
     *
     * @return $this
     */
    public function setPreviousUri($previous_uri)
    {
        $this->container['previous_uri'] = $previous_uri;

        return $this;
    }

    /**
     * Gets queued
     *
     * @return ?string
     */
    public function getQueued()
    {
        return $this->container['queued'];
    }

    /**
     * Sets queued
     *
     * @param ?string $queued The number of entries with a status of queued.
     *
     * @return $this
     */
    public function setQueued($queued)
    {
        $this->container['queued'] = $queued;

        return $this;
    }

    /**
     * Gets result_set_size
     *
     * @return ?string
     */
    public function getResultSetSize()
    {
        return $this->container['result_set_size'];
    }

    /**
     * Sets result_set_size
     *
     * @param ?string $result_set_size The number of results returned in this response.
     *
     * @return $this
     */
    public function setResultSetSize($result_set_size)
    {
        $this->container['result_set_size'] = $result_set_size;

        return $this;
    }

    /**
     * Gets sent
     *
     * @return ?string
     */
    public function getSent()
    {
        return $this->container['sent'];
    }

    /**
     * Sets sent
     *
     * @param ?string $sent The number of entries with a status of sent.
     *
     * @return $this
     */
    public function setSent($sent)
    {
        $this->container['sent'] = $sent;

        return $this;
    }

    /**
     * Gets start_position
     *
     * @return ?string
     */
    public function getStartPosition()
    {
        return $this->container['start_position'];
    }

    /**
     * Sets start_position
     *
     * @param ?string $start_position Starting position of the current result set.
     *
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        $this->container['start_position'] = $start_position;

        return $this;
    }

    /**
     * Gets submitted_date
     *
     * @return ?string
     */
    public function getSubmittedDate()
    {
        return $this->container['submitted_date'];
    }

    /**
     * Sets submitted_date
     *
     * @param ?string $submitted_date 
     *
     * @return $this
     */
    public function setSubmittedDate($submitted_date)
    {
        $this->container['submitted_date'] = $submitted_date;

        return $this;
    }

    /**
     * Gets total_set_size
     *
     * @return ?string
     */
    public function getTotalSetSize()
    {
        return $this->container['total_set_size'];
    }

    /**
     * Sets total_set_size
     *
     * @param ?string $total_set_size The total number of items available in the result set. This will always be greater than or equal to the value of the property returning the results in the in the response.
     *
     * @return $this
     */
    public function setTotalSetSize($total_set_size)
    {
        $this->container['total_set_size'] = $total_set_size;

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

