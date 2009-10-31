<?php
/**
 * Definition of the BaseResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseResponseMessageType extends EWSType {
	/**
	 * ResponseMessages property
	 * 
	 * @var EWSType_ArrayOfResponseMessagesType
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
				'type' => 'ArrayOfResponseMessagesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseResponseMessageType