<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the UpdateFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the UpdateFolderType type
 */
class UpdateFolderType extends DataType
{
    /**
     * FolderChanges property
     *
     * @var EWSType_NonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;
}
