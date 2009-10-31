<?php
/**
 * Definition of the SetUserOofSettingsRequest type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SetUserOofSettingsRequest type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SetUserOofSettingsRequest extends EWSType {
	/**
	 * Mailbox property
	 * 
	 * @var EWSType_EmailAddress
	 */
	public $Mailbox;

	/**
	 * UserOofSettings property
	 * 
	 * @var EWSType_UserOofSettings
	 */
	public $UserOofSettings;

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
			array(
				'name' => 'UserOofSettings',
				'required' => false,
				'type' => 'UserOofSettings',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SetUserOofSettingsRequest