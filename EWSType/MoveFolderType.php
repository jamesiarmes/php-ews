<?php
/**
 * Contains EWSType_MoveFolderType.
 */

/**
 * Defines a request to move a folder in the Exchange store.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseMoveCopyFolderType.
 */
class EWSType_MoveFolderType extends EWSType
{
    /**
     * Contains an array of folders to move to the folder identified by the
     * ToFolderId element.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Represents the destination folder for a moved folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ToFolderId;
}
