<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing GroupAttendeeConflictDataType
 *
 *
 * XSD Type: GroupAttendeeConflictData
 *
 * @method GroupAttendeeConflictDataType getNumberOfMembers()
 * @method GroupAttendeeConflictDataType setNumberOfMembers($numberOfMembers)
 * @method GroupAttendeeConflictDataType getNumberOfMembersAvailable()
 * @method GroupAttendeeConflictDataType
 * setNumberOfMembersAvailable($numberOfMembersAvailable)
 * @method GroupAttendeeConflictDataType getNumberOfMembersWithConflict()
 * @method GroupAttendeeConflictDataType
 * setNumberOfMembersWithConflict($numberOfMembersWithConflict)
 * @method GroupAttendeeConflictDataType getNumberOfMembersWithNoData()
 * @method GroupAttendeeConflictDataType
 * setNumberOfMembersWithNoData($numberOfMembersWithNoData)
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

