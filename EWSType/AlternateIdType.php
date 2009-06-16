<?php
/**
 * Definition of the AlternateIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AlternateIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AlternateIdType {
	/**
	 * Id property
	 * 
	 * @var EWSType_string
	 */
	public $Id;

	/**
	 * Mailbox property
	 * 
	 * @var EWSType_NonEmptyStringType
	 */
	public $Mailbox;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Id',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Mailbox',
				'required' => false,
				'type' => 'NonEmptyStringType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AlternateIdType