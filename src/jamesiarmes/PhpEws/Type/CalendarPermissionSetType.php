<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\CalendarPermissionSetType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Contains all the permissions that are configured for a calendar folder.
 *
 * @package php-ews\Type
 */
class CalendarPermissionSetType extends Type
{
    /**
     * Contains an array of calendar permissions for a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfCalendarPermissionsType
     */
    public $CalendarPermissions;

    /**
     * Contains an array of unknown entries that cannot be resolved against the
     * Active Directory directory service.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
