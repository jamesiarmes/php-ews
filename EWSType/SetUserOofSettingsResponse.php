<?php
/**
 * Definition of the SetUserOofSettingsResponse type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SetUserOofSettingsResponse type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SetUserOofSettingsResponse {
	/**
	 * ResponseMessage property
	 * 
	 * @var EWSType_ResponseMessageType
	 */
	public $ResponseMessage;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'ResponseMessage',
				'required' => false,
				'type' => 'ResponseMessageType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SetUserOofSettingsResponse