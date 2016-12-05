<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfCalendarPermissionsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of calendar permissions for a folder.
 *
 * @package php-ews\Array
 */
class ArrayOfCalendarPermissionsType extends ArrayType
{
    /**
     * Defines the access that a delegate user has to a calendar folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\CalendarPermissionType[]
     */
    public $CalendarPermission = array();
}
