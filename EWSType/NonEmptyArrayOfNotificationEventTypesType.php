<?php
/**
 * Definition of the NonEmptyArrayOfNotificationEventTypesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfNotificationEventTypesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfNotificationEventTypesType extends EWSType {
	/**
	 * EventType property
	 * 
	 * @var EWSType_NotificationEventTypeType
	 */
	public $EventType;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'EventType',
				'required' => false,
				'type' => 'NotificationEventTypeType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfNotificationEventTypesType