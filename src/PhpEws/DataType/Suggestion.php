<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the Suggestion type
 */
class Suggestion extends DataType
{
    /**
     * MeetingTime property
     *
     * @var \DateTime
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
