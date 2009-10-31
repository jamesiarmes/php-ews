<?php
/**
 * Definition of the InternetHeaderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the InternetHeaderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_InternetHeaderType extends EWSType {
	/**
	 * _ property
	 * 
	 * @var string
	 */
	public $_;

	/**
	 * HeaderName property
	 * 
	 * @var string
	 */
	public $HeaderName;

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
				'name' => 'HeaderName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class InternetHeaderType