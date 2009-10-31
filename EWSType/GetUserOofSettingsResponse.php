<?php
/**
 * Definition of the GetUserOofSettingsResponse type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetUserOofSettingsResponse type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetUserOofSettingsResponse extends EWSType {
	/**
	 * ResponseMessage property
	 * 
	 * @var EWSType_ResponseMessageType
	 */
	public $ResponseMessage;

	/**
	 * OofSettings property
	 * 
	 * @var EWSType_UserOofSettings
	 */
	public $OofSettings;

	/**
	 * AllowExternalOof property
	 * 
	 * @var EWSType_ExternalAudience
	 */
	public $AllowExternalOof;

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
				'name' => 'OofSettings',
				'required' => false,
				'type' => 'UserOofSettings',
			),
			array(
				'name' => 'AllowExternalOof',
				'required' => false,
				'type' => 'ExternalAudience',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetUserOofSettingsResponse