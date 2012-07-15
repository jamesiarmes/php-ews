<?php
/**
 * Definition of the SuggestionsViewOptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SuggestionsViewOptionsType type
 */
class EWSType_SuggestionsViewOptionsType extends EWSType
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'GoodThreshold',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'MaximumResultsByDay',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'MaximumNonWorkHourResultsByDay',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'MeetingDurationInMinutes',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'MinimumSuggestionQuality',
                'required' => false,
                'type' => 'SuggestionQuality',
            ),
            array(
                'name' => 'DetailedSuggestionsWindow',
                'required' => false,
                'type' => 'Duration',
            ),
            array(
                'name' => 'CurrentMeetingTime',
                'required' => false,
                'type' => 'dateTime',
            ),
            array(
                'name' => 'GlobalObjectId',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
