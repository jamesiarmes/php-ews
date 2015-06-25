<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\CalendarPermissionReadAccessType.
 */

namespace jamesiarmes\PEWS\Enumeration;

/**
 * Indicates whether a user has permission to read items within a Calendar
 * folder.
 *
 * @package php-ews\Enumeration
 */
class CalendarPermissionReadAccessType extends PermissionReadAccessType
{
    /**
     * Indicates that the user has permission to view only free/busy time in the\
     * calendar.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const TIME_ONLY = 'TimeOnly';

    /**
     * Indicates that the user has permission to view free/busy time in the
     * calendar and the subject and location of appointments.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const TIME_SUBJECT_AND_LOCATION = 'TimeAndSubjectAndLocation';
}
