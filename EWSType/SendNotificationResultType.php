<?php
/**
 * Definition of the SendNotificationResultType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SendNotificationResultType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SendNotificationResultType extends EWSType {
	/**
	 * SubscriptionStatus property
	 * 
	 * @var EWSType_SubscriptionStatusType
	 */
	public $SubscriptionStatus;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SubscriptionStatus',
				'required' => false,
				'type' => 'SubscriptionStatusType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SendNotificationResultType