<?php
/**
 * Definition of the BaseNotificationEventType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseNotificationEventType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseNotificationEventType extends EWSType {
	/**
	 * Watermark property
	 * 
	 * @var EWSType_WatermarkType
	 */
	public $Watermark;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Watermark',
				'required' => false,
				'type' => 'WatermarkType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseNotificationEventType