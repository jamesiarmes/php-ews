<?php
/**
 * Definition of the ContactsViewType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ContactsViewType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ContactsViewType extends EWSType {
	/**
	 * InitialName property
	 * 
	 * @var string
	 */
	public $InitialName;

	/**
	 * FinalName property
	 * 
	 * @var string
	 */
	public $FinalName;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'InitialName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'FinalName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ContactsViewType