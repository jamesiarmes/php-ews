<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the CreateFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CreateFolderType type
 */
class CreateFolderType extends DataType
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
