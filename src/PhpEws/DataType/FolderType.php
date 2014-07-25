<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FolderType type
 */
class FolderType extends DataType
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
