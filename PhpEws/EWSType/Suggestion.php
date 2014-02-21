<?php
/**
 * Definition of the Suggestion type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the Suggestion type
 */
class Suggestion extends PhpEws\EWSType
{
    /**
     * MeetingTime property
     *
     * @var dateTime
     */
    public $MeetingTime;

    /**
     * IsWorkTime property
     *
     * @var boolean
     */
    public $IsWorkTime;

    /**
     * SuggestionQuality property
     *
     * @var SuggestionQuality
     */
    public $SuggestionQuality;

    /**
     * AttendeeConflictDataArray property
     *
     * @var ArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;
}
