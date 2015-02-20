<?php
/**
 * Contains BaseMoveCopyFolderType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for folder move and copy requests.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class BaseMoveCopyFolderType extends EWSType
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
