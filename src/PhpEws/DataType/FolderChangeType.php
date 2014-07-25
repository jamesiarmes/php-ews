<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the FolderChangeType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FolderChangeType type
 */
class FolderChangeType extends DataType
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
