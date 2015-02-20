<?php
/**
 * Contains UploadItemsResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * the status and results of a request to upload a single mailbox item.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ResponseMessageType.
 */
class UploadItemsResponseMessageType extends EWSType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2010 SP1
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Contains the item identifier of an uploaded item.
     *
     * @since Exchange 2010 SP1
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010 SP1
     *
     * @var ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010 SP1
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;
}
