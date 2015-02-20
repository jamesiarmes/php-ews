<?php
/**
 * Contains ConvertIdResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the status and result of a ConvertId operation request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extends ResponseMessageType
 */
class ConvertIdResponseMessageType extends EWSType
{
    /**
     * Describes a converted identifier in the response.
     *
     * @since Exchange 2007 SP1
     *
     * @var AlternateIdType
     */
    public $AlternateId;

    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2007 SP1
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2007 SP1
     *
     * @var ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2007 SP1
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;
}
