<?php
/**
 * Contains IndividualAttendeeConflictData.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a user's or contact's free/busy status for a time window that
 * occurs at the same time as the suggested meeting time identified in the
 * Suggestion element.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend AttendeeConflictData.
 */
class IndividualAttendeeConflictData extends EWSType
{
    /**
     * Represents the free/busy status of a user for a suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var LegacyFreeBusyType
     */
    public $BusyType;
}
