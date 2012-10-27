<?php
/**
 * Contains EWSType_IndividualAttendeeConflictData.
 */

/**
 * Represents a user's or contact's free/busy status for a time window that
 * occurs at the same time as the suggested meeting time identified in the
 * Suggestion element.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_AttendeeConflictData.
 */
class EWSType_IndividualAttendeeConflictData extends EWSType
{
    /**
     * Represents the free/busy status of a user for a suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var EWSType_LegacyFreeBusyType
     */
    public $BusyType;
}
