<?php
/**
 * Definition of the ProxySecurityContextType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ProxySecurityContextType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ProxySecurityContextType extends EWSType {
	/**
	 * _ property
	 * 
	 * @var EWSType_base64Binary
	 */
	public $_;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => '_',
				'required' => false,
				'type' => 'base64Binary',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ProxySecurityContextType