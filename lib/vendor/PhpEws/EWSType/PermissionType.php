<?php
/**
 * Definition of the PermissionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the PermissionType type
 */
class PermissionType extends EWSType
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
