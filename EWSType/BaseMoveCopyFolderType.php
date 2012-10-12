<?php
/**
 * Definition of the BaseMoveCopyFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BaseMoveCopyFolderType type
 */
class EWSType_BaseMoveCopyFolderType extends EWSType
{
    /**
     * ToFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * FolderIds property
     *
     * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
