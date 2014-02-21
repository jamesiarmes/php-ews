<?php
/**
 * Definition of the FolderInfoResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FolderInfoResponseMessageType type
 */
class FolderInfoResponseMessageType extends PhpEws\EWSType
{
    /**
     * Folders property
     *
     * @var ArrayOfFoldersType
     */
    public $Folders;
}
