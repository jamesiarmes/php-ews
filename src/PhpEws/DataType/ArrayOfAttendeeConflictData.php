<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ArrayOfAttendeeConflictData type
 */
class ArrayOfAttendeeConflictData extends DataType
{
    /**
     * UnknownAttendeeConflictData property
     *
     * @var EWSType_UnknownAttendeeConflictData
     */
    public $UnknownAttendeeConflictData;

    /**
     * IndividualAttendeeConflictData property
     *
     * @var EWSType_IndividualAttendeeConflictData
     */
    public $IndividualAttendeeConflictData;

    /**
     * TooBigGroupAttendeeConflictData property
     *
     * @var EWSType_TooBigGroupAttendeeConflictData
     */
    public $TooBigGroupAttendeeConflictData;

    /**
     * GroupAttendeeConflictData property
     *
     * @var EWSType_GroupAttendeeConflictData
     */
    public $GroupAttendeeConflictData;
}
