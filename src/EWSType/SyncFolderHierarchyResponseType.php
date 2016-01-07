<?php
/**
 * Contains EWSType_SyncFolderHierarchyResponseType.
 */

/**
 * Defines a response to a SyncFolderHierarchy request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_SyncFolderHierarchyResponseType extends EWSType
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
