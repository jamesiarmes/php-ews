<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SuggestionsViewOptionsType
 *
 *
 * XSD Type: SuggestionsViewOptionsType
 *
 * @method SuggestionsViewOptionsType getGoodThreshold()
 * @method SuggestionsViewOptionsType setGoodThreshold($goodThreshold)
 * @method SuggestionsViewOptionsType getMaximumResultsByDay()
 * @method SuggestionsViewOptionsType setMaximumResultsByDay($maximumResultsByDay)
 * @method SuggestionsViewOptionsType getMaximumNonWorkHourResultsByDay()
 * @method SuggestionsViewOptionsType
 * setMaximumNonWorkHourResultsByDay($maximumNonWorkHourResultsByDay)
 * @method SuggestionsViewOptionsType getMeetingDurationInMinutes()
 * @method SuggestionsViewOptionsType
 * setMeetingDurationInMinutes($meetingDurationInMinutes)
 * @method SuggestionsViewOptionsType getMinimumSuggestionQuality()
 * @method SuggestionsViewOptionsType
 * setMinimumSuggestionQuality($minimumSuggestionQuality)
 * @method SuggestionsViewOptionsType getDetailedSuggestionsWindow()
 * @method SuggestionsViewOptionsType
 * setDetailedSuggestionsWindow($detailedSuggestionsWindow)
 * @method SuggestionsViewOptionsType getCurrentMeetingTime()
 * @method SuggestionsViewOptionsType setCurrentMeetingTime($currentMeetingTime)
 * @method SuggestionsViewOptionsType getGlobalObjectId()
 * @method SuggestionsViewOptionsType setGlobalObjectId($globalObjectId)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\DurationType $detailedSuggestionsWindow
     */
    protected $detailedSuggestionsWindow = null;

    /**
     * @property \DateTime $currentMeetingTime
     */
    protected $currentMeetingTime = null;

    /**
     * @property string $globalObjectId
     */
    protected $globalObjectId = null;


}

