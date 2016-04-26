<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing GroupAttendeeConflictDataType
 *
 *
 * XSD Type: GroupAttendeeConflictData
 *
 * @method integer getNumberOfMembers()
 * @method GroupAttendeeConflictDataType setNumberOfMembers(integer $numberOfMembers)
 * @method integer getNumberOfMembersAvailable()
 * @method GroupAttendeeConflictDataType setNumberOfMembersAvailable(integer $numberOfMembersAvailable)
 * @method integer getNumberOfMembersWithConflict()
 * @method GroupAttendeeConflictDataType setNumberOfMembersWithConflict(integer $numberOfMembersWithConflict)
 * @method integer getNumberOfMembersWithNoData()
 * @method GroupAttendeeConflictDataType setNumberOfMembersWithNoData(integer $numberOfMembersWithNoData)
 */
class GroupAttendeeConflictDataType extends AttendeeConflictDataType
{

    /**
     * @var integer
     */
    protected $numberOfMembers = null;

    /**
     * @var integer
     */
    protected $numberOfMembersAvailable = null;

    /**
     * @var integer
     */
    protected $numberOfMembersWithConflict = null;

    /**
     * @var integer
     */
    protected $numberOfMembersWithNoData = null;
}
