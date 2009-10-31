<?php
/**
 * Definition of the ArrayOfSuggestionDayResult type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfSuggestionDayResult type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfSuggestionDayResult extends EWSType {
	/**
	 * SuggestionDayResult property
	 * 
	 * @var EWSType_SuggestionDayResult
	 */
	public $SuggestionDayResult;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SuggestionDayResult',
				'required' => false,
				'type' => 'SuggestionDayResult',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfSuggestionDayResult