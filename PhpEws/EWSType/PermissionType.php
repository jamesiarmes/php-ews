<?php
/**
 * Definition of the PermissionType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the PermissionType type
 */
class PermissionType extends PhpEws\EWSType
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
