<?php
/**
 * Contains EWSType_CopyFolderResponseType.
 */

/**
 * Defines a response to a CopyFolder request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_CopyFolderResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
