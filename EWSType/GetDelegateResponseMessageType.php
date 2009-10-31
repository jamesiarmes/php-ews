<?php
/**
 * Definition of the GetDelegateResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetDelegateResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetDelegateResponseMessageType extends EWSType {
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
				'name' => 'DeliverMeetingRequests',
				'required' => false,
				'type' => 'DeliverMeetingRequestsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetDelegateResponseMessageType