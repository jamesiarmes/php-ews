<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetSharingMetadataResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a request.
 *
 * @package php-ews\Response
 */
class GetSharingMetadataResponseMessageType extends ResponseMessageType
{
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
}
