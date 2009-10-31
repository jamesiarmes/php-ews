<?php
/**
 * Definition of the PushSubscriptionRequestType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PushSubscriptionRequestType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PushSubscriptionRequestType extends EWSType {
	/**
	 * StatusFrequency property
	 * 
	 * @var EWSType_SubscriptionStatusFrequencyType
	 */
	public $StatusFrequency;

	/**
	 * URL property
	 * 
	 * @var string
	 */
	public $URL;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'StatusFrequency',
				'required' => false,
				'type' => 'SubscriptionStatusFrequencyType',
			),
			array(
				'name' => 'URL',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PushSubscriptionRequestType