<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SuggestionsViewOptionsType type
 */
class SuggestionsViewOptionsType extends DataType
{
    /**
     * GoodThreshold property
     *
     * @var integer
     */
    public $GoodThreshold;

    /**
     * MaximumResultsByDay property
     *
     * @var integer
     */
    public $MaximumResultsByDay;

    /**
     * MaximumNonWorkHourResultsByDay property
     *
     * @var integer
     */
    public $MaximumNonWorkHourResultsByDay;

    /**
     * MeetingDurationInMinutes property
     *
     * @var integer
     */
    public $MeetingDurationInMinutes;

    /**
     * MinimumSuggestionQuality property
     *
     * @var EWSType_SuggestionQuality
     */
    public $MinimumSuggestionQuality;

    /**
     * DetailedSuggestionsWindow property
     *
     * @var EWSType_Duration
     */
    public $DetailedSuggestionsWindow;

    /**
     * CurrentMeetingTime property
     *
     * @var EWSType_dateTime
     */
    public $CurrentMeetingTime;

    /**
     * GlobalObjectId property
     *
     * @var string
     */
    public $GlobalObjectId;
}
