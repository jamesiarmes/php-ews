<?php
/**
 * Contains EWSType_GetSharingMetadataResponseMessageType.
 */

/**
 * Represents the status and result of a request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ResponseMessageType.
 */
class EWSType_GetSharingMetadataResponseMessageType extends EWSType
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
     * Contains a collection of data structures that a client can use to
     * authorize the sharing of its calendar or contact data with other clients.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfEncryptedSharedFolderDataType
     */
    public $EncryptedSharedFolderDataCollection;

    /**
     * Represents recipients of the folder sharing request that are invalid.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfInvalidRecipientsType
     */
    public $InvalidRecipients;

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
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;
}
