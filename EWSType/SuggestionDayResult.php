<?php
/**
 * Definition of the SuggestionDayResult type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SuggestionDayResult type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SuggestionDayResult extends EWSType {
	/**
	 * Date property
	 * 
	 * @var EWSType_dateTime
	 */
	public $Date;

	/**
	 * DayQuality property
	 * 
	 * @var EWSType_SuggestionQuality
	 */
	public $DayQuality;

	/**
	 * SuggestionArray property
	 * 
	 * @var EWSType_ArrayOfSuggestion
	 */
	public $SuggestionArray;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Date',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'DayQuality',
				'required' => false,
				'type' => 'SuggestionQuality',
			),
			array(
				'name' => 'SuggestionArray',
				'required' => false,
				'type' => 'ArrayOfSuggestion',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SuggestionDayResult