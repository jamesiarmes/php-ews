<?php
/**
 * Definition of the ArrayOfRecipientsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfRecipientsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfRecipientsType extends EWSType {
	/**
	 * Mailbox property
	 * 
	 * @var EWSType_EmailAddressType
	 */
	public $Mailbox;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Mailbox',
				'required' => false,
				'type' => 'EmailAddressType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfRecipientsType