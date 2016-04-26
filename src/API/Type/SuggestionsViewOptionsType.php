<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SuggestionsViewOptionsType
 *
 *
 * XSD Type: SuggestionsViewOptionsType
 *
 * @method integer getGoodThreshold()
 * @method SuggestionsViewOptionsType setGoodThreshold(integer $goodThreshold)
 * @method integer getMaximumResultsByDay()
 * @method SuggestionsViewOptionsType setMaximumResultsByDay(integer $maximumResultsByDay)
 * @method integer getMaximumNonWorkHourResultsByDay()
 * @method SuggestionsViewOptionsType setMaximumNonWorkHourResultsByDay(integer $maximumNonWorkHourResultsByDay)
 * @method integer getMeetingDurationInMinutes()
 * @method SuggestionsViewOptionsType setMeetingDurationInMinutes(integer $meetingDurationInMinutes)
 * @method string getMinimumSuggestionQuality()
 * @method SuggestionsViewOptionsType setMinimumSuggestionQuality(string $minimumSuggestionQuality)
 * @method DurationType getDetailedSuggestionsWindow()
 * @method SuggestionsViewOptionsType setDetailedSuggestionsWindow(DurationType $detailedSuggestionsWindow)
 * @method \DateTime getCurrentMeetingTime()
 * @method SuggestionsViewOptionsType setCurrentMeetingTime(\DateTime $currentMeetingTime)
 * @method string getGlobalObjectId()
 * @method SuggestionsViewOptionsType setGlobalObjectId(string $globalObjectId)
 */
class SuggestionsViewOptionsType extends Type
{

    /**
     * @var integer
     */
    protected $goodThreshold = null;

    /**
     * @var integer
     */
    protected $maximumResultsByDay = null;

    /**
     * @var integer
     */
    protected $maximumNonWorkHourResultsByDay = null;

    /**
     * @var integer
     */
    protected $meetingDurationInMinutes = null;

    /**
     * @var string
     */
    protected $minimumSuggestionQuality = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DurationType
     */
    protected $detailedSuggestionsWindow = null;

    /**
     * @var \DateTime
     */
    protected $currentMeetingTime = null;

    protected $_typeMap = array(
        'currentMeetingTime' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $globalObjectId = null;
}
