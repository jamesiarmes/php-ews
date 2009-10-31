<?php
/**
 * Definition of the RequestServerVersion type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the RequestServerVersion type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_RequestServerVersion extends EWSType {
	/**
	 * Version property
	 * 
	 * @var EWSType_ExchangeVersionType
	 */
	public $Version;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Version',
				'required' => false,
				'type' => 'ExchangeVersionType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class RequestServerVersion