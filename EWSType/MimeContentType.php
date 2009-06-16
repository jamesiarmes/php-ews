<?php
/**
 * Definition of the MimeContentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the MimeContentType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_MimeContentType {
	/**
	 * _ property
	 * 
	 * @var EWSType_string
	 */
	public $_;

	/**
	 * CharacterSet property
	 * 
	 * @var EWSType_string
	 */
	public $CharacterSet;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => '_',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'CharacterSet',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class MimeContentType