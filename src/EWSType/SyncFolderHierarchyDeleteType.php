<?php
/**
 * Contains EWSType_SyncFolderHierarchyDeleteType.
 */

/**
 * Identifies a single folder to delete in the local client store.
 *
 * @package php-ews\Types
 */
class EWSType_SyncFolderHierarchyDeleteType extends EWSType
{
    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;
}
