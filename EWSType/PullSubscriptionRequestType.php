<?php
/**
 * Definition of the PullSubscriptionRequestType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PullSubscriptionRequestType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PullSubscriptionRequestType extends EWSType {
	/**
	 * Timeout property
	 * 
	 * @var EWSType_SubscriptionTimeoutType
	 */
	public $Timeout;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Timeout',
				'required' => false,
				'type' => 'SubscriptionTimeoutType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PullSubscriptionRequestType