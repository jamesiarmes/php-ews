<?php
/**
 * Definition of the UpdateDelegateType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the UpdateDelegateType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_UpdateDelegateType extends EWSType {
	/**
	 * DelegateUsers property
	 * 
	 * @var EWSType_ArrayOfDelegateUserType
	 */
	public $DelegateUsers;

	/**
	 * DeliverMeetingRequests property
	 * 
	 * @var EWSType_DeliverMeetingRequestsType
	 */
	public $DeliverMeetingRequests;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'DelegateUsers',
				'required' => false,
				'type' => 'ArrayOfDelegateUserType',
			),
			array(
				'name' => 'DeliverMeetingRequests',
				'required' => false,
				'type' => 'DeliverMeetingRequestsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class UpdateDelegateType