<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing GroupAttendeeConflictDataType
 *
 *
 * XSD Type: GroupAttendeeConflictData
 *
 * @method GroupAttendeeConflictDataType getNumberOfMembers()
 * @method GroupAttendeeConflictDataType setNumberOfMembers(integer $numberOfMembers)
 * @method GroupAttendeeConflictDataType getNumberOfMembersAvailable()
 * @method GroupAttendeeConflictDataType setNumberOfMembersAvailable(integer $numberOfMembersAvailable)
 * @method GroupAttendeeConflictDataType getNumberOfMembersWithConflict()
 * @method GroupAttendeeConflictDataType setNumberOfMembersWithConflict(integer $numberOfMembersWithConflict)
 * @method GroupAttendeeConflictDataType getNumberOfMembersWithNoData()
 * @method GroupAttendeeConflictDataType setNumberOfMembersWithNoData(integer $numberOfMembersWithNoData)
 */
class GroupAttendeeConflictDataType extends AttendeeConflictDataType
{

    /**
     * @property integer $numberOfMembers
     */
    protected $numberOfMembers = null;

    /**
     * @property integer $numberOfMembersAvailable
     */
    protected $numberOfMembersAvailable = null;

    /**
     * @property integer $numberOfMembersWithConflict
     */
    protected $numberOfMembersWithConflict = null;

    /**
     * @property integer $numberOfMembersWithNoData
     */
    protected $numberOfMembersWithNoData = null;
}
