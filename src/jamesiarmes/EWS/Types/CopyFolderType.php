<?php
/**
 * Contains CopyFolderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to copy folders in a mailbox in the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseMoveCopyFolderType.
 */
class CopyFolderType extends EWSType
{
    /**
     * Represents the destination folder for a copied folder.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * Represents the destination folder for a copied folder.
     *
     * @since Exchange 2007
     *
     * @var TargetFolderIdType
     */
    public $ToFolderId;
}
