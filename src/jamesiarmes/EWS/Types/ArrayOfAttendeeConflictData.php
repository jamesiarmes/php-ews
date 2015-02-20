<?php
/**
 * Contains ArrayOfAttendeeConflictData.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines an array of conflict data.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfAttendeeConflictData extends EWSType
{
    /**
     * Contains aggregate conflict information about the number of users
     * available, the number of users who have conflicts, and the number of
     * users who do not have availability information in a distribution list for
     * a suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var GroupAttendeeConflictData
     */
    public $GroupAttendeeConflictData;

    /**
     * Contains a user's or contact's free/busy status for a time window that
     * occurs at the same time as the suggested meeting time identified in the
     * Suggestion element.
     *
     * @since Exchange 2007
     *
     * @var IndividualAttendeeConflictData
     */
    public $IndividualAttendeeConflictData;

    /**
     * Represents an attendee that resolved as a distribution list that was too
     * large to expand.
     *
     * @since Exchange 2007
     *
     * @var TooBigGroupAttendeeConflictData
     */
    public $TooBigGroupAttendeeConflictData;

    /**
     * Represents an unresolvable attendee or an attendee that is not a user,
     * distribution list, or contact.
     *
     * @since Exchange 2007
     *
     * @var UnknownAttendeeConflictData
     */
    public $UnknownAttendeeConflictData;
}
