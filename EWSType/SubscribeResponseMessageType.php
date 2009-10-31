<?php
/**
 * Definition of the SubscribeResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SubscribeResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SubscribeResponseMessageType extends EWSType {
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
} // end class SubscribeResponseMessageType