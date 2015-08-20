<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SuggestionType
 *
 *
 * XSD Type: Suggestion
 *
 * @method SuggestionType getMeetingTime()
 * @method SuggestionType setMeetingTime(\DateTime $meetingTime)
 * @method SuggestionType getIsWorkTime()
 * @method SuggestionType setIsWorkTime(boolean $isWorkTime)
 * @method SuggestionType getSuggestionQuality()
 * @method SuggestionType setSuggestionQuality(string $suggestionQuality)
 * @method SuggestionType getAttendeeConflictDataArray()
 * @method SuggestionType setAttendeeConflictDataArray(ArrayOfAttendeeConflictDataType $attendeeConflictDataArray)
 */
class SuggestionType extends Type
{

    /**
     * @property \DateTime $meetingTime
     */
    protected $meetingTime = null;

    protected $_typeMap = array(
        'meetingTime' => 'dateTime',
    );

    /**
     * @property boolean $isWorkTime
     */
    protected $isWorkTime = null;

    /**
     * @property string $suggestionQuality
     */
    protected $suggestionQuality = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ArrayOfAttendeeConflictDataType
     * $attendeeConflictDataArray
     */
    protected $attendeeConflictDataArray = null;
}
