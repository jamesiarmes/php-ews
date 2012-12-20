<?php
/**
 * Definition of the GroupAttendeeConflictData type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GroupAttendeeConflictData type
 */
class EWSType_GroupAttendeeConflictData extends EWSType
{
    /**
     * NumberOfMembers property
     *
     * @var integer
     */
    public $NumberOfMembers;

    /**
     * NumberOfMembersAvailable property
     *
     * @var integer
     */
    public $NumberOfMembersAvailable;

    /**
     * NumberOfMembersWithConflict property
     *
     * @var integer
     */
    public $NumberOfMembersWithConflict;

    /**
     * NumberOfMembersWithNoData property
     *
     * @var integer
     */
    public $NumberOfMembersWithNoData;
}
