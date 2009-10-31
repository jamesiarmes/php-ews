<?php
/**
 * Definition of the GetUserAvailabilityResponseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetUserAvailabilityResponseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetUserAvailabilityResponseType extends EWSType {
	/**
	 * FreeBusyResponseArray property
	 * 
	 * @var EWSType_ArrayOfFreeBusyResponse
	 */
	public $FreeBusyResponseArray;

	/**
	 * SuggestionsResponse property
	 * 
	 * @var EWSType_SuggestionsResponseType
	 */
	public $SuggestionsResponse;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FreeBusyResponseArray',
				'required' => false,
				'type' => 'ArrayOfFreeBusyResponse',
			),
			array(
				'name' => 'SuggestionsResponse',
				'required' => false,
				'type' => 'SuggestionsResponseType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetUserAvailabilityResponseType