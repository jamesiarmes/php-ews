<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SuggestionsViewOptionsType
 *
 *
 * XSD Type: SuggestionsViewOptionsType
 *
 * @method SuggestionsViewOptionsType getGoodThreshold()
 * @method SuggestionsViewOptionsType setGoodThreshold(integer $goodThreshold)
 * @method SuggestionsViewOptionsType getMaximumResultsByDay()
 * @method SuggestionsViewOptionsType setMaximumResultsByDay(integer $maximumResultsByDay)
 * @method SuggestionsViewOptionsType getMaximumNonWorkHourResultsByDay()
 * @method SuggestionsViewOptionsType setMaximumNonWorkHourResultsByDay(integer $maximumNonWorkHourResultsByDay)
 * @method SuggestionsViewOptionsType getMeetingDurationInMinutes()
 * @method SuggestionsViewOptionsType setMeetingDurationInMinutes(integer $meetingDurationInMinutes)
 * @method SuggestionsViewOptionsType getMinimumSuggestionQuality()
 * @method SuggestionsViewOptionsType setMinimumSuggestionQuality(string $minimumSuggestionQuality)
 * @method SuggestionsViewOptionsType getDetailedSuggestionsWindow()
 * @method SuggestionsViewOptionsType setDetailedSuggestionsWindow(DurationType $detailedSuggestionsWindow)
 * @method SuggestionsViewOptionsType getCurrentMeetingTime()
 * @method SuggestionsViewOptionsType setCurrentMeetingTime(\DateTime $currentMeetingTime)
 * @method SuggestionsViewOptionsType getGlobalObjectId()
 * @method SuggestionsViewOptionsType setGlobalObjectId(string $globalObjectId)
 */
class SuggestionsViewOptionsType extends Type
{

    /**
     * @property integer $goodThreshold
     */
    protected $goodThreshold = null;

    /**
     * @property integer $maximumResultsByDay
     */
    protected $maximumResultsByDay = null;

    /**
     * @property integer $maximumNonWorkHourResultsByDay
     */
    protected $maximumNonWorkHourResultsByDay = null;

    /**
     * @property integer $meetingDurationInMinutes
     */
    protected $meetingDurationInMinutes = null;

    /**
     * @property string $minimumSuggestionQuality
     */
    protected $minimumSuggestionQuality = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DurationType $detailedSuggestionsWindow
     */
    protected $detailedSuggestionsWindow = null;

    /**
     * @property \DateTime $currentMeetingTime
     */
    protected $currentMeetingTime = null;

    protected $_typeMap = array(
        'currentMeetingTime' => 'dateTime',
    );

    /**
     * @property string $globalObjectId
     */
    protected $globalObjectId = null;
}
