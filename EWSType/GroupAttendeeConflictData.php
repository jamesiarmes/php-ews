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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'NumberOfMembers',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'NumberOfMembersAvailable',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'NumberOfMembersWithConflict',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'NumberOfMembersWithNoData',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
