<?php
/**
 * Definition of the CalendarPermissionType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the CalendarPermissionType type
 */
class CalendarPermissionType extends PhpEws\EWSType
{
    /**
     * ReadItems property
     *
     * @var CalendarPermissionReadAccessType
     */
    public $ReadItems;

    /**
     * CalendarPermissionLevel property
     *
     * @var CalendarPermissionLevelType
     */
    public $CalendarPermissionLevel;
}
