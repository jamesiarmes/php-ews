<?php
/**
 * Definition of the NonEmptyArrayOfBaseFolderIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfBaseFolderIdsType type
 */
class EWSType_NonEmptyArrayOfBaseFolderIdsType extends EWSType
{
    /**
     * FolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * DistinguishedFolderId property
     *
     * @var EWSType_DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
}
