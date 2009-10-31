<?php
/**
 * Definition of the ArrayOfDelegateUserResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfDelegateUserResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfDelegateUserResponseMessageType extends EWSType {
	/**
	 * DelegateUserResponseMessageType property
	 * 
	 * @var EWSType_DelegateUserResponseMessageType
	 */
	public $DelegateUserResponseMessageType;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'DelegateUserResponseMessageType',
				'required' => false,
				'type' => 'DelegateUserResponseMessageType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfDelegateUserResponseMessageType