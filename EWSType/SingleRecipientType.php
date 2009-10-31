<?php
/**
 * Definition of the SingleRecipientType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SingleRecipientType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SingleRecipientType extends EWSType {
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
} // end class SingleRecipientType