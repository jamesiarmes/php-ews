<?php
/**
 * Definition of the FolderInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the FolderInfoResponseMessageType type
 */
class FolderInfoResponseMessageType extends EWSType
{
    /**
     * Folders property
     *
     * @var EWSType_ArrayOfFoldersType
     */
    public $Folders;
}
