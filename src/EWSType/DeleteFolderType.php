<?php
/**
 * Contains EWSType_DeleteFolderType.
 */

/**
 * Defines a request to delete folders from a mailbox in the Exchange store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_DeleteFolderType extends EWSType
{
    /**
     * Describes how a folder is deleted. This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DisposalType
     */
    public $DeleteType;

    /**
     * Contains an array of folder identifiers that are used to identify folders
     * to delete.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
