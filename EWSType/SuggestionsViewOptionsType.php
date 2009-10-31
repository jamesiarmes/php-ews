<?php
/**
 * Definition of the SuggestionsViewOptionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SuggestionsViewOptionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SuggestionsViewOptionsType extends EWSType {
	/**
	 * GoodThreshold property
	 * 
	 * @var EWSType_int
	 */
	public $GoodThreshold;

	/**
	 * MaximumResultsByDay property
	 * 
	 * @var EWSType_int
	 */
	public $MaximumResultsByDay;

	/**
	 * MaximumNonWorkHourResultsByDay property
	 * 
	 * @var EWSType_int
	 */
	public $MaximumNonWorkHourResultsByDay;

	/**
	 * MeetingDurationInMinutes property
	 * 
	 * @var EWSType_int
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
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'GoodThreshold',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'MaximumResultsByDay',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'MaximumNonWorkHourResultsByDay',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'MeetingDurationInMinutes',
				'required' => false,
				'type' => 'int',
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
		); // end $this->schema
	} // end function __construct()
} // end class SuggestionsViewOptionsType