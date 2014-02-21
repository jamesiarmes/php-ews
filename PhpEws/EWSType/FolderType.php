<?php
/**
 * Definition of the FolderType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FolderType type
 */
class FolderType extends PhpEws\EWSType
{
    /**
     * PermissionSet property
     *
     * @var PermissionSetType
     */
    public $PermissionSet;

    /**
     * UnreadCount property
     *
     * @var integer
     */
    public $UnreadCount;
}
