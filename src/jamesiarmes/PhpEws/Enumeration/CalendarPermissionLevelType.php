<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\CalendarPermissionLevelType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

/**
 * Represents the permission level that a user has on a Calendar folder.
 *
 * @package php-ews\Enumeration
 */
class CalendarPermissionLevelType extends PermissionLevelType
{
    /**
     * Indicates that the user can view only free/busy time within the calendar.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const FREE_BUSY_ONLY = 'FreeBusyTimeOnly';

    /**
     * Indicates that the user can view free/busy time within the calendar and
     * the subject and location of appointments.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const FREE_BUSY_SUBJECT_AND_LOCATION = 'FreeBusyTimeAndSubjectAndLocation';
}
