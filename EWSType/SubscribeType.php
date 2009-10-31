<?php
/**
 * Definition of the SubscribeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SubscribeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SubscribeType extends EWSType {
	/**
	 * PullSubscriptionRequest property
	 * 
	 * @var EWSType_PullSubscriptionRequestType
	 */
	public $PullSubscriptionRequest;

	/**
	 * PushSubscriptionRequest property
	 * 
	 * @var EWSType_PushSubscriptionRequestType
	 */
	public $PushSubscriptionRequest;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'PullSubscriptionRequest',
				'required' => false,
				'type' => 'PullSubscriptionRequestType',
			),
			array(
				'name' => 'PushSubscriptionRequest',
				'required' => false,
				'type' => 'PushSubscriptionRequestType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SubscribeType