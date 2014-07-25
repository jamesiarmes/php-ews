<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the PermissionType type
 */
class PermissionType extends DataType
{
    /**
     * ReadItems property
     *
     * @var PermissionReadAccessType
     */
    public $ReadItems;

    /**
     * PermissionLevel property
     *
     * @var PermissionLevelType
     */
    public $PermissionLevel;
}
