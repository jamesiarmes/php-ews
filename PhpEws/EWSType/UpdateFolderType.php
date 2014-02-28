<?php
/**
 * Definition of the UpdateFolderType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the UpdateFolderType type
 */
class UpdateFolderType extends PhpEws\EWSType
{
    /**
     * FolderChanges property
     *
     * @var NonEmptyArrayOfFolderChangesType
     */
    public $FolderChanges;
}
