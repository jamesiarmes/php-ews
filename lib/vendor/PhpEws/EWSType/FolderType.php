<?php
/**
 * Definition of the FolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FolderType type
 */
class FolderType extends EWSType
{
    /**
     * PermissionSet property
     *
     * @var EWSType_PermissionSetType
     */
    public $PermissionSet;

    /**
     * UnreadCount property
     *
     * @var integer
     */
    public $UnreadCount;
}
