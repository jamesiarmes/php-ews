<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the FindFolderResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FindFolderResponseMessageType type
 */
class FindFolderResponseMessageType extends DataType
{
    /**
     * RootFolder property
     *
     * @var EWSType_FindFolderParentType
     */
    public $RootFolder;
}
