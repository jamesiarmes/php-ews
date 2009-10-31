<?php
/**
 * Definition of the GetUserOofSettingsRequest type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetUserOofSettingsRequest type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetUserOofSettingsRequest extends EWSType {
	/**
	 * Mailbox property
	 * 
	 * @var EWSType_EmailAddress
	 */
	public $Mailbox;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Mailbox',
				'required' => false,
				'type' => 'EmailAddress',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetUserOofSettingsRequest