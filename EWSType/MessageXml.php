<?php
/**
 * Definition of the MessageXml type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the MessageXml type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_MessageXml extends EWSType {
	/**
	 * any property
	 * 
	 * @var string
	 */
	public $any;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'any',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class MessageXml