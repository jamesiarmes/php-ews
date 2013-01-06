<?php
/**
 * Definition of the FindFolderResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FindFolderResponseMessageType type
 */
class FindFolderResponseMessageType extends EWSType
{
    /**
     * RootFolder property
     *
     * @var EWSType_FindFolderParentType
     */
    public $RootFolder;
}
