<?php
/**
 * Definition of the GetEventsResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetEventsResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetEventsResponseMessageType extends EWSType {
	/**
	 * Notification property
	 * 
	 * @var EWSType_NotificationType
	 */
	public $Notification;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Notification',
				'required' => false,
				'type' => 'NotificationType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetEventsResponseMessageType