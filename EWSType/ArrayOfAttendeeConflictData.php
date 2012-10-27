<?php
/**
 * Contains EWSType_EWSType_ArrayOfAttendeeConflictData.
 */

/**
 * Defines an array of conflict data.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfAttendeeConflictData extends EWSType
{
    /**
     * Contains aggregate conflict information about the number of users
     * available, the number of users who have conflicts, and the number of
     * users who do not have availability information in a distribution list for
     * a suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var EWSType_GroupAttendeeConflictData
     */
    public $GroupAttendeeConflictData;

    /**
     * Contains a user's or contact's free/busy status for a time window that
     * occurs at the same time as the suggested meeting time identified in the
     * Suggestion element.
     *
     * @since Exchange 2007
     *
     * @var EWSType_IndividualAttendeeConflictData
     */
    public $IndividualAttendeeConflictData;

    /**
     * Represents an attendee that resolved as a distribution list that was too
     * large to expand.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TooBigGroupAttendeeConflictData
     */
    public $TooBigGroupAttendeeConflictData;

    /**
     * Represents an unresolvable attendee or an attendee that is not a user,
     * distribution list, or contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_UnknownAttendeeConflictData
     */
    public $UnknownAttendeeConflictData;
}
