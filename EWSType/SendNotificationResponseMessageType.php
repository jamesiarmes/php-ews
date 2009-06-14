<?php
/**
 * Definition of the SendNotificationResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SendNotificationResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SendNotificationResponseMessageType {
	/**
	 * Notification property
	 * 
	 * @var EWSType_NotificationType
	 */
	public $Notification;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'Notification',
				'required' => false,
				'type' => 'NotificationType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SendNotificationResponseMessageType