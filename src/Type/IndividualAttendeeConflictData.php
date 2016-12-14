<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\IndividualAttendeeConflictData.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a user's or contact's free/busy status for a time window that
 * occurs at the same time as the suggested meeting time identified in the
 * Suggestion element.
 *
 * @package php-ews\Type
 */
class IndividualAttendeeConflictData extends AttendeeConflictData
{
    /**
     * Represents the free/busy status of a user for a suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\LegacyFreeBusyType
     */
    public $BusyType;
}
