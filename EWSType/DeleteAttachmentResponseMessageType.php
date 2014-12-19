<?php
/**
 * Contains EWSType_DeleteAttachmentResponseMessageType.
 */

/**
 * Represents the status and result of a single DeleteAttachment operation
 * request.
 *
 * @package php-ews\Types
 *
 * @todo Extends EWSType_ResponseMessageType.
 */
class EWSType_DeleteAttachmentResponseMessageType extends EWSType
{
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
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;

    /**
     * Identifies the parent item of a deleted attachment.
     *
     * @since Exchange 2007
     *
     * @var EWSType_RootItemIdType
     */
    public $RootItemId;
}
