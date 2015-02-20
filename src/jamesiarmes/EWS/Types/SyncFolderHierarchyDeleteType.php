<?php
/**
 * Contains SyncFolderHierarchyDeleteType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a single folder to delete in the local client store.
 *
 * @package jamesiarmes\EWS\Types
 */
class SyncFolderHierarchyDeleteType extends EWSType
{
    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var FolderIdType
     */
    public $FolderId;
}
