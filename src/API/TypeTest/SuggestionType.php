<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SuggestionType
 *
 *
 * XSD Type: Suggestion
 *
 * @method SuggestionType getMeetingTime()
 * @method SuggestionType setMeetingTime($meetingTime)
 * @method SuggestionType getIsWorkTime()
 * @method SuggestionType setIsWorkTime($isWorkTime)
 * @method SuggestionType getSuggestionQuality()
 * @method SuggestionType setSuggestionQuality($suggestionQuality)
 * @method SuggestionType getAttendeeConflictDataArray()
 * @method SuggestionType setAttendeeConflictDataArray($attendeeConflictDataArray)
 */
class SuggestionType extends Type
{

    /**
     * @property \DateTime $meetingTime
     */
    protected $meetingTime = null;

    /**
     * @property boolean $isWorkTime
     */
    protected $isWorkTime = null;

    /**
     * @property string $suggestionQuality
     */
    protected $suggestionQuality = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfAttendeeConflictDataType
     * $attendeeConflictDataArray
     */
    protected $attendeeConflictDataArray = null;


}

