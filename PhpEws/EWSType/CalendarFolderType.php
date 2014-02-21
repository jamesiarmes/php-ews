<?php
/**
 * Definition of the CalendarFolderType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the CalendarFolderType type
 */
class CalendarFolderType extends PhpEws\EWSType
{
    /**
     * PermissionSet property
     *
     * @var CalendarPermissionSetType
     */
    public $PermissionSet;
}
