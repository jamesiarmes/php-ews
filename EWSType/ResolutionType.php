<?php
/**
 * Definition of the ResolutionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ResolutionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ResolutionType extends EWSType {
	/**
	 * Mailbox property
	 * 
	 * @var EWSType_EmailAddressType
	 */
	public $Mailbox;

	/**
	 * Contact property
	 * 
	 * @var EWSType_ContactItemType
	 */
	public $Contact;

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
			array(
				'name' => 'Contact',
				'required' => false,
				'type' => 'ContactItemType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ResolutionType