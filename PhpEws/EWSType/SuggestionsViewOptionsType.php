<?php
/**
 * Definition of the SuggestionsViewOptionsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SuggestionsViewOptionsType type
 */
class SuggestionsViewOptionsType extends PhpEws\EWSType
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
     * @var SuggestionQuality
     */
    public $MinimumSuggestionQuality;

    /**
     * DetailedSuggestionsWindow property
     *
     * @var Duration
     */
    public $DetailedSuggestionsWindow;

    /**
     * CurrentMeetingTime property
     *
     * @var dateTime
     */
    public $CurrentMeetingTime;

    /**
     * GlobalObjectId property
     *
     * @var string
     */
    public $GlobalObjectId;
}
