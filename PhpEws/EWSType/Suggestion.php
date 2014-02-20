<?php
/**
 * Definition of the Suggestion type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the Suggestion type
 */
class EWSType_Suggestion extends EWSType
{
    /**
     * MeetingTime property
     *
     * @var EWSType_dateTime
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
     * @var EWSType_SuggestionQuality
     */
    public $SuggestionQuality;

    /**
     * AttendeeConflictDataArray property
     *
     * @var EWSType_ArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;
}
