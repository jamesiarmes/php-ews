<?php
/**
 * Contains RefreshSharingFolderResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Class description...
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ResponseMessageType.
 */
class RefreshSharingFolderResponseMessageType extends EWSType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010
     *
     * @var ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;
}
