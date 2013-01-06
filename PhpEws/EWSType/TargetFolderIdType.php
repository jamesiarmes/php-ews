<?php
/**
 * Definition of the TargetFolderIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the TargetFolderIdType type
 */
class TargetFolderIdType extends EWSType
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
