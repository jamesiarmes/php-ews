<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GroupAttendeeConflictData.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents aggregate conflict information about the number of users who are
 * available, the number of users who have conflicts, and the number of users
 * who do not have availability information in a distribution list for a
 * suggested meeting time.
 *
 * @package php-ews\Type
 */
class GroupAttendeeConflictData extends AttendeeConflictData
{
    /**
     * Represents the number of users, resources, and rooms in a distribution
     * list.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumberOfMembers;

    /**
     * Represents the number of distribution list members who are available for
     * a suggested meeting time.
     *
     * This element represents members for whom the status is Free.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumberOfMembersAvailable;

    /**
     * Represents the number of distribution list members who have a conflict
     * with a suggested meeting time.
     *
     * This element represents members who have a Busy, OOF, or Tentative status.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumberOfMembersWithConflict;

    /**
     * Represents the number of group members who do not have published
     * free/busy data to compare to a suggested meeting time.
     *
     * This element represents members of a distribution list that is too large
     * or members who have No Data status.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumberOfMembersWithNoData;
}
