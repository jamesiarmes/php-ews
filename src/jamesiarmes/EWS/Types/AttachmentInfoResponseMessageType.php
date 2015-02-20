<?php
/**
 * Contains AttachmentInfoResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the status and result of a single CreateAttachment operation
 * request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ResponseMessageType.
 */
class AttachmentInfoResponseMessageType extends EWSType
{
    /**
     * Contains the items or files that are attached to an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2007
     *
     * @var ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2007
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;
}
