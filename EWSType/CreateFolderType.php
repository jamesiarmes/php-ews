<?php
/**
 * Definition of the CreateFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CreateFolderType type
 */
class EWSType_CreateFolderType extends EWSType
{
    /**
     * ParentFolderId property
     *
     * @var EWSType_TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Folders property
     *
     * @var EWSType_NonEmptyArrayOfFoldersType
     */
    public $Folders;
}
