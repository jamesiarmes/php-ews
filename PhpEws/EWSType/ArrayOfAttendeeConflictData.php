<?php
/**
 * Definition of the ArrayOfAttendeeConflictData type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ArrayOfAttendeeConflictData type
 */
class ArrayOfAttendeeConflictData extends EWSType
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
