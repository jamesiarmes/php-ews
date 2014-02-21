<?php
/**
 * Definition of the CreateFolderType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the CreateFolderType type
 */
class CreateFolderType extends PhpEws\EWSType
{
    /**
     * ParentFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Folders property
     *
     * @var NonEmptyArrayOfFoldersType
     */
    public $Folders;
}
