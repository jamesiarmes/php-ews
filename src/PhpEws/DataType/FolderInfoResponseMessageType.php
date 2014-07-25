<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the FolderInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FolderInfoResponseMessageType type
 */
class FolderInfoResponseMessageType extends DataType
{
    /**
     * Folders property
     *
     * @var EWSType_ArrayOfFoldersType
     */
    public $Folders;
}
