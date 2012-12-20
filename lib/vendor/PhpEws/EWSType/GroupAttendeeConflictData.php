<?php
/**
 * Definition of the GroupAttendeeConflictData type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the GroupAttendeeConflictData type
 */
class GroupAttendeeConflictData extends EWSType
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
