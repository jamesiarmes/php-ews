<?php
/**
 * Definition of the BaseDelegateResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseDelegateResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseDelegateResponseMessageType extends EWSType {
	/**
	 * ResponseMessages property
	 * 
	 * @var EWSType_ArrayOfDelegateUserResponseMessageType
	 */
	public $ResponseMessages;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ResponseMessages',
				'required' => false,
				'type' => 'ArrayOfDelegateUserResponseMessageType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseDelegateResponseMessageType