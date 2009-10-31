<?php
/**
 * Definition of the ArrayOfFreeBusyResponse type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfFreeBusyResponse type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfFreeBusyResponse extends EWSType {
	/**
	 * FreeBusyResponse property
	 * 
	 * @var EWSType_FreeBusyResponseType
	 */
	public $FreeBusyResponse;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FreeBusyResponse',
				'required' => false,
				'type' => 'FreeBusyResponseType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfFreeBusyResponse