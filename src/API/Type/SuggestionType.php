<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SuggestionType
 *
 *
 * XSD Type: Suggestion
 *
 * @method \DateTime getMeetingTime()
 * @method SuggestionType setMeetingTime(\DateTime $meetingTime)
 * @method boolean isWorkTime()
 * @method boolean getIsWorkTime()
 * @method SuggestionType setIsWorkTime(boolean $isWorkTime)
 * @method string getSuggestionQuality()
 * @method SuggestionType setSuggestionQuality(string $suggestionQuality)
 * @method ArrayOfAttendeeConflictDataType getAttendeeConflictDataArray()
 * @method SuggestionType setAttendeeConflictDataArray(ArrayOfAttendeeConflictDataType $attendeeConflictDataArray)
 */
class SuggestionType extends Type
{

    /**
     * @var \DateTime
     */
    protected $meetingTime = null;

    protected $_typeMap = array(
        'meetingTime' => 'dateTime',
    );

    /**
     * @var boolean
     */
    protected $isWorkTime = null;

    /**
     * @var string
     */
    protected $suggestionQuality = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfAttendeeConflictDataType
     */
    protected $attendeeConflictDataArray = null;
}
