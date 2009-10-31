<?php
/**
 * Definition of the SuggestionsResponseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SuggestionsResponseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SuggestionsResponseType extends EWSType {
	/**
	 * ResponseMessage property
	 * 
	 * @var EWSType_ResponseMessageType
	 */
	public $ResponseMessage;

	/**
	 * SuggestionDayResultArray property
	 * 
	 * @var EWSType_ArrayOfSuggestionDayResult
	 */
	public $SuggestionDayResultArray;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ResponseMessage',
				'required' => false,
				'type' => 'ResponseMessageType',
			),
			array(
				'name' => 'SuggestionDayResultArray',
				'required' => false,
				'type' => 'ArrayOfSuggestionDayResult',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SuggestionsResponseType