<?php
/**
 * Definition of the FolderChangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the FolderChangeType type
 */
class FolderChangeType extends EWSType
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

    /**
     * Updates property
     *
     * @var EWSType_NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
}
