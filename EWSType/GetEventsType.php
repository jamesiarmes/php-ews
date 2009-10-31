<?php
/**
 * Definition of the GetEventsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetEventsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetEventsType extends EWSType {
	/**
	 * SubscriptionId property
	 * 
	 * @var EWSType_SubscriptionIdType
	 */
	public $SubscriptionId;

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
				'name' => 'SubscriptionId',
				'required' => false,
				'type' => 'SubscriptionIdType',
			),
			array(
				'name' => 'Watermark',
				'required' => false,
				'type' => 'WatermarkType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetEventsType