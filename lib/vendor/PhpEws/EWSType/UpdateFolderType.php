<?php
/**
 * Definition of the UpdateFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the UpdateFolderType type
 */
class UpdateFolderType extends EWSType
{
    /**
     * FolderChanges property
     *
     * @var EWSType_NonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;
}
