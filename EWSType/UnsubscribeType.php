<?php
/**
 * Definition of the UnsubscribeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the UnsubscribeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_UnsubscribeType extends EWSType {
	/**
	 * SubscriptionId property
	 * 
	 * @var EWSType_SubscriptionIdType
	 */
	public $SubscriptionId;

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
		); // end $this->schema
	} // end function __construct()
} // end class UnsubscribeType