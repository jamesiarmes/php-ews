<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 */
class NonEmptyArrayOfFolderChangesType extends EWSType
{
    /**
     * FolderChange property
     *
     * @var EWSType_FolderChangeType
     */
    public $FolderChange;
}
