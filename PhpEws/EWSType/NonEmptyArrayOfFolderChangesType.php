<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 */
class NonEmptyArrayOfFolderChangesType extends PhpEws\EWSType
{
    /**
     * FolderChange property
     *
     * @var FolderChangeType
     */
    public $FolderChange;
}
