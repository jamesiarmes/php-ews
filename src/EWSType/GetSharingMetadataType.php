<?php
/**
 * Contains EWSType_GetSharingMetadataType.
 */

/**
 * Defines a request to get an opaque authentication token that identifies the
 * sharing invitation.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetSharingMetadataType extends EWSType
{
    /**
     * Represents the identifier of the folder on the server that will be
     * shared.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_FolderIdType
     */
    public $IdOfFolderToShare;

    /**
     * Represents the SMTP email address that corresponds to the mailbox that
     * contains the folder that is identified by the IdOfFolderToShare element.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $SenderSmtpAddress;

    /**
     * Represents the SMTP email addresses of one or more entities that will be
     * granted access to the data in the folder that is identified by the
     * IdOfFolderToShare element.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfSmtpAddressType
     */
    public $Recipients;
}
