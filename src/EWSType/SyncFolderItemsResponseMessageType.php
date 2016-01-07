<?php
/**
 * Contains EWSType_SyncFolderItemsResponseMessageType.
 */

/**
 * Represents the status and result of a single SyncFolderItems operation
 * request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ResponseMessageType.
 */
class EWSType_SyncFolderItemsResponseMessageType extends EWSType
{
    /**
     * Contains a sequence array of change types that represent the types of
     * differences between the items on the client and the items on the Exchange
     * server.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SyncFolderItemsChangesType
     */
    public $Changes;

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
     * Indicates whether the last item to synchronize has been included in the
     * response.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

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
     * Contains a base64-encoded form of the synchronization data that is
     * updated after each successful request.
     *
     * This is used to identify the synchronization state.
     * .
     * @since Exchange 2007
     *
     * @var string
     */
    public $SyncState;
}
