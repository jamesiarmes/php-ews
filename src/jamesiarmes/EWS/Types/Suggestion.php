<?php
/**
 * Contains Suggestion.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single meeting suggestion.
 *
 * @package jamesiarmes\EWS\Types
 */
class Suggestion extends EWSType
{
    /**
     * Contains an array of information that describes conflicts between users
     * and resources and the suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;

    /**
     * Represents whether the suggested meeting time occurs during scheduled
     * work hours.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsWorkTime;

    /**
     * Represents a suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $MeetingTime;

    /**
     * Represents the quality of the suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var SuggestionQuality
     */
    public $SuggestionQuality;
}
