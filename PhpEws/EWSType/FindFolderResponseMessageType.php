<?php
/**
 * Definition of the FindFolderResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FindFolderResponseMessageType type
 */
class FindFolderResponseMessageType extends PhpEws\EWSType
{
    /**
     * RootFolder property
     *
     * @var FindFolderParentType
     */
    public $RootFolder;
}
