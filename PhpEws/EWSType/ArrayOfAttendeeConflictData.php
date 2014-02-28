<?php
/**
 * Definition of the ArrayOfAttendeeConflictData type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ArrayOfAttendeeConflictData type
 */
class ArrayOfAttendeeConflictData extends PhpEws\EWSType
{
    /**
     * UnknownAttendeeConflictData property
     *
     * @var UnknownAttendeeConflictData
     */
    public $UnknownAttendeeConflictData;

    /**
     * IndividualAttendeeConflictData property
     *
     * @var IndividualAttendeeConflictData
     */
    public $IndividualAttendeeConflictData;

    /**
     * TooBigGroupAttendeeConflictData property
     *
     * @var TooBigGroupAttendeeConflictData
     */
    public $TooBigGroupAttendeeConflictData;

    /**
     * GroupAttendeeConflictData property
     *
     * @var GroupAttendeeConflictData
     */
    public $GroupAttendeeConflictData;
}
