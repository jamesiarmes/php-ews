<?php
/**
 * Definition of the IndividualAttendeeConflictData type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the IndividualAttendeeConflictData type
 */
class IndividualAttendeeConflictData extends PhpEws\EWSType
{
    /**
     * BusyType property
     *
     * @var LegacyFreeBusyType
     */
    public $BusyType;
}
