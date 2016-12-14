<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SuggestionsViewOptionsType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines  the options for obtaining meeting suggestion information.
 *
 * @package php-ews\Type
 */
class SuggestionsViewOptionsType extends Type
{
    /**
     * Represents the start time of a meeting that you want to update with the
     * suggested meeting time results.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $CurrentMeetingTime;

    /**
     * Identifies the time span that is queried for detailed information about
     * suggested meeting times.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\Duration
     */
    public $DetailedSuggestionsWindow;

    /**
     * This element is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $GlobalObjectId;

    /**
     * Specifies the percentage of attendees that must have the time period open
     * for the time period to qualify as a good suggested meeting time.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $GoodThreshold;

    /**
     * Specifies the number of suggested results for meeting times outside
     * regular working hours per day.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MaximumNonWorkHourResultsByDay;

    /**
     * Specifies the number of suggested meeting times per day returned in the
     * response.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MaximumResultsByDay;

    /**
     * Specifies the length of the meeting to be suggested.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MeetingDurationInMinutes;

    /**
     * Specifies the quality of meeting suggestions to be returned in the
     * response.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SuggestionQuality
     */
    public $MinimumSuggestionQuality;
}
