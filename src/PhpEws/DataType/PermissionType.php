<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the PermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PermissionType type
 */
class PermissionType extends DataType
{
    /**
     * ReadItems property
     *
     * @var EWSType_PermissionReadAccessType
     */
    public $ReadItems;

    /**
     * PermissionLevel property
     *
     * @var EWSType_PermissionLevelType
     */
    public $PermissionLevel;
}
