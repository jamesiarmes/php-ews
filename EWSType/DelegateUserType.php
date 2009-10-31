<?php
/**
 * Definition of the DelegateUserType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DelegateUserType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DelegateUserType extends EWSType {
	/**
	 * UserId property
	 * 
	 * @var EWSType_UserIdType
	 */
	public $UserId;

	/**
	 * DelegatePermissions property
	 * 
	 * @var EWSType_DelegatePermissionsType
	 */
	public $DelegatePermissions;

	/**
	 * ReceiveCopiesOfMeetingMessages property
	 * 
	 * @var EWSType_boolean
	 */
	public $ReceiveCopiesOfMeetingMessages;

	/**
	 * ViewPrivateItems property
	 * 
	 * @var EWSType_boolean
	 */
	public $ViewPrivateItems;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'UserId',
				'required' => false,
				'type' => 'UserIdType',
			),
			array(
				'name' => 'DelegatePermissions',
				'required' => false,
				'type' => 'DelegatePermissionsType',
			),
			array(
				'name' => 'ReceiveCopiesOfMeetingMessages',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'ViewPrivateItems',
				'required' => false,
				'type' => 'boolean',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DelegateUserType