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
